@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','contact-us')->first(); @endphp

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
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <section class="contact_section">
        <div class="container">
            <div class="contact_content text-center">
                <h5>Our National Share Call Number is: <a style="color:#222222;" href="tel:0861 66 44 44">0861 66 44 44</a>
                </h5>
                <p style="margin-top: 5px;">or Email: <a style="color:#222222;"
                        href="mailto:info@trafalgar.co.za">info@trafalgar.co.za</a> </p>
                <h1>Branch Information</h1>
                <p class="m-0">For branch address and contact details please select the required regional branch:</p>
                <a style="color:#6e0d16;" href="#maintenance_form_view_div">Click here to complete our contact form</a>
            </div>

            <div class="tabs_section">
                <div class="container">
                    <div class="tab">

                        <div class="tab__list">
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'cape-town') {
                                echo 'is--active';
                            } ?>">Cape Town</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'durban') {
                                echo 'is--active';
                            } ?> ">Durban</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'east-london') {
                                echo 'is--active';
                            } ?>">East London</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'johannesburg') {
                                echo 'is--active';
                            } ?>">Johannesburg</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'cape-town') {
                                echo 'is--active';
                            } ?>">Estate Offices</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'knysna') {
                                echo 'is--active';
                            } ?>">Knysna</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'port-elizabeth') {
                                echo 'is--active';
                            } ?>">Port Elizabeth</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'pretoria') {
                                echo 'is--active';
                            } ?> ">Pretoria</div>
                            <div class="tab__item <?php if (isset($_GET['office']) && $_GET['office'] == 'cape-town') {
                                echo 'is--active';
                            } ?> ">Trafalgar Financial Services</div>
                        </div>

                        <div class="tab__content">
                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                    <div class="tab__item">Table View</div>
                                </div>
                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:ct@trafalgar.co.za">ct@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>Unit 12 M5 PARK Eastman Road <br /> Maitland Cape Town
                                                            7405</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 847 Maitland 7405</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:021 410 5500">021 410 5500</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:071 204 7492">071 204 7492</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>33.92911 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>018.48054 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13241.713663443321!2d18.4809944!3d-33.9301077!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7309076fedc2ac08!2sM5%20Park!5e0!3m2!1sen!2sin!4v1647924986292!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="tab__content-item">
                                    <div class="addresses_head wineland">
                                        <div class="addresses">
                                            <div class="each_address">
                                                <span class="icon-envelope contact-icons"></span>
                                                <p>
                                                    <span>Email Address:</span>
                                                    <span><a href="mailto:stb@trafalgar.co.za">stb@trafalgar.co.za</a></span>
                                                </p>
                                            </div>
                                            <div class="each_address">
                                                <span class="icon-home contact-icons"></span>
                                                <p>
                                                    <span>Physical Address:</span>
                                                    <span>20 on Krige Krige Street <br /> Stellenbosch 7600</span>
                                                </p>
                                            </div>
                                            <div class="each_address">
                                                <span class="icon-home contact-icons"></span>
                                                <p>
                                                    <span>Postal Address:</span>
                                                    <span>P.O. Box 2847 Cape Town 8000</span>
                                                </p>
                                            </div>
                                            <div class="each_address">
                                                <span class="icon-phone contact-icons"></span>
                                                <p>
                                                    <span>Tel:</span>
                                                    <span><a href="tel:021 882 8686">021 882 8686</a></span>
                                                </p>
                                            </div>
                                            <div class="each_address">
                                                <span class="icon-phone contact-icons"></span>
                                                <p>
                                                    <span>Afterhours emergencies:</span>
                                                    <span><a href="tel:071 204 7492">071 204 7492</a></span>
                                                </p>
                                            </div>
                                            <div class="each_address">
                                                <span class="icon-map contact-icons"></span>
                                                <p>
                                                    <span>Latitude:</span>
                                                    <span>-33.940052 S</span>
                                                </p>
                                                <br />
                                                <p>
                                                    <span>Longitude:</span>
                                                    <span>18.856677 E</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="address_map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13240.17355551827!2d18.85652225252034!3d-33.94001213464686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1647925073643!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div> --}}
                                    <div class="tab__content-item">
                                        <div class="addresses_head table-view">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:tableview@trafalgar.co.za">tableview@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>169 Blaauwberg Road Table View <br /> Cape Town 7441</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>169 Blaauwberg Road Table View <br /> Cape Town 7441</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:021 556 2780">021 556 2780</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:071 204 7492">071 204 7492</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>-33.827420 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>18.500270 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13257.626143499996!2d18.50019762214043!3d-33.82762509329675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1647925111238!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                    <div class="tab__item">Ballito</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:durban@trafalgar.co.za">durban@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>141 K E Masinga (Old Fort) Road <br /> Durban 4001</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 3964 Durban 4000</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:031 301 7017">031 301 7017</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:061 336 9581">061 336 9581</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>29.852228 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>31.023540 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.4176109634373!2d31.021351315110607!3d-29.852227981952606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9cf0cb959f9%3A0xb0139966d8e8e8f1!2s141%20KE%20Masinga%20Rd%2C%20Durban%20Central%2C%20Durban%2C%204001%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1647925145881!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__content-item">
                                        <div class="addresses_head ballito">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:durban@trafalgar.co.za">durban@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>Izulu Office Park Rey’s Place <br /> Ballito Office A101
                                                            4399</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 3964 Durban 4000</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:087 354 9035">087 354 9035</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:061 336 9581">061 336 9581</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>-29.528721 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>31.203883 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13886.303228404446!2d31.2038828!3d-29.5287213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1af882b8c5718665!2sIzulu%20Office%20Park!5e0!3m2!1sen!2sin!4v1647925172926!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                    <div class="tab__item">Gonubie</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:el@trafalgar.co.za">el@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>9 Vincent Road, Vincent,<br/> East London 5247</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 19622 Tecoma 5214</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:043 726 6066">043 726 6066</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:078 819 7026">078 819 7026</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>32.984692 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>27.904071 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                                src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=9%20Vincent%20Road,%20Vincent,%20East%20London%205247+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__content-item">
                                        <div class="addresses_head gonubie">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:elreception@trafalgar.co.za">elreception@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>9 Vincent Road, Vincent,<br/> East London 5247</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 19622 Tecoma 5214</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:043 912 0100">043 912 0100</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:083 267 5317">083 267 5317</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>-32.961730 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>27.915580 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                                src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=9%20Vincent%20Road,%20Vincent,%20East%20London%205247+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:jhb@trafalgar.co.za">jhb@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>74 St Andrew Street <br /> Birdhaven 2196</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 782813 Sandton 2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:011 214 5200">011 214 5200</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:083 460 9777">083 460 9777</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>26.136975 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>28.058186 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.8245234141345!2d28.056098615028656!3d-26.137263883467675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950ce41526fa89%3A0x3abac678ca5c6ab9!2s74%20St%20Andrew%20St%2C%20Birdhaven%2C%20Johannesburg%2C%202196%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1647925234717!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>

                            </div>
                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Dainfern</div>
                                    <div class="tab__item">The Hills</div>
                                    <div class="tab__item">Waterfall Country Estate</div>
                                    <div class="tab__item">Waterfall Country Village</div>
                                    <div class="tab__item">Waterfall Hills Mature Lifestyle Estate</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head dainfern">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:dainfern@trafalgar.co.za">dainfern@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>Dainfern Homeowners Association 633 Gateside Avenue Dainfern
                                                            2050</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>C/O Trafalgar Property Management <br /> PO Box 782813 Sandton
                                                            2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:011 875 0401">011 875 0401</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>27.987041 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>-25.988202 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.378125394097!2d27.99519631502564!3d-25.98842808353434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x142bce906a4d07b%3A0xa9d97070cc16b206!2sDainfern%20Golf%20%26%20Residential%20Estate!5e0!3m2!1sen!2sin!4v1647925282073!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__content-item">
                                        <div class="addresses_head hills">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:thehills@trafalgar.co.za">thehills@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>The Hills Garsfontein Road <br /> Pretoria 0002</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>C/O Trafalgar Property Management <br /> PO Box 782813 Sandton
                                                            2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:071 674 3095">071 674 3095</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>28.36002 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>-25.872176 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3589.933120802138!2d28.3581987150233!3d-25.87167848358702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e955ccd2c903dad%3A0x3c29269ae683be94!2sPotentiality!5e0!3m2!1sen!2sin!4v1647925320443!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__content-item">
                                        <div class="addresses_head country-estate">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:waterfall@trafalgar.co.za">waterfall@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>Waterfall Country Estate Maxwell Drive Jukskei View Ext 19
                                                            Midrand 1685</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>C/O Trafalgar Property Management <br /> PO Box 782813 Sandton
                                                            2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:010 591 4671 / 4950">010 591 4671 /
                                                                4950</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>26.01’29,76 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>28.05’30.10 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14341.796808563158!2d28.0941099!3d-26.0188545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957218fbce76d7%3A0x5c983f852f1776f!2sWaterfall%20Country%20Estate%20-%20North!5e0!3m2!1sen!2sin!4v1647925345622!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__content-item">
                                        <div class="addresses_head country-village">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:waterfall@trafalgar.co.za">waterfall@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>Waterfall Country Estate Maxwell Drive Jukskei View Ext 53
                                                            Midrand 1685</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>C/O Trafalgar Property Management <br /> PO Box 782813 Sandton
                                                            2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:010 591 4671 / 4950">010 591 4671 /
                                                                4950</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>26,00’49.80 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>28.05’45.05 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.6209926417773!2d28.09361981502617!3d-26.01323008352328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9571f6140bfef9%3A0xa54c9d9221fb9b27!2sGate%204%20Waterfall%20Country%20Village!5e0!3m2!1sen!2sin!4v1647925360589!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__content-item">
                                        <div class="addresses_head lifestyle-estate">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:shauns@trafalgar.co.za">shauns@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>Waterfall Country Estate Waterfall Hills 2 <br /> Waterfall
                                                            Lane Sunninghill 2191</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>C/O Trafalgar Property Management <br /> PO Box 782813 Sandton
                                                            2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:011 260 6800">011 260 6800</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>26,01’10.8552 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>28.05’19.2336 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3585.2330991596323!2d28.0840156!3d-26.0259281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9572236eb54885%3A0x6bc5a5b981062ba4!2sWaterfall%20Hills%20Mature%20lifestyle%20Estate!5e0!3m2!1sen!2sin!4v1647925394979!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:knysna@trafalgar.co.za">knysna@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>4 Quayside Office Park
                                                            </br>
                                                            Corner Gordon and Hedge Roads
                                                            </br>
                                                            Knysna</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 373 Knysna 6570</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:044 382 6230">044 382 6230</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Fax:</span>
                                                        <span><a href="tel:044 382 6450">044 382 6450</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>-34.03954 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>23.04448 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.369565389473!2d23.04227131521456!3d-34.034389980610804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e78ea891f7432d5%3A0x2090b7318de7c5b4!2s48%20Main%20Rd%2C%20Rexford%2C%20Knysna%2C%206571%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1647925409468!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                    <!--<div class="tab__item">Port Elizabeth Central</div>-->
                                    <div class="tab__item">Jeffrey's Bay</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:pe@trafalgar.co.za">pe@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>2 Ascot Road Mill Park <br /> Port Elizabeth 6001</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 34823 Newton Park 6055</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:041 365 6840">041 365 6840</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:063 282 5139">063 282 5139</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>-33.955150 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>25.5883 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3309.458272520207!2d25.5886793!3d-33.9550588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e7ad23685a3dddb%3A0x24ed4b1f2bfabfdf!2s2%20Ascot%20Rd%2C%20Mill%20Park%2C%20Gqeberha%2C%206001%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1647925433121!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="tab__content-item">-->
                                    <!--    <div class="addresses_head elizabeth-central">-->
                                    <!--        <div class="addresses">-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-envelope contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Email Address:</span>-->
                                    <!--                    <span><a href="mailto:peletting@trafalgar.co.za">peletting@trafalgar.co.za</a></span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-home contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Physical Address:</span>-->
                                    <!--                    <span>2 Parliament Street Central <br /> Port Elizabeth 6001</span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-home contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Postal Address:</span>-->
                                    <!--                    <span>2 Parliament Street Central <br /> Port Elizabeth 6001</span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-phone contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Tel:</span>-->
                                    <!--                    <span><a href="tel:041 125 0150/2">041 125 0150/2</a></span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-phone contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Cell:</span>-->
                                    <!--                    <span><a href="tel:061 501 5110">061 501 5110</a></span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-phone contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Afterhours emergencies:</span>-->
                                    <!--                    <span><a href="tel:063 511 8554">063 511 8554</a></span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--            <div class="each_address">-->
                                    <!--                <span class="icon-map contact-icons"></span>-->
                                    <!--                <p>-->
                                    <!--                    <span>Latitude:</span>-->
                                    <!--                    <span>33.961968 S</span>-->
                                    <!--                </p>-->
                                    <!--                <br />-->
                                    <!--                <p>-->
                                    <!--                    <span>Longitude:</span>-->
                                    <!--                    <span>25.614083 E</span>-->
                                    <!--                </p>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div id="address_map">-->
                                    <!--            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13236.79399132782!2d25.61688882243363!3d-33.96173720215031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1647925466624!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="tab__content-item">
                                        <div class="addresses_head jeffrey-bay">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:pe@trafalgar.co.za">pe@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>17 Da Gama Road <br /> Jeffreys Bay 6330</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>17 Da Gama Road <br /> Jeffreys Bay 6330</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:041 365 6840">041 365 6840</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:063 5118 554">063 5118 554</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>-34.054540 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>24.922800 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13222.365888150556!2d24.9225991!3d-34.0543491!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e7af8b497937ab9%3A0x569124b201afca8a!2s17%20Da%20Gama%20Rd%2C%20Jeffreys%20Bay%2C%206330%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1647925490686!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab__content-item tab">
                                <div class="tab__list">
                                    <div class="tab__item">Regional Head Office</div>
                                </div>

                                <div class="tab__content">
                                    <div class="tab__content-item">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:pta@trafalgar.co.za">pta@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>829 Stanza Bopape Street <br /> Arcadia 0083</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 14122 Hatfield <br /> Pretoria 0028</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:012 326 5963">012 326 5963</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:0647035923">064 703 5923</a></span>
                                                    </p>
                                                </div>                                                
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>25.744590 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>28.221302 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14375.201722721287!2d28.22122636619208!3d-25.74411250151264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1647925521388!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab__content-item">
                                <div class="tab__content">
                                    <div class="tab__content-item1">
                                        <div class="addresses_head regional">
                                            <div class="addresses">
                                                <div class="each_address">
                                                    <span class="icon-envelope contact-icons"></span>
                                                    <p>
                                                        <span>Email Address:</span>
                                                        <span><a
                                                                href="mailto:tfs@trafalgar.co.za">tfs@trafalgar.co.za</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Physical Address:</span>
                                                        <span>74 St Andrew Street <br /> Birdhaven 2196</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-home contact-icons"></span>
                                                    <p>
                                                        <span>Postal Address:</span>
                                                        <span>P.O. Box 782813 <br /> Sandton 2146</span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Tel:</span>
                                                        <span><a href="tel:011 214 5200">011 214 5200</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-phone contact-icons"></span>
                                                    <p>
                                                        <span>Afterhours emergencies:</span>
                                                        <span><a href="tel:072 972 0812">072 972 0812</a></span>
                                                    </p>
                                                </div>
                                                <div class="each_address">
                                                    <span class="icon-map contact-icons"></span>
                                                    <p>
                                                        <span>Latitude:</span>
                                                        <span>26.136975 S</span>
                                                    </p>
                                                    <br />
                                                    <p>
                                                        <span>Longitude:</span>
                                                        <span>28.058186 E</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="address_map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.8245234141345!2d28.056098615028656!3d-26.137263883467675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950ce41526fa89%3A0x3abac678ca5c6ab9!2s74%20St%20Andrew%20St%2C%20Birdhaven%2C%20Johannesburg%2C%202196%2C%20South%20Africa!5e0!3m2!1sen!2sin!4v1647925544646!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="maintenance_form_view" id="maintenance_form_view_div">
            <div class="management_form">
                <h2>Contact Us</h2>
                <style>
                    .text-error{
                       color:red;
                       font-size:14px;
                    }
                </style>
                <form action="{{ route('contactus') }}" method="post" id="trafalgar_contactus">

                    @csrf
                    <div class="maintenance_form_inner">
                        <div class="field_row">
                            <div class="form-group">
                                <label for="name">Name<span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                @error('name')
                                    <span class="text-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field_row">
                            <div class="form-group">
                                <label for="email">Email:<span>*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                @error('email')
                                    <span class="text-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:<span>*</span></label>
                                <input type="number" class="form-control" id="phone" name="phone" required>
                                @error('phone')
                                    <span class="text-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field_row">
                            <div class="form-group">
                                <label for="branches_email">Which branch would you like to contact? <span>*</span></label>

                                <select class="form-control" id="branches_email" name="branches_email" required>
                                    <option value="ct@trafalgar.co.za">Cape Town</option>
                                    <option value="durban@trafalgar.co.za">Durban</option>
                                    <option value="el@trafalgar.co.za">East London</option>
                                    <option value="jhb@trafalgar.co.za">Johannesburg</option>
                                    <option value="dainfern@trafalgar.co.za">Dainfern</option>
                                    <option value="thehills@trafalgar.co.za">The Hills</option>
                                    <option value="waterfall@trafalgar.co.za">Waterfall Country Estate</option>
                                    <option value="waterfall@trafalgar.co.za">Waterfall Country Village</option>
                                    <option value="shauns@trafalgar.co.za">Waterfall Hills Mature Lifestyle</option>
                                    <option value="knysna@trafalgar.co.za">Knysna</option>
                                    <option value="pe@trafalgar.co.za">Port Elizabeth</option>
                                    <option value="pta@trafalgar.co.za">Pretoria</option>
                                    <option value="tfs@trafalgar.co.za">Trafalgar Financial Services</option>
                                </select>
                                @error('branches_email')
                                    <span class="text-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field_row">
                            <div class="form-group">
                                <label for="city">City:<span>*</span></label>
                                <input type="text" class="form-control" id="city" name="city" required>
                                @error('city')
                                    <span class="text-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Preferred method of contact</label>
                                <div class="radio-group">
                                    <span>
                                        <input type="radio" id="p_phone" name="method_of_contact" value="phone">
                                        <label for="p_phone">Phone</label>
                                    </span>
                                    <span>
                                        <input type="radio" value="email" id="p_email" name="method_of_contact">
                                        <label for="p_email">Email</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="field_row">
                            <div class="form-group">
                                <label for="time_to_call">Preferred time to be called<span>*</span></label>
                                <input type="text" class="form-control" id="time_to_call" name="time_to_call"
                                   required >
                                @error('time_to_call')
                                    <span class="text-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="field_row">
                            <div class="form-group">
                                <label for="comment_or_question">Comments or Questions</label>
                                <textarea required type="text" class="form-control" id="comment_or_question" rows="3"
                                    name="comment_or_question"></textarea>
                            </div>
                        </div>
                        <div style="display:none;">
                          <label for="website">Website</label>
                          <input type="text" id="website" name="website" autocomplete="off">
                        </div>

                        <div class="form-group">

                           
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>
                         <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <button type="submit" class="m-0 form-control">Send message</button>
                    </div>

                </form>
               
            </div>
        </div>
        </div>
    </section>


    <!-- page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

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

    <!-- copyright section  -->
@endsection
