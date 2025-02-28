
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management.financial-management')->first(); @endphp

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
              <li><a href="#">Financial Management</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Financial Management</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>Financial management and reporting as a standalone service is a service option available to sectional tile and home owners association complexes. Specialised systems and economies of scale position Trafalgar to offer significant savings when compared to employing a dedicated on-site administration team. Legal compliance and adequate segregation of duties to achieve sound financial controls are further risks for properties employing their own administration team.</p>
                        <p>Trafalgar’s financial management service includes billing, statement distribution, collections, debt collection, creditor payments, management reporting, payroll administration, statutory reporting and annual audit file preparation. All financial management reports are also available online and sample reports can be viewed on the Property Portal page demonstration building.</p>
                        <p>Our services include:</p>
                        <ul>
                            <li>Monthly levy billing and statement distribution supported by progressive credit control procedures</li>
                            <li>Payment of and accounting for approved expenses, including salaries and wages</li>
                            <li>Surplus funds invested in call accounts to maximise interest earnings</li>
                            <li>Monthly financial reporting including surplus report, balance sheet, income statement with performance to budget review, levy roll, unit arrears and credit control reports</li>
                            <li>Completion and submission of statutory returns</li>
                            <li>Preparation of annual estimate of income and expenditure</li>
                            <li>Annual audit preparation</li>
                        </ul>
                        <p>For further information or to arrange a free site assessment and estate management proposal, please contact Andrew Schaefer on <a href="mailto:andrews@trafalgar.co.za">andrews@trafalgar.co.za</a>or 011 214 5200</p>
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
