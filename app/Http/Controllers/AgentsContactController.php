<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\EntegralApiData;
use App\Models\EntegralPropertyImage;
use App\Models\SearchReference;
use App\Models\PropertyApplyingForm;
use App\Models\PropertyApplingOccupants;
use App\Models\PropertyApplingSupportingDoc;
use App\Models\AgentContactList;
use App\Models\Setting;
use DB;
use Mail;
use App\Mail\AgentContact;
use App\Mail\ApplyForProperty;
use Redirect;
use App\Rules\ReCaptcha;


class AgentsContactController extends Controller
{

    
    
  

    
    //  public function sendSmsToAgent($phoneNumaber,$messageBody){
       
    
    //  try {
    //       $token = '7d0afc8a-6363-4644-bfff-3b3e3ba857a9';
    //       $email = 'arunsain.weblance@gmail.com';
     
    //      $apiURL = 'https://www.zoomconnect.com/app/api/rest/v1/sms/send';

    //     // POST Data
    //     $postInput = [
    //         'message' => $messageBody,
    //           //'campaign' => "hello",
    //          'recipientNumber' => $phoneNumaber,
    //           //  'dataField' => 'testing',
    //       // 'dateToSend' =>'testing'
    //     ];
  
    //     // Headers
    //     $headers = [
    //       'token' => $token,
    //       'email' => $email,
    //       'Accept' => 'application/json'
    //     ];
  
    // $response = Http::withHeaders($headers)->post($apiURL,$postInput);
  
    //     // $response = Http::withHeaders($headers)->get($apiURL,[
    //     //     'searchEmail' => $email
    //     //     ]);
    //     $statusCode = $response->status();
    //     $responseBody = json_decode($response->getBody(), true);
        
      
    // //   echo $statusCode;  // status code
    // //     echo "<br>";
    // //   echo count($responseBody);
    // //   dd($responseBody);
     
    //  // $propertyData = (object)$responseBody;
    //  }catch(Exception $e) {
    //     //echo 'Message: ' .$e->getMessage();
    //     }
      
