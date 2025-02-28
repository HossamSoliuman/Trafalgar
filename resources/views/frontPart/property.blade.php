@extends('layouts.front')

@section('content')
    
    <section class="property_section">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-8 pr-0">
            <div class="property-section-content">
                <div class="content">
                    <?php if(isset($_GET['city']) && $_GET['city'] !="" ){ 
                                 
                        $d = explode(",", $_GET['city']);  }?>
                                   
                    <form action="{{ route('property') }}" method="get" id="searchForm" class="resetFormData">
                       <div class="input-group mb-3 search_view">
                            <div class="input-group-prepend selectwithinput">
                                <div class="select_buttons">
                                    <div class="single_select_buttons select_icon">
                                          @if(isset($_GET['stype']))
                                           <select name="stype"  class="form-select" aria-label="Default select example">
                                            <option <?php if(isset($_GET['stype']) && $_GET['stype'] == "for rent"){ echo 'selected'; } ?> value="for rent">To Rent</option>
                                            <option  <?php if(isset($_GET['stype']) && $_GET['stype'] == "for sale"){ echo 'selected'; } ?> value="for sale">To Sale</option>
                                        </select>
                                         @endif
                                       
                                    </div>
                                </div>
                            </div>
                            
                             @if(isset($_GET['pclass']))
                                         <input type="hidden" name="pclass" value="<?php if(isset($_GET['pclass'])){ echo $_GET['pclass']; } ?>" >
                                        <!--  <select name="pclass"  class="form-select" aria-label="Default select example">-->
                                       
                                        <!--     <option <?php // (isset($_GET['pclass']) && $_GET['pclass'] == "commercial")? 'selected':'' ?> value="commercial">commercial</option>-->
                                            
                                        <!--</select>-->
                                         @endif
                            
                            
                          <select id="cityListForSearchPage"  class="select2 form-control search-input" multiple="multiple" data-placeholder="Enter a province, city or suburb, Multiple area may be entered." >
                              
                              <?php if(!empty($searchReferences)){ ?>
                              <?php foreach($searchReferences as $searchReference){ ?>
                              
                               <option value="<?php echo trim($searchReference->search_name); ?>" <?php if(isset($d) && in_array( $searchReference->search_name,$d)){ echo "selected"; 
        }   ?>><?php echo $searchReference->search_name; ?> </option>
        
                              <?php } ?>
                              <?php } ?>
                          </select>
                          <div class="input-group-append">
                             <button data-formtype="formRentTypeSubmit" data-citydata="cityListForSearchPage" class="btn btn-outline-secondary search-btn propertySearchButton" type="button"
                                id="button-addon2">Search</button>
                          </div>
                       </div>
                       <input type="hidden" name="city" class="stringCity">
                      
                       <input type="hidden" value="{{ (isset($_GET['sortType']) && $_GET['sortType'] != "")? $_GET['sortType']:'default' }}"name="sortType" id="sortType">
                       <div class="select_buttons mb-3">
                          <div class="single_select_buttons select_icon">
                             <select name="ptype" class="form-select" aria-label="Default select example">
                                <option  value="">Property Type</option>
                                  @foreach($propertyTypeList as $propertyTypeListss)
                                    <option <?php if( (isset($_GET['ptype']) && $_GET['ptype'] !="") && $_GET['ptype'] == $propertyTypeListss->property_type){ echo "selected"; } ?> value="{{ $propertyTypeListss->property_type  }}">{{ ucfirst($propertyTypeListss->property_type)  }}</option>
                                @endforeach
                               
                             </select>
                          </div>
                          @if(isset($_GET['stype']) && $_GET['stype'] == "for rent")
                          <div class="single_select_buttons select_icon">
                             <select name="minprice" class="form-select" aria-label="Default select example">
                                <option value="">Min Price</option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1000"){ echo "selected"; } ?> value="1000"> R {{ number_format(1000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1500"){ echo "selected"; } ?> value="1500"> R {{ number_format(1500,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "2000"){ echo "selected"; } ?> value="2000"> R {{ number_format(2000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "2500"){ echo "selected"; } ?> value="2500"> R {{ number_format(2500,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "3000"){ echo "selected"; } ?> value="3000"> R {{ number_format(3000,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "3500"){ echo "selected"; } ?> value="3500"> R {{ number_format(3500,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "4000"){ echo "selected"; } ?> value="4000">  R {{ number_format(4000,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "4500"){ echo "selected"; } ?> value="4500">  R {{ number_format(4500,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "5000"){ echo "selected"; } ?> value="5000">  R {{ number_format(5000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "6000"){ echo "selected"; } ?> value="6000">  R {{ number_format(6000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "7000"){ echo "selected"; } ?> value="7000">  R {{ number_format(7000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "8000"){ echo "selected"; } ?> value="8000">  R {{ number_format(8000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "9000"){ echo "selected"; } ?> value="9000">  R {{ number_format(9000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "10000"){ echo "selected"; } ?> value="10000"> R {{ number_format(10000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "11000"){ echo "selected"; } ?> value="11000">  R {{ number_format(11000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "12000"){ echo "selected"; } ?> value="12000">  R {{ number_format(12000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "13000"){ echo "selected"; } ?>  value="13000">  R {{ number_format(13000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "14000"){ echo "selected"; } ?> value="14000"> R {{ number_format(14000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "15000"){ echo "selected"; } ?>  value="15000">  R {{ number_format(15000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "16000"){ echo "selected"; } ?> value="16000">  R {{ number_format(16000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "17000"){ echo "selected"; } ?> value="17000">  R {{ number_format(17000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "18000"){ echo "selected"; } ?> value="18000">  R {{ number_format(18000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "19000"){ echo "selected"; } ?> value="19000">  R {{ number_format(19000,0," "," ")  }}</option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "20000"){ echo "selected"; } ?> value="20000">  R {{ number_format(20000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "25000"){ echo "selected"; } ?> value="25000">  R {{ number_format(25000,0," "," ")  }}</option>
                                <option   <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "30000"){ echo "selected"; } ?> value="30000">  R {{ number_format(30000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "35000"){ echo "selected"; } ?>  value="35000">  R {{ number_format(35000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "40000"){ echo "selected"; } ?>  value="40000">  R {{ number_format(40000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "50000"){ echo "selected"; } ?> value="50000">  R {{ number_format(50000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "60000"){ echo "selected"; } ?>  value="60000">  R {{ number_format(60000,0," "," ")  }}</option>
                                  <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "70000"){ echo "selected"; } ?>  value="70000">  R {{ number_format(70000,0," "," ")  }}</option>
                                    <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "80000"){ echo "selected"; } ?>  value="80000">  R {{ number_format(80000,0," "," ")  }}</option>
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="maxprice" class="form-select" aria-label="Default select example">
                                <option value="">Max Price</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1000"){ echo "selected"; } ?> value="1000"> R {{ number_format(1000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1500"){ echo "selected"; } ?> value="1500"> R {{ number_format(1500,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "2000"){ echo "selected"; } ?> value="2000">  R {{ number_format(2000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "2500"){ echo "selected"; } ?> value="2500">  R {{ number_format(2500,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "3000"){ echo "selected"; } ?> value="3000">  R {{ number_format(3000,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "3500"){ echo "selected"; } ?> value="3500">  R {{ number_format(3500,0," "," ")  }}</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "4000"){ echo "selected"; } ?> value="4000">  R {{ number_format(4000,0," "," ")  }}</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "4500"){ echo "selected"; } ?> value="4500">  R {{ number_format(4500,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "5000"){ echo "selected"; } ?> value="5000">  R {{ number_format(5000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "6000"){ echo "selected"; } ?> value="6000">  R {{ number_format(6000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "7000"){ echo "selected"; } ?> value="7000">  R {{ number_format(7000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "8000"){ echo "selected"; } ?> value="8000">  R {{ number_format(8000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "9000"){ echo "selected"; } ?> value="9000">  R {{ number_format(9000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "10000"){ echo "selected"; } ?> value="10000">  R {{ number_format(10000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "11000"){ echo "selected"; } ?> value="11000"> R {{ number_format(11000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "12000"){ echo "selected"; } ?> value="12000"> R {{ number_format(12000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "13000"){ echo "selected"; } ?>  value="13000"> R {{ number_format(13000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "14000"){ echo "selected"; } ?> value="14000"> R {{ number_format(14000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "15000"){ echo "selected"; } ?>  value="15000"> R {{ number_format(15000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "16000"){ echo "selected"; } ?> value="16000"> R {{ number_format(16000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "17000"){ echo "selected"; } ?> value="17000"> R {{ number_format(17000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "18000"){ echo "selected"; } ?> value="18000"> R {{ number_format(18000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "19000"){ echo "selected"; } ?> value="19000"> R {{ number_format(19000,0," "," ")  }}</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "20000"){ echo "selected"; } ?> value="20000"> R {{ number_format(20000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "25000"){ echo "selected"; } ?> value="25000"> R {{ number_format(25000,0," "," ")  }} </option>
                                <option   <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "30000"){ echo "selected"; } ?> value="30000"> R {{ number_format(30000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "35000"){ echo "selected"; } ?>  value="35000"> R {{ number_format(35000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "40000"){ echo "selected"; } ?>  value="40000"> R {{ number_format(40000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "50000"){ echo "selected"; } ?> value="50000"> R {{ number_format(50000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "60000"){ echo "selected"; } ?>  value="60000"> R {{ number_format(60000,0," "," ")  }}</option>
                                  <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "70000"){ echo "selected"; } ?>  value="70000"> R {{ number_format(70000,0," "," ")  }}</option>
                                    <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "80000"){ echo "selected"; } ?>  value="80000"> R {{ number_format(80000,0," "," ")  }}</option>
                             </select>
                          </div>
                          @endif
                          
                          
                           @if(isset($_GET['stype']) && $_GET['stype'] == "for sale")
                            
                          <div class="single_select_buttons select_icon">
                             <select name="minprice" class="form-select" aria-label="Default select example">
                                <option value="">Min Price</option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "100000"){ echo "selected"; } ?> value="100000">R {{ number_format(100000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "150000"){ echo "selected"; } ?> value="150000">R {{ number_format(150000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "200000"){ echo "selected"; } ?> value="200000">R {{ number_format(200000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "250000"){ echo "selected"; } ?> value="250000">R {{ number_format(250000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "300000"){ echo "selected"; } ?> value="300000">R{{ number_format(300000,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "350000"){ echo "selected"; } ?> value="350000">R {{ number_format(350000,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "400000"){ echo "selected"; } ?> value="400000">R {{ number_format(400000,0," "," ")  }} </option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "450000"){ echo "selected"; } ?> value="450000">R {{ number_format(450000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "500000"){ echo "selected"; } ?> value="500000">R {{ number_format(500000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "700000"){ echo "selected"; } ?> value="700000">R {{ number_format(700000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "800000"){ echo "selected"; } ?> value="800000">R {{ number_format(800000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "900000"){ echo "selected"; } ?> value="900000">R {{ number_format(900000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1000000"){ echo "selected"; } ?> value="1000000">R {{ number_format(1000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1250000"){ echo "selected"; } ?> value="1250000">R {{ number_format(1250000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1500000"){ echo "selected"; } ?> value="1500000">R {{ number_format(1500000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "1750000"){ echo "selected"; } ?> value="1750000">R {{ number_format(1750000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "2000000"){ echo "selected"; } ?>  value="2000000">R {{ number_format(2000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "2500000"){ echo "selected"; } ?> value="2500000">R {{ number_format(2500000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "3000000"){ echo "selected"; } ?>  value="3000000">R {{ number_format(3000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "3500000"){ echo "selected"; } ?> value="3500000">R {{ number_format(3500000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "4000000"){ echo "selected"; } ?> value="4000000">R {{ number_format(4000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "4500000"){ echo "selected"; } ?> value="4500000">R {{ number_format(4500000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "5000000"){ echo "selected"; } ?> value="5000000">R {{ number_format(5000000,0," "," ")  }}</option>
                                <option <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "6000000"){ echo "selected"; } ?> value="6000000">R {{ number_format(6000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "7000000"){ echo "selected"; } ?> value="7000000">R {{ number_format(7000000,0," "," ")  }} </option>
                                <option   <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "8000000"){ echo "selected"; } ?> value="8000000">R {{ number_format(8000000,0," "," ")  }} </option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "9000000"){ echo "selected"; } ?>  value="9000000">R {{ number_format(9000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "10000000"){ echo "selected"; } ?>  value="10000000">R {{ number_format(10000000,0," "," ")  }}</option>
                                <option  <?php if( (isset($_GET['minprice']) && $_GET['minprice'] !="") && $_GET['minprice'] == "15000000"){ echo "selected"; } ?> value="15000000">R {{ number_format(15000000,0," "," ")  }} </option>
                               
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="maxprice" class="form-select" aria-label="Default select example">
                                <option value="">Max Price</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "100000"){ echo "selected"; } ?> value="100000">R {{ number_format(100000,0," "," ") }} </option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "150000"){ echo "selected"; } ?> value="150000"> R {{ number_format(150000,0," "," ") }} </option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "200000"){ echo "selected"; } ?> value="200000"> R {{ number_format(200000,0," "," ") }} </option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "250000"){ echo "selected"; } ?> value="250000"> R {{ number_format(250000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "300000"){ echo "selected"; } ?> value="300000"> R {{ number_format(300000,0," "," ") }} </option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "350000"){ echo "selected"; } ?> value="350000"> R {{ number_format(350000,0," "," ") }}</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "400000"){ echo "selected"; } ?> value="400000"> R {{ number_format(400000,0," "," ") }}</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "450000"){ echo "selected"; } ?> value="450000"> R {{ number_format(450000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "500000"){ echo "selected"; } ?> value="500000"> R {{ number_format(500000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "700000"){ echo "selected"; } ?> value="700000"> R {{ number_format(700000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "800000"){ echo "selected"; } ?> value="800000"> R {{ number_format(800000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "900000"){ echo "selected"; } ?> value="900000"> R {{ number_format(900000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1000000"){ echo "selected"; } ?> value="1000000"> R {{ number_format(1000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1250000"){ echo "selected"; } ?> value="1250000"> R {{ number_format(1250000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1500000"){ echo "selected"; } ?> value="1500000"> R {{ number_format(1500000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "1750000"){ echo "selected"; } ?> value="1750000"> R {{ number_format(1750000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "2000000"){ echo "selected"; } ?>  value="2000000"> R {{ number_format(2000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "2500000"){ echo "selected"; } ?> value="2500000"> R {{ number_format(2500000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "3000000"){ echo "selected"; } ?>  value="3000000"> R {{ number_format(3000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "3500000"){ echo "selected"; } ?> value="3500000"> R {{ number_format(3500000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "4000000"){ echo "selected"; } ?> value="4000000"> R {{ number_format(4000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "4500000"){ echo "selected"; } ?> value="4500000"> R {{ number_format(4500000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "5000000"){ echo "selected"; } ?> value="5000000"> R {{ number_format(5000000,0," "," ") }}</option>
                                <option <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "6000000"){ echo "selected"; } ?> value="6000000"> R {{ number_format(6000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "7000000"){ echo "selected"; } ?> value="7000000"> R {{ number_format(7000000,0," "," ") }}</option>
                                <option   <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "8000000"){ echo "selected"; } ?> value="8000000"> R {{ number_format(8000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "9000000"){ echo "selected"; } ?>  value="9000000"> R {{ number_format(9000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "10000000"){ echo "selected"; } ?>  value="10000000"> R {{ number_format(10000000,0," "," ") }}</option>
                                <option  <?php if( (isset($_GET['maxprice']) && $_GET['maxprice'] !="") && $_GET['maxprice'] == "15000000"){ echo "selected"; } ?> value="15000000"> R {{ number_format(15000000,0," "," ") }}</option>
                             </select>
                          </div>
                          @endif
                          
                          
                          
                          
                          <div class="single_select_buttons select_icon">
                             <select name="beds" class="form-select" aria-label="Default select example">
                                <option  value="">Beds</option>
                                 <option value="">Any</option>
                                 @for($g=1; $g <= 5; $g++)
                                      <option <?php if( (isset($_GET['beds']) && $_GET['beds'] !="") && $_GET['beds'] == $g){ echo "selected"; } ?> value="{{ $g }}">{{ $g }}+</option>
                                    @endfor
                              
                             </select>
                          </div>
                          <div class="single_select_buttons select_icon">
                             <select name="bath" class="form-select" aria-label="Default select example">
                                <option  value="">Baths</option>
                                 <option value="">Any</option>
                                  @for($h=1; $h <= 5; $h++)
                                     <option <?php if( (isset($_GET['bath']) && $_GET['bath'] !="") && $_GET['bath'] == $h){ echo "selected"; } ?> value="{{ $h }}">{{ $h }}+</option>
                                      @endfor
                               
                             </select>
                          </div>
                          <div class="single_select_buttons">
                             <button type="button" id="moreOptionButtonRent" class="search-btn">More filter +</button>
                          </div>
                            <div id="moreAdvanceOptionSerachRent" style="">
                                <div class="single_select_buttons select_icon">
                                 <select name="garage"  class="form-select" aria-label="Default select example">
                                    <option  value="">Garage</option>
                                     <option value="">Any</option>
                                      @for($kl=1; $kl <= 5; $kl++)
                                     <option <?php if( (isset($_GET['garage']) && $_GET['garage'] !="") && $_GET['garage'] == $kl){ echo "selected"; } ?> value="{{ $kl }}">{{ $kl }}+</option>
                                      @endfor
                                   
                                 </select>
                                </div>
                                <div class="single_select_buttons select_icon">
                                 <select name="prkng"  class="form-select" aria-label="Default select example">
                                    <option value="">Parking</option>
                                     <option value="">Any</option>
                                      @for($kls=1; $kls <= 5; $kls++)
                                     <option <?php if( (isset($_GET['prkng']) && $_GET['prkng'] !="") && $_GET['prkng'] == $kls){ echo "selected"; } ?> value="{{ $kls }}">{{ $kls }}+</option>
                                      @endfor
                                   
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
                    <div class="recent-search-view d-flex justify-content-between">
                       <div class="recent-search d-flex align-items-center">
                          <p>Recent Search: </p>
                          <div class="searches">
                              @php $valSearch = Cookie::get('searchKeyword');  @endphp
                              @if(!empty($valSearch))
                              @php $valSearchArray =  explode(',',$valSearch) @endphp 
                              @for($ar = 0; $ar < count($valSearchArray); $ar++) <span class="badge"><a href="{{ url('/') }}/property?city=<?php echo $valSearchArray[$ar];?>&stype=<?php if(isset($_GET['stype'])){echo $_GET['stype']; }?>" style="color:#222222">{{ $valSearchArray[$ar] }}</a></span>
                              @endfor
                               @else
                              <span class="badge">no recent search</span>
                              @endif
                          </div>
                       </div>
                       <a href="javascript:void(0);" id="resetAllForm" class="reset-filter"><u>Reset Filter</u></a>
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
               @php
                if(isset($_GET['stype']) && $_GET['stype'] == "for rent"){
                    $type = 'to rent';
                }else if (isset($_GET['stype']) && $_GET['stype'] == "for sale"){
                    $type = 'for sale';
                }else if (isset($_GET['pclass']) && $_GET['pclass'] == "commercial"){
                     $type = 'commercial';
                }else{
                     $type = '';
                }
                
                
                if( (isset($_GET['city']) && $_GET['city'] !="")){
                 $city_length = count(explode(',',$_GET['city']));   
                 if($city_length > 1){
                     $text = 'Multiple Areas';
                 }else{
                     $text = $_GET['city'];
                 }
                }else{
                $text = '';
                }
               @endphp
               <h2>Property <?php echo $type;?> in <?php if( (isset($_GET['city']) && $_GET['city'] !="")){ echo $text; } ?></h2>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing">
                    
                    
                    
                    <div class="order_grid_view">
                        <div class="order_view">
                            <span>
                                <b>Order By: </b> 
                                <select id="setSortType" class="form-select">
                                     <option {{ (isset($_GET['sortType']) && $_GET['sortType'] == 'default')? 'selected':'' }} value="default">Default</option>
                                    <option {{ (isset($_GET['sortType']) && $_GET['sortType'] == 'lowtohigh')? 'selected':'' }} value="lowtohigh">Price - low to high</option>
                                    <option {{ (isset($_GET['sortType']) && $_GET['sortType'] == 'hightolow')? 'selected':'' }} value="hightolow">Price - high to low</option>
                                    <option {{ (isset($_GET['sortType']) && $_GET['sortType'] == 'mostrecent')? 'selected':'' }} value="mostrecent">Most Recent</option>
                                    <option {{ (isset($_GET['sortType']) && $_GET['sortType'] == 'alphabat')? 'selected':'' }} value="alphabat">Alphabetical</option>
                                 </select>
                            </span>
                        </div>
                        <div class="list_map_view">
                            <p class="m-0 mr-3">Showing: {{ $propertyDatas->currentPage() }} - {{ $propertyDatas->count() }} of {{ $propertyDatas->total() }}</p>
                            <a class="list_view" id="showListDiv" href="#"><img class="img-fluid" src="{{ asset('front/images/list.png') }}" alt="{{ asset('front/images/list.png') }}"/></a>
                            <a class="map_view" id="showMapDiv" href="javascript:void(0)"><img class="img-fluid" src="{{ asset('front/images/map.png') }}" alt="{{ asset('front/images/map.png') }}"/></a>
                        </div>
                    </div>
                    <div class="mapping_view" id="mapping_view" style="display:none">
                        <div class="guldenland_map_view">
                            <div class="container">
                                <div id="map_tuts" style="width:100%; height:500px; "></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="guldenland_view" id="showPropertyList"  style="display:block">
                        <div class="guldenland_all_product">
                            @if(!$propertyDatas->isEmpty())
                              @foreach($propertyDatas as $propertyData)
                            <div style="cursor: pointer;" onclick="window.location = '{{ route('propertydetail',['propertid' => $propertyData->property_id ]) }}';" class="guldenland_each_product">
                                <div class="product_img">
                                   <a href="{{ route('propertydetail',['propertid' => $propertyData->property_id ]) }}"> <img class="img-fluid" src="{{ $propertyData->news_featured_image }}" alt="{{ $propertyData->news_featured_image }}"/></a>
                                </div>
                                <div class="product_content">
                                    <h4>R {{ number_format($propertyData->price,0," "," ")  }}</h4>
                                    <small> {{ $propertyData->headline }}    </small>
                                     <!--{{ $propertyData->street_number }} , {{ $propertyData->street_name }} , {{ $propertyData->suburb }} , {{ $propertyData->town }} ,{{ $propertyData->province }}-->
                                    <a href="{{ route('propertydetail',["propertid"=>$propertyData->property_id]) }}"> <h3> {{ $propertyData->complex_name." ".$propertyData->unit_number }}</h3></a>
                                    <p>{{ substr($propertyData->description,0,200) }}....
                                   
                                    </p>
                                    @if($propertyData->bedrooms > 0 || $propertyData->bathrooms > 0 || $propertyData->garages > 0 || $propertyData->floor_size > 0)
                                    <div class="product_detail">
                                        @if($propertyData->bedrooms > 0)
                                        <span><img src="{{ asset('front/images/icon_bed_new.png') }}" alt="Bedroom">{{ $propertyData->bedrooms }} Bedroom</span>
                                        @endif
                                          @if($propertyData->bathrooms > 0)
                                        <span><img src="{{ asset('front/images/icon_bath_new.png') }}" alt="Bathroom">{{ $propertyData->bathrooms }} Bathroom</span>
                                         @endif
                                           @if($propertyData->garages > 0)
                                        <span><img src="{{ asset('front/images/icon_parking.png') }}" alt="Garage"> {{ $propertyData->garages }} Garage</span>
                                           @endif
                                             @if($propertyData->floor_size > 0)
                                        <span><img src="{{ asset('front/images/icon_floor_new.png') }}" alt="Floor Size"><small>{{ $propertyData->floor_size }} <sup>{{ $propertyData->floor_size_unit }}</sup></small></span>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                           @else
                           <div class="guldenland_each_product">
                               There are no properties for your selected critera
                            </div>
                           @endif
                           <?php if($propertyDatas->total() > 8){ ?>
                            <div class="property_pagination">
                                 {{ $propertyDatas->links() }}
                                
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    <div class="sidelist">
                        @if(isset($_GET['city']) && isset($sideBarLinkArray))
                        <?php $cityArray = explode(",",$_GET['city']); ?>
                        <h4> @if(!empty($cityArray)) <?php  echo $cityArray[0] ?> @endif  Property  @if(isset($_GET['stype'])){{ $_GET['stype'] }} @endif @if(isset($_GET['pclass'])){{ $_GET['pclass'] }} @endif</h4>
                        <ul>
                            @foreach($sideBarLinkArray as $sideBarLinkArrays)
                            <li><a href="{{ $sideBarLinkArrays->propertyTypeUrl }}">{{ ucfirst($sideBarLinkArrays->propertyTypeName) }}
                            @if(isset($_GET['stype']))
                            
                            @if($_GET['stype'] == "for rent") {{ str_replace("for","to",$_GET['stype']) }}   @endif 
                            @if($_GET['stype'] == "for sale") {{ $_GET['stype'] }}  @endif 
                            
                            @endif 
                            
                            @if(isset($_GET['pclass'])){{ $_GET['pclass'] }} @endif in <?php   echo $cityArray[0] ?> </a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/alert.png') }}" alt="Alert">
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/property.png') }}" alt="Property">
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/valuation.png') }}" alt="Valuation">
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

    <!-- guldenland section  -->

    <!-- footer top section  -->

    <section class="footer_top_section footer_top_section_bgwhite">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_top_content">
                            <h5>Property  {{ $type }} in {{ $text }}</h5>
                            <div class="content_list">
                                <ul>
                                    @if(!empty($getDistinctSuburb))
                                    @foreach($getDistinctSuburb as $getDistinctSuburbs)
                                    @if(isset($_GET['stype']))
                                    <li><a href="{{ route('property', ['city' => $getDistinctSuburbs->suburb , 'stype' => $_GET['stype'] ] ) }}">{{ $getDistinctSuburbs->suburb }}</a></li>
                                    @endif
                                    @if(isset($_GET['pclass']))
                                     <li><a href="{{ route('property', ['city' => $getDistinctSuburbs->suburb , 'pclass' => $_GET['pclass'] ,'stype' => $_GET['stype'] ] ) }}">{{ $getDistinctSuburbs->suburb }}</a></li>
                                     @endif
                                    @endforeach
                                    @endif
                                    <!--<li><a href="#">Benoni</a></li>-->
                                    <!--<li><a href="#">Boksburg</a></li>-->
                                    <!--<li><a href="#">Centurion</a></li>-->
                                    <!--<li><a href="#">Edenvale</a></li>-->
                                    <!--<li><a href="#">Johannesburg</a></li>-->
                                    <!--<li><a href="#">Kempton Park</a></li>-->
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
