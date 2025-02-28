@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.commercial-property-management.commercial-landlord-services')->first(); @endphp


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
                <li><a href="#">Manage</a></li>
                <li><a href="#">Commercial Property Management</a></li>
                <li><a href="#">Commercial Landlord Services</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Commercial Landlord Services</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <p>For landlords and property investors, Trafalgar’s targeted marketing ensures that your property
                            is quickly and effectively leased to the right tenant, Trafalgar also ensures that all the
                            correct legal processes are followed, including the latest amendments required from the recently
                            adopted Consumer Protection Act, thereby safeguarding and maximising investor returns. Prompt
                            rental disbursements and detailed financial reporting together with thorough maintenance
                            management are Trafalgar’s world class service objectives.</p>
                        <b>Advertising</b>
                        <p>Making use of printed, outdoor and electronic media, Trafalgar targets tenants through a variety
                            of media channels.</p>
                        <b>Screening Of Tenants</b>
                        <p>Trafalgar undertakes to screen prospective tenants by way of credit and reference checks prior to
                            signing a lease agreement.</p>
                        <b>Signing A Lease</b>
                        <p>Experienced Letting Consultants ensure a legally binding lease agreement is drawn up to protect
                            the landlord and tenant by clearly defining the approach for handling rental payments and
                            collections, increases, deposits, maintenance issues and damages claims as important examples.
                        </p>
                        <b>Inspections</b>
                        <p>Trafalgar conducts pre and post occupancy inspections of rented properties and arranges quotes
                            for the restoration of property if necessary – these costs are offset against the deposit
                            balance before being refunded if appropriate, again ensuring maximum protection for your
                            investment.</p>
                        <b>Repairs And Maintenance</b>
                        <p>Our maintenance personnel will arrange any plumbing, electrical, painting or other repairs,
                            within the parameters of the mandate signed with the property owner. Trafalgar will track and
                            project manage the maintenance work, providing regular feedback to all involved parties.</p>
                        <b>Rent Collection, Owner Reporting And Financial Management</b>
                        <p>Rent is collected at the beginning of the month in terms of the lease agreement. Net rental
                            income is electronically transferred to the landlord’s nominated bank account(s) as soon as
                            practically possible. Payments can also be arranged on landlord’s behalf in regard to levies,
                            insurance and many more.</p>
                        <h5 class="text-center">“Trafalgar, The Shortest Distance Between Property And Peace Of Mind”</h5>
                    </div>
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
