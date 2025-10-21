<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\EntegralApiData;
use App\Models\EntegralPropertyImage;
use App\Models\SearchReference;
use App\Models\EmailPropertyAlert;
use Mail;
use App\Mail\EmailNewPropertyAlertToUser;
use Illuminate\Support\Facades\Crypt;

class ImportPropertyController extends Controller
{

  public function index()
  {

    return view('admin.pages.importApiData');
  }
  // DURBAN
  public function durban()
  {

    $apiKey = 'heJ2Hmr5Ax692JkGVtf1oU2bAuRqHK9NDspia25sCyNYWHRjy+BD3AxQhpggFB/O';
    $this->importDataFunction($apiKey, 'durban');
    //  $this->newPropertyAlertToUser();
    return redirect('/admin/importproperty')->with('success', 'Property import successfully');
  }

  // PRETORIA
  public function pretoria()
  {

    $apiKey = 'dwvFM9KwKjZChmcrPDhpIvMi8/O4dFoeghs/Xmrob5h8Q99GT6q+qaCrAONJ7uIc';
    $this->importDataFunction($apiKey, 'pretoria');
    // $this->newPropertyAlertToUser();
    return redirect('/admin/importproperty')->with('success', 'Property import successfully');
  }

  //CAPE TOWN
  public function capeTown()
  {

    $apiKey = 'pdab3oCUefEgYMWcwEbwGaO3YOwyMsCFLHv+J9wRLWEar7Vb+K/AwKoCbJf6vuIF';
    $this->importDataFunction($apiKey, 'capeTown');
    return redirect('/admin/importproperty')->with('success', 'Property import successfully');
  }

  //JOHANNESBURG
  public function johannesBurg()
  {

    $apiKey = 'iJqzkct/9+S333CWawiPzquO43KX2PNfdceo5Y10Y5W9Z/h+WReevEFIujLvrkJ7';
    $this->importDataFunction($apiKey, 'johannesBurg');
    // $this->newPropertyAlertToUser();
    return redirect('/admin/importproperty')->with('success', 'Property import successfully');
  }


  // PORT ELIZABETH
  public function portElizabeth()
  {

    $apiKey = 'oVfwb/YN/rO9Hhj99grZhpzC/5A2yEH0O4GyN+o7gJO01ME5yvJgkJB7UhgI5SWc';
    $this->importDataFunction($apiKey, 'portElizabeth');
    //  $this->newPropertyAlertToUser();
    return redirect('/admin/importproperty')->with('success', 'Property import successfully');
  }

  // east London
  public function eastLondon()
  {
    $apiKey = 'CGkkJkU172ympsbxOYuGGY3OdaHo6CEEXDjESH6ON39gT6l0BQ+GYmFS6Ng58mYf';
    $this->importDataFunction($apiKey, 'eastLondon');
    //  $this->newPropertyAlertToUser();
    return redirect('/admin/importproperty')->with('success', 'Property import successfully');
  }

