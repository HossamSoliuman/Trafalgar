@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-to-rent-by-area')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section about_top_banner">
        <div class="jobbanner-text">
            <h1>Property To Rent By Area</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="heading">
                <div class="manage-paragraph text-justify">
                    <p>For added convenience, we have arranged our property rental listings into suburb pages, with links below to the regions and suburbs with the highest vacancy count. All rental properties within the suburb link are conveniently collated to quickly see the stock on offer. For any other suburbs not appearing, please use the <a href="{{ route('rent') }}">property to rent search engine</a> which will give other property rental options. Thank you for your interest and we hope that you will quickly identify rental properties of interest to view; our letting agents are on standby to assist with viewings and any other advice you may require.</p>
                </div>
            </div>
            
            <div class="property-area">
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-cape-town-1.jpg" src="{{ asset('storage/rent-area/area-cape-town-1.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>

                            <li><a href="{{  route('cape-town.property-to-rent-cbd-cape-town') }}">Cape Town CBD</a></li>
                            <li><a href="{{  route('cape-town.property-to-rent-atlantic-seaboard') }}">Atlantic Seaboard</a></li>
                            <li><a href="{{  route('cape-town.property-to-rent-southern-suburbs') }}">SouthernSuburbs</a></li>
                            <li><a href="{{  route('cape-town.property-to-rent-somerset-west') }}">Somerset West</a></li>
                            <li><a href="{{  route('cape-town.property-to-rent-northern-suburbs') }}">Northern Suburbs</a></li>
                        </ul>
                    </div>
                    <h2>CAPE TOWN</h2>
                </div>
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-durban.jpg"   src="{{ asset('storage/rent-area/area-durban.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>
                        

                            <li><a href="{{  route('durban.property-to-rent-berea') }}">Berea</a></li>
                            <li><a href="{{  route('durban.property-to-rent-durban-central') }}">Durban City</a></li>
                           <li><a href="{{  route('durban.property-to-rent-golden-mile') }}">Golden Mile</a></li>
                            <li><a href="{{  route('durban.property-to-rent-pinetown') }}">Pinetown</a></li>
                            <li><a href="{{  route('durban.property-to-rent-umhlanga') }}">Umhlanga</a></li>
                        </ul>
                    </div>
                    <h2>DURBAN</h2>
                </div>
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-east-london.jpg" src="{{ asset('storage/rent-area/area-east-london.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>
  
                            <li><a href="{{  route('east-london.property-to-rent-southernwood') }}">Southernwood</a></li>
                            <li><a href="{{  route('east-london.property-to-rent-quigney') }}">Quigney</a></li>
                            <li><a href="{{  route('east-london.property-to-rent-beacon-bay') }}">Beacon Bay</a></li>
                            <li><a href="{{  route('east-london.property-to-rent-gonubie') }}">Gonubie</a></li>
                            <li><a href="{{  route('east-london.property-to-rent-nahoon') }}">Nahoon</a></li>
                        </ul>
                    </div>
                    <h2>EAST LONDON</h2>
                </div>
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-jhb-sandton.jpg" src="{{ asset('storage/rent-area/area-jhb-sandton.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>
   
                            <li><a href="{{  route('johannesburg.property-to-rent-sandton') }}">Sandton</a></li>
                            <li><a href="{{  route('johannesburg.property-to-rent-modderfontein') }}">Modderfontein</a></li>
                            <li><a href="{{  route('johannesburg.property-to-rent-midrand') }}">Midrand</a></li>
                            <li><a href="{{  route('johannesburg.sandton.property-to-rent-fourways') }}">Fourways</a></li>
                            <li><a href="{{  route('johannesburg.property-to-rent-bedfordview') }}">Bedfordview</a></li>
                        </ul>
                    </div>
                    <h2>JOHANNEBSURG</h2>
                </div>
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-johannesburg.jpg" src="{{ asset('storage/rent-area/area-johannesburg.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>
  
                            <li><a href="{{  route('johannesburg.property-to-rent-yeoville') }}">Yeoville</a></li>
                            <li><a href="{{  route('johannesburg.property-rent-in-hillbrow-berea') }}">Hillbrow / Berea</a></li>
                            <li><a href="{{  route('johannesburg.property-to-rent-braamfontein') }}">Braamfontein</a></li>
                            <li><a href="{{  route('johannesburg.property-rent-in-joubert-park') }}">Joubert Park</a></li>
                        </ul>
                    </div>
                    <h2>JOHANNESBURG CBD</h2>
                </div>
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-port-elizabeth.jpg" src="{{ asset('storage/rent-area/area-port-elizabeth.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>
                           
                            <li><a href="{{  route('portelizabeth.property-to-rent-summerstrand') }}">Summerstrand</a></li>
                            <li><a href="{{  route('portelizabeth.property-to-rent-kabega-park') }}">Kabega</a></li>
                            <li><a href="{{  route('portelizabeth.property-to-rent-westering') }}">Westring</a></li>
                            <li><a href="{{  route('portelizabeth.property-to-rent-central') }}">Central</a></li>
                            <li><a href="{{  route('portelizabeth.property-to-rent-lorraine') }}">Lorraine</a></li>
                        </ul>
                    </div>
                    <h2>PORT ELIZABETH</h2>
                </div>
                <div class="each-property-area">
                    <div class="img-title">
                        <img alt="area-pretoria.jpg" src="{{ asset('storage/rent-area/area-pretoria.jpg') }}" />
                    </div>
                    <div class="area-cities">
                        <ul>
                                          
                            <li><a href="{{  route('pretoria.property-to-rent-pretoria-north') }}">Pretoria North</a></li>
                            <li><a href="{{  route('pretoria.property-to-rent-pretoria-east') }}">Pretoria East</a></li>
                            <li><a href="{{  route('pretoria.property-to-rent-moot') }}">Moot Area</a></li>
                            <li><a href="{{  route('pretoria.property-to-rent-centurion') }}">Centurion Area</a></li>
                            <li><a href="{{  route('pretoria.property-to-rent-arcadia') }}">Arcadia Area</a></li>
                        </ul>
                    </div>
                    <h2>PRETORIA</h2>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
