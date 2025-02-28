<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\EntegralApiData;
use App\Models\EntegralPropertyImage;
use App\Models\SearchReference;
use DB;
use Mail;
use App\Mail\AgentContact;
use Cookie;
use App\Models\Setting;


class CommercialPropertySaleController extends Controller
{
    public function index(Request $request)
    {
        $url_city = $request->url_city;
        $url_town = $request->url_town;
        $url_province = $request->url_province;

        $query = EntegralApiData::where('mandate_saletype', 'for sale')
            ->where('property_classification', 'commercial');

        if ($url_city == 1 && $url_town == 2) {
            $province = str_replace("-", " ", $url_province);
            $query->where('province', $province);
            Cookie::queue(Cookie::make('multiplekeywords', "", 360));
        } elseif ($url_city == 1 && $url_town != 2) {
            $town = str_replace("-", " ", $url_town);
            $province = str_replace("-", " ", $url_province);
            $query->where('town', $town)->where('province', $province);
            Cookie::queue(Cookie::make('multiplekeywords', "", 360));
        } elseif ($url_city == "multiple-areas") {
            $multipletown = $request->url_town;
            $explode = explode("&", $multipletown);

            $query->where(function ($q) use ($explode) {
                foreach ($explode as $multipleVal) {
                    $keyword = explode(',', $multipleVal);
                    if (!empty($keyword)) {
                        if (isset($keyword[0]) && isset($keyword[1])) {
                            $q->orWhere(function ($subquery) use ($keyword) {
                                $subquery->where('town', trim(str_replace("-", " ", $keyword[0])))
                                    ->where('province', trim(str_replace("-", " ", $keyword[1])));
                            });
                        } else {
                            $q->orWhere('province', trim(str_replace("-", " ", $multipleVal)));
                        }
                    }
                }
            });
            Cookie::queue(Cookie::make('multiplekeywords', $request->url_town, 360));
        } else {
            $suburb = str_replace("-", " ", $url_city);
            $town = str_replace("-", " ", $url_town);
            $province = str_replace("-", " ", $url_province);

            $query->where('suburb', $suburb)
                ->where('town', $town)
                ->where('province', $province);
            Cookie::queue(Cookie::make('multiplekeywords', "", 360));
        }

        if ($request->ptype != "") {
            $propertyTypes = explode(",", $request->ptype);
            $query->whereIn('property_type', $propertyTypes);
        }

        if ($request->beds != "") {
            $query->where('bedrooms', '<=', $request->beds);
        }

        if ($request->bath != "") {
            $query->where('bathrooms', '<=', $request->bath);
        }

        if ($request->garage != "") {
            $query->where('garages', '<=', $request->garage);
        }

        if ($request->fminsize != "" && $request->fmaxsize != "") {
            $query->whereBetween('floor_size', [$request->fminsize, $request->fmaxsize]);
        }

        if ($request->minprice != "" && $request->maxprice != "") {
            $query->whereBetween('price', [$request->minprice, $request->maxprice]);
        } elseif ($request->minprice != "") {
            $query->where('price', '>=', $request->minprice);
        } elseif ($request->maxprice != "") {
            $query->where('price', '<=', $request->maxprice);
        }

        if (isset($request->sortType) && $request->sortType != "") {
            switch ($request->sortType) {
                case 'mostrecent':
                    $query->orderBy('id', 'desc');
                    break;
                case 'lowtohigh':
                    $query->orderBy('price', 'asc');
                    break;
                case 'hightolow':
                    $query->orderBy('price', 'desc');
                    break;
                case 'alphabat':
                    $query->orderByRaw("CASE WHEN complex_name != '' THEN complex_name ELSE street_name END ASC");
                    break;
                default:
                    $query->orderBy('id', 'asc');
                    break;
            }
        } else {
            $query->orderBy('id', 'asc');
        }

        $propertyDatas = $query->paginate(8)->appends($request->all());

        Cookie::queue(Cookie::make('searchKeyword', $request->city, 360));
        Cookie::queue(Cookie::make('searchUrls', route('commercial-property-for-sale', ['url_city' => $url_city, 'url_town' => $url_town, 'url_province' => $url_province]), 360));

        $setting = Setting::find(1);
        $getSearchTaggerData = $this->getSearchTaggerData();
        $propertyTypeList = EntegralApiData::select('property_type')
            ->where('property_classification', 'commercial')
            ->groupBy('property_type')
            ->get();
        $getDistinctSuburb = EntegralApiData::where('mandate_saletype', 'for sale')
            ->where('property_classification', 'commercial')
            ->inRandomOrder()
            ->groupBy('suburb')
            ->take(30)
            ->get();
        $searchResultCookie = $this->searchResultCookie();
        $sideBarCodeForSearch = $this->sideBarCodeForSearch($request);

        // return view('frontPart.propertySearching.propertySearchCommercialSaleList', compact(
        //     'setting',
        //     'propertyDatas',
        //     'propertyTypeList',
        //     'getDistinctSuburb',
        //     'getSearchTaggerData',
        //     'sideBarCodeForSearch',
        //     'searchResultCookie'
        // ), ['url_city' => $url_city, 'url_town' => $town, 'url_province' => $province]);
         return view('frontPart.propertySearching.propertySearchCommercialSaleList', compact(
            'setting',
            'propertyDatas',
            'propertyTypeList',
            'getDistinctSuburb',
            'getSearchTaggerData',
            'sideBarCodeForSearch',
            'searchResultCookie'
        ), ['url_city' => $url_city, 'url_town' => $url_town, 'url_province' => $url_province]);

    }








