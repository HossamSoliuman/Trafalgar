@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','pretoria.property-to-rent-pretoria-east')->first(); @endphp
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
                <h1>Property To Rent In Pretoria East, Pretoria</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                     <p>  The suburbs collectively known as Pretoria East offer a host of properties to rent, from trendy studios and apartments to stylish townhouses, spacious family homes and luxury mansions.</p> 

<p> It is divided into the “Old East”, which is comprised of heritage suburbs like Brooklyn, Groenkloof, Muckleneuk, Lynnwood, Menlo Park, Val de Grace and Waterkloof, and the “New East”, which includes Menlyn, Faerie Glen, Garsfontein, Moreleta Park, Equestria, Willows, Wapadrand, Hazeldean and Silver Lakes.</p> 

<p> The Old East is renowned for its quiet streets lined with the Jacaranda and Bauhinia trees for which the city is famous and that attract thousands of tourists annually. It is home to most of SA’s diplomatic community and the homes to let here are generally upmarket townhouses and clusters in established security complexes or large houses with extensive gardens.</p> 
                       
						 <div class="more">
		
<p>However, high demand for more modern homes is also driving the redevelopment of many older properties in Brooklyn, Menlo Park and Lynnwood into luxury apartment complexes and small residential estates – and the creation of new retail and commercial developments like The Club precinct in Hazelwood.</p>

<p>The area is hilly, so many properties in the Old East offer beautiful views. Other reasons to rent a home here include proximity to Pretoria’s top schools (Affies, Afrikaanse Hoër Meisieskool, Pretoria Boys’ and Pretoria Girls’ high schools, Menlo Park Hoër and Waterkloof Hoër), the University of Pretoria and the CSIR, as well as several exclusive shopping centres, the Botanical Gardens and the Pretoria Country Club with its Gary Player-designed golf course.</p>

<p>Rentals for apartments to rent in the Old East range from R4000 to R6000 a month for studios and one-bedroom units and from R6200 to around R8000 a month for two-bedroom units. Two and three-bedroom townhouses rent for between R8000 and R15 000 a month, while rentals for bigger, more modern townhouses and cluster homes can go as high as R60 000 a month. Three-bedroom houses to rent are available at prices from around R10 000 a month ranging up to around R25 000, while diplomats will rent luxury mansions with five and six bedrooms and baronial reception rooms for up to R100 000 a month.</p>

<p>The New East is always a hive of development activity and apartments and townhouses to let are in high demand among young people working in the many new office and commercial developments taking place here, including those in the burgeoning Menlyn Maine green city precinct and those in Hazeldean.</p>

 

<p>In recent years the area has also attracted many top professionals and executives to the security and lifestyle advantages of its many upmarket residential estates, some of which have their own schools. These include the Silver Lakes Golf Estate of course, as well as Mooikloof Equestrian Estate, Lombardy Nature Estate, Wapadrand Estate, Woodhill and a wide choice of others in Equestria, Faerie Glen, Olympus and Moreleta Park.</p>

<p>Renting a home in the New East also means having easy access to all the shops, restaurants and entertainment options in major new shopping malls such as Parkview, Woodlands Boulevard, Boardwalk Lakeside, The Grove and Lynnwood Bridge as well as the familiar Menlyn Park mall and Atterbury Value Mart.</p>

<p>Rentals for apartments to let in the New East start at around R4500 a month for studios and one-bedroom units, and at about R5500 for two-bedroom units. Rentals for townhouses to let start at around R6000 for two-bedroom units and around R6700 for three-bedroom options.</p>

<p>Three-bedroom houses are available at rentals from R8000 all the way up to around R30 000 a month. At the top end of the market, monthly rentals for luxury estate homes with four or more bedrooms range from around R32 000 a month up to around R82 000 a month.</p>


					   
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
