<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class PropertyInsuranceController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.index', compact('setting'));
    }
    public function communitySchemeInsurance()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.communitySchemeInsurance', compact('setting'));
    }

    public function hoaInsurance()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.hoaInsurance', compact('setting'));
    }

    public function sectionalTitleInsurance()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.sectionalTitleInsurance', compact('setting'));
    }

    public function shareblockInsurance()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.shareblockInsurance', compact('setting'));
    }


    //brokers
    public function communitySchemeInsuranceBroker()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.brokers.communitySchemeInsuranceBroker', compact('setting'));
    }
    public function hoaInsuranceBroker()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.brokers.hoaInsuranceBroker', compact('setting'));
    }
    public function sectionalTitleInsuranceBroker()
    {
        $setting = Setting::find(1);
        return view('frontPart.insurance.brokers.sectionalTitleInsuranceBroker', compact('setting'));
    }
}