    public function getprovience(Request $request)
    {

        $city = $request->city;
        //  echo json_encode($city);

        /***my new code***/

        $citycommercialdata = trim($request->citycommercialdata, '@@');

        $multiparam = str_replace('@@', '&', $citycommercialdata);
        $multiparam1 = str_replace(' ', '-', $multiparam);

        $explode_city = explode('@@', $citycommercialdata);

        if (count($explode_city) == 1) {

            $agn_exp = explode(',', $explode_city[0]);

            if (isset($agn_exp[0]) && isset($agn_exp[1])) {

                $check_for_town = EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('town', $agn_exp[0])->get();

                if (!$check_for_town->isEmpty()) {

                    $propertyDatas =   EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('town', trim($agn_exp[0]))->where('province', trim($agn_exp[1]))->first();

                    $suburb = 1;
                    $town = str_replace(" ", "-", $propertyDatas->town);
                    $province = str_replace(" ", "-", $propertyDatas->province);

                    if (!$propertyDatas) {

                        $status =  "property_not_avaliable";
                        $customUrl = "";
                    } else {
                        $status =  "single_city_name";
                        $customUrl = route('commercial-property-for-sale', ['url_town' => $town, 'url_province' => $province, 'url_city' => $suburb]);
                    }
                } else {

                    $propertyDatas = EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('suburb', trim($agn_exp[0]))->where('town', trim($agn_exp[1]))->first();

                    if (!$propertyDatas) {

                        $status =  "property_not_avaliable";
                        $customUrl = "";
                    } else {
                        $suburb = str_replace(" ", "-", $propertyDatas->suburb);
                        $town = str_replace(" ", "-", $propertyDatas->town);
                        $province = str_replace(" ", "-", $propertyDatas->province);
                        $status =  "single_city_name";
                        $customUrl = route('commercial-property-for-sale', ['url_city' => $suburb, 'url_town' => $town, 'url_province' => $province]);
                    }
                }
            } else {
                $propertyDatas =   EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('province', trim($explode_city[0]))->first();
                //data as per province

                if (!$propertyDatas) {

                    $status =  "property_not_avaliable";
                    $customUrl = "";
                } else {
                    $province = str_replace(" ", "-", $propertyDatas->province);
                    $status =  "single_city_name";
                    $customUrl = route('commercial-property-for-sale', ['url_city' => 1, 'url_town' => 2, 'url_province' => $province]);
                }
            }

            if ($status == "property_not_avaliable") {


                $propertyDatas =   EntegralApiData::Where('property_id', $citycommercialdata)->first();

                $status =  "contain_property_id";

                //create  url for web reference number 
                if ($propertyDatas === null) {
                    $status =  "property_not_avaliable";
                    $customUrl = "";
                } else {
                    $customUrl = $this->singlPropertyDetailPage($propertyDatas);
                }
            }
        } else {
            $status = 'multiple_city_name';
            $propertyDatas = '';
            //create  url for multiple city 
            $customUrl = route('commercial-property-for-sale.multiple-areas', ['pid' => $multiparam1]);
        }
        echo json_encode(['status' => $status, 'dd' => $propertyDatas, 'customUrl' => $customUrl, 'message' => $request->city]);
        // exit;
        /***my new code***/

        /*if(count($city) < 2){
            // this condition for having  single city or web refernce count
            for($r=0; $r < count($city); $r++){
               
               // check if city contain number  or  digit
                if(is_numeric($city[$r])){
                    $propertyDatas =   EntegralApiData::Where('property_id',$city[$r])->first();
                     if($propertyDatas === null){
                         $status =  "property_not_avaliable";
                        $customUrl = '';
                    }else{
                    $status =  "contain_property_id";
                     $customUrl = $this->singlPropertyDetailPage($propertyDatas);
                    }
                  
                    break;
                }else{
                      // check if city cantain string
                    $sr = "";
                    $sr =  'MATCH(town,suburb,province) AGAINST("'.$city[$r].'")';
                    $status =  "single_city_name";
                    $propertyDatas =   EntegralApiData::WhereRaw($sr)->first();
                     if($propertyDatas === null){
                         $status =  "property_not_avaliable";
                        $customUrl = '';
                    }else{
                    $suburb = str_replace(" ","-",$propertyDatas->suburb);
                    $town = str_replace(" ","-",$propertyDatas->town);
                    $province = str_replace(" ","-",$propertyDatas->province);
                    //create  url for single city 
                    $customUrl = route('commercial-property-for-sale',['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province]);
                    }
      
                    break;
                }
           
            }
        }else{
            
            // this condition for having  multiple city
             for($r=0; $r < count($city); $r++){
               
               // condition for checking array of city contain webrefernce , if its contain web reference the loop is break 
                if(is_numeric($city[$r])){
                    $propertyDatas =   EntegralApiData::Where('property_id',$city[$r])->first();
                     if($propertyDatas === null){
                         $status =  "property_not_avaliable";
                        $customUrl = '';
                    }else{
                    $status =  "contain_property_id";
                    //create  url for web reference number 
                    $customUrl = $this->singlPropertyDetailPage($propertyDatas);
                    }
                    break;
                }else{
                   // its contain multiple city of array
                    $status = 'multiple_city_name';
            $propertyDatas = '';
             //create  url for multiple city 
            $customUrl = route('commercial-property-for-sale.multiple-areas');
                }
           
            }
            
        }
        echo json_encode(['status'=> $status,'dd'=>$propertyDatas,'customUrl'=> $customUrl ,'message' => $request->city]);
        */
    }


