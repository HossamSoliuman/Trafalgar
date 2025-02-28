
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','online-services.online-applications')->first(); @endphp


@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <div class="breadcrumbs">
      <div class="container">
          <ul>
              <li><a href="{{ route('online-services') }}">Online Services</a></li>
              <li><a href="#">Online Applications</a></li>
          </ul>
      </div>
    </div>
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Online Applications</h1>
            </div>
            <div class="guldenland_products">
                 <div class="guldenland_products_listing text-justify">
                    <div class="each_manage_section">
                        <p>Should you wish to apply for a residential or commercial property to rent, please download and complete the relevant application form below and return to our nearest office using the contact details provided on the branch locator page. To arrange a free, no obligation property insurance or property management quote, please complete and return the insurance letter of investigation or property management quotation questionnaire respectively.</p>
                        <ul class="pdfs">
                            <li><a href="{{ asset('storage/brochure/Application-to-let-a-residential-unit-2015.pdf') }}">Application to let a residential unit</a></li>
                            <li><a href="{{ asset('storage/brochure/Application-To-Lease-Commercial-Premises.pdf') }}" target="_blank" rel="noopener">Application to lease commercial premises</a></li>
                            <li><a href="{{ asset('storage/brochure/Property-Insurance-Letter-of-Investigation.pdf') }}" target="_blank" rel="noopener">Property insurance letter of investigation</a></li>
                            <li><a href="{{ route('property-management-quote-request') }}">Property management quote request</a></li>
                            <li><a title="Careers" href="{{ route('jobs') }}">Job application</a></li>
                            <li><a title="Report maintenance issues" href="{{ route('report-maintenance-issues') }}">Maintenance request</a></li>
                        </ul>
                        <p>Trafalgar Property Management was proud to introduce the first automated Online Application in June 2011. As a Group we are active in promoting cutting edge technology to deliver a world class product and service to our clients.</p>   
                        <p>Utilising the online applications will fast track the application process together with outlining the necessary supporting information which is necessary for compiling a meaningful quotation.</p>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/alert.png') }}" alt="Alert">
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/property.png') }}" alt="Property">
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/valuation.png') }}" alt="Valuation">
                                </div>
                                <div class="magazine-content">
                                    <h4>Free Valution</h4>
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
