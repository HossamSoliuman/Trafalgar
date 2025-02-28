@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','about-us')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section about_top_banner">
        <div class="jobbanner-text">
            <h1>About Us</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="heading mb-4">
                <div class="manage-paragraph text-justify">
                    <p>Trafalgar’s core business is property management services for sectional title schemes and home owners associations across South Africa. Trafalgar has a successful 50-year property management track record, dating back to the opening of the first sectional title registers in South Africa. Trafalgar holds current registration certificates with all the regulatory bodies relevant to managing agents in South Africa: the Property Practitioners Regulatory Authority (“PPRA”), the National Association of Managing Agents (“NAMA”) and the Council for Debt Collectors.</p>
                    <p>Trafalgar combines specialist skills, customised computer information systems, a national infrastructure and economies of scale to provide a comprehensive property management service with client service excellence an overriding objective. Trafalgar’s current portfolio under management covers approximately 85 000 residential units in over 1 400 buildings nationally, managed by ten regional branches and over 550 staff.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph text-justify">
                        
                        <iframe class="mb-3" width="100%" height="400" src="https://www.youtube.com/embed/lgWRy_-xDII" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                        <h4>National Infrastructure:</h4>
                        <p>The Trafalgar Group operates across South Africa with wholly owned branch offices across most major metropolitan areas in South Africa including: Johannesburg, Pretoria, Durban, Cape Town, Port Elizabeth, East London and Knysna. Trafalgar has been managing residential properties since the first sectional title registers were opened. Being developers in our own capacity, we understand the scope and nature of property management required to enhance properties and their asset values. Property management and property financial services are our core businesses and primary strategic focus areas.</p>
                    
                        <h4>Property Management:</h4>
                        <p>Trafalgar Property Management understands the significant asset and emotional value of sectional title and home owners association properties and therefore the importance of robust and trusted property management services. That is why we’re dedicated to providing a comprehensive and tailored property management service to match the specific context of a property. With over fifty years of experience ’ experience as professional property managers, Trafalgar strives to add value to our clients’ lifestyles and property assets.</p>
                        <p>Trafalgar is fully registered with the Property Practitioners Regulatory Authority (“PPRA”), the National Association of Managing Agents (“NAMA”) and Council for Debt Collectors. Registration certificates with all Trafalgar’s registration details can be found under the Online Services heading on this web site.</p>
                        
                        <h4>Home Letting:</h4>
                        <p>Trafalgar Home Letting is the leading residential letting agency in South Africa, letting and managing residential properties across all major metropolitan areas. Trafalgar Home Letting has a large selection of homes to rent to suit all budgets and tastes.</p>
                        <p>If you’re looking for apartments, houses, freestanding homes or flats to rent, our professional team of letting consultants will make the process of searching, renting and moving into a new home as convenient and comfortable as possible.</p>
                        <p>For landlords and property investors, Trafalgar’s specialist multi-channel marketing, industry experience and brand visibility ensures that your residential property investments are quickly and effectively leased to the right tenant at a competitive rental. Trafalgar ensures that all the correct tenant screening and legal processes are followed with signing a new lease, thereby safeguarding and maximising rental income on rental properties.</p>
                        
                        <h4>Property Insurance And Financial Services:</h4>
                        <p>Trafalgar Financial Services “TFS” is an authorised financial services and credit provider and a specialist property insurance broker. With an insured book of in excess of R150 billion, longstanding relationships with respected insurance underwriters, specialised, FAIS registered staff, customised systems and infrastructure, we can offer tailored products, at highly competitive rates, supported by world-class customer service.</p>
                        
                        <h4>Commercial Property Management:</h4>
                        <p>Trafalgar offers a comprehensive and tested commercial property management and broking service catering for all the management requirements associated with Commercial, Retail & Industrial property. Effective financial management and reporting is a core business focus and competitive advantage, underpinned by well-established and customised infrastructure. This is the hallmark of our success in the commercial property market.</p>
                        <p>Trafalgar’s Commercial, Industrial and Retail property management services are based upon a detailed analysis of the specific requirements of the landlord as well as the inherent qualities of the portfolio. We pride ourselves on offering budgetary solutions to property portfolios increasing the longevity of returns to our clients.</p>
                    
                        <iframe class="mt-3" width="100%" height="400" src="https://www.youtube.com/embed/JxgeDF3eX7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                    </div>
                </div>
                <div class="guldenland_sidebar">
                     @include('frontPart/rightBar/rightBarQuickContactForm') 
                    @include('frontPart/rightBar/rightBarQuickLinkMenu') 
                   
                      @include('frontPart/rightBar/rightBarSocialIcon') 
                     @include('frontPart/rightBar/rightNewsLetter') 
                   
                  
                     <div class="sidelist">
                        
                        <h4>Registration Certificates For Trafalgar Property Management (Pty) Ltd</h4>
                      <ul>
                            <li><a target="_blank" href="{{ asset('storage/websitepdf/Trafalgar Property Management PPRA Registration Certificate.pdf') }}">Property Practitioners Regulatory Authority (PPRA) Certificate
</a></li>
                            <!--<li><a target="_blank" href="asset('storage/websitepdf/Trafalgar-Property-Management-NAMA-Certificate-2022.pdf')">National Association of Managing Agents (NAMA) Certificate</a></li>-->
                            <!--<li><a target="_blank" href="asset('storage/websitepdf/Trafalgar Council for Debt Collectors Certificate 2023.pdf')">Council for Debt Collectors</a></li>-->
                            <!--<li><a target="_blank" href="asset('storage/websitepdf/Trafalgar-Professional-Indemnity-Cover-Certificate-2022.pdf')">Professional Indemnity Cover</a></li>-->
                            <!--<li><a target="_blank" href="asset('storage/websitepdf/Trafalgar-SAPOA-2022-Certificate.pdf')">South African Property Owners Association (SAPOA) Certificate</a></li>-->
                            <!--<li><a target="_blank" href="asset('storage/websitepdf/Trafalgar Property Management_BEE Certificate.pdf')">BEE Certificate</a></li>-->
                            
                        </ul>
                    </div>
                    <div class="sidelist">
                        <h4>Registration certificates for Trafalgar Financial Services (Pty) Ltd</h4>
                        <ul>
                            <li><a href="{{ asset('storage/trafalgarCretificate/Financial Services Board.pdf') }}">Financial Services Board</a></li>
                            <li><a href="{{ asset('storage/trafalgarCretificate/Registered Credit Provider.pdf') }}">Registered Credit Provider</a></li>
                            <li><a href="{{ asset('storage/trafalgarCretificate/Trafalgar-Information-Officer-Certificate-2022.pdf') }}">FIA Membership Certificate</a></li>
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
