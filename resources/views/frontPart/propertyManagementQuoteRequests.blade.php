@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','online-services.online-applications.property-management-quote-request')->first(); @endphp
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
              <li><a href="#">Property Management Quote Request</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Property Management Quote Request</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing">
                    <div class="maintenance_form_view">
                        <div class="management_form">
                            <form action="{{ route('property-quote-request-email') }}" method="post" id="property-quote-request-email">
                                @csrf
                                <div class="maintenance_form_inner">
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="name">Name<span>*</span></label>
                                            <input type="text" class="form-control" id="name" name="name">
                                             @error('name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="surname">Surname:<span>*</span></label>
                                            <input type="text" class="form-control" id="surname" name="surname">
                                            
                                             @error('surname')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label>Designation:<span>*</span></label>
                                            <div class="radio-group">
                                              <span>
                                                <input type="radio" id="chairman" value="chairman" name="designation" checked="">
                                                <label for="chairman">Complex Chairman</label>
                                              </span>
                                              
                                              <span>
                                                <input type="radio" id="director" value="Trustee or Director" name="designation">
                                                <label for="director">Trustee or Director</label>
                                              </span>
                                              
                                              
                                              <span>
                                                <input value="owner" value="tenant" type="radio" id="owner" name="designation">
                                                <label for="owner">Owner</label>
                                              </span>
                                              
                                              <span>
                                                <input type="radio" value="tenant" id="tenant" name="designation">
                                                <label for="tenant">Tenant</label>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="name_of_scheme">Name of Scheme:<span>*</span></label>
                                            <input type="text" name="name_of_scheme" class="form-control" id="name_of_scheme">
                                            
                                             @error('name_of_scheme')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="name_of_units">Name of Units:<span>*</span></label>
                                            <input type="text" name="name_of_units" class="form-control" id="name_of_units">
                                             @error('name_of_units')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="property_address">Property Address:<span>*</span></label>
                                            <input type="text" class="form-control" id="property_address" name="property_address">
                                             @error('property_address')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="property_suburb">Property Suburb:<span>*</span></label>
                                            <input name="property_suburb" type="text" class="form-control" id="property_suburb">
                                             @error('property_suburb')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="property_city">Property City:<span>*</span></label>
                                            <input type="text" class="form-control" name="property_city" id="property_city">
                                             @error('property_city')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:<span>*</span></label>
                                            <input type="email" name="email" class="form-control" id="email">
                                            
                                             @error('email')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="cellphone">Cellphone:<span>*</span></label>
                                            <input type="number" class="form-control" name="cellphone" id="cellphone">
                                             @error('cellphone')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="levy_arrears">Approximate Levy Arrears:<span>*</span></label>
                                            <input type="text" class="form-control" name="levy_arrears" id="levy_arrears">
                                             @error('levy_arrears')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="when_scheme_built">When was your scheme built:<span>*</span></label>
                                            <input type="text" class="form-control" name="when_scheme_built" id="when_scheme_built">
                                             @error('when_scheme_built')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="why_new_agent">Why are you looking for a new managing agent:<span>*</span></label>
                                            <input type="text" class="form-control" id="why_new_agent" name="why_new_agent">
                                             @error('why_new_agent')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="levy-arrears">Do you have any outstanding Annual General Meetings and audited financial statements:<span>*</span></label>
                                            <div class="radio-group">
                                              <span>
                                                <input type="radio" id="yes_statement" name="audited_statement" checked="" value="yes">
                                                <label for="yes_statement">Yes</label>
                                              </span>
                                              <span>
                                                <input type="radio" id="no_statement" value="no" name="audited_statement">
                                                
                                                <label for="no_statement">No</label>
                                              </span>
                                            </div>
                                        </div>
                                    </div>  
                                    <button type="submit" class="form-control">Send</button>
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

    <!-- page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
