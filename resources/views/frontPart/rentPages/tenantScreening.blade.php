@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent.tenant-screening')->first(); @endphp
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
              <li><a href="#">Tenant Screening</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section rent_page_content  mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Tenant Screening</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>For a great tenant, look no further than Trafalgar.  For a tenant wishing to rent a home, Trafalgar Home Letting through our large nationwide database has a portfolio of rental properties to suit all budgets and tastes.  From flats and apartments, to townhouses and freestanding homes, our team of professionals will make the process of finding and moving into a new home as convenient, efficient and comfortable as possible.</p>
                        <p>Our letting agents will be delighted to arrange a viewing of any properties which are of interest to you.  Make a list of your requirements before viewing a prospective home and record the criteria which each home meets against your list.  Take the time to explore the surrounding area and see what amenities are close to your preferred choice.  Ask our Letting Agent to give you a full breakdown of the monthly rental, including all services, as well as the lease costs for signing the lease and deposit required.</p>
                        <p>When you have chosen a home to rent, you will need to fill in an “Application to Rent” form which you can obtain from a letting consultant or from our website.  The application to rent requires you to fill in your name, address, ID number, employer’s details and the name and contact details of two referees and a previous landlord, as examples of the information required.  You will also be required to provide documentation in order to be FICA compliant which include but are not limited to copies of your ID, 3 months’ bank statements and your most recent salary advice.  The completed documentation will be used to formally assess your application and your credit worthiness for leasing the property you have selected.  A credit check as well as feedback from your referees will be obtained as part of the application assessment, and by signing the application form you will be agreeing to the credit history enquiry.</p>
                        <p>A deposit is necessary to protect the landlords investment and as security to cover any damages caused, or default, during the lease term.  Trafalgar is registered with the Estate Agency Affairs Board and we operate a trust account in terms of the Estate Agency Affairs Act.  This account is audited annually.  When you vacate your home, and if there are no deductions for damages or repairs in the unit, your deposit will be refunded to you including interest accrued at any interest rate equivalent to Standard Bank’s savings account rate.</p>
                        <p>Please <a href="{{ route('contact-us') }}">contact us</a> if you have any queries, it will be our pleasure to assist you to find a home that matches your budget and requirements.</p>
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
