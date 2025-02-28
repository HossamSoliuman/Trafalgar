@extends('layouts.front')

@section('content')
  
  <!-- breadbrumb  -->
  <div class="breadcrumbs">
      <div class="container">
          <ul>
              <li><a href="#">Property</a></li>
              <li><a href="#">Cecilia Marais</a></li>
          </ul>
      </div>
  </div>
  <!-- breadcrumb -->
  
  <!-- agent detail -->
  <section class="agentdetail_section">
      <div class="container">
        <div class="details">
            <div class="agent_image">
                <img class="img-fluid" src="https://webplan.live/front/images/agent-img.png" />
            </div>
            <div class="agent_detail">
                <h3>Cecilia Marais</h3>
                <h4>Rental Property Agent</h4>
                <div class="agent_social_network">
                    <ul>
                        <li>
                            <span class="icon-phone"></span> <a href="tel:021 410 5500">021 410 5500</a>
                        </li>
                        <li>
                            <span class="icon-envelope"></span> <a href="mailto:ceciliam@trafalgar.co.za">ceciliam@trafalgar.co.za</a>
                        </li>
                        <li>
                            <span class="icon-whatsapp"></span> Whatsapp agent
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
  </section>
  <!-- agent detail -->
  
  <!-- guldenland section  -->
  <section class="guldenland_section agent_section">
        <div class="container">

            <div class="guldenland_products">
                
                <div class="guldenland_products_listing">
                    <div class="heading mb-0">
                        <h2>View all Cecilia Marais’s listing</h2>
                    </div>
                    <div class="order_grid_view">
                        <div class="order_view">
                            <span>
                                <b>Order By: </b> 
                                <select id="setSortType" class="form-select">
                                     <option value="default">Default</option>
                                    <option value="lowtohigh">Price - low to high</option>
                                    <option value="hightolow">Price - high to low</option>
                                    <option value="mostrecent">Most Recent</option>
                                    <option value="alphabat">Alphabetical</option>
                                    <!--<option value="default">Default</option>-->
                                    <!--<option value="lowtohigh">Price - low to high</option>-->
                                    <!--<option value="hightolow">Price - high to low</option>-->
                                    <!--<option value="mostrecent">Most Recent</option>-->
                                    <!--<option value="alphabat">Alphabetical</option>-->
                                 </select>
                            </span>
                        </div>
                        <div class="list_map_view">
                            <p class="m-0 mr-3">Showing: 1 - 0 of 0</p>
                            <a class="list_view" id="showListDiv" href="#"><img class="img-fluid" src="https://webplan.live/front/images/list.png"></a>
                            <a class="map_view" id="showMapDiv" href="javascript:void(0)"><img class="img-fluid" src="https://webplan.live/front/images/map.png"></a>
                        </div>
                    </div>
                    <div class="mapping_view" id="mapping_view" style="display:none">
                        <div class="guldenland_map_view">
                            <div class="container">
                                <div id="map_tuts" style="width: 100%; height: 500px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="62CCF8DF-8C66-4DDE-BA2F-5E7AC4699A8A" style="display: none;">To navigate, press the arrow keys.</span></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-mot"></p></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
                            </div>
                            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13741.685533298412!2d76.9297242!3d30.56564785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1644493376978!5m2!1sen!2sin" -->
                            <!--width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                        </div>
                    </div>
                    <div class="guldenland_view" id="showPropertyList" style="display:block">
                        <div class="guldenland_all_product">
                            <div class="guldenland_each_product">
                                <div class="product_img">
                                    <img class="img-fluid" src="https://webplan.live/front/images/prd-img.jpg">
                                </div>
                                <div class="product_content">
                                    <h4>R 760 000</h4>
                                    <small>5 Vredenhof Street, Villa Castello, Guldenland, Strand</small>
                                    <h3>Property Title</h3>
                                    <p>One-bedroom apartment is situated in a popular complex
                                    and offer an open plan living area and kitchen and full
                                    bathroom. 24 Hour ...</p>
                                    <div class="product_detail">
                                        <span><img src="https://webplan.live/front/images/icon_bed_new.png">1 Bedroom</span>
                                        <span><img src="https://webplan.live/front/images/icon_bath_new.png">1 Bathroom</span>
                                        <span><img src="https://webplan.live/front/images/icon_parking.png">1 Garage</span>
                                        <span><img src="https://webplan.live/front/images/icon_floor_new.png"><small>48m<sup>2</sup></small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="contact_sidelist">
                        <h4>Contact Cecilia</h4>
                        
                        <form>
                            <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                    <label for="name">Name<span>*</span></label>
                                    <input type="text" class="form-control" id="name">
                                  </div>
                              </div>
                              <div class="col-6 pr-2">
                                  <div class="form-group ">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="email" class="form-control" id="email">
                                  </div>
                              </div>
                              <div class="col-6 pl-2">
                                  <div class="form-group">
                                    <label for="phone">Phone<span>*</span></label>
                                    <input type="number" class="form-control" id="phone">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                    <label for="message">Message<span>*</span></label>
                                    <textarea id="message" class="form-control" name="message" rows="4" style="width:100%;"></textarea>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <button type="button" class="form-control">Send message</button>
                              </div>
                              <div class="col-12">
                                  <p class="term-policy">
                                      By continuing I understand and agree with Trafalgar <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                  </p>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="https://webplan.live/front/images/alert.png" alt="">
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="https://webplan.live/front/images/property.png" alt="">
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="https://webplan.live/front/images/valuation.png" alt="">
                                </div>
                                <div class="magazine-content">
                                    <h4>Free Valution</h4>
                                    <p class="mb-0">Request a free property valuation from one of our real
                                        estate agents to find out what your property is worth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <!-- end guldenland section  -->

    <!-- footer top section  -->

    <section class="footer_top_section">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer_top_content">
                            <h5>Property for rent <br />
                                in Gauteng</h5>
                            <div class="content_list d-flex justify-content-around">
                                <ul>
                                    <li><a href="#">Alberto</a></li>
                                    <li><a href="#">Benoni</a></li>
                                    <li><a href="#">Boksburg</a></li>
                                    <li><a href="#">Centurion</a></li>
                                    <li><a href="#">Edenvale</a></li>
                                    <li><a href="#">Johannesburg</a></li>
                                    <li><a href="#">Kempton Park</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Midrand</a></li>
                                    <li><a href="#">Pretoria</a></li>
                                    <li><a href="#">Randburg</a></li>
                                    <li><a href="#">Roodepoort</a></li>
                                    <li><a href="#">Sandton</a></li>
                                    <li><a href="#">Soweto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Property for rent <br class="d-none d-md-block" />
                                in Western Cape</h5>
                            <div class="content_list">
                                <ul>
                                    <li><a href="#">Bellville</a></li>
                                    <li><a href="#">Cape Town</a></li>
                                    <li><a href="#">Durbanville</a></li>
                                    <li><a href="#">Hermanus</a></li>
                                    <li><a href="#">Paarl</a></li>
                                    <li><a href="#">Somerset West</a></li>
                                    <li><a href="#">Stellenbosch</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Property for rent <br class="d-none d-md-block" />
                                in KwaZulu Natal</h5>
                            <div class="content_list">
                                <ul>
                                    <li><a href="#">Ballito</a></li>
                                    <li><a href="#">Durban</a></li>
                                    <li><a href="#">Hillcrest</a></li>
                                    <li><a href="#">Pietermaritzburg</a></li>
                                    <li><a href="#">Pinetown</a></li>
                                    <li><a href="#">Umhlanga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Rest of South Africa <br /><br class="brr d-none d-md-block" /></h5>
                            <div class="content_list">
                                <ul>
                                    <li><a href="#">Bloemfontein</a></li>
                                    <li><a href="#">East London</a></li>
                                    <li><a href="#">Nelspruit</a></li>
                                    <li><a href="#">Polokwane</a></li>
                                    <li><a href="#">Port Elizabeth</a></li>
                                    <li><a href="#">Rustenburg</a></li>
                                    <li><a href="#">Witbank</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer top section  -->

    <!-- main footer section  -->

   @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection

@push('tagger-script-property-search-result-page')
@include('frontPart.js.propertySearchResultTagger')
@endpush
