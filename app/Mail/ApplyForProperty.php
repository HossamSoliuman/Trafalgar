<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\PropertyApplingOccupants;
use App\Models\PropertyApplingSupportingDoc;

class ApplyForProperty extends Mailable
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
     $propertyApplingOccupants =    PropertyApplingOccupants::where('property_applying_form_id',$details['id'])->get();
     if(!empty($propertyApplingOccupants)){
           $details['propertyApplingOccupants'] = $propertyApplingOccupants;
     }
     
      $propertyApplingSupportingDoc =    PropertyApplingSupportingDoc::where('property_applying_form_id',$details['id'])->get();
      if(!empty($propertyApplingOccupants)){
         
            $details['propertyApplingSupportingDoc'] = $propertyApplingSupportingDoc;
     }
          $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
       $emailData =  $this->view('email.applyForProperty')->subject('Appy for Property - '.$this->details['property_id']);
       if(isset( $this->details['propertyApplingSupportingDoc'])){
            $docData =  $this->details['propertyApplingSupportingDoc'];
            foreach($docData as $docDatas){
                $docImag =   asset('storage/supporting_documents/'.$docDatas    ->supporting_document) ;
                 $emailData->attach($docImag);
            }
       }
      return $emailData;
      
    }
}
