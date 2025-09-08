@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-finance')->first(); @endphp

@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <!--about banner-->
    <section class="jobbanner-section finance_top_banner">
        <div class="jobbanner-text">
            <h1>Finance</h1>
        </div>
    </section>
    <!--about banner-->

    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="heading">
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar Financial Services (“TFS”) is an authorised financial services and credit provider with a
                        specialist property finance focus for all juristic, residential entities including, but not limited
                        to, sectional title bodies corporate, non-profit home owners’ associations, share block companies
                        and property owning entities. With a loan book in excess of R100 million, Trafalgar Financial
                        Services is one of the largest, niche financiers, of residential complexes in South Africa.</p>
                </div>
            </div>
            <div class="property-solution online_services_view mb-4">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/loan.svg') }}" alt="loan">
                            </div>

                            <h5>Body Corporate Loans</h5>
                            <p>Short term finance for maintenance projects or other building requirements</p>
                            @php $url1 =  route('body-corporate-hoa-and-share-block-loans')  @endphp
                            <a href="#bodyCorporateDiv" class="theme-btn">Read More</a>
                            <!--<button onclick="window.location.href='{{ $url1 }}'" class="theme-btn">Read More</button>-->
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/finance.svg') }}" alt="finance">
                            </div>
                            <h5>Levy Finance</h5>
                            <p>Eliminate the cash flow pressures of late or arrear levy payments</p>
                            <a href="#levyFinance" class="theme-btn">Read More</a>
                            <!--<button  onclick="window.location.href='#'" class="theme-btn">Read More</button>-->
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/trafex.svg') }}" alt="trafex">
                            </div>
                            <h5>Trafex</h5>
                            <p>Safeguard against unexpected and unpleasant insurance excesses</p>
                            <a href="#trafexDiv" class="theme-btn">Read More</a>
                            <!--<button  onclick="window.location.href='#'" class="theme-btn">Read More</button>-->
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/contact.svg') }}" alt="contact">
                            </div>
                            <h5>Contact Us</h5>
                            <p>Contact us direct for a broker to be in touch with you</p>
                            @php $url2 =  route('contact-us')  @endphp
                            <a href="#contactUsDiv" class="theme-btn">Read More</a>
                            <!--<button  onclick="window.location.href='{{ $url2 }}'" class="theme-btn">Read More</button>-->
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/owners.svg') }}" alt="owners">
                            </div>
                            <h5>Finance For Residential Owners</h5>
                            <p>Loan finance for property investors wanting to refurbish their complexes to increase rentals
                                and reduce vacancies</p>
                            @php $url2 =  route('body-corporate-hoa-and-share-block-loans')  @endphp
                            <a href="#sectionalTitleLoansDev" class="theme-btn">Read More</a>
                            <!--<button class="theme-btn" onclick="window.location.href='{{ $url2 }}'" >Read More</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section" id="bodyCorporateDiv">
                        <h4><a href="javascript:void(0)">Body Corporate Loans</a></h4>
                        <div class="more-content">
                            <p>Body corporate loans are a helpful option for managing financial and cashflow needs in
                                sectional title and home owners association (HOA) community schemes, for major maintenance
                                repairs or improvements, unexpected expenses such as municipal account adjustments, and
                                where levy arrears stress cash flow stability. Trafalgar Financial Services offers tailored
                                loan solutions with flexible repayment terms, competitive interest rates, and expert
                                guidance to support bodies corporate, HOAs, and share block companies. These loans enhance
                                property maintenance, improve community facilities, and provide financial flexibility,
                                ensuring timely repairs and increased property value. Trafalgar’s streamlined processing and
                                personalized approach help communities navigate financial challenges effectively. Contact
                                Trafalgar Financial Services to explore how our body corporate loan solutions can optimize
                                your property management and financial stability.</p>
                            <span class="read-more">
                                <a href="{{ route('property-finance.body-corporate-loans') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="sectionalTitleLoansDev">
                        <h4><a href="javascript:void(0)">Sectional Title Loans</a></h4>
                        <div class="more-content">
                            <p>Sectional title loans are very helpful for managing financial needs in sectional title
                                schemes, covering major repairs, unexpected expenses, and property improvements when
                                required. Trafalgar offers tailored loan solutions with flexible repayment terms,
                                competitive interest rates, and expert guidance to support bodies corporate. These loans
                                enhance property maintenance, improve communal facilities, and provide financial
                                flexibility, ensuring timely repairs and increased property value. Our streamlined
                                processing ensures quick access to funds, helping you address financial challenges
                                effectively. Contact Trafalgar Financial Services to explore how our sectional title loan
                                solutions can optimize your property management, cashflow and financial stability.</p>
                            <span class="read-more">
                                <a href="{{ route('property-finance.sectional-title-loans') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="HOAShareblockLoansDev">
                        <h4><a href="javascript:void(0)">HOA & Shareblock Loans</a></h4>
                        <div class="more-content">
                            <p>Typically speaking, bodies corporate, Home Owners Associations (HOA’s) and share block
                                companies budget for, and accumulate, surpluses for large maintenance projects either in the
                                ordinary budget or via special levy over term (which can be anywhere up to five years). Too
                                often these monies are absorbed into the monthly operational costs of the body corporate /
                                HOA or get diverted into alternate projects for which they were never (initially) intended.
                                Further, the Act is quite restrictive in terms of where surplus monies can be invested
                                (PMR41, PMR42 and PMR43) arguably heightening the opportunity cost of this method of fund
                                accumulation (said legislation applicable to bodies corporate while the MOI of the HOA would
                                govern same); sector inflation being unknown, and not reported on by STATS SA, also means
                                that the project cost is, in essence, a moving target further complicating the process of
                                raising monies for related maintenance or capital project(s).</p>
                            <div class="more">
                                <p class="more">Trafalgar Financial Services offers upfront finance for maintenance and
                                    capital projects on favourable terms tailor made to fit the cash flow constraints of the
                                    borrower (body corporate, HOA or share block company). More importantly, this allows for
                                    the immediate restoration or enhancement of value, on definite terms, removing any
                                    uncertainties involved with the process or project. Finance in action – Have a look at a
                                    few of our case studies:</p>
                                <ul class="pdfs">
                                    <li><a href="{{ asset('storage/brochure/Elizabeth-Court.pdf') }}">Elizabeth Court</a>
                                    </li>
                                    <li><a href="{{ asset('storage/brochure/Kingfisher-Close.pdf') }}">Kingfisher Close</a>
                                    </li>
                                    <li><a href="{{ asset('storage/brochure/Meadowfields.pdf') }}">Meadowfields</a></li>
                                    <li><a href="{{ asset('storage/brochure/Rydal-Mount.pdf') }}">Rydal Mount</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="each_manage_section" id="levyFinance">
                        <h4><a href="javascript:void(0)">Levy Finance and Levy Solutions</a></h4>
                        <div class="more-content">
                            <p>Levy finance is exceptionally helpful for addressing cash flow issues faced by bodies
                                corporate, homeowners' associations (HOAs), and share block companies due to unpaid levies
                                and associated legal collections costs. Trafalgar’s Levy Solutions offers a solution by
                                guaranteeing a fixed monthly cash flow and advancing up to 90% of arrears at inception. This
                                covers and ensures cashflow stability and continuity, timely maintenance, legal fee
                                payments, and provides intensive levy arrears debt collection. Benefits of levy finance
                                include improved property value, consistent maintenance, improved presentation of the common
                                property, higher rental income, and enhanced marketability of the properties. By stabilizing
                                finances and managing maintenance effectively, Levy Solutions helps prevent the
                                deterioration of properties, reduces financial stress, and supports overall community
                                well-being. Contact Trafalgar Financial Services to secure your financial stability with our
                                levy finance solutions.</p>
                            <span class="read-more">
                                <a href="{{ route('property-finance.levy-finance') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="bodyCorporateFinance">
                        <h4><a href="javascript:void(0)">Body Corporate Finance</a></h4>
                        <div class="more-content">
                            <p>Access to body corporate finance is helpful when a need such as a large maintenance
                                project, solar installation, unexpected municipal arrears or cash flow issues related to
                                levy arrears and legal collections fees arise. Trafalgar Financial Services offers
                                tailored sectional title finance solutions, including levy finance, which guarantees a
                                fixed monthly cash flow and advances up to 90% of arrears, along with covering legal
                                fees. Our services include expert financial planning, cash flow management, arrears
                                recovery, and compliance support. By implementing effective body corporate finance
                                strategies, we help stabilize cash flow, improve property value, maintenance
                                effectiveness, enhance community well-being, and reduce financial distress. Contact
                                Trafalgar Financial Services to optimize your property management and ensure financial
                                stability.</p>
                            <span class="read-more">
                                <a href="{{ route('property-finance.body-corporate-finance') }}">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="each_manage_section" id="sectionalTitleFinance">
                        <h4><a href="javascript:void(0)">Sectional Title Finance </a></h4>
                        <div class="more-content">
                            <p>Sectional Title Finance is crucial for managing the complex financial responsibilities of
                                sectional title community schemes, which include maintenance and repairs. It ensures steady
                                cash flow and enhances property value through effective financial management. This finance
                                provides short and medium-term loan options for funding various needs while managing levies
                                and budgeting. Trafalgar specializes in Sectional Title Finance, offering tailored solutions
                                like guaranteed levy income and flexible financing options to tackle specific challenges
                                faced by bodies corporate. Their expertise helps navigate financial complexities, ensuring
                                timely fund access, compliance, and improved community facilities, ultimately fostering
                                financial stability and sustainability.</p>
                            <span class="read-more">
                                <a href="{{ route('property-finance.sectional-title-finance') }}">Read More</a>
                            </span>
                        </div>
                    </div>


                    <div class="each_manage_section" id="trafexDiv">
                        <h4><a href="javascript:void(0)">TRAFEX – EXCESS WAIVER AND SHORTFALL COVER</a></h4>
                        <div class="more-content">
                            <p>Insurance excesses and policy limits are both well-established norms in the insurance
                                industry; excesses specifically, are often the first things adjusted (upwards) by
                                insurers
                                to address increasing loss ratios and, given owners are typically liable for excesses
                                [PMR
                                29(4)], do you have the means to settle both the excess and potential shortfall
                                unannounced
                                and without warning?</p>
                            <p class="more">Trafalgar Financial Service’s TRAFEX Policy, being the only one of its
                                kind in
                                the industry, offers peace of mind and will settle all excess(s) * and shortfall(s) *
                                arising from related insurance claims whenever and whatever the circumstances.</p>
                        </div>
                    </div>
                    <div class="each_manage_section text-center" id="contactUsDiv">
                        <h4><a href="javascript:void(0)">CONTACT US</a></h4>
                        <p class="mb-1">Trafalgar Financial Services (TFS) after hours number for claims (this number
                            is
                            specifically for clients insured through TFS).</p>
                        <p class="mb-1">AFTER HOURS CLAIMS NO. FOR EXTREME EMERGENCIES: <a
                                href="tel:072 972 0812"><b>072
                                    972 0812</b></a></p>
                    </div>
                    <div class="contact_section p-0">
                        <div class="maintenance_form_view m-0">
                            <div class="management_form">
                                <small>Please complete the form below to contact us</small>
                                <form action="{{ route('finance-contact-mail') }}" method="post"
                                    id="finance-contact-mail">

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
                                                <input type="text" class="form-control" id="phone" name="phone"
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
        </div>
    </section>
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
