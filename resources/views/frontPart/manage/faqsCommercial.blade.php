@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.commercial-property-management.faqs-commercial')->first(); @endphp
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
              <li><a href="{{ route('manage') }}">Managedddddd</a></li>
              <li><a href="#">Commercial Property Management</a></li>
              <li><a href="#">faqs</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Frequently Asked Questions – Commercial</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph faqs">
                        <div class="accordion-container">
                          <div class="set">
                            <a href="#">How Do I Pay Rent? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>For your convenience you may make your monthly rental payment in one of the following ways:</p>
                              <ul>
                                  <li>Debit orders</li>
                                  <li>Stop orders</li>
                                  <li>Electronic transfers</li>
                                  <li>Bank deposits at any Standard Bank using a conventional Standard Bank deposit slip</li>
                              </ul>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What Happens If I Don’t Pay My Rent? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Failure to pay, continuous late payment of rent, or withholding payment is a violation of the lease agreement. Such action gives the landlord the right to cancel the lease agreement. Final demand letters and interest are levied to your rent account in the event of delayed rental payment and hence it is very important to ensure that rent is paid promptly and consistently.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">How Much Can An Owner Increase My Rental? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Your landlord must give written notice of an increase, which becomes effective from the date stipulated in the letter. The law does not limit the amount by which a landlord may increase the rent however, the rental increase must be reasonable.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Can I Withhold Rent If The Landlord Fails To Carry Out Maintenance? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No.  The landlord is only obliged to carry out such repairs and maintenance that are not merely an inconvenience but that make it impossible for the use and enjoyment of your home.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Is There Any Law Which Exists To Protect My Rights? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>Yes.  Common Law, the Estate Agency Affairs Board and the Consumer Protection Act protect both yourself and the landlord from exploiting each other and against other forms of unfair practice.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">What Would Happen To Me If The Unit Is Sold? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>If your home is sold, the new landlord is bound to honour any rental agreement existing at the time of the sale, this is a common law principle, however your lease may contain clauses permitting termination of tenancy, please read it carefully.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">If I Get Permission To Install A Security Gate, Burglar Guards Or Fitted Carpets And Do So, Can I Remove Them When I Vacate? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No. Fixtures and fittings are permanent and become the property of the landlord. Unless the landlord requires you to remove them and to reinstate the unit to its original condition, at your own cost.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">Can The Landlord Or His Agent Enter My Home Whenever He Pleases? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No.  Neither the landlord nor his agent may enter the premises without your consent; the lease entitles you to limited real rights in the property. You are however expected to provide reasonable access to the premises for the purpose of inspection or repairs.</p>
                            </div>
                          </div>
                          <div class="set">
                            <a href="#">If I Have A Burglary And My Goods Are Stolen Am I Covered By Insurance? <i class="fa fa-plus"></i></a>
                            <div class="content">
                              <p>No. The property insurance does not cover your personal belongings. It is strongly advised that you insure your goods.</p>
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
