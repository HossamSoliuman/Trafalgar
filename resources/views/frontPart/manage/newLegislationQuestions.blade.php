@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','newlegislation.new-legislation-questions')->first(); @endphp
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
              <li><a href="#">Newlegislation</a></li>
              <li><a href="#">New Legislation Questions</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section  mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
               <h1>New Legislation Questions</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <div class="contact_section p-0 mb-4">
                            <div class="maintenance_form_view m-0">
                                <div class="management_form m-0">
                                    <small>If you have any questions, please use the form shown below to submit your question for a detailed response. Thank you.</small>
                                    <form action="{{ route('newLegislationQuestionsForm') }}" method="post">
                                        @csrf
                                        <div class="maintenance_form_inner">
                                            <span></span>
                                            <div class="field_row">
                                                <div class="form-group m-0">
                                                    <label for="name">First Name<span>*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="surname">Surname<span>*</span></label>
                                                    <input type="text" class="form-control" id="surname" name="surname" required="">
                                                </div>
                                                 <div class="form-group m-0">
                                                    <label for="email">Email:<span>*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="phone">Phone:<span>*</span></label>
                                                    <input type="number" class="form-control" id="phone" name="phone" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="complex">Name of Complex:<span>*</span></label>
                                                    <input type="text" class="form-control" id="complex" name="complex" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="city">City:<span>*</span></label>
                                                    <input type="text" class="form-control" id="city" name="city" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label>Preferred method of contact<span>*</span></label>
                                                    <div class="radio-group">
                                                        <span>
                                                            <input type="radio" value="email" id="p_email" name="method_of_contact">
                                                            <label for="p_email">Email</label>
                                                        </span>
                                                        <span>
                                                            <input checked="" type="radio" id="p_phone" name="method_of_contact" value="phone">
                                                            <label for="p_phone">Cellphone</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="time_to_call">Preferred time to contact<span>*</span></label>
                                                    <input type="text" class="form-control" id="time_to_call" name="time_to_call" required="">
                                                </div>
                                            </div>
                                            <div class="field_row mt-3">
                                                <div class="form-group">
                                                    <label for="comment_or_question">Comments or Message</label>
                                                    <textarea class="form-control" id="comment_or_question" rows="3" name="comment_or_question"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="m-0 form-control">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
