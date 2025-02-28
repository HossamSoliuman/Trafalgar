@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','jozicbdrentals')->first(); @endphp
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

    <section class="guldenland_section rent_page_content  mt-2">
        <div class="container">
            <div class="heading h1_tag mb-4">
               <h1>Jozi CBD Rentals</h1>
            </div>
            <div class="slider_bg mb-4">
                <div id="sync1" class="owl-carousel">
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/glencairn-jozi-cbd-2.jpg') }}" alt="{{ asset('front/images/glencairn-jozi-cbd-2.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/glencairn-jozi-cbd-1.jpg') }}" alt="{{ asset('front/images/glencairn-jozi-cbd-1.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/jozi-cbd-rental-1.jpg') }}" alt="{{ asset('front/images/jozi-cbd-rental-1.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/jozi-cbd-rental-2.jpg') }}" alt="{{ asset('front/images/jozi-cbd-rental-2.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/jozi-cbd-rental-3.jpg') }}" alt="{{ asset('front/images/jozi-cbd-rental-3.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/jozi-cbd-rental-4.jpg') }}" alt="{{ asset('front/images/jozi-cbd-rental-4.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/jozi-cbd-rental-5.jpg') }}" alt="{{ asset('front/images/jozi-cbd-rental-5.jpg') }}" /></div>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <p>These residential rental buildings are ideally situated in the heart of the CBD of Johannesburg (Jozi) and the Randburg CBD. They are in close walking distance to a host of major employers, retailers, entertainment amenities and public transport stops. Offering a wide selection of bachelor, 1 and 2 bedroom flats and apartments to rent, some of the buildings have biometric access control, CCTV and 24 x 7 security, with fully functioning lifts, secure parking and a resident building manager or caretaker on-site for maintenance and support. We have units that will suit students, young professionals or working couples wanting to live within the heart of Johannesburg, nearby extensive work opportunities well covered by public transport and necessary amenities. Come and have a look – fill in your details in the form below and one of our experienced letting team members will be in contact to arrange a viewing. Rentals are available from R4,200 per month.</p>
                    </div>
                    <div class="contact_section p-0">
                        <div class="maintenance_form_view m-0">
                            <div class="management_form">
                                <small>Please Complete The Form Below For Further Information And To Book A Viewing:</small>
                                <form action="{{ route('jozicbdrentalsform') }}" method="post">
                                    @csrf
                                   
                                    <div class="maintenance_form_inner">
                                        <span></span>
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label for="name">First Name<span>*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname">Surname<span>*</span></label>
                                                <input type="text" class="form-control" id="surname" name="surname" required="">
                                            </div>
                                        </div>
                                        <span></span>
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label for="email">Email:<span>*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:<span>*</span></label>
                                                <input type="number" class="form-control" id="phone" name="phone" required="">
                                            </div>
                                        </div>
                                        <div class="field_row">
                                            <div class="form-group">
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
                                            <div class="form-group">
                                                <label for="time_to_call">Preferred time to contact<span>*</span></label>
                                                <input type="text" class="form-control" id="time_to_call" name="time_to_call" required="">
                                            </div>
                                        </div>
                                        <div class="field_row">
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
     
                    @include('frontPart/propertySearchSection1')
    
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.766653686576!2d28.054960573302722!3d-26.204268013292523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950f1c2cabf7c7%3A0x1b4f0366766eaf51!2sJohannesburg%20Cbd!5e0!3m2!1sen!2sin!4v1702471679489!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
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

@push('home-page-search-js')
@include('frontPart.js.homePageSearchJs')
@endpush

