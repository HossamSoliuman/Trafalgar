@if (isset($propertyDetail))
    @php

        $property_id = $propertyDetail->property_id;
        $propertyCustomTitle =
            $propertyDetail->complex_name != ''
                ? strtoupper($propertyDetail->complex_name)
                : strtoupper($propertyDetail->street_name);

        $suburb = $propertyDetail->suburb;
        $city = $propertyDetail->town;
        $propertyType = ucfirst($propertyDetail->property_type);

        function limitWords($string, $char_limit)
        {
            return \Illuminate\Support\Str::limit($string, $char_limit, '');
        }

        // $metaTitle = 'Commercial land - ' . limitWords($propertyCustomTitle, 20) . ' - ' . $city . ' ' . $property_id;
        $metaTitle =
            strtolower($propertyDetail->province) .
            ' - ' .
            limitWords(strtolower($suburb), 20) .
            ' - ' .
            limitWords($propertyCustomTitle, 20) .
            ' - ' .
            $property_id;

    @endphp
    @section('title', $metaTitle)


    @section('meta_keywords', $property_id)

    @php
        $headLinePart = $propertyDetail->bedrooms != 0 ? $propertyDetail->bedrooms . ' Bedroom ' : 'Bachelor ';

        $subheading =
            $headLinePart . $propertyType . ' in ' . $suburb . ' ' . $property_id . ' - ' . $propertyCustomTitle;

        $isCommercial = in_array($propertyType, ['Commercial', 'Industrial', 'Business', 'Mixed use', 'Office']);
        $bedroomWord = $isCommercial ? '' : 'Bedroom ';

    @endphp
    @php
        $propertyStatus = \Illuminate\Support\Facades\Request::is('property-for-rent/*') ? 'For Rent' : 'For Sale';

        $metaDesc =
            $propertyDetail->bedrooms .
            $bedroomWord .
            $propertyType .
            ' ' .
            $propertyStatus .
            ' in ' .
            $suburb .
            ', ' .
            $city .
            ' - ' .
            $property_id .
            '. Property ' .
            strtolower($propertyStatus) .
            ' in ' .
            $suburb .
            '.';

        if (str_word_count($metaDesc) > 12) {
            $metaDesc =
                $propertyDetail->bedrooms .
                $bedroomWord .
                $propertyType .
                ' ' .
                $propertyStatus .
                ' in ' .
                $suburb .
                ', ' .
                $city .
                ' - ' .
                $property_id .
                '. Property ' .
                strtolower($propertyStatus) .
                ' in ' .
                $suburb .
                '.';
        }
    @endphp


    @section('meta_description', $metaDesc)
@endif




@extends('layouts.front')

