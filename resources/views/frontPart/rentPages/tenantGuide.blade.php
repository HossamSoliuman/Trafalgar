@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','rent.tenant-guide')->first(); @endphp
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
              <li><a href="#">Tenant Guide</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Tenant Guide</h1>
                <div class="manage-paragraph">
                    <p>Tenants are often unclear as to their responsibilities with regards to a rental property. This tenant guide has been designed with the intention of making the experience of renting a property as comfortable and convenient as possible by focusing on answering important questions and common issues. Should any other concerns remain, please don’t hesitate to ask for help either from a letting agent or using the communication channels available on this web site. It will be our pleasure to assist you with any queries or further questions you may have concerning your residential letting requirements. Managing expectations correctly from the outset is an important success factor for a positive residential letting experience.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">What are your rights as a tenant?</a></h4>
                        <ul>
                            <li>The right to occupy your home on an on-going basis, while meeting your obligations in the signed lease agreement.</li>
                            <li>To be consulted on matters that relate to you as a tenant.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">What do you as a tenant agree to?</a></h4>
                        <ul>
                            <li>To pay your rent on or before the 1st of every month in advance without deduction or demand.</li>
                            <li>To use your home as a private dwelling only.</li>
                            <li>Not to sublet your home nor any part thereof, for either a definite or indefinite period.</li>
                            <li>To maintain the interior of your home and to keep it in a good condition at all times.</li>
                            <li>Not to undertake alterations without the prior written permission from the landlord.</li>
                            <li>Not to overcrowd.</li>
                            <li>To abide by the House Rules at all times.</li>
                            <li>Not to commit a nuisance.</li>
                            <li>To return your home in good condition, i.e. the condition in which you received it.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">What does the landlord agree to?</a></h4>
                        <ul>
                            <li>Your undisturbed use and enjoyment of your home.</li>
                            <li>To carry out urgent repairs that interferes with proper use and enjoyment of the property you have rented.  Such repairs should not be merely an inconvenience, but make it impossible for your use and enjoyment of the property.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">Security Guidelines</a></h4>
                        <ul>
                            <li>Most burglaries take place during the day.</li>
                            <li>Statistics show that the majority of homes are burgled between 06h00 and 12h00.</li>
                            <li>Crime statistics show that most illegal entries are made through windows.</li>
                            <li>Garden tools are frequently used to force open doors and windows.</li>
                            <li>Most burglars do not bring tools to the scene of the crime.  The householder provides them with all that they need – keys under the mat, open doors and windows, ladders and garden tools from the shed.</li>
                            <li>Most burglars live close to the scene of their crimes.</li>
                            <li>Burglars are opportunists looking for a sign of an easy target.</li>
                            <li>The average age of a burglar is 15 years.</li>
                            <li>Any space through which a person’s head will fit could give them access.</li>
                            <li>Don’t make it easy for burglars.  Victims of crime not only lose property, they lose privacy, security and sometimes their lives.</li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <h4><a href="javascript:void(0)">General Guidelines</a></h4>
                        <ul>
                            <li>Make sure the number on your home is well positioned.  This will help the police or emergency personnel (armed response or an ambulance) during an emergency.</li>
                            <li>If you have a handyman working on your premises, make sure he is aware of your presence; don’t leave him alone for long periods of time.</li>
                            <li>Before going to bed, pre-set the police station number on your telephone, all you have to do them is push re-dial.</li>
                            <li>Never put your name and address on the key tag in case it falls in the wrong hands.  Don’t carry keys in handbags or briefcases which may contain correspondence bearing your address.</li>
                            <li>Keep keys for escape doors close to the exit point.</li>
                            <li>Make sure keys are not left in doors or window locks.</li>
                            <li>Mark your property.  Marked property can deter burglars because it’s difficult for a thief to sell and can help police to return it if found.</li>
                            <li>Don’t leave notes on the doors saying you will be away for a certain period.</li>
                        </ul>
                        <a class="green_button" href="{{ asset('storage/brochure/Trafalgar-Home-Letting-Booklet-EV.pdf') }}">Download the Tenant Guide PDF</a>
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
