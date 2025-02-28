<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntegralApiData;
use App\Models\FavouriteProperty;
use App\Models\Setting;


use Redirect;
use Auth;

class FavouriteController extends Controller
{
    
    //  public function __construct()
    // {
    //     //$this->middleware(['userAuth','verified']);
    //       $this->middleware(['userAuth']);
    // }
    
    public function addFavourite(Request $request){
      
              $userId = Auth::user()->id;  
             $propertyId = $request->id;
          $entegralApiData = EntegralApiData::where('property_id',$propertyId)->exists();
      if($entegralApiData){
          
           $entegralPropertyData = EntegralApiData::select('id','property_id')->where('property_id',$propertyId)->first();
           
          $checkFavouritePropertyExist = FavouriteProperty::where('api_property_id',$propertyId)->where('user_id',$userId)->doesntExist();
        if($checkFavouritePropertyExist){
          
            $makeFavourite = new FavouriteProperty;
            $makeFavourite->property_id = $entegralPropertyData->id;
             $makeFavourite->user_id = $userId;
             $makeFavourite->api_property_id = $entegralPropertyData->property_id;
          $makeFavourite->save();
          return Redirect::back()->with('success', 'add to favourite successfully!');
        }else{
           return Redirect::back()->with('success', 'already added to favourite');
        }
      }else{
        return  Redirect::back()->with('error', 'Something went wrong!');
      }
       
    }
    
     public function removeFavourite(Request $request){
           
             $userId = Auth::user()->id;  
             $propertyId = $request->id;
         
          $checkFavouritePropertyExist = FavouriteProperty::where('api_property_id',$propertyId)->where('user_id',$userId)->exists();
        if($checkFavouritePropertyExist){
          
          FavouriteProperty::where('api_property_id',$propertyId)->where('user_id',$userId)->delete();
          return Redirect::back()->with('success', 'remove from  favourite successfully!');
        }else{
           return Redirect::back()->with('error', 'some thing went worng');
        }
      
       
    }
    
     public function favouritePropertyList(){
           $this->removePropertyFromDatabase();
        $setting = Setting::find(1);
        $userId = Auth::user()->id;  
        $favouriteProperties =  FavouriteProperty::where('user_id',$userId)->paginate(5);
        foreach($favouriteProperties as $key => $favouritePropertys){
            $propertyDatas = EntegralApiData::where('property_id',$favouritePropertys->api_property_id)->first();
            if($propertyDatas !== null){
            
                 $favouriteProperties[$key]['propertyDatas'] = $propertyDatas;
                
            }else{
               
                $favouriteProperties[$key]['propertyDatas'] = [];
            }
            
        }
     
         return view('frontPart.dashboard.favouritePropertyList',compact('setting','favouriteProperties'));
      
       
    }
    
    public function removePropertyFromDatabase(){
        
         $userId = Auth::user()->id;  
        $favouriteProperties =  FavouriteProperty::where('user_id',$userId)->get();
        foreach($favouriteProperties as $key => $favouritePropertys){
            $propertyDatas = EntegralApiData::where('property_id',$favouritePropertys->api_property_id)->first();
            
            if($propertyDatas === null){
            
                 FavouriteProperty::where('api_property_id',$favouritePropertys->api_property_id)->delete();
                
            }
            
        }
        
    }
}
