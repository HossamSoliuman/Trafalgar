@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management.developer-services')->first(); @endphp

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
              <li><a href="#">Manage</a></li>
              <li><a href="#">Property Developer Services</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Property Developer Services</h1>
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar offers a comprehensive range of advisory and support services for residential and sectional title property developers and their professional teams. Property management input is recommended from an early design stage of a new development and sectional title scheme. Based on signing a management agreement, the advisory services listed below are provided free of charge to assist with setting up the development and sectional title building in an effective and legally compliant manner.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="manage-paragraph paragraph-listing">
                        <p>Trafalgar’s sectional title, property management and advisory services for residential property developers comprises:</p>
                        <ul>
                            <li>Design input to promote property and facility management effectiveness</li>
                            <li>Levy budget formulation to assist with property sales</li>
                            <li>Referral to attorneys who can advise on conduct rule recommendations.</li>
                            <li>Collection of quotes from preferred service providers for security, cleaning, gardening as required</li>
                            <li>Estate management</li>
                            <li>Assisting with occupation logistics</li>
                            <li>Facilitation of the inaugural AGM</li>
                            <li>Assistance with the developer’s reconciliation to present at the AGM to recover costs</li>
                            <li>Activation of legally compliant property management processes and reporting</li>
                            <li>Trustee training</li>
                        </ul>
                        <p>All Trafalgar’s sectional title and property management services can be tailored and customised to specific property and developer requirements. To obtain further information, please contact Andrew Schaefer on <a href="mailto:andrews@trafalgar.co.za">andrews@trafalgar.co.za</a> or 011 214 5200</p>
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
