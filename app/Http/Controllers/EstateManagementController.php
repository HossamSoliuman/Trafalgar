<?php

namespace App\Http\Controllers;

use App\Models\Setting;


class EstateManagementController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.estateManagement.index', compact('setting'));
    }

    public function hoaEstateManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.estateManagement.hoaEstateManagement', compact('setting'));
    }

    public function golfEstateManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.estateManagement.golfEstateManagement', compact('setting'));
    }

    public function retirementVillageManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.estateManagement.retirementVillageManagement', compact('setting'));
    }
}
