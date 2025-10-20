<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Setting;
use App\Models\PropertySolution;
//use App\Models\NewSection;
use App\Models\SearchReference;
use App\Models\EntegralApiData;
use Cookie;
//use DB;

class MainController extends Controller
{
    public function index()
    {
        $tab = isset($_GET['tab']) && $_GET['tab'] == 'sale' ? 'for sale' : 'for rent';
        $tabUrlForFooter = $tab === 'for sale' ? 'for-sale' : 'to-rent';

        // Suburb groups for different provinces
        $suburbGroups = [
            ['Auckland Park', 'Berea', 'Braamfontein', 'Hillbrow', 'Hyde Park', 'Jeppestown', 'Killarney', 'Parkhurst'],
            ['Bluff', 'Durban Central', 'Isipingo Beach', 'Malvern', 'Morningside', 'Queensburgh', 'Umhlanga Ridge'],
            ['Amalinda', 'Beacon Bay', 'Gonubie', 'Kabega Park', 'Lorraine', 'Quigney', 'Southernwood', 'Vincent']
        ];

        $provinces = [
            'Gauteng',
            'Kwazulu Natal',
            'Eastern Cape'
        ];

        $getDistinctProvinces = [];

        foreach ($provinces as $province) {
            $getDistinctProvinces[$province] = EntegralApiData::select('suburb', 'town', 'province')
                ->where('province', $province)
                ->where('mandate_saletype', $tab)
                ->where('property_classification', 'residential')
                ->orderBy('suburb', 'ASC')
                ->groupBy('suburb', 'town', 'province')
                ->take(8)
                ->get();
        }

        $getUniqueTown = EntegralApiData::select('suburb', 'town', 'province')
            ->whereIn('suburb', [
                'Cape Town City Bowl',
                'Green Point',
                'Houghton',
                'Illovo',
                'Plumstead',
                'Rowallan Park',
                'Sherwood',
                'Walmer',
                'West Coast'
            ])
            ->orderBy('town', 'ASC')
            ->inRandomOrder()
            ->groupBy('town')
            ->take(8)
            ->get();

        $getPropertyWebReferenceArray = EntegralApiData::distinct()
            ->pluck('property_id')
            ->map(fn($id) => ["id" => $id, "text" => $id])
            ->toArray();

        $propertySolutions = PropertySolution::where('visible_status', 1)->get();
        $setting = Setting::find(1);

        $propertyTypeList = EntegralApiData::select('property_type')
            ->where('property_classification', 'residential')
            ->groupBy('property_type')
            ->get();

        $getNewsApi = [];
        //  $this->getNewsApi();
        $getSearchTaggerData = $this->getSearchTaggerData();

        $searchResultCookie = $this->searchResultCookie('to-rent');
        $searchResultCookieForSale = $this->searchResultCookie('for-sale');

        return view('main', compact(
            'setting',
            'propertySolutions',
            'getDistinctProvinces',
            'getUniqueTown',
            'propertyTypeList',
            'getPropertyWebReferenceArray',
            'getNewsApi',
            'getSearchTaggerData',
            'searchResultCookie',
            'searchResultCookieForSale',
            'tab',
            'tabUrlForFooter'
        ));
    }

    public function getNewsApi()
    {
        $url = "https://news.trafalgar.co.za/newsblog.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        $ddd = json_decode($res, true);
        return  $ddd = (object)$ddd;
    }

    // public function getSearchTaggerData()
    // {
    //     $getList =  EntegralApiData::select('province')->where('province', '!=', 'Unalloc')->distinct()->inRandomOrder()->get();
    //     $arrayResult = array();
    //     foreach ($getList as $key => $value) {
    //         if ($value->province != "") {
    //             $getList1 =  EntegralApiData::select('town')->where('province', $value->province)->distinct()->get();
    //             $arrayResult[] = array('id' => $value->province, 'text' => $value->province);

    //             foreach ($getList1 as $key1 => $value1) {
    //                 if ($value1->town != "") {
    //                     $arrayResult[] = array('id' => $value1->town, 'text' => $value1->town . ', ' . $value->province);
    //                     $getList2 =  EntegralApiData::select('suburb')->where('town', $value1->town)->distinct()->get();

