@php
    // Determine the page type based on URL segments
    $checkPageType = Request::segment(2) . ', ' . Request::segment(3);

    // Determine the city or suburb title and description
    $locationTitle = isset($_GET['city']) ? $_GET['city'] : str_replace('-', ' ', Request::segment(2));
    $locationDesc = $locationTitle;

    // Check if the propertyDetail object exists and has a property_id
    $property_id = isset($propertyDetail->property_id) ? $propertyDetail->property_id : ' '; // Default to 'XXX' if property_id is not available
@endphp

@if ($checkPageType != 'multiple-areas')
    @section('meta_keywords', 'RESIDENTIAL CITY TO RENT')

    @if (Request::segment(3))
        @php
            // If the third segment is available, assume it's a suburb search
$suburbTitle = str_replace('-', ' ', Request::segment(2));
$cityTitle = str_replace('-', ' ', Request::segment(3));
        @endphp
        @section('title', 'Property and houses to rent in ' . Str::limit($suburbTitle, 16, '') . ', ' .
            Str::limit($cityTitle, 10, '') . ' ' . $property_id)
        @section('meta_description', 'Property to rent in ' . Str::limit($suburbTitle, 20, '') . ', ' . $cityTitle . ' '
            . $property_id . '. The largest selection of flats, farms, townhouses & houses to rent in ' .
            Str::limit($suburbTitle, 20, '') . '.')
        @else
        @section('title', 'Property and houses to rent in ' . $locationTitle . ' ' . $property_id)
        @section('meta_description', 'Property to rent in ' . Str::limit($locationDesc, 20, '') . ' ' . $property_id .
            '. The largest selection of flats, farms, townhouses & houses to rent in ' . Str::limit($locationDesc, 20, '') .
            '.')
        @endif
    @else
    @section('meta_keywords', 'RESIDENTIAL MULTIPLE SUBURBS TO RENT')
    @section('title', 'Houses to rent in Multiple Suburbs')
    @section('meta_description', 'Flats, apartments, townhouses and houses to rent in Multiple Suburbs.')
@endif


@extends('layouts.front')




