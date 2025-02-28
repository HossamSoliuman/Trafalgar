@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','cape-town.property-to-rent-southern-suburbs')->first(); @endphp
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
                <h1>Property To Rent In Southern Suburbs, Cape Town</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section manage-paragraph">
                        <div class="more-content">
                            <p>There is always strong demand for houses and apartments to rent in the Southern Suburbs of Cape Town, which include Bishopscourt, Claremont, Constantia, Kenilworth, Mowbray, Newlands, Observatory (Obs), Ottery, Pinelands, Plumstead, Rondebosch, Rosebank and Wynberg.</p>
                            <p>The University of Cape Town (UCT) is a major source of this demand, especially for apartments to rent in Rondebosch and Obs, which are served by the “Jammie” shuttle service to campus. However, there are also many other tertiary institutions in these areas, while the presence of many of Cape Town’s top schools also drives demand for houses to rent.</p>
                            <p>Rentals in these suburbs start at around R6000 a month for a one-bedroom apartment in Rondebosch and around R7500 a month for a studio in Obs. For students, rooms to rent are available at rentals from around R4500 a month plus electricity, while three and four-bedroom townhouses and family homes to rent start at around R18 000 a month.</p>
                            <div class="more">
                                <p>Kenilworth, where apartment rentals are somewhat lower is also increasingly popular among students, while Claremont offers young professionals flats to rent that are close to offices and upmarket shopping at Cavendish Square. The area is also known for its lively night life as it has great bars, clubs and restaurants in a City Improvement District with full-time security guards.</p>
                                <p>The rentals for two-bedroom flats to rent in both these areas start at around R9500 a month, and those for three-bedroom homes at around R12 000 a month.</p>
								<p>The suburb of Newlands is of course best known for rugby and it does attract many sports tourists as short-term tenants, but it is also extremely picturesque and convenient to schools, UCT and the centre of Cape Town, with the result that homes to rent here are always in short supply.</p>
								<p>Monthly rentals for two-bedroom apartments in this area start at around R11 500, and those for three-bedroom houses to rent at around R20 000.</p>
								<p>The heritage suburbs of Bishopscourt and Constantia are among Cape Town’s most affluent areas, still characterised by huge oak trees, exceptional views, and stately historic homes in large grounds with room for tennis courts and stables. They are home to a string of wine estates and award-winning restaurants and rentals are relatively high as there is a large corporate component to the market.</p>
								
								<p>Indeed, many houses here are to rent by the day, at rentals from R4500 per day. Monthly house rentals range from around R20 000 all the way up to R100 000 a month or even more. But there are also many one and two-bedroom cottages to rent at rentals from R8500 and around R16 000 a month respectively, making them accessible to younger residents.</p>
								
								<p>The Southern Suburbs have many attractions for nature lovers including the Constantia Valley wine farms, the Kirstenbosch Botanical Gardens, the Table Mountain National Park and the Tokai and Newlands forests. The Cavendish Square and Constantia Valley shopping centres meet most retail needs and there are also some excellent outdoor markets, including the Rondebosch Park Market, Constantia Craft Market, Millstone Eco-Friendly 
								Market in Pinelands and the Porter Estate Produce Market in Tokai.</p>
								
								<p>Cultural attractions include the Baxter Theatre complex in Rondebosch and the Maynardville Open-Air Theatre in Wynberg, which hosts an annual Shakespeare festival, while the schools for which the area is most renowned include Springfield Convent in Wynberg; Herschel Girls’ School in Claremont; SACS in Newlands, Rondebosch Boys’ School, Bishops, St Joseph’s and Westerford in Rondebosch, Reddam House and Waldorf in Constantia and the Wynberg high schools.</p>
								
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