    public function getSearchTaggerData()
    {
        $getList =  EntegralApiData::select('province')->where('province', '!=', 'Unalloc')->distinct()->inRandomOrder()->get();
        $arrayResult = array();
        foreach ($getList as $key => $value) {

            $getList1 =  EntegralApiData::select('town')->where('province', $value->province)->distinct()->get();
            $arrayResult[] = array('id' => $value->province, 'text' => $value->province);

            foreach ($getList1 as $key1 => $value1) {

                $arrayResult[] = array('id' => $value1->town, 'text' => $value1->town . ', ' . $value->province);
                $getList2 =  EntegralApiData::select('suburb')->where('town', $value1->town)->distinct()->get();

                foreach ($getList2 as $key2 => $value2) {

                    if ($value2->suburb != $value1->town) {
                        $arrayResult[] = array('id' => $value2->suburb, 'text' => $value2->suburb . ', ' . $value1->town);
                    }
                }
            }
        }
        return $arrayResult;
    }

    public function sideBarCodeForSearch($request)
    {
        $url_city = $request->url_city;
        $url_town = $request->url_town;
        $url_province = $request->url_province;

        $query = EntegralApiData::where('mandate_saletype', 'for sale')
            ->where('property_classification', 'commercial');

        if ($url_city == 1 && $url_town == 2) {
            $province = str_replace("-", " ", $url_province);
            $query->where('province', '=', $province);
        } elseif ($url_city == 1 && $url_town != 2) {
            $town = str_replace("-", " ", $url_town);
            $province = str_replace("-", " ", $url_province);
            $query->where('town', '=', $town)->where('province', '=', $province);
        } elseif ($url_city == "multiple-areas") {
            $multipletown = $request->url_town;
            $explode = explode("&", $multipletown);

            $query->where(function ($q) use ($explode) {
                foreach ($explode as $multipleVal) {
                    $keyword = explode(',', $multipleVal);
                    if (!empty($keyword)) {
                        if (isset($keyword[0]) && isset($keyword[1])) {
                            $check_for_town = EntegralApiData::where('mandate_saletype', 'for sale')
                                ->where('property_classification', 'commercial')
                                ->where('town', trim(str_replace("-", " ", $keyword[0])))
                                ->exists();

                            if ($check_for_town) {
                                $q->orWhere(function ($subquery) use ($keyword) {
                                    $subquery->where('town', '=', trim(str_replace("-", " ", $keyword[0])))
                                        ->where('province', '=', trim(str_replace("-", " ", $keyword[1])));
                                });
                            } else {
                                $q->orWhere(function ($subquery) use ($keyword) {
                                    $subquery->where('suburb', '=', trim(str_replace("-", " ", $keyword[0])))
                                        ->where('town', '=', trim(str_replace("-", " ", $keyword[1])));
                                });
                            }
                        } else {
                            $q->orWhere('province', '=', trim(str_replace("-", " ", $multipleVal)));
                        }
                    }
                }
            });
        } else {
            $suburb = str_replace("-", " ", $url_city);
            $town = str_replace("-", " ", $url_town);
            $province = str_replace("-", " ", $url_province);

            $query->where('suburb', '=', $suburb)
                ->where('town', '=', $town)
                ->where('province', '=', $province);
        }

        $sideBarSql = $query->groupBy('property_type')->get();
        return $sideBarSql;
    }




