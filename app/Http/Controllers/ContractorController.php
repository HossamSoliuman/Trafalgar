<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\ApplyContractor;
use Redirect;
use Mail;
use App\Mail\ApplyContractorMail;


class ContractorController extends Controller
{
    public function index(){
       
          $setting = Setting::find(1);
         return view('frontPart.contractors',compact('setting'));
    }
    
    public function applyContractor(Request $request){
       
      $applyContract = new ApplyContractor;
    $applyContract->business_name = $request->business_name ;
    $applyContract->business_address = $request->business_address ;
    $applyContract->business_website = $request->business_website ;
    // $applyContract->business_profile_brochure = $request->business_profile_brochure ;
    $applyContract->telephone = $request->telephone ;
    $applyContract->contact_person_name = $request->contact_person_name ;
    $applyContract->contact_person_cell = $request->contact_person_cell ;
    $applyContract->contact_person_email = $request->contact_person_email ;
    $applyContract->maintenance_services_offered = $request->maintenance_services_offered ;
    $applyContract->areas_covered_province = $request->areas_covered_province ;
    $applyContract->areas_covered_suburbs = $request->areas_covered_suburbs ;
    $applyContract->accreditations = $request->accreditations ;
     if($request->hasFile('business_profile_brochure')){
            
            $name = $request->file('business_profile_brochure')->getClientOriginalName();
            $path = $request->file('business_profile_brochure')->store('public/business_brochure');
            $path = str_replace("public/business_brochure/","",$path);
          
             $applyContract->business_profile_brochure = $path;
        }
    $applyContract->save();
       
        Mail::to('webmaster@trafalgar.co.za')->send(new ApplyContractorMail($applyContract));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
            return Redirect::to(route('contractors.contractors-thank-you'))->with('success', 'Contractors – Thank You');
         
        }
        
    }
    
    
     public function thanks(){
       
          $setting = Setting::find(1);
         return view('frontPart.contractorsThanks',compact('setting'));
    }
}
