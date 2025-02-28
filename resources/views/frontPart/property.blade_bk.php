@extends('layouts.front')

@section('content')
    
    <section class="property_section">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-8 pr-0">
            <div class="property-section-content">
                <div class="content">
                    <form action="{{ route('property') }}" method="get" id="formRentTypeSubmit" class="resetFormData">
                       <div class="input-group mb-3 search_view">
                          <select id="cityListForSearchPage"  class="select2 form-control search-input" multiple="multiple" data-placeholder="Enter a province, city or suburb, Multiple area may be entered." >
                             
                              
                             
                          </select>
                          <!--<input type="text" class="form-control search-input"-->
                          <!--    placeholder="Enter a province, city or suburb, Multiple area may be entered."-->
                          <!--    aria-label="Enter a province, city or suburb, Multiple area may be entered."-->
                          <!--    aria-describedby="button-addon2">-->
                          <div class="input-group-append">
                             <button data-formtype="formRentTypeSubmit" data-citydata="cityListForSearchPage" class="btn btn-outline-secondary search-btn submitSearchData" type="button"
                                id="button-addon2">Search</button>
                          </div>
                       </div>
                       <input type="hidden" name="city" class="stringCity">
                       <input type="hidden" name="stype" value="for rent">
                       <div class="select_buttons mb-3">
                          <div class="single_select_buttons select_icon">
                             <select name="ptype" class="form-select" aria-label="Default select example">
                                <option  value="">Product Type</option>
                                <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == "apartment"){ echo "selected"; } ?> value="apartment">Apartment</option>
                                <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == "industrial"){ echo "selected"; } ?> value="industrial">Industrial</option>
                                <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == "office"){ echo "selected"; } ?> value="office">Office</option>
                                <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == "retail"){ echo "selected"; } ?> value="retail">retail</option>
                                <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == "business"){ echo "selected"; } ?> value="business">Business</option>
                                <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == "commercial land"){ echo "selected"; } ?> value="commercial land">commercial land</option>
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="minprice" class="form-select" aria-label="Default select example">
                                <option value="">Min Price</option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "500000"){ echo "selected"; } ?> value="500000">500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1000000"){ echo "selected"; } ?> value="1000000">1,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1500000"){ echo "selected"; } ?> value="1500000">1,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "2000000"){ echo "selected"; } ?> value="2000000">2,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "2500000"){ echo "selected"; } ?> value="2500000">2,500,000 </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "500000"){ echo "selected"; } ?> value="3000000">3,000,000 </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "3500000"){ echo "selected"; } ?> value="3500000">3,500,000 </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "4000000"){ echo "selected"; } ?> value="4000000">4,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "4500000"){ echo "selected"; } ?> value="4500000">4,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "5000000"){ echo "selected"; } ?> value="5000000">5,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "5500000"){ echo "selected"; } ?> value="5500000">5,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "6000000"){ echo "selected"; } ?> value="6000000">6,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "6500000"){ echo "selected"; } ?> value="6500000">6,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "500000"){ echo "selected"; } ?> value="7000000">7,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "7500000"){ echo "selected"; } ?> value="7500000">7,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "8000000"){ echo "selected"; } ?> value="8000000">8,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "8500000"){ echo "selected"; } ?>  value="8500000">8,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "9000000"){ echo "selected"; } ?> value="9000000">9,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "9500000"){ echo "selected"; } ?>  value="9500000">9,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "10000000"){ echo "selected"; } ?> value="10000000">10,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "10500000"){ echo "selected"; } ?> value="10500000">10,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "11000000"){ echo "selected"; } ?> value="11000000">11,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "11500000"){ echo "selected"; } ?> value="11500000">11,500,000 </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "12000000"){ echo "selected"; } ?> value="12000000">12,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "12500000"){ echo "selected"; } ?> value="12500000">12,500,000 </option>
                                <option   <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "13000000"){ echo "selected"; } ?> value="13000000">13,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "13500000"){ echo "selected"; } ?>  value="13500000">13,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "14000000"){ echo "selected"; } ?>  value="14000000">14,000,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "14500000"){ echo "selected"; } ?> value="14500000">14,500,000 </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "15000000"){ echo "selected"; } ?>  value="15000000">15,000,000 </option>
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="maxprice" class="form-select" aria-label="Default select example">
                                <option value="">Max Price</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "500000"){ echo "selected"; } ?> value="500000">500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1000000"){ echo "selected"; } ?> value="1000000">1,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1500000"){ echo "selected"; } ?> value="1500000">1,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "2000000"){ echo "selected"; } ?> value="2000000">2,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "2500000"){ echo "selected"; } ?> value="2500000">2,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "3000000"){ echo "selected"; } ?> value="3000000">3,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "3500000"){ echo "selected"; } ?> value="3500000">3,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "4000000"){ echo "selected"; } ?> value="4000000">4,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "4500000"){ echo "selected"; } ?> value="4500000">4,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "5000000"){ echo "selected"; } ?> value="5000000">5,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "5500000"){ echo "selected"; } ?> value="5500000">5,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "6000000"){ echo "selected"; } ?> value="6000000">6,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "6500000"){ echo "selected"; } ?> value="6500000">6,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "7000000"){ echo "selected"; } ?> value="7000000">7,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "7500000"){ echo "selected"; } ?> value="7500000">7,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "8000000"){ echo "selected"; } ?> value="8000000">8,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "8500000"){ echo "selected"; } ?> value="8500000">8,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "9000000"){ echo "selected"; } ?> value="9000000">9,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "9500000"){ echo "selected"; } ?> value="9500000">9,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "10000000"){ echo "selected"; } ?> value="10000000">10,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "10500000"){ echo "selected"; } ?> value="10500000">10,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "11000000"){ echo "selected"; } ?> value="11000000">11,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "11500000"){ echo "selected"; } ?> value="11500000">11,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "12000000"){ echo "selected"; } ?> value="12000000">12,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "12500000"){ echo "selected"; } ?> value="12500000">12,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "13000000"){ echo "selected"; } ?> value="13000000">13,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "13500000"){ echo "selected"; } ?> value="13500000">13,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "14000000"){ echo "selected"; } ?> value="14000000">14,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "14500000"){ echo "selected"; } ?> value="14500000">14,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "15000000"){ echo "selected"; } ?> value="15000000">15,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "15500000"){ echo "selected"; } ?> value="15500000">15,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "16000000"){ echo "selected"; } ?> value="16000000">16,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "16500000"){ echo "selected"; } ?> value="16500000">16,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "17000000"){ echo "selected"; } ?> value="17000000">17,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "17500000"){ echo "selected"; } ?> value="17500000">17,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "18000000"){ echo "selected"; } ?> value="18000000">18,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "18500000"){ echo "selected"; } ?> value="18500000">18,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "19000000"){ echo "selected"; } ?> value="19000000">19,000,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "19500000"){ echo "selected"; } ?> value="19500000">19,500,000</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "20000000"){ echo "selected"; } ?> value="20000000">20,000,000</option>
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="beds" class="form-select" aria-label="Default select example">
                                <option  value="">Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "1"){ echo "selected"; } ?> value="1">1 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "commercial land"){ echo "selected"; } ?> value="2">2 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "3"){ echo "selected"; } ?> value="3">3 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "4"){ echo "selected"; } ?> value="4">4 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "5"){ echo "selected"; } ?> value="5">5 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "6"){ echo "selected"; } ?> value="6">6 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "7"){ echo "selected"; } ?> value="7">7 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "8"){ echo "selected"; } ?> value="8">8 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "9"){ echo "selected"; } ?> value="9">9 Beds</option>
                                <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == "10"){ echo "selected"; } ?> value="10">10 Beds</option>
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="bath" class="form-select" aria-label="Default select example">
                                <option  value="">Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "1"){ echo "selected"; } ?> value="1">1 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "2"){ echo "selected"; } ?> value="2">2 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "3"){ echo "selected"; } ?> value="3">3 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "4"){ echo "selected"; } ?> value="4">4 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "5"){ echo "selected"; } ?> value="5">5 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "6"){ echo "selected"; } ?> value="6">6 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "7"){ echo "selected"; } ?> value="7">7 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "8"){ echo "selected"; } ?> value="8">8 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "9"){ echo "selected"; } ?> value="9">9 Baths</option>
                                <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == "10"){ echo "selected"; } ?> value="10">10 Baths</option>
                             </select>
                          </div>
                          <div class="single_select_buttons">
                             <button type="button" id="moreOptionButtonRent" class="search-btn">More filter +</button>
                          </div>
                            <div id="moreAdvanceOptionSerachRent" style="">
                                <div class="single_select_buttons select_icon">
                                 <select name="garage"  class="form-select" aria-label="Default select example">
                                    <option  value="">Garage</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "1"){ echo "selected"; } ?> value="1">1</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "2"){ echo "selected"; } ?> value="2">2</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "3"){ echo "selected"; } ?> value="3">3</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "4"){ echo "selected"; } ?> value="4">4</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "5"){ echo "selected"; } ?> value="5">5</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "6"){ echo "selected"; } ?> value="6">6</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "7"){ echo "selected"; } ?> value="7">7</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "8"){ echo "selected"; } ?> value="8">8</option>
                                    <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "9"){ echo "selected"; } ?> value="9">9</option>
                                    <optio <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == "10"){ echo "selected"; } ?>n value="10">10</option>
                                 </select>
                                </div>
                                <div class="single_select_buttons select_icon">
                                 <select name="prkng"  class="form-select" aria-label="Default select example">
                                    <option value="">Parking</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "1"){ echo "selected"; } ?> value="1">1</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "2"){ echo "selected"; } ?> value="2">2</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "3"){ echo "selected"; } ?> value="3">3</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "4"){ echo "selected"; } ?> value="4">4</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "5"){ echo "selected"; } ?> value="5">5</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "6"){ echo "selected"; } ?> value="6">6</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "7"){ echo "selected"; } ?> value="7">7</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "8"){ echo "selected"; } ?> value="8">8</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "9"){ echo "selected"; } ?> value="9">9</option>
                                    <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == "10"){ echo "selected"; } ?> value="10">10</option>
                                 </select>
                                </div>
                                <div class="single_select_buttons select_icon">
                                 <select name="fminsize"  class="form-select" aria-label="Default select example">
                                    <option value="">Floor Min Size (m²)</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "20"){ echo "selected"; } ?> value="20"> 20</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "40"){ echo "selected"; } ?> value="40"> 40</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "60"){ echo "selected"; } ?> value="60"> 60</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "80"){ echo "selected"; } ?> value="80"> 80</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "100"){ echo "selected"; } ?> value="100"> 100</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "150"){ echo "selected"; } ?> value="150"> 150</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "200"){ echo "selected"; } ?> value="200"> 200</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "250"){ echo "selected"; } ?> value="250"> 250</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "300"){ echo "selected"; } ?> value="300"> 300</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "350"){ echo "selected"; } ?> value="350"> 350</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "400"){ echo "selected"; } ?> value="400"> 400</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "450"){ echo "selected"; } ?> value="450"> 450</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "500"){ echo "selected"; } ?> value="500"> 500</option>
                                 </select>
                                </div>
                               <div class="single_select_buttons select_icon">
                                 <select name="fmaxsize"  class="form-select" aria-label="Default select example">
                                    <option value="">Floor Max Size (m²)</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "20"){ echo "selected"; } ?> value="20"> 20</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "40"){ echo "selected"; } ?> value="40"> 40</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "60"){ echo "selected"; } ?> value="60"> 60</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "80"){ echo "selected"; } ?> value="80"> 80</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "100"){ echo "selected"; } ?> value="100"> 100</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "150"){ echo "selected"; } ?> value="150"> 150</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "200"){ echo "selected"; } ?> value="200"> 200</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "250"){ echo "selected"; } ?> value="250"> 250</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "300"){ echo "selected"; } ?> value="300"> 300</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "350"){ echo "selected"; } ?> value="350"> 350</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "400"){ echo "selected"; } ?> value="400"> 400</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "450"){ echo "selected"; } ?> value="450"> 450</option>
                                        <option <?php if( (isset($_GET['fminsize']) && $_GET['fminsize'] !="") && $_GET['fminsize'] == "500"){ echo "selected"; } ?> value="500"> 500</option>
                                 </select>
                                </div>
                            </div>
                       </div>
                    </form>
                    <div class="recent-search-view">
                       <div class="recent-search d-flex align-items-center">
                          <p>Recent Search: </p>
                          <div class="searches">
                              @php $valSearch = Cookie::get('searchKeyword');  @endphp
                              @if(!empty($valSearch))
                              @php $valSearchArray =  explode(',',$valSearch) @endphp 
                              @for($ar = 0; $ar < count($valSearchArray); $ar++) <span class="badge">{{ $valSearchArray[$ar] }}</span>
                              @endfor
                              @endif
                              
                             <!--<span class="badge">Alberto</span>-->
                             <!--<span class="badge">Benoni</span>-->
                             <!--<span class="badge">Boksburg</span>-->
                          </div>
                       </div>
                    </div>
                 </div>
            </div>
         </div>
      </div>
    </div>
    </section>

    <!-- guldenland section  -->

    <section class="guldenland_section">
        <div class="container">
            <div class="heading mb-4">
               <h1>Property for sale in Guldenland</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing">
                    
                    <div class="order_grid_view">
                        <div class="order_view">
                            <span>
                                <b>Order By: </b> 
                                <select name="" class="form-select">
                                    <option value="">Default</option>
                                    <option value="">order 1</option>
                                    <option value="">order 2</option>
                                 </select>
                            </span>
                        </div>
                        <div class="list_map_view">
                            <p class="m-0 mr-3">Showing: {{ $propertyDatas->currentPage() }} - {{ $propertyDatas->count() }} of {{ $propertyDatas->total() }}</p>
                            <a class="list_view" id="showListDiv" href="#"><img class="img-fluid" src="{{ asset('front/images/list.png') }}"/></a>
                            <a class="map_view" id="showMapDiv" href="javascript:void(0)"><img class="img-fluid" src="{{ asset('front/images/map.png') }}"/></a>
                        </div>
                    </div>
                    <div class="mapping_view" id="mapping_view" style="display:none">
                        <div class="guldenland_map_view">
                            <div class="container">
                                <div id="map_tuts" style="width:100%; height:500px; "></div>
                            </div>
            
                            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13741.685533298412!2d76.9297242!3d30.56564785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1644493376978!5m2!1sen!2sin" -->
                            <!--width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                        </div>
                    </div>
                    <div class="guldenland_view" id="showPropertyList"  style="display:block">
                        <div class="guldenland_all_product">
                              @foreach($propertyDatas as $propertyData)
                            <div class="guldenland_each_product">
                                <div class="product_img">
                                    <img class="img-fluid" src="{{ $propertyData->photo_thumbnail }}">
                                </div>
                                <div class="product_content">
                                    <h4>R {{  number_format($propertyData->price) }}</h4>
                                    <small>{{ $propertyData->street_number }} , {{ $propertyData->street_name }} , {{ $propertyData->suburb }} , {{ $propertyData->town }} ,{{ $propertyData->province }} </small>
                                    <h3>{{ $propertyData->headline }}</h3>
                                    <p>{{ substr($propertyData->description,0,60) }}
                                    <!--    One-bedroom apartment is situated in a popular complex-->
                                    <!--and offer an open plan living area and kitchen and full-->
                                    <!--bathroom. 24 Hour ...-->
                                    </p>
                                    <div class="product_detail">
                                        <span><img src="{{ asset('front/images/icon_bed_new.png') }}">{{ $propertyData->bedrooms }} Bedroom</span>
                                        <span><img src="{{ asset('front/images/icon_bath_new.png') }}">{{ $propertyData->bathrooms }} Bathroom</span>
                                        <span><img src="{{ asset('front/images/icon_parking.png') }}"> {{ $propertyData->garages }} Garage</span>
                                        <span><img src="{{ asset('front/images/icon_floor_new.png') }}"><small>{{ $propertyData->floor_size }} <sup>{{ $propertyData->floor_size_unit }}</sup></small></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--<div class="guldenland_each_product">-->
                            <!--    <div class="product_img">-->
                            <!--        <img class="img-fluid" src="https://webplan.live/front/images/prd-img.jpg">-->
                            <!--    </div>-->
                            <!--    <div class="product_content">-->
                            <!--        <h4>R 760 000</h4>-->
                            <!--        <small>5 Vredenhof Street, Villa Castello, Guldenland, Strand</small>-->
                            <!--        <h3>Property Title</h3>-->
                            <!--        <p>One-bedroom apartment is situated in a popular complex-->
                            <!--        and offer an open plan living area and kitchen and full-->
                            <!--        bathroom. 24 Hour ...</p>-->
                            <!--        <div class="product_detail">-->
                            <!--            <span><img src="https://webplan.live/front/images/icon_bed_new.png">1 Bedroom</span>-->
                            <!--            <span><img src="https://webplan.live/front/images/icon_bath_new.png">1 Bathroom</span>-->
                            <!--            <span><img src="https://webplan.live/front/images/icon_parking.png">1 Garage</span>-->
                            <!--            <span><img src="https://webplan.live/front/images/icon_floor_new.png"><small>48m<sup>2</sup></small></span>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="property_pagination">
                                 {{ $propertyDatas->links() }}
                                <!--<ul class="pagination">-->
                                <!--    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous"><span class="page-link" aria-hidden="true">Previous</span></li>-->
                                <!--    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>-->
                                <!--    <li class="page-item"><a class="page-link" href="">2</a></li>-->
                                <!--    <li class="page-item"><a class="page-link" href="" rel="next" aria-label="Next »">Next</a></li>-->
                                <!--</ul>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="sidelist">
                        <h4>Claremont Property to Rent</h4>
                        <ul>
                            <li><a href="#">Houses to Rent in Claremont</a></li>
                            <li><a href="#">Apartments to Rent in Claremont</a></li>
                            <li><a href="#">Townhouses to Rent in Claremont</a></li>
                            <li><a href="#">Vacant Land/Plots to rent in Claremont</a></li>
                        </ul>
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
                                    <p>Request a free property valuation from one of our real
                                        estate agents to find out what your property is worth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- guldenland section  -->

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
@include('frontPart.propertySearchResultTagger')
@endpush
