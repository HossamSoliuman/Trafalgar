@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section manage_top_banner">
        <div class="jobbanner-text">
            <h1>Manage</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="rent_page_content mb-4">
                <div class="manage-paragraph text-justify">
                    <div class="rent_img">
                        <img class="bannerimg img-fluid" src="{{ asset('front/images/property-management.png') }}" alt="Manage"/>
                        <div class="broucher">
                              @php $pdflink = asset('storage/brochure/Sectional-Title-and-HOA-Property-Managment-EV.pdf');  @endphp
                            <a download href="{{ $pdflink }}"><img src="{{ asset('front/images/pdf.svg') }}" alt="{{ asset('front/images/pdf.svg') }}"/></a>
                          
                            <p title="Sectional-Title-and-HOA-Property-Managment-EV.pdf"  style="cursor: pointer;" onclick="location.href='{{ $pdflink }}'">Please click here to see Trafalgar’s Sectional Title and HOA Property Management Brochure.</p>
                        </div>
                    </div>
                    <div class="rent_content pt-4">
                        <p>Trafalgar offers full-service sectional title and home owners association (“HOA”) property management services across South Africa. Specific property requirements and challenges can be addressed by applying specialised and experienced teams, systems and infrastructure. Experienced portfolio managers provide a single point of communication and service delivery guided by world class service delivery as a standard. A strong focus on accurate budgeting, detailed financial management reporting and governance excellence underpin Trafalgar’s property management services.</p>
                    </div>
                </div>
            </div>
            <div class="heading">
                <div class="manage-paragraph text-justify" style="padding: 20px;border: 1px solid #bfd530;">
                    <p class="d-flex align-items-center"><span class="pr-4"><img src="{{ asset('front/images/csos-stsm-acts.gif') }}" alt="csos-stsm-acts.gif" /></span> <span>There is currently a significant focus on interpreting and implementing the newly promulgated CSOS and STSM Acts which have far reaching implications for the management of complexes going forward; for summaries of the practical implications, frequently asked questions and links to the source legislation, please go to <a href="{{ route('property-management.stsm-act') }}">{{ route('newlegislation') }}</a></span></p>
                </div>
            </div>
            <div class="property-solution online_services_view mb-4">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/hoa-management.svg') }}" alt="hoa-management.svg" />
                            </div>
                            <h5>Sectional Title & HOA Management</h5>
                            <p>Comprehensive property management services and support to cover sectional title body corporate and HOA requirements</p>
                            <a href="#hoa_manage" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/commercial.svg') }}" alt="commercial.svg" />
                            </div>
                            <h5>Commercial Property Management</h5>
                            <p>Broking and full property management services available for commercial, retail and industrial property</p>
                            <a href="#commercial_manage"  class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/estate-management.svg') }}" alt="estate-management.svg">
                            </div>
                            <h5>Estate Management</h5>
                            <p>Full or part-time Estate Managers to oversee facility management and soft services on-site</p>
                            <a href="#estate_manage" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/owners.svg') }}" alt="owners.svg">
                            </div>
                            <h5>Executive Managing Agent</h5>
                            <p>Trafalgar will cover both the role of managing agent and the board of Trustees</p>
                            <a href="#manage_agent" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/online.svg') }}" alt="online.svg">
                            </div>
                            <h5>Online Services</h5>
                            <p>View levy accounts online, important property contact details and reports or submit maintenance requests or queries online</p>
                            <a href="#online_service" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!--<div class="training_videos">-->
        <!--    <div class="container">-->
        <!--        <h2>Property Management Training Videos</h2>-->
        <!--        <p>We have collated a number of short videos, covering a range of very important sectional title and HOA management topics. These videos are targeted at Trustees and Directors, aiming to clearly and simply explain how and when important governance milestones can be achieved.</p>-->
                <!--<h4>-->
        <!--            <a class="theme-btn d-inline-block h-auto" href="https://training.trafalgar.co.za/property-management-training-videos">See the Videos</a>-->
                <!--</h4>-->
        <!--    </div>-->
        <!--</div>-->
            
        <div class="container">
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <!--div class="each_manage_section text-right">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/CbFub5Gaxy4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href="#" style="color:#6e0d16"><small>Click here to see the videos</small></a>
                    </div>-->
                    <!--<div class="each_manage_section">-->
                    <!--    <h4><a href="javascript:void(0)">PROPERTY MANAGEMENT TRAINING VIDEOS</a></h4>-->
                    <!--    <p>We have collated a number of short videos, covering a range of very important sectional title and HOA management topics. These videos are targeted at Trustees and Directors, aiming to clearly and simply explain how and when important governance milestones can be achieved.</p>-->
                    <!--    <p>As a Trafalgar client, you are very welcome to use our property management services, which are comprised of:</p>-->
                    <!--</div>-->
                    <p class="m-0">As a Trafalgar client, you are very welcome to use our property management services, which are comprised of:</p>
                    <div class="each_manage_section" id="hoa_manage">
                        <h4><a href="javascript:void(0)">SECTIONAL TITLE & HOA MANAGEMENT</a></h4>
                        <p>Trafalgar’s core business is the property management of sectional title schemes and homeowners associations.  Trafalgar understands that the management effectiveness of a property directly affects peoples’ homes, lifestyles and the value of their primary assets, which is why we’re dedicated to providing a comprehensive and tailored sectional title management service.Trafalgar offers a comprehensive property management service which can be conveniently tailored to the specific needs and context of individual properties. Each property managed by Trafalgar is allocated a dedicated residential portfolio manager as a single point of entry and primary communication channel.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="commercial_manage">
                        <h4><a href="javascript:void(0)">COMMERCIAL PROPERTY MANAGEMENT</a></h4>
                        <p>Trafalgar offers a comprehensive and tested commercial property management service catering for all the management requirements associated with Commercial, Retail and Industrial property. Effective financial and facility management are Trafalgar’s priority focuses and competitive advantage, underpinned by well-established and customised infrastructure. Defining an accurate property budget from the outset and reporting a monthly performance to budget with the standard rent roll and creditors payment schedule, enables utility recoveries and variances to be tightly managed.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.commercial-property-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="estate_manage">
                        <h4><a href="javascript:void(0)">ESTATE MANAGEMENT</a></h4>
                        <p>An Estate Manager will manage contractors, gardeners, cleaners, security guards and maintenance workers, as well as conduct regular inspections and attend to urgent maintenance projects.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.estate-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="manage_agent">
                        <h4><a href="javascript:void(0)">EXECUTIVE MANAGING AGENT</a></h4>
                        <p>Trafalgar is equipped to provide an executive managing agent service as envisaged in the legislative clause copied below, promulgated on the 7th October 2016. This service covers the role of Trustees where time, capacity and location for traditional Trustee involvement at the body corporate, are challenges. As stipulated, Trafalgar will cover both the role of managing agent and the board of Trustees, circulating to all owners on a quarterly basis, a full management report and newsletter, explaining the financial and facility management performance of the building together with relevant planning ahead. The overriding objectives for the executive managing agent service will be good governance, legislative compliance, facility management effectiveness and sound maintenance planning to add value to the building and individual sections over the long term.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.executive-managing-agent') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="online_service">
                        <h4><a href="javascript:void(0)">ONLINE SERVICES</a></h4>
                        <p>As a Trafalgar client, you are very welcome to use our online services to update your property management and account information. In the Property Portals you will have access to a wealth of information about your property;rules, financials, contractors’ details, plans, a bulletin board and much more. Simply log in using your pin and password, and gain access to a secure world of online property management information.</p>
                        <span class="read-more">
                            <a href="{{ route('online-services') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">FREQUENTLY ASKED QUESTIONS</a></h4>
                        <p class="m-0">If An Owner Rents His Unit To A Third Party – Does He Have To Notify The Body Corporate?</p>
                        <p class="m-0">Can An Owner Who Is In Arrears Vote At A General Meeting?</p>
                        <p class="m-0">What Is The Difference Between “Full Title” And “Sectional Title”?</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.faqs')}}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">SECTIONAL TITLE ACT, ANNEXURES & FAQ’S</a></h4>
                        <p>In 2011 the STSM Act were published to become in force on a date to be announced by the Minister. The Act could not come in force before the Regulations to it have been finalized. Now finally on 2 October 2015 these Regulations have been published and opened for public comment for a period of 30 days.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.stsm-act') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">USEFUL PROPERTY MANAGEMENT LINKS</a></h4>
                        <ul class="pdfs">
                            <li><a href="{{ route('property-management-tips') }}">Property management tips representing a series of best practices identified over Trafalgar’s fifty year property management experience.</a></li>
                            <li><a href="{{ asset('storage/brochure/Full-Report-Pack-Sample.pdf') }}">Sample Property Management Report</a></li>
                            <li><a href="{{ route('property-management.easy-guide-to-body-corporate-resolutions') }}">Easy guide to Body Corporate Resolutions</a></li>
                        </ul>
                    </div>
                   
                </div>
                <div class="guldenland_sidebar">
                    <div class="sidelist">
                        <h4>Registration Certificates For Trafalgar Property Management (Pty) Ltd</h4>
                     <ul>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar Property Management PPRA Registration Certificate.pdf') }}">Property Practitioners Regulatory Authority (PPRA) Certificate
</a></li>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar-Property-Management-NAMA-Certificate-2022.pdf') }}">National Association of Managing Agents (NAMA) Certificate</a></li>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar Council for Debt Collectors Certificate 2023.pdf') }}">Council for Debt Collectors</a></li>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar-Professional-Indemnity-Cover-Certificate-2022.pdf') }}">Professional Indemnity Cover</a></li>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar-SAPOA-2022-Certificate.pdf') }}">South African Property Owners Association (SAPOA) Certificate</a></li>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar Property Management_BEE Certificate.pdf') }}">BEE Certificate</a></li>
                            
                        </ul>
                    </div>
                    <div class="sidelist">
                        <h4>Registration certificates for Trafalgar Financial Services (Pty) Ltd</h4>
                        <ul>
                            <li><a href="#">Financial Services Board</a></li>
                            <li><a href="#">Registered Credit Provider</a></li>
                            <li><a href="#">FIA Membership Certificate</a></li>
                        </ul>
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
