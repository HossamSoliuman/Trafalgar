@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section finance_top_banner">
        <div class="jobbanner-text">
            <h1>Rent</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="guldenland_section rent_page_content mt-5">
        <div class="container">
            <div class="heading">
                <h3 class="mb-4">RENT: Property Rental Specialists</h3>
            </div>
            <div class="manage-paragraph text-justify">
                <div class="rent_img">
                    <img class="img-fluid" src="{{ asset('front/images/rent-img.png') }}" alt="Rent"/>
                    <div class="broucher">
                        @php $file_link =  asset('storage/brochure/Trafalgar-Residential-Letting-Service-EV.pdf'); @endphp
                        <a href="{{ $file_link }}"><img src="{{ asset('front/images/pdf.svg') }}" alt="{{ asset('front/images/pdf.svg') }}"/></a>
                        <p style="cursor: pointer;" onclick="location.href='{{ $file_link }}'" >Please click here to see Trafalgar’s Property Rental Service Brochure.</p>
                    </div>
                </div>
                <div class="rent_content">
                    <h4 class="mb-4">Widest Choice, Convenience and Professional Service From The Property Rental Specialists</h4>
                    <p>Trafalgar is the leading property rental agency across South Africa, letting and managing residential properties across all major metropolitan areas. Trafalgar has a wide selection of homes to rent, to suit all budgets, tastes and areas.</p>
                    <p>If you’re looking for apartments, houses, freestanding homes or flats to rent, our professional taeam of rental agents will make the process of searching, viewing, renting and moving into a new home as time efficient, convenient and comfortable as possible.</p>
                    <p>For landlords and property investors, Trafalgar’s multi-channel marketing, industry experience, brand visibility and pre-screened tenant waiting lists, ensures that your residential property investments are quickly and effectively leased to approved tenants at competitive rentals. Trafalgar ensures that all the correct tenant application screening and legal processes are followed with signing a new lease, thereby safeguarding and maximising rental income on rental properties.</p>
                </div>
            </div>
        </div>
        <div class="property-rental">
            <div class="container">
                <h1>Looking For Property Rentals?</h1>
                @php $pageLink =  route('property-to-rent-by-area'); @endphp
                <h4><button class="theme-btn" onclick="location.href='{{ $pageLink }}'" >Take a look at areas we think you'll love...</button></h4>
            </div>
        </div>
        <div class="container">
            <div class="property-solution online_services_view mb-4">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/Landlord-Services.svg') }}" alt="Landlord Services">
                            </div>
                            <h5>Landlord Services</h5>
                            <a href="#landlord_service" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/tenant-services.png') }}" alt="Tenant Services">
                            </div>
                            <h5>Tenant Services</h5>
                            <a href="#tenant_service" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/marketing.svg') }}" alt="Vacancy Marketing">
                            </div>
                            <h5>Vacancy Marketing</h5>
                            <a href="#vacancy_marktng" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/service.png') }}" alt="Tenant Screening">
                            </div>
                            <h5>Tenant Screening</h5>
                            <a href="#tenant_screening" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/guide.svg') }}" alt="Tenant Guide">
                            </div>
                            <h5>Tenant Guide</h5>
                            <a href="#tenant_guide" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/claim.svg') }}" alt="Rental Reports">
                            </div>
                            <h5>Rental Reports</h5>
                            <a href="#rental_report" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/faq.svg') }}" alt="FAQ’s">
                            </div>
                            <h5>FAQ’s</h5>
                            <a href="#faqs" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/online-application.svg') }}" alt="Online Applications">
                            </div>
                            <h5>Online Applications</h5>
                            <a href="#online_app" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/online-account.svg') }}" alt="Online Accounts">
                            </div>
                            <h5>Online Accounts</h5>
                            <a href="#online_acc" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/contact.svg') }}" alt="Contact Agent">
                            </div>
                            <h5>Contact Agent</h5>
                            <a href="/agent-search" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guldenland_products fullwidth">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section" id="landlord_service">
                        <h4><a href="javascript:void(0)">LANDLORD SERVICES</a></h4>
                        <div class="more-content" >
                            <p>For landlords and property investors, Trafalgar’s targeted marketing ensures that your property is quickly and effectively leased to the right tenant, Trafalgar also ensures that all the correct legal processes are followed, including the latest amendments required from the recently adopted Consumer Protection Act, thereby safeguarding and maximising investor returns.</p>
                             <span class="read-more">
                                <a href="{{ route('rent.rental-services') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="tenant_service">
                        <h4><a href="javascript:void(0)">TENANT SERVICES</a></h4>
                        <div class="more-content" >
                            <p>Trafalgar has the intention of making your experience of renting a home a happy one.  It is imperative that you have a clear understanding of both your rights and responsibilities as a tenant and those of the landlord. After your application has been favourably assessed, the next step will be to sign for the home you have chosen to rent.</p>
                             <span class="read-more">
                                <a href="{{ route('rent.tenant-services') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="vacancy_marktng">
                        <h4><a href="javascript:void(0)">VACANCY MARKETING</a></h4>
                        <div class="more-content" >
                            <p>Through effective marketing, in a range of communication channels, to appropriate audiences, we ensure prompt leasing to well-matched tenants.  This offers potential tenants a wide, convenient and accessible choice, while landlords benefit from high visibility and prompt occupation.</p>
                             <span class="read-more">
                                <a href="{{ route('rent.vacancy-marketing') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="tenant_screening">
                        <h4><a href="javascript:void(0)">TENANT SCREENING</a></h4>
                        <div class="more-content" >
                            <p>For a great tenant, look no further than Trafalgar.  For a tenant wishing to rent a home, Trafalgar Property Rentals through our large nationwide database has a portfolio of rental properties to suit all budgets and tastes. From flats and apartments, to townhouses and freestanding homes, our team of professionals will make the process of finding and moving into a new home as convenient, efficient and comfortable as possible.</p>
                             <span class="read-more">
                                <a href="{{ route('rent.tenant-screening') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="tenant_guide">
                        <h4><a href="javascript:void(0)">TENANT GUIDE</a></h4>
                        <div class="more-content" >
                            <p>Tenants are often unclear as to their duties and responsibilities with regards to a rental property. This tenant guide has been designed with the intention of making your experience of renting a home as comfortable and convenient as possible by focusing on answering important questions and uncertainties.</p>
                             <span class="read-more">
                                <a href="{{ route('rent.tenant-guide') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="rental_report">
                        <h4><a href="javascript:void(0)">RENTAL REPORTS</a></h4>
                        <div class="more-content" >
                            <p>A number of sample residential letting reports are available to review below; these demonstrate the format and scope of Trafalgar’s reporting for residential letting services.</p>
                             <span class="read-more">
                                <a href="{{ route('rental-reports') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="online_app">
                        <h4><a href="javascript:void(0)">ONLINE APPLICATIONS</a></h4>
                        <div class="more-content" >
                            <p>Should you wish to apply for a residential property to rent, please download and complete the relevant application form below and return to our nearest office using the contact details provided on the branch locator page.</p>
                             <span class="read-more">
                                <a href="{{ route('online-services').'#online_application' }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="online_acc">
                        <h4><a href="javascript:void(0)">ONLINE ACCOUNTS</a></h4>
                        <div class="more-content" >
                            <p>As a Trafalgar client, you are very welcome to use our online services to update your property management and account information. Simply log in using your pin and password, and gain access to a secure world of online property management information.</p>
                             <span class="read-more">
                                <a href="{{ route('online-services') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="faqs">
                        <h4><a href="javascript:void(0)">FREQUENTLY ASKED QUESTIONS</a></h4>
                        <p class="m-0">What would happen to me if the unit is sold?</p>
                        <p class="m-0">Is there any law which exists to protect my rights?</p>
                        <p class="m-0">Can the landlord or his agent enter my home whenever he pleases?</p>
                        <span class="read-more">
                            <a href="{{ route('rent.faqs') }}">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
            
            <!--<div class="certificates">-->
            <!--    <h3>Registration Certificates For Trafalgar Property <br/> Management (Pty) Ltd</h3>-->
            <!--    <div class="each_certificates">-->
            <!--        <a href="#">Estate Agency Affairs Board (EAAB) Certificate</a>-->
            <!--        <a href="#">National Association of Managing Agents (NAMA) Certificate</a>-->
            <!--        <a href="#">Council for Debt Collectors</a>-->
            <!--        <a href="#">Professional Indemnity Cover</a>-->
            <!--        <a href="#">South African Property Owners Association (SAPOA) Certificate</a>-->
            <!--        <a href="#">Financial Services Board</a>-->
            <!--        <a href="#">Registered Credit Provider</a>-->
            <!--        <a href="#">FIA Membership Certificate</a>-->
            <!--    </div>-->
            <!--</div>-->
            
        </div>
    </section>
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection

