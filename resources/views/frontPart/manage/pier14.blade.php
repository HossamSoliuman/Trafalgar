@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','pier-14-brand-new-apartments-to-rent-in-north-end-port-elizabeth')->first(); @endphp
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
               <h1>Pier 14 – Brand New Apartments To Rent In North End, Port Elizabeth</h1>
            </div>
            <div class="slider_bg mb-4">
                <div id="sync1" class="owl-carousel">
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Blanc-De-Noir-2.jpg') }}" alt="{{ asset('front/images/Blanc-De-Noir-2.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Cabernet-4.jpg') }}" alt="{{ asset('front/images/Cabernet-4.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Cabernet-8.jpg') }}" alt="{{ asset('front/images/Cabernet-8.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Cindy-Court-1.jpg') }}" alt="{{ asset('front/images/Cindy-Court-1.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Kayla-Court-4.jpg') }}" alt="{{ asset('front/images/Kayla-Court-4.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Riesling-1.jpg') }}" alt="{{ asset('front/images/Riesling-1.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/The-Flowers-1.jpg') }}" alt="{{ asset('front/images/The-Flowers-1.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/The-Flowers-6.jpg') }}" alt="{{ asset('front/images/The-Flowers-6.jpg') }}" /></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('front/images/Becca-Villas-1.jpg') }}" alt="{{ asset('front/images/Becca-Villas-1.jpg') }}" /></div>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                    	<iframe width="100%" height="400" src="https://www.youtube.com/embed/3ssdFAnw7ig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>Thank you for your interest in Pier 14 and the apartments to rent in North End, Port Elizabeth. These newly renovated bachelor apartments are available to rent from R2,950 above the famous Pier 14 Shopping Centre.</p>
                        <p>This property is a 4-story, high-rise apartment building conveniently located in the heart of downtown Port Elizabeth. Convenient access to major highways, Post Office, Port Elizabeth Airport, restaurants, shopping, major sporting events, theatres, parks, bus routes, nightlife and so much more adds to the appeal of this building.</p>
                        <p>Incredible views from high-level units overlooking the harbour with crashing white crested waves sweeping up the sandy beach. These apartments boast new kitchen cabinets, fully tiled floors, bathroom with shower only and bedrooms with newly built-in cupboards.</p>
                        <p>With security being a key rental factor, a bio-metric fingerprint access system, CCTV security cameras and a 24-hour security gate at the premises add further value.</p>
                        <p>Rentals do not include water usage, prepaid electricity and parking.</p>
                        <p>Be the first to rent these brand new apartments and fill in your details in the form below!</p>
                    </div>
                    <div class="contact_section p-0">
                        <div class="maintenance_form_view m-0">
                            <div class="management_form">
                                <small>Please Complete The Form Below For Further Information:</small>
                                <form action="{{ route('pier14form') }}" method="post">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6354048.188095173!2d35.174414!3d38.95682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2str!4v1651643088270!5m2!1sen!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
