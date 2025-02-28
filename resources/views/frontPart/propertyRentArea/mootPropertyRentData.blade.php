@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','pretoria.property-to-rent-moot')->first(); @endphp
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
          <ul></ul>
      </div>
    </div>
    <!-- breadcrumb section  -->
    
    <!-- useful links page section  -->
    <section class="guldenland_section about_page_content mt-2">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Property To Rent In Moot Area, Pretoria</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                        <p>There is a cluster of central suburbs in Pretoria collectively known as the Moot, and they offer a wide variety of homes to rent that are in demand among students, public servants, retirees and families with school-going children.  </p>

  <p>The area includes suburbs such as Wonderboom South, Capital Park, Gezina, Villieria, Rietfontein, Waverley, Moregloed, Queenswood and Rietondale, and they are close to the CBD and the main offices of many government departments, the University of Pretoria and the Steve Biko academic hospital.  </p>

  <p>The whole area is well supplied with shopping centres and smaller retail outlets, excellent schools, medical services and public transport. Students and young working people can easily find affordable apartments to let here, while families tend to prefer houses to rent with spacious gardens, garages and pools.  </p>
						 <div class="more">
		  <p>As with most older areas, everything you need on a daily basis is just a short distance from home in the Moot, whether it’s bread and milk, a park or school, a coffee shop or restaurant, or a filling station.  </p>

  <p>Renting a home in this area puts tenants close to shopping centres such as the Mayville Mall, Gezina Galleries, Rietfontein Pavilion, Waverley Plaza, Queens Corner and the new Queenswood Quarter. There are also many local coffee shops and restaurants such as Grounded at Echo, Carl’s Coffee Roastery, Brewers and Die Sinkhuis.</p>

  <p>For student nurses and doctors at the Steve Biko academic hospital, the most popular Moot suburbs are Gezina, Capital Park, Riviera and Rietondale, where there are many suitable rooms and apartments to let. Rietondale also boasts the biggest park in Pretoria, right next to tennis courts and huge fields that are used by local sports clubs for soccer, rugby, cricket and softball matches.</p>

  <p>For families, there are also many houses to rent in the Moot that are close to good primary and high schools. State schools include the Boerefort, Oos-Moot, Rietondale, Rietfontein-Noord, Robert Hicks and Pierneef primary schools, and the Wonderboom, CR Swart, Hendrik Verwoerd, Clapham and Hillview high schools. Private schools include Loreto, Eduplex and the new Curro Academy in East Lynne.</p>

  <p>The most popular suburbs for families seeking houses to rent are Wonderboom South, Rietfontein, Villieria, Waverley and Queenswood, and the last three are also favourbed by students seeking rent apartments that are close to the University of Pretoria but away from the hustle and bustle of Hatfield and Arcadia. Retirees also like the Moot because of its proximity to good medical facilities, including the Netcare Moot Hospital in Rietfontein and the Life Eugene Marais Hospital in Les Marais, which has a brand new, state-of-the-art oncology centre.</p>

  <p>Public transport is another strong draw card for tenants in the Moot, with the new Areyeng Rapid Bus Transport service linking the western part of the area to the CBD and Pretoria North, and an efficient metro bus service throughout. The Gautrain shuttle service means that most suburbs here are also just a few minutes away from the Gautrain station in Hatfield, so the area is also an increasingly popular place for those working in Centurion, Midrand and Johannesburg to rent a home.</p>
  
  <p>Tenants here also like the strong sense of community in the Moot, which is aided by regular markets and other community events, as well as active Community Police Forums. Residents often hold clean-up days to clear litter from the banks of the streams that run through the area and parks and pavements are generally well-kept and tidy. Capital Park has also become something of an artists’ colony and holds an annual Christmas Lights festival that draws thousands of visitors to view its decorated Victorian homes.</p>

  <p>Of course rentals in this area vary widely, but students can expect to pay between R3300 and R4500 a month for one-bedroom apartments to let and around R2000 to R2500 for rooms to rent in shared accommodation. Monthly rentals for two-bedroom apartments to let range from around R4600 to R7000, and those for three-bedroom options from around R6000 to R8000.</p>

  <p>Three and four-bedroom houses to rent are available at rentals from R8000 a month to around R14 000 a month, depending on location, age, size and proximity to schools and shops.</p>
	
					   
						 </div>
                        </div>
                    </div>
                    
                    <div class="each_manage_section guldenland_all_product">
                    	<!--<div class="guldenland_each_product">-->
                    	<!--	<div class="product_img">-->
                    	<!--	   <a href="#"> <img title=" " class="img-fluid" src="https://s3.entegral.net/b/f_eb34e99fa60d4a6d90479da056b0fe1b.jpg" alt=""></a>-->
                    	<!--	</div>-->
                    	<!--	<div class="product_content">-->
                    	<!--		<h4 title="R 2 000">R 2 000</h4>-->
                    	<!--		<small title="Bachelor unit to let in Robertson Street"> Bachelor unit to let in Robertson Street </small>                        -->
                    	<!--		<a title="" href="#"><h3> Robertson St 6</h3></a>               -->
                    	<!--		<p>Newly renovated bachelor unit available to let. Unit consists of open plan bedroom to kitchenette and bathroom. All utilities are on pre-paid which puts the tenant in control of their consumption.</p>-->
                    	<!--		<div class="product_detail">-->
                    	<!--			<span title=""><img src="http://webplan.live/front/images/icon_floor_new.png" alt="icon_floor_new"><small>16 <sup>m²</sup></small></span>-->
                    	<!--		</div>-->
                    	<!--	</div>-->
                    	<!--</div>-->
                    	
                    	 
                            @if(!$propertyDatas->isEmpty())
                              @foreach($propertyDatas as $propertyData)
                               @php
                                $suburb = str_replace(" ","-",$propertyData->suburb);
                                $town = str_replace(" ","-",$propertyData->town);
                                $province = str_replace(" ","-",$propertyData->province);
                                $mandate_saletype = str_replace(" ","-",$propertyData->mandate_saletype);
                               $customUrl = route('property-'.$mandate_saletype,['p_suburb'=>$suburb, 'p_town'=>$town, 'p_province'=>$province,'p_id'=>$propertyData->id,'p_ref'=>$propertyData->property_id]);
                               @endphp
                            <div style="cursor: pointer;" onclick="window.location = '{{ $customUrl }}';" class="guldenland_each_product">
                                <div class="product_img">
                                   <a href="{{ $customUrl }}"> <img title="{{ $propertyData->complex_name." ".$propertyData->unit_number }}" class="img-fluid" src="{{ $propertyData->news_featured_image }}"  alt="{{ $propertyData->headline }}" /></a>
                                </div>
                                <div class="product_content">
                                    <h4  title="{{ 'R '.number_format($propertyData->price,0," "," ") }}" >R {{ number_format($propertyData->price,0," "," ")  }}</h4>
                                    <small title="{{ $propertyData->headline }}" > {{ $propertyData->headline }} </small>
                                    
                                    @if($propertyData->complex_name != "") 
           <a title="{{ $propertyData->complex_name." ".$propertyData->unit_number }}" href="{{ $customUrl }}">
         <h3> {{ $propertyData->complex_name." ".$propertyData->unit_number }}</h3>
          </a>
         @else
          <a title="{{ $propertyData->street_name." ".$propertyData->street_number }}" href="{{ $customUrl }}">
         <h3> {{ $propertyData->street_name." ".$propertyData->street_number }}</h3>
          </a>
         @endif
        
                                    <p>{{ substr($propertyData->description,0,200) }}....
                                   
                                    </p>
                                    @if($propertyData->bedrooms > 0 || $propertyData->bathrooms > 0 || $propertyData->garages > 0 || $propertyData->floor_size > 0)
                                    <div class="product_detail">
                                        @if($propertyData->bedrooms > 0)
                                        <span title="{{ $propertyData->bedrooms }} Bedroom"><img src="{{ asset('front/images/icon_bed_new.png') }}" alt="icon_bed_new">{{ $propertyData->bedrooms }} Bedroom</span>
                                        @endif
                                          @if($propertyData->bathrooms > 0)
                                        <span title="{{ $propertyData->bathrooms }} Bathroom"><img src="{{ asset('front/images/icon_bath_new.png') }}" alt="icon_bath_new">{{ $propertyData->bathrooms }} Bathroom</span>
                                         @endif
                                           @if($propertyData->garages > 0)
                                        <span title="{{ $propertyData->garages }} Garage"><img src="{{ asset('front/images/icon_parking.png') }}" alt="icon_parking"> {{ $propertyData->garages }} Garage</span>
                                           @endif
                                             @if($propertyData->floor_size > 0)
                                        <span title="{{ $propertyData->floor_size }}{{ $propertyData->floor_size_unit }}" ><img src="{{ asset('front/images/icon_floor_new.png') }}" alt="icon_floor_new"><small>{{ $propertyData->floor_size }} <sup>{{ $propertyData->floor_size_unit }}</sup></small></span>
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
                           
                             
                             
                            @php
                            if(isset($propertyDatas) && !$propertyDatas->isEmpty()){
                    	
                    	  
                        
                            $suburb_pserach  = str_replace(" ","-",$propertyDatas[0]->suburb);
                            $town_pserach  = str_replace(" ","-",$propertyDatas[0]->town);
                            $province_pserach  = str_replace(" ","-",$propertyDatas[0]->province);
                          
                            }
                       @endphp
                       
                       
                        @php
                                 if(isset($propertyDatas) && !$propertyDatas->isEmpty()){ 
                        $customUrl_pserach = route('to-rent',['url_city'=>$suburb_pserach,'url_town'=>$town_pserach,'url_province'=>$province_pserach,'city'=>$propertyDatas[0]->town]); 
                          }
                             @endphp
                             
                             @if(isset($propertyDatas) && !$propertyDatas->isEmpty())
                    	<div class="view_more_button text-right">
                    	    <a href="{{ $customUrl_pserach }}" class="theme-btn d-inline-block h-auto">View More</a>
                    	</div>
                    @endif
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
