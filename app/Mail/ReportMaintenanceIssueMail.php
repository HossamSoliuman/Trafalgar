<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportMaintenanceIssueMail extends Mailable
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
        $upload_file1 =   asset('storage/report_maintenance/'.$this->details['upload_file1']) ;
        $upload_file2 =   asset('storage/report_maintenance/'.$this->details['upload_file2']) ;
        $upload_file3 =   asset('storage/report_maintenance/'.$this->details['upload_file3']) ;
        $upload_file4 =   asset('storage/report_maintenance/'.$this->details['upload_file4']) ;
        $upload_file5 =   asset('storage/report_maintenance/'.$this->details['upload_file5']) ;
         $thisMail = $this->view('email.reportMaintenanceIssueMail');
        if($this->details['upload_file1'] != ""){
            $thisMail->attach($upload_file1);
        }
         if($this->details['upload_file2'] != ""){
            $thisMail->attach($upload_file2);
        }
         if($this->details['upload_file3'] != ""){
            $thisMail->attach($upload_file3);
        }
         if($this->details['upload_file4'] != ""){
            $thisMail->attach($upload_file4);
        }
         if($this->details['upload_file5'] != ""){
            $thisMail->attach($upload_file5);
        }
        return $thisMail;
        // ->attach($upload_file1)->attach($upload_file2)->attach($upload_file3)->attach($upload_file4)->attach($upload_file5);
        
                
    }
}
