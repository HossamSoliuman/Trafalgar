<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Job;

class JobController extends Controller
{
    

    public function jobs(Request $request){
    $setting = Setting::find(1);
    //   $jobLocations = Job::distinct('job_location')->select('job_location')->get();
    $jobs = Job::where('job_status',1)->
        
    when($request->jobtype, function ($query) use ($request) {
        $query->where('job_type', 'like', $request->jobtype);
    })
        ->when($request->keyword, function ($query) use ($request) {
            $query->where('job_title', 'like', $request->keyword);
        })
        ->when($request->location, function ($query) use ($request) {
           // $query->where('job_location', '>=', $request->location);
             $query->where('job_location',$request->location);
        })
       
        ->orderBy('id','desc')->paginate(10);
    $jobs->appends($request->all());
      return view('frontPart.jobs.joblist', compact('setting','jobs'));
}
    
  
    
    public function jobdetail(Request $request)
    {
        $setting = Setting::find(1);
       
        $job_title = str_replace('-',' ', $request->job_title);
       // $job = Job::where('job_title',$job_title)->first();
         $job = Job::where('job_status',1)->where('job_title_slug',$request->job_title)->first();
         if(!$job){
          abort(404);
         }
       
        return view('frontPart.jobs.jobdetail', compact('setting','job'));
    }
}
