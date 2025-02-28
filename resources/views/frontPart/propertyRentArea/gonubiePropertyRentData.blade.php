@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','east-london.property-to-rent-gonubie')->first(); @endphp
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
                <h1>Property To Rent In Gonubie, East London</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                        
<p>Gonubie is a small town in the Buffalo City metro, located just 21km north east of East London and offering a wide range of homes to let in a sought-after seaside setting.<p>

<p>Situated at the mouth of the Gqunube River, the town boasts a blue-flag beach and is a very popular holiday destination, with many apartments to let on a short-term basis. However, for longer-terms stays, it also offers luxurious houses to let with spectacular river and sea views and retirement village cottages, as well as townhouses and apartments in the new developments currently taking place in the area.</p>

<p>For those renting homes in Gonubie, it is easy to access the suburb of Beacon Bay and then the East London CBD via the N2 and Main Road, and a second road link to Beacon Bay is currently under construction to accommodate the growing volume of traffic between the two areas.</p>
                        
                        
                        
						 <div class="more">
		
	<p>However, for those with no need to commute to work, Gonubie offers all the amenities required for daily living within easy reach of home. Schools in the area include Maya’s Montessori school, the Gonubie and Gonubie Christian primary schools, and the Gonubie high school.</p>

<p>Most residents frequent the Kings Mall (anchored by Pick ‘n Pay) for their shopping needs, as it also contains a wide variety of clothing stores, restaurants, fast food outlets, banks and entertainment venues. Gonubie’s main medical facility, the Intercare medical and dental centre, is also located at this mall.</p>

<p><p>Of course the biggest attraction for those looking for homes to let in this town is its beautiful blue-flag beach and boardwalk. There are many restaurants along the beachfront, including the famous Heavenly Pancake House, and many B&Bs, guesthouses and vacation apartments to let.</p>

<p>Gonubie also has a lovely bird sanctuary which offers nature lovers the chance to see about 160 different species as well as a variety of rare indigenous plants, and the riverfront also attracts many visitors, with its picnic sites with braai facilities and a boat jetty.</p>

<p>Canoeing, kayaking, surfing and angling are the order of the day here, but the local sports club also offers running, tennis, bowls and cricket facilities, as well as several sports events and festivals throughout the year. There are also several popular coastal hiking trails in this area.</p>

<p>Rentals for homes to let in Gonubie start from around R4000 a month for one-bedroom apartments; from around R5500 for two-bedroom apartments or townhouses, and from around R6500 for three-bedroom homes. Luxury three- and four-bedroom homes with sea views are available for around R12 000 to R15 000 a month.</p>
	
					   
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
