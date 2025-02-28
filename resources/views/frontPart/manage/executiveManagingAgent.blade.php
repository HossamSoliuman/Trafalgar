
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.executive-managing-agent')->first(); @endphp

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
              <li><a href="#">Executive Managing Agent</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Executive Managing Agent</h1>
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar is equipped to provide an executive managing agent service as envisaged in the legislative clause copied below, promulgated on the 7th October 2016. This service covers the role of Trustees where time, capacity and location for traditional Trustee involvement at the body corporate, are challenges. As stipulated, Trafalgar will cover both the role of managing agent and the board of Trustees, circulating to all owners on a quarterly basis, a full management report and newsletter, explaining the financial and facility management performance of the building together with relevant planning ahead. The overriding objectives for the executive managing agent service will be good governance, legislative compliance, facility management effectiveness and sound maintenance planning to add value to the building and individual sections over the long term.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="manage-paragraph paragraph-listing">
                        <p><b>Sectional Title Schemes Management Act – Annexure 1 Prescribed Management Rules:</b></p>
                        <ul>
                            <li><b>28. (1)</b> The body corporate may, by special resolution, appoint an executive managing agent to perform the functions and exercise the powers that would otherwise be performed and exercised by the trustees.</li>
                            <li><b>(2)</b> Members entitled to 25 per cent of the total quotas of all sections may apply to the Community Scheme Ombud Service for the appointment of an executive managing agent.</li>
                            <li class="d-block"><b>(3)</b> An executive managing agent —
                                <ul class="pl-3 pt-1">
                                    <li><b>(a)</b> is subject to all the duties and obligations of a trustee under the Act and the rules of the scheme;</li>
                                    <li><b>(b)</b> is obliged to manage the scheme with the required professional level of skill and care;</li>
                                    <li><b>(c)</b> is liable for any loss suffered by the body corporate as a result of not applying such skill and care;</li>
                                    <li><b>(d)</b> has a fiduciary obligation to every member of the body corporate;</li>
                                    <li><b>(e)</b> must arrange for the inspection of the common property at least every six months; and</li>
                                    <li><b>(f)</b> must report at least every four months to every member of the body corporate on the administration of the scheme.</li>
                                </ul>
                            </li>
                            <li class="d-block"><b>(4)</b> The reports of an executive managing agent referred to in sub-rule (3)(0 must include at least the following details —
                                <ul class="pl-3 pt-1">
                                    <li><b>(a)</b> proposed repairs to and maintenance of the common property and assets of the body corporate within the next four months;</li>
                                    <li><b>(b)</b> matters the executive managing agent considers relevant to the condition of the common property and the assets of the body corporate;</li>
                                    <li><b>(c)</b> the balance of each of the administrative and reserve funds of the body corporate on the date of the report and a reconciliation statement for each fund; and</li>
                                    <li class="d-block"><b>(d)</b> for the period since the appointment of the executive managing agent or from the date of the last report —
                                        <ul class="pl-3 pt-1">
                                            <li><b>(1)</b> the expenses of the body corporate, including repair, maintenance and replacement costs; and</li>
                                            <li><b>(2)</b> a brief description of the date and nature of all decisions made by the executive managing agent.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p>For any questions or a quotation for an Executive Managing Agent for your body corporate, please contact Andrew Schaefer on andrews@trafalgar.co.za or 083 399 9907.</p>
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
