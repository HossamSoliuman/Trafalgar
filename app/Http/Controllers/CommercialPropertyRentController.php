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

class CommercialPropertyRentController extends Controller
{
    public function index(Request $request){
      
        
        /*$explode = explode(",",$request->city);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
       
        $sr = "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";*/
        
        $url_city = $request->url_city;
        $url_town = $request->url_town;
        $url_province = $request->url_province;
        
        $sr = "";
        
        if($url_city == 1 && $url_town == 2){
             
            $province = str_replace("-"," ",$url_province);
            $town = 2;
            $suburb = 1;
            $sr = "province = '".$province."'";
            $cookie = Cookie::queue(Cookie::make('multiplekeywords', "", 360));
         }elseif($url_city == 1 && $url_town !=2){
             
            $town = str_replace("-"," ",$url_town);
            $province = str_replace("-"," ",$url_province);
             $suburb = 1;
            $sr = "town = '".$town."' AND province = '".$province."'";
            
            $cookie = Cookie::queue(Cookie::make('multiplekeywords', "", 360));
             
         }elseif($url_city=="multiple-areas"){
             
             $multipletown = $request->url_town;
             $explode = explode("&",$multipletown);
             
             foreach($explode as $multipleVal){
                 $keyword = explode(',',$multipleVal);
                 if(!empty($keyword)){
                     
                    if(isset($keyword[0]) && isset($keyword[1])){
                
                    $check_for_town = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('town',trim(str_replace("-"," ",$keyword[0])))->get();   
                   
                    if(!$check_for_town->isEmpty()){
                        
                         $t = trim(str_replace("-"," ",$keyword[0]));
                         $p = trim(str_replace("-"," ",$keyword[1]));
                         $sr .= "(town = '".$t."' AND province = '".$p."') OR ";
                        
                        
                    }else{
                        
                         $s = trim(str_replace("-"," ",$keyword[0]));
                         $t = trim(str_replace("-"," ",$keyword[1]));
                        
                        $sr .= "(suburb = '".$s."' AND town = '".$t."') OR ";
                    } 
                 }else{
                     //search for province
                     $sr .= "(province = '".$multipleVal."') OR ";
                 }
                 
                 }
                 
             }
             
            $sr = trim($sr," OR ");
            $sr = "(".$sr.")";
            $town = 3;
            $suburb = 3;
            $province = 3;
            
            $cookie = Cookie::queue(Cookie::make('multiplekeywords', $request->url_town, 360));
            
         }else{
            $suburb = str_replace("-"," ",$url_city);
            $town = str_replace("-"," ",$url_town);
            $province = str_replace("-"," ",$url_province); 
            
            $sr = "suburb = '".$suburb."' AND town = '".$town."' AND province = '".$province."'";
            $cookie = Cookie::queue(Cookie::make('multiplekeywords', "", 360));
         }
        
        if ($request->ptype != ""){
            
            $explode_ptype = explode(",",$request->ptype);
            $array_ptype = array();
            foreach($explode_ptype as $res_ptypr){
                $array_ptype[] = '"'.$res_ptypr.'"';
            }
            $implode_ptype = implode(",",$array_ptype);
        
            $sr .= " AND property_type IN (".$implode_ptype.")";
        }
        
        $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'commercial'";
     
        if ($request->beds != ""){
            $sr .= " AND  bedrooms <= '" . $request->beds . "'";
        }
        
        if ($request->bath != ""){
            $sr .= " AND  bathrooms <= '" . $request->bath . "'";
        }

        if ($request->garage != ""){
            $sr .= " AND  garages <= '" . $request->garage . "'";
        }
        
        if ($request->fminsize != "" && $request->fmaxsize != ""){
            // $request->minprice = 500;
            $sr .= " AND floor_size BETWEEN " . $request->fminsize . " AND " . $request->fmaxsize . "";
        }

        if ($request->minprice != "" && $request->maxprice != ""){
            
            $request->minprice = 500;
            $sr .= " AND price BETWEEN " . $request->minprice . " AND " . $request->maxprice . "";
        }
        
        if ($request->minprice == "" && $request->maxprice != ""){
            
            $sr .= " AND price >= " . $request->maxprice ."";
        }
        
         if ($request->minprice != "" && $request->maxprice == ""){
            
            $sr .= " AND price <= " . $request->minprice ."";
        }
        
        
         // custom filter parameter
         
         
    $ddh =    EntegralApiData::WhereRaw($sr)->toSql();
     // dd($ddh);
        
        // add sorting filter for price and most recent
        if (isset($request->sortType) && $request->sortType != "")
        {

            if ($request->sortType == "mostrecent")
            {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'desc')
                    ->paginate(8);
            }
            else if ($request->sortType == "lowtohigh")
            {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('price', 'asc')
                    ->paginate(8);

            }
            else if ($request->sortType == "hightolow")
            {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('price', 'desc')
                    ->paginate(8);

            }
            else if ($request->sortType == "alphabat")
            {

                /*$propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('headline')
                    ->paginate(8);*/
                 $propertyDatas = EntegralApiData::WhereRaw($sr)->orderByRaw("CASE WHEN complex_name != '' then complex_name Else street_name END ASC")->paginate(8);        
            }
            else
            {
                $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'asc')
                    ->paginate(8);
            }
        }
        else
        {
            $propertyDatas = EntegralApiData::WhereRaw($sr)->orderBy('id', 'asc')
                ->paginate(8);
        }
        
       
        
         // add sorting filter for price and most recent
      
        //NEWCODE        
        // $getDistinctSuburb = EntegralApiData::distinct('suburb')->select('suburb')->WhereRaw($sr)
        //         ->orderBy('suburb', 'asc')
        //         ->get();   
                 $getDistinctSuburb = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->inRandomOrder()->groupBy('suburb')->take(30)->get();
         // footer suburb array  
         
        $propertyDatas->appends($request->all());
        
        // add search keyword with cookies
        $cookie = Cookie::queue(Cookie::make('searchKeyword', $request->city, 360));
           // add search keyword with cookies
           
         $cookie = Cookie::queue(Cookie::make('searchUrls', route('commercial-property-for-rent',['url_city'=>$url_city,'url_town'=>$url_town,'url_province'=>$url_province]), 360));   
        
        $setting = Setting::find(1);
      
        
        // tagger list by manpreet
        $getSearchTaggerData = $this->getSearchTaggerData();
         // tagger list by manpreet

        $propertyTypeList = EntegralApiData::select('property_type')->where('property_classification','commercial')->groupBy('property_type')
            ->get();

       
        $sideBarCodeForSearch = $this->sideBarCodeForSearch($request);
         $searchResultCookie = $this->searchResultCookie();
        return view('frontPart.propertySearching.propertySearchCommercialRentList', compact('setting', 'propertyDatas', 'propertyTypeList','getDistinctSuburb','getSearchTaggerData','sideBarCodeForSearch','searchResultCookie'),['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province]);
        
    }




  


    public function getprovience(Request $request){
    
        $city = $request->city;
      //  echo json_encode($city);
      
         /***my new code***/
        
        $citycommercialdata = trim($request->citycommercialdata,'@@');
        
        $multiparam = str_replace('@@','&',$citycommercialdata);
        $multiparam1 = str_replace(' ','-',$multiparam);
        
        $explode_city = explode('@@',$citycommercialdata);
        
        if(count($explode_city) == 1){
            
            $agn_exp = explode(',',$explode_city[0]);
            
            if(isset($agn_exp[0]) && isset($agn_exp[1])){
                
                    $check_for_town = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('town',$agn_exp[0])->get();   
                   
                    if(!$check_for_town->isEmpty()){
        
                        $propertyDatas =   EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('town',trim($agn_exp[0]))->where('province',trim($agn_exp[1]))->first();
                        
                        $suburb = 1;
                        $town = str_replace(" ","-",$propertyDatas->town);
                        $province = str_replace(" ","-",$propertyDatas->province);
                      
                        if(!$propertyDatas){
                           
                            $status =  "property_not_avaliable";
                            $customUrl = "";
                           
                        }else{
                            $status =  "single_city_name";
                            $customUrl = route('commercial-property-for-rent',['url_town'=>$town,'url_province'=>$province,'url_city'=>$suburb]);
                        }
                    }else{

                        $propertyDatas = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('suburb',trim($agn_exp[0]))->where('town',trim($agn_exp[1]))->first(); 
                      
                        if(!$propertyDatas){
                       
                            $status =  "property_not_avaliable";
                            $customUrl = "";
                       
                        }else{
                            $suburb = str_replace(" ","-",$propertyDatas->suburb);
                            $town = str_replace(" ","-",$propertyDatas->town);
                            $province = str_replace(" ","-",$propertyDatas->province);
                            $status =  "single_city_name";
                            $customUrl = route('commercial-property-for-rent',['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province]);
                        }
                    }
                   
            }else{
                $propertyDatas =   EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('province',trim($explode_city[0]))->first();
                //data as per province
              
                if(!$propertyDatas){
                       
                            $status =  "property_not_avaliable";
                            $customUrl = "";
                       
                        }else{
                            $province = str_replace(" ","-",$propertyDatas->province);
                            $status =  "single_city_name";
                            $customUrl = route('commercial-property-for-rent',['url_city'=>1,'url_town'=>2,'url_province'=>$province]);
                        }
            }
            
            if($status == "property_not_avaliable"){
            
            
                $propertyDatas =   EntegralApiData::Where('property_id',$citycommercialdata)->first();
                
                $status =  "contain_property_id";
                     
                         //create  url for web reference number 
                if($propertyDatas === null){
                    $status =  "property_not_avaliable";
                    $customUrl = "";
                }else{
                    $customUrl = $this->singlPropertyDetailPage($propertyDatas);
                }
            }
            
        }else{
            $status = 'multiple_city_name';
            $propertyDatas = '';
             //create  url for multiple city 
            $customUrl = route('commercial-property-for-rent.multiple-areas',['pid'=>$multiparam1]);
        }
        echo json_encode(['status'=> $status,'dd'=>$propertyDatas,'customUrl'=> $customUrl ,'message' => $request->city]);
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
                    
                     //create  url for web reference number 
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
                    $customUrl = route('commercial-property-for-rent',['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province]);
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
            $customUrl = route('commercial-property-for-rent.multiple-areas');
                }
           
            }
            
        }
        echo json_encode(['status'=> $status,'dd'=>$propertyDatas,'customUrl'=> $customUrl ,'message' => $request->city]);
        */

    }


       public function getSearchTaggerData(){
        $getList =  EntegralApiData::select('province')->where('province','!=','Unalloc')->distinct()->inRandomOrder()->get();
		  $arrayResult = array();
		  foreach($getList as $key => $value){
			  
			  $getList1 =  EntegralApiData::select('town')->where('province',$value->province)->distinct()->get();
			  $arrayResult[] = array('id'=>$value->province,'text'=>$value->province);
			  
			  foreach($getList1 as $key1 => $value1){
				  
				  $arrayResult[] = array('id'=>$value1->town,'text'=>$value1->town.', '.$value->province);
				  $getList2 =  EntegralApiData::select('suburb')->where('town',$value1->town)->distinct()->get();
				  
				  foreach($getList2 as $key2 => $value2){	  
					  
					  if($value2->suburb != $value1->town){
					  $arrayResult[] = array('id'=>$value2->suburb,'text'=>$value2->suburb.', '.$value1->town);
					  }
				  }
			  }
			  			  
		  }
		  return $arrayResult;
    }
    
    
     public function sideBarCodeForSearch($request){
              
              /*$cityArray = explode(",", $request->city);
               $srNew = "";
               $explode = explode(",",$cityArray[0]);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
                $implode = implode("  ",$array);
                $srNew = "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";*/
                
          $url_city = $request->url_city;
          $url_town = $request->url_town;
          $url_province = $request->url_province;
         
          $srNew = "";
          
           if($url_city == 1 && $url_town == 2){
             
            $province = str_replace("-"," ",$url_province);
            $town = 2;
            $suburb = 1;
            $srNew = "province = '".$province."'";
         }elseif($url_city == 1 && $url_town !=2){
             
            $town = str_replace("-"," ",$url_town);
            $province = str_replace("-"," ",$url_province);
             $suburb = 1;
            $srNew = "town = '".$town."' AND province = '".$province."'";
             
         }elseif($url_city=="multiple-areas"){
             
             $multipletown = $request->url_town;
             $explode = explode("&",$multipletown);
             
             foreach($explode as $multipleVal){
                 $keyword = explode(',',$multipleVal);
                 if(!empty($keyword)){
                     
                     
                    if(isset($keyword[0]) && isset($keyword[1])){
                
                        $check_for_town = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('town',trim(str_replace("-"," ",$keyword[0])))->get();   
                       
                        if(!$check_for_town->isEmpty()){
                            
                             $t = trim(str_replace("-"," ",$keyword[0]));
                             $p = trim(str_replace("-"," ",$keyword[1]));
                             $srNew .= "(town = '".$t."' AND province = '".$p."') OR ";
                            
                            
                        }else{
                            
                             $s = trim(str_replace("-"," ",$keyword[0]));
                             $t = trim(str_replace("-"," ",$keyword[1]));
                            
                            $srNew .= "(suburb = '".$s."' AND town = '".$t."') OR ";
                        } 
                     }else{
                         //search for province
                         $srNew .= "(province = '".$multipleVal."') OR ";
                     } 
                     
                    
                 
                 }
                 
             }
             
            $srNew = trim($srNew," OR ");
            $town = 3;
            $suburb = 3;
            $province = 3;
         }else{
            $suburb = str_replace("-"," ",$url_city);
            $town = str_replace("-"," ",$url_town);
            $province = str_replace("-"," ",$url_province); 
            
            $srNew = "suburb = '".$suburb."' AND town = '".$town."' AND province = '".$province."'";
         }
                
                $srNew .= " AND  mandate_saletype = 'for rent'";
                $srNew .= " AND  property_classification = 'commercial'";
            $sideBarSql = EntegralApiData::WhereRaw($srNew)->groupBy('property_type')->get();
        return $sideBarSql;
    }
    
    public function singlPropertyDetailPage($propertyDatas){
        
        $suburb = str_replace(" ","-",$propertyDatas->suburb);
        $town = str_replace(" ","-",$propertyDatas->town);
        $province = str_replace(" ","-",$propertyDatas->province);
        $mandate_saletype = str_replace(" ","-",$propertyDatas->mandate_saletype);
        
        return $customUrl = route('property-'.$mandate_saletype,['p_suburb'=>$suburb, 'p_town'=>$town, 'p_province'=>$province,'p_id'=>$propertyDatas->id,'p_ref'=>$propertyDatas->property_id]);
    }
    
    public function searchResultCookie(){
        
        $valSearch2 = Cookie::get('searchKeyword');
         $searchUrlsData = Cookie::get('searchUrls');
        $multiplekeywords = Cookie::get('multiplekeywords');
        $array = [];
        
        if($multiplekeywords!=''){
        
        $explode = explode("&",$multiplekeywords);
             
             $sr  =0;
             foreach($explode as $multipleVal){
                // echo $multipleVal;
                  $keyword = explode(',',$multipleVal);
                  
                  if(!empty($keyword)){
            
                    if(isset($keyword[0]) && isset($keyword[1])){
                        
                        $check_for_town = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('town',trim(str_replace("-"," ",$keyword[0])))->get();   
                       
                        if(!$check_for_town->isEmpty()){
                            
                           //DB::enableQueryLog();
                            $t = trim(str_replace("-"," ",$keyword[0]));
                            $p = trim(str_replace("-"," ",$keyword[1]));
                           
                            $propertyDatas =   EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('town',$t)->where('province',$p)->first();
                            
                            //$quries = DB::getQueryLog();
                            
                            $suburb = 1;
                            $town = str_replace(" ","-",$propertyDatas->town);
                            $province = str_replace(" ","-",$propertyDatas->province);
                          
                            if(!$propertyDatas){
                               
                               
                                $customUrl = "";
                               
                            }else{
                                
                                $customUrl = route('commercial-property-for-rent',['url_town'=>$town,'url_province'=>$province,'url_city'=>$suburb]);
                            }
                        }else{
                            
                             $s = trim(str_replace("-"," ",$keyword[0]));
                             $t = trim(str_replace("-"," ",$keyword[1]));
    
                            $propertyDatas = EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('suburb',$s)->where('town',$t)->first(); 
                         
                           
                            if(!$propertyDatas){
                           
                               
                                $customUrl = "";
                           
                            }else{
                                $suburb = str_replace(" ","-",$propertyDatas->suburb);
                                $town = str_replace(" ","-",$propertyDatas->town);
                                $province = str_replace(" ","-",$propertyDatas->province);
                               
                                $customUrl = route('commercial-property-for-rent',['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province]);
                            }
                        }
                        
                    }else{
                            $single = trim(str_replace("-"," ",$keyword[0]));
                            $propertyDatas =   EntegralApiData::where('mandate_saletype','for rent')->where('property_classification','commercial')->where('province',$single)->first();
                   
                            if(!$propertyDatas){
                                $customUrl = "";
                           
                            }else{
                                $province = str_replace(" ","-",$propertyDatas->province);
                                $customUrl = route('commercial-property-for-rent',['url_city'=>1,'url_town'=>2,'url_province'=>$province]);
                            }
                    }
                    
                  }
                  $nn = explode(',',$multipleVal);
                  $array[$sr]['name'] = str_replace('-'," ",$nn[0]);
                  $array[$sr]['link'] =  $customUrl."?city=".str_replace(" ","+",str_replace("-"," ",$multipleVal));
                 $sr++;
             } 
         
            
        }else{
            if(!empty($valSearch2)){
                $valSearchArray2 =  explode(',',$valSearch2) ;
                for($ar2 = 0; $ar2 < count($valSearchArray2); $ar2++){ 
                    // echo $valSearchArray2[$ar2];
                    $sr = "";
                    $sr =  'MATCH(town,suburb,province) AGAINST("'.$valSearchArray2[$ar2].'")';
                    
                    $propertyDatas =   EntegralApiData::WhereRaw($sr)->first();
                     if($propertyDatas !== null){
                    $suburb = str_replace(" ","-",$propertyDatas->suburb);
                    $town = str_replace(" ","-",$propertyDatas->town);
                    $province = str_replace(" ","-",$propertyDatas->province);
                    //create  url for single city 
                    $customUrl = route('commercial-property-for-rent',['url_city'=>$suburb,'url_town'=>$town,'url_province'=>$province,'city'=>$valSearchArray2[$ar2]]);
                    //$array[$ar2]['name'] = $valSearchArray2[$ar2];
                     $array[$ar2]['name'] =  str_replace('-'," ",$valSearchArray2[$ar2]);
                    //$array[$ar2]['link'] = $customUrl;
                    $array[$ar2]['link'] = Cookie::get('searchUrls')."?city=".str_replace(" ","+",str_replace('-'," ",$valSearchArray2[$ar2]));
                     }
                
                }
            
            }else{
                $array = [];
            }
        
        }
        return $array;
    }
}
