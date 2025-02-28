@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','johannesburg.property-to-rent-midrand')->first(); @endphp
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
                <h1>Property To Rent In Midrand, Johannesburg</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                         <p>The town of Midrand forms part of the Johannesburg metro and is well-located in relation to all the main business centres as well as Pretoria. It is thus a high-demand location among those looking for apartments and homes to rent, and offers an enormous variety of rental options.</p>
<p>Midrand has its own Gautrain station so it is easily accessible for those working in the Johannesburg CBD, Rosebank or Sandton, for example, or in Centurion and the Pretoria CBD, or close to the OR Tambo International airport in Kempton Park.</p>
<p>Thanks to its central location, Midrand is also now a major business hub in its own right, with its own busy airport and the biggest meetings and conference venue in SA, Gallagher Estate. The area is home to a large number of blue-chip company headquarters, manufacturing concerns and logistics centres close to the Grand Central airport and the highway network, and there is also strong demand for homes and apartments to let among the employees and executives of these companies.</p>
						 <div class="more">
		
	<p>	Rooms and apartments to let here are also increasingly popular among students who use the Gautrain to get to universities and colleges in both Johannesburg and Pretoria, or who are attending local tertiary educational facilities including Varsity College’s Midrand Graduate Institute, UNISA’s Graduate School of Business Leadership and the Pearson Institute of Higher Learning.</p>

<p>The monthly rentals for single rooms with communal facilities or rooms in shared houses and apartments range from R2000 to around R3000 a month. There are also many bachelor and one-bedroom garden cottages to let in suburbs such as Halfway Gardens, Glen Austin and President Park at rentals starting from around R3700 a month.</p>

<p>Midrand has mushroomed around the original village known as Halfway House, which until the 1970s was just a convenient rest stop for those travelling between Johannesburg and Pretoria, and today encompasses many other suburbs, including Halfway Gardens, Glen Austin, President Park and Randjesfontein to the east of the N1 highway and Beaulieu, Blue Hills, Carlswald, Crowthorne, Kyalami, Vorna Valley, Noordwyk, Sagewood, Summerset and Waterfall to the west.</p>

<p>The monthly rentals for apartments and townhouses to let in these areas start at around R4000 a month for studio apartments with parking in Noordwyk and at around R4400 a month for similar accommodation in Sagewood. There are two-bedroom townhouses to let in Vorna Valley and Halfway Gardens from around R6200 a month to about R7200.</p>

<p>Rentals for two and three-bedroom apartments and townhouses to let in Carlswald, Crowthorne and Blue Hills range from R8700 all the way up to around R15 000 a month for luxury units, while rentals for three-bedroom, two-bathroom family homes to let start at around R6900 in Blue Hills.</p>

<p>At the top end of the Midrand market, there are luxury three, four and five-bedroom homes to let in security estates in the Carlswald, Kyalami and Waterfall areas at rentals from around R25 000 a month all the way up to R120 000 a month.<p>

<p>Another reason for the popularity of Midrand among tenants of all ages and income brackets is the presence of many excellent schools, shopping centres and sports and medical facilities right on their doorstep, including the massive Mall of Africa in Waterfall.<p>

<p>Renting a home here puts residents in proximity to Beaulieu College, Cedarwood, the Summerhill schools, the Sagewood schools, Midrand Primary, Midrand High, Noordwyk Primary, Glen Austin High, Carlswald Primary, Halfway House Primary and The Valley Primary.<p>

<p>In addition to the Mall of Africa, residents can shop at The Boulders, Midrand City, Midrand Mall, Kyalami Corner, Kyalami on Main, San Ridge Square, the Carlswald Lifestyle shopping centre, Blue Hills centre and Crowthorne centre, while nearby medical facilities include the Netcare Waterfall City hospital, the Life Carstenhof hospital, and the Blue Hills, San Ridge and Midrand medical centres.</p>

<p>Homes and apartments to let in Midrand are also attractive to sports and outdoor enthusiasts, as the area is well-known for its many equestrian facilities, peaceful bird sanctuary in Glen Austin and excellent golf courses including those at the Kyalami Country Club and the Blue Valley estate. There is also an Action Sports complex in Halfway House offering indoor cricket, soccer and netball.</p>
		
		
		
	
	
					   
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
