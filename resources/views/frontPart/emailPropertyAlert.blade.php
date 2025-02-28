@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','email-property-alert')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
  
<!--property alert-->

<section class="propertyalert_section">
    <div class="container">
        <h1 class="text-center mb-4">Email Property Alert</h1>
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="propertyalert_form">
                    <form method="post" action="{{ route('set-email-property-alert') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name <span>*</span></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname <span>*</span></label>
                            <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span>*</span></label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="property_for">Property for <span>*</span></label>
                            <div class="icon_select1">
                                <select  id="property_for" class="form-control" name="property_for">
                                   <option value="for rent">To Rent</option>
                                    <option  value="for sale" >For Sale</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="listing_type">Listing Type <span>*</span></label>
                            <div class="icon_select1">
                                <select required id="listing_type" class="form-control" name="listing_type">
                                  <option value="">Please select</option>
                                   
                                    <option  value="residential" >Residential</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_type">Property Type <span>*</span></label>
                            <div class="icon_select1">
                                <select id="property_type" name="property_type[]" class="form-control" required multiple>
                                  
                                  
                                   @foreach($getPropertyType as $getPropertyTypes)
                                   @if($getPropertyTypes->property_type != "")
                                  <option  value="{{ $getPropertyTypes->property_type }}" >{{ ucwords(strtolower($getPropertyTypes->property_type)) }}</option>
                                  @endif
                                  @endforeach
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="region">Region <span>*</span></label>
                            <div class="icon_select1">
                                <select id="region" name="region" class="form-control" required>
                                  <option value="">Please select</option>
                                  @foreach($getRegion as $getRegions)
                                  <option  value="{{ $getRegions->town }}" >{{ ucfirst($getRegions->province)." - ".ucfirst($getRegions->town) }}</option>
                                  @endforeach
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="suburg">Suburb</label>
                            <div class="icon_select1">
                                <select id="suburg" class="form-control"  name="suburg">
                                   <option value="">Please select</option>
                                   
                                </select>
                            </div>
                        </div>
                        
                       
                        <div class="form-group toRentPriceList" >
                                    <label for="minpriceRent">Min Price <span>*</span></label>
                                    <div class="icon_select1">
                                        <select id="minpriceRent" name="minpriceRent" class="form-control " required>
                                          <option value="">Min Price</option>
                                    <option value="1000">R {{ number_format(1000,0," "," ")  }}</option>
                                    <option value="1500">R {{ number_format(1500,0," "," ")  }} </option>
                                    <option value="2000">R {{ number_format(2000,0," "," ")  }} </option>
                                    <option value="2500">R {{ number_format(2500,0," "," ")  }}</option>
                                    <option value="3000">R {{ number_format(3000,0," "," ")  }}</option>
                                    <option value="3500">R {{ number_format(3500,0," "," ")  }}</option>
                                    <option value="4000">R {{ number_format(4000,0," "," ")  }}</option>
                                    <option value="4500">R {{ number_format(4500,0," "," ")  }}</option>
                                    <option value="5000">R {{ number_format(5000,0," "," ")  }}</option>
                                    <option value="6000">R {{ number_format(6000,0," "," ")  }}</option>
                                    <option value="7000">R {{ number_format(7000,0," "," ")  }}</option>
                                    <option value="8000">R {{ number_format(8000,0," "," ")  }}</option>
                                    <option value="9000">R {{ number_format(9000,0," "," ")  }}</option>
                                    <option value="10000">R {{ number_format(10000,0," "," ")  }}</option>
                                    <option value="11000">R {{ number_format(11000,0," "," ")  }}</option>
                                    <option value="12000">R {{ number_format(12000,0," "," ")  }}</option>
                                    <option value="13000">R {{ number_format(13000,0," "," ")  }}</option>
                                    <option value="14000">R {{ number_format(14000,0," "," ")  }}</option>
                                    <option value="15000">R {{ number_format(15000,0," "," ")  }}</option>
                                    <option value="16000">R {{ number_format(16000,0," "," ")  }}</option>
                                    <option value="17000">R {{ number_format(17000,0," "," ")  }}</option>
                                    <option value="18000">R {{ number_format(18000,0," "," ")  }}</option>
                                    <option value="19000">R {{ number_format(19000,0," "," ")  }}</option>
                                    <option value="20000">R {{ number_format(20000,0," "," ")  }}</option>
                                    <option value="25000">R {{ number_format(25000,0," "," ")  }}</option>
                                    <option value="30000">R {{ number_format(30000,0," "," ")  }}</option>
                                    <option value="35000">R {{ number_format(35000,0," "," ")  }}</option>
                                    <option value="40000">R {{ number_format(40000,0," "," ")  }}</option>
                                     <option value="50000">R {{ number_format(50000,0," "," ")  }}</option>
                                    <option value="60000">R {{ number_format(60000,0," "," ")  }}</option>
                                     <option value="70000">R {{ number_format(70000,0," "," ")  }}</option>
                                    <option value="80000">R {{ number_format(80000,0," "," ")  }}</option>
                                        </select>
                                    </div>
                        </div>
                         <div class="form-group toRentPriceList" >
                                    <label for="maxpriceRent">Max Price <span>*</span></label>
                                    <div class="icon_select1">
                                        <select id="maxpriceRent" name="maxpriceRent" class="form-control " required >
                                         <option value="">Min Price</option>
                                    <option value="1000">R {{ number_format(1000,0," "," ")  }}</option>
                                    <option value="1500">R {{ number_format(1500,0," "," ")  }} </option>
                                    <option value="2000">R {{ number_format(2000,0," "," ")  }} </option>
                                    <option value="2500">R {{ number_format(2500,0," "," ")  }}</option>
                                    <option value="3000">R {{ number_format(3000,0," "," ")  }}</option>
                                    <option value="3500">R {{ number_format(3500,0," "," ")  }}</option>
                                    <option value="4000">R {{ number_format(4000,0," "," ")  }}</option>
                                    <option value="4500">R {{ number_format(4500,0," "," ")  }}</option>
                                    <option value="5000">R {{ number_format(5000,0," "," ")  }}</option>
                                    <option value="6000">R {{ number_format(6000,0," "," ")  }}</option>
                                    <option value="7000">R {{ number_format(7000,0," "," ")  }}</option>
                                    <option value="8000">R {{ number_format(8000,0," "," ")  }}</option>
                                    <option value="9000">R {{ number_format(9000,0," "," ")  }}</option>
                                    <option value="10000">R {{ number_format(10000,0," "," ")  }}</option>
                                    <option value="11000">R {{ number_format(11000,0," "," ")  }}</option>
                                    <option value="12000">R {{ number_format(12000,0," "," ")  }}</option>
                                    <option value="13000">R {{ number_format(13000,0," "," ")  }}</option>
                                    <option value="14000">R {{ number_format(14000,0," "," ")  }}</option>
                                    <option value="15000">R {{ number_format(15000,0," "," ")  }}</option>
                                    <option value="16000">R {{ number_format(16000,0," "," ")  }}</option>
                                    <option value="17000">R {{ number_format(17000,0," "," ")  }}</option>
                                    <option value="18000">R {{ number_format(18000,0," "," ")  }}</option>
                                    <option value="19000">R {{ number_format(19000,0," "," ")  }}</option>
                                    <option value="20000">R {{ number_format(20000,0," "," ")  }}</option>
                                    <option value="25000">R {{ number_format(25000,0," "," ")  }}</option>
                                    <option value="30000">R {{ number_format(30000,0," "," ")  }}</option>
                                    <option value="35000">R {{ number_format(35000,0," "," ")  }}</option>
                                    <option value="40000">R {{ number_format(40000,0," "," ")  }}</option>
                                     <option value="50000">R {{ number_format(50000,0," "," ")  }}</option>
                                    <option value="60000">R {{ number_format(60000,0," "," ")  }}</option>
                                     <option value="70000">R {{ number_format(70000,0," "," ")  }}</option>
                                    <option value="80000">R {{ number_format(80000,0," "," ")  }}</option>
                                        </select>
                                    </div>
                        </div>
                       
                        
                              <div class="form-group forSalePriceList" >
                                    <label for="minpriceSale">Min Price <span>*</span></label>
                                    <div class="icon_select1">
                                        <select id="minpriceSale" name="minpriceSale" class="form-control " required>
                                          <option value="">Min Price</option>
                                    <option value="100000">  R {{ number_format(100000,0," "," ")  }}</option>
                                    <option value="150000">  R {{ number_format(150000,0," "," ")  }}</option>
                                    <option value="200000">  R {{ number_format(200000,0," "," ")  }}</option>
                                    <option value="250000">  R {{ number_format(250000,0," "," ")  }}</option>
                                    <option value="300000">  R {{ number_format(300000,0," "," ")  }}</option>
                                    <option value="350000">  R {{ number_format(350000,0," "," ")  }}</option>
                                    <option value="400000">  R {{ number_format(400000,0," "," ")  }}</option>
                                    <option value="450000">  R {{ number_format(450000,0," "," ")  }}</option>
                                    <option value="500000">  R {{ number_format(500000,0," "," ")  }}</option>
                                    <option value="700000">  R {{ number_format(700000,0," "," ")  }}</option>
                                    <option value="800000">  R {{ number_format(800000,0," "," ")  }}</option>
                                    <option value="900000">  R {{ number_format(900000,0," "," ")  }}</option>
                                    <option value="1000000">  R {{ number_format(1000000,0," "," ")  }}</option>
                                    <option value="1250000">  R {{ number_format(1250000,0," "," ")  }}</option>
                                    <option value="1500000">  R {{ number_format(1500000,0," "," ")  }}</option>
                                    <option value="1750000">  R {{ number_format(1750000,0," "," ")  }}</option>
                                    <option value="2000000">  R {{ number_format(2000000,0," "," ")  }}</option>
                                    <option value="2500000">  R {{ number_format(2500000,0," "," ")  }}</option>
                                    <option value="3000000">  R {{ number_format(3000000,0," "," ")  }}</option>
                                    <option value="3500000">  R {{ number_format(3500000,0," "," ")  }}</option>
                                    <option value="4000000">  R {{ number_format(4000000,0," "," ")  }}</option>
                                    <option value="4500000">  R {{ number_format(4500000,0," "," ")  }}</option>
                                    <option value="5000000">  R {{ number_format(5000000,0," "," ")  }}</option>
                                    <option value="6000000">  R {{ number_format(6000000,0," "," ")  }}</option>
                                    <option value="7000000">  R {{ number_format(7000000,0," "," ")  }}</option>
                                    <option value="8000000">  R {{ number_format(8000000,0," "," ")  }}</option>
                                    <option value="9000000">  R {{ number_format(9000000,0," "," ")  }}</option>
                                    <option value="10000000">  R {{ number_format(10000000,0," "," ")  }}</option>
                                    <option value="15000000">  R {{ number_format(15000000,0," "," ")  }}</option>
                                        </select>
                                    </div>
                        </div>
                         <div class="form-group forSalePriceList" >
                                    <label for="maxpriceSale">Max Price <span>*</span></label>
                                    <div class="icon_select1">
                                        <select id="maxpriceSale" name="maxpriceSale" class="form-control " required>
                                         <option value="">Max Price</option>
                                    <option value="100000">  R {{ number_format(100000,0," "," ")  }}</option>
                                    <option value="150000">  R {{ number_format(150000,0," "," ")  }}</option>
                                    <option value="200000">  R {{ number_format(200000,0," "," ")  }}</option>
                                    <option value="250000">  R {{ number_format(250000,0," "," ")  }}</option>
                                    <option value="300000">  R {{ number_format(300000,0," "," ")  }}</option>
                                    <option value="350000">  R {{ number_format(350000,0," "," ")  }}</option>
                                    <option value="400000">  R {{ number_format(400000,0," "," ")  }}</option>
                                    <option value="450000">  R {{ number_format(450000,0," "," ")  }}</option>
                                    <option value="500000">  R {{ number_format(500000,0," "," ")  }}</option>
                                    <option value="700000">  R {{ number_format(700000,0," "," ")  }}</option>
                                    <option value="800000">  R {{ number_format(800000,0," "," ")  }}</option>
                                    <option value="900000">  R {{ number_format(900000,0," "," ")  }}</option>
                                    <option value="1000000">  R {{ number_format(1000000,0," "," ")  }}</option>
                                    <option value="1250000">  R {{ number_format(1250000,0," "," ")  }}</option>
                                    <option value="1500000">  R {{ number_format(1500000,0," "," ")  }}</option>
                                    <option value="1750000">  R {{ number_format(1750000,0," "," ")  }}</option>
                                    <option value="2000000">  R {{ number_format(2000000,0," "," ")  }}</option>
                                    <option value="2500000">  R {{ number_format(2500000,0," "," ")  }}</option>
                                    <option value="3000000">  R {{ number_format(3000000,0," "," ")  }}</option>
                                    <option value="3500000">  R {{ number_format(3500000,0," "," ")  }}</option>
                                    <option value="4000000">  R {{ number_format(4000000,0," "," ")  }}</option>
                                    <option value="4500000">  R {{ number_format(4500000,0," "," ")  }}</option>
                                    <option value="5000000">  R {{ number_format(5000000,0," "," ")  }}</option>
                                    <option value="6000000">  R {{ number_format(6000000,0," "," ")  }}</option>
                                    <option value="7000000">  R {{ number_format(7000000,0," "," ")  }}</option>
                                    <option value="8000000">  R {{ number_format(8000000,0," "," ")  }}</option>
                                    <option value="9000000">  R {{ number_format(9000000,0," "," ")  }}</option>
                                    <option value="10000000">  R {{ number_format(10000000,0," "," ")  }}</option>
                                    <option value="15000000">  R {{ number_format(15000000,0," "," ")  }}</option>
                                        </select>
                                    </div>
                        </div>
                            
                       
                         
                        <div class="form-button text-right">
                            <button type="submit" class="btn btn-primary theme-btn">Create Alert</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--end property alert-->

<!-- footer top section  -->

<section class="footer_top_section anotherpage_footer"></section>

<!-- footer top section  -->

<!-- main footer section  -->

@include('frontPart/mainFooter')

<!-- main footer section  -->

<!-- copyright section  -->
@endsection

@push('js-for-email-property-alert-page')
@include('frontPart.js.jsEmailPropertyAlertPage')
@endpush
