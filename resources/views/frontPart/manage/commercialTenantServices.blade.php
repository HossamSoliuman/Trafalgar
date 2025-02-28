@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.commercial-property-management.commercial-tenant-services')->first(); @endphp
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
              <li><a href="#">Commercial Tenant Services</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section rent_page_content  mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Commercial Tenant Services</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>It is imperative that you have a clear understanding of both your rights and responsibilities as a tenant and those of the landlord, all negotiations and special conditions agreed to during the offer stage are explicitly stated in the lease agreement.</p>
                        <p>After your offer to lease has been successfully negotiated, you will be required to pay a deposit and sign the standard lease agreement, the commercial broker will ensure the preparation off the lease and explain the lease document to you in detail. Please take the time to read the lease and understand all the provisions contained in the document. Important issues to focus on are maintenance, the charges which you are required to pay and the lease terms and escalation clauses. Your Lease agreement is legally binding and totally compliant with the Consumer Protection Act. It has been drawn up to protect both the landlord and yourself. The lease ensures that financial issues such as rental increases, deposit and damage claims are dealt with in a fair, transparent and professional manner. You will be given a copy of the signed lease agreement for your records and reference purposes.</p>
                        <p>When you take occupation of the premises the portfolio manager/maintenance inspector will carry out an inspection with you, an agreement will be reached on the liability involved in any repairs necessary depending on the negotiations and special conditions contained within the offer.</p>
                        <p>If the premises you choose is in a Sectional Title complex, it is important that you are aware of the rules of the Body Corporate which you will be expected to observe. A copy of the rules will be given to you by the commercial broker with your lease documentation.</p>
                        <p>After you have signed your lease and paid the lease fees, deposit and first month’s rental, you will be entitled to take occupation. Please report anything which is missing or not working within 7 days of moving in. The ingoing inspection will serve as the baseline against which the unit’s condition will be compared when you vacate and when the outgoing inspection is conducted.</p>
                        <p>We have longstanding relationships with professional companies with whom we can negotiate excellent prices. If at any time you have a problem with a maintenance item of any kind, please contact our maintenance department for assistance. The relevant contact details will be shown on your monthly statement.  We endeavor to project manage maintenance issues as time effectively as possible. Your lease agreement will define who is responsible for the costs of the maintenance items concerned.</p>
                        <p>Payment of your rental is one of the most important issues to ensure a long term mutually beneficial relationship with your landlord. Without your rental the landlord cannot meet his obligations: bond, levy, rates & taxes, insurance, service and administration charges, just to mention a few examples.</p>
                        <p>Rental is due monthly in advance of the 1st of each month. You will receive a monthly statement showing our bank details and clear payment instructions on the reverse side. A Standard Bank deposit slip is also attached for your convenience and includes a pre-printed reference number. Please remember to check that your reference number is captured correctly when making branch or internet deposits. Please make sure that your prior month payment is captured and reflected correctly on your monthly Trafalgar statement.</p>
                        <p>When you want to move out you must give written notice.  Your lease stipulates the notice period or expiry date of the agreement. Please consult portfolio manager for assistance if you are unsure of what notice period is required in terms of your lease. Your rent must be up to date.  An outgoing inspection will be carried out to see if the unit is in the same condition as when you moved in. Any damages during your occupation and identified by comparing the “in” and “out” inspections will be repaired and paid for from your deposit at your expense.</p>
                        <p>Following you vacating the unit and he submission of proof that any account with the local authority for which you are responsible is settled to the date your occupancy terminates, we will commence he process of refunding your deposit. Your deposit will be refunded to you with interest providing there is no outstanding rental, nor any damages to the unit.</p>
                        <p>We wish you all the best with your new business venture and look forward to a mutually beneficial relationship.</p>  
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
