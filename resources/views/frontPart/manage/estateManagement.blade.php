@php $pageMeta = App\Models\StaticPageMetaTag::find(22); @endphp
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.estate-management')->first(); @endphp

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
              <li><a href="{{ route('property-management') }}">Property Management</a></li>
              <li><a href="#">Estate Management</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Estate Management</h1>
                 <div class="manage-paragraph text-justify">
                    <p>Trafalgar offers Estate Management Services to support Boards of Directors to achieve their requirements on site for facility management, soft services (cleaning, security, grounds maintenance, refuse removal), building site inspections, architectural guideline enforcement and compliance with the rules of the Estate. Complementing the back-office financial and administration service overseen by a designated portfolio manager, Estate Managers make a direct and important impact on the visual presentation and lifestyle at the Estate and hence play a crucial role in the overall property management service.</p>
                    <p>Depending on scale, budgets and service scope requirements, Trafalgar also offers part-time Estate Managers which cover a comparable service scope on a part-time basis, typically supporting smaller Estates or where budgetary constraints limit a full time resource.</p>
                    <p>Trafalgar’s Estate Management services are currently deployed at many high profile Estates across South Africa including Waterfall, Steyn City, Blue Valley Golf Estate, Selborne Golf Estate and Dainfern and comprise the following service elements:</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph">
                        <b>Facility management:</b>
                        <p>Daily inspections and management of common area facilities (clubhouses, tennis courts, swimming pools).</p>
                        <b>Soft services:</b>
                        <p>Managing the service level agreements and service effectiveness of cleaning, security, refuse removal and grounds maintenance service providers working at the Estate.</p>
                        <b>Building site inspections:</b>
                        <p>Regular inspections as required of building sites for compliance with the Estate’s building rules. Collecting and managing building deposits is covered by Trafalgar’s billing, collections and accounting systems.</p>
                        <b>Architectural guidelines:</b>
                        <p>Supported by a professional architect, Trafalgar is equipped to support the enforcement and monitoring of defined architectural guidelines for an Estate.</p>
                        <b>Enforcement of the rules:</b>
                        <p>Surveillance and enforcement of the Estate Rules is very important for promoting an harmonious communal lifestyle. Estate Managers and their on-site teams play an important role with the visibility and enforcement of the rules for the benefit of all residents</p>
                        <b>Maintenance planning:</b>
                        <p>Trafalgar is equipped to develop and manage rolling 5 year maintenance plans and forecasts</p>
                        <b>Trafalgar’s Estate Management service:</b>
                        <p>Seamlessly interfaces with the back-office property management functions of billing, collections, debt collection, financial management and reporting which collectively promotes the long term success of an Estate both from a financial investment point of view as well as lifestyle benefit.</p>
                        <p>Trafalgar’s Estate Management services can be easily tailored to specific property contexts and challenges. For further information , Please complete the Quick Contact Form on the top right of the page for a fast response.</p>
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
