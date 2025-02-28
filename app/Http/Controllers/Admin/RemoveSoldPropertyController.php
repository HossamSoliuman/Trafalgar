<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EntegralApiData; 

class RemoveSoldPropertyController extends Controller
{
    public function removeSoldProperty(){
      $propertyDatas =  EntegralApiData::where('is_property_sold',1)->select('property_id','mandate_enddate')->get();
      foreach($propertyDatas as $propertyData){
          
          $now = date($propertyData->mandate_enddate);
$start_date = strtotime($now);
$end_date = strtotime("+7 day", $start_date);

 $deleteDate = date('Y/m/d', $end_date);
if($deleteDate == date('Y/m/d')){
  $deleteProperty =   EntegralApiData::find($propertyData->id);
  $deleteProperty->delete();
}
      }
       
    
        
    }
}
