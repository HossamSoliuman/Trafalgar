
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
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
                                <img class="img-fluid" src="{{ asset('front/images/hoa-management.svg') }}" alt="hoa-management.svg">
                            </div>
                            <h5>Sectional Title Management</h5>
                            <a href="#sectional_mang" class="theme-btn top_space">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/shareblock.svg') }}" alt="shareblock.svg">
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
                        <p>Trafalgar’s core business is the property management of sectional title schemes and homeowners associations.  Trafalgar understands that the management effectiveness of a property directly affects peoples’ homes, lifestyles and the value of their primary assets, which is why we’re dedicated to providing a comprehensive and tailored sectional title management service.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.sectional-title-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="HOA_mang">
                        <h4><a href="javascript:void(0)">HOA MANAGEMENT</a></h4>
                        <p>Trafalgar’s core business is the property management of sectional title schemes and homeowners associations.  Trafalgar offers a comprehensive property management service which can be conveniently tailored to the specific needs and context of individual properties. Each property managed by Trafalgar is allocated a dedicated residential portfolio manager as a single point of entry and primary communication channel.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.hoa-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="dev_service">
                        <h4><a href="javascript:void(0)">PROPERTY DEVELOPER SERVICES</a></h4>
                        <p>Preparation of initial budget and calculation of levies and common area expenditure. Assistance with  (HOA)</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.developer-services') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="estate_mang">
                        <h4><a href="javascript:void(0)">ESTATE MANAGEMENT</a></h4>
                        <p>An Estate Manager will manage contractors, gardeners, cleaners, security guards and maintenance workers, as well as conduct regular inspections and attend to urgent maintenance projects.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management.estate-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section border-0 p-0" id="finance_mang">
                        <h4><a href="javascript:void(0)">SERVICE OPTIONS</a></h4>
                        <div class="product_option_scope">
                            <div class="text-center">
                                <img class="img-fluid" src="{{ asset('front/images/logo.png') }}" alt="{{ asset('front/images/logo.png') }}" />
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
                                    <th rowspan="3" >Levy Collections</th>
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
                                    <th rowspan="4" >Financial Management</th>
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
                                    <th colspan="2" scope="col"><b>Optional additional services priced individually:</b></th>
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
