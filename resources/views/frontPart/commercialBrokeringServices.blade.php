@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.commercial-property-management.commercial-brokering-services')->first(); @endphp


@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="{{ route('property-management') }}">Property Management</a></li>
                <li><a href="#">Commercial Brokering Services</a></li>
            </ul>
        </div>
    </div>
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Commercial Brokering Services</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing text-justify">
                    <div class="each_manage_section">
                        <p>Through effective marketing, in a range of communication channels, to appropriate audiences, we
                            ensure prompt leasing in an effort to find the correct tenant mix.&nbsp; This offers potential
                            tenants a wide, convenient and accessible choice, while landlords benefit from high visibility
                            and prompt occupation.&nbsp; Trafalgar makes use of the following printed, electronic and
                            outdoor media, to market properties to rent:</p>
                        <ul>
                            <li>Roadside boards</li>
                            <li>Property 24</li>
                            <li>Trafalgar’s Vacancy Schedule, sent to top brokers</li>
                        </ul>
                        <p>Our dedicated brokers have an abundance of knowledge to draw on and will negotiate mutually
                            beneficial leases in an effort to ensure long term tenancy for vacant premises.</p>
                        <p>Trafalgar, your Property Management Specialist for property peace of mind.</p>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img style="cursor: pointer;"
                                        onclick="window.location='{{ route('email-property-alert') }}';" class="img-fluid"
                                        src="{{ asset('front/images/alert.png') }}" alt="email-property-alert">
                                </div>
                                <div class="magazine-content">
                                    <h4 style="cursor: pointer;"
                                        onclick="window.location='{{ route('email-property-alert') }}';">Property Alerts
                                    </h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img style="cursor: pointer;" onclick="window.location='{{ route('sell') }}';"
                                        class="img-fluid" src="{{ asset('front/images/property.png') }}" alt="sell">
                                </div>
                                <div class="magazine-content">
                                    <h4 style="cursor: pointer;" onclick="window.location='{{ route('sell') }}';">List Your
                                        Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img style="cursor: pointer;"
                                        onclick="window.location='{{ route('sell') }}#e-magazine';" class="img-fluid"
                                        src="{{ asset('front/images/valuation.png') }}" alt="valuation">
                                </div>
                                <div class="magazine-content">
                                    <h4 style="cursor: pointer;"
                                        onclick="window.location='{{ route('sell') }}#e-magazine';">Free Valution</h4>
                                    <p>Request a free property valuation from one of our real
                                        estate agents to find out what your property is worth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
