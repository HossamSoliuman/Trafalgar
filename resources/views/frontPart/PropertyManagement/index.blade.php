@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management')->first(); @endphp

@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <!--about banner-->
    <section class="jobbanner-section manage_top_banner">
        <div class="jobbanner-text">
            <h1>Property Management</h1>
        </div>
    </section>
    <!--about banner-->

    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="rent_page_content mb-4">
                <div class="manage-paragraph text-justify">
                    <div class="rent_img">
                        <img class="bannerimg img-fluid" src="{{ asset('front/images/manage.png') }}" alt="Manage" />
                        <div class="broucher">
                            @php $pdflink = asset('storage/brochure/Sectional-Title-and-HOA-Property-Managment-EV.pdf');  @endphp
                            <a download href="{{ $pdflink }}"><img src="{{ asset('front/images/pdf.svg') }}"
                                    alt="{{ asset('front/images/pdf.svg') }}" /></a>

                            <p title="Sectional-Title-and-HOA-Property-Managment-EV.pdf" style="cursor: pointer;"
                                onclick="location.href='{{ $pdflink }}'">Please click here to see Trafalgar’s Sectional
                                Title and HOA Property Management Brochure.</p>
                        </div>
                    </div>
                    <div class="rent_content pt-4">
                        <p>Trafalgar offers full-service sectional title and home owners association (“HOA”) property
                            management services across South Africa. Specific property requirements and challenges can be
                            addressed by applying specialised and experienced teams, systems and infrastructure. Experienced
                            portfolio managers provide a single point of communication and service delivery guided by world
                            class service delivery as a standard. A strong focus on accurate budgeting, detailed financial
                            management reporting and governance excellence underpin Trafalgar’s property management
                            services.</p>
                    </div>
                </div>
            </div>
            <div class="heading">
                <div class="manage-paragraph text-justify" style="padding: 20px;border: 1px solid #bfd530;">
                    <p class="d-flex align-items-center"><span class="pr-4"><img
                                src="{{ asset('front/images/csos-stsm-acts.gif') }}" alt="csos-stsm-acts.gif" /></span>
                        <span>There is currently a significant focus on interpreting and implementing the newly promulgated
                            CSOS and STSM Acts which have far reaching implications for the management of complexes going
                            forward; for summaries of the practical implications, frequently asked questions and links to
                            the source legislation, please go to <a
                                href="{{ route('property-management.stsm-act') }}">{{ route('newlegislation') }}</a></span>
                    </p>
                </div>
            </div>
            <div class="property-solution online_services_view mb-4">
                <div class="container">
                    <div class="online_services_ mt-4">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img class="img-fluid" src="{{ asset('front/images/hoa-management.svg') }}"
                                    alt="hoa-management.svg" />
                            </div>
                            <h5>Community Scheme Management</h5>
                            <p>Complete community scheme management services, providing expert support to meet the unique
                                needs of sectional title body corporates and homeowners' associations.</p>
                            <a href="#community_scheme_management" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/commercial.svg') }}" alt="commercial.svg" />
                            </div>
                            <h5>Commercial Property Management</h5>
                            <p>Broking and full property management services available for commercial, retail and industrial
                                property</p>
                            <a href="#commercial_manage" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/estate-management.svg') }}" alt="estate-management.svg">
                            </div>
                            <h5>Estate Management</h5>
                            <p>Full or part-time Estate Managers to oversee facility management and soft services on-site
                            </p>
                            <a href="#estate_manage" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/owners.svg') }}" alt="owners.svg">
                            </div>
                            <h5>Managing Agents</h5>
                            <p>Property managing agents oversee the daily operations of buildings, handling maintenance,
                                tenant relations, rent collection, and ensuring legal compliance.</p>
                            <a href="#manage_agent" class="theme-btn">Read More</a>
                        </div>
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/online.svg') }}" alt="online.svg">
                            </div>
                            <h5>Online Services</h5>
                            <p>View levy accounts online, important property contact details and reports or submit
                                maintenance requests or queries online</p>
                            <a href="#online_service" class="theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <p class="m-0">As a Trafalgar client, you are very welcome to use our property management services,
                        which are comprised of:</p>
                    <div class="each_manage_section" id="community_scheme_management">
                        <h4><a href="javascript:void(0)">COMMUNITY SCHEME MANAGEMENT</a></h4>
                        <p>Trafalgar specializes in <a
                                href="{{ route('property-management.community-scheme-management') }}"><b> community scheme
                                    management </b></a>, offering comprehensive services for residential and mixed-use
                            developments across South Africa. As a trusted <a
                                href="{{ route('managing-agent.community-scheme-managing-agent') }}"><b>community scheme
                                    managing agent</b></a>, Trafalgar handles financial management, maintenance, legal
                            compliance, security, communication, administration and long-term planning. Their experienced
                            team ensures that communal areas are well-maintained, budgets are managed efficiently, and all
                            regulations are followed. With a proactive approach to dispute resolution, transparent
                            communication, and a focus on sustainability, <a
                                href="{{ route('property-management.property-management-company') }}"><b>Trafalgar</b></a>
                            ensures smooth operations and enhances the living experience for residents. By choosing <a
                                href="{{ route('/') }}"><b>Trafalgar</b></a>, property owners can enjoy a secure,
                            well-maintained, and harmonious community.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.community-scheme-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="hoa_manage">
                        <h4><a href="javascript:void(0)">SECTIONAL TITLE & HOA MANAGEMENT</a></h4>
                        <p>Trafalgar’s core business is the property management of sectional title schemes and homeowners
                            associations. Trafalgar understands that the management effectiveness of a property directly
                            affects peoples’ homes, lifestyles and the value of their primary assets, which is why we’re
                            dedicated to providing a comprehensive and tailored sectional title management service.Trafalgar
                            offers a comprehensive property management service which can be conveniently tailored to the
                            specific needs and context of individual properties. Each property managed by Trafalgar is
                            allocated a dedicated residential portfolio manager as a single point of entry and primary
                            communication channel.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.sectional-title-and-hoa-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="commercial_manage">
                        <h4><a href="javascript:void(0)">COMMERCIAL PROPERTY MANAGEMENT</a></h4>
                        <p>Trafalgar offers a comprehensive and tested commercial property management service catering for
                            all the management requirements associated with Commercial, Retail and Industrial property.
                            Effective financial and facility management are Trafalgar’s priority focuses and competitive
                            advantage, underpinned by well-established and customised infrastructure. Defining an accurate
                            property budget from the outset and reporting a monthly performance to budget with the standard
                            rent roll and creditors payment schedule, enables utility recoveries and variances to be tightly
                            managed.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.commercial-property-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="estate_manage">
                        <h4><a href="javascript:void(0)">ESTATE MANAGEMENT</a></h4>
                        <p>An Estate Manager will manage contractors, gardeners, cleaners, security guards and maintenance
                            workers, as well as conduct regular inspections and attend to urgent maintenance projects.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.estate-management') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="manage_agent">
                        <h4><a href="javascript:void(0)">PROPERTY MANAGING AGENTS</a></h4>
                        <p>A property managing agent is essential for effective <a
                                href="{{ route('property-management') }}"><b>property management</b></a>

                            , handling tenant relations, property maintenance, financial administration, and legal
                            compliance. , with over 50 years of experience, offers comprehensive services tailored to
                            meet the unique needs of property owners and individual properties. Our responsibilities
                            include tenant management, regular inspections, budget preparation, and conflict resolution,
                            ensuring smooth operations and tenant satisfaction. By partnering with <a
                                href="{{ route('property-management.property-management-service-provider') }}"><b>Trafalgar</b></a>,
                            property
                            owners can save time, reduce stress, and increase property value. With a proven track record
                            and a dedicated team, Trafalgar is your trusted partner in maximizing the success of your
                            property investment.
                        </p>
                        <span class="read-more">
                            <a href="{{ route('managing-agent') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="online_service">
                        <h4><a href="javascript:void(0)">ONLINE SERVICES</a></h4>
                        <p>As a Trafalgar client, you are very welcome to use our online services to update your property
                            management and account information. In the Property Portals you will have access to a wealth of
                            information about your property;rules, financials, contractors’ details, plans, a bulletin board
                            and much more. Simply log in using your pin and password, and gain access to a secure world of
                            online property management information.</p>
                        <span class="read-more">
                            <a href="{{ route('online-services') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section" id="">
                        <h4><a href="javascript:void(0)">CARETAKER SERVICES</a></h4>
                        <p>Trafalgar’s <a href="{{ route('property-management.caretaker-services') }}"><b>caretaker
                                    services</b></a> provide comprehensive property facility management solutions, ensuring
                            the efficient maintenance, security, and upkeep of residential and commercial buildings. Full or
                            part time caretakers oversee and manage routine maintenance, repairs, cleaning of communal
                            areas, waste disposal, gardening, and security monitoring. They act as the first point of
                            contact for tenants and residents, manage emergencies, and conduct regular property inspections
                            to prevent issues. Trafalgar’s caretakers are highly trained, reliable, and proactive, offering
                            <a href="{{ route('property-management.caretaker-services') }}"><b>tailored services</b></a>
                            to meet the specific needs and budget parameters of each property. With <a
                                href="{{ route('property-management.property-management-company') }}"><b>Trafalgar</b></a>,
                            properties remain safe, clean, and well-maintained, ensuring a high-quality environment for all
                            occupants.
                        </p>
                        <span class="read-more">
                            <a href="{{ route('property-management.caretaker-services') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">FREQUENTLY ASKED QUESTIONS</a></h4>
                        <p class="m-0">If An Owner Rents His Unit To A Third Party – Does He Have To Notify The Body
                            Corporate?</p>
                        <p class="m-0">Can An Owner Who Is In Arrears Vote At A General Meeting?</p>
                        <p class="m-0">What Is The Difference Between “Full Title” And “Sectional Title”?</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.faqs') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">SECTIONAL TITLE ACT, ANNEXURES & FAQ’S</a></h4>
                        <p>In 2011 the STSM Act were published to become in force on a date to be announced by the Minister.
                            The Act could not come in force before the Regulations to it have been finalized. Now finally on
                            2 October 2015 these Regulations have been published and opened for public comment for a period
                            of 30 days.</p>
                        <span class="read-more">
                            <a href="{{ route('property-management.stsm-act') }}">Read More</a>
                        </span>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">USEFUL PROPERTY MANAGEMENT LINKS</a></h4>
                        <ul class="pdfs">
                            <li><a href="{{ route('property-management-tips') }}">Property management tips representing a
                                    series of best practices identified over Trafalgar’s fifty year property management
                                    experience.</a></li>
                            <li><a href="{{ asset('storage/brochure/Full-Report-Pack-Sample.pdf') }}">Sample Property
                                    Management Report</a></li>
                            <li><a href="{{ route('property-management.easy-guide-to-body-corporate-resolutions') }}">Easy
                                    guide to
                                    Body Corporate Resolutions</a></li>
                        </ul>
                    </div>
                    <div class="each_manage_section" id="">
                        <h4><a href="javascript:void(0)">PROPERTY MANAGEMENT SERVICE PROVIDER</a></h4>
                        <p>A <a href="{{ route('property-management.property-management-service-provider') }}"><b>property
                                    management service provider</b></a> is essential for effective oversight of residential
                            and commercial properties. Trafalgar Property Management offers comprehensive and tailored
                            services, including tenant management, property maintenance, financial management, and legal
                            compliance. By handling tasks like tenant screenings, rent collection, and crisis management, we
                            help property owners save time, increase revenue, and reduce stress. Our expertise in legal
                            compliance and market trends ensures your property is well-managed and compliant. Choosing <a
                                href="{{ route('/') }}"><b> Trafalgar </b></a> means you can focus on growing your
                            investment while we manage day-to-day operations. <span class="read-more">
                                <a href="{{ route('property-management.property-management-service-provider') }}">Read
                                    More</a>
                            </span>
                    </div>
                    <div class="each_manage_section" id="">
                        <h4><a href="javascript:void(0)">PROPERTY MANAGEMENT COMPANY</a></h4>
                        <p>Engaging a professional <a
                                href="{{ route('property-management.property-management-company') }}"><b>property
                                    management company </b></a> is essential for optimizing property investments. <a
                                href="{{ route('property-management') }}"><b>Trafalgar Property Management </b></a> offers
                            a range of services, including tenant screening, property maintenance, financial management, and
                            legal compliance. By managing day-to-day operations, we help property owners save time, increase
                            revenue, and reduce stress. Our expertise ensures effective marketing and leasing, while our
                            proactive approach to maintenance enhances tenant satisfaction. With access to established
                            networks and resources, Trafalgar provides tailored solutions to meet the unique needs of each
                            client. Discover how we can support your <a
                                href="{{ route('property-management') }}"><b>property management</b></a>needs.<span
                                class="read-more">
                                <a href="{{ route('property-management.property-management-company') }}">Read
                                    More</a>
                            </span>
                    </div>
                    @include('frontPart.manage.quickLinksBlocks')

                </div>
                <div class="guldenland_sidebar">
                    <div class="sidelist">
                        <h4>Registration Certificates For Trafalgar Property Management (Pty) Ltd</h4>
                        <ul>
                            <li><a target="_blank"
                                    href="{{ asset('storage/websitepdf/Trafalgar Property Management PPRA Registration Certificate.pdf') }}">Property
                                    Practitioners Regulatory Authority (PPRA) Certificate
                                </a></li>
                            <li><a target="_blank"
                                    href="{{ asset('storage/websitepdf/Trafalgar-Property-Management-NAMA-Certificate-2022.pdf') }}">National
                                    Association of Managing Agents (NAMA) Certificate</a></li>
                            <li><a target="_blank"
                                    href="{{ asset('storage/websitepdf/Trafalgar Council for Debt Collectors Certificate 2023.pdf') }}">Council
                                    for Debt Collectors</a></li>
                            <li><a target="_blank"
                                    href="{{ asset('storage/websitepdf/Trafalgar-Professional-Indemnity-Cover-Certificate-2022.pdf') }}">Professional
                                    Indemnity Cover</a></li>
                            <li><a target="_blank"
                                    href="{{ asset('storage/websitepdf/Trafalgar-SAPOA-2022-Certificate.pdf') }}">South
                                    African Property Owners Association (SAPOA) Certificate</a></li>
                            <li><a target="_blank"
                                    href="{{ asset('storage/websitepdf/Trafalgar Property Management_BEE Certificate.pdf') }}">BEE
                                    Certificate</a></li>

                        </ul>
                    </div>
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