    public function singlPropertyDetailPage($propertyDatas)
    {

        $suburb = str_replace(" ", "-", $propertyDatas->suburb);
        $town = str_replace(" ", "-", $propertyDatas->town);
        $province = str_replace(" ", "-", $propertyDatas->province);
        $mandate_saletype = str_replace(" ", "-", $propertyDatas->mandate_saletype);

        return $customUrl = route('property-' . $mandate_saletype, ['p_suburb' => $suburb, 'p_town' => $town, 'p_province' => $province, 'p_id' => $propertyDatas->id, 'p_ref' => $propertyDatas->property_id]);
    }

    public function searchResultCookie()
    {

        $valSearch2 = Cookie::get('searchKeyword');
        $array = [];

        $searchUrlsData = Cookie::get('searchUrls');
        $multiplekeywords = Cookie::get('multiplekeywords');
        $array = [];

        if ($multiplekeywords != '') {

            $explode = explode("&", $multiplekeywords);

            $sr  = 0;
            foreach ($explode as $multipleVal) {
                // echo $multipleVal;
                $keyword = explode(',', $multipleVal);

                if (!empty($keyword)) {

                    if (isset($keyword[0]) && isset($keyword[1])) {

                        $check_for_town = EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('town', trim(str_replace("-", " ", $keyword[0])))->get();

                        if (!$check_for_town->isEmpty()) {

                            //DB::enableQueryLog();
                            $t = trim(str_replace("-", " ", $keyword[0]));
                            $p = trim(str_replace("-", " ", $keyword[1]));

                            $propertyDatas =   EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('town', $t)->where('province', $p)->first();

                            //$quries = DB::getQueryLog();

                            $suburb = 1;
                            $town = str_replace(" ", "-", $propertyDatas->town);
                            $province = str_replace(" ", "-", $propertyDatas->province);

                            if (!$propertyDatas) {


                                $customUrl = "";
                            } else {

                                $customUrl = route('commercial-property-for-sale', ['url_town' => $town, 'url_province' => $province, 'url_city' => $suburb]);
                            }
                        } else {

                            $s = trim(str_replace("-", " ", $keyword[0]));
                            $t = trim(str_replace("-", " ", $keyword[1]));

                            $propertyDatas = EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('suburb', $s)->where('town', $t)->first();


                            if (!$propertyDatas) {


                                $customUrl = "";
                            } else {
                                $suburb = str_replace(" ", "-", $propertyDatas->suburb);
                                $town = str_replace(" ", "-", $propertyDatas->town);
                                $province = str_replace(" ", "-", $propertyDatas->province);

                                $customUrl = route('commercial-property-for-sale', ['url_city' => $suburb, 'url_town' => $town, 'url_province' => $province]);
                            }
                        }
                    } else {
                        $single = trim(str_replace("-", " ", $keyword[0]));
                        $propertyDatas =   EntegralApiData::where('mandate_saletype', 'for sale')->where('property_classification', 'commercial')->where('province', $single)->first();

                        if (!$propertyDatas) {
                            $customUrl = "";
                        } else {
                            $province = str_replace(" ", "-", $propertyDatas->province);
                            $customUrl = route('commercial-property-for-sale', ['url_city' => 1, 'url_town' => 2, 'url_province' => $province]);
                        }
                    }
                }
                $nn = explode(',', $multipleVal);
                $array[$sr]['name'] = str_replace('-', " ", $nn[0]);
                $array[$sr]['link'] =  $customUrl . "?city=" . str_replace(" ", "+", str_replace("-", " ", $multipleVal));
                $sr++;
            }
        } else {

            if (!empty($valSearch2)) {
                $valSearchArray2 =  explode(',', $valSearch2);
                for ($ar2 = 0; $ar2 < count($valSearchArray2); $ar2++) {
                    // echo $valSearchArray2[$ar2];
                    $sr = "";
                    $sr =  'MATCH(town,suburb,province) AGAINST("' . $valSearchArray2[$ar2] . '")';

                    $propertyDatas =   EntegralApiData::WhereRaw($sr)->first();
                    if ($propertyDatas !== null) {
                        $suburb = str_replace(" ", "-", $propertyDatas->suburb);
                        $town = str_replace(" ", "-", $propertyDatas->town);
                        $province = str_replace(" ", "-", $propertyDatas->province);
                        //create  url for single city 
                        $customUrl = route('commercial-property-for-sale', ['url_city' => $suburb, 'url_town' => $town, 'url_province' => $province, 'city' => $valSearchArray2[$ar2]]);
                        $array[$ar2]['name'] = $valSearchArray2[$ar2];
                        $array[$ar2]['link'] = $customUrl;
                    }
                }
            } else {
                $array = [];
            }
        }
        return $array;
    }
}
