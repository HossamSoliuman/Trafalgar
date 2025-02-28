@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','durban.property-to-rent-umhlanga')->first(); @endphp
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
                <h1>Property To Rent In Umhlanga, Durban</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                        <p>The Umhlanga area to the north of Durban is not only a prime holiday destination but has become the economic hub of KwaZulu -Natal in the past few years, with a corresponding increase in demand for all sorts of apartments and houses to let.</p>

<p>Located within the eThekwini metro, Umhlanga is bordered by Durban North, Ballito and Mt Edgecombe and is one of the fastest growing towns in SA. The original coastal village of Umhlanga Rocks has expanded to include La Lucia and Umhlanga Ridge, which is now home to many major companies that have relocated from the Durban CBD, as well as the enormous Gateway Theatre of Shopping.</p>

<p>The town has gained thousands of new residents due to this growth, and the demand for apartments and houses to let on a long-term basis has risen accordingly, prompting many new residential developments. Many of these are located in and around the new town centre, but there are also many apartments to let closer to the sea in “old Umhlanga”, and houses to let in La Lucia and Mount Edgecombe.</p>
						 <div class="more">
		<p>Rates for apartments to let in Umhlanga start at around R6500 a month for a one-bedroom unit, and at R7500 a month for two-bedroom units. Sea views, proximity to the beach and the age and security of the complex are the most important variables influencing rental levels.</p>

<p>Three-bedroom apartments and townhouses/ duplexes are available to let at rentals from around R8000 to R15 000 a month, with luxury units renting for up to R30 000 a month. The monthly rates for ground-level homes start at around R5000 for a one-bedroom garden cottage and at around R16 000 a month for a three-bedroom house. However luxury homes on security estates in the area can easily rent for as much as R50 000 a month.</p>

<p>Umhlanga is just a short drive from the King Shaka International airport and it has a thriving and growing tourist industry, with thousands of people from around the world flocking to the resort town in the summer months to soak up the sun and surf and enjoy world-class service and food in its many luxury hotels and gourmet restaurants. The four and five-star hotels in the area include the internationally-renowned Oyster Box, the Cabana Beach Resort, Umhlanga Beach Resort, Breakers Resort and the Beverly Hills Hotel.</p>

<p>There is also strong seasonal demand for holiday apartments to let among those who come to enjoy activities such as fishing, ski-boat fishing, surfing, kite-surfing, snorkelling and scuba diving. Rentals for such flats start at around R800 a day for a one-bedroom unit in low season and at about R1300 a day for two-bedroom units.
In high season, rentals for luxury units in developments such as The Pearls start at around R6000 a day.</p>

Golfers are also spoilt for choice with a host of world class courses all within driving distance of Umhlanga. Perfect for picnics, the Umhlanga Lagoon walking trail also enables visitors to see buck, birds and butterflies in their natural surroundings.

<p>The Natal Sharks Board based in Umhlanga is another major attraction for visitors who can learn all about these majestic creatures and even take a boat trip to see first-hand how the crews service the shark nets along Durban’s Golden mile. If they are lucky they may even get an up-close view of dolphins and whales at first light.
Meanwhile, thanks to its proximity to the airport and the port of Durban, Umhlanga is also becoming an international business hub that has already attracted millions of rands’ worth of foreign investment into new high-rise developments such as Oceans Umhlanga. There has also been an increase in the demand for luxury apartments to let among affluent executives who frequently do business in the town.</p>

<p>The Gateway Theatre of Shopping is the biggest shopping mall in the southern hemisphere with more than 400 stores and restaurants and is also the centrepiece of Umhlanga Ridge, the relatively new commercial and industrial precinct which has developed to the west of the original village. This area is also home to the Netcare Umhlanga private hospital and a number of new apartment developments very popular among the employees and managers of local businesses.</p>
					   
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
