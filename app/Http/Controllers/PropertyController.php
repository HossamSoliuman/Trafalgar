<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\EntegralApiData;
//use App\Models\EntegralPropertyImage;
use App\Models\FavouriteProperty;
use App\Models\SearchReference;
use App\Models\Agent;
use Illuminate\Support\Facades\Http;
use DB;
use Cookie;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        // custom filter parameter
        $sr = "";

        //NEWCODE  
        $explode = explode(",", $request->city);
        $array = array();
        foreach ($explode as $res) {
            $array[] = '"' . $res . '"';
        }
        $implode = implode("  ", $array);

        //SELECT * FROM `entegral_api_data` WHERE MATCH(town,suburb,province) AGAINST('"Cape Town" "Port Elizabeth"' IN BOOLEAN MODE)
        $sr = "MATCH(town,suburb,province) AGAINST('" . $implode . "' IN BOOLEAN MODE)";
        //NEWCODE  
        //$sr = 'MATCH(town,suburb,province) AGAINST("' . $request->city . '")';

        if ($request->stype != "") {
            $sr .= " AND  mandate_saletype = '" . $request->stype . "'";
        }
        if ($request->pclass != "") {
            $sr .= " AND  property_classification = '" . $request->pclass . "'";
        }
        if ($request->ptype != "") {
            $sr .= " AND  property_type = '" . $request->ptype . "'";
        }
        if ($request->beds != "") {
            $sr .= " AND  bedrooms <= '" . $request->beds . "'";
        }
        if ($request->bath != "") {
            $sr .= " AND  bathrooms <= '" . $request->bath . "'";
        }

        if ($request->garage != "") {
            $sr .= " AND  garages <= '" . $request->garage . "'";
        }
        if ($request->fminsize != "" && $request->fmaxsize != "") {
            // $request->minprice = 500;
            $sr .= " AND floor_size BETWEEN " . $request->fminsize . " AND " . $request->fmaxsize . "";
        }

        if ($request->minprice != "" && $request->maxprice != "") {
            $request->minprice = 500;
            $sr .= " AND price BETWEEN " . $request->minprice . " AND " . $request->maxprice . "";
        }

        // echo $sr;
        //exit;

        // custom filter parameter


        EntegralApiData::WhereRaw($sr)->toSql();

        // add sorting filter for price and most recent
        if (isset($request->sortType) && $request->sortType != "") {

            if ($request->sortType == "mostrecent") {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'desc')
                    ->paginate(8);
            } else if ($request->sortType == "lowtohigh") {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('price', 'asc')
                    ->paginate(8);
            } else if ($request->sortType == "hightolow") {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('price', 'desc')
                    ->paginate(8);
            } else if ($request->sortType == "alphabat") {

                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('headline')
                    ->paginate(8);
            } else {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'asc')
                    ->paginate(8);
            }
        } else {
            $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'asc')
                ->paginate(8);
        }



        // add sorting filter for price and most recent
        //echo $sr;
        // footer suburb array
        /*$getDistinctSuburb = EntegralApiData::distinct('suburb')->select('suburb')->WhereRaw($sr)->inRandomOrder()
                ->limit(20)
                ->get();*/
        //NEWCODE        
        $getDistinctSuburb = EntegralApiData::distinct('suburb')->select('suburb')->WhereRaw($sr)
            ->orderBy('suburb', 'asc')
            ->get();
        // footer suburb array  

        $propertyDatas->appends($request->all());

        // add search keyword with cookies
        $cookie = Cookie::queue(Cookie::make('searchKeyword', $request->city, 360));
        // add search keyword with cookies

        $setting = Setting::find(1);
        $searchReferences = SearchReference::select(["id", "search_name", "search_type"])->get();

        $propertyTypeList = EntegralApiData::select('property_type')->groupBy('property_type')
            ->get();

        /// side bar link code for property type ///
        (object)$sideBarLinkArray = [];
        // $cityArray = explode(",", $_GET['city']);
        if (isset($_GET['city'])) {
            $cityArray = explode(",", $_GET['city']);
        } else {
            $cityArray = [''];
        }
        foreach ($propertyTypeList as $propertyTypeLists) {

            $srNew = "";
            $srNew = "MATCH(town,suburb,province) AGAINST ('" . $cityArray[0] . "' IN BOOLEAN MODE)";
            if ($request->stype != "") {
                $srNew .= " AND  mandate_saletype = '" . $request->stype . "'";
            }
            if ($request->pclass != "") {
                $srNew .= " AND  property_classification = '" . $request->pclass . "'";
            }

            $srNew .= " AND  property_type = '" . $propertyTypeLists->property_type . "'";

            $sideBarSql = EntegralApiData::WhereRaw($srNew)->get();

            if (count($sideBarSql) > 0) {

                if (isset($request->stype)) {
                    $htmtCode = (object)['propertyTypeUrl' => route('property', ['city' => $request->city, 'ptype' => $propertyTypeLists->property_type, 'stype' => $request
                        ->stype]), 'propertyTypeName' => $propertyTypeLists->property_type];

                    array_push($sideBarLinkArray, $htmtCode);
                }
                if (isset($request->pclass)) {

                    $htmtCode = (object)['propertyTypeUrl' => route('property', ['city' => $request->city, 'ptype' => $propertyTypeLists->property_type, 'pclass' => $request
                        ->pclass, 'stype' => $request
                        ->stype]), 'propertyTypeName' => $propertyTypeLists->property_type];
                    array_push($sideBarLinkArray, $htmtCode);
                }
            }
        }
        /// side bar link code for property type ///


        return view('frontPart.property', compact('setting', 'propertyDatas', 'searchReferences', 'propertyTypeList', 'sideBarLinkArray', 'getDistinctSuburb'));
    }
    public function agent(Request $request)
    {
        $agentDetail = $this->getAgentIdBySlugName($request->agentid);
        if (!$agentDetail) {
            abort(404);
        }

        $setting = Setting::find(1);

        $email = $agentDetail->email;
        $agents = Agent::where('email', $email)->get();
        $agentSlugs = $agents->pluck('agent_name_slug')->toArray();
        $agentIds = $agents->pluck('agent_id')->toArray();
        $propertyQuery = EntegralApiData::whereIn('agent_name_slug', $agentSlugs)->orWhereIn('agent_id', $agentIds);

        if (isset($request->sortType) && $request->sortType != "") {
            switch ($request->sortType) {
                case 'mostrecent':
                    $propertyQuery->orderBy('id', 'desc');
                    break;
                case 'lowtohigh':
                    $propertyQuery->orderBy('price', 'asc');
                    break;
                case 'hightolow':
                    $propertyQuery->orderBy('price', 'desc');
                    break;
                case 'alphabat':
                    $propertyQuery->orderBy('headline');
                    break;
                default:
                    $propertyQuery->orderBy('id', 'asc');
            }
        } else {
            $propertyQuery->orderBy('id', 'asc');
        }

        $propertyDatas = $propertyQuery->paginate(8)->appends($request->all());

        $getDistinctSuburb = EntegralApiData::where('agent_id', $agentDetail->agent_id)
            ->inRandomOrder()
            ->groupBy('suburb')
            ->take(30)
            ->get();

        return view('frontPart.agentDetailPage', compact('setting', 'agentDetail', 'propertyDatas', 'getDistinctSuburb'));
    }
    public function agentdetail()
    {
        $setting = Setting::find(1);
        $searchReferences = SearchReference::select(["id", "search_name", "search_type"])->get();
        return view('frontPart.agentDetailPage', compact('setting'));
    }

    

    public function propertydetail(Request $request)
    {
        $townName = EntegralApiData::select('*')->where('property_id', $request->p_ref)
            ->first();

        if ($townName === null) {
            return abort(404);
        }

        if ($townName->api_type_name == "baseEntegralApi") {
            $propertyData = $this->entegralApiCall($request, $townName);
        } else {
            $propertyData = $this->syncApiCall($request, $townName);
        }

        $setting = Setting::find(1);
        $searchReferences = SearchReference::select(["id", "search_name", "search_type"])->get();
        $propertyDetail = EntegralApiData::where('property_id', $request->p_ref)->first();

        $agentDetail = Agent::where('agent_name_slug', $propertyDetail->agent_name_slug)
            ->where('api_name', 'Entegral api')
            ->first();

        if ($propertyDetail->mandate_saletype == "for rent") {
            $getDistinctSuburb = EntegralApiData::where('mandate_saletype', 'for rent')
                ->where('province', '!=', 'Unalloc')
                ->where('property_classification', $propertyDetail->property_classification)
                ->inRandomOrder()
                ->groupBy('suburb')
                ->take(30)
                ->get();
        } elseif ($propertyDetail->mandate_saletype == "for sale") {
            $getDistinctSuburb = EntegralApiData::where('mandate_saletype', 'for sale')
                ->where('province', '!=', 'Unalloc')
                ->where('property_classification', $propertyDetail->property_classification)
                ->inRandomOrder()
                ->groupBy('suburb')
                ->take(30)
                ->get();
        }

        $checkFavouritePropertyExist = FavouriteProperty::where('property_id', 1)->first();
        $checkPropertyFavourite = [
            'isPropertyFavourite' => $checkFavouritePropertyExist ? 1 : 0
        ];
        return $propertyData->photos;
        // Update photo URLs to serve via Laravel
        if (isset($propertyData->photos)) {
            $propertyData->photos = collect($propertyData->photos)->map(function ($photo) {
                if (isset($photo['imgUrl'])) {
                    $photo['imgUrl'] = route('property.fetch-image', ['url' => urlencode($photo['imgUrl'])]);
                }
                return $photo;
            });
        }

        $checkPropertyFavourite = (object)$checkPropertyFavourite;

        return view('frontPart.propertySearching.propertyDetail', compact(
            'setting',
            'propertyData',
            'propertyDetail',
            'agentDetail',
            'getDistinctSuburb',
            'checkPropertyFavourite',
            'townName'
        ));
    }
    public function fetchImage(Request $request)
    {
        $photoUrl = urldecode($request->url);
        $response = Http::get($photoUrl);

        if ($response->successful()) {
            return response($response->body(), 200)
                ->header('Content-Type', $response->header('Content-Type'));
        }

        return response('Image not found', 404);
    }






    public function getAgentDetailApiById($agentId)
    {

        $townName = EntegralApiData::where('agent_id', $agentId)->first();
        if ($townName->town == "Durban") {
            $token = 'heJ2Hmr5Ax692JkGVtf1oU2bAuRqHK9NDspia25sCyNYWHRjy+BD3AxQhpggFB/O';
        } else if ($townName->town == "Cape Town") {
            $token = 'pdab3oCUefEgYMWcwEbwGaO3YOwyMsCFLHv+J9wRLWEar7Vb+K/AwKoCbJf6vuIF';
        } else if ($townName->town == "Port Elizabeth") {
            $token = 'oVfwb/YN/rO9Hhj99grZhpzC/5A2yEH0O4GyN+o7gJO01ME5yvJgkJB7UhgI5SWc';
        } else if ($townName->town == "Pretoria") {
            $token = 'dwvFM9KwKjZChmcrPDhpIvMi8/O4dFoeghs/Xmrob5h8Q99GT6q+qaCrAONJ7uIc';
        } else {
            $token = 'iJqzkct/9+S333CWawiPzquO43KX2PNfdceo5Y10Y5W9Z/h+WReevEFIujLvrkJ7';
        }
        $apiURL = 'https://baseapi.entegral.net/api/v1/agents/' . $agentId;

        // Headers
        $headers = ['Token' => $token, 'Accept' => 'application/json'];

        $response = Http::withHeaders($headers)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        return $agentDetail = (object)$responseBody;
    }




    public function commercialProperty(Request $request)
    {
        // custom filter parameter
        $sr = "";
        if (isset($request->stype) && $request->stype != "") {
            //NEWCODE  
            $explode = explode(",", $request->city);
            $array = array();
            foreach ($explode as $res) {
                $array[] = '"' . $res . '"';
            }
            $implode = implode("  ", $array);

            //SELECT * FROM `entegral_api_data` WHERE MATCH(town,suburb,province) AGAINST('"Cape Town" "Port Elizabeth"' IN BOOLEAN MODE)
            $sr = "MATCH(town,suburb,province) AGAINST('" . $implode . "' IN BOOLEAN MODE)";
        } else {
            $sr = "property_classification = 'commercial' ";
        }
        //NEWCODE  
        //$sr = 'MATCH(town,suburb,province) AGAINST("' . $request->city . '")';

        if ($request->stype != "") {
            $sr .= " AND  mandate_saletype = '" . $request->stype . "'";
        }
        if ($request->pclass != "") {
            $sr .= " AND  property_classification = '" . $request->pclass . "'";
        }
        if ($request->ptype != "") {
            $sr .= " AND  property_type = '" . $request->ptype . "'";
        }
        if ($request->beds != "") {
            $sr .= " AND  bedrooms <= '" . $request->beds . "'";
        }
        if ($request->bath != "") {
            $sr .= " AND  bathrooms <= '" . $request->bath . "'";
        }

        if ($request->garage != "") {
            $sr .= " AND  garages <= '" . $request->garage . "'";
        }
        if ($request->fminsize != "" && $request->fmaxsize != "") {
            // $request->minprice = 500;
            $sr .= " AND floor_size BETWEEN " . $request->fminsize . " AND " . $request->fmaxsize . "";
        }

        if ($request->minprice != "" && $request->maxprice != "") {
            $request->minprice = 500;
            $sr .= " AND price BETWEEN " . $request->minprice . " AND " . $request->maxprice . "";
        }

        // echo $sr;
        //exit;

        // custom filter parameter


        EntegralApiData::WhereRaw($sr)->toSql();

        // add sorting filter for price and most recent
        if (isset($request->sortType) && $request->sortType != "") {

            if ($request->sortType == "mostrecent") {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'desc')
                    ->paginate(8);
            } else if ($request->sortType == "lowtohigh") {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('price', 'asc')
                    ->paginate(8);
            } else if ($request->sortType == "hightolow") {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('price', 'desc')
                    ->paginate(8);
            } else if ($request->sortType == "alphabat") {

                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('headline')
                    ->paginate(8);
            } else {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'asc')
                    ->paginate(8);
            }
        } else {
            $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'asc')
                ->paginate(8);
        }



        // add sorting filter for price and most recent
        //echo $sr;
        // footer suburb array
        /*$getDistinctSuburb = EntegralApiData::distinct('suburb')->select('suburb')->WhereRaw($sr)->inRandomOrder()
                ->limit(20)
                ->get();*/
        //NEWCODE        
        $getDistinctSuburb = EntegralApiData::distinct('suburb')->select('suburb')->WhereRaw($sr)
            ->orderBy('suburb', 'asc')
            ->get();
        // footer suburb array  

        $propertyDatas->appends($request->all());

        // add search keyword with cookies
        $cookie = Cookie::queue(Cookie::make('searchKeyword', $request->city, 360));
        // add search keyword with cookies

        $setting = Setting::find(1);
        $searchReferences = SearchReference::select(["id", "search_name", "search_type"])->get();

        $propertyTypeList = EntegralApiData::select('property_type')->groupBy('property_type')
            ->get();

        /// side bar link code for property type ///
        (object)$sideBarLinkArray = [];
        //  $cityArray = explode(",", $_GET['city']);
        foreach ($propertyTypeList as $propertyTypeLists) {

            //    $srNew = "";
            $srNew = "property_classification = 'commercial' ";
            //  $srNew = "MATCH(town,suburb,province) AGAINST ('".$cityArray[0]."' IN BOOLEAN MODE)";
            if ($request->stype != "") {
                $srNew .= " AND  mandate_saletype = '" . $request->stype . "'";
            }
            if ($request->pclass != "") {
                $srNew .= " AND  property_classification = '" . $request->pclass . "'";
            }

            $srNew .= " AND  property_type = '" . $propertyTypeLists->property_type . "'";

            $sideBarSql = EntegralApiData::WhereRaw($srNew)->get();

            if (count($sideBarSql) > 0) {

                if (isset($request->stype)) {
                    $htmtCode = (object)['propertyTypeUrl' => route('property', ['city' => $request->city, 'ptype' => $propertyTypeLists->property_type, 'stype' => $request
                        ->stype]), 'propertyTypeName' => $propertyTypeLists->property_type];

                    array_push($sideBarLinkArray, $htmtCode);
                }
                if (isset($request->pclass)) {

                    $htmtCode = (object)['propertyTypeUrl' => route('property', ['city' => $request->city, 'ptype' => $propertyTypeLists->property_type, 'pclass' => $request
                        ->pclass, 'stype' => $request
                        ->stype]), 'propertyTypeName' => $propertyTypeLists->property_type];
                    array_push($sideBarLinkArray, $htmtCode);
                }
            }
        }
        /// side bar link code for property type ///


        return view('frontPart.commercialProperty', compact('setting', 'propertyDatas', 'searchReferences', 'propertyTypeList', 'sideBarLinkArray', 'getDistinctSuburb'));
    }



    public function entegralApiCall($request, $townName)
    {
        if ($townName->api_city_key == "durban") {
            $token = 'heJ2Hmr5Ax692JkGVtf1oU2bAuRqHK9NDspia25sCyNYWHRjy+BD3AxQhpggFB/O';
        } else if ($townName->api_city_key == "capeTown") {
            $token = 'pdab3oCUefEgYMWcwEbwGaO3YOwyMsCFLHv+J9wRLWEar7Vb+K/AwKoCbJf6vuIF';
        } else if ($townName->api_city_key == "portElizabeth") {
            $token = 'oVfwb/YN/rO9Hhj99grZhpzC/5A2yEH0O4GyN+o7gJO01ME5yvJgkJB7UhgI5SWc';
        } else if ($townName->api_city_key == "pretoria") {
            $token = 'dwvFM9KwKjZChmcrPDhpIvMi8/O4dFoeghs/Xmrob5h8Q99GT6q+qaCrAONJ7uIc';
        } else if ($townName->api_city_key == 'johannesBurg') {
            $token = 'iJqzkct/9+S333CWawiPzquO43KX2PNfdceo5Y10Y5W9Z/h+WReevEFIujLvrkJ7';
        } else if ($townName->api_city_key == 'eastLondon') {
            $token = 'CGkkJkU172ympsbxOYuGGY3OdaHo6CEEXDjESH6ON39gT6l0BQ+GYmFS6Ng58mYf';
        } else if ($townName->api_city_key == 'innerCity') {
            $token = 'ZJGmaqJ5/sCxZAStUcou3nFELh9R14WPu15UYd/DYUgzxB93MoLwtd2SdQ8i4s2W';
        }
        $apiURL = 'https://baseapi.entegral.net/api/v1/properties/' . $request->p_ref;

        // Headers
        $headers = ['Token' => $token, 'Accept' => 'application/json'];

        $response = Http::withHeaders($headers)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        return $propertyData = (object)$responseBody;
    }

    public function syncApiCall($request, $townName)
    {





        if ($townName->api_city_key == 'Trafalgar Port Elizabeth') {
            $userName_port_elizabeth = 'Trafalgar Port Elizabeth';
            $password_port_elizabeth = '830ba548-6f44-4d6c-9a89-f5666e30752d';
            $token = 'Basic ' . base64_encode($userName_port_elizabeth . ':' . $password_port_elizabeth);
        } else if ($townName->api_city_key == 'Trafalgar Property Management Pretoria') {
            // pretoria
            $userName_pretoria = 'Trafalgar Property Management Pretoria';
            $password_pretoria = '1da831e1-2d25-4ba1-9a4d-81d605d28130';
            $token = 'Basic ' . base64_encode($userName_pretoria . ':' . $password_pretoria);
        } else if ($townName->api_city_key == 'Trafalgar Property Management Cape Town') {
            // cape_town
            $userName_cape_town = 'Trafalgar Property Management Cape Town';
            $password_cape_town = '66aa41d2-b9f3-4d7a-8b5b-ecca1d8ef08c';
            $token = 'Basic ' . base64_encode($userName_cape_town . ':' . $password_cape_town);
        } else if ($townName->api_city_key == 'Trafalgar Property Management Johannesburg') {
            // Johannesburg
            $userName_Johannesburg = 'Trafalgar Property Management Johannesburg';
            $password_Johannesburg = '9389bc73-febc-47cd-8149-b4deac7b6e07';
            $token = 'Basic ' . base64_encode($userName_Johannesburg . ':' . $password_Johannesburg);
        } else if ($townName->api_city_key == 'Trafalgar Property Management East London') {
            // east_london
            $userName_east_london = 'Trafalgar Property Management East London';
            $password_east_london = 'a191f3a4-c618-4743-9c87-c6df426ca3f1';
            $token = 'Basic ' . base64_encode($userName_east_london . ':' . $password_east_london);
        } else if ($townName->api_city_key == 'Trafalgar Property Management') {

            // property_mangement
            $userName_property_mangement = 'Trafalgar Property Management';
            $password_property_mangement = 'b1e791f2-77ba-4891-9c5a-83a1a8ccc54c';
            $token = 'Basic ' . base64_encode($userName_property_mangement . ':' . $password_property_mangement);
        } else if ($townName->api_city_key == 'Trafalgar Property Management PTY LTD - Pretoria') {

            // property_mangement_pretoria
            $userName_property_mangement_pretoria = 'Trafalgar Property Management PTY LTD - Pretoria';
            $password_property_mangement_pretoria = 'd7b702b7-b56d-4ebb-938d-d3f2d3ca796c';
            $token = 'Basic ' . base64_encode($userName_property_mangement_pretoria . ':' . $password_property_mangement_pretoria);
        } else if ($townName->api_city_key == 'unibase_sandbox') {

            // property_mangement_pretoria
            $unibase_sandbox = 'unibase_sandbox';
            $password_unibase_sandbox = 'dda4d7c3-96ba-462e-80cf-262fee74f745';
            $token = 'Basic ' . base64_encode($unibase_sandbox . ':' . $password_unibase_sandbox);
        }


        $apiListDetail =  "https://sync.entegral.net/api/listings/" . $townName->property_id;

        $headers = [
            'Authorization' => $token
        ];

        $response = Http::withHeaders($headers)->get($apiListDetail);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);


        if (!empty($responseBody)) {
            return $propertyData = (object)$responseBody[0];
        } else {
            return $propertyData = (object)[];
        }
    }

    public function getAgentDetailDataBaseById($agentId)
    {
        //  DB::enableQueryLog();
        return $agent = Agent::where('agent_id', $agentId)->first();
        // $agent = Agent::where('agent_id',$agentId)->first();
        // dd(DB::getQueryLog());
    }


    public function getAgentIdBySlugName($agentId)
    {
        return $agent = Agent::where('agent_name_slug', $agentId)
            ->where('api_name', 'Entegral api')
            ->first();
    }
}