@section('content')

    <!-- breadbrumb  -->
    <div class="breadcrumbs addArrowSymbol">
        <div class="container">
            @php

                $suburb = str_replace(' ', '-', $propertyDetail->suburb);
                $town = str_replace(' ', '-', $propertyDetail->town);
                $province = str_replace(' ', '-', $propertyDetail->province);
                $mandate_saletype = str_replace(' ', '-', $propertyDetail->mandate_saletype);
                if ($mandate_saletype == 'for-rent') {
                    $mandate_saletype = 'to-rent';
                } else {
                    $mandate_saletype = 'for-sale';
                }
                //create  url for single city
                $customUrl1 = route($mandate_saletype, [
                    'url_city' => $suburb,
                    'url_town' => $town,
                    'url_province' => $province,
                    'city' => $province,
                ]);
                $customUrl2 = route($mandate_saletype, [
                    'url_city' => $suburb,
                    'url_town' => $town,
                    'url_province' => $province,
                    'city' => $town,
                ]);
                $customUrl3 = route($mandate_saletype, [
                    'url_city' => $suburb,
                    'url_town' => $town,
                    'url_province' => $province,
                    'city' => $suburb,
                ]);

            @endphp

            <ul>
                <li><a href="#" onclick="history.back()">Back to Results</a></li>
                <li><a href="{{ url('/') }}">Property</a></li>
                <li><a href="{{ $customUrl1 }}">{{ $propertyDetail->province }}</a></li>
                <li><a href="{{ $customUrl2 }}">{{ $propertyDetail->town }}</a></li>
                <li><a href="{{ $customUrl3 }}">{{ $propertyDetail->suburb }}</a></li>


                <!--<li><a href="{{ $customUrl1 }}"> (isset($propertyData->location_province))?$propertyData->location_province:"" </a></li>-->
                <!--<li><a href="$customUrl2"> (isset($propertyData->location_town))?$propertyData->location_town:"" </a></li>-->
            </ul>
        </div>
    </div>
    <!-- breadcrumb -->
    @php
        $isApartmentBachelor =
            strtolower($propertyDetail->property_type) == 'apartment' && $propertyDetail->bedrooms == 0;
        $propertyTitle =
            $propertyDetail->bedrooms != 0
                ? $propertyDetail->bedrooms . ' Bedroom'
                : ($isApartmentBachelor
                    ? 'Bachelor'
                    : '');
        $propertyTitle .=
            ' ' .
            ucwords(
                $propertyDetail->property_type .
                    ' ' .
                    $propertyDetail->mandate_saletype .
                    ' in ' .
                    $propertyDetail->suburb,
            );
    @endphp
    <!-- main slider -->
    <section class="main-slider-section">
        <div class="container">
            @if ($propertyDetail->api_type_name === 'syncApi' && !empty($propertyData->photos))
                <div class="slider_bg">
                    <div id="sync1" class="owl-carousel">
                        @foreach ($propertyData->photos as $index => $photo)
                            <div class="item">
                                <a href="{{ $photo['imgUrl'] }}" data-fancybox="group">
                                    <img class="img-fluid" src="{{ $photo['imgUrl'] }}"
                                        alt="{{ $propertyTitle . '-' . ($index + 1) }}" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="sync2" class="owl-carousel">
                    @foreach ($propertyData->photos as $index => $photo)
                        <div class="item">
                            <img class="img-fluid" src="{{ $photo['imgUrl'] }}"
                                alt="{{ $propertyTitle . '-' . ($index + 1) }}" />
                        </div>
                    @endforeach
                </div>
            @endif

            @if ($propertyDetail->api_type_name === 'baseEntegralApi' && !empty($propertyData->photos))
                <div class="slider_bg">
                    <div id="sync1" class="owl-carousel">
                        @foreach ($propertyData->photos as $index => $photo)
                            <div class="item">
                                <a href="{{ $photo['url_large'] }}" data-fancybox="group">
                                    <img class="img-fluid" src="{{ $photo['url_large'] }}"
                                        alt="{{ $propertyTitle . '-' . ($index + 1) }}" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="sync2" class="owl-carousel">
                    @foreach ($propertyData->photos as $index => $photo)
                        <div class="item">
                            <img class="img-fluid" src="{{ $photo['url_large'] }}"
                                alt="{{ $propertyTitle . '-' . ($index + 1) }}" />
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- end main slider -->

    <!-- guldenland section  -->
    <section class="guldenland_section property-detail mt-4">
        <div class="container">
            @if ($propertyDetail->api_type_name === 'baseEntegralApi')
                <div class="guldenland_products">
                    <div class="guldenland_products_listing border-0">
                        <div class="property_first_section">
                            <div class="property_first_section_price_search">
                                <div class="property_first_section_price">
                                    <h2
                                        title="R {{ isset($propertyData->listing_price) ? number_format($propertyData->listing_price) : '' }}">
                                        R {{ isset($propertyDetail->price) ? number_format($propertyDetail->price) : '' }}
                                        <!--<sub>{{ isset($propertyData->mandate_saletypeunit) ? $propertyData->mandate_saletypeunit : '' }}</sub>-->
                                    </h2>



                                    <p title="{{ $propertyTitle }}">
                                        @if ($propertyDetail->bedrooms != 0)
                                            {{ $propertyDetail->bedrooms . ' Bedroom' }}
                                        @elseif($isApartmentBachelor)
                                            Bachelor
                                        @endif
                                        {{ ucwords($propertyDetail->property_type . ' ' . $propertyDetail->mandate_saletype . ' in ' . $propertyDetail->suburb) }}
                                    </p>





                                </div>

                                @if ($propertyDetail->complex_name != '' && $propertyDetail->unit_number != '')
                                    @php $propertyCustomTitle = ucwords($propertyDetail->complex_name) @endphp
                                    <!--." ".$propertyDetail->unit_number-->
                                @else
                                    @php $propertyCustomTitle = ucwords($propertyDetail->street_name) @endphp
                                    <!--." ".$propertyDetail->street_number-->
                                @endif


                                <div class="property_first_section_search">
                                    <a href="{{ route('/') }}" data-toggle="tooltip" title="Search"><img
                                            class="img-fluid" src="{{ asset('front/images/search.svg') }}"
                                            alt="search" /></a>
                                    <a href="javascript:void(0)" onclick="window.print()" data-toggle="tooltip"
                                        title="Print"><img class="img-fluid" src="{{ asset('front/images/print2.svg') }}"
                                            alt="print2" /></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Apply for property"><img
                                            class="img-fluid" src="{{ asset('front/images/apply.svg') }}"
                                            data-toggle="modal" data-target="#applyform" alt="apply" /></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Share"
                                        id="shareOnSocialModel"><img class="img-fluid"
                                            src="{{ asset('front/images/share.svg') }}" alt="share" /></a>
                                    @if ($propertyDetail->mandate_saletype == 'for rent' && $propertyDetail->property_classification == 'commercial')
                                        <a download
                                            href="{{ asset('storage/property_application/Application _To_Lease_Commercial_Premises.pdf') }}"
                                            data-toggle="tooltip" title="Download Application"><img class="img-fluid"
                                                src="{{ asset('front/images/download.svg') }}" alt="download" /></a>
                                    @endif

                                    @if ($propertyDetail->mandate_saletype == 'for rent' && $propertyDetail->property_classification == 'residential')
                                        <a download
                                            href="{{ asset('storage/property_application/Application_To_Let.pdf') }}"
                                            data-toggle="tooltip" title="Download Application"><img class="img-fluid"
                                                src="{{ asset('front/images/download.svg') }}" alt="download" /></a>
                                    @endif


                                    @if ($propertyDetail->mandate_saletype == 'for sale')
                                        <a download
                                            href="{{ asset('storage/property_application/Offer-to-Purchase-PDF.zip') }}"
                                            data-toggle="tooltip" title="Download Application"><img class="img-fluid"
                                                src="{{ asset('front/images/download.svg') }}" alt="download" /></a>
                                    @endif

                                    @if (Auth::check())
                                        @php
                                            $checkFavouritePropertyExist = App\Models\FavouriteProperty::where(
                                                'api_property_id',
                                                $propertyDetail->property_id,
                                            )
                                                ->where('user_id', Auth::user()->id)
                                                ->exists();
                                        @endphp

                                        @if ($checkFavouritePropertyExist)
                                            <a href="{{ route('removeFavourite', ['id' => $propertyDetail->property_id]) }}"
                                                data-toggle="tooltip" title="Remove from Favorite"><img class="img-fluid"
                                                    src="{{ asset('front/images/heart.svg') }}" alt="heart" /></a>
                                        @else
                                            <a href="{{ route('addfavourite', ['id' => $propertyDetail->property_id]) }}"
                                                data-toggle="tooltip" title="Mark as Favorite"><img class="img-fluid"
                                                    src="{{ asset('front/images/fav.svg') }}" alt="fav" /></a>
                                        @endif
                                    @else
                                        <a href="{{ route('addfavourite', ['id' => $propertyDetail->property_id]) }}"
                                            data-toggle="tooltip" title="Mark as Favorite"><img class="img-fluid"
                                                src="{{ asset('front/images/fav.svg') }}" alt="fav" /></a>
                                    @endif

                                </div>
                            </div>
                            <h1 title="{{ ucwords(strtolower($propertyCustomTitle)) }}">
                                {{ ucwords(strtolower($propertyCustomTitle)) }}

                            </h1>

                            <p
                                title="{{ isset($propertyData->location_streetNumber) ? $propertyData->location_streetNumber . ' , ' . $propertyData->location_streetName : '' }}">
                                {{ isset($propertyData->location_streetNumber) ? ucwords(strtolower($propertyData->location_streetNumber . ' ' . $propertyData->location_streetName . ' , ' . $propertyData->location_suburb)) : '' }}
                            </p>
                            <p>{{ isset($propertyDetail->description) ? $propertyDetail->description : '' }}</p>
                            <p
                                title="{{ isset($propertyDetail->property_id) ? 'WEB REF : ' . $propertyDetail->property_id : '' }}">
                                {{ isset($propertyDetail->property_id) ? 'WEB REF : ' . $propertyDetail->property_id : '' }}
                            </p>

                        </div>

                        <div class="property_first_section property_second_section">
                            <h4>Property Detail</h4>
                            <h6><span>Date of Availability:</span>
    {{ !empty($propertyData?->mandate_startdate) ? \Carbon\Carbon::parse($propertyData->mandate_startdate)->format('d-m-Y') : 'Not available' }}