  public function importDataFunction($apiKey, $api_city_key_name)
  {
    $apiURL = 'https://baseapi.entegral.net/api/v1/properties';
    $postInput = [
      'mandate_status' => 1,
    ];

    // Headers
    $headers = [
      'Token' => $apiKey,
      'Accept' => 'application/json'
    ];

    $response = Http::withHeaders($headers)->get($apiURL, $postInput);
    $responseBody = json_decode($response->getBody(), true);

    if ($responseBody) {
      EntegralApiData::where('api_city_key', $api_city_key_name)->where('api_type_name', 'baseEntegralApi')->delete();
      SearchReference::where('api_city_key', $api_city_key_name)->where('api_type_name', 'baseEntegralApi')->delete();

      for ($r = 0; $r < count($responseBody); $r++) {
        $insertEntegralData =  new EntegralApiData;
        $insertEntegralData->is_property_new = 1;
        $insertEntegralData->api_city_key = $api_city_key_name;
        $insertEntegralData->api_type_name = "baseEntegralApi";
        $insertEntegralData->property_id = $responseBody[$r]['property_id'];
        $insertEntegralData->mandate_saletype = $responseBody[$r]['mandate_saletype'];
        $insertEntegralData->mandate_saletypeunit = $responseBody[$r]['mandate_saletypeunit'];
        $insertEntegralData->mandate_status = $responseBody[$r]['mandate_status'];
        $insertEntegralData->mandate_type = $responseBody[$r]['mandate_type'];
        $insertEntegralData->mandate_startdate = $responseBody[$r]['mandate_startdate'];
        $insertEntegralData->mandate_enddate = $responseBody[$r]['mandate_enddate'];
        if (!empty($responseBody[$r]['price'])) {
          $insertEntegralData->price = $responseBody[$r]['price'];
        }
        $insertEntegralData->property_classification = $responseBody[$r]['property_classification'];
        $insertEntegralData->property_type = $responseBody[$r]['property_type'];
        $insertEntegralData->photo_thumbnail = $responseBody[$r]['photo_thumbnail'];
        $insertEntegralData->country = strtolower($responseBody[$r]['country']);
        $insertEntegralData->province = strtolower($responseBody[$r]['province']);
        $insertEntegralData->town = strtolower($responseBody[$r]['town']);
        $insertEntegralData->suburb = strtolower($responseBody[$r]['suburb']);
        $insertEntegralData->map_location_available = $responseBody[$r]['map_location_available'];
        $insertEntegralData->street_number = ucfirst(strtolower($responseBody[$r]['street_number']));
        $insertEntegralData->street_name = ucfirst(strtolower($responseBody[$r]['street_name']));
        $insertEntegralData->unit_number = ucfirst(strtolower($responseBody[$r]['unit_number']));
        $insertEntegralData->complex_name = ucfirst(strtolower($responseBody[$r]['complex_name']));

        if ($responseBody[$r]['complex_name'] != '' && $responseBody[$r]['unit_number'] != "") {
          $propertyCustomTitle = $responseBody[$r]['unit_number'] . " " . $responseBody[$r]['complex_name'];
        } else {
          $propertyCustomTitle = $responseBody[$r]['street_number'] . " " . $responseBody[$r]['street_name'];
        }

        $insertEntegralData->property_name = ucfirst(strtolower($propertyCustomTitle));

        if (!empty($responseBody[$r]['agents'])) {
          $insertEntegralData->agent_id =  $responseBody[$r]['agents'][0]['id'];
          $insertEntegralData->agent_name = $responseBody[$r]['agents'][0]['full_name'];

          $agentSlug = str_replace(" ", "-", $responseBody[$r]['agents'][0]['full_name']);
          $agentSlug = str_replace("--", "-", $agentSlug);
          $insertEntegralData->agent_name_slug = strtolower($agentSlug);
        }

        $insertEntegralData->added = $responseBody[$r]['added'];
        $insertEntegralData->updated = $responseBody[$r]['updated'];

        if ($responseBody[$r]['location_lat'] == 0 || $responseBody[$r]['location_long'] == 0) {
        } else {
          $insertEntegralData->location_lat = $responseBody[$r]['location_lat'];
          $insertEntegralData->location_long = $responseBody[$r]['location_long'];
        }

        if (!empty($responseBody[$r]['floor_size'])) {
          $insertEntegralData->floor_size = $responseBody[$r]['floor_size'];
        }
        $insertEntegralData->floor_size_unit = $responseBody[$r]['floor_size_unit'];
        if (!empty($responseBody[$r]['land_size'])) {
          $insertEntegralData->land_size = $responseBody[$r]['land_size'];
        }
        $insertEntegralData->land_size_unit = $responseBody[$r]['land_size_unit'];
        $insertEntegralData->pool = $responseBody[$r]['pool'];
        $insertEntegralData->no_pets_allowed = $responseBody[$r]['no_pets_allowed'];
        if (!empty($responseBody[$r]['garages'])) {
          $insertEntegralData->garages = $responseBody[$r]['garages'];
        }

        $insertEntegralData->covered_parking = $responseBody[$r]['covered_parking'];
        $insertEntegralData->open_parking = $responseBody[$r]['open_parking'];

        if (!empty($responseBody[$r]['bedrooms'])) {
          $insertEntegralData->bedrooms = $responseBody[$r]['bedrooms'];
        }
        if (!empty($responseBody[$r]['bathrooms'])) {
          $insertEntegralData->bathrooms = $responseBody[$r]['bathrooms'];
        }

        $insertEntegralData->furnished = $responseBody[$r]['furnished'];
        $insertEntegralData->living_areas = $responseBody[$r]['living_areas'];
        $insertEntegralData->days_on_market = $responseBody[$r]['days_on_market'];
        $insertEntegralData->days_to_expiry = $responseBody[$r]['days_to_expiry'];
        $insertEntegralData->headline = $responseBody[$r]['headline'];
        $insertEntegralData->description = $responseBody[$r]['description'];
        $insertEntegralData->rates_taxes = $responseBody[$r]['rates_taxes'];
        $insertEntegralData->rates_taxes_unit = $responseBody[$r]['rates_taxes_unit'];
        $insertEntegralData->levy = $responseBody[$r]['levy'];
        $insertEntegralData->levy_unit = $responseBody[$r]['levy_unit'];
        $insertEntegralData->photos = (!empty($responseBody[$r]['photos'])) ? count($responseBody[$r]['photos']) : "0";
        $insertEntegralData->contacts = '';
        $insertEntegralData->additional_charges = $responseBody[$r]['description'];
        $insertEntegralData->security_tag = null;
        $insertEntegralData->staff_tag = null;
        $insertEntegralData->study_tag = null;
        $insertEntegralData->video_url = null;
        $photoArrayFeatureImage =  $responseBody[$r]['photos'];
        $insertEntegralData->news_featured_image = (!empty($photoArrayFeatureImage)) ? $photoArrayFeatureImage[0]['url_large'] : $responseBody[$r]['photo_thumbnail'];
        $insertEntegralData->files = "";
        $insertEntegralData->links = "";
        $getFeatures =  $responseBody[$r]['features'];

        if (!empty($getFeatures)) {
          $fieldArray = [];
          for ($fa = 0; $fa < count($getFeatures); $fa++) {
            array_push($fieldArray, $getFeatures[$fa]['field']);
          }
          $valueFields =  implode(",", $fieldArray);
          $insertEntegralData->features = $valueFields;
          $insertEntegralData->separate_toilet  = $valueFields;
          $insertEntegralData->carpeted_tag = $valueFields;
        }
        $insertEntegralData->save();
        $search_name_suburb = $responseBody[$r]['suburb'];
        $searchReference_suburb =  SearchReference::where('search_name', $search_name_suburb)->first();

        if (empty($searchReference_suburb)) {
          SearchReference::create([
            'search_name' => $search_name_suburb,
            'search_type' => 'suburb',
            'api_city_key' => $api_city_key_name,
            'api_type_name' => 'baseEntegralApi'
          ]);
        }

        $search_name_province = $responseBody[$r]['province'];
        $searchReference_province =  SearchReference::where('search_name', $search_name_province)->first();
        if (empty($searchReference_province)) {
          SearchReference::create([
            'search_name' => $search_name_province,
            'search_type' => 'province',
            'api_city_key' => $api_city_key_name,
            'api_type_name' => 'baseEntegralApi'
          ]);
        }

        $search_name_town = $responseBody[$r]['suburb'];
        $searchReference_town =  SearchReference::where('search_name', $search_name_town)->first();
        if (empty($searchReference_town)) {
          SearchReference::create([
            'search_name' => $search_name_town,
            'search_type' => 'town',
            'api_city_key' => $api_city_key_name,
            'api_type_name' => 'baseEntegralApi'
          ]);
        }
      }
    }
  }

