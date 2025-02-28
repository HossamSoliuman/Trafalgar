@extends('layouts.front')

@section('content')

<section class="favoriteList_view profile_section_view">
    <div class="container">
        <div class="favoriteList_content">
            
            <div class="favoriteList_all_product">
                 @if(!$favouriteProperties->isEmpty())
                            
                                @foreach($favouriteProperties as $key => $value)
                                
                                @php $propertyData = $value->propertyDatas @endphp
                              
                                
                               @php
                                $suburb = str_replace(" ","-",$propertyData->suburb);
                                $town = str_replace(" ","-",$propertyData->town);
                                $province = str_replace(" ","-",$propertyData->province);
                                $mandate_saletype = str_replace(" ","-",$propertyData->mandate_saletype);
                               $customUrl = route('property-'.$mandate_saletype,['p_suburb'=>$suburb, 'p_town'=>$town, 'p_province'=>$province,'p_id'=>$propertyData->id,'p_ref'=>$propertyData->property_id]);
                               @endphp
                <div style="cursor: pointer;" onclick="window.location = '{{ $customUrl }}';"  class="favoriteList_each_product">
                    <span class="fav" ><a href="{{ route('removeFavourite',[ 'id' => $propertyData->property_id]) }}" data-toggle="tooltip" title="Remove from Favorite" ><img class="img-fluid" src="{{ asset('front/images/heart.svg') }}"></a></span>
                    <div class="product_img">
                       <a href="{{ $customUrl }}"> <img class="img-fluid" src="{{ $propertyData->news_featured_image }}"></a>
                    </div>
                    <div class="product_content">
                        <h5 class="m-0">R {{ number_format($propertyData->price,0," "," ")  }} </h5>
                        <small> {{ $propertyData->headline }} </small>
                        <a href="#"> <h4> {{ $propertyData->complex_name." ".$propertyData->unit_number }}</h4></a>
                        <p class="m-0">{{ substr($propertyData->description,0,200) }}....</p>
                    </div>
                </div>
                <div class="line"></div>
                @endforeach
                
                           @else
                           <div class="favoriteList_each_product">
                               There are no favourite properties for you.
                            </div>
                           @endif
                             @if ($favouriteProperties->hasPages())
                           <div class="property_pagination">
                                 {{ $favouriteProperties->links() }}
                                
                            </div>
                             @endif
                <!--<div class="favoriteList_each_product">-->
                <!--    <div class="product_img">-->
                <!--       <a href="#"> <img class="img-fluid" src="https://s3.entegral.net/b/f_6f1f579a6e44458bb8489c82b0fa4647.png"></a>-->
                <!--    </div>-->
                <!--    <div class="product_content">-->
                <!--        <h5 class="m-0">R 3 900 <span><img class="img-fluid" src="https://webplan.live/front/images/heart.svg"></span></h5>-->
                <!--        <small> 2 Bedroom flat available in Algoapark </small>-->
                <!--        <a href="#"> <h4> Aloes Flats 10</h4></a>-->
                <!--        <p class="m-0">This neat 3 bedrooms, 1-bathroom flat is bright and spacious, A starter home for a small family of 6 people and is situated in Kamdebo Street in Algoa Park.The flat has a perfect view of the amenities....</p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="line"></div>-->
            </div>
            
        </div>
    </div>
</section>

<!-- main footer section  -->

@include('frontPart/mainFooter')

<!-- main footer section  -->

<!-- copyright section  -->
@endsection