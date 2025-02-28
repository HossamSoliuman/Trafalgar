@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-insurance.faqs')->first(); @endphp

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
            <li><a href="{{ route('property-insurance') }}">Property Insurance</a></li>

             <li><a href="#">faqs</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Frequently Asked Questions (FAQ’s)</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section faqs">
                        <h4><a href="#"><u>INSURANCE</u></a></h4>
                        <div class="accordion-container">
                          <div class="set">
                            <a href="#">Do we have to insure the complex? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Trustees of bodies corporate are legally compelled to insure the body corporate, this per PMR29 which dictates the cover required; HOA’s and shareblock companies, while not legally obliged to insure the property, the directors would be well advised to arrange for third party liability cover and, (arguably) at the least, common property cover.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Are personal belongings covered by the sectional title policy? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No; only the fixed structure, including fixtures, is covered by the sectional title policy. Personal belongings, being electronic goods (TV’s, DVD players, hi fi systems) clothes, jewellery etc. need to be insured through the owners’ personal domestic policy typically with their motor vehicle.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What is or does the term ‘loss ratio’ mean? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Simply put, this is a key metric insurers use when evaluating risks, especially upon renewal or when considering a new risk. The loss ratio is simply claims (costs) over premium (received) as a percentage. As an example, if total claims costs were R500 and total premium over the corresponding period was R1, 000 the loss ratio would be 50% (500/1,000). Insurers typically use three years’ worth of info in said calculation to give an accurate assessment of same. Loss ratios less than 60% are considered ‘good’ (clearly indicative of a ‘profitable’ policy) but, depending on the insurers individual cost structure(s), this can be increased to around 65%. Insurers’ costs are and include administrative costs which need to be taken into account.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#"> Why is it important to have the body corporate, hoa or shareblock professionally valued? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>It is important to insure the correct quantum, that being ‘sum insured’; there is no benefit in inflating the sum insured as insurers will never pay more than the replacement cost but, in the event that the sum insured is less than actual replacement cost, insurers will apply average which is the proportionate payment of claim(s). As an example, if the sum insured is 75% of the actual (correct) correct sum insured, the insurer will only pay 75% of the claim amount. It is and remains the trustees’ prerogative and responsibility to set the sum insured but they would be well advised to seek professional assistance in setting same.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Is the schedule of replacement values, and in turn the sum insured, the market value of the unit(s) and, in turn, the body corporate? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The said schedule of replacement values and sum insured as depicted by the policy schedule is the replacement cost and not the market value which may, and probably will, differ in quantum(s). While the market value is what an owner will realise for his/her unit on the market, the replacement cost is the amount to rebuild the unit following a total loss. While these figures are logically correlated, they are not one in the same and will in all likelihood differ.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What is commission and why is commission payable to a third party (broker)? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Legislation governs commission and commission is legislated at up to 20% for buildings and 10% for motor with the market established rate, for sectional title, HOA and shareblock (buildings), being 20%. Commission is payable by the insurer to the broker and not by the policy holder to the broker although admittedly monies are paid from premiums received. Brokers play an important role in liaising with both the client and insurer in the placement of cover including cover finalization, claims handling and settlement, cover advice and the like. Trafalgar Financial Services also sees to free valuations for all new clients and cover evaluation; it is important to note that the broker represents the client and not the insurer and should always act in the clients’ best interests.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Does it pay to go direct? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>This is a very contentious issue and ongoing industry debate; direct insurers definitely have a place but, given their model, generally offer a less personalized service. Further, while commission is not payable to any third party broker, their marketing costs are generally significant and in excess of brokers’ models which rely on direct marketing to a known client base so costs are not always hugely different. Ultimately it is up to the individual as to what channel they prefer but all the facts should be considered thoroughly before a final decision is made.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Can anyone be a broker? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The short answer is yes; having said this however, there is a multitude of legislative requirements that need to be met for someone to become a broker, this both for the entity as well as the individual.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What are our options in the event of a claim being repudiated?<i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Your broker should asses the validity of the claim and give advice on the legitimacy of the repudiation. In the event that the repudiation is deemed unfair, your broker should address the repudiation with the insurer – this is where it pays to be with a large broker who (theoretically) has some ‘sway’ with the insurer. If the broker is unable to get the repudiation overturned, the ombudsman for short-term insurance can be approached for relief, this being a free service for claims less than R800, 000.00; clients can, in the event that the claim is in excess of R800, 000.00, forgo the additional amount and utilize said service or has the option to approach the judicial system for relief. Clients should at all times discuss their options with their broker.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What is a good rate for sectional title schemes? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Sectional title insurance is a highly competitive market; an average sectional title rate is (typically) in the region of 0.1% but for large bodies corporate (sums insured >R100m) rates as low as 0.05% are not uncommon; this is merely meant to be an indication and there are other factors, like the loss ratio, that need to be taken into account. Free hold rates (standalone houses), as a comparison, typically have rates in the region of 0.15% to 0.2%.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Why is there an excess on the policy? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Insurance excesses are established norms in the industry; initially they were meant to deter policy holders from claiming for menial amounts where the claimed quantum was less than associated administrative cost of processing the claim. Currently, and more frequently, they are used as a management tool by insurers to manage the ‘profitability’ of the associated policy.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Who is liable for the excess? the body corporate or claimant? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The Act is quite clear [PMR29(4)] that the owner of a section is responsible for the excess associated with his / her section unless directed otherwise by special resolution.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Are we able to get an excess waiver? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Yes, some insurers do offer excess waivers and specialist brokers, in association with an insurer(s), will also be able to offer same. Trafalgar Financial Services, in association with Hollard, offer a specialist excess waiver and shortfall product known as ‘Trafex’.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="each_manage_section faqs">
                        <h4><a href="#"><u>FINANCE</u></a></h4>
                        <div class="accordion-container">
                          <div class="set">
                            <a href="#"> Are trustees and directors alike (bodies corporate, hoa’s and shareblock companies) allowed to borrow money on behalf of the body corporate, hoa or shareblock company? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>In the case of sectional title (body corporate) the Sectional Title Act specifically enables trustees to borrow money [38(e)] to exercise their duties as more fully set out in the Act; in the instant of HOA’s and share block companies, the MOI would typically provide the necessary authority which is usually the case.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Does trafalgar financial services require (personal) sureties when and to process a loan? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No sureties from either the trustees or owners is required; our security is limited to a cession (in security) of the levy income stream.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What rates does trafalgar financial services charge? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Interest is typically charged at a variable rate of Prime plus 2%-5% depending on our perceived assessment of the body corporate’s, HOA’s or shareblocks’s risk profile. An admin fee of a straight R300.00 (exl.) / mth is capitalized in the loan quantum as well as a finance fee akin to a raising fee. Both fees may be paid upfront as opposed to being capitalized in the loan quantum.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Is trafalgar financial services registered to provide credit? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Yes, Trafalgar Financial Services is a registered credit provider and adheres to the regulations as set by the National Credit Regulator under the ambit of the National Credit Act. Our license is prominently displayed in head office, as required; registration number NCRCP2678.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Are accelerated payments towards a loan allowed and are there any associated penalties? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Yes, the National Credit Act is quite clear in that accelerated payments must be allowed without penalty and interest which is fully complied with.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">How long does it take trafalgar financial services to process a loan?<i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Upon acceptance of the provided quotation and signature of the relevant loan agreement, money can be paid across immediately – the loan agreement specifies within 30 days but practically it is much sooner and per our clients’ preferences.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Is trafalgar’s levy solutions a factoring product and is there a total transfer and subrogation of risk? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No, Levy Solution is a loan product which practically works like a factoring product but is not accompanied by a (full) transfer of risk.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What are the benefits of loaning monies as opposed to raising a special levy? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Finance is immediate whereas special levies typically follow the defaulters’ profile in terms of cash received; raising provision (say for painting over three years) means that trustees are limited in terms of the Act in terms of surplus cash investment which can be perceived to be inefficient. Further, the cost of the related project is unknown as of a future date meaning that, in essence, the trustees are chasing a ‘moving target’. It is important to appreciate that inflation is industry specific and not limited to CPI or CPIX for all industries.</p>
                            </div>
                          </div>
                        </div>
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
