<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\EntegralApiData;


class PropertyRentByArea extends Controller
{
    public function index(){
          $setting = Setting::find(1);
        return view('frontPart.propertyRentArea.propertyToRentByArea',compact('setting'));
       
        
    }
    
    
    
     public function capeTownPropertyArea(){
          $setting = Setting::find(1);
          $suburbName = 'Cape Town';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.capeTownPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
      public function atlanticSeaboardPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Atlantic Seaboard';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.atlanticSeaboardPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
      public function southernSuburbsPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'SouthernSuburbs';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.southernSuburbsPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function somersetWestPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Somerset West';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.somersetWestPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
      public function northernSuburbsPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Northern Suburbs';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.northernSuburbsPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function bereaPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Berea';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.bereaPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function durbanCentralPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Durban City';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.durbanCentralPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
      public function goldenMilePropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Golden Mile';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.goldenMilePropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
       public function pineTownPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Pinetown';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.pineTownPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function umhlangaPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Umhlanga';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.umhlangaPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function southernwoodPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Southernwood';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.southernwoodPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    public function quigneyPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'quigney';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.quigneyPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
        public function beaconbayPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Beacon Bay';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.beacon-bayPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    
    public function gonubiePropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Gonubie';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.gonubiePropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function nahoonPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Nahoon';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.nahoonPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
  

public function sandtonPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Sandton';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.sandtonPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    public function modderfonteinPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Modderfontein';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.modderfonteinPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    public function midrandPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Midrand';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.midrandPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
     public function fourwaysPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Fourways';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.fourwaysPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    public function bedfordviewPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Bedfordview';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.bedfordviewPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
 
    
    public function yeovillePropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Yeoville';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.yeovillePropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    public function hillbrowBereaPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Hillbrow,Berea';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.hillbrowBereaPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    
    public function joubertParkPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Joubert Park';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.joubertParkPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    public function braamfonteinPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Braamfontein';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.braamfonteinPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    

    
    
  
     public function summerstrandPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Summerstrand';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.summerstrandPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    
     public function kabegaPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Kabega';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.kabegaPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    
     public function westringPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Westring';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.westringPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    
     public function centralPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Central';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.centralPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
    public function lorrainePropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Lorraine';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.lorrainePropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    

    
  

 public function pretoriaNorthPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Pretoria North';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.pretoriaNorthPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }

     public function pretoriaEastPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Pretoria East';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.pretoriaEastPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
     public function mootPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Moot';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.mootPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
     public function centurionPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Centurion';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.centurionPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
    
    
     public function arcadiaPropertyArea(){
          $setting = Setting::find(1);
         // $setting = Setting::find(1);
          $suburbName = 'Arcadia';
           $explode = explode(",",$suburbName);
        $array = array();
        foreach($explode as $res){
            $array[] = '"'.$res.'"';
        }
        $implode = implode("  ",$array);
           $sr = "";
           $sr .= "MATCH(town,suburb,province) AGAINST('".$implode."' IN BOOLEAN MODE)";
            $sr .= " AND  mandate_saletype = 'for rent'";
        $sr .= " AND  property_classification = 'residential'";
          $propertyDatas =  EntegralApiData::WhereRaw($sr)->take(10)->get();
        return view('frontPart.propertyRentArea.arcadiaPropertyRentData',compact('setting','propertyDatas','suburbName'));
       
        
    }
}
