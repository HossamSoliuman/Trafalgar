@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management')->first(); @endphp

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
                <li><a href="#">Sectional Title And HOA Management</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Sectional Title And HOA Management</h1>
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
                            <h5>Property Developer Services</h5>
                            <a href="#dev_service" class="theme-btn top_space">Read More</a>
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
                        <p>Trafalgar’s core business is the property management of sectional title schemes and homeowners
                            associations. Trafalgar understands that the management effectiveness of a property directly
                            affects peoples’ homes, lifestyles and the value of their primary assets, which is why we’re
                            dedicated to providing a comprehensive and tailored sectional title management service.</p>
                        <span class="read-more">
                            <a
                                href="{{ route('property-management.sectional-title-and-hoa-management.sectional-title-management') }}">Read
                                More</a>
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
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.hoa-management') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="dev_service">
                        <h4><a href="javascript:void(0)">PROPERTY DEVELOPER SERVICES</a></h4>
                        <p>Preparation of initial budget and calculation of levies and common area expenditure. Assistance
                            with (HOA)</p>
                        <span class="read-more">
                            <a
                                href="{{ route('property-management.sectional-title-and-hoa-management.developer-services') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="estate_mang">
                        <h4><a href="javascript:void(0)">ESTATE MANAGEMENT</a></h4>
                        <p>An Estate Manager will manage contractors, gardeners, cleaners, security guards and maintenance
                            workers, as well as conduct regular inspections and attend to urgent maintenance projects.</p>
                        <span class="read-more">
                            <a
                                href="{{ route('property-management.sectional-title-and-hoa-management.estate-management') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="finance_mang">
                        <h4><a href="javascript:void(0)">SERVICE OPTIONS</a></h4>
                        <p>Trafalgar offers three distinct tiers of community scheme management services—Core, Classic, and
                            Elite—each designed to meet varying levels of property management needs. From essential
                            financial functions like levy billing and debt collection in the Core package, to the more
                            comprehensive support found in the Elite package, including maintenance coordination, trustee
                            meetings, and additional statutory services, clients can choose the level of involvement and
                            oversight that best suits their scheme. Optional services such as CSOS dispute handling and HR
                            support are also available across all packages.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.service-options') }}">Read
                                More</a>
                        </span>
                    </div>
                    @include('frontPart.manage.quickLinksBlocks')
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
