@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management.sectional-title-management')->first(); @endphp

@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="{{ route('property-management') }}">Property Management</a></li>
                <li><a href="#">Sectional Title Management</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Sectional Title Management</h1>
                <div class="manage-paragraph">
                    <p>Trafalgar’s core business is the property management of sectional title schemes and home owners
                        associations. Trafalgar understands that the management effectiveness of a property directly affects
                        peoples’ homes, lifestyles and the value of their primary assets, which is why we’re dedicated to
                        providing a comprehensive and tailored sectional title management service. With over 50-years
                        experience, specialist systems and professional staff, Trafalgar offers a complete property
                        management service tailored to meet the needs of individual schemes. We are fully registered with
                        the Property Practitioners Regulatory Authority (PPRA), National Association of Managing Agents
                        (NAMA) and Council for Debt Collectors. Current registration certificates for all these regulatory
                        bodies are posted on this web site. Please click <a
                            href="{{ asset('storage/brochure/Sectional-Title-and-HOA-Property-Managment-EV.pdf') }}">here</a>
                        to see Trafalgar’s Sectional Title and HOA Property Management Brochure.</p>
                    <p>Each sectional title property managed by Trafalgar is allocated a dedicated sectional title portfolio
                        manager as a single point of entry and primary communication channel. All Trafalgar’s portfolio
                        managers have completed extensive sectional title and community scheme management training with
                        standard monthly training ongoing too. Trafalgar’s portfolio managers are supported by a support
                        team consisting of a Portfolio Administrator, debt collector and accountant as well as customised
                        property management, maintenance and document management computer information systems.</p>
                    <p>Effective financial management and reporting is a core component and competitive advantage of
                        Trafalgar’s sectional title property management service. Compiling and circulating detailed monthly
                        management reports including income statements, performance to budget and variance reports, levy
                        rolls, disbursement statements and credit control reports is a standard part of Trafalgar’s property
                        management service. For convenience, all our reports are available by email or online in real time.
                        We also prepare annual budgets, review financial performance monthly and prepare an annual audit
                        file at year end to promote a time efficient and cost effective audit. Levy roll packs are
                        circulated on the 1st working day of each month for the prior month with income statement packs
                        following by the 15th of the month as per our management agreements.</p>
                    <p>Monthly levy and utility payments by owners are made easy, as our infrastructure provides for
                        multiple payment channels including debit orders, stop orders, telephone banking, internet banking
                        and deposits at any Standard Bank branch nationally. Owners may log-in online to retrieve levy
                        account balances and detailed property related information and financial reports are available on a
                        property specific web site we call the Property Portal linked to www.trafalgar.co.za</p>
                </div>
                <h3 class="text-center">TRAFALGAR’S COMPREHENSIVE SECTIONAL TITLE MANAGEMENT SCOPE:</h3>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Dedicated Sectional Title Portfolio Manager And The Property
                                Management Team:</a></h4>
                        <ul>
                            <li>A dedicated and specialised team consisting of a sectional title portfolio manager,
                                Portfolio Administrator, debt collector and accountant will be assigned to manage your body
                                corporate</li>
                            <li>All portfolio managers are extensively trained in sectional title management and will have
                                completed a variety of relevant training courses together with a variety of in house courses
                            </li>
                            <li>The team structure ensures that the appropriate specialist skills are applied to the
                                management of your property and provides cover in the event of leave and training</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Billing And Collections:</a></h4>
                        <ul>
                            <li>Distribution of monthly levy statements to owners by post, courier, email and internet
                                options are all available, although email is the preferred channel due to energy,
                                convenience and green friendly considerations</li>
                            <li>Collection of monthly levies by debit order, electronic banking, direct deposit and branch
                                deposit are all available, while credit card payment service is provided at selected
                                branches</li>
                            <li>Credit control of all outstanding levies</li>
                            <li>Trafalgar is a fully registered Debt Collector and is therefore governed by the Debt
                                Collectors Act. Debt collection charges are therefore regulated and are charged directly to
                                the levy defaulter and recovered directly from the individual and not from the Body
                                Corporate. As a registered Debt Collector, we are able to blacklist levy defaulters which
                                affects their credit rating.</li>
                            <li>Billing of interest on arrears</li>
                            <li>Attorney collections liaison</li>
                            <li>Liaison with meter reading service companies for specific service / utility billing and
                                recoveries included with the monthly levy statements and collections</li>
                            <li>Issue of levy clearance certificates</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Disbursements:</a></h4>
                        <ul>
                            <li>Payment of approved creditors and municipal accounts</li>
                            <li>All disbursements approved and signed off in accordance with Trustee instructions and the
                                relevant legislation</li>
                            <li>Maintenance of electronic voucher files</li>
                            <li>Immediate SMS notification to all specified trustees on every payment made to creditors.
                            </li>
                            <li>Electronic automated e-mail requests are sent to all the trustees to obtain a minimum of two
                                trustees’ approval to pay creditors.</li>
                            <li>Netcash verification reports are obtained prior to paying all creditors to ensure that the
                                creditors invoice and banking details are correct.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Insurance And Property Financial Services:</a></h4>
                        <ul>
                            <li>Broker services for sectional title schemes to ensure appropriate insurance cover at
                                competitive rates.</li>
                            <li>Administration and disbursement of claims</li>
                            <li>Annual claims history reporting</li>
                            <li>Refurbishment loans</li>
                            <li>Levy factoring to enhance Body Corporate cash flow</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Meeting Attendance And Secretarial Service:</a></h4>
                        <ul>
                            <li>Attendance at four (4) trustees meetings per year as well as the Annual General Meeting.
                            </li>
                            <li>Preparation and distribution of notices of meetings, agendas and minutes.</li>
                            <li>Organisation and minuting of the Annual General Meeting</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Advisory Service:</a></h4>
                        <ul>
                            <li>Immediate advisory service regarding provisions of the Sectional Title legislation and other
                                relevant legislation</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Personnel Records:</a></h4>
                        <ul>
                            <li>Direct (electronic) payment of salaries and wages to staff</li>
                            <li>Calculation and payment of UIF and P.A.Y.E. deductions</li>
                            <li>Issuing of payslips to bodies’ corporate staff members</li>
                            <li>Keeping records of bodies corporate leave</li>
                            <li>Prompting trustees for bodies corporate staff annual bonuses</li>
                            <li>Maintenance of staff records</li>
                            <li>Advisory services for labour legislation issues and disputes</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Statutory Records:</a></h4>
                        <ul>
                            <li class="d-block">Maintenance of statutory records of the body corporate including:
                                <ul class="pl-3 pt-1">
                                    <li>Books of account</li>
                                    <li>Conduct rules and regulations thereto</li>
                                    <li>Registered sectional title plans</li>
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
                            <li>Maintenance administration to arrange quotes, booking contractors and facilitating invoice
                                approval by a dedicated maintenance administrator</li>
                            <li>All Trafalgar offices have panels of preferred contractors as maintenance partners: their
                                workmanship, regulatory body registration, insurance and labour legislation compliance and
                                cost effectiveness has been positively tested from extensive prior experience.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Internet And E-Mail:</a></h4>
                        <ul>
                            <li>Trafalgar’s website (www.trafalgar.co.za) offers our clients the opportunity to register
                                online in order to view their levy account details</li>
                            <li>Trustees and owners of sectional title schemes managed by Trafalgar can also register for
                                the ‘Property Portal’ to view monthly income and expense reports, rules, plans, contact
                                information and other relevant property management information.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Computer Systems:</a></h4>
                        <ul>
                            <li>Trafalgar utilises a specialised property management computer information system that
                                operates in real time – in other words all payments made or received show on the system
                                immediately. In addition, extensive development of the system over the last seven years has
                                been undertaken to ensure that system reports and functionality is optimised to keep in line
                                with current technology best practices.</li>
                            <li>Trafalgar also utilises a computerised document management and workflow system to both
                                securely and electronically archive relevant property related legal documentation and
                                automatically manage the workflow for creditors invoice approval and processing.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Take-On Assessment ‘Health Check’:</a></h4>
                        <ul>
                            <li>On taking on a complex, a sectional title take-on specialist will be assigned to ensure a
                                smooth transition to Trafalgar.</li>
                            <li>The person concerned will perform a ‘health check’ of the complex to confirm that all the
                                appropriate hand-over information is available and loaded, and that your complex and
                                management thereof is fully compliant with all the relevant regulations and legislation.
                            </li>
                            <li>After a smooth take-on has been achieved, a sectional title portfolio manager will be
                                selected by the take-on specialist to continue with the ongoing management of the complex.
                            </li>
                            <li>It is our experience that if the take-on of a complex is thorough and effective, the ongoing
                                success of the management service is assured.</li>
                            <li class="d-block">The Health Check includes:
                                <ul class="pl-3 pt-1">
                                    <li>Deeds search to confirm that correct owners and their details are loaded for levy
                                        billing and communication purposes</li>
                                    <li>Validation of sectional tile plans, PQ and levy schedule</li>
                                    <li>Budget review, identification of risks and formulation of recommendations</li>
                                    <li>Performance to budget review (PTB), assessment of reserves and evaluation of
                                        variances</li>
                                    <li>Assessment of maintenance plans</li>
                                    <li>Assessment of insurance cover</li>
                                    <li>Assessment of firefighting equipment and other relevant risk procedures</li>
                                    <li>Assessment of owner accounts, arrear levies and credit control effectiveness</li>
                                    <li>Assessment of compliance to relevant legislation</li>
                                    <li>Compilation of a report and action log to address identified gaps</li>
                                    <li>Compilation of a property management control schedule demonstrating required monthly
                                        operational activities to be managed and confirmed</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Additional Advisory And Support Services:</a></h4>
                        <ul>
                            <li>Recruitment of contractors and staff as required</li>
                            <li>Referral to specialized sectional title attorneys where necessary to update and modernize
                                conduct rules, together with guidance on how to approve updated conduct rules after drafting
                            </li>
                            <li>Attendance at special general meetings</li>
                            <li>The submission of Annual Tax Returns (IT14)</li>
                            <li>The submission and completion of Provisional and Annual Tax Returns</li>
                        </ul>
                    </div>
                    @include('frontPart.manage.faqs.sectionalTitleManagement')
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
