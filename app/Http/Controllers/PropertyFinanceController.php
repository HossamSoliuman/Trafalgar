<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class PropertyFinanceController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('frontPart.finance.index', compact('setting'));
    }

    public function bodyCorporateLoans()
    {
        $setting = Setting::find(1);
        return view('frontPart.finance.bodyCorporateLoans', compact('setting'));
    }

    public function sectionalTitleLoans()
    {
        $setting = Setting::find(1);
        return view('frontPart.finance.sectionalTitleLoans', compact('setting'));
    }

    public function levyFinance()
    {
        $setting = Setting::find(1);
        return view('frontPart.finance.levyFinance', compact('setting'));
    }

    public function bodyCorporateFinance()
    {
        $setting = Setting::find(1);
        return view('frontPart.finance.bodyCorporateFinance', compact('setting'));
    }
    public function sectionalTitleFinance()
    {
        $setting = Setting::find(1);
        return view('frontPart.finance.sectionalTitleFinance', compact('setting'));
    }
}
