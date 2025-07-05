@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.community-scheme-management')->first(); @endphp

@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <style>
        h4 {
            scroll-margin-top: 5rem;
        }
    </style>

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="{{ route('property-management') }}">Property Management</a></li>
                <li><a href="#">Community Scheme Management</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Community Scheme Management</h1>
            </div>
            <div class="property-solution online_services_view mb-5">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/hoa-management.svg') }}"
                                    alt="hoa-management.svg">
                            </div>
                            <h5>Sectional Title Management</h5>
                            <a href="#sectional_mang" class="theme-btn top_space">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/shareblock.svg') }}"
                                    alt="shareblock.svg">
                            </div>
                            <h5>HOA Management</h5>
                            <a href="#HOA_mang" class="theme-btn top_space">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/dev-service.svg') }}" alt="dev-service.svg">
                            </div>
                            <h5>Body Corporate Management</h5>
                            <a href="#body_corporate_management" class="theme-btn top_space">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/estate-management.svg') }}" alt="estate-management.svg">
                            </div>
                            <h5>Estate Management</h5>
                            <a href="#estate_mang" class="theme-btn top_space">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/finance.svg') }}" alt="finance">
                            </div>
                            <h5>Service Options</h5>
                            <a href="#finance_mang" class="theme-btn top_space">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section" id="sectional_mang">
                        <h4><a href="javascript:void(0)">SECTIONAL TITLE MANAGEMENT</a></h4>
                        <p>Trafalgar specializes in <a
                                href="{{ route('property-management.sectional-title-management') }}"><b>sectional title
                                    management</b></a>, offering comprehensive and tailored services to ensure the efficient
                            operation of sectional title schemes across South Africa. Our services include <a
                                href="{{ route('property-finance') }}"><b>financial management</b></a>, legal compliance,
                            property maintenance, administration and dispute resolution. With over 50 years of experience,
                            <a href="{{ route('property-management.property-management-company') }}"><b>Trafalgar</b></a>
                            provides expert financial oversight, maintains common areas, ensures regulatory compliance,
                            facilitates meetings, and handles conflict resolution. Our proactive approach and transparent
                            communication make managing sectional title properties easier for trustees and owners. Trafalgar
                            is dedicated to maintaining property values and ensuring a well-run, harmonious community
                            schemes.<span class="read-more">
                                <a href="{{ route('property-management.sectional-title-management') }}">
                                    Read More</a>
                            </span>
                    </div>
                    <div class="each_manage_section" id="HOA_mang">
                        <h4><a href="javascript:void(0)">HOA MANAGEMENT</a></h4>
                        <p>Trafalgar’s core business is the property management of sectional title schemes and homeowners
                            associations. Trafalgar offers a comprehensive property management service which can be
                            conveniently tailored to the specific needs and context of individual properties. Each property
                            managed by Trafalgar is allocated a dedicated residential portfolio manager as a single point of
                            entry and primary communication channel.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.hoa-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="estate_mang">
                        <h4><a href="javascript:void(0)">ESTATE MANAGEMENT</a></h4>
                        <p>An Estate Manager will manage contractors, gardeners, cleaners, security guards and maintenance
                            workers, as well as conduct regular inspections and attend to urgent maintenance projects.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.estate-management') }}">Read
                                More</a>
                        </span>
                    </div>

                    <div class="each_manage_section" id="body_corporate_management">
                        <h4><a href="javascript:void(0)">BODY CORPORATE MANAGEMENT</a></h4>
                        <p>Trafalgar provides expert <a
                                href="{{ route('property-management.body-corporate-management') }}"><b>body corporate
                                    management</b></a> services for sectional title schemes, ensuring efficient financial
                            administration, property maintenance, billing, collections and debt collection, as well as
                            secretarial and legal advisory services. With over 50 years of experience, <a
                                href="{{ route('property-management') }}"><b> Trafalgar </b></a> manages levy collections,
                            budgets, and financial reporting while coordinating maintenance for common property areas. Our
                            services include facilitating meetings, ensuring regulatory compliance, and offering legal
                            support. We also manage security, safety, and dispute resolution to promote a harmonious
                            community. Trafalgar’s proactive and transparent approach ensures the long-term success of body
                            corporates, providing comprehensive solutions that cater to the unique needs of each property.
                        </p>
                        <span class="read-more">
                            <a href="{{ route('property-management.body-corporate-management') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="dev_service">
                        <h4><a href="javascript:void(0)">PROPERTY DEVELOPER SERVICES</a></h4>
                        <p>Preparation of initial budget and calculation of levies and common area expenditure. Assistance
                            with (HOA)</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.developer-services') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section border-0 p-0" id="finance_mang">
                        <h4><a href="javascript:void(0)">SERVICE OPTIONS</a></h4>
                        <div class="product_option_scope">
                            <div class="text-center">
                                <img class="img-fluid" src="{{ asset('front/images/logo.png') }}"
                                    alt="{{ asset('front/images/logo.png') }}" />
                            </div>
                            <div class="product_table">
                                <h3>Product Options and Scope of Services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="product_table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td scope="col"></td>
                                    <th scope="col"><b>Core</b>Financial Management</th>
                                    <th scope="col"><b>Classic</b>Full Service Management</th>
                                    <th scope="col"><b>Elite</b>Comprehensive Service</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th rowspan="3">Levy Collections</th>
                                    <td>Billing</td>
                                    <td>Billing</td>
                                    <td>Billing</td>
                                </tr>
                                <tr>
                                    <td>Collections</td>
                                    <td>Collections</td>
                                    <td>Collections</td>
                                </tr>
                                <tr>
                                    <td>Debt collection</td>
                                    <td>Debt collection</td>
                                    <td>Debt collection</td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Financial Management</th>
                                    <td>Budgeting</td>
                                    <td>Budgeting</td>
                                    <td>Budgeting</td>
                                </tr>
                                <tr>
                                    <td>Accounting: debtor receipting creditor payments</td>
                                    <td>Accounting: debtor receipting creditor payments</td>
                                    <td>Accounting: debtor receipting creditor payments</td>
                                </tr>
                                <tr>
                                    <td>Monthly financial reporting</td>
                                    <td>Monthly financial reporting</td>
                                    <td>Monthly financial reporting</td>
                                </tr>
                                <tr>
                                    <td>Audit file preparation</td>
                                    <td>Audit file preparation</td>
                                    <td>Audit file preparation</td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Secretarial & Administration</th>
                                    <td rowspan="4">Archiving records for 7 years</td>
                                    <td>Quarterly trustee meetings</td>
                                    <td>Quarterly trustee meetings</td>
                                </tr>
                                <tr>
                                    <td>AGM</td>
                                    <td>AGM</td>
                                </tr>
                                <tr>
                                    <td>Archiving records for 7 years</td>
                                    <td>Archiving records for 7 years</td>
                                </tr>
                                <tr>
                                    <td>Owner correspondence</td>
                                    <td>Owner correspondence</td>
                                </tr>
                                <tr>
                                    <th rowspan="4">Maintenance & Administration</th>
                                    <td rowspan="4"></td>
                                    <td>Quotes</td>
                                    <td>Quotes</td>
                                </tr>
                                <tr>
                                    <td>Maintenance bookings</td>
                                    <td>Maintenance bookings</td>
                                </tr>
                                <tr>
                                    <td>Job card sign-off</td>
                                    <td>Job card sign-off</td>
                                </tr>
                                <tr>
                                    <td>Annual building inspections</td>
                                    <td>Annual building inspections</td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Human Resources</th>
                                    <td>Payroll</td>
                                    <td>Payroll</td>
                                    <td>Payroll</td>
                                </tr>
                                <tr>
                                    <td>Statutory returns</td>
                                    <td>Statutory returns</td>
                                    <td>Statutory returns</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered additional_ser m-0">
                            <thead>
                                <tr>
                                    <td></td>
                                    <th colspan="2" scope="col"><b>Optional additional services priced
                                            individually:</b></th>
                                    <th scope="col"><b>Additional services included:</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="6"></td>
                                    <td>CSOS annual returns</td>
                                    <td>CSOS annual returns</td>
                                    <td>CSOS annual returns</td>
                                </tr>
                                <tr>
                                    <td>Public Officer &tax returns</td>
                                    <td>Public Officer &tax returns</td>
                                    <td>Public Officer &tax returns</td>
                                </tr>
                                <tr>
                                    <td>Information Officer</td>
                                    <td>Information Officer</td>
                                    <td>Information Officer</td>
                                </tr>
                                <tr>
                                    <td>CSOS disputes</td>
                                    <td>CSOS disputes</td>
                                    <td>CSOS disputes</td>
                                </tr>
                                <tr>
                                    <td>HR Services: contracts; hearings; CCMA</td>
                                    <td>HR Services: contracts; hearings; CCMA</td>
                                    <td>HR Services: contracts; hearings; CCMA</td>
                                </tr>
                                <tr>
                                    <td>Additional building inspections</td>
                                    <td>Additional building inspections</td>
                                    <td>Additional building inspections</td>
                                </tr>
                                <tr>
                                    <th>Cost per unit per month (ex VAT)</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="each_manage_section" id="">
                        <h4><a href="javascript:void(0)">CARETAKER SERVICES</a></h4>
                        <p>Trafalgar’s <a href="{{ route('property-management.caretaker-services') }}"><b>caretaker
                                    services</b></a> provide comprehensive property facility management solutions, ensuring
                            the efficient maintenance, security, and upkeep of residential and commercial buildings. Full or
                            part time caretakers oversee and manage routine maintenance, repairs, cleaning of communal
                            areas, waste disposal, gardening, and security monitoring. They act as the first point of
                            contact for tenants and residents, manage emergencies, and conduct regular property inspections
                            to prevent issues. Trafalgar’s caretakers are highly trained, reliable, and proactive, offering
                            <a href="{{ route('property-management.caretaker-services') }}"><b>tailored services</b></a>
                            to meet the specific needs and budget parameters of each property. With <a
                                href="{{ route('property-management.property-management-company') }}"><b>Trafalgar</b></a>,
                            properties remain safe, clean, and well-maintained, ensuring a high-quality environment for all
                            occupants.
                        </p>
                        <span class="read-more">
                            <a href="{{ route('property-management.caretaker-services') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="">
                        <h4><a href="javascript:void(0)">MANAGING AGENTS</a></h4>
                        <p>A property managing agent is essential for effective <a
                                href="{{ route('property-management') }}"><b>property management</b></a>

                            , handling tenant relations, property maintenance, financial administration, and legal
                            compliance. , with over 50 years of experience, offers comprehensive services tailored to
                            meet the unique needs of property owners and individual properties. Our responsibilities
                            include tenant management, regular inspections, budget preparation, and conflict resolution,
                            ensuring smooth operations and tenant satisfaction. By partnering with <a
                                href="{{ route('property-management.property-management-service-provider') }}"><b>Trafalgar</b></a>,
                            property
                            owners can save time, reduce stress, and increase property value. With a proven track record
                            and a dedicated team, Trafalgar is your trusted partner in maximizing the success of your
                            property investment.
                        </p>
                        <span class="read-more">
                            <a href="{{ route('managing-agent') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="">
                        <h4><a href="javascript:void(0)">Home Owners Association Management</a></h4>
                        <p><a href="{{ route('property-management.home-owners-association-management') }}"><b>Homeowners
                                    association management</b></a> is essential for maintaining and enhancing property
                            values and the quality of life in residential HOA community schemes. Professional <a
                                href="{{ route('property-management.hoa-estate-management') }}"><b>HOA management</b></a>,
                            like that offered by <a href="{{ route('property-management') }}"><b>Trafalgar Property
                                    Management</b></a>, provides expertise in financial management, maintenance
                            coordination, rule enforcement, and conflict resolution. This approach ensures efficient
                            operations, legal compliance, and improved community appeal, ultimately preserving and growing
                            property values. By relieving volunteer board members of time-consuming tasks, Trafalgar enables
                            them to focus on long-term community goals. Partnering with a professional <a
                                href="{{ route('property-management.property-management-company') }}"><b>management
                                    company</b></a> allows HOAs to thrive, creating well-managed, vibrant neighbourhoods.
                        </p>
                        <span class="read-more">
                            <a href="{{ route('property-management.home-owners-association-management') }}">Read
                                More</a>
                        </span>
                    </div>
                    @include('frontPart.manage.faqs.communitySchemeManagement')
                </div>
                <div class="guldenland_sidebar">
                    @include('frontPart/rightBar/rightBarQuickContactForm')
                    @include('frontPart/rightBar/rightBarQuickLinkMenu')

                    @include('frontPart/rightBar/rightBarSocialIcon')
                    @include('frontPart/rightBar/rightNewsLetter')
                </div>
            </div>
        </div>
    </section>

    <!-- page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
