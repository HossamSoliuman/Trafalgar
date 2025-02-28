@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','jozicbdrentals.jozicbdrentals-thank')->first(); @endphp
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

    <section class="guldenland_section rent_page_content mt-2">
        <div class="container">
           
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="heading"></div>
                    <div class="each_manage_section text-center">
                         <h4><a href="javascript:void(0)">Jozi CBD Rentals – Thank You</a></h4>
                        <h5 style="line-height: normal;">Thank you for your enquiry about Jozi CBD Rentals. One of our agents will contact you shortly.</h5>
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
