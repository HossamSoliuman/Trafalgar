
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','commercialreports')->first(); @endphp

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
              <li><a href="#">Body Corporate, HOA And Share Block Loans</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                         <h4><a href="javascript:void(0)">COMMERCIAL REPORTS</a></h4>
                        <p>Linked below are the standard report templates applicable to retail, commercial and industrial properties managed by Trafalgar. The reports are emailed on a monthly basis and also available online. The reports provide a detailed and comprehensive breakdown of all charges and recoveries raised, prior month payments and for property owners all creditor payments also reflected in a performance to budget and variance report. An assigned portfolio manager serves as a single point of contact and service delivery for any queries or additional information requirements arising from the monthly management reporting.</p>
                        <p>Finance in action – Have a look at a few of our case studies:</p>
                        <ul class="pdfs">
                           <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/02/COMMERCIAL-TENANT-INVOICE-EXAMPLE.pdf" target="_blank" rel="noopener noreferrer">Tenant Invoice</a></li>
                           <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/02/DEVONSHIRE-AVENUE-COMMERCIAL-REPORT-PACK.pdf" target="_blank" rel="noopener noreferrer">Devonshire Avenue – Commercial Report Pack Example</a></li>
                           <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2016/12/291F-6-INGOING-INSPECTION.pdf">Inspection Report</a></li>
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
