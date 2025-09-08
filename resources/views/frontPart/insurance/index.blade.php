@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-insurance')->first(); @endphp

@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <!--about banner-->
    <section class="jobbanner-section insure_top_banner">
        <div class="jobbanner-text">
            <h1>Insurance</h1>
        </div>
    </section>
    <!--about banner-->

    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="heading">
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar Financial Services (“TFS”) is a boutique financial services company specialising in a range
                        of property financial services products, targeted at residential estates and complexes across South
                        Africa. TFS acts as a broker for an insured property book value of approximately R150 billion and is
                        registered with the Financial Sector Conduct Authority (License number: 1441) and the National
                        Credit Regulator (NCRCP: 2678). TFS also offers a “niche” excess waiver product for sectional title
                        schemes underwritten by Hollard. Our longstanding relationships with respected insurers and
                        underwriters, customised systems and infrastructure, allow us to offer tailored products, at highly
                        competitive rates, supported by world-class customer service. <a href="#contactSection"><b>Contact
                                Us</b></a></p>
                </div>
            </div>
            <div class="property-solution online_services_view mb-4">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/shareblock.svg') }}" alt="shareblock" />
                            </div>
                            <h5>Sectional Title, HOA & Shareblock Insurance</h5>
                            <p>Specialised sectional title cover including free market leading trustee indemnity cover</p>
                            <a href="#shareblock" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/trafex.svg') }}" alt="trafex">
                            </div>
                            <h5>Trafex</h5>
                            <p>Safeguard against unexpected and unpleasant insurance excesses</p>
                            <a href="#trafex" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/claim.svg') }}" alt="claim" />
                            </div>
                            <h5>Claims</h5>
                            <p>Lodge claim details online for fast and efficient insurance claim support</p>
                            <a href="#claims" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/faq.svg') }}" alt="faq">
                            </div>
                            <h5>Frequently Asked Questions</h5>
                            <p>All the answers to commonly asked questions and concerns</p>
                            <a href="{{ route('property-insurance.faqs') }}" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/contact.svg') }}" alt="contact" />
                            </div>
                            <h5>Contact Details & Quotations</h5>
                            <p>Contact us direct or complete your contactdetails for a broker to be in touch with you</p>
                            @php $url1 =  route('contact-us') @endphp
                            <a href="#contactSection" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">

                    <div class="each_manage_section" id="communitySchemeInsurance">
                        <h4><a href="javascript:void(0)">Community Scheme Insurance</a></h4>
                        <div class="more-content">
                            <p>
                                Community scheme insurance is essential for protecting properties managed under collective
                                ownership, such as sectional title schemes, homeowners' associations (HOAs), retirement
                                villages, golf estates and shareblocks. This specialized insurance covers multiple aspects,
                                including property damage, public liability, fidelity guarantee, directors and officers
                                (D&O) liability, and machinery breakdown. The insurance ensures financial protection against
                                various risks, compliance with legal requirements, and the financial stability of the
                                community scheme.
                                Trafalgar offers tailored community scheme insurance solutions to meet the unique needs of
                                each property, whether it’s a small sectional title or a large retirement village. With a
                                focus on customized cover, competitive premiums, and expert claims management, Trafalgar
                                ensures comprehensive protection for all community schemes. Additional value-added services,
                                such as risk assessments and property replacement valuations, further enhance the management
                                and safety of community properties. Trafalgar is dedicated to being a trusted partner in
                                safeguarding your community scheme’s future and risk management.
                            </p>
                            <span class="read-more">
                                <a href="{{ route('property-insurance.community-scheme-insurance') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="temp">
                        <h4><a href="javascript:void(0)">HOA Insurance</a></h4>
                        <div class="more-content">
                            <p>
                                HOA insurance is crucial for protecting homeowners’ associations (HOAs) from risks like
                                property damage, liability claims, and legal disputes. It covers shared spaces such as
                                clubhouses and pools and includes components like property insurance, general liability,
                                directors and officers (D&O) insurance, and fidelity insurance. Trafalgar provides tailored
                                HOA insurance solutions, ensuring comprehensive coverage and risk mitigation. We offer
                                customized insurance cover, competitive premiums, expert claims management, and risk
                                advisory services to meet the specific needs of each community. With Trafalgar, HOAs can
                                protect their assets, safeguard board members, and maintain a high quality of life for
                                residents.
                            </p>
                            <span class="read-more">
                                <a href="{{ route('property-insurance.hoa-insurance') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="temp">
                        <h4><a href="javascript:void(0)">Sectional Title Insurance</a></h4>
                        <div class="more-content">
                            <p>
                                Sectional title insurance is an essential component in the management of sectional title
                                schemes, which are becoming increasingly popular as a property ownership model across South
                                Africa. The purpose of this type of insurance is to protect the interests of both individual
                                owners and the collective body corporate. Under South African law, specifically the
                                Sectional Titles Schemes Management Act, 2011, there are stringent requirements for
                                insurance coverage to ensure that properties are adequately protected against various risks.
                                Trafalgar Financial Services (TFS) is a prominent insurance broker provider in this space,
                                offering specialized insurance solutions tailored to meet both legislative requirements and
                                the unique needs of individual bodies corporate.
                            </p>
                            <span class="read-more">
                                <a href="{{ route('property-insurance.sectional-title-insurance') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="shareblock">
                        <h4><a href="javascript:void(0)">Shareblock Insurance</a></h4>
                        <div class="more-content">
                            <p>
                                Shareblock insurance is essential for protecting properties owned under a shareblock scheme,
                                where shareholders own shares in a company that owns the property. This specialized
                                insurance covers property damage, public liability, directors and officers (D&O) risks, and
                                fidelity insurance against fraud. At Trafalgar, we offer tailored shareblock insurance
                                solutions, including competitive premiums and comprehensive cover options. Our services
                                include customized insurance policies, expert claims management, and risk advisory services
                                to meet the unique needs of each shareblock property. With our expertise, we ensure the
                                financial protection and legal compliance of your shareblock investment. Contact us to
                                secure your property’s future.
                            </p>
                            <span class="read-more">
                                <a href="{{ route('property-insurance.shareblock-insurance') }}">Read More</a>
                            </span>
                        </div>
                    </div>

                    <div class="each_manage_section" id="trafex">
                        <h4><a href="javascript:void(0)">Trafex</a></h4>
                        <div class="more-content">
                            <p>Insurance excesses and policy limits are both well-established norms in the insurance
                                industry; excesses specifically, are often the first things adjusted (upwards) by insurers
                                to address increasing loss ratios and, given owners are typically liable for excesses [PMR
                                29(4)], do you have the means to settle both the excess and potential shortfall unannounced
                                and without warning?</p>
                            <p class="more">Trafalgar Financial Service’s TRAFEX Policy, being the only one of its kind in
                                the industry, offers peace of mind and will settle all excess(s) * and shortfall(s) *
                                arising from related insurance claims whenever and whatever the circumstances.</p>
                        </div>
                    </div>
                    <div class="each_manage_section" id="claims">
                        <h4><a href="javascript:void(0)">CLAIMS</a></h4>
                        <div class="more-content">
                            <p>All claims must be reported either (preferably) directly to Trafalgar Financial Services
                                electronically to claims@trafalgar.co.za or telephonically on 0861 66 44 44, or
                                alternatively to your portfolio manager direct. Trafalgar Financial Services, in an effort
                                to compress turnaround times and make the claim process easier for our valued clients, does
                                not require hardcopy claim forms signed, rather utilizing voice recording technology, in
                                agreement with our insurer partners, who understand the importance of making this process
                                simpler and faster.</p>
                            <div class="more">
                                <h5 class="mt-2">GENERAL CLAIMS PROCEDURES</h5>
                                <ul>
                                    <li>Always take all necessary and reasonable action to prevent, or minimize the loss;
                                    </li>
                                    <li>Notify Trafalgar Financial Services of the loss as soon as reasonably possible
                                        thereafter (see claims above);</li>
                                    <li>Retain any damaged property (salvage) for the relevant insurer;</li>
                                    <li>Always report any incident involving criminal activity to their local SAPS and
                                        obtain a Case Reference Number;</li>
                                    <li>Never admit to their potential liability and refer any correspondence in this regard
                                        directly to Trafalgar Financial Services;</li>
                                    <li>Record the details of any Third Party potentially involved in the loss;</li>
                                    <li>Image and the cause thereof;</li>
                                </ul>
                                <p>* In most instances insurers apply cumulative excesses; subject to Trafex policy limits.
                                </p>
                                <strong>The above is not intended to be definitive; please read your insurance policy for
                                    more specific instructions relating to the claims procedure or contact Trafalgar
                                    Financial Services directly to arrange for one of our qualified and specialist brokers
                                    to assist you further.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="each_manage_section text-center" id="contactSection">
                        <h4><a href="javascript:void(0)">CONTACT US</a></h4>
                        <p class="mb-1">Trafalgar Financial Services (TFS) after hours number for claims (this number is
                            specifically for clients insured through TFS).</p>
                        <p class="mb-1">AFTER HOURS CLAIMS NO. FOR EXTREME EMERGENCIES: <a href="tel:072 972 0812"><b>072
                                    972 0812</b></a></p>
                    </div>
                    <div class="contact_section p-0">
                        <div class="maintenance_form_view m-0">
                            <div class="management_form">
                                <!--<h2>Contact Us</h2>-->
                                <small>Please complete the form below to contact us</small>
                                <form action="{{ route('insure-contact-mail') }}" method="post" id="contactUsForm">

                                    @csrf
                                    <div class="maintenance_form_inner">
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label for="name">Name<span>*</span></label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label for="email">Email:<span>*</span></label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone Number:<span>*</span></label>
                                                <input type="number" class="form-control" id="phone" name="phone"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label for="city">City:<span>*</span></label>
                                                <input type="text" class="form-control" id="city" name="city"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label>Preferred method of contact<span>*</span></label>
                                                <div class="radio-group">
                                                    <span>
                                                        <input checked type="radio" id="p_phone"
                                                            name="method_of_contact" value="phone">
                                                        <label for="p_phone">Phone</label>
                                                    </span>
                                                    <span>
                                                        <input type="radio" value="email" id="p_email"
                                                            name="method_of_contact">
                                                        <label for="p_email">Email</label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="time_to_call">Preferred time to be called</label>
                                                <input type="text" class="form-control" id="time_to_call"
                                                    name="time_to_call">
                                            </div>
                                        </div>
                                        <div class="field_row">
                                            <div class="form-group">
                                                <label for="comment_or_question">Comments or Questions</label>
                                                <textarea class="form-control" id="comment_or_question" rows="3" name="comment_or_question"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                                            </div>
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span
                                                    class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                            @endif
                                        </div>

                                        <button type="submit" class="m-0 form-control">Send message</button>
                                    </div>

                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clients_logo">
                <img class="img-fluid" src="{{ asset('front/images/logo-hollard.png') }}" alt="logo-hollard" />
                <img class="img-fluid" src="{{ asset('front/images/logo-santam.png') }}" alt="logo-santam" />
                <img class="img-fluid" src="{{ asset('front/images/Standard-Bank.png') }}" alt="Standard-Bank" />
                <img class="img-fluid" src="{{ asset('front/images/logo-cia.png') }}" alt="logo-cia" />
                <img class="img-fluid" src="{{ asset('front/images/logo-fia-1.png') }}" alt="logo-fia-1" />
            </div>

        </div>
    </section>
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
