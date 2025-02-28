
@if(isset($agentDetail) && !empty($agentDetail))
@section('title',$agentDetail->first_name." ".$agentDetail->last_name)
@section('meta_keywords',$agentDetail->job_title)
@section('meta_description',$agentDetail->first_name." ".$agentDetail->last_name." , ".$agentDetail->job_title." , ".$agentDetail->email)
@endif



@extends('layouts.front')

@section('content')
  
  <!-- breadbrumb  -->
  <div class="breadcrumbs">
      <div class="container">
            <ul>
                <li><a href="#">Property</a></li>
                <li><a href="#">{{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}</a></li>
            </ul>
      </div>
  </div>
  <!-- breadcrumb -->
  
  <!-- agent detail -->
  <section class="agentdetail_section">
      <div class="container">
        <div class="details">
            <div class="agent_image">
                <img class="img-fluid" src="{{ (isset($agentDetail->photo_url) && $agentDetail->photo_url != '')?$agentDetail->photo_url : asset('front/images/agent-img.png') }}" alt="agent-img" />
            </div>
            <div class="agent_detail">
                <h3 title="{{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}">{{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}</h3>
                 <h4><b>{{ (isset($agentDetail->job_title))?$agentDetail->job_title:"" }}<b></h4>
                <h4>{{ (isset($agentDetail->profile))?$agentDetail->profile:"" }}</h4>
                <div class="agent_social_network">
                    <ul>
                        <li>
                            <span class="icon-phone" ></span> <a target="_blank" title='{{ (isset($agentDetail->mobile_number))?$agentDetail->mobile_number:"" }}' href="tel:{{ (isset($agentDetail->mobile_number))?$agentDetail->mobile_number:"" }}">{{ (isset($agentDetail->mobile_number))?$agentDetail->mobile_number:"" }}</a>
                        </li>
                        <li>
                            <span class="icon-envelope"></span> <a target="_blank" title='{{ (isset($agentDetail->email))?$agentDetail->email:"" }}' href="mailto:{{ (isset($agentDetail->email))?$agentDetail->email:"" }}">{{ (isset($agentDetail->email))?$agentDetail->email:"" }}</a>
                        </li>
                        <li>
                            <span class="icon-whatsapp"></span> <a  target="_blank" href="https://api.whatsapp.com/send?phone={{ (isset($agentDetail->mobile_number))? '+27'.$agentDetail->mobile_number:"" }}&text=hi {{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}">Whatsapp Agent</a>
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
                    <div class="heading h1_tag mb-0">
                        <h1>View all {{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}’s listings</h1>
                    </div>
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
                                 <input type="hidden" id="currentValue" value="{{  route('agent',['agentid' => $_GET['agentid'] ]) }}">
                                  <input type="hidden" id="currentPage" value="{{ (isset($_GET['page']) && $_GET['page'] != '')? $_GET['page']:'' }}">
                            </span>
                        </div>
                        <div class="list_map_view">
                            <p class="m-0 mr-3">Showing: {{ $propertyDatas->currentPage() }} - {{ $propertyDatas->count() }} of {{ $propertyDatas->total() }}</p>
                            <a class="list_view" id="showListDiv" href="#"><img class="img-fluid" src="{{ asset('front/images/list.png') }}" alt="list" /></a>
                            <a class="map_view" id="showMapDiv" href="javascript:void(0)"><img class="img-fluid" src="{{ asset('front/images/map.png') }}" alt="map"/></a>
                        </div>
                    </div>
                    <div class="mapping_view" id="mapping_view" style="display:none">
                        <div class="guldenland_map_view">
                            <div class="container">
                                <div id="map_tuts" style="width:100%; height:500px; "></div>
                                
                            </div>
                           
                        </div>
                    </div>
                    <div class="guldenland_view" id="showPropertyList" style="display:block">
                       <div class="guldenland_all_product">
                            @if(!$propertyDatas->isEmpty())
                              @foreach($propertyDatas as $propertyData)
                               @php
                                $suburb = str_replace(" ","-",$propertyData->suburb);
                                $town = str_replace(" ","-",$propertyData->town);
                                $province = str_replace(" ","-",$propertyData->province);
                                $mandate_saletype = str_replace(" ","-",$propertyData->mandate_saletype);
                               $customUrl = route('property-'.$mandate_saletype,['p_suburb'=>$suburb, 'p_town'=>$town, 'p_province'=>$province,'p_id'=>$propertyData->id,'p_ref'=>$propertyData->property_id]);
                               @endphp
                            <div title="{{ $propertyData->complex_name." ".$propertyData->unit_number }}" style="cursor: pointer;" onclick="window.location = '{{ $customUrl }}';" class="guldenland_each_product">
                                <div class="product_img">
                                   <a href="{{ $customUrl }}"> <img class="img-fluid" src="{{ $propertyData->news_featured_image }}"  alt="propert-image" /></a>
                                </div>
                                <div class="product_content">
                                    <h4 title="R {{ number_format($propertyData->price,0," "," ")  }}">R {{ number_format($propertyData->price,0," "," ")  }}</h4>
                                    
                                    <small title='{{ ucwords($propertyData->bedrooms." ".$propertyData->property_type." ".$propertyData->mandate_saletype." "."in". " ".$propertyData->suburb) }}' > {{ ucwords($propertyData->bedrooms." ".$propertyData->property_type." ".$propertyData->mandate_saletype." "."in". " ".$propertyData->suburb) }} </small>
                                    
                                   
                                    
                                    <a title="{{ $propertyData->complex_name." ".$propertyData->unit_number }}" href="{{ $customUrl }}"> <h3> 
                                    
                                    
                             @if($propertyData->complex_name != '' && $propertyData->unit_number !="" )
                        @php $propertyCustomTitle = ucwords($propertyData->complex_name." ".$propertyData->unit_number) @endphp
                        
                        @else
                          @php $propertyCustomTitle = ucwords($propertyData->street_name." ".$propertyData->street_number) @endphp
                          
                        @endif
                                    {{ $propertyCustomTitle }}
                                  
                                    
                                    </h3></a>
                                    <p>{{ substr($propertyData->description,0,200) }}....
                                   
                                    </p>
                                    @if($propertyData->bedrooms > 0 || $propertyData->bathrooms > 0 || $propertyData->garages > 0 || $propertyData->floor_size > 0)
                                    <div class="product_detail">
                                        @if($propertyData->bedrooms > 0)
                                        <span title="{{ $propertyData->bedrooms }} Bedroom"><img src="{{ asset('front/images/icon_bed_new.png') }}" alt="icon_bed_new" >{{ $propertyData->bedrooms }} Bedroom</span>
                                        @endif
                                          @if($propertyData->bathrooms > 0)
                                        <span title="{{ $propertyData->bathrooms }} Bathroom"><img src="{{ asset('front/images/icon_bath_new.png') }}" alt="icon_bath_new" />{{ $propertyData->bathrooms }} Bathroom</span>
                                         @endif
                                           @if($propertyData->garages > 0)
                                        <span title="{{ $propertyData->garages }} Garage"><img src="{{ asset('front/images/icon_parking.png') }}" alt="icon_parking" /> {{ $propertyData->garages }} Garage</span>
                                           @endif
                                             @if($propertyData->floor_size > 0)
                                        <span title="{{ $propertyData->floor_size }}{{ $propertyData->floor_size_unit }}"><img src="{{ asset('front/images/icon_floor_new.png') }}" alt="icon_floor_new" /><small>{{ $propertyData->floor_size }} <sup>{{ $propertyData->floor_size_unit }}</sup></small></span>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                           @else
                           <p> There are no properties for your selected critera</p>
                           <!--<div class="guldenland_each_product">-->
                           <!--    There are no properties for your selected critera-->
                           <!-- </div>-->
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
                    <div class="contact_sidelist">
                        <h4>Contact {{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}</h4>
                        
                         <form action="{{ route('agent-contact-mail') }}" method="post" id="agent_individual_contact_form">
                                @csrf
                            <div class="row">
                              <div class="col-12">
                                  <div class="form-group">
                                    <label for="username">Name<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter name" required id="username" name="username">
                                  </div>
                              </div>
                              <div class="col-6 pr-2">
                                  <div class="form-group ">
                                    <label for="email">Email<span>*</span></label>
                                     <input type="email" class="form-control" placeholder="Enter email" required id="email" name="email">
                                  </div>
                              </div>
                             
                              <input type="hidden"    name="getAgentEmail" value="{{ (isset($agentDetail->email))?$agentDetail->email:'' }}">
                               <input type="hidden"    name="pageName" value="agent">
                              <input type="hidden"    name="getId" value="{{ (isset($_GET['agentid']))?$_GET['agentid']:""}}">
                              <div class="col-6 pl-2">
                                  <div class="form-group">
                                    <label for="phone">Phone<span>*</span></label>
                                     <input type="text" required class="form-control" placeholder="Enter phone" id="phone" name="phone">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                    <label for="message">Message<span>*</span></label>
                                   
                                    <textarea id="message" required class="form-control" name="message" placeholder="Enter message" rows="4" style="width:100%;"></textarea>
                                  </div>
                              </div>
                               <div class="col-12">
                            <div class="form-group">                      
                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                            </div> 
                             </div>
                              <div class="col-12">
                                  <button type="submit" class="form-control">Send message</button>
                              </div>
                              <div class="col-12">
                                  <p class="term-policy">
                                      By continuing I understand and agree with Trafalgar <a href="{{ route('terms-conditions') }}" >Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                  </p>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/alert.png') }}" alt="alert" />
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/property.png') }}" alt="property" />
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/valuation.png') }}" alt="valuation" />
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

    <section class="footer_top_section footer_top_section_bgwhite">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_top_content">
                            <h5>Property From 
                               {{ (isset($agentDetail->first_name))? ucfirst($agentDetail->first_name):"" }}</h5>
                           <div class="content_list">
                                <ul>
                                                                                  @if(!empty($getDistinctSuburb))
                                                                                
                                    @foreach($getDistinctSuburb as $getDistinctSuburbs)
                                   @if($getDistinctSuburbs->property_classification == "commercial")
                                    @if($getDistinctSuburbs->mandate_saletype == "for rent")
                                  @php  $customRouteName = 'commercial-property-for-rent'; @endphp
                                    @endif
                                    @if($getDistinctSuburbs->mandate_saletype == "for sale")
                                     @php  $customRouteName = 'commercial-property-for-sale'; @endphp
                                    @endif
                                   @endif
                                   
                                   
                                   
                                    @if($getDistinctSuburbs->property_classification== 'residential')
                                    
                                     @if($getDistinctSuburbs->mandate_saletype == "for rent")
                                      @php  $customRouteName = 'to-rent'; @endphp
                                    @endif
                                    @if($getDistinctSuburbs->mandate_saletype == "for sale")
                                     @php  $customRouteName = 'for-sale'; @endphp
                                    @endif
                                   @endif
                                  @php 
                                  
                          $suburb_distinct = str_replace(" ","-",$getDistinctSuburbs->suburb);
                          $town_distinct = str_replace(" ","-",$getDistinctSuburbs->town);
                          $province_distinct = str_replace(" ","-",$getDistinctSuburbs->province);
                          //create  url for single city 
                          $customUrl_distinct = route($customRouteName,['url_city'=>$suburb_distinct,'url_town'=>$town_distinct,'url_province'=>$province_distinct,'city'=>$getDistinctSuburbs->suburb]);
                                  
                    @endphp
 <li><a href="{{ $customUrl_distinct }}">{{ $getDistinctSuburbs->suburb }}</a></li>
                                   
                                  
                                    @endforeach
                                    @endif                 
                                   
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

@push('agent-detail-page-js')
@include('frontPart.js.agentDetailPageJs')
@endpush
