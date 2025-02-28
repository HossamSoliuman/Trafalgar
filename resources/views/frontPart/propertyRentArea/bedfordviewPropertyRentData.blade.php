@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','johannesburg.property-to-rent-bedfordview')->first(); @endphp

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
                <h1>Property To Rent In Bedfordview, Johannesburg</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                        
    <p>Often referred to as the “Sandton of the East”, Bedfordview offers a wide choice of homes to let, including luxury clusters, upmarket townhouses and high-rise apartments.</p>

<p>Although it is formally part of the Ekurhuleni municipality, it is very well-located in relation to the Johannesburg CBD and the Gauteng freeway network leading to the East Rand, Sandton, Midrand and Pretoria. It is also close to the OR Tambo International airport, and townhouses and apartments to let here are particularly sought-after by air crew as well as professionals and executives who travel extensively on business.</p>

<p>There are about 2000 apartments in the trendy Bedford Gardens precinct, for example, where monthly rentals currently start at around R6000 for one-bedroom units and around R10 000 for two-bedroom apartments to let</p>
                        
                        
						 <div class="more">
	
	
<p>	Sorry, no properties found - try expanding your search, or view all.</p>

<p>In the more upmarket buildings here, the rentals for furnished executive apartments and penthouses with three bedrooms or more precinct can range all the way up to around R30 000 a month.</p>

<p>Families are also attracted to Bedfordview because of the excellent schools in the area. These include Reddam House, St Andrew’s Girls; the Saheti Greek school; King David; St Benedict’s Boys; Holy Rosary Convent; Leeuwenhof Afrikaans Private School; Jeppe Boys High; Bedford Primary and Bedfordview High.</p>

<p>Homes to let in Bedfordview area are also close to a Boston College campus, two private clinics and outstanding shopping and entertainment venues, including the massive Eastgate Mall and the Park Meadows Mall opposite, as well as the Bedford, Village View and Key West shopping centres.</p>

<p>Sports facilities in the area include the Glendower, Linksfield and Royal Johannesburg & Kensington golf courses and a choice of athletics, baseball, bowls, cricket, hockey, rugby, soccer, tennis and squash facilities at the Jeppe Quondam Sport Club and the Bedfordview Country Club, which also has a Virgin Active gym in its grounds.</p>

<p>Families can also enjoy outings to Gillooly’s Farm, a 44ha piece of parkland in Bedfordview with walking and hiking trails, picnic/ braai areas, a lake and abundant birdlife. Other attractions nearby include Queen Street in neighbouring Kensington, with its string of antique shops, boutiques and restaurants, and Chinatown in Cyrildene, famous for its authentic Chinese cuisine and annual street festival to celebrate the Chinese New Year.</p>

<p>Monthly rentals for townhouses to let in secure complexes in Bedfordview currently start at around R6500 for one-bedroom units and R7000 a month for two-bedroom, one-bathroom units – and range all the way up to around R18 500 for luxury three-bedroom, two-bathroom duplexes. Cluster homes in exclusive complexes or boomed-off streets are available at rentals from R17 000 a month for three-bedroom units to around R40 000 a month for luxury units with four or five bedrooms, pools, extensive entertainment areas and expansive views.</p>

<p>Bedfordview is also home to the executives and owners of many of the businesses based in the burgeoning “aerotropolis” around the airport, and the modern mansions lining the hills here are some of the most glamorous and stylish in Gauteng, boasting spectacular views, the latest home technologies, seclusion and top-notch security. Such homes are also favoured by corporates looking to house foreign executives working in SA on contract, and are available to let at monthly rentals from around R35 000 to R60 000 a month.</p>
	
	
	
	
					   
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
