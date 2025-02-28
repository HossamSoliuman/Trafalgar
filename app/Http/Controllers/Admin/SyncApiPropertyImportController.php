<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\EntegralApiData;
use App\Models\SearchReference;
use Redirect;


class SyncApiPropertyImportController extends Controller
{
    public function index()
    {

        return view('admin.pages.importSyncApiData');
    }


    // unibase_sandbox
    public function unibaseApiData()
    {

        // unibase_sandbox
        $userName_unibase_sandbox = 'unibase_sandbox';
        $password_unibase_sandbox = 'dda4d7c3-96ba-462e-80cf-262fee74f745';
        $token_unibase_sandbox = 'Basic ' . base64_encode($userName_unibase_sandbox . ':' . $password_unibase_sandbox);
        $this->importSyncPropertyData($token_unibase_sandbox, $userName_unibase_sandbox);
        return Redirect::back()->with('success', 'Sync api unibase Property import successfully');
    }


    // port_elizabeth
    public function portElizabeth()
    {

        $userName_port_elizabeth = 'Trafalgar Port Elizabeth';
        $password_port_elizabeth = '830ba548-6f44-4d6c-9a89-f5666e30752d';
        $token_port_elizabeth = 'Basic ' . base64_encode($userName_port_elizabeth . ':' . $password_port_elizabeth);
        $this->importSyncPropertyData($token_port_elizabeth, $userName_port_elizabeth);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    // PRETORIA
    public function pretoria()
    {

        $userName_pretoria = 'Trafalgar Property Management Pretoria';
        $password_pretoria = '1da831e1-2d25-4ba1-9a4d-81d605d28130';
        $token_pretoria = 'Basic ' . base64_encode($userName_pretoria . ':' . $password_pretoria);
        $this->importSyncPropertyData($token_pretoria, $userName_pretoria);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    //CAPE TOWN
    public function capeTown()
    {

        $userName_cape_town = 'Trafalgar Property Management Cape Town';
        $password_cape_town = '66aa41d2-b9f3-4d7a-8b5b-ecca1d8ef08c';
        $token_cape_town = 'Basic ' . base64_encode($userName_cape_town . ':' . $password_cape_town);
        $this->importSyncPropertyData($token_cape_town, $userName_cape_town);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    // //JOHANNESBURG
    public function johannesBurg()
    {

        $userName_Johannesburg = 'Trafalgar Property Management Johannesburg';
        $password_Johannesburg = '9389bc73-febc-47cd-8149-b4deac7b6e07';
        $token_Johannesburg = 'Basic ' . base64_encode($userName_Johannesburg . ':' . $password_Johannesburg);
        $this->importSyncPropertyData($token_Johannesburg, $userName_Johannesburg);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }


    // // East London
    public function eastLondon()
    {

        $userName_east_london = 'Trafalgar Property Management East London';
        $password_east_london = 'a191f3a4-c618-4743-9c87-c6df426ca3f1';
        $token_east_london = 'Basic ' . base64_encode($userName_east_london . ':' . $password_east_london);
        $this->importSyncPropertyData($token_east_london, $userName_east_london);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }


    // // Trafalgar Property Mangement
    public function trafalgarPropertyMangement()
    {

        $userName_property_mangement = 'Trafalgar Property Management';
        $password_property_mangement = 'b1e791f2-77ba-4891-9c5a-83a1a8ccc54c';
        $token_property_mangement = 'Basic ' . base64_encode($userName_property_mangement . ':' . $password_property_mangement);
        $this->importSyncPropertyData($token_property_mangement, $userName_property_mangement);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }


    // // Trafalgar Property Mangement
    public function trafalgarPropertyMangementPvtLtd()
    {

        $userName_property_mangement_pretoria = 'Trafalgar Property Management PTY LTD - Pretoria';
        $password_property_mangement_pretoria = 'd7b702b7-b56d-4ebb-938d-d3f2d3ca796c';
        $token_property_mangement_pretoria = 'Basic ' . base64_encode($userName_property_mangement_pretoria . ':' . $password_property_mangement_pretoria);
        $this->importSyncPropertyData($token_property_mangement_pretoria, $userName_property_mangement_pretoria);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }









    public function importSyncPropertyData($token, $apiUserName)
    {

        //  dd($token."----".$apiUserName);

        $apiURL = 'https://sync.entegral.net/api/listings';

        $headers = [
            'Authorization' => $token
        ];

        $response = Http::withHeaders($headers)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        // dd($responseBody);

        // if ($statusCode === 200) {
        //     $fileName = 'listings.json';
        //     $jsonData = json_encode($responseBody);

        //     return response($jsonData)
        //         ->header('Content-Type', 'application/json')
        //         ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
        // }

        $removedProperty    = ['For Sale', 'Rental Monthly'];

        if (!empty($responseBody)) {

            EntegralApiData::where('api_city_key', $apiUserName)->where('api_type_name', 'syncApi')->delete();
            SearchReference::where('api_city_key', $apiUserName)->where('api_type_name', 'syncApi')->delete();

            for ($r = 0; $r < count($responseBody); $r++) {

                $getCurrentTime = date("Y/m/d H:i:s");
                $getCurrentTimeValue = strtotime($getCurrentTime);
                $getDataTime = strtotime($responseBody[$r]['expiryDate']);
                // if ($getCurrentTimeValue > $getDataTime && $responseBody[$r]['clientPropertyID'] == 10322)
                //     return  $responseBody[$r]['clientPropertyID'];
                if ($getCurrentTimeValue <= $getDataTime) {
                    if (in_array($responseBody[$r]['propertyStatus'], $removedProperty)) {


                        //   $checkPropertyExist =   EntegralApiData::where('property_id',$responseBody[$r]['clientPropertyID'])->first();
                        // if(!empty($checkPropertyExist)){
                        //      $insertEntegralData =  EntegralApiData::find($checkPropertyExist->id);
                        //       $insertEntegralData->is_property_new = 0 ;
                        //       // variable for sending email alert of property 
                        //       $checkifPropertyNew = 0;
                        // }else{
                        $insertEntegralData =  new EntegralApiData;
                        $insertEntegralData->is_property_new = 1;
                        // variable for sending email alert of property
                        $checkifPropertyNew = 1;
                        // }

                        $insertEntegralData->api_city_key = $apiUserName;
                        $insertEntegralData->api_type_name = "syncApi";

                        $insertEntegralData->property_id = $responseBody[$r]['clientPropertyID'];




                        if ($responseBody[$r]['propertyStatus'] == "For Sale") {
                            $insertEntegralData->mandate_saletype = 'for sale';
                        } else 
            if ($responseBody[$r]['propertyStatus'] == "Rental Monthly") {
                            $insertEntegralData->mandate_saletype = "for rent";
                        } else if ($responseBody[$r]['propertyStatus'] == "Sold") {
                            $insertEntegralData->mandate_saletype = "for sale";
                            $insertEntegralData->is_property_sold = 1;
                        }


                        $insertEntegralData->mandate_saletypeunit = $responseBody[$r]['priceUnit'];
                        $insertEntegralData->mandate_status = $responseBody[$r]['propertyStatus'];
                        $insertEntegralData->mandate_type = NULL;
                        $insertEntegralData->mandate_startdate = $responseBody[$r]['listDate'];
                        $insertEntegralData->mandate_enddate = $responseBody[$r]['expiryDate'];
                        if (!empty($responseBody[$r]['price'])) {
                            $insertEntegralData->price = $responseBody[$r]['price'];
                        }
                        $residentialArray = ['Apartment', 'Cluster', 'Cottage', 'Duet', 'Flat', 'Holiday Accommodation', 'House', 'Penthouse', 'Retirement Village', 'Townhouse', 'Vacant Land Residential'];

                        $commercialArray = ['Commercial', 'Game Farm Lodge', 'Guest House', 'Industrial', 'Industrial Land', 'Office', 'Restaurant', 'Retail', 'Shop', 'Vacant Land Commercial'];

                        if (in_array(ucfirst(strtolower($responseBody[$r]['propertyType'])), $residentialArray)) {
                            $insertEntegralData->property_classification = 'residential';
                        } else if (in_array(ucfirst(strtolower($responseBody[$r]['propertyType'])), $commercialArray)) {
                            $insertEntegralData->property_classification = 'commercial';
                        }



                        $insertEntegralData->property_type = $responseBody[$r]['propertyType'];
                        if (isset($responseBody[$r]['photos'][0]['imgUrl'])) {
                            $insertEntegralData->photo_thumbnail = $responseBody[$r]['photos'][0]['imgUrl'];
                            $insertEntegralData->news_featured_image = $responseBody[$r]['photos'][0]['imgUrl'];
                        }


                        $insertEntegralData->country = strtolower($responseBody[$r]['country']);

                        $insertEntegralData->province = strtolower($responseBody[$r]['province']);

                        $insertEntegralData->town = strtolower($responseBody[$r]['town']);

                        $insertEntegralData->suburb = strtolower($responseBody[$r]['suburb']);

                        $insertEntegralData->map_location_available = $responseBody[$r]['showOnMap'];

                        $insertEntegralData->street_number = ucfirst(strtolower($responseBody[$r]['streetNumber']));

                        $insertEntegralData->street_name = ucfirst(strtolower($responseBody[$r]['streetName']));

                        $insertEntegralData->unit_number = ucfirst(strtolower($responseBody[$r]['unitNumber']));

                        $insertEntegralData->complex_name = ucfirst(strtolower($responseBody[$r]['complexName']));


                        if ($responseBody[$r]['complexName'] != '' && $responseBody[$r]['unitNumber'] != "") {
                            $propertyCustomTitle = $responseBody[$r]['unitNumber'] . " " . $responseBody[$r]['complexName'];
                        } else {
                            $propertyCustomTitle = $responseBody[$r]['streetNumber'] . " " . $responseBody[$r]['streetName'];
                        }

                        $insertEntegralData->property_name = ucfirst(strtolower($propertyCustomTitle));

                        //$insertEntegralData->directions = $responseBody[$r]['directions'];


                        if (!empty($responseBody[$r]['contact'])) {
                            $insertEntegralData->agent_id =  $responseBody[$r]['contact'][0]['clientAgentID'];
                            $insertEntegralData->agent_name = $responseBody[$r]['contact'][0]['fullName'];
                            
                            $insertEntegralData->agent_email = $responseBody[$r]['contact'][0]['email'];
                            $insertEntegralData->agent_phone = $responseBody[$r]['contact'][0]['cell'];


                            $agentSlug = str_replace(" ", "-", $responseBody[$r]['contact'][0]['fullName']);
                            $agentSlug = str_replace("--", "-", $agentSlug);
                            $insertEntegralData->agent_name_slug = strtolower($agentSlug);
                        }


                        $insertEntegralData->added = $responseBody[$r]['timeStamp'];
                        $insertEntegralData->updated = NULL;

                        if (isset($responseBody[$r]['latlng']) && ($responseBody[$r]['latlng'] != "")) {
                            $latlng =   explode(",", $responseBody[$r]['latlng']);




                            if ($latlng[0] == 0 || $latlng[1] == 0) {

                                $latLngData = $this->getPropertyLatLong(
                                    $responseBody[$r]['streetNumber'],
                                    $responseBody[$r]['streetName'],
                                    $responseBody[$r]['suburb'],
                                    $responseBody[$r]['town'],
                                    $responseBody[$r]['province'],
                                    $responseBody[$r]['country']
                                );

                                $insertEntegralData->location_lat = $latLngData['lat'];
                                $insertEntegralData->location_long = $latLngData['lng'];
                            } else {
                                $insertEntegralData->location_lat = $latlng[0];
                                $insertEntegralData->location_long = $latlng[1];
                            }
                        }


                        $insertEntegralData->floor_size = $responseBody[$r]['buildingSize'];
                        $insertEntegralData->floor_size_unit = $responseBody[$r]['buildingSizeType'];
                        if (!empty($responseBody[$r]['landSize'])) {
                            $insertEntegralData->land_size = $responseBody[$r]['landSize'];
                        }
                        $insertEntegralData->land_size_unit = $responseBody[$r]['landsizeType'];
                        $insertEntegralData->pool = $responseBody[$r]['pool'];
                        $insertEntegralData->no_pets_allowed = $responseBody[$r]['petsAllowed'];
                        if (!empty($responseBody[$r]['garages'])) {
                            $insertEntegralData->garages = $responseBody[$r]['garages'];
                        }

                        $insertEntegralData->covered_parking = $responseBody[$r]['carports'];
                        $insertEntegralData->open_parking = $responseBody[$r]['openparking'];
                        if (!empty($responseBody[$r]['beds'])) {
                            $insertEntegralData->bedrooms = $responseBody[$r]['beds'];
                        }
                        if (!empty($responseBody[$r]['baths'])) {
                            $insertEntegralData->bathrooms = $responseBody[$r]['baths'];
                        }
                        $insertEntegralData->furnished = $responseBody[$r]['furnished'];
                        $insertEntegralData->living_areas = $responseBody[$r]['livingAreas'];
                        $insertEntegralData->days_on_market = NULL;
                        $insertEntegralData->days_to_expiry = NULL;
                        $insertEntegralData->headline = $responseBody[$r]['title'];
                        $insertEntegralData->description = $responseBody[$r]['description'];
                        $insertEntegralData->rates_taxes = $responseBody[$r]['ratesAndTaxes'];
                        $insertEntegralData->rates_taxes_unit = NULL;
                        $insertEntegralData->levy = $responseBody[$r]['levy'];
                        $insertEntegralData->levy_unit = NULL;
                        $insertEntegralData->photos = (!empty($responseBody[$r]['photos'])) ? count($responseBody[$r]['photos']) : "0";
                        $insertEntegralData->contacts = '';


                        $photoArrayFeatureImage =  $responseBody[$r]['photos'];
                        $insertEntegralData->news_featured_image = (!empty($photoArrayFeatureImage)) ? $photoArrayFeatureImage[0]['imgUrl'] : "";


                        $insertEntegralData->separate_toilet  = $responseBody[$r]['propertyFeatures'];
                        $insertEntegralData->additional_charges = $responseBody[$r]['description'];
                        $insertEntegralData->security_tag = $responseBody[$r]['securityFeatures'];
                        $insertEntegralData->staff_tag = $responseBody[$r]['staffAccommodation'];
                        $insertEntegralData->study_tag = $responseBody[$r]['study'];
                        $insertEntegralData->carpeted_tag = $responseBody[$r]['propertyFeatures'];
                        $insertEntegralData->video_url = $responseBody[$r]['vtUrl'];



                        $insertEntegralData->files = "";
                        $insertEntegralData->links = "";



                        $insertEntegralData->features = $responseBody[$r]['propertyFeatures'];
                        $insertEntegralData->save();

                        $property_id =  $insertEntegralData->id;

                        $photoArray =  $responseBody[$r]['photos'];


                        $search_name_suburb = $responseBody[$r]['suburb'];
                        $searchReference_suburb =  SearchReference::where('search_name', $search_name_suburb)->first();
                        if (empty($searchReference_suburb)) {
                            SearchReference::create([
                                'search_name' => $search_name_suburb,
                                'search_type' => 'suburb',
                                'api_city_key' => $apiUserName,
                                'api_type_name' => 'syncApi'

                            ]);
                        }

                        $search_name_province = $responseBody[$r]['province'];
                        $searchReference_province =  SearchReference::where('search_name', $search_name_province)->first();
                        if (empty($searchReference_province)) {
                            SearchReference::create([
                                'search_name' => $search_name_province,
                                'search_type' => 'province',
                                'api_city_key' => $apiUserName,
                                'api_type_name' => 'syncApi'
                            ]);
                        }

                        $search_name_town = $responseBody[$r]['suburb'];
                        $searchReference_town =  SearchReference::where('search_name', $search_name_town)->first();
                        if (empty($searchReference_town)) {
                            SearchReference::create([
                                'search_name' => $search_name_town,
                                'search_type' => 'town',
                                'api_city_key' => $apiUserName,
                                'api_type_name' => 'syncApi'
                            ]);
                        }
                    }
                }
            }
        }
    }


    public function getPropertyLatLong($street_number, $street_name, $suburb, $town, $province, $country)
    {


        $address = $street_number . "," . $street_name . "," . $suburb . "," . $town . "," . $province . "," . $country;
        $apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=AIzaSyDFxIh8LLG3npkRjS4hGeFRthWa0KQq3ts';

        $response = Http::get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        if ($responseBody['status'] == "OK") {

            return $data = [
                'lat' => $responseBody['results'][0]['geometry']['location']['lat'],
                'lng' => $responseBody['results'][0]['geometry']['location']['lng']
            ];
        } else {
            return $data = [
                'lat' => "",
                'lng' => ""
            ];
        }
    }
}
