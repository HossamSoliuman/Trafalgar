@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','contractors')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">CONTRACTORS</a></h4>
                        <div class="more-content" >
                            <p>Should you be interested in applying with Trafalgar to be added to a preferred maintenance contractor’s list, please would you complete the details outlined in the short questionnaire below. This information will enable us to refer the details to a relevant regional maintenance manager, who will evaluate the details considering also workload volumes and the current preferred contractor capacity and performance in place. (e.g. if there is no demand for additional preferred contractors in a particular maintenance category concerning workload volumes, we may add your enquiry to a waiting list.) Should it be deemed relevant, you will be contacted for an introductory meeting to discuss your enquiry further and to obtain details of reference sites to complete the application review. Thanks once again for your enquiry and interest.</p>
                        </div>
                    </div>
                    <div class="maintenance_form_view m-0">
                        <div class="management_form">
                        <small>Please complete the following details for us to refer the details to a relevant regional maintenance administrator to arrange to meet with you where relevant:</small>
                        <form action="{{ route('applyContractor') }}" method="post" enctype="multipart/form-data" >
                            <div class="maintenance_form_inner">
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="business_name">Business Name :<span>*</span></label>
                                        <input type="text" class="form-control" id="business_name" name="business_name" required>
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="business_address">Business Address:<span>*</span></label>
                                        <input type="text" class="form-control" id="business_address" name="business_address" required >
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="business_website">Business Website:</label>
                                        <input type="text" class="form-control" id="business_website" name="business_website" required >
                                    </div>
                                </div>
                                 <div class="field_row">
                                    <div class="form-group">
                                        <label for="business_profile_brochure">Business Profile Brochure :</label>
                                        <input type="file" class="form-control" id="business_profile_brochure" name="business_profile_brochure" required >
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="telephone">Telephone :<span>*</span></label>
                                        <input type="number" class="form-control" id="telephone" name="telephone" required>
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="contact_person_name">Contact Person Name :<span>*</span></label>
                                        <input type="text" class="form-control" id="contact_person_name" name="contact_person_name" required>
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="contact_person_cell">Contact Person Cell :<span>*</span></label>
                                        <input type="text" class="form-control" id="contact_person_cell" name="contact_person_cell" required>
                                    </div>
                                </div>
                                  <div class="field_row">
                                    <div class="form-group">
                                        <label for="contact_person_email">Contact Person Email :<span>*</span></label>
                                        <input type="text" class="form-control" id="contact_person_email" name="contact_person_email" required>
                                    </div>
                                </div>
                                  <div class="field_row">
                                    <div class="form-group">
                                        <label for="maintenance_services_offered">Maintenance Services Offered :<span>*</span></label>
                                        <input type="text" class="form-control" id="maintenance_services_offered" name="maintenance_services_offered" required>
                                    </div>
                                </div>
                                  <div class="field_row">
                                    <div class="form-group">
                                        <label for="areas_covered_province">Areas Covered: Province :<span>*</span></label>
                                        <input type="text" class="form-control" id="areas_covered_province" name="areas_covered_province" required>
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="areas_covered_suburbs">Areas Covered: Suburbs :</label>
                                         <input type="text" class="form-control" id="areas_covered_suburbs" name="areas_covered_suburbs" required>
                                     
                                    </div>
                                </div>
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="accreditations">Accreditations :</label>
                                        <textarea  class="form-control" id="accreditations" rows="3" name="accreditations"></textarea>
                                    </div>
                                </div>
                                @csrf
                                <button type="submit" class="m-0 form-control">Send message</button>
                            </div>
                        </form>
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
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
