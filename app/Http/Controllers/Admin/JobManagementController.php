<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Redirect;
use App\Rules\CheckSameJobLocation;
use App\Rules\CheckSameJobLocationUpdate;
use App\Models\AppliedJob;
use App\Models\AppliedJobDocument;
use Illuminate\Support\Facades\Storage;

class JobManagementController extends Controller
{
    
    public function index(Request $request)
    {
         
        $jobs = Job::orderBy('id','desc')->paginate(20);
      return view('admin.pages.jobs.jobListing',compact('jobs'));
      
      
    }

    
    public function create()
    {
        
        return view('admin.pages.jobs.addJobs');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => ['required',new CheckSameJobLocation($request->job_location)],
           'description' => 'required',
             'job_location' => ['required','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
           'job_type' => 'integer',
           //  'no_of_position' => 'integer',
           'hr_email' => 'required|email',
             
        ],[   
        'job_location.regex'    => 'only alphabet value is required'
    ]);
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->job_title)));
        $job =  new Job;
        $job->job_title = $request->job_title;
         $job->job_title_slug = $slug;
        $job->job_location =  $request->job_location;
        $job->job_type =  $request->job_type;
         $job->job_status = 1;
        //$job->no_of_position  = $request->no_of_position;
        $job->hr_email =  $request->hr_email;
        $job->job_description =  $request->description;
        $job->save();
        
        $updateSlud = Job::find($job->id);
        $updateSlud->job_title_slug = $job->job_title_slug."-".$job->id;
        $updateSlud->save();
        
        return Redirect::back()->with('success', 'Job add successfully');

    }

  
    public function show($id)
    {
     $job = Job::find($id);
      return view('admin.pages.jobs.jobDetail',compact('job'));
    }

   
    public function edit($id)
    {
       $job = Job::find($id);
      return view('admin.pages.jobs.editJob',compact('job'));
    }

   
    public function update(Request $request, $id)
    {
        
         $request->validate([
            'job_title' => ['required',new CheckSameJobLocationUpdate($request->job_location,$id)],
           'description' => 'required',
             'job_location' =>  ['required','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
           'job_type' => 'integer',
            // 'no_of_position' => 'integer',
           'hr_email' => 'required|email',
             
        ],[   
        'job_location.regex'    => 'only alphabet value is required'
    ]);
      $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->job_title)));
         $job =  Job::find($id);
        $job->job_title = $request->job_title;
         $job->job_title_slug = $slug."-".$id;
        $job->job_location =  $request->job_location;
        $job->job_type =  $request->job_type;
        //$job->no_of_position  = $request->no_of_position;
        $job->hr_email =  $request->hr_email;
        $job->job_description =  $request->description;
        $job->save();
        
        return Redirect::back()->with('success', 'Job update successfully');
    }

    
    public function destroy($id)
    {
          $appliedJobs = AppliedJob::where('job_id',$id)->get();
       
      
        foreach($appliedJobs as $key => $value){
              $appliedJobDocuments = AppliedJobDocument::where('applied_job_id',$value->id)->get();
           
              foreach($appliedJobDocuments as $key => $appliedJobDocument){
                  
                    if(Storage::disk('public')->exists('upload_cv/'.$appliedJobDocument->document_link)){
                    
                    Storage::disk('public')->delete('upload_cv/'.$appliedJobDocument->document_link);
                    }
   
              }
              AppliedJobDocument::where('applied_job_id',$value->id)->delete();
        }
      AppliedJob::where('job_id',$id)->delete();
         $job = Job::find($id);
        $job->delete();
           return Redirect::back()->with('success', 'Job delete successfully');
    }
    
    
       public function display($id)
    {
    
       $job = Job::find($id);
       $job->job_status = 1;
       $job->save();
        return Redirect::back()->with('success', 'Job update successfully');
       
    }
    
    
      public function notDisplay($id)
    {
         $job = Job::find($id);
       $job->job_status = 0;
       $job->save();
         return Redirect::back()->with('success', 'Job update successfully');
    }
}
