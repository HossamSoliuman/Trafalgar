@extends('layouts.front')

@section('content')
    
    <div class="breadcrumbs">
      <div class="container">
          <ul></ul>
      </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section rent_page_content mt-2">
        <div class="container">
           
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="heading"></div>
                    <div class="each_manage_section text-center">
                         <h4><a href="javascript:void(0)">The Summit – Thank You</a></h4>
                        <h5 style="line-height: normal;">Thank you for your enquiry in regard to the apartments at The Summit. One of our agents will contact you shortly.</h5>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="sidelist contact_sidelist">
                        <h4>Quick Contact</h4>
                          <form action="{{ route('quick-contact') }}" method="post">
                            @csrf                 
                            <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                    <label for="name">Name<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter name" required="" id="name" name="name">
                                  </div>
                              </div>
                              <div class="col-6 pr-2">
                                  <div class="form-group ">
                                     <label for="email">Email<span>*</span></label>
                                     <input type="email" class="form-control" placeholder="Enter email" required="" id="email" name="email">
                                  </div>
                              </div>
                              <div class="col-6 pl-2">
                                  <div class="form-group">
                                     <label for="phone">Phone<span>*</span></label>
                                     <input type="text" required="" class="form-control" placeholder="Enter phone" id="phone" name="phone">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                   <label for="message">Message<span>*</span></label>
                                    <textarea id="message" required="" class="form-control" name="message" placeholder="Enter message" rows="4" style="width:100%;"></textarea>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <button type="submit" class="form-control">Send message</button>
                              </div>
                           
                            </div>
                        </form>
                    </div>
                    <div class="sidelist">
                        <h4>Quick Links Menu</h4>
                        <ul>
                            <li><a href="#">NEWSLETTER SIGNUP</a></li>
                            <li><a href="#">OUR BLOG</a></li>
                            <li><a href="{{ route('email-property-alert') }">EMAIL PROPERTY ALERT</a></li>
                            <li><a href="#">BRANCH LOCATOR</a></li>
                            <li><a href="#">PROPERTY PORTALS</a></li>
                        </ul>
                    </div>
                     <div class="sidelist sociallinks_list">
                        <h4>Social Links</h4>
                        <ul>
                            <li><a href="<?php if($setting->facebook_link){ echo $setting->facebook_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/facebook.svg') }}" alt="facebook" /></a></li>
                            <li><a href="<?php if($setting->twitter_link){ echo $setting->twitter_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/twitter.svg') }}" alt="twitter" /></a></li>
                            <li><a href="<?php if($setting->youtube_link){ echo $setting->youtube_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/youtube.svg') }}" alt="youtube" /></a></li>
                            <li><a href="<?php if($setting->linkedin_link){ echo $setting->linkedin_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/linkedin.svg') }}" alt="linkedin" /></a></li>
                            <li><a href="<?php if($setting->instagram_link){ echo $setting->instagram_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/instagram.svg') }}" alt="instagram" /></a></li>
                        </ul>
                    </div>
                    <div class="sidelist contact_sidelist">
                        <h4>Newsletter Signup</h4>
                         <form action="{{ route('subscriber-newsletter') }}" method="post">
                           @csrf                           
                            <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required id="letter_name" name="letter_name">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email" required id="letter_email" name="letter_email">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <button type="submit" class="form-control">Submit</button>
                              </div>
                            </div>
                        </form>
                    </div>
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
