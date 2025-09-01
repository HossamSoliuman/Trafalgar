@extends('layouts.mainPage')

@section('content')
    @include('frontPart/propertySearchSection')
    @include('frontPart/propertySolutionSection')

    <!-- about section  -->
    @include('frontPart/aboutUsSection')
    <!-- about section  -->

    <!-- latest news section  -->

    @include('frontPart/latestNewSection')

    <!-- latest news section  -->

    <!-- magazine section  -->


    @include('frontPart/eMagazineSection')
    <!-- magazine section  -->

    <!-- service section  -->

    <section class="service-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/icon-e_learning.webp') }}" alt="e_learning" loading="lazy">
                            </div>
                            <h4>Free E-Learning</h4>
                            <p>Sectional Title Trustee & HOA
                                Director Training</p>
                        </div>
                        <button class="theme-btn"
                            onclick='window.open("https://training.trafalgar.co.za/courses/", "_blank")'>Enroll
                            Now!</button>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <div class="text-center">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/icon-health.webp') }}" alt="health" loading="lazy">
                            </div>
                            <h4>Health Check</h4>
                            <p>Free Sectional Title <br class="d-none d-md-block" />
                                Health Check</p>
                        </div>
                        <button
                            onclick='window.open("https://training.trafalgar.co.za/sectional-title-healthcheck/", "_blank")'
                            class="theme-btn">Get Yours Now!</button>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-5">
                    <div class="text-center">
                        <div class="each-property-solution">
                            <div class="eachimg">
                                <img src="{{ asset('front/images/icon-webinar.webp') }}" alt="webinar" loading="lazy">
                            </div>
                            <h4>Webinars</h4>
                            <p>Tips & Recommendations For
                                Trustees & Directors</p>
                        </div>
                        <button onclick='window.open("https://training.trafalgar.co.za/webinars/", "_blank")'
                            class="theme-btn">Watch Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service section  -->

    <!-- offices section  -->

    <section class="offices-section section-padding">
        <div class="container">
            <div class="heading text-center">
                <h1>Our Offices</h1>
            </div>
            <div class="all_offices mt-5">
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'cape-town']) }}'">
                    <img src="{{ asset('front/images/branches-cape_town.webp') }}" alt="cape_town" loading="lazy">
                    <h6>Cape Town</h6>
                </div>
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'durban']) }}'" loading="lazy">
                    <img src="{{ asset('front/images/branches-durban.webp') }}" alt="durban">
                    <h6>Durban</h6>
                </div>
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'east-london']) }}'" loading="lazy">
                    <img src="{{ asset('front/images/branches-east_london.webp') }}" alt="london">
                    <h6>East London</h6>
                </div>
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'johannesburg']) }}'" loading="lazy">
                    <img src="{{ asset('front/images/branches-birdhaven_jhb.webp') }}" alt="johannesburg">
                    <h6>Johannesburg</h6>
                </div>
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'knysna']) }}'" loading="lazy">
                    <img src="{{ asset('front/images/branches-knysna.webp') }}" alt="knysna">
                    <h6>Knysna</h6>
                </div>
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'port-elizabeth']) }}'" loading="lazy">
                    <img src="{{ asset('front/images/branches-port_eliza.webp') }}" alt="port elizabeth">
                    <h6>Port Elizabeth</h6>
                </div>
                <div style="cursor: pointer;" class="each_office"
                    onclick="location.href='{{ route('contact-us', ['office' => 'pretoria']) }}'" loading="lazy">
                    <img src="{{ asset('front/images/branches-pretoria.webp') }}" alt="pretoria">
                    <h6>Pretoria</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- offices section  -->

    <!-- footer top section  -->

    <section class="footer_top_section">
        <div class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Property {{ $tab }} <br /> in Gauteng</h5>
                            <div class="content_list">
                                <ul>
                                    @foreach ($getDistinctProvinces['Gauteng'] ?? [] as $item)
                                        @php
                                            $suburb = str_replace(' ', '-', $item->suburb);
                                            $town = str_replace(' ', '-', $item->town);
                                            $province = str_replace(' ', '-', $item->province);
                                            $customUrl = route($tabUrlForFooter, [
                                                'url_city' => $suburb,
                                                'url_town' => $town,
                                                'url_province' => $province,
                                                'city' => $item->suburb,
                                            ]);
                                        @endphp
                                        <li><a href="{{ $customUrl }}">{{ $item->suburb }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Property {{ $tab }} <br /> in Kwazulu Natal</h5>
                            <div class="content_list">
                                <ul>
                                    @foreach ($getDistinctProvinces['Kwazulu Natal'] ?? [] as $item)
                                        @php
                                            $suburb = str_replace(' ', '-', $item->suburb);
                                            $town = str_replace(' ', '-', $item->town);
                                            $province = str_replace(' ', '-', $item->province);
                                            $customUrl = route($tabUrlForFooter, [
                                                'url_city' => $suburb,
                                                'url_town' => $town,
                                                'url_province' => $province,
                                                'city' => $item->suburb,
                                            ]);
                                        @endphp
                                        <li><a href="{{ $customUrl }}">{{ $item->suburb }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Property {{ $tab }} <br class="d-none d-md-block" /> in Eastern Cape</h5>
                            <div class="content_list">
                                <ul>
                                    @foreach ($getDistinctProvinces['Eastern Cape'] ?? [] as $item)
                                        @php
                                            $suburb = str_replace(' ', '-', $item->suburb);
                                            $town = str_replace(' ', '-', $item->town);
                                            $province = str_replace(' ', '-', $item->province);
                                            $customUrl = route($tabUrlForFooter, [
                                                'url_city' => $suburb,
                                                'url_town' => $town,
                                                'url_province' => $province,
                                                'city' => $item->suburb,
                                            ]);
                                        @endphp
                                        <li><a href="{{ $customUrl }}">{{ $item->suburb }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6">
                        <div class="footer_top_content">
                            <h5>Rest of South Africa <br /><br class="brr d-none d-md-block" /></h5>
                            <div class="content_list">
                                <ul>
                                    @foreach ($getUniqueTown ?? [] as $item)
                                        @php
                                            $suburb = str_replace(' ', '-', $item->suburb);
                                            $town = str_replace(' ', '-', $item->town);
                                            $province = str_replace(' ', '-', $item->province);
                                            $customUrl = route('to-rent', [
                                                'url_city' => $suburb,
                                                'url_town' => $town,
                                                'url_province' => $province,
                                                'city' => $item->town,
                                            ]);
                                        @endphp
                                        <li><a href="{{ $customUrl }}">{{ $item->town }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- footer top section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection

@push('home-page-search-js')
    @include('frontPart.js.homePageSearchJs')
@endpush

@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','/')->first(); @endphp

@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
