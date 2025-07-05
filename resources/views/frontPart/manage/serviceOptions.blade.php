@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.service-options')->first(); @endphp

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
                <li><a href="#">Service Options</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Service Options</h1>
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar offers three distinct tiers of community scheme management services—Core, Classic, and
                        Elite—each designed to meet varying levels of property management needs. From essential
                        financial functions like levy billing and debt collection in the Core package, to the more
                        comprehensive support found in the Elite package, including maintenance coordination, trustee
                        meetings, and additional statutory services, clients can choose the level of involvement and
                        oversight that best suits their scheme. Optional services such as CSOS dispute handling and HR
                        support are also available across all packages.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('front/images/logo.png') }}"
                                alt="{{ asset('front/images/logo.png') }}" />
                        </div>
                        <div class="product_table">
                            <h3>Product Options and Scope of Services</h3>
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
