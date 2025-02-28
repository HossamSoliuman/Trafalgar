@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','useful-links')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <!-- breadcrumb section  -->
    <div class="breadcrumbs">
      <div class="container">
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Useful Links</a></li>
          </ul>
      </div>
    </div>
    <!-- breadcrumb section  -->
    
    <!-- useful links page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Useful Links</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="manage-paragraph">
                        <h4>Associations:</h4>
                        <div class="links_list_view">
                            <div class="links_list">
                                <p>National Association of Managing Agents (NAMA):</p>
                                <a href="#">http://www.nama.org.za/</a>
                            </div>
                            <div class="links_list">
                                <p>Estate Agency Affairs Board (EAAB):</p>
                                <a href="#">http://www.eaab.org.za/</a>
                            </div>
                            <div class="links_list">
                                <p>CIA:</p>
                                <a href="#">http://cia.co.za/</a>
                            </div>
                            <div class="links_list">
                                <p>Johannesburg Property Owners and Managers Association (JPOMA):</p>
                                <a href="#">http://www.jpoma.co.za/</a>
                            </div>
                        </div>
                        
                        <h4>Social Media:</h4>
                        <div class="links_list_view">
                            <div class="links_list">
                                <p>Trafalgar Facebook page:</p>
                                <a href="#">https://www.facebook.com/Trafalgar.Property</a>
                            </div>
                            <div class="links_list">
                                <p>Trafalgar Twitter:</p>
                                <a href="#">https://twitter.com/TrafalgarPM</a>
                            </div>
                        </div>
                        
                        <h4>Partner Links:</h4>
                        <div class="links_list_view">
                            <div class="links_list">
                                <a href="#">www.sectionaltitlecentre.co.za</a>
                            </div>
                            <div class="links_list">
                                <a href="#">www.lessor.co.za</a>
                            </div>
                            <div class="links_list">
                                <a href="#">www.paddocks.co.za/advice/paddocks-club/</a>
                            </div>
                            <div class="links_list">
                                <a href="#">www.deeds.gov.za</a>
                            </div>
                            <div class="links_list">
                                <a href="#">club.paddocks.co.za</a>
                            </div>
                        </div>
                        
                        <h4>National City Council Websites:</h4>
                        <div class="links_list_view">
                            <div class="links_list">
                                <p>City of Joburg</p>
                                <a href="#">http://www.joburg.org.za/</a>
                            </div>
                            <div class="links_list">
                                <p>Tshwane City Council – Pretoria</p>
                                <a href="#">http://www.tshwane.gov.za/</a>
                            </div>
                            <div class="links_list">
                                <p>City of Cape Town</p>
                                <a href="#">http://www.capetown.gov.za/</a>
                            </div>
                            <div class="links_list">
                                <p>East London</p>
                                <a href="#">http://www.buffalocity.gov.za/</a>
                            </div>
                            <div class="links_list">
                                <p>Port Elizabeth</p>
                                <a href="#">http://www.nelsonmandelabay.gov.za/</a>
                            </div>
                            <div class="links_list">
                                <p>Durban</p>
                                <a href="#">http://www.durban.gov.za/Pages/default.aspx</a>
                            </div>
                        </div>
                        
                        <h4>Trafalgar Managed Complexes Or Estates:</h4>
                        <div class="links_list_view">
                            <div class="links_list">
                                <p>Valley View Estate</p>
                                <a href="#">http://valleyviewestatehoa.org.za/</a>
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
    <!-- useful links page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
