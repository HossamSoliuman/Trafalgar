@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','agent-search')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <div class="breadcrumbs">
      <div class="container">
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Agent Search</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                  
                    
                    @if(!empty($arrayResidential))
                    
                    <div class="heading mb-0">
                       <h3 style="font-weight:500" class="mb-0">Residential Letting Agent</h3>
                    </div>
                    
                    @foreach($arrayResidential as $agentTownKey => $agentTownValue)
                    <div class="d-flex flex-column gap-20">
                        <h6>{{ strtoupper($agentTownKey) }}</h6>
                        @if(!empty($agentTownValue))
                        <div class="all_agents">
                           
                            @foreach($agentTownValue as $agentDetail)
                           
                            <div class="eachagent_view">
                                <img class="img-fluid" src="{{ $agentDetail['photo_url'] }}" alt="{{$agentDetail['agent_name'] }}">
                                <div class="agent_name_contact">
                                    <a href="{{ route('agent',['agentid'=> $agentDetail['agent_id']]) }}"><h6>{{$agentDetail['agent_name'] }}</h6></a>
                                    @if(isset($agentDetail['mobile_number']))
                                     <p class="mobileshow" data-attr="{{ str_replace(' ','-',$agentTownKey) }}{{ $loop->iteration }}" style="cursor:pointer;"><span class="icon-phone"></span>Show Contact Number</p>
                                    <p id="mobileshow{{ str_replace(' ','-',$agentTownKey) }}{{ $loop->iteration }}" style="display:none;"><span class="icon-phone"></span>{{ $agentDetail['mobile_number'] }}</p>
                                    @endif
                                    
                                    <a class="readmore" href="{{ route('agent',['agentid'=> $agentDetail['agent_id']]) }}">Read More ></a>
                                </div>
                            </div>
                          
                            
                            @endforeach
                        </div>
                        @endif
                    </div>
                     @endforeach
                    
                    @endif
                    
                    @if(!empty($arrayCommercial))
                    
                    <div class="heading mb-0">
                       <h3 style="font-weight:500" class="mb-0">Residential Sales Agent</h3>
                    </div>
                    
                    @foreach($arrayCommercial as $agentTownKey => $agentTownValue)
                    <div class="d-flex flex-column gap-20">
                        <h6>{{ strtoupper($agentTownKey) }}</h6>
                        @if(!empty($agentTownValue))
                        <div class="all_agents">
                            @foreach($agentTownValue as $agentDetail)
                           
                            <div class="eachagent_view">
                                <img class="img-fluid" src="{{ $agentDetail['photo_url'] }}" alt="{{ $agentDetail['agent_name'] }}">
                                <div class="agent_name_contact">
                                    <a href="{{ route('agent',['agentid'=> $agentDetail['agent_id']]) }}"><h6>{{ $agentDetail['agent_name'] }}</h6></a>
                                    <p class="mobileshow"><span class="icon-phone"></span>Show Contact Detail</p>
                                    <a class="readmore" href="{{ route('agent',['agentid'=> $agentDetail['agent_id']]) }}">Read More ></a>
                                </div>
                            </div>
                           
                            @endforeach
                        </div>
                        @endif
                    </div>
                     @endforeach
                    
                    @endif
                   
                    
                    
                </div>
                <div class="guldenland_sidebar">
                  @include('frontPart/rightBar/rightBarQuickContactForm') 
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="https://webplan.live/front/images/alert.png" alt="alert" />
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="https://webplan.live/front/images/property.png" alt="property" />
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="https://webplan.live/front/images/valuation.png" alt="valuation" />
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

    <!-- page section  -->

    <!-- main footer section  -->

   @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection

@push('agent-search-js-page')
@include('frontPart.js.agentSearchJs')
@endpush

