<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Job;

class JobController extends Controller
{
    
    public function jobs(Request $request)
    {
        $setting = Setting::find(1);
    
        $jobs = Job::where('job_status', 1)
            ->when($request->jobTitle, function ($query) use ($request) {
                $query->where('job_title', 'like', '%' . $request->jobTitle . '%');
            })
            ->when(!$request->jobTitle && $request->keyword, function ($query) use ($request) {
                $query->where('job_title', 'like', '%' . $request->keyword . '%');
            })
            ->when($request->location, function ($query) use ($request) {
                $query->where('job_location', $request->location);
            })
            ->orderBy('order', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(10);
    
        $jobs->appends($request->all());
    
        $all_job = Job::where('job_status',1)->orderBy('job_title','ASC')->groupBy('job_title')->get();
    
        return view('frontPart.jobs.joblist', compact('setting', 'jobs', 'all_job'));
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

    public function thankYou(Request $request)
    {
        $setting = Setting::find(1);
        return view('frontPart.jobs.jobthankyou', compact('setting'));
    }
}