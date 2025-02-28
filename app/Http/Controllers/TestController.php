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
use App\Models\Setting;



class TestController extends Controller
{
  
    public function index(){
         $val1 = "Cron job is working fine on cape Town property! ".date('Y/m/d H:i:s');
         \Log::info($val1);
         die;
        //return view('email.applyForProperty');
        //   $setting = Setting::find(1);
        //   return view('frontPart.jobdetail', compact('setting'));
        $first =  DB::table("entegral_api_data")->distinct()
    ->select("entegral_api_data.town as name"
      );;
$second =  DB::table("entegral_api_data")->distinct()
    ->select("entegral_api_data.street_name as name"
      );

$users =DB::table("entegral_api_data")->distinct()
    ->select("entegral_api_data.suburb as name"
      )->unionAll($first)
        ->unionAll($second)
        ->get();
          echo "<br>";
         print_r($users);
    }
    
    
  
    public function getProperty(Request $request){
       
     
        //dd($request->all());
        $sr = "";
        $sr =  'MATCH(town,suburb,province) AGAINST("'.$request->city.'")';
         if($request->ptype !=""){
        $sr .= " AND  mandate_saletype = '".$request->stype."'";
         }
        if($request->ptype !=""){
            $sr .= " AND  property_type = '".$request->ptype."'";
        }
        if($request->beds != ""){
            $sr .= " AND  bedrooms <= '".$request->beds."'";
        }
        if($request->bath !=""){
            $sr .= " AND  bathrooms <= '".$request->bath."'";
        }
        
           if($request->garage !=""){
            $sr .= " AND  garages <= '".$request->garage."'";
        }
         if($request->fminsize !="" && $request->fmaxsize !="" ){
           // $request->minprice = 500;
            $sr .= " AND floor_size BETWEEN ".$request->fminsize." AND ".$request->fmaxsize."";
        
        }
        
        if($request->minprice !="" && $request->maxprice !="" ){
            $request->minprice = 500;
            $sr .= " AND price BETWEEN ".$request->minprice." AND ".$request->maxprice."";
        
        }
         EntegralApiData::WhereRaw($sr)->toSql();
        $propertyDatas =   EntegralApiData::WhereRaw($sr)->paginate(8);
        $propertyDatas->appends($request->all());
        
       // return view('frontPart.testmap',compact('propertyDatas'));
        return view('frontPart.testSearchResult',compact('propertyDatas'));
        
        
        //       echo "<pre>";
        //     $sr=  'MATCH(country,town,suburb) AGAINST("'.$request->city.'")';
        //   $f =   EntegralApiData::WhereRaw($sr)->where('property_type',$request->ptype)->orWhere('bedrooms', '>', $request->beds)->orWhere('bathrooms', '>', $request->bath)->whereBetween('price', [$request->minprice, $request->maxprice])->get();
        //     print_r($f);

    }
    
     public function getPropertyDetail(Request $request){
        $request->propertid;
      $townName =  EntegralApiData::select('town')->where('property_id', $request->propertid)->first();
    
      if($townName->town == "Durban"){
          $token = 'heJ2Hmr5Ax692JkGVtf1oU2bAuRqHK9NDspia25sCyNYWHRjy+BD3AxQhpggFB/O';
      }else if($townName->town == "Cape Town"){
           $token = 'pdab3oCUefEgYMWcwEbwGaO3YOwyMsCFLHv+J9wRLWEar7Vb+K/AwKoCbJf6vuIF';
      }else if($townName->town == "Port Elizabeth"){
           $token = 'oVfwb/YN/rO9Hhj99grZhpzC/5A2yEH0O4GyN+o7gJO01ME5yvJgkJB7UhgI5SWc';
      }else if($townName->town == "Pretoria"){
           $token = 'dwvFM9KwKjZChmcrPDhpIvMi8/O4dFoeghs/Xmrob5h8Q99GT6q+qaCrAONJ7uIc';
      }else {
        $token =   'iJqzkct/9+S333CWawiPzquO43KX2PNfdceo5Y10Y5W9Z/h+WReevEFIujLvrkJ7';
      }
         $apiURL = 'https://baseapi.entegral.net/api/v1/properties/'.$request->propertid;

        // POST Data
        // $postInput = [
        //     // 'mandate_price_from' => '500000',
        //     //   'mandate_price_to' => "700000",
        //     //  'property_type' => 'apartment'
        //     'property_id' => $request->propertid
        // ];
  
        // Headers
        $headers = [
           'Token' => $token,
           'Accept' => 'application/json'
        ];
  
        $response = Http::withHeaders($headers)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        
      
       // echo $statusCode;  // status code
        //echo "<br>";
       // echo count($responseBody);
      //dd($responseBody);
     
      $propertyData = (object)$responseBody;
        return view('frontPart.singlePropertyDetail',compact('propertyData'));
    }
    
