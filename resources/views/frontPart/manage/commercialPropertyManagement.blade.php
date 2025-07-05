@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.commercial-property-management')->first(); @endphp

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
                <li><a href="#">Commercial Property Management</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Commercial Property Management</h1>
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar offers a comprehensive and tested commercial property management service catering for all
                        the management requirements associated with Commercial, Retail and Industrial property. Effective
                        financial and facility management are Trafalgar’s priority focuses and competitive advantage,
                        underpinned by well-established and customised infrastructure. Defining an accurate property budget
                        from the outset and reporting a monthly performance to budget with the standard rent roll and
                        creditors payment schedule, enables utility recoveries and variances to be tightly managed.</p>
                    <p>Trafalgar’s Commercial, Industrial and Retail property management services are based upon a detailed
                        analysis of the specific requirements of the landlord as well as the inherent qualities and
                        potential of the portfolio. We pride ourselves on offering tailored solutions to property portfolios
                        increasing the returns to our clients. Please click here to see Trafalgar’s Commercial Property
                        Broking & Management Brochure.</p>
                    <p>Trafalgar’s commercial property management service includes the following features:</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <h4><a
                                href="{{ route('property-management.commercial-property-management.commercial-landlord-services') }}">LANDLORD
                                SERVICES</a></h4>
                        <p>For landlords and property investors, Trafalgar’s targeted marketing ensures that your property
                            is quickly and effectively leased to the right tenant, Trafalgar also ensures that all the
                            correct legal processes are followed, including the latest amendments required from the recently
                            adopted Consumer Protection Act, thereby safeguarding and maximising investor returns.</p>
                        <span class="read-more">
                            <a
                                href="{{ route('property-management.commercial-property-management.commercial-landlord-services') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a
                                href="{{ route('property-management.commercial-property-management.commercial-tenant-services') }}">TENANT
                                SERVICES</a></h4>
                        <p>It is imperative that you have a clear understanding of both your rights and responsibilities as
                            a tenant and those of the landlord, all negotiations and special conditions agreed to during the
                            offer stage are explicitly stated in the lease agreemen</p>
                        <span class="read-more">
                            <a
                                href="{{ route('property-management.commercial-property-management.commercial-tenant-services') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a
                                href="{{ route('property-management.commercial-property-management.commercial-brokering-services') }}">BROKING
                                SERVICES</a></h4>
                        <p>Through effective marketing, in a range of communication channels, to appropriate audiences, we
                            ensure prompt leasing in an effort to find the correct tenant mix. This offers potential tenants
                            a wide, convenient and accessible choice, while landlords benefit from high visibility and
                            prompt occupation.</p>
                        <span class="read-more">
                            <a
                                href="{{ route('property-management.commercial-property-management.commercial-brokering-services') }}">Read
                                More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="#">ONLINE APPLICATIONS</a></h4>
                        <p>Should you wish to apply for a commercial property to rent, please download and complete the
                            relevant application form below and return to our nearest office using the contact details
                            provided on the <a href="#">branch locator</a> page.</p>
                        <span class="read-more">
                            <a href="{{ route('online-services.online-applications') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="#">VACANCY MARKETING</a></h4>
                        <p>Through effective marketing, in a range of communication channels, to appropriate audiences, we
                            ensure prompt leasing to well-matched tenants. This offers potential tenants a wide, convenient
                            and accessible choice, while landlords benefit from high visibility and prompt occupation.</p>
                        <span class="read-more">
                            <a href="{{ route('rent.vacancy-marketing') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="#">ONLINE SERVICES</a></h4>
                        <p>As a Trafalgar client, you are very welcome to use our online services to update your property
                            management and account information. Simply log in using your pin and password, and gain access
                            to a secure world of online property management information.</p>
                        <span class="read-more">
                            <a href="{{ route('online-services') }}">Click here</a>
                        </span>
                    </div>
                    @include('frontPart.manage.quickLinksBlocks')
                    @include('frontPart.manage.faqs.commercialPropertyManagement')
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
