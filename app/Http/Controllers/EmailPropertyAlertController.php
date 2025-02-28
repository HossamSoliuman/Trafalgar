<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\EmailPropertyAlert;
use App\Models\EntegralApiData;


class EmailPropertyAlertController extends Controller
{
     public function index()
    {
        $setting = Setting::find(1);
        
        
         $getRegion =  EntegralApiData::select('province','town')->distinct()->orderBy('province', 'asc')->get();
           $getSuburb =  EntegralApiData::select('suburb','town')->distinct()->get();
            $getPropertyType =  EntegralApiData::select('property_type')->distinct()->get();

        return view('frontPart.emailPropertyAlert', compact('setting','getRegion','getSuburb','getPropertyType'));
    }
    
     public function setEmailPropertyAlert(Request $request)
    {
       //dd($request->all());
        $emailPropertyAlert   =  new EmailPropertyAlert;
        $emailPropertyAlert->name = $request->name ;
        $emailPropertyAlert->surname = $request->surname ;
        $emailPropertyAlert->email = $request->email ;
        $emailPropertyAlert->listing_type = $request->listing_type;
        
        if(count($request->property_type) > 0){
        $emailPropertyAlert->property_type = implode(',', $request->property_type) ;
        }
        
        $emailPropertyAlert->region = $request->region ;
        $emailPropertyAlert->suburg = $request->suburg;
        
        
        if($request->property_for == "for rent"){
        $emailPropertyAlert->minprice = $request->minpriceRent ; 
        $emailPropertyAlert->maxprice = $request->maxpriceRent ; 
        }
        
         if($request->property_for == "for sale"){
        $emailPropertyAlert->minprice = $request->minpriceSale ; 
        $emailPropertyAlert->maxprice = $request->maxpriceSale ; 
        }
        $emailPropertyAlert->full_name = $request->name." ".$request->surname ; 
          $emailPropertyAlert->property_for = $request->property_for ; 
        
        $emailPropertyAlert->save();
        $redirectPath =  route('email-property-alert');
        return redirect($redirectPath)->with('success', 'Property alert email subscribe  successfully');
    }
    
     public function getSuburbDynamicByTown(Request $request){
       
        $getRegion =  EntegralApiData::select('suburb')->distinct()->where('town',$request->city)->get();
        echo  json_encode($getRegion);
     }
}
