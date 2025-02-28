
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.stsm-act')->first(); @endphp

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
              <li><a href="#">STSM Act</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Sectional Title Scheme Management Act (STSM Act) And Proposed Regulations</h1>
                <div class="manage-paragraph text-justify">
                    <p>In 2011 the STSM Act were published to become in force on a date to be announced by the Minister.  The Act could not come in force before the Regulations to it have been finalized. Now finally on 2 October 2015 these Regulations have been published and opened for public comment for a period of 30 days.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <h4><a href="#">Sectional Titles Act (ST Act) vs STSM Act</a></h4>
                        <p>Looking at the new Act – that is not open for public comment and will be passed as is once the Regulations have been finalized – there are certain important things our complexes need to take note of.</p>
                        <p>The history of it is that it was decided to remove all the management issues addressed in the ST Act and move it to the STSM Act.  Some things were moved as is and some were amended and a couple of new things added.  (NB this is not law yet)</p>
                        <b>Definitions</b>
                        <ul>
                            <li>A couple of new definitions were added to the STSM Act and some of the ST Act ones were amended slightly – nothing major.  One thing that will definitely affect our Schemes is that abstention on the vote for a unanimous resolution is no longer going to be counted as a vote in favour so it will be even more difficult to get a unanimous resolution passed.</li>
                        </ul>
                        <b>Bodies Corporate</b>
                        <ul>
                            <li>The Developer who do not convene the first General meeting (or Inaugural meeting as we refer to it) as prescribed will now be liable on conviction of a fine as well as imprisonment – it used to be either or.</li>
                        </ul>
                        <b>Functions of the Body Corporate</b>
                        <ul>
                            <li>The STSM Act refers to a new animal that will be introduced to all Schemes – the Reserve fund – this is discussed in more details in the Regulations.</li>
                            <li>The Chief Ombud must also be informed if the Domicilium of the Body Corporate changes</li>
                        </ul>
                        <b>Liability for contributions</b>
                        <ul>
                            <li>Levies and Special Levies may be recovered by application to the Ombud – they removed the procedure that allows Schemes to take legal action against defaulters, but it is not clear that this avenue is no longer available as further on in the STSM Act and Regulations there is reference to a court judgement or order from a Magistrate or Judge.</li>
                            <li>Special Levies will – on the sale of a unit – be dealt with in the same way as normal Levies – it will become the liability prorata of the new owner from the date of registration of the unit in his name.</li>
                        </ul>
                        <b>Powers of Bodies Corporate</b>
                        <ul>
                            <li>A special resolution will be needed for the Body Corporate (BC) to purchase, sell or let units</li>
                            <li>A special resolution will be needed for the BC to be able to borrow money</li>
                            <li>A unanimous resolution will be needed to extend the period of any Section 25 right</li>
                        </ul>
                        <b>Meetings of the Body Corporate</b>
                        <ul>
                            <li>If there is a Special or Unanimous Resolution to be passed the notices of the meeting must still be hand delivered or sent by registered mail but in addition to that  (in other words over and above that and not instead of) the notices can also be faxed or emailed.</li>
                            <li>A controversial one – People will only be allowed to have two proxies maximum for a meeting – our question is – how will that affect achieving a quorum for a meeting?</li>
                            <li>Another controversial one – for votes calculated in number one member will have one vote – no longer one section one vote – in other words even if you are the registered owner of 4 sections you will only have one vote.  I think that they realized that this is not a good idea because in the proposed Regulations they state that all voting must be done in value (by participation quotas/nominated values).</li>
                            <li>When any owner is adversely affected by a unanimous resolution he must give written consent to the resolution within 7 days after the resolution has been passed by a meeting</li>
                            <li>Currently it is possible to go to court for relief if it is not possible to pass a unanimous resolution – it is changed to state that for both special and unanimous resolutions one can ask for relief from the Ombud to get it passed</li>
                        </ul>
                        <b>Rules</b>
                        <ul>
                            <li>The Developer may amend the Management or Conduct Rules of the Scheme when submitting an application for the opening of the sectional title register – but it must now be approved by the Ombud.</li>
                            <li>If the Body Corporate amend the Management or Conduct Rules it must be lodged to the Ombud for approval; He must examine the Rules and approve or not approve them and on approval issue a certificate to that effect.  Rules will only become enforceable from the date of the certificate from the Ombud</li>
                            <li>The BC must have the Rules available at Trustee meetings as well as General meetings</li>
                            <li>It has been clarified that exclusive use rights can be conferred to owners in either the Management or Conduct Rules – currently it only states “in terms of the Rules”</li>
                            <li>There are rulings made in terms of Schedule 1 and 2 Rules that were used under the 1971 Act but it is not clear and we will be asking clarification thereof</li>
                        </ul>
                        <b>Duties of owners</b>
                        <ul>
                            <li>The only amendment is that owners must notify the BC of any change of occupancy of the section</li>
                        </ul>
                        <b>Administrator</b>
                        <ul>
                            <li>Any judgement creditor can approach the court for the appointment of an Administrator – the limitation of “not less than R500” were removed</li>
                            <li>It is specified that a Magistrates Court must be approached in this regard</li>
                            <li>The Administrator may only be appointed for a fixed period</li>
                            <li>The Magistrates Court directs the powers and duties of the Administrator</li>
                            <li>The Administrator must exercise the powers to address the problems as soon as reasonably possible</li>
                            <li>The Administrator must now convene and preside at meetings and must lodge the notices and minutes of these meetings to the Ombud</li>
                            <li>The Administrator must give the Ombud written reports every 3 months (or shorter intervals as per the Court)</li>
                            <li>The Magistrate may remove/replace the Administrator; may extend the period; may amend the terms of the appointment</li>
                        </ul>
                        <p>Again to be noted that the above is not law yet.</p>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="#">STSM Act Regulations</a></h4>
                        <p>In the proposed regulations the following was added:</p>
                        <ul>
                            <li>In the definitions distinction is made between primary sections – the flat/house/office and utility sections – a garage/storeroom/servants quarters that is a section.</li>
                            <li class="d-block">The Regulations set out minimum amounts for the reserve funds:
                                <ul class="pl-3 pt-1">
                                    <li>When calculating it what needs to be budgeted for the Reserve Fund for the forthcoming year the following should be done:</li>
                                    <p class="m-0">First you have to see what the reserve balance is sitting at, at year-end.</p>
                                    <p class="m-0">Then calculate what the total contributions to the administration fund were for the past financial year (these are monies received to cover the operating expenses of the building)</p>
                                    <p class="m-0">Then take the reserve fund balance (determined in 1) divided by the contributions (determined in 2) and multiply it by 100 to get a percentage</p>
                                </ul>
                            </li>
                            <li>If it is less than 25% then – 15% of the total contributions budgeted for the administrative fund (the levies budgeted for, for the forthcoming year to cover the operating expenses of the building) must be budgeted for the reserve fund</li>
                            <li>If it is greater than 100% -then there is no specific amount that needs to be budgeted for the reserve fund and discretion can be used as to what to budget for this</li>
                            <li>If it is greater than 25% and less than 100% – then the budgeted reserve needs to equal the value of budgeted contributions to the administration fund for the forthcoming year, specifically for repairs & maintenance</li>
                            <p class="m-0">We are raising the question as to what will happen if a scheme does not adhere to this – i.e. not set up a reserve fund</p>
                            <ul>
                                <li class="d-block">The regulations now stipulate the risks that the BC must be insured for:
                                    <ul class="pl-3 pt-1">
                                        <li>Lightning, explosion and smoke – was fire, lightning and explosion</li>
                                        <li>Storm, tempest, windstorm, hail and flood – was storm, tempest and flood</li>
                                        <li>Earthquake and subsidence – was just earthquake – we will raise the question as to why subsidence must be included seeing that that will increase the premium and not all complexes need to be covered for it</li>
                                        <li>Water escape, including bursting or overflowing of water tanks, apparatus or pipes – was bursting or overflowing of water tanks, apparatus or pipes</li>
                                        <li>Impact by aircraft and vehicles – was aircraft and other aerial devices or articles dropped therefrom and impact with any of the said buildings or improvements by any road vehicle, horses or cattle</li>
                                        <li>What is no longer mentioned is – loss of occupation or loss of rent in respect of any of the above risks</li>
                                    </ul>
                                </li>
                                <li class="d-block">There are prescribed forms for the following:
                                    <ul class="pl-3 pt-1">
                                        <li>To notify the Ombud of the BC’s service address (Domicilium)</li>
                                        <li>To notify the Ombud of changing the Rules</li>
                                        <li>Prescribed proxy form</li>
                                    </ul>
                                </li>
                                <li>It is stipulated which of the Prescribed Management Rules the Developer may amend when submitting an application for opening the sectional title register</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="#">STSM Prescribed Management Rules (PMR)</a></h4>
                        <p>Several PMR’s were amended and some of the current PMR’s were even omitted.</p>
                        <b>Definitions</b>
                        <ul>
                            <li>Accounting Officer falls away – We are asking the question as to what will happen with Schemes who amended PMR 40 giving them the right to appoint an Accounting Officer.</li>
                            <li>Some new definitions were added especially in reference to the Ombud Service and the reserve fund</li>
                        </ul>
                        <b>Service address</b>
                        <ul>
                            <li>This is what is currently referred to as the Domicilium</li>
                            <li>The BC must determine the Service address – was Trustees shall determine</li>
                            <li>The Trustees may add alternative service address – fax/email/other address</li>
                            <li>Change of the address is effective when lodged at the Ombud – was Registrar of Deeds</li>
                            <li>Service address of a member is by default the address of his primary section but can be amended to another physical, postal, fax or email address – written notification to the BC</li>
                            <li>Service address of an occupier is the physical address of the section</li>
                        </ul>
                        <b>Trustees</b>
                        <ul>
                            <li>The provision that there may not be less than two Trustees was omitted but further on the provision is made that you need at least two Trustees for some instances.</li>
                            <li>Where there is less than 4 sections all members will be Trustees without having to be elected</li>
                            <li>If there are more than 4 members the members who are owners of primary sections must determine the number of Trustees to be elected</li>
                            <li>We are asking the question as to what about complexes with exactly 4 members</li>
                        </ul>
                        <b>Requirements for office and disqualification of Trustees</b>
                        <ul>
                            <li>The provision that the majority of the Trustees must be owners or spouses of owners was omitted</li>
                            <li class="d-block">The occasions when a Trustee shall cease to hold office were amended/added to as follows:
                                <ul class="pl-3 pt-1">
                                    <li>Now – when declared by the Court to be of unsound mind</li>
                                    <li>Convicted (in RSA or elsewhere) of theft, fraud, perjury or any other offence involving dishonesty – We will be raising the question as to who will be responsible to do background checks on people nominated to be Trustees</li>
                                    <li>Sentenced to prison without the option of a fine</li>
                                    <li>Removed from office of trusts iro misconduct iro fraud or misappropriation of money</li>
                                    <li>The provision that if a Trustee is in arrears with levies for more than 60 days and fails to pay the account after having been given 7 days was amended – now Fails or refuses to pay the BC any amount due after a court or adjudicator has given judgement or order for payment – We will be commenting on this seeing that it can take a long time to obtain judgement or payment order and in the meanwhile the person can happily be a Trustee</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Nomination, election and replacement of Trustees</b>
                        <ul>
                            <li>Replacement Trustee take the place of what is referred to as an alternate Trustee</li>
                        </ul>
                        <b>Trustee meetings and decisions</b>
                        <ul>
                            <li>It was added that Trustees must meet – it does not specify how regularly they must meet though</li>
                            <li>Trustees must adjourn and otherwise regulate their meetings as they think fit – subject to the Act, Rules and common law of meetings</li>
                            <li>Trustees must exercise the powers and functions of the BC in accordance to BC resolutions and Trustee resolutions</li>
                            <li>They must apply the BC funds in accordance with the budget approved at a general meeting</li>
                            <li>They must compile minutes of each Trustee and General meeting</li>
                            <li>They must distribute the minutes to the people entitled to receive notice of the meeting asap, but not later than 7 days after the meeting</li>
                        </ul>
                        <b>Validity of actions of Trustees</b>
                        <ul>
                            <li>A Trustee resolution must be passed to determine which of the Trustees are given authority to sign documents on behalf of the BC</li>
                        </ul>
                        <b>Calling and attendance at Trustee meetings</b>
                        <ul>
                            <li>Trustees may by written resolution set dates and an agenda for future Trustee meetings – delivery of this resolution will be viewed as adequate notice of all such future meetings</li>
                            <li>The controversial provision that stated that owners may only attend Trustee meetings on invitation and may not speak at those meetings have been amended – Members, registered bondholders, holders of future development rights and the Managing agent may attend Trustee meetings and may speak at Trustee meetings, but they are not allowed to attend parts of the meeting that is a discussion of contraventions of the Act or the Rules or any other matter where the Trustees feel that their presence will interfere with the interest of the BC or any person’s privacy</li>
                            <li class="d-block">If a member / registered bondholder / holder of a future development right give written request to receive notices of Trustee meetings they must be:
                                <ul class="pl-3 pt-1">
                                    <li>Given notice of each meeting</li>
                                    <li>Given a copy of the resolution if future dates are set</li>
                                    <li>Given notice of adjournment</li>
                                    <li>May be charged for the cost of delivery of such documents</li>
                                </ul>
                            </li>
                            <li class="d-block">Trustee meetings may be held by telephone or other method if:
                                <ul class="pl-3 pt-1">
                                    <li>Method is accessible to all Trustees and other persons entitled to attend</li>
                                    <li>All persons must be able to communicate with each other during the meeting</li>
                                    <li>Chairman must be able to confirm (with reasonable certainty) the identity of participants</li>
                                    <li>Person who attends such a meeting is considered present in person at the meeting</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Chairperson of the Trustees</b>
                        <ul>
                            <li>If the BC have only two members there will be no Chairperson</li>
                            <li>Removal as the Chairperson does not automatically remove him as a Trustee</li>
                        </ul>
                        <b>Quorum for Trustee meetings</b>
                        <ul>
                            <li>If a quorum is not present within 30 minutes the Trustees present (but not less than 2) must adopt interim resolutions on each item of the agenda</li>
                            <li class="d-block">Such interim resolutions only takes effect once
                                <ul class="pl-3 pt-1">
                                    <li>Confirmed at next trustee meeting (where quorum is present)</li>
                                    <li>Confirmed by written resolution signed by all Trustees</li>
                                </ul>
                            </li>
                            <li>Adjournment of meeting falls away – was PMR 17</li>
                        </ul>
                        <b>Voting at Trustee meetings</b>
                        <ul>
                            <li>A motion at a Trustee meeting does not have to be seconded</li>
                            <li class="d-block">Trustees adopt decisions by resolution adopted by majority vote
                                <ul class="pl-3 pt-1">
                                    <li>At a Trustee meeting</li>
                                    <li class="d-block">Sent to each Trustee
                                        <ul class="pl-3 pt-1">
                                            <li>With text of proposed resolution</li>
                                            <li>Instructing them to sign as agreement – we are asking the question if emails will be acceptable</li>
                                            <li>Specify closing date for receipt of signatures</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <b>Owners meetings</b>
                        <ul>
                            <li>Must also give notice of general meetings to all future development right holders</li>
                            <li>A person entitled to notice of meetings may waive that right or revoke that waiver</li>
                            <li class="d-block">The notice must be accompanied by:
                                <ul class="pl-3 pt-1">
                                    <li>Agenda (as prescribed)</li>
                                    <li>Copy or comprehensive summary of any document to be considered/approved</li>
                                    <li>Proxy form (prescribed form)</li>
                                </ul>
                            </li>
                            <li class="d-block">Registered bondholders / future development right holders / Managing Agents:
                                <ul class="pl-3 pt-1">
                                    <li>May not propose a motion to be voted on</li>
                                    <li>Are not entitled to attend any part of the meeting if the meeting resolves that their presence would reasonably interfere with the interest of the Body Corporate or any person’s privacy</li>
                                </ul>
                            </li>
                            <li class="d-block">Notice of meetings must be delivered to:
                                <ul class="pl-3 pt-1">
                                    <li>Members at their service address – same</li>
                                    <li>Other persons at the physical / postal / fax or email address given to the BC</li>
                                </ul>
                            </li>
                            <li>A General meeting may be called on 7 days’ notice – if necessary due to urgency – by Trustee resolution (except in case of meeting about improvements to common property)</li>
                            <li>A General meeting may be called on less than 14 days’ notice if this is agreed to in writing by all persons entitled to attend.</li>
                            <li>Voting may proceed despite the lack of notice required by this rule – if all persons entitled to receive notice waive their right to notice in writing</li>
                        </ul>
                        <b>First General meeting (Inaugural meeting)</b>
                        <ul>
                            <li class="d-block">The Developer must include with the notice of the meeting:
                                <ul class="pl-3 pt-1">
                                    <li>Agenda as prescribed</li>
                                    <li>Documents as prescribed</li>
                                    <li>Comprehensive summary of the rights and obligations of the BC under policies and contracts referred to</li>
                                </ul>
                            </li>
                            <li class="d-block">The Agenda must include – only the new things mentioned here:
                                <ul class="pl-3 pt-1">
                                    <li>Motion to approve – with or without amendment the Developer’s recon (income and expenses from the date of first occupation to date of establishment of Body Corporate</li>
                                    <li>Financial statements from date of establishment to date of notice of meeting</li>
                                    <li>Subject to section 15(2) of the Act (no debt arising  from any agreement between the developer and another person is enforceable against the BC) – a motion to ratify or not ratify the terms of any contract entered into by the Developer on behalf of the BC</li>
                                </ul>
                            </li>
                            <li class="d-block">Motion confirming that the Developer has –
                                <ul class="pl-3 pt-1">
                                    <li class="d-block">Furnished the meeting with copies of the documents referred to in section 2(8) of the Act and in this rule
                                        <ul class="pl-3 pt-1">
                                            <li>Copy of the sectional plan</li>
                                            <li>Rates clearance certificate from Council as at date of establishment of the BC</li>
                                            <li>Proof of income and expenses from date of first occupation to date of establishment of BC</li>
                                            <li>Paid over any residue referred to in Section 2(9) of the Act – resulting from income and expenses from date of first occupation to date of establishment of BC</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Motion to appoint auditor to audit Developer’s recon and financial statements</li>
                            <li>When voting on Developer’s recon & financial statements and the contracts entered into by the Developer and the motion if the Developer furnished the prescribed documents and paid over the residue – any vote held or controlled by the Developer is suspended</li>
                            <li class="d-block">Developer must at or before the first general meeting furnish the BC with copies of:
                                <ul class="pl-3 pt-1">
                                    <li>All building plans approved by Council – new</li>
                                    <li>Any encroachment permit or other document issued by Council ito improvements in the scheme</li>
                                    <li>Plans showing the location of all pipes, wires, cables and ducts (as per section 3(1)(r) – used by more than one section or the common property or in favour of one section over the common property</li>
                                    <li>Names and addresses of all contractors, subcontractors and other persons who rendered services or supplied materials ito the development of the scheme</li>
                                    <li>All warranties, manuals, schematic drawings, operating instructions, service guides, documentation from manufacturers or any other information ito the construction, installation, operation, maintenance, repair, servicing of any common property or BC assets</li>
                                    <li>All warranties and guarantees provided by contractors, subcontractors and other persons who rendered services or supplied materials ito the development of the scheme</li>
                                    <li>All records the BC is required to prepare or retain ito rule 27(governance documents and records)</li>
                                </ul>
                            </li>
                            <li>If the Developer fails to provide the BC with any of this documentation the BC must do all things reasonably necessary to obtain or have the document prepared – and may recover the costs from the Developer</li>
                            <li>If the Developer fails to call the first general meeting in compliance with these requirements any member of the BC may do so and the BC must recover from the Developer all costs reasonably incurred in ensuring compliance with the Developer’s obligations</li>
                        </ul>
                        <b>Annual (AGM) or Special General Meetings (SGM)</b>
                        <ul>
                            <li>The Rules was amended to state that the AGM must be held within 2 months after the financial year – but further on the rules state that the audit must be finalised within 4 months after the financial year end</li>
                            <li class="d-block">BC do not have to have the AGM if –
                                <ul class="pl-3 pt-1">
                                    <li>Before or within one month of the end of the financial year all members in writing waive the right to the meeting</li>
                                    <li>And consent in writing to motions that deal with all items that must be transacted at the AGM</li>
                                    <li>Provided that if two or more persons are jointly entitled to exercise a vote all of them must waive the right to the meeting and consent to the resolutions in writing</li>
                                </ul>
                            </li>
                            <li>Trustees may call a General meeting by Trustee resolution</li>
                            <li>Trustees must call a General meeting when requested by a bondholder over not less than 25% in number of all the primary sections</li>
                            <li>Members or bondholder requesting a meeting must include one or more motions or matters for discussion – these motions or matters must be included in the agenda for the meeting – new but was implied</li>
                            <li>PMR 55 falls away – stipulates that all business at any general meeting other than the prescribed business shall be special business</li>
                            <li class="d-block">Business at all general meetings must include:
                                <ul class="pl-3 pt-1">
                                    <li>Confirm proxies, nominees and other persons representing members – new but was implied</li>
                                    <li>Issue of voting cards – new</li>
                                    <li>Determine that there is a quorum – new but was implied</li>
                                    <li>Elect a person to chair the meeting (if necessary) – new but was implied</li>
                                    <li>Present to the meeting proof of notice or waivers of notice – new</li>
                                    <li>Approve the agenda – new</li>
                                    <li>Approve minutes from the previous general meeting – new but was implied</li>
                                    <li>Deal with unfinished business if any – new</li>
                                </ul>
                            </li>
                            <li class="d-block">If the meeting is an AGM the following business must be dealt with:
                                <ul class="pl-3 pt-1">
                                    <li class="d-block">Determine the extent of insurance cover –
                                        <ul class="pl-3 pt-1">
                                            <li>Public liability insurance</li>
                                            <li>Fidelity cover</li>
                                            <li>Special resolution for cover other than prescribed</li>
                                        </ul>
                                    </li>
                                    <li class="d-block">Approve the Budgets
                                        <ul class="pl-3 pt-1">
                                            <li>Administrative fund</li>
                                            <li>Reserve fund</li>
                                        </ul>
                                    </li>
                                    <li>Report on lodgement of any amendments in Rules and if applicable table a consolidated set of Rules – No longer the Auditor that needs to confirm</li>
                                    <li>Deal with any new or further business</li>
                                    <li>Dissolve the meeting – new but was always implied</li>
                                </ul>
                            </li>
                            <li>Trustees determine agenda of AGM or SGM – subject to prescribed agenda points and agenda points when owners / bondholders request meeting</li>
                            <li class="d-block">Agenda must contain –
                                <ul class="pl-3 pt-1">
                                    <li>Description of the general nature of all business</li>
                                    <li>Description of all things to be voted on at the meeting – including the wording of the proposed special / unanimous resolution</li>
                                </ul>
                            </li>
                            <li>If any of the items of business that require member approval is not approved at the AGM or any adjournment thereof the resolution not to approve it must contain the reasons for not approving it and the resolution must be amended and tabled again at the next general meeting for approval asap – repeat until approved</li>
                            <li>The BC does not have to hold a SGM to consider a resolution if the members waive their right to the meeting and consent to the resolution in writing – provided that where two or more persons are jointly owners all of them must waive the right to a meeting</li>
                            <li class="d-block">BC can make arrangements for the attendance of a AGM or SGM by telephone or other method provided that the method–
                                <ul class="pl-3 pt-1">
                                    <li>Is accessible to all members and others entitled to attend</li>
                                    <li>Permits all persons participating to communicate with each other during the meeting</li>
                                    <li>Permits the Chairperson to confirm the identity of the participants (with reasonable certainty)</li>
                                    <li>A person who attends a meeting in such a way is considered present at the meeting</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Chairperson of General meetings</b>
                        <ul>
                            <li class="d-block">A Chairperson must do certain things –
                                <ul class="pl-3 pt-1">
                                    <li>Maintain order</li>
                                    <li>Regulate the orderly expression of views</li>
                                    <li>Guide the participants through the business of the meeting (ito common law on meetings)</li>
                                    <li>Ensure that all motions and amendments proposed are within the scope of the notice and powers of the meeting</li>
                                    <li>Ensure that the Rules, minute books and any other documents relevant to the business on the agenda – are available at the meeting</li>
                                    <li>Act fairly, impartially and courteously to all participants</li>
                                    <li>Ensure that all participants are able to express their views without unnecessary disturbance or interruption</li>
                                    <li>Adjourn the meeting when it is not able to complete or continue its business</li>
                                    <li>Make decisions on points of procedure</li>
                                    <li>Settle disputes by giving rulings on points of order</li>
                                    <li>Surrender the chair to a temporary chairperson elected by the members for the period that the chairperson wishes to engage in the debate of any agenda item</li>
                                </ul>
                            </li>
                            <li class="d-block">A Chairperson must NOT do the following-
                                <ul class="pl-3 pt-1">
                                    <li>From the chair attempt to influence members’ views on any agenda item</li>
                                    <li>Disclose in advance of a vote how he intends to vote</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Quorum at a General Meeting</b>
                        <ul>
                            <li>Business must not be transacted at any general meeting unless a quorum is present – same but stricter – must now definitely have a quorum at all times – must adjourn when no longer have a quorum</li>
                            <li class="d-block">Quorum is calculated as follows –
                                <ul class="pl-3 pt-1">
                                    <li>Scheme with less than 4 primary sections / BC with less than 4 members = members entitled to vote and holding two thirds of the total votes of members in value</li>
                                    <li>Other schemes = members entitled to vote and holding one third of the total votes of members in value</li>
                                    <li>Provided that at least two persons must be present – unless all the sections are registered in the name of one person</li>
                                    <li>Provided further that in calculating the value of votes required to constitute a quorum the value of votes of the Developer is not taken into account</li>
                                    <li>For the purpose of establishing a quorum and where votes are counted the value of the votes of any sections in the name of the BC must not be taken into account and the BC must not be considered as a member</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Voting and representatives at a General meeting</b>
                        <ul>
                            <li>A motion at a general meeting does not need to be seconded</li>
                            <li>A motion at a general meeting (except for special or unanimous resolutions) must be adopted by majority vote – calculated in value – of the members present and voting (no longer voting by show of hands or demanding a poll)</li>
                            <li class="d-block">Except for special / unanimous resolution a member is not entitled to vote if:
                                <ul class="pl-3 pt-1">
                                    <li>A member fails / refuses to pay the BC any money due – same – but amended to say that this only applies when judgement or payment order has been granted.  We are raising an objection to this.</li>
                                    <li>A member persists in the breach of any of the Conduct rules – same – but amended to say that this only applies when judgement or adjudication order has been granted. We are raising an objection to this</li>
                                </ul>
                            </li>
                            <li>For the purpose of any vote – BC units are considered as abstention votes</li>
                            <li>Appointment of proxy must be done on prescribed form</li>
                            <li>Proxy must be delivered to the BC 48 hours before the meeting OR delivered to the Chairperson before the start of the meeting – We are requesting that the delivery before the start of the meeting be omitted seeing that we will have to – when receiving proxy forms – confirm that the person appointed as proxy do not already hold two proxies and will need time to then get back to the owner on this and request them to appoint another person as their proxy</li>
                            <li>The outcome of the vote – including the number of votes for and against must be announced by the Chairperson – and recorded in the minutes of the meeting – Can no longer be done the next day</li>
                            <li class="d-block">If a special resolution is passed at a general meeting by members holding less than 50% of the total value of member’s votes then –
                                <ul class="pl-3 pt-1">
                                    <li>BC must not implement that resolution for one week after the meeting while the Trustees investigate to see if immediate action is needed to ensure safety or prevent significant loss or damage to the scheme</li>
                                    <li>Within 7 days of that meeting members holding at least 25% of the total votes in value may request new SGM to reconsider the resolution</li>
                                </ul>
                            </li>
                            <li class="d-block">If the owners so request a new SGM the Trustees must not implement the resolution unless
                                <ul class="pl-3 pt-1">
                                    <li>It is again passed as special resolution</li>
                                    <li>A quorum is not present within 30 minutes of the time of the meeting</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Financial year, functions and powers</b>
                        <ul>
                            <li>Financial yearend will be last day of September – unless otherwise resolved by the BC at a general meeting – no longer Feb and the Trustees can no longer change it</li>
                            <li>The BC must not make loans out of its funds without unanimous resolution</li>
                            <li class="d-block">The Body Corporate may – on the authority of a written Trustee resolution:
                                <ul class="pl-3 pt-1">
                                    <li>Raise special levy – if additional income is required to meet an expense that cannot reasonably be delayed until provided for in the next budget – same but amended</li>
                                    <li>Charge interest on arrear levies – provided that it must not exceed the prescribed interest rate of Prescribed Rate of Interest Act – This is a controversial one because this prescribed interest rate is currently sitting at 9%.  If faced with a levy account and a credit card bill that attracts 23% interest which one will take priority?</li>
                                    <li>Invest reserve funds with any financial institution</li>
                                    <li>Enter into written and signed contracts iro its powers and duties</li>
                                    <li>Join organisations and subscribe to services to further its purpose</li>
                                </ul>
                            </li>
                            <li class="d-block">Delegate any of their powers and duties to :
                                <ul class="pl-3 pt-1">
                                    <li>One or more Trustees</li>
                                    <li>A member</li>
                                    <li>An agent</li>
                                    <li>An employee</li>
                                </ul>
                            </li>
                            <li class="d-block">When delegating powers and duties they must specify in writing: new
                                <ul class="pl-3 pt-1">
                                    <li>The power or duty concerned</li>
                                    <li>A maximum amount of the BC funds to be used</li>
                                    <li>Any condition that may be applicable</li>
                                </ul>
                            </li>
                            <li>May approach the Ombud for relief</li>
                        </ul>
                        <b>Maintenance, repair and replacement plan (MRR Plan)</b>
                        <p>This is a whole new concept that is being introduced as compulsory.</p>
                        <ul>
                            <li class="d-block">BC must have a written maintenance, repair and replacement plan setting out:
                                <ul class="pl-3 pt-1">
                                    <li>Major capital items that is expected to require maintenance, repair and replacement within the next 10 years</li>
                                    <li>The present condition or state of repair of those items</li>
                                    <li>The time when those items or components of those items will need to be maintained, repaired or replaced</li>
                                    <li>The estimate cost of such maintenance, repairs or replacement</li>
                                    <li>The expected life of those items or components once maintained, repaired or replaced</li>
                                    <li>Any other information the BC considers relevant</li>
                                </ul>
                            </li>
                            <li class="d-block">The annual contribution to the reserve fund for the maintenance, repair or replacement of the major capital items must be determined by the formula: (new)
                                <ul class="pl-3 pt-1">
                                    <li>[(Estimated cost minus past contribution) divided by expected life]</li>
                                </ul>
                            </li>
                            <li>The MRR plan takes effect on approval by the members in a general meeting – members when giving approval may lay down conditions for the payment of money from the reserve funds</li>
                            <li>The Trustees must report the extent to which the approved MRR plan has been implemented to each annual general meeting</li>
                        </ul>
                        <b>Insurance</b>
                        <ul>
                            <li class="d-block">A member is responsible for:
                                <ul class="pl-3 pt-1">
                                    <li>Payment of any additional premium if the replacement value of his unit is increased</li>
                                    <li>For any excess iro damage to any part of the buildings that the member is obliged to repair and maintain ito the Act and the Rules – amended</li>
                                    <li>Must furnish the BC with proof of payment from the Insurer – must pay within 7 days of written request</li>
                                </ul>
                            </li>
                            <li>BC must obtain a replacement valuation of all buildings and improvements – at least every three years and present such valuation at the AGM</li>
                        </ul>
                        <b>Administrative and reserve fund</b>
                        <ul>
                            <li>Administrative fund must be used to fund the operating expenses of the BC</li>
                            <li>Reserve fund must be used for the implementation of the MRR plan</li>
                            <li class="d-block">The following amounts must be paid into the reserve fund: (new)
                                <ul class="pl-3 pt-1">
                                    <li>Any part of the annual levies designated for the MRR plan</li>
                                    <li>Any amounts received under the insurance policy iro damage or destruction of common property</li>
                                    <li>Any interest earned on the investment of the reserve fund</li>
                                    <li>Any other amounts as determined by the BC</li>
                                </ul>
                            </li>
                            <li>All other BC income must be paid into the administrative fund – The question we have is if this means that the reserve fund must take preference.  In other words the council account may be in arrears and the electricity to the common property may be disconnected as long as we put away money in the reserve fund for future maintenance?</li>
                            <li class="d-block">Money may be paid out of the reserve fund –
                                <ul class="pl-3 pt-1">
                                    <li>At any time in accordance with Trustee resolution and approved MRR plan</li>
                                    <li class="d-block">If the Trustees resolve that it is necessary for urgent MRR expense – which includes without limitation :
                                        <ul class="pl-3 pt-1">
                                            <li>To comply with an order of a court or adjudicator</li>
                                            <li>To repair, maintain or replace any property for which the BC is responsible – where there are reasonable grounds to believe that an immediate expenditure is necessary to ensure safety or prevent significant loss or damage to persons or property</li>
                                            <li>To repair any property for which the BC is responsible where the need for the repairs could not reasonably have been foreseen in preparing the MRR plan</li>
                                            <li>To enable the BC to obtain adequate insurance for property the BC is required to insure</li>
                                            <li>Provided that the Trustees must report to the members any such expenditure asap after it is made</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-block">This expenditure must not exceed :
                                <ul class="pl-3 pt-1">
                                    <li>The amount necessary for the purpose for which it was expensed</li>
                                    <li>Any limitation imposed by the BC on expenditure</li>
                                    <li>Must comply with any directions and restriction given by the members</li>
                                </ul>
                            </li>
                            <li class="d-block">Money may be paid out of the administrative fund in accordance with
                                <ul class="pl-3 pt-1">
                                    <li>Trustee resolution</li>
                                    <li>Approved budget for the admin fund</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Contributions and charges</b>
                        <ul>
                            <li>BC must asap – but not later than 14 days after approval of the two budgets – give the members written notice of the contributions due and payable by members – same</li>
                            <li class="d-block">Notice must:
                                <ul class="pl-3 pt-1">
                                    <li>State that the member has an obligation to pay the specified contributions and charges</li>
                                    <li>Specify the due date for each payment</li>
                                    <li>If applicable state that interest will be payable on overdue contributions and charges (rate specified in the notice)</li>
                                    <li>Include details of the dispute resolution process that applies ito disputed amounts</li>
                                </ul>
                            </li>
                            <li class="d-block">If money owed is not paid on the dates specified in the notice the BC must send a final notice to the member – notice to state :
                                <ul class="pl-3 pt-1">
                                    <li>That the member has an obligation to pay the overdue amounts and interest immediately</li>
                                    <li>If applicable – the interest that is payable at the date of the final notice and the amount of interest that will accrue daily until it is paid</li>
                                    <li>That the BC intends to take action to recover amounts due within 14 days of date of final notice</li>
                                </ul>
                            </li>
                            <li>Member is liable for all legal cost and disbursements in the collection of the levies – as taxed or agreed to by the member – we will never get the members to agree and not all costs incurred in the levy collection process will be taxable.</li>
                            <li>BC must not debit a member’s account with any amount that is not a contribution or charge levied ito the Act and Rules – without the member’s consent or the authority of a judgement or order by judge / adjudicator / arbitrator – We are going to object to this as we will never get consent from the members</li>
                            <li>BC must in its financial statements account for all contributions and other charges raised on members’ accounts</li>
                            <li>On written request the BC must make available a full and detailed account of all debits and credits on a member’s account</li>
                        </ul>
                        <b>Financial records, budgets, reports and audit</b>
                        <ul>
                            <li>BC must keep separate books of account and bank accounts for the administrative fund and the reserve fund</li>
                            <li class="d-block">Prepare AFS for presentation to the AGM annually – which must include analysis of
                                <ul class="pl-3 pt-1">
                                    <li>Amounts advanced to the BC by way of levy finance / loan / guarantee insurance policy etc. – setting out the contingent liability of the BC and the amounts paid by the BC and any member ito this</li>
                                    <li>Amounts in the reserve fund showing the amount available for MRR of each major capital item as a percentage of the accrued estimated cost and the rand value of the shortfall</li>
                                    <li>Premiums and other amounts paid by the BC and payments received by the BC and any member ito the insurance policy</li>
                                </ul>
                            </li>
                            <li>Prepare budgets for admin and reserve funds – comprising estimates of income and expenditure during the next financial year – for presentation at the AGM – same (only reserve fund budget new)</li>
                            <li>Provided that such budgets may include discounts not exceeding 10% of a member’s annual contribution if all those contributions are paid on or before the due dates</li>
                            <li>Unless all the sections are registered in the name of one person – the BC must present AFS to a general meeting for consideration asap after the financial year end</li>
                            <li class="d-block">The audit of a BC’s AFS must –
                                <ul class="pl-3 pt-1">
                                    <li>Be carried out by an independent auditor who has not been involved in preparation of the AFS – or advised on any aspect of the accounts of the BC during the period reported on</li>
                                    <li>Need not be carried out in accordance with any recognised framework of guidelines for financial accounting</li>
                                    <li class="d-block">Must include opinions as to whether or not
                                        <ul class="pl-3 pt-1">
                                            <li>The AFS accurately reflects the financial position of the BC for the period under review – with such qualifications and reservations as the auditor considers necessary</li>
                                            <li>The BC has complied with the accounting requirements ito the rules – with a specific description of any failure to comply</li>
                                            <li>The books of account have been kept and its funds have been managed so as to provide a reasonable level of protection against theft or fraud</li>
                                            <li>The financial affairs of the BC appear to be effectively managed</li>
                                        </ul>
                                    </li>
                                    <li>Must be completed within 4 months after the BC’s financial yearend (but AGM must be held within 2 months?)</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Governance documents and records</b>
                        <ul>
                            <li class="d-block">The BC must
                                <ul class="pl-3 pt-1">
                                    <li>Lodge a notification of an amendment of the schemes rules asap but not later than 10 days after passing of the resolution – new</li>
                                    <li class="d-block">Compile and keep a complete set of all management and conduct rules including –
                                        <ul class="pl-3 pt-1">
                                            <li>An index</li>
                                            <li class="d-block">A prominent reference to any rules that
                                                <ul class="pl-3 pt-1">
                                                    <li>Confer exclusive use rights</li>
                                                    <li>Vary the effect of the participation quotas</li>
                                                    <li>Impose either a financial or maintenance obligation on members</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Prepare a consolidated set of rules whenever they are amended</li>
                                </ul>
                            </li>
                            <li class="d-block">The BC must prepare and update the following records:
                                <ul>
                                    <li class="d-block">Minutes of Trustee and General meetings including the following –
                                        <ul class="pl-3 pt-1">
                                            <li>Date, time and place of the meeting</li>
                                            <li>Names and roles of the persons present</li>
                                            <li>Details of proxies or other representatives</li>
                                            <li>The text of all resolutions</li>
                                            <li>The results of the voting on all motions</li>
                                            <li>PMR 34(2) falls away- that states that minute books must be kept in perpetuity</li>
                                        </ul>
                                    </li>
                                    <li class="d-block">Lists of Trustees, members  – and now also the tenants –  with their
                                        <ul class="pl-3 pt-1">
                                            <li>Full names</li>
                                            <li>ID or in the case of non-SA citizens the passport number</li>
                                            <li>Section addresses and mailing addresses</li>
                                            <li>Telephone numbers</li>
                                            <li>Email or other electronic addresses</li>
                                        </ul>
                                    </li>
                                    <li>Lists of sections shown on the sectional plan indicating whether it is a primary or utility section; its participation quota and the name of the member in whose name it is registered</li>
                                    <li>Lists of eua’s with descriptions of purpose and numbers – indicating if it is ito Section 27 of the ST Act or ito the rules – and a reference to the relevant rule</li>
                                    <li>Lists of registered bondholders with their names and addresses</li>
                                    <li class="d-block">Details of all future development rights including
                                        <ul class="pl-3 pt-1">
                                            <li>Names and addresses of all registered holders of such rights</li>
                                            <li>Copies of all documents prepared ito section 25 of the ST Act for any such right</li>
                                        </ul>
                                    </li>
                                    <li>Any other documents required by the regulations</li>
                                </ul>
                            </li>
                            <li class="d-block">BC must obtain and keep copies of the following:
                                <ul class="pl-3 pt-1">
                                    <li>Registered sectional plan and any registered amending sectional plan</li>
                                    <li>The Act and the regulations</li>
                                    <li>Resolutions that deal with changes to the common property – including giving eua rights to members</li>
                                    <li>Consents and approvals given by the Body Corporate to members</li>
                                    <li>Waivers and consents given by members</li>
                                    <li>Written contracts to which the BC is a party</li>
                                    <li>Any decision of an adjudicator / arbitrator / magistrate / judge in a proceeding in which the BC is a party</li>
                                    <li>Any legal opinions obtained by the BC</li>
                                    <li>Budgets and AFS for the current year and previous years</li>
                                    <li>Income tax returns</li>
                                    <li>Insurance policies, endorsements and claim forms</li>
                                    <li>Correspondence sent or received by the BC and the trustees</li>
                                    <li>Any other records required by the Regulations</li>
                                </ul>
                            </li>
                            <li class="d-block">On receiving a written request the BC must make the records and documents referred to in this rule available for inspection by and provide copies of them to – (What about POPI Act?) Currently we are only obliged to give the names and addresses of all owners – not phone numbers, email addresses and ID numbers
                                <ul class="pl-3 pt-1">
                                    <li>A member</li>
                                    <li>A registered bondholder</li>
                                    <li>A person authorised in writing by a member or registered bondholder</li>
                                </ul>
                            </li>
                            <li>BC must comply to such a request within 10 days and when the request is ito the rules within 5 days</li>
                            <li>BC may charge a fee for a copy of a record or document other than the rules – fee must be reasonable and BC may refuse to supply the copy until the fee is paid</li>
                            <li>If the BC terminates its contract with an employee or Managing Agent that person must within 10 days deliver all records to the BC</li>
                            <li>The records in this rule must be in writing or must be able to easily convert to writing</li>
                        </ul>
                        <b>Managing Agents</b>
                        <ul>
                            <li>BC may by special resolution appoint an Executive managing agent to perform the functions and powers that would have been performed by the Trustees</li>
                            <li>Members entitled to 25% of the total quotas of sections may apply to the Ombud for the appointment of an Executive managing agent</li>
                            <li class="d-block">Executive managing agent is
                                <ul class="pl-3 pt-1">
                                    <li>Subject to all the duties and obligations of the Trustees under the Act and rules</li>
                                    <li>Obliged to manage the scheme with the required professional level of skill and care</li>
                                    <li>Liable for any loss suffered by the BC as a result of not applying such skill and care</li>
                                    <li>Has a fiduciary obligation to every member of the BC</li>
                                    <li>Must arrange for the inspection of the common property at least every six months</li>
                                    <li>Must report on the administration of the scheme at least every four months to every member</li>
                                    <li></li>
                                </ul>
                            </li>
                            <li class="d-block">The four monthly reports of the Executive managing agent (EMA) must include at least the following:
                                <ul class="pl-3 pt-1">
                                    <li>Proposed repairs and maintenance in the next four months</li>
                                    <li>Matters that the EMA considers relevant to the condition of the common property and the assets of the BC</li>
                                    <li>Balance of both the admin and reserve funds on the date of the report and a reconciliation statement for each fund</li>
                                    <li class="d-block">For the period since appointment of the EMA or from the date of the last report
                                        <ul class="pl-3 pt-1">
                                            <li>Expenses of the BC including MRR costs</li>
                                            <li>Brief description of the date and nature of all decisions made by the EMA</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-block">Management Agreement may not endure for a period longer than two years – may be cancelled – without liability or penalty – despite any provision of the Management Agreement to the contrary – new
                                <ul class="pl-3 pt-1">
                                    <li>By the BC on two months’ notice – first to be approved by special resolution at a general meeting</li>
                                    <li>By the Managing Agent on two months’ notice</li>
                                </ul>
                            </li>
                            <li>The BC by ordinary resolution may cancel the management agreement in accordance with its terms or refuse to renew the management agreement when it expires – no longer a Trustee decision</li>
                        </ul>
                        <b>Improvements to the common property</b>
                        <ul>
                            <li>Luxurious improvements are referred to as alterations or improvements to the common property that are not reasonably necessary</li>
                            <li>Non-luxurious improvements are referred to as alterations or improvements to the common property that are reasonably necessary</li>
                            <li class="d-block">BC must – if so directed by resolution of the members
                                <ul class="pl-3 pt-1">
                                    <li>Install and maintain separate meters to measure supply of electricity / water / gas / other service to each section and eua and to the common property</li>
                                    <li>Recover from members the cost of such supplies based on the metered supply</li>
                                    <li>PMR 33(4) falls away – that state that – If and for so long as no separate meter have been installed in terms of this rule, the contribution payable by each owner in respect of electricity, water and gas shall be calculated in accordance with the participation quotas / nominated values</li>
                                </ul>
                            </li>
                            <li>BC may if given the authority by unanimous resolution install separate prepaid meters on common property to control the supply of water or electricity to a section or eua – Provided that all members and occupiers must be given at least 60 days’ notice of the proposed resolution with details of all costs for the installation and its estimated effect on the cost of the services over the next three years</li>
                            <li class="d-block">If a prepaid system is installed –
                                <ul class="pl-3 pt-1">
                                    <li>The BC is responsible to ensure that the system does not infringe on the constitutional rights of section occupiers to access to basic services</li>
                                    <li>Any member who lease a unit to a tenant is responsible to ensure that the system does not infringe the rights of the tenant</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Use of sections and common property – these are the current Duties of owners</b>
                        <ul>
                            <li>PMR 68(1)(i) falls away – must not do anything that is injurious to the reputation of the scheme</li>
                            <li>PMR 68(1)(iv) falls away – Harmonious appearance rule</li>
                            <li class="d-block">Subject to section 13(1)(g) (purpose it is shown on the plans) use a section or eua for a purpose other than for its intended use as –
                                <ul class="pl-3 pt-1">
                                    <li>Shown expressly or by implication on a registered sectional plan or an approved building plan</li>
                                    <li>Can reasonably be inferred from the provisions of the applicable town planning bylaws or the rules of the BC – new</li>
                                    <li>Is obvious from its construction, layout and available amenities</li>
                                    <li>PMR 68(1)(v) falls away – Cannot use for another purpose with the written consent of all</li>
                                </ul>
                            </li>
                            <li class="d-block">Owner must not construct or place any structure or building improvement on an eua which in practice constitutes a section or extension of a section.  Provided that the BC may by ordinary resolution –
                                <ul class="pl-3 pt-1">
                                    <li>Give consent for such a structure or building improvement – if they are satisfied that it is not extension of a section</li>
                                    <li>Prescribe any reasonable condition ito the use or appearance</li>
                                    <li>Withdraw any consent if the member or other occupier breach any such condition</li>
                                </ul>
                            </li>
                        </ul>
                        <b>Obligation to maintain</b>
                        <ul>
                            <li class="d-block">If despite written demand by the BC a member refuse / fails to
                                <ul class="pl-3 pt-1">
                                    <li>Carry out any work iro the section ordered by a competent authority</li>
                                    <li>Repair or maintain a section in a state of good repair</li>
                                    <p class="m-0">And that failure threatens the stability of the common property, the safety of the building or otherwise materially prejudices the interest of the BC, its members or occupiers of sections – then the BC must remedy the member’s failure and recover the costs from that member – 30 days grace falls away</p>
                                </ul>
                            </li>
                        </ul>
                        <b>Arbitration</b>
                        <ul>
                            <li>PMR 71 regarding the determination of disputes by arbitration falls away – disputes now to be referred to the Ombud</li>
                        </ul>
                        <p>We are compiling a report, with all our questions and comments on the proposed changes, that we will submit to the Department of Human Settlements before the end of October 2015.</p>
                        <p>We will also attend the Public Participation sessions arranged by the CSOS in this regard.</p>
                        <p>Should you have any questions or comments on any of the above please contact the writer.</p>
                        <p>Kind regards</p>
                        <p>Karien Coetzee</p>
                        <p>National Property Management Consultant</p>
                        <p>021-4105512</p>
                        <p><a href="mailto:karienc@trafalgar.co.za">karienc@trafalgar.co.za</a></p>
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
