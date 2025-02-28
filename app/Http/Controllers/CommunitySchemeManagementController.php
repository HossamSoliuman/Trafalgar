<?php

namespace App\Http\Controllers;

use App\Models\Setting;


class CommunitySchemeManagementController extends Controller
{
    public function sectionalTitleManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.communitySchemeManagement.sectionalTitleManagement', compact('setting'));
    }

    public function bodyCorporateManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.communitySchemeManagement.bodyCorporateManagement', compact('setting'));
    }

    public function homeOwnersAssociationManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.communitySchemeManagement.homeOwnersAssociationManagement', compact('setting'));
    }
}
