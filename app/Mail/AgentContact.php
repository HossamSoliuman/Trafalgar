<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgentContact extends Mailable
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
        if($this->details['pageName'] == 'agent'){
             return $this->view('email.agentcontact')->subject('Enquiry for Properties');
        }else{
             return $this->view('email.agentcontact')->subject('Enquiry for Property - '.$this->details['property_id']);
        }
        
        
    }
}
