<?php

namespace App\Jobs;

use App\Models\ContactUs;
use App\Mail\ContactUsMailByBranch;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPendingContactEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $contacts = ContactUs::where('is_sent', false)->where('branches_email','info@trafalgar.co.za')->get();

        foreach ($contacts as $contact) {
            Mail::to('info@trafalgar.co.za')->send(new ContactUsMailByBranch($contact));
            $contact->is_sent = true;
            $contact->save();
        }
    }
}
