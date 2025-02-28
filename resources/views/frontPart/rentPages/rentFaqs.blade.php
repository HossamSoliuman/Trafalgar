@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent.faqs')->first(); @endphp
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
              <li><a href="{{ route('rent') }}">Rent</a></li>
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
                            <a href="#">Can my children come and stay with me during the school holidays? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Yes, if this is allowed in terms of the Body Corporate Rules or alternatively it needs to be stipulated on the lease agreement otherwise you would have to ask the Landlord’s permission.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">My lease agreement is from the 1st but can I have the keys early so I can move my furniture in before the 1st? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>You may request earlier occupation if the unit is vacant but you would have to pay pro-rata rental for the period prior to the occupation date on your lease agreement.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Why is an admin fee charged and what is this for? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>This fee is for the administrative work involved in processing your application, credit and reference checking, carrying out the ingoing inspection and the drawing up of your lease agreement.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">How much will I have to pay for overnight visitors? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Overnight visitors are not permitted.   Only the people mentioned on the lease agreement may occupy.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What is a calendar months notice – why can’t notice be given from the 15th to the 15th? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The Residential Housing Act recognizes that month to month lease agreements are from the  1st of the month and end on the last day of the month. Tenants are required to give at least one full calendar month’s notice to terminate the lease.  If you give written notice on the 15th of the month  you would be held responsible until the end of the following month.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Why can the outgoing inspection not be done at the time the notice is submitted in order to have the deposit refunded and used at another property when vacating the current premises? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>In terms of the Rental Housing Act the outgoing inspection can only be conducted within the last three days of the month, provided that the premises are vacant. If you are only moving out on the last day of the month then the joint inspection would have to be done on that day or the following day if you do not wish to be present.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Why can’t keys to the unit be returned to me after I have vacated in order for me to paint? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>In terms of the lease agreement you give up possession of the premises on the day you vacate and hand in the keys, you may not re-enter the premises to decorate. Any re-decoration must be carried out before you vacate.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">By law I have until the 7th to pay my rent, is that true? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>In terms of your lease agreement, rental is due and payable by the 1st of the month and you agree to this when you sign your lease agreement.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Why is the deposit payable more than one months rental? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The landlord decides how much deposit he requires. If there are rental arrears and damages at the end of a tenancy, a single deposit would not be sufficient.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Can my deposit be used to pay the last month’s rent? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No your deposit cannot be used to cover the last months rental. Once the outgoing inspection has been done, part of your deposit may be required to cover “damages”. If you fail to pay your last months rental, there is every possibility of this being recorded on the credit bureau.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What municipal services is the tenant liable to pay? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>This depends on the terms and conditions of the lease agreement but normally tenants are liable for electricity, water, sewerage and refuse.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Why does Trafalgar have to receive confirmation of banking details before refunding deposits? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>To ensure that the payment is made to the lease holder and not into an incorrect bank account.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">How long does it take to refund my deposit after vacating the unit? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <ul>
                                  <li>Within 7 working days provided there are no damages and you were present at the outgoing inspection.</li>
                                  <li>Within 14 days if there are damages and we need to obtain quotes, provided you were at the outgoing inspection.</li>
                                  <li>Within 21 working days if you are not present at the outgoing inspection.</li>
                              </ul>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">In a sectional title complex where the electricity meters are read by a company, the tenants want to know why the owner cannot install a prepaid meter. <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>In some Sectional Title complexes there is only one main electricity meter which is read by the Council and thus, sub meters are installed in each flat to ensure that each flat is charged their respective electricity consumption. For pre-paid meters to be installed it would mean that each flat needs to have prepaid meters. If a pre-paid meter is installed in an individual flat this means that the electricity consumed on the pre-paid meter still goes through the main Council meter and double charges are then being charged to the BC.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">When moving between two units within Trafalgar, why is it necessary to give notice and complete a new application form? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Despite being managed by Trafalgar, each property is listed, owned and managed independently. The lease is a legal document so it is necessary to give your Landlord the requisite notice. The notice period also gives the Agent time to source a new tenant to avoid loss of income to the Landlord. It is also necessary to complete a new application as your personal details, contact details, employment details and monthly income may have changed.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Am I entitled to remove a security gate when I vacate the property if I received permission to install it at my own cost? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No, fixtures and fittings are permanent and become the property of the landlord unless agreed when installing to restore the property to its original condition at your own cost.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Does the landlords insurance cover my belongings should my unit be burgled? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>The property insurance doesn’t cover your personal belongings and you would therefore need your own insurance.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What would happen to me if the landlord sells the unit in which I reside? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>If the unit is sold, the new owner is bound to honour any Lease Agreement in place at the time of the sale.</p>
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
