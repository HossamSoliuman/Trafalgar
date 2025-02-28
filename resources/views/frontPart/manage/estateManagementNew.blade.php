
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management.estate-management')->first(); @endphp

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
              <li><a href="#">Estate Management</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Estate Management</h1>
                 <div class="manage-paragraph text-justify">
                    <p>Trafalgar offers a range of estate management services suitable for medium and large residential estates across South Africa. An on-site estate manager goes a long way to promote facility management excellence, client service and a well managed estate. Trafalgar has an existing team of experienced and fully trained estate managers who are immediately available to deploy to oversee one or more of the service elements listed below. For smaller estates, part-time estate managers are available to tailor capacity and costs according to affordability and budgetary parameters. All estate management services can be tailored to specific property requirements and challenges.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <ul>
                            <li>Establishment of an estate management office for on- site service delivery to residents</li>
                            <li>Management of architectural guidelines</li>
                            <li>Building site inspections</li>
                            <li>Enforcement of rules</li>
                            <li>Management of cleaners, gardeners, access controllers, security and maintenance personnel</li>
                            <li>Director meeting attendance, minuting and administration</li>
                            <li>Annual budget and levy schedule formulation</li>
                            <li>Maintenance plan and budget formulation including maintenance project management</li>
                            <li>Direct day-to-day maintenance of the common property including collection of materials and consumables</li>
                            <li>Sourcing of maintenance quotes</li>
                            <li>Payroll administration</li>
                            <li>Oversee Trafalgar’s property management service delivery: levy statement distribution, billing, debt collection, financial management and reporting, audit file preparation, tax and statutory returns and AGM facilitation</li>
                        </ul>
                        <p>Financial management as a standalone service is also an option for estates which prefer to employ and manage an estate manager directly. Specialised systems and economies of scale position Trafalgar to offer significant savings to residential estates where employing a dedicated on-site administration team is very often not cost effective. Trafalgar’s financial management service includes billing, statement distribution, collections, debt collection, creditor payments, management reporting, payroll administration, statutory reporting and annual audit file preparation. All financial management reports are also available online.</p>
                        <p>Trafalgar currently provides estate management services to the following well known residential, and golf, estates:</p>
                        <p>Gauteng: Waterfall Country Village; Waterfall Estate; The Hills; Savannah Country Estate; Crescentwood; Helderfontein; Cedar Creek; Blue Hills</p>
                        <p>KZN: Selborne Golf Estate</p>
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