    // }
    

    
    public function agentContactMail(Request $request)
    {
       
        //  dd($request->all());
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        $this->insertAgentContactList($request);
      
          $getAgentEmail =   $request->getAgentEmail;
        //exit;
         
          
         if($getAgentEmail == ""){
              return  Redirect::back()->with('error', 'Agent email not avaliable');
         }
         
Mail::to($getAgentEmail)
    ->send(new AgentContact($request->all()));

if (Mail::failures()) {
    return Redirect::back()->with('error', 'Something went wrong!');
} else {
    $path = route('thanks-to-contact-agent');
    return Redirect::to($path)
        ->with('success', 'Email sent successfully.')
        ->with('formName', 'agent-contact-form')
        ->with('pageName', $request->pageName)
        ->with('subjectName', $request->getId);
}
    } 
    
    
      public function applicationForProperty(Request $request)
    {
        $propertyApplyingForm =  new PropertyApplyingForm;
        $propertyApplyingForm->property_id  = $request->property_id ;
        $propertyApplyingForm->property_name  = $request->property_name ;
        $propertyApplyingForm->property_city  = $request->property_city ;
        $propertyApplyingForm->property_suburb  = $request->property_suburb ;
        $propertyApplyingForm->property_garage  = $request->property_garage ;
        $propertyApplyingForm->property_open_bay  = $request->property_open_bay ;
        $propertyApplyingForm->property_occupation_date  = $request->property_occupation_date ;
        $propertyApplyingForm->property_lease_term  = $request->property_lease_term ;
        $propertyApplyingForm->property_rental  = $request->property_rental ;
        $propertyApplyingForm->property_detail  = $request->property_detail ;
        $propertyApplyingForm->personal_id_number  = $request->personal_id_number ;
        $propertyApplyingForm->personal_resident_permit_no  = $request->personal_resident_permit_no ;
        $propertyApplyingForm->personal_passport_number  = $request->personal_passport_number ;
        $propertyApplyingForm->personal_nationality  = $request->personal_nationality ;
        $propertyApplyingForm->personal_visa_exp_date  = $request->personal_visa_exp_date ;
        $propertyApplyingForm->personal_title  = $request->personal_title ;
        $propertyApplyingForm->personal_first_name  = $request->personal_first_name ;
        $propertyApplyingForm->personal_surname  = $request->personal_surname  ;
        $propertyApplyingForm->personal_dob  = $request->personal_dob ;
        $propertyApplyingForm->personal_residential_address  = $request->personal_residential_address ;
        $propertyApplyingForm->personal_province  = $request->personal_province ;
        $propertyApplyingForm->personal_postal_address  = $request->personal_postal_address ;
        $propertyApplyingForm->personal_postal_code  = $request->personal_postal_code ;
        $propertyApplyingForm->personal_email  = $request->personal_email ;
        $propertyApplyingForm->personal_cell_no  = $request->personal_cell_no ;
        $propertyApplyingForm->personal_tel_no  = $request->personal_tel_no ;
        $propertyApplyingForm->personal_next_of_kin  = $request->personal_next_of_kin ;
        $propertyApplyingForm->personal_address  = $request->personal_address ;
        $propertyApplyingForm->personal_postal_code_2  = $request->personal_postal_code_2 ;
        $propertyApplyingForm->personal_marital_status  = $request->personal_marital_status ;
        $propertyApplyingForm->personal_monthly_gross_salary  = $request->personal_monthly_gross_salary ;
        $propertyApplyingForm->personal_monthly_net_salary  = $request->personal_monthly_net_salary ;
        $propertyApplyingForm->personal_monthly_instalment  = $request->personal_monthly_instalment ;
        $propertyApplyingForm->personal_income_tax_reg_number  = $request->personal_income_tax_reg_number ;
        $propertyApplyingForm->landlord_present_lessor  = $request->landlord_present_lessor ;
        $propertyApplyingForm->landlord_tel_no  = $request->landlord_tel_no ;
        $propertyApplyingForm->landlord_cell_no  = $request->landlord_cell_no ;
        $propertyApplyingForm->landlord_rent_paid  = $request->landlord_rent_paid ;
        $propertyApplyingForm->landlord_year_in_occupation  = $request->landlord_year_in_occupation ;
        $propertyApplyingForm->landlord_personal_reference  = $request->landlord_personal_reference ;
        $propertyApplyingForm->landlord_relation  = $request->landlord_relation ;
        $propertyApplyingForm->emp_info_employer_name  = $request->emp_info_employer_name ;
        $propertyApplyingForm->emp_info_employer_address  = $request->emp_info_employer_address ;
        $propertyApplyingForm->emp_info_occupation  = $request->emp_info_occupation ;
        $propertyApplyingForm->emp_info_paye_tax_no  = $request->emp_info_paye_tax_no ;
        $propertyApplyingForm->emp_info_period_employed  = $request->emp_info_period_employed ;
        $propertyApplyingForm->emp_info_tel_no  = $request->emp_info_tel_no ;
        $propertyApplyingForm->emp_info_fax_no  = $request->emp_info_fax_no ;
        $propertyApplyingForm->emp_info_contact_name = $request->emp_info_contact_name ;
        $propertyApplyingForm->financial_you_have_judgements = $request->financial_you_have_judgements;
        $propertyApplyingForm->financial_details = $request->financial_details; 
        $propertyApplyingForm->bank = $request->bank;
        $propertyApplyingForm->bank_branch_name = $request->bank_branch_name;
        $propertyApplyingForm->bank_branch_code = $request->bank_branch_code; 
        $propertyApplyingForm->bank_account_number = $request->bank_account_number;
        $propertyApplyingForm->get_agent = $request->get_agent;
        $propertyApplyingForm->save();
        
        for($e=0; $e < count($request->occupants_no_of_person_occupy_unit); $e++){
        $propertyApplingOccupants =   new PropertyApplingOccupants;
        
        $propertyApplingOccupants->property_applying_form_id = $propertyApplyingForm->id ;
        $propertyApplingOccupants->occupants_no_of_person_occupy_unit = $request->occupants_no_of_person_occupy_unit[$e] ;
        $propertyApplingOccupants->occupants_id_no = $request->occupants_id_no[$e] ;
        $propertyApplingOccupants->occupants_gender = $request->occupants_gender[$e] ;
        $propertyApplingOccupants->occupants_title = $request->occupants_title[$e] ;
        $propertyApplingOccupants->occupants_name = $request->occupants_name[$e] ;
        $propertyApplingOccupants->occupants_surname = $request->occupants_surname[$e] ;
        $propertyApplingOccupants->occupants_cell_no = $request->occupants_cell_no[$e] ;
        $propertyApplingOccupants->occupants_work_tel_no = $request->occupants_work_tel_no[$e] ;
        $propertyApplingOccupants->occupants_email = $request->occupants_email[$e] ;
        $propertyApplingOccupants->save();
        
        }


        if($request->hasfile('supporting_documents'))
        {
            foreach($request->file('supporting_documents') as $key => $file)
            {
                $path = $file->store('public/supporting_documents');
                $name = $file->getClientOriginalName();
                $path = str_replace("public/supporting_documents/","",$path);
                $insert[$key]['property_applying_form_id'] = $propertyApplyingForm->id;
                $insert[$key]['supporting_document'] = $path;
 
            }
            
              PropertyApplingSupportingDoc::insert($insert);
         }
 //webmaster@trafalgar.co.za
         Mail::to('webmaster@trafalgar.co.za')->send(new ApplyForProperty($propertyApplyingForm));
         $path = route('thanks-for-property-application');
        return  Redirect::to($path)->with('success', 'Applying for property successfully')->with('formName','Trafalgar Individual Property Application Form')->with('propertyId',$request->property_id);
        
    } 
    
     function insertAgentContactList($request){
         $agentContactList = new AgentContactList;
        $agentContactList->name = $request->username;
        $agentContactList->email = $request->email;
        $agentContactList->phone_number = $request->phone;
        $agentContactList->message = $request->message;
        $agentContactList->agent_id = $request->getId;
        if(isset($request->property_id)){
         $agentContactList->property_id = $request->property_id;
          $agentContactList->contact_to = 2;
           $agentContactList->contact_time = $request->contact_time;
            $agentContactList->arrange_viewing = $request->arrange_viewing;
             $agentContactList->contact_date = $request->contact_date;
          
        }else{
             $agentContactList->contact_to = 1;
             
        }
        $agentContactList->save();
    }
    
    public function thanksToContactAgent(){
       
          $setting = Setting::find(1);
         return view('frontPart.thanksToContactAgent',compact('setting'));
    }
    
     public function thanksForPropertyApplication(){
       
          $setting = Setting::find(1);
         return view('frontPart.thanksForPropertyApplication',compact('setting'));
    }
}