    public function mapview(){
         return view('frontPart.testmap');
        
    }
    
    
    public function mails(Request $request)
    {
        
      Mail::to('arunsain.weblance@gmail.com')->send(new AgentContact($request->all()));
 
      if (Mail::failures()) {
          if(isset($request->pageName) && $request->pageName == 'propertydetail'){
               return redirect(route('agent',['propertid'=>$request->getId]))->with('error', 'Something went wrong!');
              
          }
      
          if(isset($request->pageName) && $request->pageName == 'agent'){
                return redirect(route('agent',['agentid'=>$request->getId]))->with('error', 'Something went wrong!');
          }
      }else{
          
           if(isset($request->pageName) && $request->pageName == 'propertydetail'){
             return redirect(route('propertydetail',['propertid'=>$request->getId]))->with('success', 'Email sent successfully.');
              
          }
      
          if(isset($request->pageName) && $request->pageName == 'agent'){
                return redirect(route('agent',['agentid'=>$request->getId]))->with('success', 'Email sent successfully.');
          }
            
         
         }
    } 
    
    
    public function getNewsApi()
    {
      
       // $apiURL = 'https://news.trafalgar.co.za/newsblog.php';
        $url = "https://news.trafalgar.co.za/newsblog.php";   
        $ch = curl_init();   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url);   
         $res = curl_exec($ch);   
       // echo "<pre>";
        
        $ddd = json_decode($res,true);
      
     // echo json_last_error() ;
     echo "<pre>";
       // var_dump($ddd);
        print_r($ddd);   


    }
    
    public function checkEmail(){
          return view('email.agentcontact');
    }
    
    
    public function testdata(){
        
         $getProvience =  EntegralApiData::select('province')->distinct()->get();
        //  $townName =  EntegralApiData::select('town','province','suburb')->distinct()->get();

            foreach($getProvience as $key => $value){
                $townName =  EntegralApiData::select('town')->where('province',$value->province)->distinct()->get();
                $getProvience[$key]->townData = $townName;
            }
            //dd($getProvience);
          return view('frontPart.testpage',compact('getProvience'));
    }
    
    
     public function abc(){
        // URL
        $apiURL = 'https://sync.entegral.net/api/listings';
        $apiAgent = 'https://sync.entegral.net/api/agents';
        $ids = "492K_27";
       $apiListDetail =  "https://sync.entegral.net/api/listings/".$ids;
        // POST Data
        $postInput = [
             'mandate_status' => 'Active',
        ];
  
        // Headers
        
        $userName_unibase_sandbox = 'unibase_sandbox';
       $password_unibase_sandbox = 'dda4d7c3-96ba-462e-80cf-262fee74f745';
       $token_unibase_sandbox = 'Basic '.base64_encode($userName_unibase_sandbox . ':' . $password_unibase_sandbox);
  
        
        // port_elizabeth
       $userName_port_elizabeth = 'Trafalgar Port Elizabeth';
       $password_port_elizabeth = '830ba548-6f44-4d6c-9a89-f5666e30752d';
       $token_port_elizabeth = 'Basic '.base64_encode($userName_port_elizabeth . ':' . $password_port_elizabeth);
       
        // pretoria
       $userName_pretoria = 'Trafalgar Property Management Pretoria';
       $password_pretoria = '1da831e1-2d25-4ba1-9a4d-81d605d28130';
       $token_pretoria = 'Basic '.base64_encode($userName_pretoria . ':' . $password_pretoria);
       
        // cape_town
       $userName_cape_town = 'Trafalgar Property Management Cape Town';
       $password_cape_town = '66aa41d2-b9f3-4d7a-8b5b-ecca1d8ef08c';
       $token_cape_town = 'Basic '.base64_encode($userName_cape_town . ':' . $password_cape_town);
       
        // Johannesburg
       $userName_Johannesburg = 'Trafalgar Property Management Johannesburg';
       $password_Johannesburg = '9389bc73-febc-47cd-8149-b4deac7b6e07';
       $token_Johannesburg = 'Basic '.base64_encode($userName_Johannesburg . ':' . $password_Johannesburg);
       
        // east_london
       $userName_east_london = 'Trafalgar Property Management East London';
       $password_east_london = 'a191f3a4-c618-4743-9c87-c6df426ca3f1';
       $token_east_london = 'Basic '.base64_encode($userName_east_london . ':' . $password_east_london);
       
        // property_mangement
       $userName_property_mangement = 'Trafalgar Property Management';
       $password_property_mangement = 'b1e791f2-77ba-4891-9c5a-83a1a8ccc54c';
       $token_property_mangement = 'Basic '.base64_encode($userName_property_mangement . ':' . $password_property_mangement);
       
        // property_mangement_pretoria
       $userName_property_mangement_pretoria = 'Trafalgar Property Management PTY LTD - Pretoria';
       $password_property_mangement_pretoria = 'd7b702b7-b56d-4ebb-938d-d3f2d3ca796c';
       $token_property_mangement_pretoria = 'Basic '.base64_encode($userName_property_mangement_pretoria . ':' . $password_property_mangement_pretoria);
       
       
        // $headers = [
        //   'Authorization' => [
        //   'Username' => 'Trafalgar Port Elizabeth',
        //   'Password' => '830ba548-6f44-4d6c-9a89-f5666e30752d'
        //   ]
        // ];
        
          $headers = [
           'Authorization' => $token_unibase_sandbox
        ];
  
        $response = Http::withHeaders($headers)->get($apiListDetail);
        //$response = Http::withHeaders($headers)->get($apiAgent);
        $statusCode = $response->status();
        
    //   echo  $response->getBody();
    //     die;
        $responseBody = json_decode($response->getBody(), true);
       // dd($responseBody);
       
        echo json_encode($responseBody);
     
        exit;
     
        
    }
    
    
   
}
