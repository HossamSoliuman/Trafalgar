@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','online-services')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section service_top_banner">
        <div class="jobbanner-text">
            <h1 class="">Online Services</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="service_page_content my-5">
        <div class="container">
            <div class="heading">
                <!--<h2>About Us</h2>-->
                <div class="manage-paragraph text-justify">
                    <p>As a Trafalgar client, you are very welcome to use our online services, which are comprised of:</p>
                </div>
            </div>
            <div class="property-solution online_services_view mb-5">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/online-account.svg') }}" alt="online-account">
                            </div>
                            <h5>Online Accounts</h5>
                            <a href="#online_account" id="faccount" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/online-application.svg') }}" alt="online-application">
                            </div>
                            <h5>Online Application</h5>
                            <a href="#online_application" id="fapplication"  class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/registration.svg') }}" alt="registration">
                            </div>
                            <h5>Registration Certificates</h5>
                            <a href="#reg_certificate" id="fcertificate" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/maintenance.svg') }}" alt="maintenance">
                            </div>
                            <h5>Report Maintenance Issues</h5>
                            <a href="#maintenance_isseu" id="fisseu" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/portal.svg') }}" alt="portal">
                            </div>
                            <h5>Web App</h5>
                            <a href="#web_app" id="web_app" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="guldenland_products fullwidth">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section" id="online_account">
                        <h4><a href="javascript:void(0)">ONLINE ACCOUNTS</a></h4>
                        <div class="more-content" >
                            <p>As a Trafalgar client, you are very welcome to use our online services to update your property management and account information. Simply log in using your pin and password, and gain access to a secure world of online property management information.</p>
                             <a class="green_button" href="https://trafalgar-app.unibase.solutions/">Click to login to Web App</a>
                        </div>
                    </div>
                    <div class="each_manage_section" id="online_application">
                        <h4><a href="javascript:void(0)">ONLINE APPLICATIONS</a></h4>
                        <div class="more-content" >
                            <p>Should you wish to apply for a residential or commercial property to rent, please download and complete the relevant application form below and return to our nearest office using the contact details provided on the branch locator page. To arrange a free, no obligation property insurance or property management quote, please complete and return the insurance letter of investigation or property management quotation questionnaire respectively.</p>
                             <div class="more">
                                <p>Trafalgar Financial Services offers upfront finance for maintenance and capital projects on favourable terms tailor made to fit the cash flow constraints of the borrower (body corporate, HOA or share block company). More importantly, this allows for the immediate restoration or enhancement of value, on definite terms, removing any uncertainties involved with the process or project. Finance in action – Have a look at a few of our case studies:</p>
                                <ul class="pdfs">
                                    <li><a href="{{ asset('storage/trafalgarCretificate/Application-to-let-a-residential-unit-2015.pdf')}}">Application to let a residential unit</a></li>
                                    <li><a href="{{ asset('storage/trafalgarCretificate/Application-To-Lease-Commercial-Premises.pdf')}}">Application to lease commercial premises</a></li>
                                    <li><a href="{{ asset('storage/trafalgarCretificate/Property-Insurance-Letter-of-Investigation.pdf')}}">Property insurance letter of investigation</a></li>
                                      <li><a href="{{ route('online-services.online-applications.property-management-quote-request') }}">Property management quote request</a></li>
                                    <!--<li><a href="https://www.trafalgar.co.za/online-services/online-applications/property-management-quote-request/">Property management quote request</a></li>-->
                                    <li><a href="{{ route('jobs') }}">Job application</a></li>
                                     <!--<li><a href="https://www.trafalgar.co.za/online-services/report-maintenance-issues/">Maintenance request</a></li>-->
                                    <li><a href="{{ route('online-services.report-maintenance-issues') }}">Maintenance request</a></li>
                                </ul>
                                <p>Trafalgar Property Management was proud to introduce the first automated Online Application in June 2011. As a Group we are active in promoting cutting edge technology to deliver a world class product and service to our clients.</p>
                                <p>Utilising the online applications will fast track the application process together with outlining the necessary supporting information which is necessary for compiling a meaningful quotation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="each_manage_section" id="reg_certificate">
                        <h4><a href="javascript:void(0)">REGISTRATION CERTIFICATES</a></h4>
                        <div class="more-content" >
                            <p>Registration certificates for Trafalgar Property Management (Pty) Ltd</p>
                            <ul class="pdfs">
                                <li><a href="#">Estate Agency Affairs Board (EAAB) Certificate</a></li>
                                <li><a href="#">National Association of Managing Agents (NAMA) Certificate</a></li>
                                <li><a href="#">Council for Debt Collectors</a></li>
                                <li><a href="#">Professional Indemnity Cover</a></li>
                                <li><a href="#">South African Property Owners Association (SAPOA) Certificate</a></li>
                                <li><a href="#">Information Officer Certificate</a></li>
                            </ul>
                             <div class="more">
                                <p>Registration certificates for Trafalgar Financial Services (Pty) Ltd</p>
                                <ul class="pdfs">
                                    <li><a href="#">Financial Services Board</a></li>
                                    <li><a href="#">Registered Credit Provider</a></li>
                                    <li><a href="#">FIA Membership Certificate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="each_manage_section" id="maintenance_isseu">
                        <h4><a href="javascript:void(0)">REPORT MAINTENANCE ISSUES</a></h4>
                        <div class="more-content" >
                            <p>Should you experience any maintenance issues, please report them via our online form. Click the button below to complete the form</p>
                             <a class="green_button" href="{{ route('report-maintenance-issues') }}">Click to view the Maintenance Reporting form</a>
                        </div>
                    </div>
                    <div class="each_manage_section" id="web_app">
                        <h4><a href="javascript:void(0)">Web App</a></h4>
                        <div class="more-content" >
                            <p>In the Web App you will have access to a wealth of information about your property; rules, financials, contractors' details, plans, a bulletin board and much more. We hope that the direct, online and real-time access adds value.</p>
                             <a class="green_button" href=" https://trafalgar-app.unibase.solutions/">Click to login to Web App</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
	
	
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')
	


    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
