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
        $apiURL = 'https://sync.entegral.net/api/listings';
        $headers = ['Authorization' => $token];
        $response = Http::withHeaders($headers)->get($apiURL);
        $responseBody = json_decode($response->getBody(), true);
        $removedProperty = ['For Sale', 'Rental Monthly'];

        if (empty($responseBody)) return;

        EntegralApiData::where('api_city_key', $apiUserName)->where('api_type_name', 'syncApi')->delete();
        SearchReference::where('api_city_key', $apiUserName)->where('api_type_name', 'syncApi')->delete();

        foreach ($responseBody as $data) {
            if (!isset($data['expiryDate'])) continue;
            if (strtotime(date("Y/m/d H:i:s")) > strtotime($data['expiryDate'])) continue;
            if (!in_array($data['propertyStatus'], $removedProperty)) continue;
            $insert = new EntegralApiData;
            $insert->is_property_new = 1;
            $insert->api_city_key = $apiUserName;
            $insert->api_type_name = "syncApi";
            $insert->property_id = $data['clientPropertyID'];
            $insert->mandate_saletype = $data['propertyStatus'] == "Rental Monthly" ? "for rent" : "for sale";
            $insert->is_property_sold = $data['propertyStatus'] == "Sold" ? 1 : 0;
            $insert->mandate_saletypeunit = $data['priceUnit'];
            $insert->mandate_status = $data['propertyStatus'];
            $insert->mandate_type = null;
            $insert->mandate_startdate = date('Y-m-d', strtotime($data['listDate']));
            $insert->mandate_enddate = date('Y-m-d', strtotime($data['expiryDate']));
            $insert->price = $data['price'] ?? null;
            $residentialArray = ['Apartment', 'Cluster', 'Cottage', 'Duet', 'Flat', 'Holiday Accommodation', 'House', 'Penthouse', 'Retirement Village', 'Townhouse', 'Vacant Land Residential'];
            $commercialArray = ['Commercial', 'Game Farm Lodge', 'Guest House', 'Industrial', 'Industrial Land', 'Office', 'Restaurant', 'Retail', 'Shop', 'Vacant Land Commercial'];
            $type = ucfirst(strtolower($data['propertyType']));
            $insert->property_classification = in_array($type, $residentialArray) ? 'residential' : (in_array($type, $commercialArray) ? 'commercial' : null);
            $insert->property_type = $data['propertyType'];

            if (isset($data['photos'][0]['imgUrl'])) {
                $insert->photo_thumbnail = $data['photos'][0]['imgUrl'];
                $insert->news_featured_image = $data['photos'][0]['imgUrl'];
            }

            $insert->country = strtolower($data['country']);
            $insert->province = strtolower($data['province']);
            $insert->town = strtolower($data['town']);
            $insert->suburb = strtolower($data['suburb']);
            $insert->map_location_available = $data['showOnMap'];
            $insert->street_number = ucfirst(strtolower($data['streetNumber']));
            $insert->street_name = ucfirst(strtolower($data['streetName']));
            $insert->unit_number = ucfirst(strtolower($data['unitNumber']));
            $insert->complex_name = ucfirst(strtolower($data['complexName']));
            $insert->property_name = ucfirst(strtolower(($data['complexName'] && $data['unitNumber']) ? $data['unitNumber'] . " " . $data['complexName'] : $data['streetNumber'] . " " . $data['streetName']));

            if (!empty($data['contact'])) {
                $insert->agent_id = $data['contact'][0]['clientAgentID'];
                $insert->agent_name = $data['contact'][0]['fullName'];
                $insert->agent_email = $data['contact'][0]['email'];
                $insert->agent_phone = $data['contact'][0]['cell'];
                $insert->agent_name_slug = strtolower(str_replace("--", "-", str_replace(" ", "-", $data['contact'][0]['fullName'])));
            }

            $insert->added = $data['timeStamp'];
            $insert->updated = null;

            if (isset($data['latlng']) && $data['latlng'] != "") {
                [$lat, $lng] = explode(",", $data['latlng']);
                if ($lat == 0 || $lng == 0) {
                    $coords = $this->getPropertyLatLong($data['streetNumber'], $data['streetName'], $data['suburb'], $data['town'], $data['province'], $data['country']);
                    $insert->location_lat = $coords['lat'];
                    $insert->location_long = $coords['lng'];
                } else {
                    $insert->location_lat = $lat;
                    $insert->location_long = $lng;
                }
            }

            $insert->floor_size = $data['buildingSize'];
            $insert->floor_size_unit = $data['buildingSizeType'];
            $insert->land_size = $data['landSize'] ?? null;
            $insert->land_size_unit = $data['landsizeType'];
            $insert->pool = $data['pool'];
            $insert->no_pets_allowed = $data['petsAllowed'];
            $insert->garages = $data['garages'] ?? null;
            $insert->covered_parking = $data['carports'];
            $insert->open_parking = $data['openparking'];
            $insert->bedrooms = $data['beds'] ?? null;
            $insert->bathrooms = $data['baths'] ?? null;
            $insert->furnished = $data['furnished'];
            $insert->living_areas = $data['livingAreas'];
            $insert->days_on_market = null;
            $insert->days_to_expiry = null;
            $insert->headline = $data['title'];
            $insert->description = $data['description'];
            $insert->rates_taxes = $data['ratesAndTaxes'];
            $insert->rates_taxes_unit = null;
            $insert->levy = $data['levy'];
            $insert->levy_unit = null;
            $insert->photos = !empty($data['photos']) ? count($data['photos']) : "0";
            $insert->contacts = '';
            $insert->news_featured_image = !empty($data['photos']) ? $data['photos'][0]['imgUrl'] : "";
            $insert->separate_toilet = $data['propertyFeatures'];
            $insert->additional_charges = $data['description'];
            $insert->security_tag = $data['securityFeatures'];
            $insert->staff_tag = $data['staffAccommodation'];
            $insert->study_tag = $data['study'];
            $insert->carpeted_tag = $data['propertyFeatures'];
            $insert->video_url = $data['vtUrl'];
            $insert->files = "";
            $insert->links = "";
            $insert->features = $data['propertyFeatures'];
            $insert->save();

            $suburb = $data['suburb'];
            $province = $data['province'];
            $town = $data['suburb'];

            if (!SearchReference::where('search_name', $suburb)->exists()) {
                SearchReference::create([
                    'search_name' => $suburb,
                    'search_type' => 'suburb',
                    'api_city_key' => $apiUserName,
                    'api_type_name' => 'syncApi'
                ]);
            }

            if (!SearchReference::where('search_name', $province)->exists()) {
                SearchReference::create([
                    'search_name' => $province,
                    'search_type' => 'province',
                    'api_city_key' => $apiUserName,
                    'api_type_name' => 'syncApi'
                ]);
            }

            if (!SearchReference::where('search_name', $town)->exists()) {
                SearchReference::create([
                    'search_name' => $town,
                    'search_type' => 'town',
                    'api_city_key' => $apiUserName,
                    'api_type_name' => 'syncApi'
                ]);
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
