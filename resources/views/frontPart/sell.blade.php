@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','sell')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section manage_top_banner">
        <div class="jobbanner-text">
            <h1>Sell Your Home</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="guldenland_section rent_page_content mt-5">
        <div class="container">
            <div class="rent_page_content mb-4">
                <div class="manage-paragraph text-justify">
                    <div class="rent_img">
                        <img class="bannerimg img-fluid" src="{{ asset('front/images/sell.jpg') }}" alt="{{ asset('front/images/sell.jpg') }}" />
                    </div>
                    <div class="rent_content d-flex flex-column justify-content-center">
                        <h4 class="mb-4">Expert sales agents ready and eager to assist with the valuation and selling of your property</h4>
                        <p>You’ve trusted Trafalgar to manage your property effectively, legally compliantly and professionally; we will handle the sale of your property in the very same way. Selling a property is a big decision. Allow us the privilege of walking you through the process with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="training_videos">
            <div class="container">
                <p>As experienced property practitioners, Trafalgar sales agents understand that your property is your biggest asset. We also understand the emotional connections deeply invested in a home. It’s the four walls you have felt safe in and where you have created unforgettable memories. Or, it’s the property that has generated an income for you for the longest time.</p>
                <p>But, there comes a time when you have to make a decision—for various reasons—to move on, and that means parting with a property you are financially invested in. Whether you are looking to downscale, upscale, change your lifestyle, or move somewhere else, you can be assured of our best service in the sale of your property.</p>
                <p>For many years, Trafalgar’s core business has been managing property portfolios. As a result, our sales agents are some of the most experienced property practitioners in South Africa. We understand property to be more than just an investment; we understand the very workings of your property. The Trafalgar team are a well-oiled machine, working together to benefit every owner in all spheres of property—from management to sales. It’s for this very reason that your managing agent is your best choice as your sales agent.</p>
                <a class="theme-btn d-inline-block h-auto mt-3" href="/contact-us">CONTACT US NOW</a>
            </div>
        </div>
        <div class="container">
            <div class="property-solution online_services_view mb-4">
                <div class="container">
                    <h3 class="text-center">Why you should consider Trafalgar to advise you with selling your property:</h3>
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution justify-content-start">
                            <div class="eachimg mb-4">
                                <img class="img-fluid" src="{{ asset('front/images/hoa-management.svg') }}" alt="hoa-management.svg" />
                            </div>
                            <p>Trafalgar has over fifty years of experience managing, insuring and letting residential properties across South Africa. Our sales agents are consequently very experienced with all aspects of valuing, selling and transferring properties</p>
                        </div>
                        <div class="each-property-solution justify-content-start">
                            <div class="eachimg mb-4">
                                <img src="{{ asset('front/images/commercial.svg') }}" alt="commercial.svg" />
                            </div>
                            <p>Trafalgar has well established offices across the major South African cities</p>
                        </div>
                        <div class="each-property-solution justify-content-start">
                            <div class="eachimg mb-4">
                                <img src="{{ asset('front/images/estate-management.svg') }}" alt="estate-management.svg">
                            </div>
                            <p>Trafalgar currently works with many property investors, who represent immediate buyer opportunities for matching to sale mandates</p>
                        </div>
                        <div class="each-property-solution justify-content-start">
                            <div class="eachimg mb-4">
                                <img src="{{ asset('front/images/owners.svg') }}" alt="owners.svg">
                            </div>
                            <p>Trafalgar’s sales agents have specialist expertise with sectional title and HOA properties, linked to Trafalgar’s core property management experience. When it comes to levies, conduct rules, sectional title legalities and other community scheme topics Trafalgar has all the practical knowledge to guide and advise both buyers and sellers.</p>
                        </div>
                        <div class="each-property-solution justify-content-start">
                            <div class="eachimg mb-4">
                                <img src="{{ asset('front/images/online.svg') }}" alt="online.svg">
                            </div>
                            <p>Established panels of bond originators and service providers to arrange the necessary compliance certificates guarantee a convenient and time efficient transfer process</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="e-magazine evaluation section-padding" id="e-magazine">
            <div class="evaluation-content">
                <div class="each-magazine">
                    <div class="icon-div">
                        <img src="{{ asset('front/images/valuation.png') }}" alt="valuation">
                    </div>
                    <div class="magazine-content">
                        <h4>Free Evaluation</h4>
                        <p>Request a free property Evaluation from one of our real <br/> estate agents to find out what your property is worth.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section text-center" id="contactUsDiv" >
                        <h4><a href="javascript:void(0)">Get a Free Evaluation</a></h4>
                    </div>
                    <div class="contact_section p-0">
                        <div class="maintenance_form_view m-0">
                            <div class="management_form">
                            <small>Please complete the form below to contact us</small>
                           <form method="post" action="{{ route('sell-contact-mail') }}" >
                               @csrf
                                <div class="maintenance_form_inner">
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="name">Name<span>*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="email">Email:<span>*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number:<span>*</span></label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="city">City:<span>*</span></label>
                                            <input type="text" class="form-control" id="city" name="city" required>
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label>Preferred method of contact<span>*</span></label>
                                            <div class="radio-group">
                                                <span>
                                                    <input checked type="radio" id="p_phone" name="method_of_contact" value="phone" >
                                                    <label for="p_phone">Phone</label>
                                                </span>
                                                <span>
                                                    <input type="radio" value="email" id="p_email" name="method_of_contact" >
                                                    <label for="p_email">Email</label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="time_to_call">Preferred time to be called</label>
                                            <input type="text" class="form-control" id="time_to_call" name="time_to_call" >
                                        </div>
                                    </div>
                                    <div class="field_row row d-flex">
                                        <div class="form-group col-sm-6">
                                            <label for="property_type">Property type </label>
                                             <select class="custom-select" id="property_type">
                                                <option selected>Select</option>
                                                <option value="Apartment">Apartment</option>
                                                <option value="2">House</option>
                                                <option value="House">Townhouse</option>
                                                <option value="Vacant Land">Vacant Land</option>
                                                <option value="Retirement Village">Retirement Village</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Physical address of property<span>*</span></label>
                                            <input type="text" class="form-control" id="property_address" name="property_address" >
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="comment_or_question">Comments or Questions</label>
                                            <textarea  class="form-control" id="comment_or_question" rows="3" name="comment_or_question"></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>  
                                <button type="submit" class="m-0 form-control">Send message</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="sidelist">
                        <h4>Registration certificates for Trafalgar Financial Services (Pty) Ltd</h4>
                        <ul>
                            <li><a href="#">Financial Services Board</a></li>
                            <li><a href="#">Registered Credit Provider</a></li>
                            <li><a href="#">FIA Membership Certificate</a></li>
                        </ul>
                    </div>
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
