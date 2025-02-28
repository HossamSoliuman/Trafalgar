@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','body-corporate-hoa-and-share-block-loans')->first(); @endphp
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
            <div class="heading h1_tag mb-4">
                <h1>Body Corporate, HOA And Share Block Loans</h1>
                 <div class="manage-paragraph text-justify">
                    <p>Typically speaking, bodies corporate, Home Owners Associations (HOA’s) and share block companies budget for, and accumulate, surpluses for large maintenance projects either in the ordinary budget or via special levy over term (which can be anywhere up to five years). Too often these monies are absorbed into the monthly operational costs of the body corporate / HOA or get diverted into alternate projects for which they were never (initially) intended. Further, the Act is quite restrictive in terms of where surplus monies can be invested (PMR41, PMR42 and PMR43) arguably heightening the opportunity cost of this method of fund accumulation (said legislation applicable to bodies corporate while the MOI of the HOA would govern same); sector inflation being unknown, and not reported on by STATS SA, also means that the project cost is, in essence, a moving target further complicating the process of raising monies for related maintenance or capital project(s).</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph">
                        <p><b>Trafalgar Financial Services</b> offers upfront finance for maintenance and capital projects on favourable terms tailor made to fit the cash flow constraints of the borrower (body corporate, HOA or share block company). More importantly, this allows for the immediate restoration or enhancement of value, on definite terms, removing any uncertainties involved with the process or project.</p>
                        <p>Finance in action – Have a look at a few of our case studies:</p>
                        <div class="pdf_list">
                            <a href="https://www.trafalgar.co.za/wp-content/uploads/2016/09/Elizabeth-Court.pdf" target="_blank"> <span class="icon-file-pdf-o mr-2"></span> Elizabeth Court</a>
                            <a href="https://www.trafalgar.co.za/wp-content/uploads/2016/09/Kingfisher-Close.pdf" target="_blank"> <span class="icon-file-pdf-o mr-2"></span> Kingfisher Close</a>
                            <a href="https://www.trafalgar.co.za/wp-content/uploads/2016/09/Meadowfields.pdf" target="_blank"> <span class="icon-file-pdf-o mr-2"></span> Meadowfields</a>
                            <a href="https://www.trafalgar.co.za/wp-content/uploads/2016/09/Rydal-Mount.pdf" target="_blank"> <span class="icon-file-pdf-o mr-2"></span> Rydal Mount</a>
                        </div>
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