  public function newPropertyAlertToUser()
  {

    $emailPropertyAlert =   EmailPropertyAlert::where('check_status', 1)->get();

    $r  = array();
    foreach ($emailPropertyAlert as $emailPropertyAlerts) {
      $dd =  $this->filterByUserParameter($emailPropertyAlerts);
      $r[] = $dd;
      if (!$dd->isEmpty()) {
        Mail::to($emailPropertyAlerts->email)->send(new EmailNewPropertyAlertToUser($dd, Crypt::encryptString($emailPropertyAlerts->email), $emailPropertyAlerts));
      }
    }


    return redirect('/')->with('success', 'email for property alerty successfully.');
  }


  public function filterByUserParameter($parameters)
  {
    // custom filter parameter
    $sr = "";
    $keyWordCity = $parameters->region . "," . $parameters->suburg;

    //NEWCODE  
    $explode = explode(",", $keyWordCity);

    $array = array();
    foreach ($explode as $res) {
      $array[] = '"' . $res . '"';
    }
    $implode = implode("  ", $array);


    $sr = "MATCH(town,suburb,province) AGAINST('" . $implode . "' IN BOOLEAN MODE)";


    // if ($parameters->property_type != "")
    // {
    //     $sr .= " AND  property_type = '" . $parameters->property_type . "'";
    // }
    // if ($parameters->listing_type != "")
    // {
    //     $sr .= " AND  property_classification = '" . $parameters->listing_type . "'";
    // }

    // if ($parameters->minprice != "" && $parameters->maxprice != "")
    // {

    //     $sr .= " AND price BETWEEN " . $parameters->minprice . " AND " . $parameters->maxprice . "";

    // }


    $drt =      EntegralApiData::WhereRaw($sr)->toSql();

    return $propertyDatas = EntegralApiData::WhereRaw($sr)->where('mandate_saletype', $parameters->property_for)->where('property_classification', $parameters->listing_type)->whereIn('property_type', explode(",", $parameters->property_type))->whereBetween('price', [$parameters->minprice, $parameters->maxprice])->orderBy('id', 'desc')->take(6)->get();
  }



  public function getPropertyLatLong($street_number, $street_name, $suburb, $town, $province, $country)
  {
    $address = $street_number . "," . $street_name . "," . $suburb . "," . $town . "," . $province . "," . $country;
    $apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=AIzaSyDFxIh8LLG3npkRjS4hGeFRthWa0KQq3ts';

    $response = Http::get($apiURL);
    $statusCode = $response->status();
    $responseBody = json_decode($response->getBody(), true);

    if ($responseBody['status'] == "OK") {

      return  $data = [
        'lat' => $responseBody['results'][0]['geometry']['location']['lat'],
        'lng' => $responseBody['results'][0]['geometry']['location']['lng']
      ];
    } else {
      return  $data = [
        'lat' => "",
        'lng' => ""
      ];
    }
  }
}
