<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Job;

class CheckSameJobLocationUpdate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
       public $jobLocation;
         public $id;
    public function __construct($jobLocation,$id)
    {
          $this->jobLocation = $jobLocation;
          $this->id = $id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $job = Job::where('job_title', $value)->where('job_location',$this->jobLocation)->where('id','!=',$this->id)->first();
        if($job !== null){
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
          return 'Job on this location is already exist';
    }
}
