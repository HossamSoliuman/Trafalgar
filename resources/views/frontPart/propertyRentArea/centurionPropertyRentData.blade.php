@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','pretoria.property-to-rent-centurion')->first(); @endphp
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
                <h1>Property To Rent In Centurion, Pretoria</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                       
                     <p>  Centurion is a town in the Tshwane metro and it offers many apartments and homes to let in central suburbs such as Die Hoewes, Lyttleton, Doringkloof, Irene, Hennopspark, Zwartkop, Eldoraigne and Club View, as well as more outlying areas such as Pierre van Ryneveld Rooihuiskraal, The Reeds, Thatchfield, Amberfield, Heuwelsig and Monavoni.</p> 

<p> It borders Pretoria to the North and Midrand to the South and is linked to both by the N1 freeway and the Gautrain, so it is a popular rental node with those who need to commute to work. West Rand destinations such as Roodepoort and Krugersdorp are also easy to access from here via the N14.</p> 

<p> Die Hoewes is “apartment central” in Centurion, and there are many modern blocks here offering flats to let at rates starting from around R4800 a month for a one-bedroom and around R5600 a month for two-bedroom units.</p> 

<p> Rentals for three-bedroom properties to let in Die Hoewes start at around R6800 a month for apartments and R7000 a month for simplex townhouses with small gardens. Duplex (two-storey) townhouses start at around R8000.</p> 
                       
                       
						 <div class="more">
	<p> Due to its accessibility and central location, this area is also home to many office parks and techno-parks built around the Centurion Lake, as well as the Supersport Park international cricket stadium and concert venue. It also boasts several large retail complexes including Centurion Mall, and many well-patronised restaurants, entertainment venues, hotels and guesthouses.</p> 

<p> Another very popular rental area is Pierre van Ryneveld, close to the junction of the N1 freeway and the R21 that leads to the East Rand and the OR Tambo International airport. Homes to let in this suburb include three-bedroom townhouses and houses at rentals from around R8500 a month up to around 15 000 a month.</p> 

<p> Formerly a peri-urban area made up of agricultural smallholdings, Centurion now also has many lifestyle and golf estates offering a modern-day “country” ambience and luxury homes to let that are much in demand among professionals and the executives of major companies in the area including Aerosud, SAAB Grintek Technologies and Siemens.</p> 

<p> These estates include Centurion Golf Estate and Irene Farm Villages, as well as Cornwall Hill and Southdowns, both of which have their own schools. Rentals for houses to let in these upmarket enclaves start at around R13 000 a month for a three-bedroom house in Centurion Golf Estate and range up to R60 000 for a five-bedroom villa in Southdowns.</p> 

<p> Centurion is also home to the massive Midstream complex, which is made up of several separate estates and also has its own schools as well as two shopping centres, a private hospital, a nine-hole golf course and a spa. Homers to let in Midstream are available at rates ranging from around R15 500 a month for a three-bedroom house up to R60 000 a month for a seven-bedroom mansion.</p> 

<p> The most popular Centurion suburbs for families seeking homes to let are those close to the top State schools in the area which include the Irene, Lyttleton and Doringkloof primary schools and the Afrikaans-medium Eldoraigne, Centurion and Zwartkops high shools. The average house rental in these areas is around R16 000 a month.</p> 

<p> Sites of historical interest in Centurion include the South African Airforce Museum, Jan Smuts House, the Irene Concentration Camp memorial and the World War 2 memorial on Cornwall Hill.</p> 
		
		
	
					   
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
