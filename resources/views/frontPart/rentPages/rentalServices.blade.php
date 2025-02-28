@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent.rental-services')->first(); @endphp
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
              <li><a href="#">Rental Services</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section rent_page_content mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
               <h1>Rental Services</h1>
            </div>
            <div class="manage-paragraph mb-5">
                <div class="rent_img">
                    <img class="bannerimg img-fluid mb-3" src="{{ asset('front/images/rent-img.png') }}" alt="rent"/>
                     <b>Trafalgar’s Residential Letting service consists of the following important components:</b>
                </div>
                <div class="rent_content">
                    <h4>Widest Choice, Convenience and Professional Service From The Residential Letting Specialists</h4>
                    <p>Trafalgar is the leading residential letting agency across South Africa, letting and managing residential properties across all major metropolitan areas. Trafalgar has a wide selection of homes to rent, to suit all budgets, tastes and areas.</p>
                    <p>If you’re looking for apartments, houses, freestanding homes or flats to rent, our professional team of letting agents will make the process of searching, viewing, renting and moving into a new home as time efficient, convenient and comfortable as possible.</p>
                    <p>For landlords and property investors, Trafalgar’s multi-channel marketing, industry experience, brand visibility and pre-screened tenant waiting lists, ensures that your residential property investments are quickly and effectively leased to approved tenants at competitive rentals. Trafalgar ensures that all the correct tenant application screening and legal processes are followed with signing a new lease, thereby safeguarding and maximising rental income on rental properties. Please click here to see Trafalgar’s Residential Letting Service Brochure.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Advertising</a></h4>
                        <p>Through effective advertising and marketing across a range of media channels, Trafalgar ensures prompt leasing to well-matched tenants. Potential tenants are offered a wide choice of flats, apartments and houses to rent, while landlords benefit from high visibility and prompt occupation. Trafalgar makes use of the following printed, outdoor and electronic media:</p>
                        <ul>
                            <li>Trafalgar’s Property Search Engine</li>
                            <li>Flyers</li>
                            <li>Google and Facebook paid links and adverts respectively</li>
                            <li>Roadside boards</li>
                            <li>Newspaper classifieds</li>
                            <li>Property24, Private Property and Gumtree advertising</li>
                            <li>SMS Directories</li>
                            <li>Rent Bay</li>
                        </ul>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Screening Of Tenants</a></h4>
                        <p>Trafalgar’s experienced letting agents ensure that all tenant applicants are rigorously screened through credit and reference checks prior to signing a lease agreement to mitigate the risk of default. Checking affordability and prior rental payment behaviour are important success factors for prompt rental payments during a new lease.</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Signing A Lease</a></h4>
                        <p>A legally binding lease agreement is drawn up to protect the landlord and tenant by clearly defining the terms and conditions for handling rental payments and collections, rental increases, deposits, maintenance issues and damages claims as noteworthy examples. Trafalgar letting agents ensure that all lease terms and details are well understood and handle the lease signing training and administration. Careful review and acceptance of rules applicable to Bodies Corporate and Home Owners Associations is a further very important focus area of the letting process. Copies of the signed lease and applicable rules are issued to tenants and landlords for ease of reference.</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Deposits</a></h4>
                        <p>Deposits are important for protecting a landlord’s investment and serve as a security to cover any damages or default during the lease term. Deposits are invested in a trust account in line with the Rental Housing Act and accrue interest for the benefit of the tenant. Trafalgar’s deposit trust account is audited by an independent auditor on an annual basis including frequent checks by the EAAB.</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Inspections</a></h4>
                        <p>Maintenance inspectors conduct pre- and post- occupation inspections of rented properties, itemise damages and provide quotes for the restoration of the property if necessary. A tablet based maintenance application which records photos of the important fixtures and finishes within a defined template is used by the maintenance inspectors to produce documented inspection reports as a legal record. The final account for restoring the unit to the standard defined by the pre-occupation inspection, allowing for standard wear and tear, is offset against the deposit balance before being refunded. Interim inspections can be requested by landlords if required.</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Repairs And Maintenance</a></h4>
                        <p>Our maintenance inspectors and administrators manage the maintenance needs of residential rental properties by arranging any plumbing, electrical, painting, cleaning or other related repairs within the parameters of the mandate signed with the property owner. Trafalgar has a specialised maintenance information system which tracks and project manages maintenance work orders and provides automated regular feedback to all parties to achieve prompt resolution. Rental property owners are consulted throughout the maintenance process for instructions and to provide feedback.</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Rent Collection, Owner Reporting And Financial Management</a></h4>
                        <p>Rent is collected at the beginning of the month in advance, in terms of the lease agreement. Net rental income is electronically transferred to a landlord’s nominated bank account(s) as soon as practically possible following the collection of rental and payment of approved expenses. Tenant rental statements are circulated (preferably by email, otherwise delivered) a week in advance of the 1st of each month to prompt time efficient rental payments. Dedicated debt collectors oversee all rental arrears to collect delayed rental payments as soon as possible; owners are kept informed throughout a debt collection process.</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Financial Reporting</a></h4>
                        <p>Trafalgar’s property and rental management computer information system supports the email distribution of tenant rental statements, owner rent rolls and performance to budget reports. Paper-based hard copy reports remain available where required. In addition, real time financial reports are available online and enable direct and convenient access to all investment property management reports. A Trafalgar portfolio manager oversees Trafalgar residential letting service and is available as a single point of contact and service delivery</p>
                    </div>
                    <div class="each_manage_section" >
                        <h4><a href="javascript:void(0)">Consumer Protection Act</a></h4>
                        <p>With the adoption of the Consumer Protection Act by the South African legislature, residential lease agreements with natural persons likely fall within the jurisdiction of this legislation. Trafalgar’s standard lease agreements and procedures have therefore been aligned to the Consumer Protection Act. As case law becomes available and accumulates, the full scope and application of the Consumer Protection Act to the property sector and residential letting will be better clarified.</p>
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
                              
                                 @if($route == 'rent.rental-services')
                                   <input type="hidden" required  name="pagename" value="rental services contact form" >
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
