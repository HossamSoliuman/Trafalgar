@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','sample-property-management-reports')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <div class="breadcrumbs">
      <div class="container">
          <ul></ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section rent_page_content  mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Sample Property Management Reports</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                      <p>Click To Download And View The Sample Property Management Report:</p>
                      <a class="green_button" href="{{ asset('storage/websitepdf/Full-Report-Pack-Sample.pdf')}}">Sample Full Report Pack</a>
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
