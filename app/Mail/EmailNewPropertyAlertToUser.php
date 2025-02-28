<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNewPropertyAlertToUser extends Mailable
{
    use Queueable, SerializesModels;
    	public $details; 
    		public $userEmail; 
    		public $emailAlertData; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$userEmail,$emailAlertData)
    {
        $this->details = $details;
          $this->userEmail = $userEmail;
          $this->emailAlertData = $emailAlertData;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.alertProperty')->subject('Enquiry for Property');
    }
}
