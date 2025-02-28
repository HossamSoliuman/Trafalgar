<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Job;
class CheckSameJobLocation implements Rule
{
   
    public $jobLocation;
    
    public function __construct($jobLocation)
    {
        $this->jobLocation = $jobLocation;
    }

   
    public function passes($attribute, $value)
    {
        $job = Job::where('job_title', $value)->where('job_location',$this->jobLocation)->first();
        if($job !== null){
            return false;
        }
        return true;
    }

    public function message()
    {
        return 'Job on this location is already exist';
    }
}
