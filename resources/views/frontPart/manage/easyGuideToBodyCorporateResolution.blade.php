
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.easy-guide-to-body-corporate-resolutions')->first(); @endphp

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
              <li><a href="#">Easy Guide To Body Corporate Resolutions</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Easy Guide To Body Corporate Resolutions</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <b>The Body Corporate (BC) needs a UNANIMOUS RESOLUTION to:</b>
                        <ul>
                            <li>Alienate a portion of the common property</li>
                            <li>Let a portion of the common property for a period of 10 years or more to an owner or occupier</li>
                            <li>Let a portion of the common property to someone other than an owner or occupier (no matter the period)</li>
                            <li>Extend the period of the Section 25 right reserved to extend the scheme</li>
                            <li>Create exclusive use rights ito the plans</li>
                            <li>Amend the Management Rules (also subject to approval by CSOS)</li>
                            <li>Decide how to distribute funds received on expropriation of the common property</li>
                            <li>Determine if the building(s) are deemed to be destroyed</li>
                            <li>Decide if the building(s) deemed to be destroyed must be rebuilt</li>
                            <li>Grant loans from body corporate funds</li>
                            <li>Make alterations or improvements to the common property that is not reasonably necessary (previous luxurious improvement)</li>
                        </ul>
                        <b>The Body Corporate (BC) needs WRITTEN CONSENT of ALL OWNERS to:</b>
                        <ul>
                            <li>Alienate, exercise or cede a Section 25 right to extend the scheme (also bondholder approval)</li>
                            <li>Change the purpose of use of a section or exclusive use area</li>
                            <li>Purchase land to extend the common property</li>
                        </ul>
                        <b>The Body Corporate (BC) needs a SPECIAL RESOLUTION to:</b>
                        <ul>
                            <li>Take legal action against the Developer</li>
                            <li>Insure the BC against other risks over and above those prescribed</li>
                            <li>Purchase or otherwise acquire, take transfer of, mortgage, sell, give transfer of or hire or let units (when essential for the proper fulfillment of the BC duties)</li>
                            <li>Borrow money for the performance of the BC functions and exercise of the BC powers</li>
                            <li>Short term lease of common property to an owner or occupier</li>
                            <li>Cancellation of an exclusive use right created ito the plans</li>
                            <li>Create a servitude</li>
                            <li>Give an owner permission to extend the boundaries or floor area of his section</li>
                            <li>Amend the Conduct Rules (also subject to approval by CSOS)</li>
                            <li>Create a rule that nominated values be used instead of the PQ’s</li>
                            <li>Pay a honorarium to Trustees who are members</li>
                            <li>Determine that the general meetings of the BC may be held outside the local municipal area where the scheme is situated</li>
                            <li>Appoint an Executive Managing Agent</li>
                            <li>Resolve that the contract of the Managing Agent be cancelled (2 month’s notice)</li>
                            <li>Where the BC wants to make alterations or improvements to the common property that is not necessary (previously non-luxurious) and an owner requested a meeting to be held</li>
                            <li>Install prepaid meters (60 days’ notice)</li>
                        </ul>
                        <b>The Body Corporate (BC) needs an ORDINARY RESOLUTION to:</b>
                        <ul>
                            <li>Remove a Trustee</li>
                            <li>Pay an honorarium to a Trustee that is not a member</li>
                            <li>Request the Trustees to appoint a Managing Agent</li>
                            <li>Cancel the Management Agreement after it expired (can also be done on a Trustee resolution)</li>
                            <li>Install separate utility meters</li>
                            <li>Approve an improvement by an owner to an exclusive use area</li>
                            <li>Approve the admin fund budget and reserve fund budget</li>
                            <li>Approve the minutes of a previous general meeting</li>
                            <li>Approve the schedule of replacement values of units</li>
                            <li>Approve the 10 year Maintenance Plan</li>
                        </ul>
                    </div>
                    
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">The Next Question Will Be – How Do We Obtain These Resolutions?</a></h4>
                        <p>All decisions of the BC are made by resolutions – there are three types of BC resolutions:</p>
                        <ul>
                            <li>Ordinary resolutions</li>
                            <li>Special resolutions</li>
                            <li>Unanimous resolutions</li>
                        </ul>
                        <p>Resolutions must be stipulated on the notice of the meeting.  The wording must be clear and not in any way ambiguous.  And any documents relevant to the resolution must be attached to the notice of the meeting.</p>
                        <p>You will see that in the process to achieve a resolution the Act talks about a vote “in number” and “in value”  What this means is the following:</p>
                        <ul>
                            <li><p><b>“In number”</b> – in this case they refer to the members. To achieve 75% “in number” means that you need 75% of the total number of members to vote in favour of the resolution.  The principle of one member one vote applies here. If there are 10 members you need 7,5 – in other words 8 members – to vote in favour of the resolution.  (You always have to round up; if you need 7,5 based on the percentage you will need 8 to achieve it)</p></li>
                            <li><p><b>“In value”</b> – in this case they refer to the participation quotas (or nominated values if that applies). The weight of the votes here is based on the participation quota – not the one member one vote principle.  All the participation quotas together adds up to 100 so when you need 75% in value you need to add up the votes of those in favour in terms of the participation quotas of the section and when you have at least 75% of the participation quotas voting in favour then the resolution is passed.</p></li>
                        </ul>
                        <b>a) ORDINARY RESOLUTIONS</b>
                        <p>If a decision does not require a special or unanimous resolution it will be an ordinary resolution and will be determined by the majority vote of owners. (51% or more must vote in favour of the resolution for it to be passed) For example approving the budget or voting for Trustees</p>
                        <p>When the new STSM Act came into force on 7 Oct 2016 the manner of voting on ordinary resolutions changed from one section one vote to voting in value.  That means that you will need 51% or more of the PQ’s (or nominated values if that applies) to vote in favour of the resolution for it to be passed.</p>
                        <b>b) SPECIAL RESOLUTIONS</b>
                        <p>The STA and STSM Act provides for certain instances where a decision can only be taken by special resolution of the BC.</p>
                        <p>It is possible to obtain a special resolution in two ways – by having a meeting or by Round Robin.</p>
                        <p>If it is decided to have a meeting the following procedure must be followed:</p>
                        <ul>
                            <li>At least 30 days’ notice must be given for the meeting (unless the rules provide for shorter notice in some instance)</li>
                            <li>Notice must be sent to all the persons prescribed</li>
                            <div class="inner_layout">
                                <p>Quote from the STSM Act:</p>
                                <p>PMR 15(1) Subject to sub-rule (7), at least 14 days’ written notice of a general meeting specifying the place, date and hour of the meeting must be given to:</p>
                                <p>(a) all members;</p>
                                <p>(b) all registered bondholders;</p>
                                <p>(c) all holders of future development rights; and</p>
                                <p>(d) the managing agent.</p>
                            </div>
                            <li>The notice must include all items as prescribed</li>
                            <div class="inner_layout">
                                <p>Quote from the STSM Act:</p>
                                <p>PMR 15(3)The notice of a general meeting must be accompanied by at least –</p>
                                <p>(a) an agenda, as required in terms of these rules;</p>
                                <p>(b) a copy or comprehensive summary of any document that is to be considered or approved by members at the meeting; and</p>
                                <p>(c) a proxy appointment form in the prescribed format.</p>
                            </div>
                            <li>The notice must be delivered as prescribed</li>
                            <div class="inner_layout">
                                <p>Quote from the STSM Act:</p>
                                <p>Section 6 (3) The notice contemplated in subsection (2) must be—</p>
                                <p>(a) delivered by hand to a member;</p>
                                <p>(b) sent by pre-paid registered post to the address of a member’s section in the relevant scheme; or</p>
                                <p>(c) sent by pre-paid registered post to a physical or postal address in the Republic of South Africa that a member has chosen in writing for the purposes of such notice.(4) In addition to subsection (3), a notice contemplated in subsection (2) may also be sent to a member by fax or email</p>
                            </div>
                            <li>At the meeting a normal quorum must be present (either one third or two thirds of the total votes as prescribed) – Some people incorrectly think that a 75% quorum is needed.</li>
                            <li>Everyone at the meeting is entitled to vote</li>
                            <li>At least 75% of the owners present or represented (counted in number AND in value) at the meeting must vote in favour of the resolution. It is important to count the votes separately – first in number and then in value – to ensure that in both instances the 75% requirement is achieved</li>
                        </ul>
                        <p>If it is decided to pass the resolution on a Round Robin basis the proposed resolution must be circulated to all owners and approved by at least 75% of the owners (counted in number and in value).</p>
                        <p>The STSM Act since 7 October 2016 makes provision for the BC or an owner who is unable to achieve a special resolution to approach the Chief Ombud for relief.  Before this it was only possible when unable to achieve a unanimous resolution and then to approach a court.</p>
                        <p>The STSM Act (since 7 Oct 2016) makes provision for instances where a special resolution is passed by less than 50% of the total value of all member’s votes:</p>
                        <ul>
                            <li class="d-block">The BC must not take any action to implement that resolution for one week after the meeting; unless the Trustees resolve that there are reasonable grounds to believe that immediate action is needed to either:
                                <ul class="pl-3 pt-1">
                                    <li>Ensure safety, or</li>
                                    <li>Prevent significant loss or damage to the scheme</li>
                                </ul>
                            </li>
                            <li>Within the 7 days members holding at least 25% of the total votes of all members in value may request that another SGM be held to reconsider the resolution</li>
                            <li class="d-block">If members so request a meeting the Trustees must not implement the resolution unless:
                                <ul class="pl-3 pt-1">
                                    <li>It is again past by special resolution</li>
                                    <li>A quorum is not present within 30 minutes of the time set for the meeting</li>
                                </ul>
                            </li>
                        </ul>
                        <b>c) UNANIMOUS RESOLUTION</b>
                        <p>The STA and STSM Act provides for certain instances where a decision can only be taken by unanimous resolution of the BC.</p>
                        <p>Despite the meaning of the word a unanimous resolution is not necessarily a resolution passed by ALL the owners. And where it says written permission is needed from ALL owners you cannot call it a unanimous resolution.</p>
                        <p>It is possible to obtain a unanimous resolution in two ways – by having a meeting or by Round Robin.</p>
                        <p>If it is decided to have a meeting the following procedure must be followed:</p>
                        <ul>
                            <li>At least 30 days’ notice must be given for the meeting (unless the rules provide for shorter notice in some instance)</li>
                            <li>Notice must be sent to all the persons prescribed</li>
                            <div class="inner_layout">
                                <p>Quote from the STSM Act:</p>
                                <p>PMR 15(1). Subject to sub-rule (7), at least 14 days’ written notice of a general meeting specifying the place, date and hour of the meeting must be given to:</p>
                                <p>(a) all members;</p>
                                <p>(b) all registered bondholders;</p>
                                <p>(c) all holders of future development rights; and</p>
                                <p>(d) the managing agent.</p>
                            </div>
                            <li>The notice must include all items as prescribed</li>
                            <div class="inner_layout">
                                <p>Quote from the STSM Act:</p>
                                <p>PMR 15(3)The notice of a general meeting must be accompanied by at least –</p>
                                <p>(a) an agenda, as required in terms of these rules;</p>
                                <p>(b) a copy or comprehensive summary of any document that is to be considered or approved by members at the meeting; and</p>
                                <p>(c) a proxy appointment form in the prescribed format.</p>
                            </div>
                            <li>The notice must be delivered as prescribed</li>
                            <div class="inner_layout">
                                <p>Quote from the STSM Act:</p>
                                <p>Section 6 (3) The notice contemplated in subsection (2) must be—</p>
                                <p>(a) delivered by hand to a member;</p>
                                <p>(b) sent by pre-paid registered post to the address of a member’s section in the relevant scheme; or</p>
                                <p>(c) sent by pre-paid registered post to a physical or postal address in the Republic of South Africa that a member has chosen in writing for the purposes of such notice.(4) In addition to subsection (3), a notice contemplated in subsection (2) may also be sent to a member by fax or email.</p>
                            </div>
                            <li>At the meeting a special quorum must be present – 80% of all members present or represented; counted in number and in value</li>
                            <li>Everyone at the meeting is entitled to vote</li>
                            <li>ALL the members present AND voting at the meeting must then vote in favour of the resolution. In practical terms this means that should there be a quorum of 80% of the members in number and value and only 2 vote and vote in favour and all the others present at the meeting abstains then the resolution is passed.History: Under the previous Act (before 7 Oct 2016) an abstention was counted as a vote in favour – this is no longer the case. Now an abstention is just what it is – no vote made.</li>
                            <li>Where the unanimous resolution would have an unfairly adverse effect on any member the resolution is not effective unless that member consents in writing within 7 days from the date of the resolution</li>
                        </ul>
                        <p>If it is decided to pass the resolution on a Round Robin basis the proposed resolution must be circulated to all owners and approved by ALL the owners.</p>
                        <p>The STSM Act since 7 October 2016 makes provision for the BC or an owner who is unable to achieve a unanimous resolution to approach the Chief Ombud for relief.  Before this it was only possible to approach a court.</p>
                    </div>
                    
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
