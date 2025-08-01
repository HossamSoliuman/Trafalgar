<section class="property_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <div class="heading h1_tag">
                    <h1 style="color:white;">Find a Property</h1>
                </div>
                <!--property tab section-->
                <div class="property-section-content">
                    <div class="property-tabs__reset mb-3 d-flex align-items-center justify-content-between">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item search-panel">
                                <a class="nav-link <?php if (isset($_GET['tab']) && $_GET['tab'] == 'rent') {
                                    echo 'active';
                                } elseif (!isset($_GET['tab'])) {
                                    echo 'active';
                                } ?>" id="pills-home-tab"
                                    href="{{ route('/', ['tab' => 'rent']) }}" role="tab" aria-controls="pills-home"
                                    aria-selected="true">To Rent</a>
                            </li>
                            <li class="nav-item search-panel">
                                <a class="nav-link <?php if (isset($_GET['tab']) && $_GET['tab'] == 'sale') {
                                    echo 'active';
                                } ?>" id="pills-profile-tab"
                                    href="{{ route('/', ['tab' => 'sale']) }}" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">For Sale</a>
                            </li>
                            <li class="nav-item search-panel">
                                <!--Durban, Kwazulu Natal-->
                                <!--'Port Elizabeth,Eastern Cape'-->
                                <a class="nav-link" id="pills-contact-tab"
                                    href="{{ route('commercial-property', ['city' => 'Durban,Kwazulu Natal']) }}"
                                    role="tab" aria-selected="false">Commercial</a>
                                <!--aria-controls="pills-contact"-->
                            </li>
                        </ul>
                        <a href="javascript:void(0);" id="resetAllForm" class="reset-filter"><u>Reset Filter</u></a>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade <?php if (isset($_GET['tab']) && $_GET['tab'] == 'rent') {
                            echo 'show active';
                        } elseif (!isset($_GET['tab'])) {
                            echo 'show active';
                        } ?>" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="content">
                                <form method="get" id="formRentTypeSubmit" class="resetFormData">
                                    <div class="input-group mb-3 search_view">
                                        <select id="cityrent" class="select2 form-control search-input"
                                            multiple="multiple" onchange="getData()">

                                        </select>



                                        <div class="input-group-append">
                                            <button data-formtype="formRentTypeSubmit" data-citydata="cityrent"
                                                class="btn btn-outline-secondary search-btn submitSearchData button-addon2"
                                                type="button">Search</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="city" class="stringCity">
                                    <input type="hidden" name="ptype" id="stringPropertyTypeRent"
                                        class="stringPropertyTypeRent">

                                    <div class="select_buttons mb-3">
                                        <div class="single_select_buttons select_icon">
                                            <select id="ptype_rent" multiple="multiple" class="form-select ptype_select"
                                                aria-label="Default select example">
                                                <!--<option value="">Property Type</option>-->
                                                @foreach ($propertyTypeList as $propertyTypeListss)
                                                    <option value="{{ $propertyTypeListss->property_type }}">
                                                        {{ ucfirst($propertyTypeListss->property_type) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select id="minprice_rent" name="minprice" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Min Price</option>
                                                <option value="1000">R {{ number_format(1000, 0, ' ', ' ') }}</option>
                                                <option value="1500">R {{ number_format(1500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2000">R {{ number_format(2000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2500">R {{ number_format(2500, 0, ' ', ' ') }}</option>
                                                <option value="3000">R {{ number_format(3000, 0, ' ', ' ') }}</option>
                                                <option value="3500">R {{ number_format(3500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4000">R {{ number_format(4000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4500">R {{ number_format(4500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="5000">R {{ number_format(5000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="6000">R {{ number_format(6000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="7000">R {{ number_format(7000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="8000">R {{ number_format(8000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="9000">R {{ number_format(9000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="10000">R {{ number_format(10000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="11000">R {{ number_format(11000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="12000">R {{ number_format(12000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="13000">R {{ number_format(13000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="14000">R {{ number_format(14000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="15000">R {{ number_format(15000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="16000">R {{ number_format(16000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="17000">R {{ number_format(17000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="18000">R {{ number_format(18000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="19000">R {{ number_format(19000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="20000">R {{ number_format(20000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="25000">R {{ number_format(25000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="30000">R {{ number_format(30000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="35000">R {{ number_format(35000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="40000">R {{ number_format(40000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="50000">R {{ number_format(50000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="60000">R {{ number_format(60000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="70000">R {{ number_format(70000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="80000">R {{ number_format(80000, 0, ' ', ' ') }}
                                                </option>
                                                <!--<option value="14500000">14,500,000 </option>-->
                                                <!--<option value="15000000">15,000,000 </option>-->
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="maxprice" id="maxprice_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Max Price</option>
                                                <option value="1000">R {{ number_format(1000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1500">R {{ number_format(1500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2000">R {{ number_format(2000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2500">R {{ number_format(2500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="3000">R {{ number_format(3000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="3500">R {{ number_format(3500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4000">R {{ number_format(4000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4500">R {{ number_format(4500, 0, ' ', ' ') }}
                                                </option>
                                                <option value="5000">R {{ number_format(5000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="6000">R {{ number_format(6000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="7000">R {{ number_format(7000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="8000">R {{ number_format(8000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="9000">R {{ number_format(9000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="10000">R {{ number_format(10000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="11000">R {{ number_format(11000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="12000">R {{ number_format(12000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="13000">R {{ number_format(13000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="14000">R {{ number_format(14000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="15000">R {{ number_format(15000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="16000">R {{ number_format(16000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="17000">R {{ number_format(17000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="18000">R {{ number_format(18000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="19000">R {{ number_format(19000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="20000">R {{ number_format(20000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="25000">R {{ number_format(25000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="30000">R {{ number_format(30000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="35000">R {{ number_format(35000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="40000">R {{ number_format(40000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="50000">R {{ number_format(50000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="60000">R {{ number_format(60000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="70000">R {{ number_format(70000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="80000">R {{ number_format(80000, 0, ' ', ' ') }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="beds" id="beds_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Beds</option>
                                                <option value="">Any</option>
                                                @for ($g = 1; $g <= 5; $g++)
                                                    <option value="{{ $g }}">{{ $g }}+</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="bath" id="bath_rent" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Baths</option>
                                                <option value="">Any</option>
                                                @for ($h = 1; $h <= 5; $h++)
                                                    <option value="{{ $h }}">{{ $h }}+</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="single_select_buttons">
                                            <button type="button" id="moreOptionButtonRent" class="search-btn">More
                                                filters +</button>
                                        </div>
                                        <div id="moreAdvanceOptionSerachRent" style="">
                                            <div class="single_select_buttons select_icon">
                                                <select name="garage" id="garage_rent" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Garage</option>
                                                    <option value="">Any</option>
                                                    @for ($kl = 1; $kl <= 5; $kl++)
                                                        <option value="{{ $kl }}">{{ $kl }}+
                                                        </option>
                                                    @endfor

                                                </select>
                                            </div>
                                            <div class="single_select_buttons select_icon">
                                                <select name="prkng" id="prkng_rent" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Parking</option>
                                                    <option value="">Any</option>
                                                    @for ($kls = 1; $kls <= 5; $kls++)
                                                        <option value="{{ $kls }}">{{ $kls }}+
                                                        </option>
                                                    @endfor

                                                </select>
                                            </div>
                                            <div class="single_select_buttons select_icon">
                                                <select name="fminsize" id="fminsize_rent" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Floor Min Size (m²)</option>
                                                    <option value="20"> 20</option>
                                                    <option value="40"> 40</option>
                                                    <option value="60"> 60</option>
                                                    <option value="80"> 80</option>
                                                    <option value="100"> 100</option>
                                                    <option value="150"> 150</option>
                                                    <option value="200"> 200</option>
                                                    <option value="250"> 250</option>
                                                    <option value="300"> 300</option>
                                                    <option value="350"> 350</option>
                                                    <option value="400"> 400</option>
                                                    <option value="450"> 450</option>
                                                    <option value="500"> 500</option>
                                                </select>
                                            </div>
                                            <div class="single_select_buttons select_icon">
                                                <select name="fmaxsize" id="fmaxsize_rent" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Floor Max Size (m²)</option>
                                                    <option value="20"> 20</option>
                                                    <option value="40"> 40</option>
                                                    <option value="60"> 60</option>
                                                    <option value="80"> 80</option>
                                                    <option value="100"> 100</option>
                                                    <option value="150"> 150</option>
                                                    <option value="200"> 200</option>
                                                    <option value="250"> 250</option>
                                                    <option value="300"> 300</option>
                                                    <option value="350"> 350</option>
                                                    <option value="400"> 400</option>
                                                    <option value="450"> 450</option>
                                                    <option value="500"> 500</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <input type="hidden" id="cityrentdata" name="cityrentdata" />
                                <div class="recent-search-view">
                                    <div class="recent-search d-flex align-items-center">
                                        <p
                                            style="padding: 5px;background-color: var(--theme-color);border-radius: 5px;">
                                            Recent Search: </p>
                                        <div class="searches">
                                            @if (!empty($searchResultCookie) && count($searchResultCookie) > 0)
                                                @for ($ar = 0; $ar < count($searchResultCookie); $ar++)
                                                    <span class="badge"><a
                                                            href="{{ $searchResultCookie[$ar]['link'] }}"
                                                            style="color:#fff">{{ $searchResultCookie[$ar]['name'] }}</a></span>
                                                @endfor
                                            @else
                                                <span class="badge">no recent search</span>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade <?php if (isset($_GET['tab']) && $_GET['tab'] == 'sale') {
                            echo 'show active';
                        } ?>" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="content">
                                <form action="{{ route('property') }}" method="get" id="formSaleTypeSubmit"
                                    class="resetFormData">
                                    <div class="input-group mb-3 search_view">
                                        <select id="citysale" class="select2 form-control search-input"
                                            multiple="multiple" onchange="getData1()">

                                        </select>
                                        <div class="input-group-append">
                                            <button data-citydata="citysale"
                                                class="btn btn-outline-secondary search-btn submitFormForSaleProperty button-addon2"
                                                type="button">Search</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="ptype" id="stringPropertyTypeSale"
                                        class="stringPropertyTypeSale">
                                    <input type="hidden" name="city" class="stringCitySale">
                                    <!--<input type="hidden" name="stype"  value="for sale">-->
                                    <div class="select_buttons mb-3">
                                        <div class="single_select_buttons select_icon">
                                            <select id="ptype_sale" multiple="multiple"
                                                class="form-select ptype_select" aria-label="Default select example">

                                                @foreach ($propertyTypeList as $propertyTypeListss)
                                                    <option value="{{ $propertyTypeListss->property_type }}">
                                                        {{ ucfirst($propertyTypeListss->property_type) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select class="form-select" id="minprice_sale" name="minprice"
                                                aria-label="Default select example">
                                                <option value="">Min Price</option>
                                                <option value="100000"> R {{ number_format(100000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="150000"> R {{ number_format(150000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="200000"> R {{ number_format(200000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="250000"> R {{ number_format(250000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="300000"> R {{ number_format(300000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="350000"> R {{ number_format(350000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="400000"> R {{ number_format(400000, 0, ' ', ' ') }}
                                                </option>
                                                <option value=""> R {{ number_format(450000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="500000"> R {{ number_format(500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="700000"> R {{ number_format(700000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="800000"> R {{ number_format(800000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="900000"> R {{ number_format(900000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1000000"> R {{ number_format(1000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1250000"> R {{ number_format(1250000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1500000"> R {{ number_format(1500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1750000"> R {{ number_format(1750000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2000000"> R {{ number_format(2000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2500000"> R {{ number_format(2500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="3000000"> R {{ number_format(3000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="3500000"> R {{ number_format(3500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4000000"> R {{ number_format(4000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4500000"> R {{ number_format(4500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="5000000">
                                                    R {{ number_format(5000000, 0, ' ', ' ') }}</option>
                                                <option value="6000000"> R {{ number_format(6000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="7000000"> R {{ number_format(7000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="8000000"> R {{ number_format(8000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="9000000"> R {{ number_format(9000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="10000000"> R
                                                    {{ number_format(10000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="15000000"> R
                                                    {{ number_format(15000000, 0, ' ', ' ') }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="maxprice" id="maxprice_sale" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Max Price</option>
                                                <option value="100000"> R {{ number_format(100000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="150000"> R {{ number_format(150000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="200000"> R {{ number_format(200000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="250000"> R {{ number_format(250000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="300000"> R {{ number_format(300000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="350000"> R {{ number_format(350000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="400000"> R {{ number_format(400000, 0, ' ', ' ') }}
                                                </option>
                                                <option value=""> R {{ number_format(450000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="500000"> R {{ number_format(500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="700000"> R {{ number_format(700000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="800000"> R {{ number_format(800000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="900000"> R {{ number_format(900000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1000000"> R {{ number_format(1000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1250000"> R {{ number_format(1250000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1500000"> R {{ number_format(1500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="1750000"> R {{ number_format(1750000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2000000"> R {{ number_format(2000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="2500000"> R {{ number_format(2500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="3000000"> R {{ number_format(3000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="3500000"> R {{ number_format(3500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4000000"> R {{ number_format(4000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="4500000"> R {{ number_format(4500000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="5000000">
                                                    R {{ number_format(5000000, 0, ' ', ' ') }}</option>
                                                <option value="6000000"> R {{ number_format(6000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="7000000"> R {{ number_format(7000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="8000000"> R {{ number_format(8000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="9000000"> R {{ number_format(9000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="10000000"> R
                                                    {{ number_format(10000000, 0, ' ', ' ') }}
                                                </option>
                                                <option value="15000000"> R
                                                    {{ number_format(15000000, 0, ' ', ' ') }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select name="beds" class="form-select" id="beds_sale"
                                                aria-label="Default select example">
                                                <option value="">Beds</option>
                                                <option value="">Any</option>
                                                @for ($gr = 1; $gr <= 5; $gr++)
                                                    <option value="{{ $gr }}">{{ $gr }}+
                                                    </option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="single_select_buttons select_icon">
                                            <select id="bath_sale" name="bath" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Baths</option>
                                                <option value="">Any</option>
                                                @for ($hss = 1; $hss <= 5; $hss++)
                                                    <option value="{{ $hss }}">{{ $hss }}+
                                                    </option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="single_select_buttons">
                                            <button type="button" id="moreOptionButtonCommercial"
                                                class="search-btn">More filter +</button>
                                        </div>
                                        <div id="moreAdvanceOptionSerachCommercial" style="">
                                            <div class="single_select_buttons select_icon">
                                                <select id="garage_sale" name="garage" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Garage</option>
                                                    <option value="">Any</option>
                                                    @for ($kld = 1; $kld <= 5; $kld++)
                                                        <option value="{{ $kld }}">{{ $kld }}+
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="single_select_buttons select_icon">
                                                <select name="prkng" id="prkng_sale" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Parking</option>
                                                    <option value="">Any</option>
                                                    @for ($klse = 1; $klse <= 5; $klse++)
                                                        <option value="{{ $klse }}">{{ $klse }}+
                                                        </option>
                                                    @endfor

                                                </select>
                                            </div>
                                            <div class="single_select_buttons select_icon">
                                                <select name="fminsize" id="fminsize_sale" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Floor Min Size (m²)</option>
                                                    <option value="20"> 20</option>
                                                    <option value="40"> 40</option>
                                                    <option value="60"> 60</option>
                                                    <option value="80"> 80</option>
                                                    <option value="100"> 100</option>
                                                    <option value="150"> 150</option>
                                                    <option value="200"> 200</option>
                                                    <option value="250"> 250</option>
                                                    <option value="300"> 300</option>
                                                    <option value="350"> 350</option>
                                                    <option value="400"> 400</option>
                                                    <option value="450"> 450</option>
                                                    <option value="500"> 500</option>
                                                </select>
                                            </div>
                                            <div class="single_select_buttons select_icon">
                                                <select name="fmaxsize" id="fmaxsize_sale" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">Floor Max Size (m²)</option>
                                                    <option value="20"> 20</option>
                                                    <option value="40"> 40</option>
                                                    <option value="60"> 60</option>
                                                    <option value="80"> 80</option>
                                                    <option value="100"> 100</option>
                                                    <option value="150"> 150</option>
                                                    <option value="200"> 200</option>
                                                    <option value="250"> 250</option>
                                                    <option value="300"> 300</option>
                                                    <option value="350"> 350</option>
                                                    <option value="400"> 400</option>
                                                    <option value="450"> 450</option>
                                                    <option value="500"> 500</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <input type="hidden" id="citysaledata" name="citysaledata" />
                                <div class="recent-search-view">
                                    <div class="recent-search d-flex align-items-center">
                                        <p>Recent Search: </p>
                                        <div class="searches">
                                            @if (!empty($searchResultCookieForSale))
                                                @for ($ars = 0; $ars < count($searchResultCookieForSale); $ars++)
                                                    <span class="badge"><a
                                                            href="{{ $searchResultCookieForSale[$ars]['link'] }}"
                                                            style="color:#222222">{{ $searchResultCookieForSale[$ars]['name'] }}</a></span>
                                                @endfor
                                            @else
                                                <span class="badge">no recent search</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--property tab section-->


            </div>


            @if ($setting->display_banner == 1)
                @if ($setting->banner_image)
                    <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                        <img class="w-100 img-fluid"
                            src="{{ asset('storage/banner_image/' . $setting->banner_image) }}" loading="lazy"
                            alt="property" onclick="window.open('{{ $setting->banner_link }}','_blank')"
                            style="cursor:pointer">
                    </div>
                @endif
            @else
                <style>
                    .contact-form {
                        background-color: #bfd630;
                        padding: 13px;
                        border-radius: 10px;
                        width: 322px;
                        margin: 0 auto;
                        margin-top: 50px;
                    }

                    .contact-form input,
                    .contact-form textarea {
                        background-color: #fff;
                        color: #666;
                        margin-bottom: 10px;
                        border: none;
                        border-radius: 5px;
                        padding: 10px;
                        width: 100%;
                    }

                    .contact-form label {
                        color: #fff;
                    }

                    .contact-form button {
                        background-color: var(--theme-color_2);
                        /* Match the button color */
                        border: none;
                        padding: 10px;
                        color: #fff;
                        width: 100%;
                        border-radius: 5px;
                    }
                </style>
                <div class="contact-form">
                    <h3 class="text-center text-white">Quick Contact</h3>
                    <form action="{{ route('contactus') }}" method="post" id="trafalgar_contactus">
                        @csrf
                        <input type="hidden" class="form-control" id="formMain" name="formMain"
                            placeholder="formMain" value="Homepage" required>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <!--<label for="name">Name <span style="color: red;">*</span></label>-->

                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name *" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <!--<label for="name">Email <span style="color: red;">*</span></label>-->

                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <!--<label for="name">phone <span style="color: red;">*</span></label>-->

                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Telephone *" required>
                        </div>
                        <div class="form-group mb-3">
                            <!--<label for="comment_or_question">Your comment or question <span style="color: red;">*</span></label>-->
                            <textarea required type="text" class="form-control" id="comment_or_question" rows="3"
                                placeholder="Message * " name="comment_or_question"></textarea>
                        </div>
                        <!--<button type="submit" class="m-0">Send message</button>-->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        
                        <br/>
                        <input type="submit" value="Send message">
                    </form>
                </div>
            @endif
        </div>
    </div>
  
  
</section>
<script src="https://www.google.com/recaptcha/api.js?render=6LcxV28rAAAAAM_v-2wPlg8TSyl862BRtrKhjtJS"></script>

<script>
    document.getElementById('trafalgar_contactus').addEventListener('submit', function (e) {
        e.preventDefault();
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcxV28rAAAAAM_v-2wPlg8TSyl862BRtrKhjtJS', { action: 'contact_us' }).then(function (token) {
                document.getElementById('g-recaptcha-response').value = token;
                e.target.submit();
            });
        });
    });
</script>
