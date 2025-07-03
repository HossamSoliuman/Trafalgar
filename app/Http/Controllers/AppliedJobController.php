<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedJob;
use App\Models\AppliedJobDocument;
use App\Models\AppliedJobUserQualification;
use Redirect;
use App\Models\Job;
use App\Models\Setting;
use Mail;
use App\Mail\AppliedJobMail;

class AppliedJobController extends Controller
{
    public function applyForJob(Request $request){
   
        // dd($request->all());

        $request->validate([
          "title" => 'required',
          "first_name" => 'required',
          "sur_name" => 'required',
          "sa_resident" => 'required',
          "nid_number" => 'required',
          "home_language" => 'required',
          "gender" => 'required',
          "address" =>'required',
          "country" =>'required',
          "city" => 'required',
          "postal_code" =>'required|integer',
          "address_type" => 'nullable',
          "province" => 'required',
          "tel_number_home" => 'nullable',
          "tel_number_work" => 'nullable',
          "cell_number" => 'required',
          //"fax_number" => 'required|integer',
          "email_address" => 'required|email',
          "annual_package" => 'required',
          "salary_expectation" => 'required',
          "notice_period" => 'required',
          "upload_cv" => 'required',
          'upload_id' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
          "upload_qualifications" => 'required',
        ],[   
            'nid_number.required'    => 'National id is required',
            'nid_number.integer'    => 'National id must be  number',
            'tel_number_work.required'    => 'work telephone number is  required',
            'sa_resident.required'    => 'south africe resident is required'            
        ]);
     
        $appliedJob = new AppliedJob;
        $appliedJob->title = $request->title;
        $appliedJob->first_name = $request->first_name;
        $appliedJob->full_name = $request->first_name." ".$request->sur_name;
        $appliedJob->sur_name = $request->sur_name;
        $appliedJob->south_african_resident = $request->sa_resident;
        $appliedJob->national_id_number = $request->nid_number;
        $appliedJob->home_language = $request->home_language;
        $appliedJob->gender = $request->gender;
        $appliedJob->address = $request->address;
        $appliedJob->country = $request->country;
        $appliedJob->city = $request->city;
        $appliedJob->postal_code = $request->postal_code;
        $appliedJob->address_type = $request->address_type;
        $appliedJob->province = $request->province;
        $appliedJob->tel_number_home = $request->tel_number_home;
        $appliedJob->tel_number_work = $request->tel_number_work;
        $appliedJob->cell_number = $request->cell_number;
       // $appliedJob->fax_number = $request->fax_number;
        $appliedJob->email_address = $request->email_address;
        $appliedJob->annual_package = $request->annual_package;
        $appliedJob->salary_expectation = $request->salary_expectation;
        $appliedJob->notice_period = $request->notice_period;
        $appliedJob->job_id = $request->job_id;
        
        if($request->hasFile('upload_id')){
            $upload_id_file = $request->file('upload_id') ;            
            $upload_id_name = $upload_id_file->getClientOriginalName();
            $upload_id_path = $upload_id_file->store('public/upload_id');
            $upload_id_path = str_replace("public/upload_id/","",$upload_id_path);            
            $appliedJob->upload_id = $upload_id_path;        
        }

        $appliedJob->save();
        
        if($request->hasFile('upload_cv')){
            $this->uploadJobDocument($request,$appliedJob->id);
        }
       
        if($request->hasFile('upload_qualifications')){
            $this->uploadQualification($request,$appliedJob->id);
        }
     
        

        // Mail::to($appliedJob->job->hr_email)->send(new AppliedJobMail($appliedJob));
        // $email = $appliedJob->job->hr_email;
        $email = 'queries@trafalgar.co.za';
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            try {
                Mail::to($email)->send(new AppliedJobMail($appliedJob));
            } catch (\Exception $e) {
                // Optional: log the exception if needed, or completely ignore it
                \Log::warning('Email send failed for HR email: ' . $email . '. Error: ' . $e->getMessage());
            }
        }

 
        // if (Mail::failures()) {
        //     return Redirect::back()->with('error', 'Something went wrong!');
        // }else{
            $setting = Setting::find(1);
            return view('frontPart.jobs.jobthankyou', compact('setting'));
            // $job =  Job::find($request->job_id);
            // return Redirect::back()->with('success', 'Job Applied successfully')->with('formName','Trafalgar Individual Job Application Form')->with('jobTitle',$job->job_title);
        // }
        
    }
    
    
    public function uploadJobDocument($request,$id){
        foreach($request->file('upload_cv') as $file)
        {            
            $name = $file->getClientOriginalName();
            $path = $file->store('public/upload_cv');
            $path = str_replace("public/upload_cv/","",$path);
            $appliedJobDocument = new AppliedJobDocument;
            $appliedJobDocument->document_link = $path;
            $appliedJobDocument->applied_job_id = $id;
            $appliedJobDocument->save();
        }
    }

        
    public function uploadQualification($request,$id){
        foreach($request->file('upload_qualifications') as $file)
        {            
            $name2 = $file->getClientOriginalName();
            $path2 = $file->store('public/upload_qualification');
            $path2 = str_replace("public/upload_qualification/","",$path2);
            $appliedJobUserQualification = new AppliedJobUserQualification;
            $appliedJobUserQualification->document_link = $path2;
            $appliedJobUserQualification->applied_job_id = $id;
            $appliedJobUserQualification->save();
        }
    }
}
