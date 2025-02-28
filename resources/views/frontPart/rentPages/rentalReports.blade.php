@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rental-reports')->first(); @endphp
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

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Rental Reports</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>A number of sample residential letting reports are available to review below; these demonstrate the format and scope of Trafalgar’s reporting for residential letting services.</p>
                        <ul class="pdfs">
                            <li><a href="{{ asset('storage/brochure/DECEMBER-2016-Statement.pdf') }}">Tenant rental statement sent to tenants in advance of the 1st of each month</a></li>
                            <li><a href="{{ asset('storage/brochure/Owner-rental-report-sample-2016.pdf') }}">Owner rental statement for a single managed unit – summary</a></li>
                            <li><a href="{{ asset('storage/brochure/Detailed-owner-rental-report-sample-2016.pdf') }}">Owner rental statement for a single managed unit – detailed</a></li>
                            <li><a href="{{ asset('storage/brochure/Collette-ReportPack-sample.pdf') }}">Owner management report for a multi-unit rental building</a></li>
                            <li><a href="{{ asset('storage/brochure/Burlington-sample-PTB-Dec-2015.pdf') }}">Building performance to budget report </a></li>
                        </ul>
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
