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

    public function unibaseApiData()
    {
        $userName = config('branches.unibase_sandbox.username');
        $password = config('branches.unibase_sandbox.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api unibase Property import successfully');
    }

    public function portElizabeth()
    {
        $userName = config('branches.port_elizabeth.username');
        $password = config('branches.port_elizabeth.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    public function pretoria()
    {
        $userName = config('branches.pretoria.username');
        $password = config('branches.pretoria.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    public function capeTown()
    {
        $userName = config('branches.cape_town.username');
        $password = config('branches.cape_town.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    public function johannesBurg()
    {
        $userName = config('branches.johannesburg.username');
        $password = config('branches.johannesburg.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    public function eastLondon()
    {
        $userName = config('branches.east_london.username');
        $password = config('branches.east_london.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    public function trafalgarPropertyMangement()
    {
        $userName = config('branches.trafalgar_property_mangement.username');
        $password = config('branches.trafalgar_property_mangement.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
        return Redirect::back()->with('success', 'Sync api Property import successfully');
    }

    public function trafalgarPropertyMangementPvtLtd()
    {
        $userName = config('branches.trafalgar_property_mangement_pvt.username');
        $password = config('branches.trafalgar_property_mangement_pvt.password');
        $token = 'Basic ' . base64_encode($userName . ':' . $password);
        $this->importSyncPropertyData($token, $userName);
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
            $insert->headline = $data['title'];
            $insert->description = $data['description'];
            $insert->rates_taxes = $data['ratesAndTaxes'];
            $insert->levy = $data['levy'];
            $insert->photos = !empty($data['photos']) ? count($data['photos']) : "0";
            $insert->news_featured_image = !empty($data['photos']) ? $data['photos'][0]['imgUrl'] : "";
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
        $apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=' . config('branches.google_api_key');
        $response = Http::get($apiURL);
        $responseBody = json_decode($response->getBody(), true);

        if ($responseBody['status'] == "OK") {
            return [
                'lat' => $responseBody['results'][0]['geometry']['location']['lat'],
                'lng' => $responseBody['results'][0]['geometry']['location']['lng']
            ];
        } else {
            return ['lat' => "", 'lng' => ""];
        }
    }
}