    //                     foreach ($getList2 as $key2 => $value2) {
    //                         if ($value2->suburb != $value1->town) {
    //                             if ($value2->suburb != "") {
    //                                 $arrayResult[] = array('id' => $value2->suburb, 'text' => $value2->suburb . ', ' . $value1->town);
    //                             }
    //                         }
    //                     }
    //                 }
    //             }
    //         }
    //     }
    //     return $arrayResult;
    // }


    public function getSearchTaggerData()
    {
        $data = EntegralApiData::select('province', 'town', 'suburb')
            ->where('province', '!=', 'Unalloc')
            ->distinct()
            ->get();

        $result = [];
        $processedProvinces = [];
        $processedTowns = [];

        foreach ($data as $row) {
            if (!empty($row->province) && !isset($processedProvinces[$row->province])) {
                $result[] = ['id' => $row->province, 'text' => $row->province];
                $processedProvinces[$row->province] = true;
            }

            if (!empty($row->town) && !isset($processedTowns[$row->town])) {
                $result[] = ['id' => $row->town, 'text' => "{$row->town}, {$row->province}"];
                $processedTowns[$row->town] = true;
            }

            if (!empty($row->suburb) && $row->suburb !== $row->town) {
                $result[] = ['id' => $row->suburb, 'text' => "{$row->suburb}, {$row->town}"];
            }
        }

        return $result;
    }

    public function searchResultCookie($urlType)
    {

        $valSearch2 = Cookie::get('searchKeyword');
        $array = [];
        if (!empty($valSearch2)) {
            $valSearchArray2 =  explode(',', $valSearch2);
            for ($ar2 = 0; $ar2 < count($valSearchArray2); $ar2++) {
                // echo $valSearchArray2[$ar2];
                $sr = "";
                $sr =  'MATCH(town,suburb,province) AGAINST("' . $valSearchArray2[$ar2] . '")';

                $propertyDatas =   EntegralApiData::select('suburb', 'town', 'province')->WhereRaw($sr)->first();
                if ($propertyDatas !== null) {
                    $suburb = str_replace(" ", "-", $propertyDatas->suburb);
                    $town = str_replace(" ", "-", $propertyDatas->town);
                    $province = str_replace(" ", "-", $propertyDatas->province);
                    //create  url for single city 
                    $customUrl = route($urlType, ['url_city' => $suburb, 'url_town' => $town, 'url_province' => $province, 'city' => $valSearchArray2[$ar2]]);
                    $array[$ar2]['name'] = $valSearchArray2[$ar2];
                    $array[$ar2]['link'] = $customUrl;
                }
            }
        } else {
            $array = [];
        }
        return $array;
    }

    public function aboutUs()
    {
        $setting = Setting::find(1);
        return view('frontPart.aboutUs', compact('setting'));
    }

    public function usefulLinks()
    {
        $setting = Setting::find(1);
        return view('frontPart.usefulLinks', compact('setting'));
    }



    public function bodyCorporate()
    {
        $setting = Setting::find(1);
        return view('frontPart.bodyCorporate', compact('setting'));
    }

    public function onlineServices()
    {
        $setting = Setting::find(1);
        return view('frontPart.onlineServices', compact('setting'));
    }

    public function onlineApplications()
    {
        $setting = Setting::find(1);
        return view('frontPart.onlineApplications', compact('setting'));
    }





    public function emailDisclaimer()
    {
        $setting = Setting::find(1);
        return view('frontPart.emailDisclaimer', compact('setting'));
    }

    public function contactUs()
    {
        $setting = Setting::find(1);
        return view('frontPart.contactUs', compact('setting'));
    }

    public function commercialreports()
    {
        //die('dfffgddf');
        $setting = Setting::find(1);
        return view('frontPart.commercialreports', compact('setting'));
    }


    public function insureFaqs()
    {
        $setting = Setting::find(1);
        return view('frontPart.insureFaqs', compact('setting'));
    }

    public function sell()
    {
        $setting = Setting::find(1);
        return view('frontPart.sell', compact('setting'));
    }
}
