<section class="property_section">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-8 pr-0">
            <div class="heading">
               <h2>Find a Property</h2>
            </div>
            <div class="property-section-content">
               <div class="property-tabs__reset mb-3 d-flex align-items-center justify-content-between">
                  <ul class="nav nav-pills" id="pills-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">To Rent</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false">For Sale</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                           role="tab" aria-controls="pills-contact" aria-selected="false">Commercial</a>
                     </li>
                  </ul>
                  <a href="javascript:void(0);" id="resetAllForm" class="reset-filter"><u>Reset Filter</u></a>
               </div>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                     <div class="content">
                        <form action="{{ route('getProperty') }}" method="get" id="formRentTypeSubmit" class="resetFormData">
                           <div class="input-group mb-3 search_view">
                              <select id="cityrent"  class="select2 form-control search-input" multiple="multiple" data-placeholder="Enter a province, city or suburb, Multiple area may be entered." >
                              </select>
                              <!--<input type="text" class="form-control search-input"-->
                              <!--    placeholder="Enter a province, city or suburb, Multiple area may be entered."-->
                              <!--    aria-label="Enter a province, city or suburb, Multiple area may be entered."-->
                              <!--    aria-describedby="button-addon2">-->
                              <div class="input-group-append">
                                 <button data-formtype="formRentTypeSubmit" data-citydata="cityrent" class="btn btn-outline-secondary search-btn submitSearchData" type="button"
                                    id="button-addon2">Search</button>
                              </div>
                           </div>
                           <input type="hidden" name="city" class="stringCity">
                           <input type="hidden" name="stype" value="for rent">
                           <div class="select_buttons mb-3">
                              <div class="single_select_buttons select_icon">
                                 <select name="ptype" class="form-select" aria-label="Default select example">
                                    <option value="">Product Type</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="office">Office</option>
                                    <option value="retail">retail</option>
                                    <option value="business">Business</option>
                                    <option value="commercial land">commercial land</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select name="minprice" class="form-select" aria-label="Default select example">
                                    <option value="">Min Price</option>
                                    <option value="500000">500,000 </option>
                                    <option value="1000000">1,000,000 </option>
                                    <option value="1500000">1,500,000 </option>
                                    <option value="2000000">2,000,000 </option>
                                    <option value="2500000">2,500,000 </option>
                                    <option value="3000000">3,000,000 </option>
                                    <option value="3500000">3,500,000 </option>
                                    <option value="4000000">4,000,000 </option>
                                    <option value="4500000">4,500,000 </option>
                                    <option value="5000000">5,000,000 </option>
                                    <option value="5500000">5,500,000 </option>
                                    <option value="6000000">6,000,000 </option>
                                    <option value="6500000">6,500,000 </option>
                                    <option value="7000000">7,000,000 </option>
                                    <option value="7500000">7,500,000 </option>
                                    <option value="8000000">8,000,000 </option>
                                    <option value="8500000">8,500,000 </option>
                                    <option value="9000000">9,000,000 </option>
                                    <option value="9500000">9,500,000 </option>
                                    <option value="10000000">10,000,000 </option>
                                    <option value="10500000">10,500,000 </option>
                                    <option value="11000000">11,000,000 </option>
                                    <option value="11500000">11,500,000 </option>
                                    <option value="12000000">12,000,000 </option>
                                    <option value="12500000">12,500,000 </option>
                                    <option value="13000000">13,000,000 </option>
                                    <option value="13500000">13,500,000 </option>
                                    <option value="14000000">14,000,000 </option>
                                    <option value="14500000">14,500,000 </option>
                                    <option value="15000000">15,000,000 </option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select name="maxprice" class="form-select" aria-label="Default select example">
                                    <option value="">Max Price</option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000">1,000,000</option>
                                    <option value="1500000">1,500,000</option>
                                    <option value="2000000">2,000,000</option>
                                    <option value="2500000">2,500,000</option>
                                    <option value="3000000">3,000,000</option>
                                    <option value="3500000">3,500,000</option>
                                    <option value="4000000">4,000,000</option>
                                    <option value="4500000">4,500,000</option>
                                    <option value="5000000">5,000,000</option>
                                    <option value="5500000">5,500,000</option>
                                    <option value="6000000">6,000,000</option>
                                    <option value="6500000">6,500,000</option>
                                    <option value="7000000">7,000,000</option>
                                    <option value="7500000">7,500,000</option>
                                    <option value="8000000">8,000,000</option>
                                    <option value="8500000">8,500,000</option>
                                    <option value="9000000">9,000,000</option>
                                    <option value="9500000">9,500,000</option>
                                    <option value="10000000">10,000,000</option>
                                    <option value="10500000">10,500,000</option>
                                    <option value="11000000">11,000,000</option>
                                    <option value="11500000">11,500,000</option>
                                    <option value="12000000">12,000,000</option>
                                    <option value="12500000">12,500,000</option>
                                    <option value="13000000">13,000,000</option>
                                    <option value="13500000">13,500,000</option>
                                    <option value="14000000">14,000,000</option>
                                    <option value="14500000">14,500,000</option>
                                    <option value="15000000">15,000,000</option>
                                    <option value="15500000">15,500,000</option>
                                    <option value="16000000">16,000,000</option>
                                    <option value="16500000">16,500,000</option>
                                    <option value="17000000">17,000,000</option>
                                    <option value="17500000">17,500,000</option>
                                    <option value="18000000">18,000,000</option>
                                    <option value="18500000">18,500,000</option>
                                    <option value="19000000">19,000,000</option>
                                    <option value="19500000">19,500,000</option>
                                    <option value="20000000">20,000,000</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select name="beds" class="form-select" aria-label="Default select example">
                                    <option value="">Beds</option>
                                    <option value="1">1 Beds</option>
                                    <option value="2">2 Beds</option>
                                    <option value="3">3 Beds</option>
                                    <option value="4">4 Beds</option>
                                    <option value="5">5 Beds</option>
                                    <option value="6">6 Beds</option>
                                    <option value="7">7 Beds</option>
                                    <option value="8">8 Beds</option>
                                    <option value="9">9 Beds</option>
                                    <option value="10">10 Beds</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select name="bath" class="form-select" aria-label="Default select example">
                                    <option value="">Baths</option>
                                    <option value="1">1 Baths</option>
                                    <option value="2">2 Baths</option>
                                    <option value="3">3 Baths</option>
                                    <option value="4">4 Baths</option>
                                    <option value="5">5 Baths</option>
                                    <option value="6">6 Baths</option>
                                    <option value="7">7 Baths</option>
                                    <option value="8">8 Baths</option>
                                    <option value="9">9 Baths</option>
                                    <option value="10">10 Baths</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons">
                                 <button type="button" id="moreOptionButtonRent" class="search-btn">More filter +</button>
                              </div>
                                <div id="moreAdvanceOptionSerachRent" style="">
                                    <div class="single_select_buttons select_icon">
                                     <select name="garage"  class="form-select" aria-label="Default select example">
                                        <option value="">Garage</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                     </select>
                                    </div>
                                    <div class="single_select_buttons select_icon">
                                     <select name="prkng"  class="form-select" aria-label="Default select example">
                                        <option value="">Parking</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                     </select>
                                    </div>
                                    <div class="single_select_buttons select_icon">
                                     <select name="fminsize"  class="form-select" aria-label="Default select example">
                                        <option value="">Floor Min Size (m²)</option>
                                            <option value="20"> 20</option>
                                            <option value="40"> 40</option>
                                            <option value="60"> 60</option>
                                            <option value="80"> 80</option>
                                            <option value="100"> 100</option>
                                            <option value="150"> 150</option>
                                            <option value="200"> 200</option>
                                            <option value="250"> 250</option>
                                            <option value="300"> 300</option>
                                            <option value="350"> 350</option>
                                            <option value="400"> 400</option>
                                            <option value="450"> 450</option>
                                            <option value="500"> 500</option>
                                     </select>
                                    </div>
                                   <div class="single_select_buttons select_icon">
                                     <select name="fmaxsize"  class="form-select" aria-label="Default select example">
                                        <option value="">Floor Max Size (m²)</option>
                                            <option value="20"> 20</option>
                                            <option value="40"> 40</option>
                                            <option value="60"> 60</option>
                                            <option value="80"> 80</option>
                                            <option value="100"> 100</option>
                                            <option value="150"> 150</option>
                                            <option value="200"> 200</option>
                                            <option value="250"> 250</option>
                                            <option value="300"> 300</option>
                                            <option value="350"> 350</option>
                                            <option value="400"> 400</option>
                                            <option value="450"> 450</option>
                                            <option value="500"> 500</option>
                                     </select>
                                    </div>
                                </div>
                           </div>
                        </form>
                        <div class="recent-search-view">
                           <div class="recent-search d-flex align-items-center">
                              <p>Recent Search: </p>
                              <div class="searches">
                                 <span class="badge">Alberto</span>
                                 <span class="badge">Benoni</span>
                                 <span class="badge">Boksburg</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                     aria-labelledby="pills-profile-tab">
                     <div class="content">
                        <form action="{{ route('getProperty') }}" method="get" id="formSaleTypeSubmit" class="resetFormData">
                           <div class="input-group mb-3 search_view">
                              <select id="citysale" class="select2 form-control search-input" multiple="multiple" data-placeholder="Enter a province, city or suburb, Multiple area may be entered." >
                              </select>
                              <!--<input type="text" class="form-control search-input"-->
                              <!--    placeholder="Enter a province, city or suburb, Multiple area may be entered."-->
                              <!--    aria-label="Enter a province, city or suburb, Multiple area may be entered."-->
                              <!--    aria-describedby="button-addon2">-->
                              <div class="input-group-append">
                                 <button data-formtype="formSaleTypeSubmit" data-citydata="citysale" class="btn btn-outline-secondary search-btn submitSearchData" type="button"
                                    id="button-addon2">Search</button>
                              </div>
                           </div>
                           <input type="hidden" name="city" class="stringCity">
                           <input type="hidden" name="stype"  value="for sale">
                           <div class="select_buttons mb-3">
                              <div class="single_select_buttons select_icon">
                                 <select name="ptype" class="form-select" aria-label="Default select example">
                                    <option value="">Product Type</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="office">Office</option>
                                    <option value="retail">retail</option>
                                    <option value="business">Business</option>
                                    <option value="commercial land">commercial land</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select class="form-select" name="minprice" aria-label="Default select example">
                                    <option value="">Min Price</option>
                                    <option value="500000">500,000 </option>
                                    <option value="1000000">1,000,000 </option>
                                    <option value="1500000">1,500,000 </option>
                                    <option value="2000000">2,000,000 </option>
                                    <option value="2500000">2,500,000 </option>
                                    <option value="3000000">3,000,000 </option>
                                    <option value="3500000">3,500,000 </option>
                                    <option value="4000000">4,000,000 </option>
                                    <option value="4500000">4,500,000 </option>
                                    <option value="5000000">5,000,000 </option>
                                    <option value="5500000">5,500,000 </option>
                                    <option value="6000000">6,000,000 </option>
                                    <option value="6500000">6,500,000 </option>
                                    <option value="7000000">7,000,000 </option>
                                    <option value="7500000">7,500,000 </option>
                                    <option value="8000000">8,000,000 </option>
                                    <option value="8500000">8,500,000 </option>
                                    <option value="9000000">9,000,000 </option>
                                    <option value="9500000">9,500,000 </option>
                                    <option value="10000000">10,000,000 </option>
                                    <option value="10500000">10,500,000 </option>
                                    <option value="11000000">11,000,000 </option>
                                    <option value="11500000">11,500,000 </option>
                                    <option value="12000000">12,000,000 </option>
                                    <option value="12500000">12,500,000 </option>
                                    <option value="13000000">13,000,000 </option>
                                    <option value="13500000">13,500,000 </option>
                                    <option value="14000000">14,000,000 </option>
                                    <option value="14500000">14,500,000 </option>
                                    <option value="15000000">15,000,000 </option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select  name="maxprice" class="form-select" aria-label="Default select example">
                                    <option value="">Max Price</option>
                                    <option value="500000">500,000</option>
                                    <option value="1000000">1,000,000</option>
                                    <option value="1500000">1,500,000</option>
                                    <option value="2000000">2,000,000</option>
                                    <option value="2500000">2,500,000</option>
                                    <option value="3000000">3,000,000</option>
                                    <option value="3500000">3,500,000</option>
                                    <option value="4000000">4,000,000</option>
                                    <option value="4500000">4,500,000</option>
                                    <option value="5000000">5,000,000</option>
                                    <option value="5500000">5,500,000</option>
                                    <option value="6000000">6,000,000</option>
                                    <option value="6500000">6,500,000</option>
                                    <option value="7000000">7,000,000</option>
                                    <option value="7500000">7,500,000</option>
                                    <option value="8000000">8,000,000</option>
                                    <option value="8500000">8,500,000</option>
                                    <option value="9000000">9,000,000</option>
                                    <option value="9500000">9,500,000</option>
                                    <option value="10000000">10,000,000</option>
                                    <option value="10500000">10,500,000</option>
                                    <option value="11000000">11,000,000</option>
                                    <option value="11500000">11,500,000</option>
                                    <option value="12000000">12,000,000</option>
                                    <option value="12500000">12,500,000</option>
                                    <option value="13000000">13,000,000</option>
                                    <option value="13500000">13,500,000</option>
                                    <option value="14000000">14,000,000</option>
                                    <option value="14500000">14,500,000</option>
                                    <option value="15000000">15,000,000</option>
                                    <option value="15500000">15,500,000</option>
                                    <option value="16000000">16,000,000</option>
                                    <option value="16500000">16,500,000</option>
                                    <option value="17000000">17,000,000</option>
                                    <option value="17500000">17,500,000</option>
                                    <option value="18000000">18,000,000</option>
                                    <option value="18500000">18,500,000</option>
                                    <option value="19000000">19,000,000</option>
                                    <option value="19500000">19,500,000</option>
                                    <option value="20000000">20,000,000</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select name="beds" class="form-select" aria-label="Default select example">
                                    <option value="">Beds</option>
                                    <option value="1">1 Beds</option>
                                    <option value="2">2 Beds</option>
                                    <option value="3">3 Beds</option>
                                    <option value="4">4 Beds</option>
                                    <option value="5">5 Beds</option>
                                    <option value="6">6 Beds</option>
                                    <option value="7">7 Beds</option>
                                    <option value="8">8 Beds</option>
                                    <option value="9">9 Beds</option>
                                    <option value="10">10 Beds</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons select_icon">
                                 <select  name="bath" class="form-select" aria-label="Default select example">
                                    <option value="">Baths</option>
                                    <option value="1">1 Baths</option>
                                    <option value="2">2 Baths</option>
                                    <option value="3">3 Baths</option>
                                    <option value="4">4 Baths</option>
                                    <option value="5">5 Baths</option>
                                    <option value="6">6 Baths</option>
                                    <option value="7">7 Baths</option>
                                    <option value="8">8 Baths</option>
                                    <option value="9">9 Baths</option>
                                    <option value="10">10 Baths</option>
                                 </select>
                              </div>
                              <div class="single_select_buttons">
                                 <button type="button" id="moreOptionButtonSale" class="search-btn">More filter +</button>
                              </div>
                              <div id="moreAdvanceOptionSerachSale" style="">
                                  <div class="single_select_buttons select_icon">
                                 <select name="garage"  class="form-select" aria-label="Default select example">
                                    <option value="">Garage</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                 </select>
                              </div>
                               <div class="single_select_buttons select_icon">
                                 <select name="prkng"  class="form-select" aria-label="Default select example">
                                    <option value="">Parking</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                 </select>
                              </div>
                                <div class="single_select_buttons select_icon">
                                 <select name="fminsize"  class="form-select" aria-label="Default select example">
                                    <option value="">Floor Min Size (m²)</option>
                                        <option value="20"> 20</option>
                                        <option value="40"> 40</option>
                                        <option value="60"> 60</option>
                                        <option value="80"> 80</option>
                                        <option value="100"> 100</option>
                                        <option value="150"> 150</option>
                                        <option value="200"> 200</option>
                                        <option value="250"> 250</option>
                                        <option value="300"> 300</option>
                                        <option value="350"> 350</option>
                                        <option value="400"> 400</option>
                                        <option value="450"> 450</option>
                                        <option value="500"> 500</option>
                                 </select>
                              </div>
                               <div class="single_select_buttons select_icon">
                                 <select name="fmaxsize"  class="form-select" aria-label="Default select example">
                                    <option value="">Floor Max Size (m²)</option>
                                        <option value="20"> 20</option>
                                        <option value="40"> 40</option>
                                        <option value="60"> 60</option>
                                        <option value="80"> 80</option>
                                        <option value="100"> 100</option>
                                        <option value="150"> 150</option>
                                        <option value="200"> 200</option>
                                        <option value="250"> 250</option>
                                        <option value="300"> 300</option>
                                        <option value="350"> 350</option>
                                        <option value="400"> 400</option>
                                        <option value="450"> 450</option>
                                        <option value="500"> 500</option>
                                 </select>
                              </div>
                            </div>
                           </div>
                        </form>
                        <div class="recent-search-view">
                           <div class="recent-search d-flex align-items-center">
                              <p>Recent Search: </p>
                              <div class="searches">
                                 <span class="badge">Alberto</span>
                                 <span class="badge">Benoni</span>
                                 <span class="badge">Boksburg</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                     aria-labelledby="pills-contact-tab">
                     data not available
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>