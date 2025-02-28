<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplyContractorMail extends Mailable
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
    $docImag =   asset('storage/business_brochure/'.$this->details['business_profile_brochure']) ;
            
        return $this->view('email.applyForContractorMail')->subject('Apply for contract')->attach($docImag);;
    }
}
