<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use App\Mail\QuickContact;
use App\Mail\InsureContactMail;
use App\Mail\FinanceContactMail;
use App\Mail\ContactUsMailByBranch;
use App\Mail\SellContactMail;
use App\Models\Setting;
use App\Models\SellContactMailModel;
use App\Jobs\SendContactUsMail;


use App\Rules\ReCaptcha;

use App\Models\ContactUs;


class QuickContactController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        // webmaster@trafalgar.co.za
        Mail::to('queries@trafalgar.co.za')->send(new QuickContact($request->all()));
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        } else {
            if (isset($request->pagename)) {
                $pagename = $request->pagename;
            } else {
                $pagename = "";
            }
            return Redirect::back()->with('success', 'Email sent successfully')->with('formName', 'quick-contact')->with('pagename', $pagename);
        }
    }

    public function contactUs(Request $request)
    {
        if($request->website != null)
        {
            return Redirect::back()->with('error', 'Something went wrong!');
        }
       
        if (!$request->has('formMain')) {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha],
            'name' => 'required',
            'city' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'time_to_call' => 'required',
            'branches_email' => 'required',
        ]);
            $request->merge(['formMain' => 'not home']);
        }

        $contactus = new ContactUs;
        $contactus->name = $request->name;
        $contactus->city = $request->city ?? '';
        $contactus->email = $request->email;
        $contactus->contact_number = $request->phone;
        $contactus->method_of_contact = $request->method_of_contact ?? '';
        $contactus->time_to_call = $request->time_to_call ?? '';
        $contactus->comment_or_question = $request->comment_or_question;
        $contactus->branches_email = $request->branches_email ?? 'info@trafalgar.co.za';
        $contactus->save();
        
        Mail::to('info@trafalgar.co.za')->send(new ContactUsMailByBranch($request->all()));

        return Redirect::back()->with('success', 'Email sent successfully')->with('formName', 'trafalgar_contactus');
    }

    public function insureContactMail(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        // 'blydep@trafalgar.co.za', 'christiaanj@trafalgar.co.za'
        Mail::to(['queries@trafalgar.co.za'])->send(new InsureContactMail($request->all()));

        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        } else {
            return Redirect::back()->with('success', 'Email sent successfully')->with('formName', 'insure-contact-mail');
        }
    }

    public function financeContactMail(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        // 'blydep@trafalgar.co.za', 'christiaanj@trafalgar.co.za'
        Mail::to(['queries@trafalgar.co.za'])->send(new FinanceContactMail($request->all()));


        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        } else {
            return Redirect::back()->with('success', 'Email sent successfully')->with('formName', 'finance-contact-mail');
        }
    }

    public function sellContactMail(Request $request)
    {
        if($request->website != null)
        {
            return Redirect::back()->with('error', 'Something went wrong!');
        }
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha],
            'name' => 'required',
            'city' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'method_of_contact' => 'required',
            'property_address' => 'required'
        ]);
        $sellContactMailModel = new SellContactMailModel;
        $sellContactMailModel->name = $request->name;
        $sellContactMailModel->city = $request->city;
        $sellContactMailModel->email = $request->email;
        $sellContactMailModel->contact_number =  $request->phone;
        $sellContactMailModel->method_of_contact =  $request->method_of_contact;
        $sellContactMailModel->time_to_call = $request->time_to_call;
        $sellContactMailModel->comment_or_question = $request->comment_or_question;
        $sellContactMailModel->property_address = $request->property_address;
        $sellContactMailModel->save();
        // 'webmaster@trafalgar.co.za'
        Mail::to(['queries@trafalgar.co.za'])->send(new SellContactMail($request->all()));

        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        } else {
            $path = route('thanks-sell-contact-mail');
            return Redirect::to($path)->with('success', 'Email sent successfully');
        }
    }

    public function thanksRedirectSellContactMail(Request $request)
    {

        $setting = Setting::find(1);
        return view('frontPart.thanksSellContactMail', compact('setting'));
    }
}
