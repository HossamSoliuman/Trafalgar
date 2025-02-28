
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management-tips')->first(); @endphp

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
              <li><a href="#">Property Management Tips</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Property Management Tips</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph faqs">
                        <p>We have put together a list of property management tips representing a series of best practices identified over Trafalgar’s fifty year property management experience. If you would like to receive this fortnightly tip series via email,</p>
                        <div class="accordion-container">
                          <div class="set">
                            <a href="#">Tip 1: Get Essential Administration & Resolutions In Place At The First Trustee Meeting <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The first trustee meeting following an AGM is an excellent time to ensure the important resolutions listed below are recorded, in place and aware to all the trustees. Valid resolutions should be signed by at least 2 trustees and placed in a minute book for safe and accessible record keeping. An electronic document management archive is also highly recommended for important sectional title legal and governance documentation.</p>
                                <ul>
                                    <li>Resolution recording levies are due by the 1st of each month in advance</li>
                                    <li>Interest resolution stipulating the applicable interest rate charged on arrear levies (interest on arrear levies accrues to the body corporate)</li>
                                    <li>Handover resolution: standing instruction for the managing agent to hand over arrear levy accounts typically after 2 months in arrears</li>
                                    <li>Resolution stipulating the pro rata levy payment responsibilities in the event a unit is sold during the financial year The trustees should review for awareness to achieve a common understanding any other resolutions which apply to the body corporate for which they will be accountable for implementation.</li>
                                </ul>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 2: Can The Homeowners Association Have A Meeting On Skype? <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Where your Homeowners association is a company we will have to look at the Companies Act – Act 71 of 2008 for guidance.  In Section 63 this is stated:</p>
                                <ul>
                                    <li>63. Resolution recording levies are due by the 1st of each month in advance
                                        <ul>
                                            <li>that person must present reasonably satisfactory identification; and</li>
                                            <li>the person presiding at the meeting must be reasonably satisfied that the right of that person to participate and vote, either as a shareholder, or as a proxy for a shareholder, has been reasonably verified.</li>
                                        </ul>
                                    </li>
                                    <li>Unless prohibited by its Memorandum of Incorporation, a company may provide for—
                                        <ul>
                                            <li>a shareholders meeting to be conducted entirely by electronic communication;</li>
                                            <li>one or more shareholders, or proxies for shareholders, to participate by electronic communication in all or part of a shareholders meeting that is being held in person</li>
                                            <p>as long as the electronic communication employed ordinarily enables all persons participating in that meeting to communicate concurrently with each other without an intermediary, and to participate reasonably effectively in the meeting..</p>
                                        </ul>
                                    </li>
                                    <li>If a company provides for participation in a meeting by electronic communication, as contemplated in subsection (2)—
                                        <ul>
                                            <li>the notice of that meeting must inform shareholders of the availability of that form of participation, and provide any necessary information to enable shareholders or their proxies to access the available medium or means of electronic communication; and</li>
                                            <li>access to the medium or means of electronic communication is at the expense of the shareholder or proxy, except to the extent that the company determines otherwise.</li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>It is therefore clear that Skype meetings can be held – with all the Directors on Skype or only some of them on Skype.  They must however be identifiable so you cannot use Skype chat (typing) – you will have to do video conferencing so that all participants are visible to each other.  But first of all you have to check if your Memorandum of Incorporation does not prohibit a meeting held in this way.</p>
                                <p>In terms of Common Law Associations you will have to see if the Constitution allows for this type of meeting – if not you will not be able to do it.  Or you will have to amend your Constitution to allow it.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 3: Important Documentation For Trustees To Be Aware Of And Ideally To Review At The 1st Trustee Meeting Following An AGM <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>As there are typically a few new trustees commencing service to the body corporate following an AGM, the following documentation is recommended for review at the 1st trustee meeting to raise awareness and to clarify trustee implications:</p>
                                <ul>
                                    <li>Management and conduct rules, confirming that customized conduct rules are lodged with the deeds office for enforcement</li>
                                    <li>Management agreement clarifying roles and responsibilities of the managing agent</li>
                                    <li>Insurance policy, in particular the excess parameters, geyser cover threshold, trustee liability and public indemnity cover and importantly the name and contact details of the broker for registering claims</li>
                                    <li>The approved budget and levy schedule</li>
                                    <li>The sectional title plans which should correspond with the levy schedule participation quotas shown and importantly the exclusive use area recoveries</li>
                                </ul>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 4: Who Can Be Appointed As A Proxy At An Annual General Meeting? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The first question is, are you a member of a Homeowners Association (HOA) or an owner in a Sectional Title complex?</p>
                              <p>If it is a HOA the following will apply:</p>
                              <p>If your HOA is a common law association you will have to look at what your Constitution states about this.</p>
                              <p>If your HOA is a Non-profit company (NPC) then we have to refer to the Companies Act – Act 71 of 2008.</p>
                              <p>Section 58 holds the answer. (email me if you want a copy of Section 58)</p>
                                <ul>
                                    <li>Any individual can be appointed as proxy (proxy does not have to be a member of the HOA</li>
                                    <li>Proxy must be in writing</li>
                                    <li>If not stipulated in the proxy it is valid for one year</li>
                                    <li>Proxy must be delivered to the HOA before the meeting</li>
                                </ul>
                                <p>All you need to do is to check your HOA’s Memorandum of Incorporation (MOI) to see what it states about who is entitled to vote.</p>
                                <p>It can possibly be that you can appoint Piet Pompies as your proxy, but he is not entitled to vote – but per the definition in your MOI he can still vote on your behalf if you are entitled to vote.</p>
                                <p>If you are an owner in a Sectional Title complex Prescribed Management Rule 67 (PMR) applies (you will first need to check if your complex works on the prescribed rules and if you have amended your Management Rules)</p>
                                <p>PMR 67 states that</p>
                                <ul>
                                    <li>votes at a general meeting can be cast in person or by proxy</li>
                                    <li>the proxy must be in writing</li>
                                    <li>the proxy shall be handed to the Chairman before the commencement of the meeting</li>
                                    <li>a proxy need not be an owner, but cannot be the Managing Agent or any employee of the Body Corporate</li>
                                </ul>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 5: Allocate Clearly Defined Portfolios To Trustees At The 1st Trustee Meeting For More Time Efficient And Effective Management Of The Body Corporate <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The portfolios listed below are recommended to allocate to specific trustees to manage, recognizing that in some buildings portfolios may be combined or not applicable:</p>
                                <ul>
                                    <li>Chairman</li>
                                    <li>Finance</li>
                                    <li>Maintenance</li>
                                    <li>Security</li>
                                    <li>Gardens</li>
                                    <li>Staff / HR</li>
                                    <li>Legal</li>
                                    <li>Architectural</li>
                                    <li>Communication</li>
                                </ul>
                                <p>Experience demonstrates that trustee committees operate best when individuals have clearly defined portfolios of responsibility together with clear mandates of their decision making authority including incurring and approving expenses.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 6: Budget For Maintenance Delivery Success <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Necessary and time efficient maintenance is likely to be achievable if funds are available to cover the costs for the work required. The annual body corporate budget should therefore be prepared with necessary maintenance items and quotes in hand, providing for the costs and timing. A full maintenance inspection and report should therefore be conducted in advance of the budget preparation, calling for relevant quotes as budget inputs. In the event of cash flow and affordability challenges a body corporate loan or special levy should be considered. An approved budget at the AGM and maintenance costs should be delegated to a maintenance trustee to oversee implementation to keep necessary maintenance work up to date.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 7: To Determine Which Kind Of Complex You Own A Unit In <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>It sometimes happens that the Developer buys land and develop a complex – he gives it a name sell all the units and disappear.  The owners have no idea what entity he created for governing the complex. They only come together when there is something to be done to the common property and all contribute equally to have it done.</p>
                                <p>It will be better to do things the right way – one of the houses can be sold and the new owner can say that he has not been informed that there is any obligation on him to contribute anything to the common property expenses.</p>
                                <ul>
                                    <li>First of all you have to do a deeds search on the name of the complex – it could just as well be a Sectional Title scheme.  If this brings up nothing I would go to the next step</li>
                                    <li>You can also do a deeds search on the name of one of the owners using his ID – all property registered on his name will appear – it will show if he owns a sectional title unit in a scheme; then you can do a search on the scheme and see if the erf number is the same; or if the other owners registered as owners of units are your neighbours.  If it just shows a full title property registered in the name of that owner i.e. Erf 123, Kosmosdal Ext 24 it means that it is definitely not a sectional title scheme, but you have something to use at the municipality</li>
                                    <li>Go the local municipality and find out what conditions were imposed on approval of the subdivision of the land – Get a copy of the conditions of approval which will almost certainly stipulate what type of entity the developer had to create to run the HOA.</li>
                                    <li>Do a company search on the name of the complex at CIPC– If it brings up nothing it does not mean that it is not a company – the developer could have opened the company in another name.</li>
                                    <li>Find out which attorneys were acting for the developer in creating the scheme. In almost all cases this will be the same attorneys who did the initial transfers of land units in the HOA. Find out who worked on the matter in the legal firm, because that lawyer will most probably have drafted the constitution or the articles of the HOA. If you have bought directly from the developer they would have dealt with the transfer.</li>
                                    <li>If you find out that your complex is a HOA – Non profit Company (NPC) you can go to CIPC – the Registrar of Companies and get a copy of the Memorandum of Incorporation – this will show exactly which properties were all included in the HOA.  You can then do a deeds search on each of these properties and find all the members.  Some of the Municipalities have the facility to give you a layout plan of the Township to see where each of the erven is situated.</li>
                                </ul>
                                <p>Once you have determined if it is a Sectional Title Scheme, a HOA with a Constitution (registered at the Municipality or a Company (NPC) you can take further action.</p>
                                <p>You will have to make sure that it is included in each owner’s title deeds that they are a member of whatever entity you found your complex to be.</p>
                                <p>You can always appoint a Managing Agent to assist you with all these searches on the promise that they will be appointed as Managing Agent of the complex once all the information has been received.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 8: Home Businesses? <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>All Home Owners Associations (“HOAs”) and their home owner members should be aware of a recent High Court judgment addressing the knotty problem of a HOA’s powers to bar an owner from running a home-based business.</p>
                                <i>The Case: Municipal Zoning v HOA Rules</i>
                                <ul>
                                    <li>A home owner had for many years conducted a home business in the form of a hair salon from her house.</li>
                                    <li>The HOA’s constitution and its conduct rules prohibited use of homes for anything other than residential purposes, unless authorized to do so by special resolution.</li>
                                    <li>The HOA, after the home owner breached a written undertaking to cease business, applied to the High Court to interdict her from continuing.</li>
                                    <li>The home owner’s main argument was that her home business was permitted by the local zoning regulations, which did indeed permit certain small scale non-residential activities.  The HOA, she argued, had no right to override these zoning scheme provisions by prohibiting all non-residential use.</li>
                                    <li>The original Court found for the home owner, but on appeal to a “Full Bench” of the Court, the interdict was granted.  The Court held that “…..there is nothing contained in our law which prevents a property owner from agreeing to a limitation of its rights…..” and the individual home owners had, by agreement, forfeited their right to use their land for anything but residential purposes.  Moreover the HOA had not purported to change the zoning scheme and was “well within its rights to seek to preserve the residential character of the development”.</li>
                                    <li>The home owner was accordingly interdicted from continuing with her hair salon business and, to rub salt into her wounds, must pay the HOA’s costs on the attorney and client scale. </li>
                                </ul>
                                <i>In a nutshell </i>
                                <p>Home Owners Associations: Check your constitution and conduct rules to ensure that you have adequate powers to preserve the residential character of your development.  Take advice in doubt!</p>
                                <p>Home Owners:  If you want to run a home business, check both the local zoning regulations and your HOA’s constitution and conduct rules beforeyou open your doors.  Again, take advice in doubt!</p>
                                <p>With Sectional Title schemes it is more straightforward –The Act states the following – (you need to first check if your Management Rules have been amended or if the Prescribed Management Rules apply)</p>
                                <p>Prescribed Management Rule 68. (1) In addition to his obligations in terms of section 44 of the Act, an owner-</p>
                                <p>(i) shall not use his section, exclusive use area or any part of the common property, or permit it to be used, in such a manner or for such purpose as shall be injurious to the reputation of the building;</p>
                                <p>(ii) shall not contravene, or permit the contravention, of any law, by-law, ordinance, proclamation or statutory regulation, or the conditions of any license, relating to or affecting the occupation of the building or the common property, or the carrying on of business in the building, or so contravene or permit the contravention of the conditions of title applicable to his section or any other section or to his exclusive use area or any other exclusive use area;</p>
                                <p>(v) shall, when the purpose for which a section and exclusive use area is intended to be used, –</p>
                                <p>a) is shown expressly or by implication on a registered sectional plan;</p>
                                <p>b) is shown expressly or by implication on the original approved building plan thereof;</p>
                                <p>c) can be inferred from the provisions of the rules; or</p>
                                <p>d) is obvious from its construction, layout and available amenities,</p>
                                <p>not use, nor permit such section or exclusive use area to be used, for any other purpose; Provided that with the written consent of all owners such section or exclusive use area may be used for another purpose</p>
                                <p>So you would need the written consent of all owners to run a business from your unit in a sectional title scheme.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Tip 9: Effective Communication Builds A Positive Community Culture: <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>It is highly recommended that a regular (suggest quarterly) newsletter is circulated to all owners and tenants covering topical body corporate news, issues and trustee activities. Topics such as maintenance, security, gardens, cleaning and events in the area are generally of collective interest. In this way visibility and awareness of trustee management focus areas and efforts on behalf of the building are made aware to relevant stakeholders. Requests for feedback can also be emphasized to collect ideas and suggestions from residents for attention. Email and online bulletin boards present cheap, convenient and effective communication channels to use.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 10: Regular, Consistent And Proactive Maintenance Is A Critical Success Factor <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>A stitch in time saves nine applies very well to body corporate and HOA maintenance. A rolling annual maintenance plan is highly recommended and the maintenance trustee/director should ensure that all the common property is fully and regularly inspected (suggest at least weekly and either directly or with the assistance of a caretaker).  The maintenance plan should schedule the following important items to be attended to where applicable, assisting with planning and tracking:</p>
                                <ul>
                                    <li>Service firefighting equipment annually (major service required every 5 years)</li>
                                    <li>Service water proofing annually (the silver bitumen paint can be easily and cheaply applied by an employee)</li>
                                    <li>Clear all drains and down pipes at the end of winter and at least monthly in summer</li>
                                    <li>Lifts require an Annexure B inspection every 2 years and the inspection certificate needs to be placed inside the lift motor room</li>
                                    <li>Check electrical fence monthly (security service providers may be able to assist) and prune back overhanging shrubs and trees</li>
                                    <li>Backwash pool filter weekly and test pool chemicals</li>
                                    <li>Check for broken windows, peeling paint, leaking water, fused lights to be repaired (only for common property)</li>
                                    <li>Various other items may be relevant and important to a specific property based on design, layout etc</li>
                                </ul>
                                <p>As cleaning, security and maintenance are generally the most important priorities for all residents (numerous surveys have confirmed these items) common property inspections should evaluate and monitor these important trustee/director responsibilities</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 11: Select Preferred Maintenance Service Providers For Cost Effective And Durable Maintenance <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>As with most things, maintenance service providers are not all created equal and comparably cost effective. A list of preferred maintenance service providers should be compiled for the complex utilizing a combination of prior experience, comparable prior quotes, personal recommendations and service delivery standards. Using preferred contractors with prior complex exposure can significantly reduce costs, delays and errors for accelerated and more cost effective maintenance delivery. A clearly defined maintenance policy requiring 2 to 3 quotes for medium to large jobs (for example above R10,000) should be agreed and recorded for the maintenance trustee/director to apply. Small jobs should be arranged with telephonic quote approval on site to avoid quote costs and delays.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 12: Gardening For Property Value <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>A complex’s common garden very often creates a first impression and ‘shop front’ for the property which has a direct bearing on property values and quality of life. Garden maintenance and presentation should therefore be prioritized accordingly. Very often a gardening enthusiast can be identified amongst the owners or tenants and a gardening portfolio should be allocated accordingly to achieve best results. The gardening portfolio should also be resourced appropriately with a gardening budget between 5% – 10% of operating expenses allocated. A gardener employed by the body corporate or association or outsourced garden service provider should be positioned to maintain the gardens effectively; both will require close supervision</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 13: An Irrigation System Can Save Water <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>An attractive garden requires sufficient water. Hand watering is time consuming and has been shown to waste water. A professionally installed irrigation system with a linked weather station to regulate irrigation with rain and ambient temperatures is both time and water efficient (especially so for large gardens). A monthly irrigation service visit is also recommended to check and service the irrigation system to ensure it is working correctly. This will also cover periodic adjustments required as garden shrubs grow and change shape.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 14: Pool Care: <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>If the complex has a communal pool, it should be clean and blue at all times to maintain the necessary well managed and positive presentation of the complex. A green and dirty pool is not only unsightly but also creates a very poor impression and association with the complex and trustee/director management team.</p>
                                <p>There should be a clear responsibility assigned to a staff member or trustee/director for maintaining the pool, together with the necessary training for testing the water and adjusting chemicals as required. Sourcing chemicals with the necessary budget and payment arrangements in place should be well established to avoid unnecessary delays and inconvenience. Outsourcing the pool cleaning and maintenance to a specialist is an important consideration where capacity and onsite support is lacking.</p>
                                <p>Health and safety implications should also be clearly considered and the pool should be properly and effectively secured by at least a safety fence to ensure children do not have unsupervised access. A disclaimer sign warning against unsupervised swimming should also be clearly displayed at the pool.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 15: Staff Management <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Where complex staff are employed to assist with cleaning, gardening, access control, pool and other maintenance (applicable to the complex profile and requirements), it is very important that their terms of employment are correctly defined in a written employment contract, that their work expectations are recorded in a work roster which is supervised accordingly and that leave is appropriately approved and recorded. Many complexes do not have caretakers in place with the resultant challenge that supervising complex staff becomes a time and availability challenge for the trustee(s)/directors tasked with supervising staff and their work.</p>
                                <p>A managing agent will typically be in a position to assist with drafting an employment contract for signature, operating payroll and producing pay slips, paying UIF, recording leave and advising concerning any performance or disciplinary issues. Arranging a provident fund with funeral cover is recommended for retirement planning purposes.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 16: Security <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Effective security is an important priority for complexes and very often an important reason why buyers choose to live or invest in a communal living configuration and particular complex.  After municipal costs, security is often the single biggest expense incurred and hence very important to manage carefully. The implication therefore is that outsourced security service providers do need to be actively managed for best results.</p>
                                <p>It is important to ensure that a security service provider before being appointed is correctly registered with PSIRA and thereby compliant with necessary security regulations including paying market related salaries to their guards. Clearly defined security procedures should be documented for the complex and the guards should use an OB book on site to record any incidents for further investigation and attention. The OB book should be regularly inspected. The security procedures should include a visitors’ policy which is often a challenge and significant security issue.  If additional guards are expected to patrol the complex a monitoring system such as guard track to bloodhound should be installed with the reports reviewed by the trustees /directors at least on a monthly basis.</p>
                                <p>The security service providers should also be tasked to check the panic alarm system, electric fencing installation, perimeter lighting and access control systems at least on a weekly basis. Very often the guards become aware of other maintenance items very quickly and should be given appropriate contact numbers to report the issues to be addressed.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 17: Cleaning <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Numerous owner and tenant surveys have demonstrated that security, cleaning and maintenance are top of mind priorities and expectations for residents and therefore important for directors/trustees to closely manage. It is therefore very important that the common property is clean and presentable at all times including the refuse bin area, corridors, staff arrears, gardens and parkings. Many complexes employ and manage cleaners directly albeit this important function can also be outsourced. Where cleaners are employed directly a clear work roster should be defined and supervised. In Sectional Title schemes for example the cleaning of corridor walls on a weekly basis, light fittings and common property facing windows are frequently neglected items which should be included in the work roster.  Specific attention needs to be given to removing domestic refuse from the units to the common refuse area and ensuring that the bins and refuse area are thoroughly cleaned at least weekly after municipal removal. A clean and tidy complex makes a very positive impression and quality of life difference.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 18: Solar Installations <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Prescribed Management Rule 4 gives the Trustees the power to approve minor alterations to the common property – but this does not include solar panels or geysers.</p>
                                <p>Prescribed Management Rule 5 prohibits any owner doing anything on the common property that affects the harmonious appearance of the complex. This provision serves to protect the market value of units in the scheme.</p>
                                <p>The suggestion will be that the Trustees find out from the other owners how they view it and if the majority is in favour the Trustees can propose a Conduct rule to be adopted in this regard.</p>
                                <p>It is important that any owner who installs such a unit, and any subsequent owner of that unit, be responsible in terms of the scheme’s rules for keeping the installation looking good and in working order.</p>
                                <p>And if the installation falls into disrepair, that owner must be responsible to remove it, and/or the body corporate must be able to do so at the owner’s expense.</p>
                                <p>Assuming the installation will be attached to a roof, the owner and his or her successor in title must be responsible for any additional costs that arise, in the roof maintenance or otherwise, as a result of the installation. The rule would typically require an application by an owner to the trustees for permission to install such an installation but oblige the trustees to approve that application as long as it falls within the requirements of the rule. The rule would include specific detail of the size and appearance of the various elements of the installation and its placement. In some situations where the panels are not mounted on roofs but on stands, rules of this type also include height restrictions and/or screening requirements. And you raised the issue of insurance – the rule should also include a provision that if any common expense, including insurance, is increased as a result of the existence of that installation the relevant owner will be liable for that increase.</p>
                                <p>(With appreciation to Prof Graham Paddock)</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 19: Aesthetic Standards And Rules Count A Lot <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Managing strict aesthetic standards is very important for the presentation of a complex which in turn has a direct bearing on property values and appreciation. Managing expectations and awareness in this regard is important to pre-empt any difficulties and issues: references should be made in newsletters and annual trustee/director reports. When issues arise they should be dealt with decisively and quickly to limit expenses and revisions. Small deviations should be avoided due to inevitable creep over time and blurring of standards in a building. Common pitfalls include security doors, front doors, burglar bars, awnings and satellite dishes</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 20: Can The Body Corporate Impose Fines Or Clamp Wheels? <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>There are different opinions regarding the legality of fines on owners or residents for breaches of the rules.</p>
                                <p>We investigated and found that neither the Sectional Titles Act nor the prescribed rules provide for the imposition of fines or penalties on transgressors of a scheme’s rules.</p>
                                <p>But as per the opinion of a number of well known attorneys specializing in sectional title, it is possible for a body corporate to impose legally enforceable fines if the body corporate has properly adopted a carefully drafted rule providing for fining owners and residents.</p>
                                <p>In order for the rule to be enforceable this rule must be:</p>
                                <ul>
                                    <li>reasonable, and</li>
                                    <li> take into account the principles of natural justice, especially the principle ‘Let both sides be heard’, which requires that a hearing be called to give the apparent transgressor an opportunity to state his case before being found guilty and a fine being issued.</li>
                                </ul>
                                <p>If, after the hearing, the trustees find the person to be guilty of breaching the rules they can impose a reasonable fine.</p>
                                <p>It is important to note that for a fining rule to be enforceable it must be carefully drafted, passed by the Body Corporate with the required resolution (special resolution for a conduct rule, unanimous resolution for a management rule) and it must be filed at the Deeds Office.</p>
                                <p>So if your body corporate wants to be able to impose fines we recommend that you get an attorney,that specializes in sectional title, to draft the fining rule for you and ensure it is properly filed at the Deeds Office.</p>
                                <p>With regards to wheel clamping – it must also be clearly stated in the rules of the scheme; there must be signs all over the common property stating that this is what is going to be done for illegal parking of a vehicle and there must be an immediate resolution system in place.  I.e if one of the owners / residents urgently have to use their vehicle (example pregnant lady to go to the hospital) there must be someone available at all times to unclamp the vehicle immediately.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 21: Reserve Funds <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>The upcoming Sectional Titles Scheme Management Act will have a stipulation that all schemes must have adequate reserves.  It will also stipulate what is seen as adequate reserves.  And even thought this proposed Act only applies to Sectional Title schemes the principal is valuable for Homeowners Associations as well.</p>
                                <p>It will be sensible advice for all complexes to start by doing an assessment of their common property – list all areas that will require repairs and maintenance.  I.e. if the buildings are plastered they will require painting at regular intervals; if there is paving on the common property that will require upkeep and possible future maintenance.</p>
                                <p>Once an assessment has been made of what is there i.e. plastered walls; paving; gutters; electric fence etc. – it is important to do a maintenance plan.  It is advised that a short term as well as a long term maintenance plan is drawn up.  Short term will be things that require attention in the upcoming year.  Long term you will look at the next 5 years.  It is also suggested that quotes be obtained for the various items (even though it will cost more in 5 years’ time it is possible to use basic escalation in prices to determine a future amount).</p>
                                <p>The idea will then be to have a current year budget as well as a five year budget.  In this way you will more accurately be able to budget for the reserves needed.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 22: Audits <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Section 90 of the Companies Act contains provisions applicable to an auditor engaged to perform a statutory audit of a company and in short thus prohibits an auditor to provide audit and certain specified services to the same client.</p>
                                <p>In summary, it prohibits an auditor to prepare financial statements and to Audit them as well.</p>
                                <p>This prohibition only affects Home Owner’s Associations that are Companies where the Memorandum of Incorporation states that it is compulsory for an Audit to be completed.</p>
                                <p>What are our options?</p>
                                <ul>
                                    <li>An external, independent accountant needs to compile the Financial Statements and then the Auditor may audit these (some Auditors are prepared to have an internal person that is registered with an accounting body do this).</li>
                                    <li>Alternatively, they can amend the Memorandum of Incorporation. The Memorandum of Incorporation would be amended once off to state that HOA would do voluntary audits and not compulsory/statutory audits. An expert would need to be hired to make these amendments to the Memorandum of Incorporation. Once this is changed then Section 90 won’t apply anymore and the Auditor will be able to compile and audit the financial statements.</li>
                                </ul>
                                <p>For Homeowners Associations that are governed by a Constitution the Constitution should have stipulations regarding the audit.</p>
                                <p>For Sectional Title complexes the Sectional Titles Act stipulates that all schemes with 10 or more sections must be audited by an auditor. Schemes with less than 10 sections can be checked by an Accounting Officer. It is possible for schemes who have 10 or more sections to amend their Management Rules to also make provision for an Accounting Officer rather than an Auditor to be used.</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 23: Community Schemes Ombud Service <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>In 2011 a draft bill was accepted – the Community Scheme Ombud Service Act; known as the CSOS Act – this set the way for a new service not only for the Sectional Title Industry but for all Community schemes including Homeowners Associations and Retirement Villages.</p>
                                <p>The vision of the Ombud service – To establish a world class dispute resolution service within community schemes.</p>
                                <p>The mission statement – To facilitate and maintain a world-class dispute resolution service to promote good governance of community schemes by providing education and training to all relevant stakeholders.</p>
                                <p>With emphasize on the fact that the service is not in operation yet this will have a huge impact on the industry.</p>
                                <p>The services the Ombud Service will provide includes the following:</p>
                                <ul>
                                    <li>Dispute resolution that is more accessible than litigation or arbitration</li>
                                    <li>The Act also provides for the CSOS to become the custodian and quality controller of the governance documentation relating to all community housing schemes, to monitor compliance and to provide public access to that documentation</li>
                                    <li>Education and training to all stakeholders</li>
                                </ul>
                                <p>The Ombud Service already have a website up and running – http://www.csos.org.za/</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 24: Provident Fund For Employees <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Given the social inequalities across South Africa and the profile of building staff concerned (e.g. cleaners, gardeners, access controllers), it is strongly recommended that staff employed directly by the building are assisted by the trustees or directors to have adequate retirement planning and funeral cover in place. A provident or pension fund for the building employees is strongly recommended, including a funeral policy covering family members too. The product and service provider concerned must be credible and registered with the FSB. Typically 10% of the employee’s monthly salary should be paid into a provident or pension fund and the costs are often split by the staff member and building; many buildings cover the full cost of the monthly instalment as an employment benefit. Managing agents will likely be able to recommend service providers based on prior experience and will also be able to assist with the explaining and signing the necessary enrolment documentation. Annual reviews of documented beneficiaries for the policy are very important after inception. The monthly deductions can conveniently be managed via the payroll together with annual reporting of fund values. In this way responsible provision is made for the retirement of staff who generally plan an integral part in the effective management of a property complex. For more information on this subject please contact the sender on the details shown below</p>
                            </div>
                           </div>
                          <div class="set">
                            <a href="#">Tip 25: Electric Fence Compliance Certificates <i class="fa fa-plus"></i></a>
                            <div class="content">
                                <p>Most complexes have electric fences on their perimeter walls. Regulation 12 of the Electric Machinery Regulations 2011 applies to these fences.</p>
                                <p>The regulation requires all fences to have a compliance certificate – with the exemption of fences that existed before 1 October 2012 and that have not been altered or added to since that date. Eventhough there is no legal requirement for these fences to have a certificate it is suggested that this is done anyway to ensure safety of the fence.</p>
                                <p>The person issuing the certificate must be accredited with the Department of Labour.</p>
                                <p>The Regulation does not state that there is an expiry date for a certificate, but if the fence is changed or extended a new certificate is required.</p>
                                <p>A unit in the complex cannot be transferred to a new owner without a copy of this certificate.</p>
                            </div>
                           </div>
                          
                        </div>
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
