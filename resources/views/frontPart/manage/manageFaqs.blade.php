
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.faqs')->first(); @endphp

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
                    <div class="manage-paragraph faqs">
                        <div class="accordion-container">
                          <div class="set">
                            <a href="#">If An Owner Rents His Unit To A Third Party – Does He Have To Notify The Body Corporate? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Yes. Section 13 (1)(f) of the Sectional Titles Schemes Management Act (STSM Act) states that an owner shall notify the Body Corporate of any change of ownership, or of mortgage changes or any other dealings in connection with his section.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Can An Owner Who Is In Arrears Vote At A General Meeting? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The STSM Act in Prescribed Management Rule 20 states that an owner shall not be entitled to vote at any general meeting when he/she failed to pay their levies and there is a court or adjudicator order against him/her for this; or where the owner is in contravention of the rules and there is a court or adjudicator order against him/her for this – except in cases where a special or unanimous resolution is required – then everyone can vote.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What Is A Participation Quota? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The participation quota (PQ) of a section is a percentage expressed to four decimal places (i.e. 0,3488). It is calculated by dividing the floor area of a section by the sum of the floor areas of all the sections in the scheme (i.e. the larger a section, the larger the PQ and vice versa). The PQ determines the size of the owner’s undivided share in the common property; it determines the value of the vote of an owner at a general meeting (where the votes are determined by value); and most importantly it determines the amount of the monthly levy payable per section (unless otherwise decided by the Developer in the beginning or the Body Corporate).</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What Is A Section? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>A section can be either a specific portion of a building (a flat) or a building in itself (a townhouse). A section must be shown on the sectional plan and each section is given a different number. The section number does not need to correspond with the door number. Lock-up garages may either be common property (with or without exclusive use rights) or constitute separate sections.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">We Had An Annual General Meeting Last Night, But The Managing Agent Said That “There Wasn’t A Quorum Present So The Meeting Has To Be Postponed” <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Prescribed Management Rule 19 states that no business shall be transacted at any general meeting unless a quorum of persons is present in person or by proxy and entitled to vote at the time when the meeting was scheduled to start.</p>
                              <p>A quorum at a general meeting shall be determined by the number of primary sections and the number of members in the scheme:</p>
                                <ul>
                                    <li>for a scheme with less than 4 primary sections or a body corporate with less than four members, by members entitled to vote and holding two thirds of the total votes of members in value</li>
                                    <li>for any other scheme, by members entitled to vote and holding one third of the total votes of members in value</li>
                                </ul>
                                <p>The Act also prescribes in Prescribed Management Rule 58 that if a quorum is not present within half an hour the meeting will be adjourned to the same day, same time, same place the next week. That is why it is so important that owners attend meetings and where possible give their proxy to another owner or the Chairman when they cannot attend the meeting.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">The Developer Sold The Last Of His Units In Our Complex, But Still Owns A Number Of Exclusive Use Garages That He Rents Out To Residents. <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The Sectional Titles Act stipulates in section 27(1)(c) that all exclusive use areas in the developer’s name are to be ceded (free of charge) to the Body Corporate when the last section in his name is transferred to a new owner.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">I Am Selling My Unit And The Managing Agent Gave Amounts Outstanding To The Body Corporate To The Transferring Attorneys? What Is A Clearance Certificate And Why Do I Have To Pay For It And Not The Buyer? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Section 15B of the Act contains a requirement that the Registrar of Deeds may not register the transfer of a section until a certificate has been produced by the conveyancer that no money is owing to the Body Corporate as at the date of registration. As transfer will not be registered and the certificate is applying to amounts owed by the seller – the seller is required to pay for the certificate. The buyer and seller can however decide to make an arrangement that the buyer will pay for it.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What Is The Difference Between A “Special Resolution” And A “Unanimous Resolution”? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>A special resolution can be passed in one of the following ways:</p>
                              <p>It can be submitted in writing to all owners to accept the resolution or not. It is then required that at least 75% (seventy five percent) of all members of the Body Corporate agree to the resolution in writing.</p>
                                <ul>
                                    <li>A general meeting can be called. 30 (thirty) days’ notice must be given to all members of the Body Corporate. The notice must specify the proposed resolution. At the meeting a normal quorum is needed and 75% (seventy five percent) of the members present at the meeting must agree to the passing of the resolution.</li>
                                </ul>
                                <p>A unanimous resolution can be passed in one of the following ways:</p>
                                <ul>
                                    <li>It can be submitted in writing to all owners to accept the resolution or not. It is then required that 100% (one hundred percent) of all members of the Body Corporate agree to the resolution in writing.</li>
                                    <li>A general meeting can be called. 30 (thirty) days’ notice must be given to all members of the Body Corporate. The notice must specify the proposed resolution. At the meeting a quorum of 80% (eighty percent) of all members of the Body Corporate is needed and all the members present at the meeting must agree to the passing of the resolution. Also any owner whose proprietary rights are affected by the proposed resolution must consent in writing.</li>
                                </ul>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">We Have A Set Of House Rules Drawn Up By The Trustees. A New Resident In The Complex Have Told Us That They Are Not Enforceable? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Conduct Rules are drawn up by either the Developer or the Trustees and must be approved with a special resolution taken by the Body Corporate. Thereafter the Conduct Rules must be approved by the Community Schemes Ombud Service (CSOS). Only then do the Rules become enforceable.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">At Every Annual General Meeting We Have An Item On The Agenda About “Directions Or Restrictions In Terms Of Section 7(1)” – What Does It Mean? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Section 7(1) of the STSM Act allows the members of the Body Corporate to issue directions to and place restrictions on the Trustees. It is often used to restrict the Trustees from spending more than a certain amount of money on any item without consulting the members, but it can also be used to direct them to carry out certain actions – i.e. investigate the Conduct Rules etc.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">My Neighbour Has Not Paid His Levies For Months And Now The Unit Has Been Sold – Will We Have To Pay A Special Levy To Cover The Cost Of The Unpaid Levies On His Unit? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Section 15B(3) of the Act stipulates that the Registrar shall not register a transfer of a unit unless there is produced to him a certificate from the Body Corporate certifying that all monies due to the Body Corporate have been paid.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">The Trustees Told Me That The Roof Of My Unit Only Protects Me, So That Means That I Have The Exclusive Use Of The Roof And Am Responsible For Maintenance Thereof. Is This True? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Exclusive use rights are either registered – in which case it is shown on the sectional plan registered at the Surveyor General’s Office and at the Deeds Office – or it can be created under the Rules as approved by the owners and CSOS. Anything else is not an exclusive use area. You are therefore not responsible for the maintenance of your section’s roof as it is common property and must be maintained by the Body Corporate.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Do We Have To Charge An Extra Levy For Exclusive Use Areas? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Section 3(1)(c) of the STSM Act requires owners who have the benefit of exclusive use areas, either registered in terms of the Act or created under the Rules of the 1971 Act, to make extra contributions (call it an exclusive use levy) to cover the costs of rates, taxes, maintenance and insurance for this area. Exclusive use areas created under the rules of the current Act are not automatically required by the Act to be levied a contribution – unless it is specifically required by the rule that created them.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">I Want To Be On The Body Corporate, But The Trustees Told Me That Only Owners Of Units In The Complex Can Be On The Body Corporate? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Your Trustees are correct! The Body Corporate consists of all owners of sections in the scheme. At a general meeting the Body Corporate elects Trustees – if this is what you want to be! – The STSM Act in Prescribed Management Rule 6 states that a Trustee shall not be required to be an owner in order to qualify for office as a Trustee.</p>
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
