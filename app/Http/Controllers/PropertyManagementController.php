<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\PropertyQuoteRequest;
use Mail;
use App\Mail\PropertyQuoteRequestMail;
use App\Mail\ReportMaintenanceIssueMail;
use Redirect;
use App\Models\ReportMaintenanceIssueEmail;


class PropertyManagementController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.index', compact('setting'));
    }

    public function communitySchemeManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.communitySchemeManagement', compact('setting'));
    }

    public function caretakerServices()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.caretakerServices', compact('setting'));
    }

    public function sectionalTitleManagement()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.sectionalTitleManagement', compact('setting'));
    }

    public function propertyManagementCompany()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.propertyManagementCompany', compact('setting'));
    }

    public function propertyManagementServiceProvider()
    {
        $setting = Setting::find(1);
        return view('frontPart.PropertyManagement.propertyManagementServiceProvider', compact('setting'));
    }








    public function propertyManagementQuoteRequest()
    {
        $setting = Setting::find(1);
        return view('frontPart.propertyManagementQuoteRequest', compact('setting'));
    }

    public function propertyManagementQuoteRequests()
    {
        $setting = Setting::find(1);
        return view('frontPart.propertyManagementQuoteRequests', compact('setting'));
    }

    public function propertyQuoteRequestEmail(Request $request)
    {

        $request->validate([
            "name" => 'required',
            "surname" => 'required',
            "designation" => 'required',
            "name_of_scheme" => 'required',
            "name_of_units" => 'required',
            "property_address" => 'required',
            "property_suburb" => 'required',
            "property_city" => 'required',
            "email" => 'required|email',
            "cellphone" => 'required|integer',
            "levy_arrears" => 'required',
            "when_scheme_built" => 'required',
            "why_new_agent" => 'required',


        ], [
            'when_scheme_built.required'    => 'The field is required.',
            'why_new_agent.required'    => 'The field is required.',
            'name_of_scheme.required'    => 'The field is required.',
            'name_of_units.required'    => 'The field is required.',
        ]);

        $propertyQuoteRequest = new PropertyQuoteRequest;
        $propertyQuoteRequest->name = $request->name;
        $propertyQuoteRequest->surname = $request->surname;
        $propertyQuoteRequest->designation = $request->designation;
        $propertyQuoteRequest->name_of_scheme = $request->name_of_scheme;
        $propertyQuoteRequest->name_of_units = $request->name_of_units;
        $propertyQuoteRequest->property_address = $request->property_address;
        $propertyQuoteRequest->property_suburb = $request->property_suburb;
        $propertyQuoteRequest->property_city = $request->property_city;
        $propertyQuoteRequest->email = $request->email;
        $propertyQuoteRequest->cellphone = $request->cellphone;
        $propertyQuoteRequest->levy_arrears = $request->levy_arrears;
        $propertyQuoteRequest->when_scheme_built = $request->when_scheme_built;
        $propertyQuoteRequest->why_new_agent = $request->why_new_agent;
        $propertyQuoteRequest->audited_statement = $request->audited_statement;
        $propertyQuoteRequest->save();

        // Mail::to('webmaster@trafalgar.co.za')->send(new PropertyQuoteRequestMail($propertyQuoteRequest));
        Mail::to('webmaster@trafalgar.co.za')->send(new PropertyQuoteRequestMail($propertyQuoteRequest));

        if (Mail::failures()) {

            return Redirect::back()->with('error', 'Something went wrong!');
        } else {

            /*echo "<script>window.dataLayer.push({'type': 'Property Management Quote Request','event': 'FormSubmitted' });</script>";*/
            return Redirect::back()->with('success', 'Email sent successfully.')->with('formName', 'Property Management Quote Request');
        }
    }


    public function reportMaintenanceIssues()
    {
        $setting = Setting::find(1);
        return view('frontPart.reportMaintenanceIssues', compact('setting'));
    }

    public function reportMaintenanceIssuess()
    {
        $setting = Setting::find(1);
        return view('frontPart.reportMaintenanceIssuess', compact('setting'));
    }

    public function reportMaintenanceIssuesEmail(Request $request)
    {


        $request->validate([
            "building_name" => 'required',
            "unit_no" => 'required',
            "physical_address" => 'required',
            "name" => 'required',
            "tel" => 'required|integer',
            "cell" => 'required|integer',
            "email" => 'required|email',
            "report_maintenance" => 'required',
            "upload_file1" => 'sometimes|max:150',
            "upload_file2" => 'sometimes|max:150',
            "upload_file3" => 'sometimes|max:150',
            "upload_file4" => 'sometimes|max:150',
            "upload_file5" => 'sometimes|max:150',
        ], [
            'tel.integer'    => 'Tel must be number',
            'cell.integer'    => 'Cell must br number',
            'upload_file1.max' => 'The upload file 1 not be greater than 150 kb',
            'upload_file2.max' => 'The upload file 1 not be greater than 150 kb',
            'upload_file3.max' => 'The upload file 1 not be greater than 150 kb',
            'upload_file4.max' => 'The upload file 1 not be greater than 150 kb',
            'upload_file5.max' => 'The upload file 1 not be greater than 150 kb'

        ]);


        $report = new ReportMaintenanceIssueEmail;
        $report->building_name = $request->building_name;
        $report->unit_no = $request->unit_no;
        $report->physical_address = $request->physical_address;
        $report->name = $request->name;
        $report->tel = $request->tel;
        $report->cell = $request->cell;
        $report->email = $request->email;
        $report->report_maintenance = $request->report_maintenance;
        $report->urgency = $request->urgency;
        $report->responsible_for_account = $request->responsible_for_account;
        $report->quote_first = $request->quote_first;
        if ($request->hasFile('upload_file1')) {

            $name1 = $request->file('upload_file1')->getClientOriginalName();
            $path1 = $request->file('upload_file1')->store('public/report_maintenance');
            $path1 = str_replace("public/report_maintenance/", "", $path1);

            $report->upload_file1 = $path1;
        }

        if ($request->hasFile('upload_file2')) {

            $name2 = $request->file('upload_file2')->getClientOriginalName();
            $path2 = $request->file('upload_file2')->store('public/report_maintenance');
            $path2 = str_replace("public/report_maintenance/", "", $path2);

            $report->upload_file2 = $path2;
        }

        if ($request->hasFile('upload_file3')) {

            $name3 = $request->file('upload_file3')->getClientOriginalName();
            $path3 = $request->file('upload_file3')->store('public/report_maintenance');
            $path3 = str_replace("public/report_maintenance/", "", $path3);

            $report->upload_file3 = $path3;
        }

        if ($request->hasFile('upload_file4')) {

            $name4 = $request->file('upload_file4')->getClientOriginalName();
            $path4 = $request->file('upload_file4')->store('public/report_maintenance');
            $path4 = str_replace("public/report_maintenance/", "", $path4);

            $report->upload_file4 = $path4;
        }
        if ($request->hasFile('upload_file5')) {

            $name5 = $request->file('upload_file5')->getClientOriginalName();
            $path5 = $request->file('upload_file5')->store('public/report_maintenance');
            $path5 = str_replace("public/report_maintenance/", "", $path5);

            $report->upload_file5 = $path5;
        }
        $report->save();
        //webmaster@trafalgar.co.za
        Mail::to('webmaster@trafalgar.co.za')->send(new ReportMaintenanceIssueMail($report));

        if (Mail::failures()) {

            return Redirect::back()->with('error', 'Something went wrong!');
        } else {

            return Redirect::back()->with('success', 'Email sent successfully.')->with('formName', 'reportMaintenanceForm');
        }
    }
}
