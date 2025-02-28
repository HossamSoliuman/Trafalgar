@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent.vacancy-marketing')->first(); @endphp
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
              <li><a href="{{ route('rent') }}">Rent</a></li>
              <li><a href="#">Vacancy Marketing</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section rent_page_content  mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Vacancy Marketing</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>Through effective marketing, in a range of communication channels, to appropriate audiences, we ensure prompt leasing to well-matched tenants.  This offers potential tenants a wide, convenient and accessible choice, while landlords benefit from high visibility and prompt occupation.  Trafalgar makes use of the following printed, electronic and outdoor media, to market properties to rent:</p>
                        <ul>
                            <li>Classifieds</li>
                            <li>Roadside boards</li>
                            <li>Property 24</li>
                            <li>MWeb</li>
                            <li>Trafalgar’s property search engine</li>
                            <li>SMS Directories</li>
                            <li>Gumtree</li>
                            <li>Private Property</li>
                        </ul>
                        <p>Trafalgar is also brand proud, and aims to promote their properties in a professional manner. It is through our professional approach and brand visibility that we ensure brand awareness and world class service.</p>
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
