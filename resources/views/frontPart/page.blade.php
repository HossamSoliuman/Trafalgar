@if($pageData->page_name == "privacy-policy")


@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','privacy-policy')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@endif

@if($pageData->page_name == "disclaimer")


@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','disclaimer')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@endif

@if($pageData->page_name == "terms-conditions")


@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','terms-conditions')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@endif
@extends('layouts.front')

@section('content')
    
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
            <!--<div class="heading mb-4">
               <h1>{{ ucfirst( str_replace('-',' ',$pageData->page_name)) }}</h1>
            </div>-->
            <div class="guldenland_products">
                <div class="guldenland_products_listing">
                    
                 {!! $pageData->page_content !!}
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
