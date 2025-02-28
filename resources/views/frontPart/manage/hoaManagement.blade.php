
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management.hoa-management')->first(); @endphp

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
              <li><a href="{{ route('property-management') }}">Property Management</a></li>
              <li><a href="#">HOA Management</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
                <h1>HOA Management</h1>
                <div class="manage-paragraph">
                    <p>Trafalgar’s core business is the property management of sectional title schemes and Homeowners Associations.  Trafalgar understands that the management of a property directly affects peoples’ homes, lifestyles and the value of their primary assets, which is why we’re dedicated to providing a comprehensive and tailored management service.  With over 50-years experience, specialist systems and professional staff, Trafalgar offers a complete property management service tailored to meet the needs of individual schemes.  We are fully registered with both the Property Practitioners Regulatory Authority (PPRA) and the National Association of Managing Agents (NAMA). Please click <a target="__blank" href="{{ asset('storage/brochure/Sectional-Title-and-HOA-Property-Managment-EV.pdf') }}">here</a> to see Trafalgar’s Sectional Title and HOA Property Management Brochure.</p>
                    <p>Trafalgar offers a comprehensive property management service which can be conveniently tailored to the specific needs and context of individual properties. Each property managed by Trafalgar is allocated a dedicated residential portfolio manager as a single point of entry and primary communication channel. All our portfolio managers are supported by a team consisting of a Property Administrator, credit controller and bookkeeper as well as customised property management and document management computer systems.</p>
                    <p>Effective financial management and reporting is a core component and competitive advantage of Trafalgar’s property management service. Compiling and circulating detailed monthly management reports including income statements, performance to budget and variance reports, levy rolls, disbursement statements and credit control reports is a standard part of Trafalgar’s property management service. For convenience, all our reports are available by email or online in real time. We also prepare annual budgets, review financial performance monthly and prepare an annual audit file at year end to promote a time efficient and cost effective audit.</p>
                    <p>Monthly levy and utility payments are made easy for owners as our infrastructure provides for multiple payment channels including debit orders, stop orders, telephone banking, internet banking and deposits at any Standard Bank branch nationally. Owners may log-in online to retrieve levy account balances and detailed property related information and financial reports are available on a property specific web site we call the Property Portal linked to <a href="/">www.trafalgar.co.za</a></p>
                </div>
                <h3 class="text-center">TRAFALGAR’S COMPREHENSIVE PROPERTY MANAGEMENT SERVICE SCOPE:</h3>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Dedicated Portfolio Manager And The Property Management Team:</a></h4>
                        <ul>
                            <li>A dedicated and specialised team consisting of a portfolio manager, personal assistant, credit controller and bookkeeper will be assigned to manage your homeowners association or body corporate.</li>
                            <li>All portfolio managers are extensively trained in sectional title management and the regulations of  Non-profit companies and Common law Associations and will have complete a number of property management courses.</li>
                            <li>The team structure ensures that the appropriate specialist skills are applied to the management of your property and provides cover in the event of leave and training.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Billing And Collections:</a></h4>
                        <ul>
                            <li>Distribution of monthly levy statements to owners: post, courier, email and internet options available, although email is the preferred channel due to energy, convenience and green friendly considerations</li>
                            <li>Collection of monthly levies: debit order, electronic banking, direct deposit, branch deposit, credit card payment channel options available</li>
                            <li>Credit control of all outstanding levies</li>
                            <li>Trafalgar is a fully registered Debt Collector and is therefore governed by the Debt Collectors Act. Credit control charges are therefore regulated and are charged directly to the levy defaulter and recovered directly from the individual and not from the Body Corporate. As a registered Debt Collector, we are able to blacklist levy defaulters which affects their credit rating.</li>
                            <li>Billing of interest on arrears</li>
                            <li>Attorney collections liaison</li>
                            <li>Liaison with meter reading service companies for specific service / utility billing and recoveries included with the monthly levy statements and collections</li>
                            <li>Issue of levy clearance certificates</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Disbursements:</a></h4>
                        <ul>
                            <li>Payment of approved creditors and municipal accounts</li>
                            <li>All disbursements approved and signed off in accordance with Trustee/Director instructions and relevant legislation</li>
                            <li>Maintenance of electronic voucher files</li>
                            <li>Immediate SMS notification to all specified trustees on every payment made to creditors.</li>
                            <li>Electronic automated e-mail requests are sent to all the trustees to obtain a minimum of two trustees’ approval to pay creditors.</li>
                            <li>Netcash verification reports are obtained prior to paying all creditors to ensure that the creditors invoice and banking details are correct.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Insurance And Property Financial Services:</a></h4>
                        <ul>
                            <li>Broker services for sectional title schemes to ensure appropriate insurance cover at competitive rates.</li>
                            <li>Administration and disbursement of claims</li>
                            <li>Annual claims history reporting</li>
                            <li>Refurbishment loans</li>
                            <li>Levy factoring to enhance Homeowners Association cash flow</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Meeting Attendance And Secretarial Service:</a></h4>
                        <ul>
                            <li>Attendance at four (4) Trustees / Directors meetings per year as well as the Annual General Meeting.</li>
                            <li>Preparation and distribution of notices of meetings, agendas and minutes.</li>
                            <li>Organisation and minuting of the Annual General Meeting</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Advisory Service:</a></h4>
                        <ul>
                            <li>Immediate advisory service regarding provisions of the Companies Act as well as the Scheme’s Memorandum of Incorporation / Constitution and other relevant legislation</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Personnel Records:</a></h4>
                        <ul>
                            <li>Direct (electronic) payment of salaries and wages to staff</li>
                            <li>Calculation and payment of UIF and P.A.Y.E. deductions</li>
                            <li>Issuing of payslips to Home Owners Association staff members.</li>
                            <li>Keeping records of Home Owners Association leave.</li>
                            <li>Prompting trustees for Home Owners Association staff annual bonuses.</li>
                            <li>Maintenance of staff records</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Statutory Records:</a></h4>
                        <ul>
                            <li class="d-block">Maintenance of statutory records of the Homeowners Association including:
                                <ul class="pl-3 pt-1">
                                    <li>Books of account</li>
                                    <li>Conduct Rules and  Memorandum of Incorporation / Constitution and Regulations thereto</li>
                                    <li>Registered Site plans</li>
                                    <li>Register of bondholders and owners</li>
                                    <li>Minute books</li>
                                    <li>Voucher files and accounting records</li>
                                    <li>Employee and payroll records</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Maintenance Administration:</a></h4>
                        <ul>
                            <li>Trafalgar offers a dedicated maintenance administrator supported by a specialised maintenance computer information system to oversee the process of sourcing quotes, booking maintenance work and following up with the contractors concerned.</li>
                            <li>All Trafalgar offices have panels of approved contractors as maintenance partners: their workmanship and cost effectiveness has been positively tested from extensive prior experience.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Internet And E-Mail:</a></h4>
                        <ul>
                            <li>Trafalgar’s website (www.trafalgar.co.za) offers our clients the opportunity to register online in order to view their levy account detail at their leisure on the Internet.</li>
                            <li>Alternatively, levy statements and monthly management reports are available electronically by email and circulated on a monthly basis.</li>
                            <li>Directors/trustees and owners of schemes managed by Trafalgar can also register for the ‘Property Portal’ to view monthly income and expense reports, rules, plans, contact information and other relevant property management information.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Computer Systems:</a></h4>
                        <ul>
                            <li>Trafalgar utilises a specialised property management computer system that operates in real time – in other words all payments made or received show on the system immediately. In addition, extensive development of the system over the last seven years has been undertaken to ensure that system reports and functionality is optimised to keep in line with current technology best practices.</li>
                            <li>Trafalgar also utilises a computerised document management and workflow system to both securely and electronically archive relevant property related  legal documentation and automatically manage the workflow for creditors invoice approval and processing.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Take-On Assessment ‘Health Check’:</a></h4>
                        <ul>
                            <li>On taking on a complex, a property management take-on specialist will be assigned to ensure a smooth transition to Trafalgar.</li>
                            <li>The person concerned will perform a ‘health check’ of the complex to confirm that all the appropriate hand-over information is available and loaded, and that your complex and management thereof is fully compliant with all the relevant regulations and legislation.</li>
                            <li>After a smooth take-on has been achieved, a portfolio manager will be selected by the take-on specialist to continue with the ongoing management of the complex.</li>
                            <li>It is our experience that if the take-on of a complex is thorough and effective, the ongoing success of the management service is assured.</li>
                            <li class="d-block">The Health Check includes:
                                <ul class="pl-3 pt-1">
                                    <li>Deeds search to confirm that correct owners and their details are loaded</li>
                                    <li>Budget review, identification of risks and formulation of recommendations</li>
                                    <li>Performance to budget review (PTB), assessment of reserves and evaluation of variances</li>
                                    <li>Assessment of insurance cover</li>
                                    <li>Assessment of firefighting equipment and other relevant risk procedures</li>
                                    <li>Confirmation of conduct rules</li>
                                    <li>Assessment of owner accounts, arrear levies and credit control effectiveness</li>
                                    <li>Assessment of compliance to relevant legislation</li>
                                    <li>Compilation of a report and action log to address identified gaps</li>
                                    <li>Compilation of a property management control schedule demonstrating required monthly operational activities to be managed and confirmed</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Additional Advisory And Support Services:</a></h4>
                        <ul>
                            <li>Recruitment of contractors and staff as required</li>
                            <li>Referral to specialist attorneys to draft conduct rules and Memoranda of Incorporation or necessary amendments</li>
                            <li>Attendance at special general meetings</li>
                            <li>The submission of Annual Tax Returns (IT14)</li>
                            <li>The submission and completion of Provisional and Annual Tax Returns</li>
                            <li>The submission of the CIPC annual returns.</li>
                            <li>Attending to Directors details with CIPC, change of auditor’s details etc.</li>
                        </ul>
                    </div>
                    <h5 class="text-center">Trafalgar’s Standard Property Management Scope Is Flexible And May Be Conveniently Customised To A Particular Property’s Context, Challenges And Requirements</h4>
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
