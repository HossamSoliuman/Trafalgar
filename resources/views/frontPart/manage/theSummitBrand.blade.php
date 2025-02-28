@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','the-summit-brand-new-apartments-to-rent-in-amanzimtoti')->first(); @endphp
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
               <h1>The Summit – Brand New Apartments To Rent In Amanzimtoti</h1>
            </div>
            <div class="slider_bg mb-4">
                <div id="sync1" class="owl-carousel">
                        <div class="item"><img class="img-fluid" src="{{ asset('front/images/The-Summit-1.jpg') }}" alt="{{ asset('front/images/The-Summit-1.jpg') }}" /></div>
                        <div class="item"><img class="img-fluid" src="{{ asset('front/images/The-Summit-2.jpg') }}" alt="{{ asset('front/images/The-Summit-2.jpg') }}" /></div>
                        <div class="item"><img class="img-fluid" src="{{ asset('front/images/The-Summit-3.jpg') }}" alt="{{ asset('front/images/The-Summit-3.jpg') }}" /></div>
                        <div class="item"><img class="img-fluid" src="{{ asset('front/images/The-Summit-4.jpg') }}" alt="{{ asset('front/images/The-Summit-4.jpg') }}" /></div>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <b>SPECIAL OFFER</b>
                        <ul>
                            <li>SIGN A 12 MONTH LEASE AGREEMENT</li>
                            <li>AT R8,995 FOR THE FIRST SIX MONTHS</li>
                            <li>AND R9,500 FOR THE LAST SIX MONTHS.</li>
                        </ul>
                        <p>Exclusive brand new fully tiled 3 bedroom, 2 bathroom apartments available to rent at The Summit: 12 Prince Street, Athlone Park, Amanzimtoti.</p>
                        <p>These units boast a spacious fabulous kitchen fitted with the newest modern built-in cupboards, under counter oven and glass tops. </p>
                        <p>The kitchen has also been plumbed for an under counter washing machine or dishwasher. Open plan lounge and dining room. Spacious bedrooms with built-in cupboards. The main bedroom has a walk-in closet and an en-suite modern bathroom with stylish bath and shower.</p>
                        <p>The unit also includes a large storage cupboard for your linen. The ground floor units have their own private patios and the higher units have large private balconies. Undercover and open parking bays available.</p>
                        <p>The complex is just a stone’s throw away from the Beach. Magnificent sea views. Close to Galleria Mall, good schools and Kingsway Hospital.</p>
                        <p>Electricity is on a prepaid system.</p>
                    </div>
                    <div class="contact_section p-0">
                        <div class="maintenance_form_view m-0">
                            <div class="management_form">
                                <small>Please Complete The Form Below For Further Information:</small>
                                <form action="{{ route('theSummitBrandForm') }}" method="post">
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
