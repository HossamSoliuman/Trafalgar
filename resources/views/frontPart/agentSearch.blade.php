@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','agent-search')->first(); @endphp
@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('agent-search') }}">Agent Search</a></li>
            </ul>
        </div>
    </div>

    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">

            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <h1>Agent Search</h1>
                    @foreach ($agentGetBuyCategory as $categoryKey => $categoryData)
                        @if ($categoryData != null)
                            <div class="heading mb-0">
                                <h3 style="font-weight:500" class="mb-0">{{ ucwords(str_replace('_', ' ', $categoryKey)) }}
                                </h3>
                            </div>
                            <div class="d-flex flex-column gap-20">
                                <div class="all_agents">
                                    @foreach ($categoryData as $cityKey => $agents)
                                        @php
                                            $agentDataLoop = $agents['agentData'];
                                        @endphp
                                        @if ($agentDataLoop->isNotEmpty())
                                            <h6>{{ ucwords(str_replace(['capeTown', 'johannesBurg'], ['Cape Town', 'Johannesburg'], $cityKey)) }}
                                            </h6>
                                            @foreach ($agentDataLoop as $agent)
                                                <div class="eachagent_view">
                                                    <img class="img-fluid"
                                                        src="{{ isset($agent->photo_url) && $agent->photo_url != '' ? $agent->photo_url : asset('front/images/agent-img.png') }}"
                                                        alt="{{ $agent->first_name }}">
                                                    <div class="agent_name_contact">
                                                        <a
                                                            href="{{ route('agent', ['agentid' => $agent->agent_name_slug]) }}">
                                                            <h6>{{ ucwords($agent->first_name) }}</h6>
                                                        </a>
                                                        @if (isset($agent->mobile_number))
                                                            <p class="mobileshow"
                                                                data-unique="{{ $categoryKey }}-{{ $agent->id }}"
                                                                style="cursor:pointer;">
                                                                <span class="icon-phone"></span>Show Contact Number
                                                            </p>
                                                            <p class="mobileshow-{{ $categoryKey }}-{{ $agent->id }}"
                                                                style="display:none;">
                                                                <span class="icon-phone"></span>{{ $agent->mobile_number }}
                                                            </p>
                                                        @endif
                                                        <a class="readmore"
                                                            href="{{ route('agent', ['agentid' => $agent->agent_name_slug]) }}">Read
                                                            More ></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <!-------------new code fo agent list -------------->







                </div>
                <div class="guldenland_sidebar">
                    @include('frontPart/rightBar/rightBarQuickContactForm')
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/alert.png') }}" alt="alert" />
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/property.png') }}" alt="property" />
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/valuation.png') }}"
                                        alt="valuation" />
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
