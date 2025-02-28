@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent.tenant-services')->first(); @endphp
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
              <li><a href="{{ route('rent') }}">Rent</a></li>
              <li><a href="#">Tenant Services</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section rent_page_content  mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Tenant Services</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>Welcome to your new home. Trafalgar has the intention of making your experience of renting a home a happy one. It is imperative that you have a clear understanding of both your rights and responsibilities as a tenant and those of the landlord.</p>
                        <p>After your application has been favourably assessed, the next step will be to sign for the home you have chosen to rent. The letting agent involved will prepare and explain the lease document to you in detail. Please take the time to read the lease and understand all the provisions contained in the document.   Important issues to focus on are rules of the property concerned; i.e. allowances for pets, maintenance, the charges which you are required to pay and the lease terms and escalation clauses. Your Lease agreement is legally binding and totally compliant with the Rental Housing Act and Consumer Protection Act.  It has been drawn up to protect both the landlord and yourself.  The lease ensures that financial issues such as rental increases, deposit and damage claims are dealt with in a fair, transparent and professional manner. You will be given a copy of the signed lease agreement for your records and reference purposes.</p>
                        <p>When you occupy a property you have rented, a letting consultant or maintenance inspector will carry out an inspection with you to list any defects or damages the landlord may have to repair.  This list of defects will be attached to your Lease Agreement. Our maintenance inspector will ensure any snags are addressed as soon as possible after the inspection.</p>
                        <p>If the home you choose is in a Sectional Title complex, it is important that you are aware of the rules of the Body Corporate which you will be expected to observe.  A copy of the rules will be given to you by the letting consultant with your lease documentation.</p>
                        <p>After you have signed your lease and paid the lease fees, deposit and first month’s rental, you will be entitled to your new home.  Even though your new home has been inspected by our letting agent or maintenance inspector and yourself, please report anything which is missing or not working within 7 days of moving in.  The ingoing inspection will serve as the baseline against which the unit’s condition will be compared when you vacate and when the outgoing inspection is conducted.</p>
                        <p>We have longstanding relationships with professional companies with whom we can negotiate excellent prices. If at any time you have a problem with a maintenance item of any kind, please contact our maintenance department for assistance.  The relevant contact details will be shown on your monthly statement.  We endeavour to project manage maintenance issues as time effectively as possible. Your lease agreement will define who is responsible for the costs of the maintenance items concerned.</p>
                        <p>Payment of your rental is one of the most important issues to ensure a long term mutually beneficial relationship with your landlord.  Without your rental the landlord cannot meet his obligations: bond, levy, rates & taxes, insurance, service and administration charges, just to mention a few examples.</p>
                        <p>Rental is due monthly in advance of the 1st of each month. You will receive a monthly statement showing our bank details and clear payment instructions on the reverse side.  A Standard Bank deposit slip is also attached for your convenience and includes a pre-printed reference number.  Please remember to check that your reference number is captured correctly when making branch or internet deposits. Please make sure that your prior month payment is captured and reflected correctly on your monthly Trafalgar statement.</p>
                        <p>When you want to move out you must give written notice. Your lease stipulates the notice period or expiry date of the agreement. Please consult a letting agent for assistance if you are unsure of what notice period is required in terms of your lease.  Your rent must be up to date.  An outgoing inspection will be carried out to see if the unit is in the same condition as when you moved in. Any damages during your occupation and identified by comparing the “in” and “out” inspections will be repaired and paid for from your deposit at your expense.</p>
                        <p>Following you vacating the unit and he submission of proof that any account with the local authority for which you are responsible is settled to the date your occupancy terminates, we will commence he process of refunding your deposit. Your deposit will be refunded to you with interest providing there is no outstanding rental, nor any damages to the unit.</p>
                        <p>Your deposit will be refunded as follows:</p>
                        <ul>
                            <li>Within 7 working days provided there are no damages and you were present at the “outgoing” inspection.</li>
                            <li>Within 14 working days if there are damages and we need to obtain quotations, and again provided you are present at the “outgoing” inspection.</li>
                            <li>Within 21 working days if you are not present at the “outgoing” inspection.</li>
                        </ul>
                        <h5 class="text-center" style="color: #bfd630;">WE WISH YOU A PLEASANT STAY IN YOUR HOME AND LOOK FORWARD TO WORKING WITH YOU IN THE YEARS TO COME.</h5>
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
                              @php $route = Route::current()->getName(); @endphp
                                 
                                 @if($route == 'rent.tenant-services')
                                   <input type="hidden" required  name="pagename" value="tenant services contact form" >
                                 @endif
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
                            <li><a href="{{ route('email-property-alert') }}">EMAIL PROPERTY ALERT</a></li>
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
