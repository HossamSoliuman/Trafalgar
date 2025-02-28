<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppliedJob;
use App\Models\AppliedJobDocument;
use Redirect;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index(Request $request){
        
        // $appliedJobs = AppliedJob::with('job')->
        //   dd($appliedJobs);
        
         $appliedJobs = AppliedJob::join('jobs', 'jobs.id', '=', 'applied_jobs.job_id')->
         
         select('applied_jobs.*')->
        
              when($request->name, function ($query) use ($request) {
            // $query->where('job_title', 'like', $request->title);
            $query->where('applied_jobs.full_name','LIKE','%'.$request->name.'%');
            
        })
        ->when($request->location, function ($query) use ($request) {
          // $query->where('job_location','like', $request->location);
              $query->where('jobs.job_location','LIKE','%'.$request->location.'%');
        })
         ->when($request->job, function ($query) use ($request) {
        $query->where('jobs.job_title', $request->job);
    })
              	
              		->orderBy('applied_jobs.id','desc')->paginate(20);
              		 $appliedJobs->appends($request->all());

        
  
  
    
    
       //$appliedJobs  = AppliedJob::orderBy('id','desc')->paginate(20);
         return view('admin.pages.jobs.jobApplicationList',compact('appliedJobs'));
        
    }
    
     public function destroy($id)
    {
       
        $appliedJobDocuments =  AppliedJobDocument::where('applied_job_id',$id)->get();
        if($appliedJobDocuments !== null){
            foreach($appliedJobDocuments as $appliedJobDocument){
                Storage::disk('public')->delete('/upload_cv/'.$appliedJobDocument->document_link	); 
            }
        }
         $job = AppliedJob::find($id);
        $job->delete();
           return Redirect::back()->with('success', 'Applied Job delete successfully');
    }
    
    public function changeStatus(Request $request,$id){
         $job = AppliedJob::find($id);
       $job->job_application_status = $request->set_status;
       $job->save();
           return Redirect::back()->with('success', 'status update successfully');
    }
    
     public function addNote(Request $request,$id){
         $job = AppliedJob::find($id);
       $job->job_note = $request->add_note;
       $job->save();
           return Redirect::back()->with('success', 'Job Note update successfully');
    }
    
     public function show($id)
    {
         $appliedJob = AppliedJob::find($id);
         
        return view('admin.pages.jobs.jobApplicationDetail',compact('appliedJob'));
    }
}