@section('content')

    <section class="property_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 pr-0">
                    <div class="heading h1_tag">
                        <h1>Find a Property</h1>
                    </div>
                    <div class="property-section-content">
                        <div class="content">


                            <?php
                            
                            if ($url_city == 1 && $url_town == 2) {
                                $searchedKeyword = $url_province;
                            } elseif ($url_city == 1 && $url_town != 2) {
                                $key = $url_town . ', ' . $url_province;
                                $searchedKeyword = $key;
                            } elseif ($url_city == 3 && $url_town == 3 && $url_province == 3) {
                                $multipletown = Request::segment(3);
                                $a = str_replace('-', ' ', $multipletown);
                                $b = str_replace(',', ', ', $a);
                                $explode = explode('&', $b);
                            
                                //print_r($explode);
                                //echo $multipletown = $request->url_town;
                                $key = $url_city . ', ' . $url_town;
                                $searchedKeyword = $key;
                            } else {
                                $key = $url_city . ', ' . $url_town;
                                $searchedKeyword = $key;
                            }
                            
                            ?>

                            @if (isset($_GET['city']) && $_GET['city'] != '')
                                @php
                                    //$arrayOfCity = explode(",", $_GET['city']);
                                    $arrayOfCity = $searchedKeyword;

                                @endphp
                            @endif

                            @if (isset($_GET['ptype']) && $_GET['ptype'] != '')
                                @php $arrayOfPropertyType = explode(",", $_GET['ptype']);  @endphp
                            @endif


                            <form action="{{ route('property') }}" method="get" id="searchForm" class="resetFormData">
                                <div class="input-group mb-3 search_view">
                                    <div class="input-group-prepend selectwithinput">
                                        <div class="select_buttons">
                                            <div class="single_select_buttons select_icon">


                                                <select id="stype" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="for rent">To Rent</option>
                                                    <option value="for sale">For Sale</option>
                                                </select>


                                            </div>
                                        </div>
                                    </div>





                                    <select id="cityListForSearchPage" class="select2 form-control search-input"
                                        multiple="multiple"
                                        data-placeholder="Enter a province, city or suburb, Multiple areas may be entered."
                                        onchange="getData()">


                                        <?php if(!empty($getSearchTaggerData)){ ?>
                                        <?php foreach($getSearchTaggerData as $key_check => $value_check){ ?>

                                        <option value="{{ $getSearchTaggerData[$key_check]['id'] }}" <?php /*if(isset($arrayOfCity) && in_array( $getSearchTaggerData[$key_check]['id'],$arrayOfCity)){ echo "selected";
                                                                                                                                }   ?>
                                        ?> ?>
                                            ?>>
                                            <?php echo $getSearchTaggerData[$key_check]['text']; ?> </option>

                                        <?php } */?>
                                        <?php
                                        
                                        if (isset($arrayOfCity) && $arrayOfCity == $getSearchTaggerData[$key_check]['text']) {
                                            echo 'selected';
                                        }
                                        
                                        if ($url_city == 3 && $url_town == 3 && $url_province == 3) {
                                            if (in_array($getSearchTaggerData[$key_check]['text'], $explode)) {
                                                echo 'selected';
                                            }
                                        }
                                        
                                        ?>><?php echo $getSearchTaggerData[$key_check]['text']; ?> </option>

                                        <?php } ?>
                                        <?php } ?>


                                    </select>



                                    <div class="input-group-append">
                                        <button data-formtype="formRentTypeSubmit" data-citydata="cityListForSearchPage"
                                            class="btn btn-outline-secondary search-btn propertySearchButton button-addon2"
                                            type="button" id="button-addon2">Search</button>
                                    </div>
                                </div>
                                <input type="hidden" name="city" class="stringCity">


                                <input type="hidden" name="ptype" class="stringPropertyTypeRent"
                                    id="stringPropertyTypeRent">

                                <input type="hidden"
                                    value="{{ isset($_GET['sortType']) && $_GET['sortType'] != '' ? $_GET['sortType'] : 'default' }}"
                                    name="sortType" id="sortType">
                                <div class="select_buttons mb-3">
                                    <div class="single_select_buttons select_icon">
                                        <select id="ptype_rent" multiple="multiple" class="form-select ptype_select"
                                            aria-label="Default select example">

                                            @foreach ($propertyTypeList as $propertyTypeListss)
                                                <option <?php if (isset($arrayOfPropertyType) && in_array($propertyTypeListss->property_type, $arrayOfPropertyType)) {
                                                    echo 'selected';
                                                } ?>
                                                    value="{{ $propertyTypeListss->property_type }}">
                                                    {{ ucfirst($propertyTypeListss->property_type) }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="single_select_buttons select_icon" id="minprice_rent_select">
                                        <select name="minprice" id="minprice_rent" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">Min Price</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '1000') {
                                                echo 'selected';
                                            } ?> value="1000"> R
                                                {{ number_format(1000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '1500') {
                                                echo 'selected';
                                            } ?> value="1500"> R
                                                {{ number_format(1500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '2000') {
                                                echo 'selected';
                                            } ?> value="2000"> R
                                                {{ number_format(2000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '2500') {
                                                echo 'selected';
                                            } ?> value="2500"> R
                                                {{ number_format(2500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '3000') {
                                                echo 'selected';
                                            } ?> value="3000"> R
                                                {{ number_format(3000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '3500') {
                                                echo 'selected';
                                            } ?> value="3500"> R
                                                {{ number_format(3500, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '4000') {
                                                echo 'selected';
                                            } ?> value="4000"> R
                                                {{ number_format(4000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '4500') {
                                                echo 'selected';
                                            } ?> value="4500"> R
                                                {{ number_format(4500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '5000') {
                                                echo 'selected';
                                            } ?> value="5000"> R
                                                {{ number_format(5000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '6000') {
                                                echo 'selected';
                                            } ?> value="6000"> R
                                                {{ number_format(6000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '7000') {
                                                echo 'selected';
                                            } ?> value="7000"> R
                                                {{ number_format(7000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '8000') {
                                                echo 'selected';
                                            } ?> value="8000"> R
                                                {{ number_format(8000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '9000') {
                                                echo 'selected';
                                            } ?> value="9000"> R
                                                {{ number_format(9000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '10000') {
                                                echo 'selected';
                                            } ?> value="10000"> R
                                                {{ number_format(10000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '11000') {
                                                echo 'selected';
                                            } ?> value="11000"> R
                                                {{ number_format(11000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '12000') {
                                                echo 'selected';
                                            } ?> value="12000"> R
                                                {{ number_format(12000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '13000') {
                                                echo 'selected';
                                            } ?> value="13000"> R
                                                {{ number_format(13000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '14000') {
                                                echo 'selected';
                                            } ?> value="14000"> R
                                                {{ number_format(14000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '15000') {
                                                echo 'selected';
                                            } ?> value="15000"> R
                                                {{ number_format(15000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '16000') {
                                                echo 'selected';
                                            } ?> value="16000"> R
                                                {{ number_format(16000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '17000') {
                                                echo 'selected';
                                            } ?> value="17000"> R
                                                {{ number_format(17000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '18000') {
                                                echo 'selected';
                                            } ?> value="18000"> R
                                                {{ number_format(18000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '19000') {
                                                echo 'selected';
                                            } ?> value="19000"> R
                                                {{ number_format(19000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '20000') {
                                                echo 'selected';
                                            } ?> value="20000"> R
                                                {{ number_format(20000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '25000') {
                                                echo 'selected';
                                            } ?> value="25000"> R
                                                {{ number_format(25000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '30000') {
                                                echo 'selected';
                                            } ?> value="30000"> R
                                                {{ number_format(30000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '35000') {
                                                echo 'selected';
                                            } ?> value="35000"> R
                                                {{ number_format(35000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '40000') {
                                                echo 'selected';
                                            } ?> value="40000"> R
                                                {{ number_format(40000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '50000') {
                                                echo 'selected';
                                            } ?> value="50000"> R
                                                {{ number_format(50000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '60000') {
                                                echo 'selected';
                                            } ?> value="60000"> R
                                                {{ number_format(60000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '70000') {
                                                echo 'selected';
                                            } ?> value="70000"> R
                                                {{ number_format(70000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '80000') {
                                                echo 'selected';
                                            } ?> value="80000"> R
                                                {{ number_format(80000, 0, ' ', ' ') }}</option>
                                        </select>
                                    </div>
                                    <div class="single_select_buttons select_icon" id="maxprice_ren_select">
                                        <select name="maxprice" id="maxprice_rent" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">Max Price</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '1000') {
                                                echo 'selected';
                                            } ?> value="1000"> R
                                                {{ number_format(1000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '1500') {
                                                echo 'selected';
                                            } ?> value="1500"> R
                                                {{ number_format(1500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '2000') {
                                                echo 'selected';
                                            } ?> value="2000"> R
                                                {{ number_format(2000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '2500') {
                                                echo 'selected';
                                            } ?> value="2500"> R
                                                {{ number_format(2500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '3000') {
                                                echo 'selected';
                                            } ?> value="3000"> R
                                                {{ number_format(3000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '3500') {
                                                echo 'selected';
                                            } ?> value="3500"> R
                                                {{ number_format(3500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '4000') {
                                                echo 'selected';
                                            } ?> value="4000"> R
                                                {{ number_format(4000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '4500') {
                                                echo 'selected';
                                            } ?> value="4500"> R
                                                {{ number_format(4500, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '5000') {
                                                echo 'selected';
                                            } ?> value="5000"> R
                                                {{ number_format(5000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '6000') {
                                                echo 'selected';
                                            } ?> value="6000"> R
                                                {{ number_format(6000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '7000') {
                                                echo 'selected';
                                            } ?> value="7000"> R
                                                {{ number_format(7000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '8000') {
                                                echo 'selected';
                                            } ?> value="8000"> R
                                                {{ number_format(8000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '9000') {
                                                echo 'selected';
                                            } ?> value="9000"> R
                                                {{ number_format(9000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '10000') {
                                                echo 'selected';
                                            } ?> value="10000"> R
                                                {{ number_format(10000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '11000') {
                                                echo 'selected';
                                            } ?> value="11000"> R
                                                {{ number_format(11000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '12000') {
                                                echo 'selected';
                                            } ?> value="12000"> R
                                                {{ number_format(12000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '13000') {
                                                echo 'selected';
                                            } ?> value="13000"> R
                                                {{ number_format(13000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '14000') {
                                                echo 'selected';
                                            } ?> value="14000"> R
                                                {{ number_format(14000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '15000') {
                                                echo 'selected';
                                            } ?> value="15000"> R
                                                {{ number_format(15000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '16000') {
                                                echo 'selected';
                                            } ?> value="16000"> R
                                                {{ number_format(16000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '17000') {
                                                echo 'selected';
                                            } ?> value="17000"> R
                                                {{ number_format(17000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '18000') {
                                                echo 'selected';
                                            } ?> value="18000"> R
                                                {{ number_format(18000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '19000') {
                                                echo 'selected';
                                            } ?> value="19000"> R
                                                {{ number_format(19000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '20000') {
                                                echo 'selected';
                                            } ?> value="20000"> R
                                                {{ number_format(20000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '25000') {
                                                echo 'selected';
                                            } ?> value="25000"> R
                                                {{ number_format(25000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '30000') {
                                                echo 'selected';
                                            } ?> value="30000"> R
                                                {{ number_format(30000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '35000') {
                                                echo 'selected';
                                            } ?> value="35000"> R
                                                {{ number_format(35000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '40000') {
                                                echo 'selected';
                                            } ?> value="40000"> R
                                                {{ number_format(40000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '50000') {
                                                echo 'selected';
                                            } ?> value="50000"> R
                                                {{ number_format(50000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '60000') {
                                                echo 'selected';
                                            } ?> value="60000"> R
                                                {{ number_format(60000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '70000') {
                                                echo 'selected';
                                            } ?> value="70000"> R
                                                {{ number_format(70000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '80000') {
                                                echo 'selected';
                                            } ?> value="80000"> R
                                                {{ number_format(80000, 0, ' ', ' ') }}</option>
                                        </select>
                                    </div>


                                    <div class="single_select_buttons select_icon" id="minprice_sale_select">
                                        <select name="minprice" id="minprice_sale" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">Min Price</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '100000') {
                                                echo 'selected';
                                            } ?> value="100000">R
                                                {{ number_format(100000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '150000') {
                                                echo 'selected';
                                            } ?> value="150000">R
                                                {{ number_format(150000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '200000') {
                                                echo 'selected';
                                            } ?> value="200000">R
                                                {{ number_format(200000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '250000') {
                                                echo 'selected';
                                            } ?> value="250000">R
                                                {{ number_format(250000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '300000') {
                                                echo 'selected';
                                            } ?> value="300000">
                                                R{{ number_format(300000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '350000') {
                                                echo 'selected';
                                            } ?> value="350000">R
                                                {{ number_format(350000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '400000') {
                                                echo 'selected';
                                            } ?> value="400000">R
                                                {{ number_format(400000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '450000') {
                                                echo 'selected';
                                            } ?> value="450000">R
                                                {{ number_format(450000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '500000') {
                                                echo 'selected';
                                            } ?> value="500000">R
                                                {{ number_format(500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '700000') {
                                                echo 'selected';
                                            } ?> value="700000">R
                                                {{ number_format(700000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '800000') {
                                                echo 'selected';
                                            } ?> value="800000">R
                                                {{ number_format(800000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '900000') {
                                                echo 'selected';
                                            } ?> value="900000">R
                                                {{ number_format(900000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '1000000') {
                                                echo 'selected';
                                            } ?> value="1000000">R
                                                {{ number_format(1000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '1250000') {
                                                echo 'selected';
                                            } ?> value="1250000">R
                                                {{ number_format(1250000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '1500000') {
                                                echo 'selected';
                                            } ?> value="1500000">R
                                                {{ number_format(1500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '1750000') {
                                                echo 'selected';
                                            } ?> value="1750000">R
                                                {{ number_format(1750000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '2000000') {
                                                echo 'selected';
                                            } ?> value="2000000">R
                                                {{ number_format(2000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '2500000') {
                                                echo 'selected';
                                            } ?> value="2500000">R
                                                {{ number_format(2500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '3000000') {
                                                echo 'selected';
                                            } ?> value="3000000">R
                                                {{ number_format(3000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '3500000') {
                                                echo 'selected';
                                            } ?> value="3500000">R
                                                {{ number_format(3500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '4000000') {
                                                echo 'selected';
                                            } ?> value="4000000">R
                                                {{ number_format(4000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '4500000') {
                                                echo 'selected';
                                            } ?> value="4500000">R
                                                {{ number_format(4500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '5000000') {
                                                echo 'selected';
                                            } ?> value="5000000">R
                                                {{ number_format(5000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '6000000') {
                                                echo 'selected';
                                            } ?> value="6000000">R
                                                {{ number_format(6000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '7000000') {
                                                echo 'selected';
                                            } ?> value="7000000">R
                                                {{ number_format(7000000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '8000000') {
                                                echo 'selected';
                                            } ?> value="8000000">R
                                                {{ number_format(8000000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '9000000') {
                                                echo 'selected';
                                            } ?> value="9000000">R
                                                {{ number_format(9000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '10000000') {
                                                echo 'selected';
                                            } ?> value="10000000">R
                                                {{ number_format(10000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['minprice']) && $_GET['minprice'] != '' && $_GET['minprice'] == '15000000') {
                                                echo 'selected';
                                            } ?> value="15000000">R
                                                {{ number_format(15000000, 0, ' ', ' ') }} </option>

                                        </select>
                                    </div>
                                    <div class="single_select_buttons select_icon" id="maxprice_sale_select">
                                        <select name="maxprice" id="maxprice_sale" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">Max Price</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '100000') {
                                                echo 'selected';
                                            } ?> value="100000">R
                                                {{ number_format(100000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '150000') {
                                                echo 'selected';
                                            } ?> value="150000"> R
                                                {{ number_format(150000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '200000') {
                                                echo 'selected';
                                            } ?> value="200000"> R
                                                {{ number_format(200000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '250000') {
                                                echo 'selected';
                                            } ?> value="250000"> R
                                                {{ number_format(250000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '300000') {
                                                echo 'selected';
                                            } ?> value="300000"> R
                                                {{ number_format(300000, 0, ' ', ' ') }} </option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '350000') {
                                                echo 'selected';
                                            } ?> value="350000"> R
                                                {{ number_format(350000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '400000') {
                                                echo 'selected';
                                            } ?> value="400000"> R
                                                {{ number_format(400000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '450000') {
                                                echo 'selected';
                                            } ?> value="450000"> R
                                                {{ number_format(450000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '500000') {
                                                echo 'selected';
                                            } ?> value="500000"> R
                                                {{ number_format(500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '700000') {
                                                echo 'selected';
                                            } ?> value="700000"> R
                                                {{ number_format(700000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '800000') {
                                                echo 'selected';
                                            } ?> value="800000"> R
                                                {{ number_format(800000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '900000') {
                                                echo 'selected';
                                            } ?> value="900000"> R
                                                {{ number_format(900000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '1000000') {
                                                echo 'selected';
                                            } ?> value="1000000"> R
                                                {{ number_format(1000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '1250000') {
                                                echo 'selected';
                                            } ?> value="1250000"> R
                                                {{ number_format(1250000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '1500000') {
                                                echo 'selected';
                                            } ?> value="1500000"> R
                                                {{ number_format(1500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '1750000') {
                                                echo 'selected';
                                            } ?> value="1750000"> R
                                                {{ number_format(1750000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '2000000') {
                                                echo 'selected';
                                            } ?> value="2000000"> R
                                                {{ number_format(2000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '2500000') {
                                                echo 'selected';
                                            } ?> value="2500000"> R
                                                {{ number_format(2500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '3000000') {
                                                echo 'selected';
                                            } ?> value="3000000"> R
                                                {{ number_format(3000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '3500000') {
                                                echo 'selected';
                                            } ?> value="3500000"> R
                                                {{ number_format(3500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '4000000') {
                                                echo 'selected';
                                            } ?> value="4000000"> R
                                                {{ number_format(4000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '4500000') {
                                                echo 'selected';
                                            } ?> value="4500000"> R
                                                {{ number_format(4500000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '5000000') {
                                                echo 'selected';
                                            } ?> value="5000000"> R
                                                {{ number_format(5000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '6000000') {
                                                echo 'selected';
                                            } ?> value="6000000"> R
                                                {{ number_format(6000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '7000000') {
                                                echo 'selected';
                                            } ?> value="7000000"> R
                                                {{ number_format(7000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '8000000') {
                                                echo 'selected';
                                            } ?> value="8000000"> R
                                                {{ number_format(8000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '9000000') {
                                                echo 'selected';
                                            } ?> value="9000000"> R
                                                {{ number_format(9000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '10000000') {
                                                echo 'selected';
                                            } ?> value="10000000"> R
                                                {{ number_format(10000000, 0, ' ', ' ') }}</option>
                                            <option <?php if (isset($_GET['maxprice']) && $_GET['maxprice'] != '' && $_GET['maxprice'] == '15000000') {
                                                echo 'selected';
                                            } ?> value="15000000"> R
                                                {{ number_format(15000000, 0, ' ', ' ') }}</option>
                                        </select>
                                    </div>





                                    <div class="single_select_buttons select_icon">
                                        <select name="beds" id="beds_rent" class="form-select"
                                            aria-label="Default select example">
                                            <option value="">Beds</option>
                                            <option value="">Any</option>
                                            @for ($g = 1; $g <= 5; $g++)
                                                <option <?php if (isset($_GET['beds']) && $_GET['beds'] != '' && $_GET['beds'] == $g) {
                                                    echo 'selected';
                                                } ?> value="{{ $g }}">
                                                    {{ $g }}+</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <div class="single_select_buttons select_icon">
                                        <select name="bath" class="form-select" id="bath_rent"
                                            aria-label="Default select example">
                                            <option value="">Baths</option>
                                            <option value="">Any</option>
                                            @for ($h = 1; $h <= 5; $h++)
                                                <option <?php if (isset($_GET['bath']) && $_GET['bath'] != '' && $_GET['bath'] == $h) {
                                                    echo 'selected';
                                                } ?> value="{{ $h }}">
                                                    {{ $h }}+</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <div class="single_select_buttons">
                                        <button type="button" id="moreOptionButtonRent" class="search-btn">More filters
                                            +</button>
                                    </div>
                                    <div id="moreAdvanceOptionSerachRent" style="">
                                        <div class="single_select_buttons select_icon">
                                            <select name="garage" id="garage_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Garage</option>
                                                <option value="">Any</option>
                                                @for ($kl = 1; $kl <= 5; $kl++)
                                                    <option <?php if (isset($_GET['garage']) && $_GET['garage'] != '' && $_GET['garage'] == $kl) {
                                                        echo 'selected';
                                                    } ?> value="{{ $kl }}">
                                                        {{ $kl }}+</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="prkng" id="prkng_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Parking</option>
                                                <option value="">Any</option>
                                                @for ($kls = 1; $kls <= 5; $kls++)
                                                    <option <?php if (isset($_GET['prkng']) && $_GET['prkng'] != '' && $_GET['prkng'] == $kls) {
                                                        echo 'selected';
                                                    } ?> value="{{ $kls }}">
                                                        {{ $kls }}+</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="fminsize" id="fminsize_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Floor Min Size (m²)</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '20') {
                                                    echo 'selected';
                                                } ?> value="20"> 20</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '40') {
                                                    echo 'selected';
                                                } ?> value="40"> 40</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '60') {
                                                    echo 'selected';
                                                } ?> value="60"> 60</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '80') {
                                                    echo 'selected';
                                                } ?> value="80"> 80</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '100') {
                                                    echo 'selected';
                                                } ?> value="100"> 100</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '150') {
                                                    echo 'selected';
                                                } ?> value="150"> 150</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '200') {
                                                    echo 'selected';
                                                } ?> value="200"> 200</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '250') {
                                                    echo 'selected';
                                                } ?> value="250"> 250</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '300') {
                                                    echo 'selected';
                                                } ?> value="300"> 300</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '350') {
                                                    echo 'selected';
                                                } ?> value="350"> 350</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '400') {
                                                    echo 'selected';
                                                } ?> value="400"> 400</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '450') {
                                                    echo 'selected';
                                                } ?> value="450"> 450</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '500') {
                                                    echo 'selected';
                                                } ?> value="500"> 500</option>
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="fmaxsize" id="fmaxsize_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Floor Max Size (m²)</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '20') {
                                                    echo 'selected';
                                                } ?> value="20"> 20</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '40') {
                                                    echo 'selected';
                                                } ?> value="40"> 40</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '60') {
                                                    echo 'selected';
                                                } ?> value="60"> 60</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '80') {
                                                    echo 'selected';
                                                } ?> value="80"> 80</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '100') {
                                                    echo 'selected';
                                                } ?> value="100"> 100</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '150') {
                                                    echo 'selected';
                                                } ?> value="150"> 150</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '200') {
                                                    echo 'selected';
                                                } ?> value="200"> 200</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '250') {
                                                    echo 'selected';
                                                } ?> value="250"> 250</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '300') {
                                                    echo 'selected';
                                                } ?> value="300"> 300</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '350') {
                                                    echo 'selected';
                                                } ?> value="350"> 350</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '400') {
                                                    echo 'selected';
                                                } ?> value="400"> 400</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '450') {
                                                    echo 'selected';
                                                } ?> value="450"> 450</option>
                                                <option <?php if (isset($_GET['fminsize']) && $_GET['fminsize'] != '' && $_GET['fminsize'] == '500') {
                                                    echo 'selected';
                                                } ?> value="500"> 500</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <input type="hidden" id="cityrentdata" name="cityrentdata" />
                            <div class="recent-search-view d-flex justify-content-between">
                                <div class="recent-search d-flex align-items-center">
                                    <p>Recent Search: </p>
                                    <div class="searches">
                                        @if (!empty($searchResultCookie))
                                            @for ($ar = 0; $ar < count($searchResultCookie); $ar++)
                                                <span class="badge"><a href="{{ $searchResultCookie[$ar]['link'] }}"
                                                        style="color:#222222">{{ $searchResultCookie[$ar]['name'] }}</a></span>
                                            @endfor
                                        @else
                                            <span class="badge">no recent search</span>
                                        @endif


                                    </div>
                                </div>
                                <a href="javascript:void(0);" id="resetAllForm" class="reset-filter"><u>Reset
                                        Filter</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- guldenland section  -->

    <section class="guldenland_section">
        <div class="container">
            <div class="heading mb-4">
                @php

                    if (isset($_GET['city']) && $_GET['city'] != '') {
                        $city_length = count(explode(',', $_GET['city']));
                        if ($city_length > 1 || ($url_city == 3 && $url_town == 3 && $url_province == 3)) {
                            $text = 'Multiple Areas';
                        } else {
                            $text = $_GET['city'];
                        }
                    } else {
                        $text = '';
                    }
                @endphp
                <h2>Property To Rent in <?php if (isset($_GET['city']) && $_GET['city'] != '') {
                    echo $text;
                } ?></h2>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing">



                    <div class="order_grid_view">
                        <div class="order_view">
                            <span>
                                <b>Order By: </b>
                                <select id="setSortType" class="form-select">
                                    <option
                                        {{ isset($_GET['sortType']) && $_GET['sortType'] == 'default' ? 'selected' : '' }}
                                        value="default">Default</option>
                                    <option
                                        {{ isset($_GET['sortType']) && $_GET['sortType'] == 'lowtohigh' ? 'selected' : '' }}
                                        value="lowtohigh">Price - low to high</option>
                                    <option
                                        {{ isset($_GET['sortType']) && $_GET['sortType'] == 'hightolow' ? 'selected' : '' }}
                                        value="hightolow">Price - high to low</option>
                                    <option
                                        {{ isset($_GET['sortType']) && $_GET['sortType'] == 'mostrecent' ? 'selected' : '' }}
                                        value="mostrecent">Most Recent</option>
                                    <option
                                        {{ isset($_GET['sortType']) && $_GET['sortType'] == 'alphabat' ? 'selected' : '' }}
                                        value="alphabat">Alphabetical</option>
                                </select>
                            </span>
                        </div>
                        <div class="list_map_view">
                            <p class="m-0 mr-3">Showing: {{ $propertyDatas->currentPage() }} -
                                {{ $propertyDatas->count() }} of {{ $propertyDatas->total() }}</p>
                            <a class="list_view" id="showListDiv" href="#"><img class="img-fluid"
                                    src="{{ asset('front/images/list.png') }}" alt="list" /></a>
                            <a class="map_view" id="showMapDiv" href="javascript:void(0)"><img class="img-fluid"
                                    src="{{ asset('front/images/map.png') }}" alt="map" /></a>
                        </div>
                    </div>
                    <div class="mapping_view" id="mapping_view" style="display:none">
                        <div class="guldenland_map_view">
                            <div class="container">
                                <div id="map_tuts" style="width:100%; height:500px; "></div>

                            </div>
                        </div>
                    </div>
                    <div class="guldenland_view" id="showPropertyList" style="display:block">
                        <div class="guldenland_all_product">
                            @if (!$propertyDatas->isEmpty())
                                @foreach ($propertyDatas as $propertyData)
                                    @php
                                        $suburb = str_replace(' ', '-', $propertyData->suburb);
                                        $town = str_replace(' ', '-', $propertyData->town);
                                        $province = str_replace(' ', '-', $propertyData->province);
                                        $mandate_saletype = str_replace(' ', '-', $propertyData->mandate_saletype);
                                        $customUrl = route('property-' . $mandate_saletype, [
                                            'p_suburb' => $suburb,
                                            'p_town' => $town,
                                            'p_province' => $province,
                                            'p_id' => $propertyData->id,
                                            'p_ref' => $propertyData->property_id,
                                        ]);
                                    @endphp
                                    <div style="cursor: pointer;" onclick="window.location = '{{ $customUrl }}';"
                                        class="guldenland_each_product">
                                        <div class="product_img">
                                            <a href="{{ $customUrl }}">
                                                @if ($propertyData->news_featured_image != '')
                                                    <img title="{{ $propertyData->complex_name . ' ' . $propertyData->unit_number }}"
                                                        class="img-fluid" src="{{ $propertyData->news_featured_image }}"
                                                        alt="{{ $propertyData->headline != '' ? $propertyData->headline : $propertyData->news_featured_image }}" />
                                                @else
                                                    <img title="{{ $propertyData->complex_name . ' ' . $propertyData->unit_number }}"
                                                        class="img-fluid"
                                                        src="{{ asset('storage/propertyDummyImage/dummy_property_image.jpg') }}"
                                                        alt="{{ $propertyData->headline != '' ? $propertyData->headline : 'dummy_property_image.jpg' }}" />
                                                @endif

                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <h4 title="{{ 'R ' . number_format($propertyData->price, 0, ' ', ' ') }}">R
                                                {{ number_format($propertyData->price, 0, ' ', ' ') }} <sub
                                                    class="per_month">per month</sub></h4>

                                            <small
                                                title='{{ $propertyData->bedrooms != 0 ? $propertyData->bedrooms . ' Bedroom ' : 'Bachelor' }} {{ ucwords($propertyData->property_type . ' ' . $propertyData->mandate_saletype . ' ' . 'in' . ' ' . $propertyData->suburb) }}'>
                                                {{ $propertyData->bedrooms != 0 ? $propertyData->bedrooms . ' Bedroom ' : 'Bachelor' }}
                                                {{ ucwords($propertyData->property_type . ' ' . $propertyData->mandate_saletype . ' ' . 'in' . ' ' . $propertyData->suburb) }}
                                            </small>


                                            @if ($propertyData->complex_name != '')
                                                <a title="{{ ucwords($propertyData->complex_name) . ' ' . $propertyData->unit_number }}"
                                                    href="{{ $customUrl }}">
                                                    <h3> {{ ucwords($propertyData->complex_name) }}
                                                        <!--." ".$propertyData->unit_number -->
                                                    </h3>
                                                </a>
                                            @else
                                                <a title="{{ ucwords($propertyData->street_name) . ' ' . $propertyData->street_number }}"
                                                    href="{{ $customUrl }}">
                                                    <h3> {{ ucwords($propertyData->street_name) }}</h3>
                                                    <!--." ".$propertyData->street_number-->
                                                </a>
                                            @endif

                                            <p>{{ substr($propertyData->description, 0, 200) }}....

                                            </p>
                                            @if (
                                                $propertyData->bedrooms > 0 ||
                                                    $propertyData->bathrooms > 0 ||
                                                    $propertyData->garages > 0 ||
                                                    $propertyData->floor_size > 0)
                                                <div class="product_detail">
                                                    @if ($propertyData->bedrooms > 0)
                                                        <span title="{{ $propertyData->bedrooms }} Bedroom"><img
                                                                src="{{ asset('front/images/icon_bed_new.png') }}"
                                                                alt="icon_bed_new">{{ $propertyData->bedrooms }}
                                                            Bedroom</span>
                                                    @endif
                                                    @if ($propertyData->bathrooms > 0)
                                                        <span title="{{ $propertyData->bathrooms }} Bathroom"><img
                                                                src="{{ asset('front/images/icon_bath_new.png') }}"
                                                                alt="icon_bath_new">{{ $propertyData->bathrooms }}
                                                            Bathroom</span>
                                                    @endif
                                                    @if ($propertyData->garages > 0)
                                                        <span title="{{ $propertyData->garages }} Garage"><img
                                                                src="{{ asset('front/images/icon_parking.png') }}"
                                                                alt="icon_parking"> {{ $propertyData->garages }}
                                                            Garage</span>
                                                    @endif
                                                    @if ($propertyData->floor_size > 0)
                                                        <span
                                                            title="{{ $propertyData->floor_size }}{{ $propertyData->floor_size_unit }}"><img
                                                                src="{{ asset('front/images/icon_floor_new.png') }}"
                                                                alt="icon_floor_new"><small>{{ $propertyData->floor_size }}
                                                                <sup>{{ $propertyData->floor_size_unit }}</sup></small></span>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>There are no properties for your selected critera</p>
                                <!--<div class="guldenland_each_product">-->
                                <!--    There are no properties for your selected critera-->
                                <!-- </div>-->
                            @endif
                            @if ($propertyDatas->hasPages())
                                <div class="property_pagination">
                                    {{ $propertyDatas->links() }}

                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                    @if (isset($sideBarCodeForSearch) && !$sideBarCodeForSearch->isEmpty())
                        <div class="sidelist">
                            @if (isset($_GET['city']))
                                <?php $cityArray = explode(',', $_GET['city']); ?>
                                <h4>
                                    @if (!empty($cityArray))
                                        <?php //echo $cityArray[0]
                                        ?>
                                    @endif Property For Rent
                                </h4>
                                <ul>
                                    @foreach ($sideBarCodeForSearch as $sideBarCodeForSearchs)
                                        @if ($cityArray[0] != '')
                                            <li><a
                                                    href="{{ route('to-rent', ['url_city' => str_replace(' ', '-', $sideBarCodeForSearchs->suburb), 'url_town' => str_replace(' ', '-', $sideBarCodeForSearchs->town), 'url_province' => str_replace(' ', '-', $sideBarCodeForSearchs->province), 'city' => $cityArray[0], 'ptype' => $sideBarCodeForSearchs->property_type]) }}">
                                                    {{ ucfirst(strtolower($sideBarCodeForSearchs->property_type)) }} to
                                                    rent in {{ $sideBarCodeForSearchs->suburb }} </a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endif
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/alert.png') }}" alt="alert">
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
                                        alt="property">
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
                                        alt="valuation">
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

    <!-- guldenland section  -->

    <!-- footer top section  -->

    <section class="footer_top_section footer_top_section_bgwhite">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_top_content">
                            <h5>Property for Rent </h5>
                            <div class="content_list">
                                <ul>
                                    @if (!empty($getDistinctSuburb))
                                        @foreach ($getDistinctSuburb as $getDistinctSuburbs)
                                            @php

                                                $suburb_distinct = str_replace(' ', '-', $getDistinctSuburbs->suburb);
                                                $town_distinct = str_replace(' ', '-', $getDistinctSuburbs->town);
                                                $province_distinct = str_replace(
                                                    ' ',
                                                    '-',
                                                    $getDistinctSuburbs->province,
                                                );
                                                //create  url for single city
                                                $customUrl_distinct = route('to-rent', [
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
                                    @endif

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

@push('property-search-rent-list-js')
    @include('frontPart.js.propertySearchRentListJs')
@endpush
