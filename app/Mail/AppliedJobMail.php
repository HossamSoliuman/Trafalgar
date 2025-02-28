<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppliedJobMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // appliedJobDocument
       $subject =  ucfirst($this->details['title'])." ".ucfirst($this->details['first_name'])." ".ucfirst($this->details['sur_name'])." applied for ".ucfirst($this->details['job']['job_title'])." job";
         $emailData =  $this->view('email.appliedJobMail')->subject($subject);
       if(isset( $this->details['appliedJobDocument'])){
            $docData =  $this->details['appliedJobDocument'];
            foreach($docData as $docDatas){
                $docImag =   asset('storage/upload_cv/'.$docDatas    ->document_link) ;
                 $emailData->attach($docImag);
            }
       }
      return $emailData;
       // return $this->view('email.appliedJobMail');
    }
}