</h6>

                            <table class="table table-striped table-borderless">
                                <tbody>
                                    <tr>

                                        <td><b>Bathrooms:</b></td>
                                        <td>{{ isset($propertyDetail->bathrooms) && $propertyDetail->bathrooms != '' ? $propertyDetail->bathrooms : '0' }}
                                        </td>
                                        <td><b>Bedrooms:</b></td>
                                        <td>{{ isset($propertyDetail->bedrooms) && $propertyDetail->bedrooms != '' ? $propertyDetail->bedrooms : '0' }}
                                        </td>


                                    </tr>
                                    <tr>
                                        <td><b>Garages:</b></td>
                                        <td>{{ isset($propertyDetail->garages) && $propertyDetail->garages != '' ? $propertyDetail->garages : '0' }}
                                        </td>
                                        <td><b>Floor size:</b></td>
                                        <td>{{ isset($propertyDetail->floor_size) && $propertyDetail->floor_size != '' ? $propertyDetail->floor_size . ' ' . $propertyDetail->floor_size_unit : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Pool:</b></td>
                                        <td>{{ isset($propertyDetail->pool) && $propertyDetail->pool != '' ? $propertyDetail->bedrooms : 'No' }}
                                        </td>
                                        <td><b>Covered parking:</b></td>
                                        <td>{{ isset($propertyDetail->covered_parking) && $propertyDetail->covered_parking != '' ? $propertyDetail->covered_parking : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Open parking:</b></td>
                                        <td>{{ isset($propertyDetail->open_parking) && $propertyDetail->open_parking != '' ? $propertyDetail->open_parking : 'No' }}
                                        </td>
                                        <td><b>Furnished:</b></td>
                                        <td>{{ isset($propertyDetail->furnished) && $propertyDetail->furnished != '' ? $propertyDetail->furnished : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Living areas:</b></td>
                                        <td>{{ isset($propertyDetail->living_areas) && $propertyDetail->living_areas != '' ? $propertyDetail->living_areas : 'No' }}
                                        </td>
                                        <td><b>Pets allowed:</b></td>
                                        <td>{{ isset($propertyDetail->no_pets_allowed) && $propertyDetail->no_pets_allowed != '' ? $propertyDetail->no_pets_allowed : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Rates taxes:</b></td>
                                        <td>{{ isset($propertyDetail->rates_taxes) && $propertyDetail->rates_taxes != '' ? $propertyDetail->rates_taxes . ' ' . $propertyDetail->rates_taxes_unit : 'No' }}
                                        </td>
                                        <td><b>Property Type:</b></td>
                                        <td>{{ isset($propertyDetail->mandate_saletype) && $propertyDetail->mandate_saletype != '' ? $propertyDetail->mandate_saletype : 'No' }}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><b>Land size:</b></td>
                                        <td>{{ isset($propertyData->land_size) && $propertyData->land_size != '' ? $propertyData->land_size . ' ' . $propertyData->land_size_unit : 'No' }}
                                        </td>
                                        <td><b>Levy:</b></td>
                                        <td>{{ isset($propertyData->levy) && $propertyData->levy != '' ? $propertyData->levy_unit : 'No' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="property_first_section property_second_section">
                            <h4>Map Location</h4>
                            <div id="map_tuts" style="width:100%; height:500px; "></div>
                        </div>
                        @if (isset($propertyDetail->facing) && $propertyDetail->facing != '')
                            <div class="property_first_section property_direction_section">
                                <h4>Directions</h4>
                                <p>{{ $propertyDetail->facing }}</p>
                            </div>
                        @endif

                    </div>

                    <div class="guldenland_sidebar">
                        <div class="agent_view">
                            <div class="agent_img_name">
                                <img class="img-fluid"
                                    src="{{ isset($agentDetail->photo_url) && $agentDetail->photo_url != '' ? $agentDetail->photo_url : asset('front/images/agent-img.png') }}"
                                    alt="{{ isset($agentDetail->photo_url) && $agentDetail->photo_url != '' ? $agentDetail->photo_url : asset('front/images/agent-img.png') }}" />
                                <div class="agentnamenumber">
                                    <a
                                        href="{{ route('agent', ['agentid' => isset($agentDetail->agent_name_slug) ? $agentDetail->agent_name_slug : '']) }}">
                                        <h4
                                            title="{{ isset($agentDetail->first_name) ? ucfirst($agentDetail->first_name) : '' }}">
                                            {{ isset($agentDetail->first_name) ? ucfirst($agentDetail->first_name) : '' }}
                                        </h4>
                                    </a>
                                    <p class="mobileshow1" style="cursor:pointer;"><span class="icon-phone"></span>Show
                                        Contact Number</p>
                                    <p class="mobileshow2"
                                        title="{{ isset($agentDetail->mobile_number) ? $agentDetail->mobile_number : '' }}"
                                        style="display:none;"><span class="icon-phone"></span><a
                                            href="tel:{{ isset($agentDetail->mobile_number) ? $agentDetail->mobile_number : 'Not avaliable' }}">{{ isset($agentDetail->mobile_number) ? $agentDetail->mobile_number : 'Not avaliable' }}</a>
                                    </p>
                                    <p title="{{ isset($agentDetail->email) ? $agentDetail->email : '' }}"><span
                                            class="icon-envelope"></span><a style="text-decoration: none; color:black;"
                                            href="mailto:{{ isset($agentDetail->email) ? $agentDetail->email : 'Not avaliable' }}">{{ isset($agentDetail->email) ? $agentDetail->email : 'Not avaliable' }}</a>
                                    </p>
                                </div>
                            </div>
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone={{ isset($agentDetail->mobile_number) ? '+27' . $agentDetail->mobile_number : '' }}&text=hi {{ isset($agentDetail->first_name) ? $agentDetail->first_name : '' }}">
                                <button title="Whatsapp Agent" type="button" class="form-control mt-3 whatsapp"><img
                                        class="img-fluid" src="{{ asset('front/images/whatsapp.svg') }}"
                                        alt="whatsapp" /> Whatsapp Agent</button></a>
                        </div>
                        <div class="contact_sidelist">
                            <h4>Contact {{ isset($agentDetail->first_name) ? ucfirst($agentDetail->first_name) : '' }}</h4>
                            <form action="{{ route('agent-contact-mail') }}" method="post"
                                id="agent_individual_property_contact_form">
                                <input type="hidden" required name="pageurl" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                                <input type="hidden" required name="propertyHeading"
                                    value="{{ ucwords(strtolower($propertyCustomTitle)) }}">
                                <input type="hidden" required name="propertyaddress"
                                    value="{{ ucwords(strtolower($propertyDetail->suburb)) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="username">Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter name" required
                                                id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="col-6 pr-2">
                                        <div class="form-group ">
                                            <label for="email">Email<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Enter email" required
                                                id="email" name="email">
                                        </div>
                                    </div>

                                    <input type="hidden" name="pageName" value="propertydetail">
                                    <input type="hidden" name="getAgentEmail"
                                        value="{{ isset($agentDetail->email) ? $agentDetail->email : '' }}">
                                    <input type="hidden" name="getId"
                                        value="{{ isset($propertyDetail->agent_id) ? $propertyDetail->agent_id : 0 }}">
                                    <input type="hidden" name="property_id"
                                        value="{{ isset($propertyDetail->property_id) ? $propertyDetail->property_id : 0 }}">

                                    <div class="col-6 pl-2">
                                        <div class="form-group">
                                            <label for="phone">Phone<span>*</span></label>
                                            <input type="text" required class="form-control" placeholder="Enter phone"
                                                id="phone" name="phone">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group ">
                                            <label class="w-100" for="email">Arrange viewing?<span></span></label>
                                            <span class="mr-3">
                                                <input type="radio" class="form-control" id="arrangeViewingYes" checked
                                                    value="yes" name="arrange_viewing">
                                                <label for="arrangeViewingYes">Yes</label>
                                            </span>
                                            <span>
                                                <input type="radio" class="form-control" id="arrangeViewingNo"
                                                    value="no" name="arrange_viewing">
                                                <label for="arrangeViewingNo">No</label>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 pr-2">
                                        <div class="form-group ">
                                            <label for="date">Date<span></span></label>
                                            <input type="date" class="form-control" placeholder="Enter Date"
                                                id="date" name="contact_date">
                                        </div>
                                    </div>
                                    <div class="col-6 pr-2">
                                        <div class="form-group ">
                                            <label for="time">Time<span></span></label>
                                            <input type="time" class="form-control" placeholder="Enter Time"
                                                id="time" name="contact_time">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Message<span>*</span></label>

                                            <textarea id="message" required class="form-control" name="message" placeholder="Enter message" rows="4"
                                                style="width:100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="form-control">Send message</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="term-policy">
                                            By continuing I understand and agree with Trafalgar <a
                                                href="{{ route('terms-conditions') }}">Terms & Conditions</a> and <a
                                                href="{{ url('/front/pdf/Supplier-Privacy-Policy.pdf') }}">Privacy
                                                Policy</a>.
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="property_alert">
                            <div class="e-magazine-right-content">
                                <div class="each-magazine">
                                    <div class="icon-div">
                                        <img class="img-fluid" src="{{ asset('front/images/alert.png') }}"
                                            alt="alert" />
                                    </div>
                                    <div class="magazine-content">
                                        <h4>Property Alerts</h4>
                                        <p><a href="{{ route('email-property-alert') }}">Sign up</a> for your customised
                                            property alerts delivered
                                            directly to your inbox.</p>
                                    </div>
                                </div>
                                <div class="each-magazine">
                                    <div class="icon-div">
                                        <img class="img-fluid" src="{{ asset('front/images/property.png') }}"
                                            alt="property" />
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
            @endif


            @if ($propertyDetail->api_type_name === 'syncApi')


                <div class="guldenland_products">
                    <div class="guldenland_products_listing border-0">
                        <div class="property_first_section">
                            <div class="property_first_section_price_search">
                                <div class="property_first_section_price">
                                    <h2
                                        title="R {{ isset($propertyData->listing_price) ? number_format($propertyData->listing_price) : '' }}">
                                        R {{ isset($propertyDetail->price) ? number_format($propertyDetail->price) : '' }}
                                        <!--<sub>{{ isset($propertyData->priceUnit) ? $propertyData->priceUnit : '' }}</sub>-->
                                    </h2>


                                    <p
                                        title=' @if ($propertyDetail->bedrooms != 0) {{ $propertyDetail->bedrooms . ' Bedroom' }}
                                  @elseif(strtolower($propertyDetail->property_type) == 'apartment')
                                  Bachelor @endif {{ ucwords($propertyDetail->property_type . ' ' . $propertyDetail->mandate_saletype . ' ' . 'in' . ' ' . $propertyDetail->suburb) }}'>
                                        @if ($propertyDetail->bedrooms != 0)
                                            {{ $propertyDetail->bedrooms . ' Bedroom' }}
                                        @elseif(strtolower($propertyDetail->property_type) == 'apartment')
                                            Bachelor
                                        @endif
                                        {{ ucwords($propertyDetail->property_type . ' ' . $propertyDetail->mandate_saletype . ' ' . 'in' . ' ' . $propertyDetail->suburb) }}
                                    </p>
                                </div>

                                @if ($propertyDetail->complex_name != '' && $propertyDetail->unit_number != '')
                                    @php $propertyCustomTitle = $propertyDetail->unit_number." ".$propertyDetail->complex_name @endphp
                                @else
                                    @php $propertyCustomTitle = $propertyDetail->street_number." ".$propertyDetail->street_name @endphp
                                @endif


                                <div class="property_first_section_search">
                                    <a href="{{ route('/') }}" data-toggle="tooltip" title="Search"><img
                                            class="img-fluid" src="{{ asset('front/images/search.svg') }}"
                                            alt="search" /></a>
                                    <a href="javascript:void(0)" onclick="window.print()" data-toggle="tooltip"
                                        title="Print"><img class="img-fluid"
                                            src="{{ asset('front/images/print2.svg') }}" alt="print2" /></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Apply for property"><img
                                            class="img-fluid" src="{{ asset('front/images/apply.svg') }}"
                                            data-toggle="modal" data-target="#applyform" alt="apply" /></a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Share"
                                        id="shareOnSocialModel"><img class="img-fluid"
                                            src="{{ asset('front/images/share.svg') }}" alt="share" /></a>
                                    @if ($propertyDetail->mandate_saletype == 'for rent')
                                        <a href="{{ asset('storage/property_application/Application.zip') }}"
                                            data-toggle="tooltip" title="Download Application"><img class="img-fluid"
                                                src="{{ asset('front/images/download.svg') }}" alt="download" /></a>
                                    @endif

                                    @if ($propertyDetail->mandate_saletype == 'for sale')
                                        <a download
                                            href="{{ asset('storage/property_application/Offer-to-Purchase-PDF.zip') }}"
                                            data-toggle="tooltip" title="Download Application"><img class="img-fluid"
                                                src="{{ asset('front/images/download.svg') }}" alt="download" /></a>
                                    @endif

                                    @if (Auth::check())
                                        @php
                                            $checkFavouritePropertyExist = App\Models\FavouriteProperty::where(
                                                'api_property_id',
                                                $propertyDetail->property_id,
                                            )
                                                ->where('user_id', Auth::user()->id)
                                                ->exists();
                                        @endphp

                                        @if ($checkFavouritePropertyExist)
                                            <a href="{{ route('removeFavourite', ['id' => $propertyDetail->property_id]) }}"
                                                data-toggle="tooltip" title="Remove from Favorite"><img class="img-fluid"
                                                    src="{{ asset('front/images/heart.svg') }}" alt="heart" /></a>
                                        @else
                                            <a href="{{ route('addfavourite', ['id' => $propertyDetail->property_id]) }}"
                                                data-toggle="tooltip" title="Mark as Favorite"><img class="img-fluid"
                                                    src="{{ asset('front/images/fav.svg') }}" alt="fav" /></a>
                                        @endif
                                    @else
                                        <a href="{{ route('addfavourite', ['id' => $propertyDetail->property_id]) }}"
                                            data-toggle="tooltip" title="Mark as Favorite"><img class="img-fluid"
                                                src="{{ asset('front/images/fav.svg') }}" alt="fav" /></a>
                                    @endif

                                </div>
                            </div>
                            <h1 title=" {{ ucwords(strtolower($propertyCustomTitle)) }}">
                                {{ ucwords(strtolower($propertyCustomTitle)) }}

                            </h1>

                            <p
                                title='{{ isset($propertyData->streetNumber) ? ucwords(strtolower($propertyData->streetNumber . ' ' . $propertyData->streetName . ' ,' . $propertyData->suburb)) : '' }}'>
                                {{ isset($propertyData->streetNumber) ? ucwords(strtolower($propertyData->streetNumber . ' ' . $propertyData->streetName . ' , ' . $propertyData->suburb)) : '' }}
                            </p>
                            <p>{{ isset($propertyDetail->description) ? $propertyDetail->description : '' }}</p>
                            <p
                                title='{{ isset($propertyDetail->property_id) ? 'WEB REF : ' . $propertyDetail->property_id : '' }}'>
                                {{ isset($propertyDetail->property_id) ? 'WEB REF : ' . $propertyDetail->property_id : '' }}
                            </p>

                        </div>

                        <div class="property_first_section property_second_section">
                            <h4>Property Detail</h4>
                            <h6><span>Date of Availability:</span>
                                <?php
                         if($townName->api_type_name == "baseEntegralApi"){     ?>
                                {{ isset($propertyDetail->listDate) && $propertyDetail->occupation_date != '' ? str_replace('/', '-', $propertyDetail->listDate) : 'Not avaliable' }}
                                <?php }else{ ?>
                                {{ isset($propertyDetail->onshow->dateStart) && $propertyDetail->onshow->dateStart != '' ? str_replace('/', '-', $propertyDetail->onshow->dateStart) : 'Not avaliable' }}
                                <?php     }  ?>




                            </h6>
                            <table class="table table-striped table-borderless">
                                <tbody>
                                    <tr>

                                        <td><b>Bathrooms:</b></td>
                                        <td>{{ isset($propertyDetail->bathrooms) && $propertyDetail->bathrooms != '' ? $propertyDetail->bathrooms : '0' }}
                                        </td>
                                        <td><b>Bedrooms:</b></td>
                                        <td>{{ isset($propertyDetail->bedrooms) && $propertyDetail->bedrooms != '' ? $propertyDetail->bedrooms : '0' }}
                                        </td>


                                    </tr>
                                    <tr>
                                        <td><b>Garages:</b></td>
                                        <td>{{ isset($propertyDetail->garages) && $propertyDetail->garages != '' ? $propertyDetail->garages : '0' }}
                                        </td>
                                        <td><b>Floor size:</b></td>
                                        <td>{{ isset($propertyDetail->floor_size) && $propertyDetail->floor_size != '' ? $propertyDetail->floor_size . ' ' . $propertyDetail->floor_size_unit : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Pool:</b></td>
                                        <td>{{ isset($propertyDetail->pool) && $propertyDetail->pool != '' ? $propertyDetail->pool : 'No' }}
                                        </td>

                                        <td><b>Covered parking:</b></td>
                                        <td>{{ isset($propertyDetail->covered_parking) && $propertyDetail->covered_parking != '' ? $propertyDetail->covered_parking : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Open parking:</b></td>
                                        <td>{{ isset($propertyDetail->open_parking) && $propertyDetail->open_parking != '' ? $propertyDetail->open_parking : 'No' }}
                                        </td>
                                        <td><b>Furnished:</b></td>
                                        <td>{{ isset($propertyDetail->furnished) && $propertyDetail->furnished != '' ? $propertyDetail->furnished : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Living areas:</b></td>
                                        <td>{{ isset($propertyDetail->living_areas) && $propertyDetail->living_areas != '' ? $propertyDetail->living_areas : 'No' }}
                                        </td>
                                        <td><b>Pets allowed:</b></td>
                                        <td>{{ isset($propertyDetail->no_pets_allowed) && $propertyDetail->no_pets_allowed != '' ? $propertyDetail->no_pets_allowed : 'No' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Rates taxes:</b></td>
                                        <td>{{ isset($propertyDetail->rates_taxes) && $propertyDetail->rates_taxes != '' ? $propertyDetail->rates_taxes . ' ' . $propertyDetail->rates_taxes_unit : 'No' }}
                                        </td>
                                        <td><b>Property Type:</b></td>
                                        <td>{{ isset($propertyDetail->mandate_saletype) && $propertyDetail->mandate_saletype != '' ? $propertyDetail->mandate_saletype : 'No' }}
                                        </td>
                                    </tr>



                                    <tr>
                                        <td><b>Land size:</b></td>
                                        <td>{{ isset($propertyData->landSize) && $propertyData->landSize != '' ? $propertyData->landSize . ' ' . ($propertyData->landsizeType ?? '') : 'No' }}
                                        </td>
                                        <td><b>Levy:</b></td>
                                        <td>{{ isset($propertyData->levy) && $propertyData->levy != '' ? $propertyData->levy : '' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="property_first_section property_second_section">
                            <h4>Map Location</h4>

                            <div id="map_tuts" style="width:100%; height:500px; "></div>


                        </div>
                        @if (isset($propertyDetail->facing) && $propertyDetail->facing != '')
                            <div class="property_first_section property_direction_section">
                                <h4>Directions</h4>
                                <p>{{ $propertyDetail->facing }}</p>
                            </div>
                        @endif

                    </div>

                    <div class="guldenland_sidebar">
                        <div class="agent_view">
                            <div class="agent_img_name">
                                <img class="img-fluid"
                                    src="{{ isset($agentDetail->photo_url) && $agentDetail->photo_url != '' ? $agentDetail->photo_url : asset('front/images/agent-img.png') }}"
                                    alt="{{ isset($agentDetail->photo_url) && $agentDetail->photo_url != '' ? $agentDetail->photo_url : asset('front/images/agent-img.png') }}" />
                                <div class="agentnamenumber">
                                    <a
                                        href="{{ route('agent', ['agentid' => isset($agentDetail->agent_name_slug) ? $agentDetail->agent_name_slug : '']) }}">
                                        <h4
                                            title="{{ isset($agentDetail->first_name) ? ucfirst($agentDetail->first_name) : '' }}">
                                            {{ isset($agentDetail->first_name) ? ucfirst($agentDetail->first_name) : '' }}
                                        </h4>
                                    </a>
                                    <p class="mobileshow1" style="cursor:pointer;"><span class="icon-phone"></span>Show
                                        Contact Number</p>
                                    <p class="mobileshow2"
                                        title="{{ isset($agentDetail->mobile_number) ? $agentDetail->mobile_number : 'Not avaliable' }}"
                                        style="display:none;"><span class="icon-phone"></span><a
                                            href="tel:{{ isset($agentDetail->mobile_number) ? $agentDetail->mobile_number : 'Not avaliable' }}">{{ isset($agentDetail->mobile_number) ? $agentDetail->mobile_number : 'Not avaliable' }}</a>
                                    </p>
                                    <p title="{{ isset($agentDetail->email) ? $agentDetail->email : '' }}"><span
                                            class="icon-envelope"></span><a style="text-decoration: none; color:black;"
                                            href="mailto:{{ isset($agentDetail->email) ? $agentDetail->email : 'Not avaliable' }}">{{ isset($agentDetail->email) ? $agentDetail->email : 'Not avaliable' }}</a>
                                    </p>
                                </div>
                            </div>
                            <a target="_blank"
                                href="https://api.whatsapp.com/send?phone={{ isset($agentDetail->mobile_number) ? '+27' . $agentDetail->mobile_number : '' }}&text=hi {{ isset($agentDetail->first_name) ? $agentDetail->first_name : '' }}">
                                <button title="Whatsapp Agent" type="button" class="form-control mt-3 whatsapp"><img
                                        class="img-fluid" src="{{ asset('front/images/whatsapp.svg') }}"
                                        alt="whatsapp" /> Whatsapp Agent</button></a>
                        </div>
                        <div class="contact_sidelist">
                            <h4>Contact {{ isset($agentDetail->first_name) ? ucfirst($agentDetail->first_name) : '' }}
                            </h4>
                            <form action="{{ route('agent-contact-mail') }}" method="post"
                                id="agent_individual_property_contact_form">
                                @csrf
                                <input type="hidden" required name="pageurl" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                                <input type="hidden" required name="propertyHeading"
                                    value="{{ ucwords(strtolower($propertyCustomTitle)) }}">
                                <input type="hidden" required name="propertyaddress"
                                    value="{{ ucwords(strtolower($propertyDetail->suburb)) }}">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="username">Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter name" required
                                                id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="col-6 pr-2">
                                        <div class="form-group ">
                                            <label for="email">Email<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Enter email" required
                                                id="email" name="email">
                                        </div>
                                    </div>

                                    <input type="hidden" name="pageName" value="propertydetail">
                                    <input type="hidden" name="getAgentEmail"
                                        value="{{ isset($agentDetail->email) ? $agentDetail->email : '' }}">
                                    <input type="hidden" name="getId"
                                        value="{{ isset($propertyDetail->property_id) ? $propertyDetail->property_id : 0 }}">
                                    <input type="hidden" name="property_id"
                                        value="{{ isset($propertyDetail->property_id) ? $propertyDetail->property_id : 0 }}">

                                    <div class="col-6 pl-2">
                                        <div class="form-group">
                                            <label for="phone">Phone<span>*</span></label>
                                            <input type="text" required class="form-control" placeholder="Enter phone"
                                                id="phone" name="phone">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group ">
                                            <label class="w-100" for="email">Arrange viewing?<span></span></label>
                                            <span class="mr-3">
                                                <input type="radio" class="form-control" id="arrangeViewingYes" checked
                                                    value="yes" name="arrange_viewing">
                                                <label for="arrangeViewingYes">Yes</label>
                                            </span>
                                            <span>
                                                <input type="radio" class="form-control" id="arrangeViewingNo"
                                                    value="no" name="arrange_viewing">
                                                <label for="arrangeViewingNo">No</label>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 pr-2">
                                        <div class="form-group ">
                                            <label for="date">Date<span></span></label>
                                            <input type="date" class="form-control" placeholder="Enter Date"
                                                id="date" name="contact_date">
                                        </div>
                                    </div>
                                    <div class="col-6 pr-2">
                                        <div class="form-group ">
                                            <label for="time">Time<span></span></label>
                                            <input type="time" class="form-control" placeholder="Enter Time"
                                                id="time" name="contact_time">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Message<span>*</span></label>

                                            <textarea id="message" required class="form-control" name="message" placeholder="Enter message" rows="4"
                                                style="width:100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="form-control">Send message</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="term-policy">
                                            By continuing I understand and agree with Trafalgar <a
                                                href="{{ route('terms-conditions') }}">Terms & Conditions</a> and <a
                                                href="{{ url('/front/pdf/Supplier-Privacy-Policy.pdf') }}">Privacy
                                                Policy</a>.
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="property_alert">
                            <div class="e-magazine-right-content">
                                <div class="each-magazine">
                                    <div class="icon-div">
                                        <img class="img-fluid" src="{{ asset('front/images/alert.png') }}"
                                            alt="alert" />
                                    </div>
                                    <div class="magazine-content">
                                        <h4>Property Alerts</h4>
                                        <p><a href="{{ route('email-property-alert') }}">Sign up</a> for your customised
                                            property alerts delivered
                                            directly to your inbox.</p>
                                    </div>
                                </div>
                                <div class="each-magazine">
                                    <div class="icon-div">
                                        <img class="img-fluid" src="{{ asset('front/images/property.png') }}"
                                            alt="property" />
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
            @endif


        </div>
    </section>

    <!-- end guldenland section  -->

    <!-- footer top section  -->
    @php
        if (isset($propertyDetail->mandate_saletype) && $propertyDetail->mandate_saletype == 'for rent') {
            $type = 'to rent';
        } elseif (isset($propertyDetail->mandate_saletype) && $propertyDetail->mandate_saletype == 'for sale') {
            $type = 'for sale';
        } elseif (
            isset($propertyDetail->property_classification) &&
            $propertyDetail->property_classification == 'commercial'
        ) {
            $type = 'commercial';
        } else {
            $type = '';
        }
    @endphp
    <section class="footer_top_section footer_top_section_bgwhite">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_top_content">
                            <h5>Property
                                {{ ucfirst($propertyDetail->mandate_saletype) }}</h5>
                            <div class="content_list">
                                <ul>
                                    @if (!empty($getDistinctSuburb))
                                        @foreach ($getDistinctSuburb as $getDistinctSuburbs)
                                            @if ($propertyDetail->property_classification == 'commercial')
                                                @if ($propertyDetail->mandate_saletype == 'for rent')
                                                    @php  $customRouteName = 'commercial-property-for-rent'; @endphp
                                                @endif
                                                @if ($propertyDetail->mandate_saletype == 'for sale')
                                                    @php  $customRouteName = 'commercial-property-for-sale'; @endphp
                                                @endif
                                            @endif



                                            @if ($propertyDetail->property_classification == 'residential')
                                                @if ($propertyDetail->mandate_saletype == 'for rent')
                                                    @php  $customRouteName = 'to-rent'; @endphp
                                                @endif
                                                @if ($propertyDetail->mandate_saletype == 'for sale')
                                                    @php  $customRouteName = 'for-sale'; @endphp
                                                @endif
                                            @endif
                                            @php
                                                if (isset($customRouteName)) {
                                                    $customRouteName = $customRouteName;
                                                } else {
                                                    $customRouteName = 'to-rent';
                                                }
                                                $suburb_distinct = str_replace(' ', '-', $getDistinctSuburbs->suburb);
                                                $town_distinct = str_replace(' ', '-', $getDistinctSuburbs->town);
                                                $province_distinct = str_replace(
                                                    ' ',
                                                    '-',
                                                    $getDistinctSuburbs->province,
                                                );
                                                //create  url for single city
                                                $customUrl_distinct = route($customRouteName, [
                                                    'url_city' => $suburb_distinct,
                                                    'url_town' => $town_distinct,
                                                    'url_province' => $province_distinct,
                                                    'city' => $getDistinctSuburbs->suburb,
                                                ]);

                                            @endphp
                                            <li><a
                                                    href="{{ $customUrl_distinct }}">{{ $getDistinctSuburbs->suburb }}</a>
                                            </li>
                                        @endforeach
                                    @endif <!--<li><a href="#">Benoni</a></li>-->
                                    <!--<li><a href="#">Boksburg</a></li>-->
                                    <!--<li><a href="#">Centurion</a></li>-->
                                    <!--<li><a href="#">Edenvale</a></li>-->
                                    <!--<li><a href="#">Johannesburg</a></li>-->
                                    <!--<li><a href="#">Kempton Park</a></li>-->
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
    <!-- Modal -->
    <div class="modal fade" id="applyform" tabindex="-1" role="dialog" aria-labelledby="applyformLabel"
        aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h5 class="modal-title" id="applyformLabel">Apply Property</h5>
                    <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                        <span class="icon-close2" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body p-1">
                    <div class="applyproperty_form">
                        <form action="{{ route('apply-property') }}" method="POST" enctype="multipart/form-data"
                            id="apply-individual-property">
                            @csrf
                            <input name="hidden_property_id" type="hidden" value="{{ $propertyDetail->property_id }}"
                                id="hidden_property_id">
                            <div class="maintenance_form_inner">
                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="property_id">Property ID:<span>*</span></label>
                                        <input type="text" class="form-control"
                                            value="{{ $propertyDetail->property_id }}" name="property_id"
                                            id="property_id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_name">Property Name:<span>*</span></label>
                                        <input name="property_name" value="{{ $propertyDetail->headline }}"
                                            type="text" class="form-control" id="property_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_city">Property City:<span>*</span></label>
                                        <input type="text" name="property_city" value="{{ $propertyDetail->town }}"
                                            class="form-control" id="property_city" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_suburb">Property Suburb:<span>*</span></label>
                                        <input type="text" value="{{ $propertyDetail->suburb }}"
                                            name="property_suburb" class="form-control" id="property_suburb" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_garage">Garage / Under Cover Bay:<span>*</span></label>
                                        <div class="icon_select">
                                            <select id="property_garage" name="property_garage" class="form-control">
                                                <option value="yes"> yes </option>
                                                <option value="no">no</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_open_bay">Open Bay:<span>*</span></label>
                                        <div class="icon_select">
                                            <select id="property_open_bay" name="property_open_bay" class="form-control">
                                                <option value="yes">yes</option>
                                                <option value="no">no</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_occupation_date">Occupation Date:<span>*</span></label>
                                        <input type="text" class="form-control" id="property_occupation_date"
                                            name="property_occupation_date" required
                                            value="{{ isset($propertyData->occupation_date) && $propertyData->occupation_date != '' ? str_replace('/', '-', $propertyData->occupation_date) : 'Not avaliable' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="property_lease_term">Lease term:<span>*</span></label>
                                        <div class="icon_select">
                                            <select id="property_lease_term" name="property_lease_term"
                                                class="form-control">
                                                <option value="monthly"> monthly</option>
                                                <option value="6 months"> 6 months</option>
                                                <option value="12 months"> 12 months</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_rental">Rental:<span>*</span></label>
                                        <input type="text" class="form-control" id="property_rental"
                                            name="property_rental" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="property_detail">Property Details:<span>*</span></label>
                                        <textarea class="form-control" name='property_detail' id="property_detail" required>{{ $propertyDetail->description }}</textarea>
                                    </div>
                                </div>

                                <h4>Personal Information</h4>

                                <div class="field_row">
                                    <div class="form-group">
                                        <b class="d-block">if S.A Citizen:</b>
                                        <label for="personal_id_number">ID Number:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_id_number"
                                            name="personal_id_number" required>
                                    </div>
                                    <div class="form-group">
                                        <b class="d-block">if not S.A Citizen:</b>
                                        <label for="personal_resident_permit_no">Resident Permit No.:<span>*</span></label>
                                        <input type="text" class="form-control" name="personal_resident_permit_no"
                                            id="personal_resident_permit_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_passport_number">Passport Number:<span>*</span></label>
                                        <input type="text" class="form-control" name="personal_passport_number"
                                            id="personal_passport_number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_nationality">Nationality:<span>*</span></label>
                                        <input type="text" name="personal_nationality" class="form-control"
                                            id="personal_nationality" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_visa_exp_date">Visa Expiry Date:<span>*</span></label>
                                        <input type="text" class="form-control" name="personal_visa_exp_date"
                                            id="personal_visa_exp_date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_title">Title:<span>*</span></label>
                                        <input type="text" class="form-control" name="personal_title"
                                            id="personal_title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_first_name">first Name:<span>*</span></label>
                                        <input type="text" class="form-control" name="personal_first_name"
                                            id="personal_first_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_surname">Surname:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_surname"
                                            name="personal_surname">
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_dob">Date of Birth:<span>*</span>(dd-mm-yyyy)</label>
                                        <input type="date" class="form-control" name="personal_dob" id="personal_dob"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_residential_address">Residential
                                            Address:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_residential_address"
                                            name="personal_residential_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_province">Province:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_province"
                                            name="personal_province" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_postal_address">Postal Address:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_postal_address"
                                            name="personal_postal_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_postal_code">Postal Code:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_postal_code"
                                            name="personal_postal_code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_email">Email:<span>*</span></label>
                                        <input type="email" class="form-control" id="personal_email"
                                            name="personal_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_cell_no">Cell No.:<span>*</span></label>
                                        <input type="number" class="form-control" id="personal_cell_no"
                                            name="personal_cell_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_tel_no">Tel No.:<span>*</span></label>
                                        <input type="number" name="personal_tel_no" class="form-control"
                                            id="personal_tel_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_next_of_kin">Next of Kin:<span>*</span></label>
                                        <input type="text" name="personal_next_of_kin" class="form-control"
                                            id="personal_next_of_kin" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_address">Address:<span>*</span></label>
                                        <input type="text" name="personal_address" class="form-control"
                                            id="personal_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_postal_code_2">Postal Code:<span>*</span></label>
                                        <input type="text" class="form-control" id="personal_postal_code_2"
                                            name="personal_postal_code_2" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ICP">Marital Status (Select a Box):</label>
                                        <div class="radio-group">
                                            <span>
                                                <input type="radio" id="ICP" name="personal_marital_status"
                                                    checked value="Married I.C.P">
                                                <label for="ICP">Married I.C.P</label>
                                            </span>
                                            <span>
                                                <input type="radio" id="ANC" name="personal_marital_status"
                                                    value="Married A.N.C">
                                                <label for="ANC">Married A.N.C</label>
                                            </span>
                                            <span>
                                                <input type="radio" id="single" name="personal_marital_status"
                                                    value="single" />
                                                <label for="single">Single</label>
                                            </span>
                                            <span>
                                                <input type="radio" value="other" id="other"
                                                    name="personal_marital_status" />
                                                <label for="other">Other</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_monthly_gross_salary">Monthly Salary
                                            (Gross):<span>*</span></label>
                                        <input type="text" name="personal_monthly_gross_salary" class="form-control"
                                            id="personal_monthly_gross_salary" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_monthly_net_salary">Monthly Salary
                                            (Nett):<span>*</span></label>
                                        <input type="text" name="personal_monthly_net_salary" class="form-control"
                                            id="personal_monthly_net_salary" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_monthly_instalment">Monthly instalment:<span>*</span></label>
                                        <input type="text" name="personal_monthly_instalment" class="form-control"
                                            id="personal_monthly_instalment" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personal_income_tax_reg_number">Income Tax Registration
                                            Number:<span>*</span></label>
                                        <input type="text" class="form-control" name="personal_income_tax_reg_number"
                                            id="personal_income_tax_reg_number" required>
                                    </div>
                                </div>

                                <h4>Previous Landlord Information:</h4>

                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="landlord_present_lessorr">Present Lessor / Agent:<span>*</span></label>
                                        <input type="text" class="form-control" name="landlord_present_lessor"
                                            id="landlord_present_lessorr" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord_tel_no">Tel No:<span>*</span></label>
                                        <input type="number" class="form-control" id="landlord_tel_no"
                                            name="landlord_tel_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord_cell_no">Cell No:<span>*</span></label>
                                        <input type="number" name="landlord_cell_no" class="form-control"
                                            id="landlord_cell_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord_rent_paid">Rent paid:<span>*</span></label>
                                        <input type="text" class="form-control" name="landlord_rent_paid"
                                            id="landlord_rent_paid" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord_year_in_occupation">Years in Occupation:<span>*</span></label>
                                        <input type="text" class="form-control" name="landlord_year_in_occupation"
                                            id="landlord_year_in_occupation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord_personal_reference">Personal Reference:<span>*</span></label>
                                        <input type="text" class="form-control" id="landlord_personal_reference"
                                            name="landlord_personal_reference" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord_relation">Relation:<span>*</span></label>
                                        <input type="text" class="form-control" id="landlord_relation"
                                            name="landlord_relation" required>
                                    </div>
                                </div>

                                <h4>Employment Information:</h4>

                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="emp_info_employer_name">Employer's Name:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_employer_name"
                                            name="emp_info_employer_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_employer_address">Employer's Address:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_employer_address"
                                            name="emp_info_employer_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_occupation">Occupation:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_occupation"
                                            name="emp_info_occupation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_paye_tax_no">Paye/Tax No:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_paye_tax_no"
                                            name="emp_info_paye_tax_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_period_employed">Period Employed:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_period_employed"
                                            name="emp_info_period_employed" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_tel_no">Tel No / Ext No:<span>*</span></label>
                                        <input type="number" class="form-control" id="emp_info_tel_no"
                                            name="emp_info_tel_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_fax_no">Fax No:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_fax_no"
                                            name="emp_info_fax_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emp_info_contact_name">Contact Name:<span>*</span></label>
                                        <input type="text" class="form-control" id="emp_info_contact_name"
                                            name="emp_info_contact_name" required>
                                    </div>
                                </div>

                                <h4>Occupants:</h4>
                                <div id="occupants_div">

                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="occupants_no_of_person_occupy_unit">No. of Persons to Occupy
                                                Unit:<span>*</span></label>
                                            <input type="text" class="form-control"
                                                name="occupants_no_of_person_occupy_unit[]"
                                                id="occupants_no_of_person_occupy_unit">
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_id_no">ID No:<span>*</span></label>
                                            <input type="text" class="form-control" name="occupants_id_no[]"
                                                id="occupants_id_no">
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_gender">Male / Female:<span>*</span></label>
                                            <div class="icon_select">
                                                <select id="occupants_gender" class="form-control"
                                                    name="occupants_gender[]">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_title">Title:<span>*</span></label>
                                            <div class="icon_select">
                                                <select id="occupants_title" class="form-control"
                                                    name="occupants_title[]">
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss.">Miss.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_name">Name:<span>*</span></label>
                                            <input type="text" class="form-control" id="occupants_name"
                                                name="occupants_name[]" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_surname">surname:<span>*</span></label>
                                            <input type="text" class="form-control" id="occupants_surname"
                                                name="occupants_surname[]">
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_cell_no">Cell No:<span>*</span></label>
                                            <input type="number" class="form-control" id="occupants_cell_no"
                                                name="occupants_cell_no[]" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_work_tel_no">Work Tel No:<span>*</span></label>
                                            <input type="number" class="form-control" name="occupants_work_tel_no[]"
                                                id="occupants_work_tel_no">
                                        </div>
                                        <div class="form-group">
                                            <label for="occupants_email">Email Address:<span>*</span></label>
                                            <input type="email" class="form-control" name="occupants_email[]"
                                                id="occupants_email" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="other_buttons mb-3 addOccupantsDiv">Add More
                                    Occupants</button>

                                <h4>Financial Status:</h4>

                                <div class="field_row d-flex flex-column">
                                    <div class="form-group">
                                        <label for="financial_you_have_judgements">Do you have any judgements?</label>
                                        <input type="text" class="form-control" id="financial_you_have_judgements"
                                            name="financial_you_have_judgements" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="financial_details">Details</label>
                                        <textarea class="form-control" id="financial_details" name="financial_details" rows="2" required></textarea>
                                    </div>
                                </div>

                                <h4>Bank Details:</h4>

                                <div class="field_row">
                                    <div class="form-group">
                                        <label for="bank">Bank:</label>
                                        <input type="text" class="form-control" id="bank" name="bank"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_branch_name">Branch Name:</label>
                                        <input type="text" class="form-control" id="bank_branch_name"
                                            name="bank_branch_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_branch_code">Branch Code:</label>
                                        <input type="text" class="form-control" name="bank_branch_code"
                                            id="bank_branch_code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_account_number">Account Number:</label>
                                        <input type="text" class="form-control" id="bank_account_number"
                                            name="bank_account_number" required>
                                    </div>
                                </div>

                                <h4>Upload supporting documents</h4>

                                <ul>
                                    <li>Proof of income of prospective tenants</li>
                                    <li>Last 3 months' bank statements</li>
                                    <li>ID/passport copy of applicants and occupants</li>
                                    <li>Copy of document issued by SARS which includes the tax registration number</li>
                                    <li>Latest Payslips</li>
                                    <div id="appendDocumentField">
                                        <div class="field_row my-3">
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="supporting_documents[]">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="other_buttons mb-3 addMoreFiles">Add More Files</button>
                                    <li>
                                        I/We hereby confirm that I/we have personally inspected the interior of the premises
                                        applied for. I/We declare that the above information is correct. All maintenance and
                                        repairs are subject to the Lessor’s final approval. If the application is
                                        successful, I/we agree to sign Trafalgar’s standard lease agreement and I/we shall
                                        be bound by all terms and conditions thereof. No agreement of lease shall be deemed
                                        to exist between the Lessor and myself until the lease has been signed by, or on
                                        behalf of, the Lessor. Should you fail to sign a lease agreement within three (3)
                                        working days of having been requested to do so, the Landlord may elect to discard
                                        your application and any right to occupation shall lapse. I/We hereby authorize the
                                        Landlord or Agent to:
                                    </li>
                                    <li>
                                        Contact, request and obtain information from any credit provider (or potential
                                        credit provider) or registered credit bureau relevant to an assessment of my
                                        behaviour, profile, payment patterns, indebtedness, whereabouts, and credit
                                        worthiness;
                                    </li>
                                    <li>
                                        Furnish information concerning my behaviour, profile, payment patterns,
                                        indebtedness, whereabouts, and credit worthiness to any registered credit bureau or
                                        to any credit provider (or potential credit provider) seeking a trade reference
                                        regarding my dealings with the Lessor.
                                    </li>
                                </ul>
                                <div class="field_row align-items-center">
                                    <div class="form-group">
                                        <label for="get_agent">Select Agent:</label>
                                        <div class="icon_select">
                                            <select id="get_agent" class="form-control" name="get_agent">
                                                <option value="{{ $propertyDetail->agent_name }}">
                                                    {{ $propertyDetail->agent_name }}</option>
                                                <!--<option value="agent 2">agent 2</option>-->
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" id="application_form" class="send_button form-control">Send
                                        Application</button>
                                    <p id="loading_msg"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section  -->

    <!-- The Modal for social icon -->
    <div class="modal" id="socialLinksModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header p-2">
                    <h5 class="modal-title">social platform</h5>
                    <button type="button" class="close p-0 m-0" data-dismiss="modal">
                        <span class="icon-close2" aria-hidden="true"></span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body p-1">
                    <div class="modal_socialLinks">
                        @php  $currentURL = \URL::full(); @endphp
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentURL }}" class=""
                            target="_blank" title="Facebook">
                            <img class="img-fluid" src="{{ asset('front/images/facebook.svg') }}" width="50"
                                alt="facebook" /></a>
                        <a href="http://www.twitter.com/share?url={{ $currentURL }}" class=""
                            target="_blank" title="Twitter">
                            <img class="img-fluid" src="{{ asset('front/images/twitter.svg') }}" width="50"
                                alt="twitter" /></a>
                        <a id="shareLinkWithEmail"
                            href="mailto:someone@example.com&subject={{ $propertyCustomTitle }}]" class=""
                            target="_blank" title="Email">
                            <img class="img-fluid" src="{{ asset('front/images/mail.svg') }}" width="50"
                                alt="mail" /></a>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?text=Check out this property I found on Trafalgar Property! {{ $currentURL }} "><img
                                class="img-fluid" src="{{ asset('front/images/whatsapp.svg') }}" alt="whatsapp"
                                width="50" /> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal for social icon -->

    <!-- The Modal for social link share with email -->
    <div class="modal" id="shareLinkWithEmailModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header p-2">
                    <h5 class="modal-title">Send Link To Friend</h5>
                    <button type="button" class="close p-0 m-0" data-dismiss="modal">
                        <span class="icon-close2" aria-hidden="true"></span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body p-1">
                    <div class="applyproperty_form">
                        <form action="{{ route('Share-link-to-friend') }}" method="post">
                            @csrf
                            <div class="maintenance_form_inner">
                                <div class="row">
                                    <div class="col-6 pr-2 field_row">
                                        <div class="form-group">
                                            <label for="your_email">Your Friends Email Address<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Your email"
                                                required id="your_email" name="your_email">
                                        </div>
                                    </div>
                                    <input type="hidden" name="pageName" value="propertydetail">
                                    <input type="hidden" name="shareableLink" value="{{ \URL::full() }}">
                                    <input type="hidden" name="getId"
                                        value="{{ isset($_GET['propertid']) ? $_GET['propertid'] : $propertyDetail->property_id }}">
                                    <div class="col-6 pl-2 field_row">
                                        <div class="form-group">
                                            <label for="your_name">Your name<span>*</span></label>
                                            <input type="text" required class="form-control"
                                                placeholder="Your name" id="your_name" name="your_name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="your_message">Message<span>*</span></label>
                                            <textarea id="your_message" required class="form-control" name="your_message" placeholder="Your message"
                                                rows="4" style="width:100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="send_button form-control">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // $(document).ready(function () {
        //     $('[data-fancybox]').fancybox({
        //         // Options will go here
        //         buttons: [
        //             "zoom",
        //             "slideShow",
        //             "fullScreen",
        //             "thumbs",
        //             "close"
        //         ],
        //         wheel: false,
        //         transitionEffect: "slide",
        //         loop: true,
        //         toolbar: false,
        //         clickContent: false
        //     });
        // });
    </script>
    <!-- The Modal for social link share with email -->

@endsection

@push('property-detail-js-page')
    @include('frontPart.js.propertyDetailJs')
@endpush
