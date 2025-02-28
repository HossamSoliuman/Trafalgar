<?php

namespace App\Http\Controllers;

use App\Models\Setting;


class ManagingAgentController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.index', compact('setting'));
    }

    public function propertyManagementAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.propertyManagementAgent', compact('setting'));
    }

    public function bodyCorporateManagingAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.bodyCorporateManagingAgent', compact('setting'));
    }

    public function communitySchemeManagingAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.communitySchemeManagingAgent', compact('setting'));
    }

    public function executiveManagingAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.executiveManagingAgent', compact('setting'));
    }

    public function hoaManagingAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.hoaManagingAgent', compact('setting'));
    }

    public function sectionalTitleManagingAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.sectionalTitleManagingAgent', compact('setting'));
    }

    public function shareblockManagingAgents()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.shareblockManagingAgents', compact('setting'));
    }

    public function homeownersAssociationManagingAgent()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.homeownersAssociationManagingAgent', compact('setting'));
    }

    public function ema()
    {
        $setting = Setting::find(1);
        return view('frontPart.managingAgent.ema', compact('setting'));
    }
}
