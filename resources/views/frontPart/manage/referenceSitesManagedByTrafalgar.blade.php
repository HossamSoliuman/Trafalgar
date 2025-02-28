@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','property-management.sectional-title-and-hoa-management.sectional-title-hoa.reference-sites-managed-by-trafalgar')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <div class="breadcrumbs">
      <div class="container">
          <ul></ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
             <div class="heading h1_tag mb-4">
               <h1>Reference Sites Managed By Trafalgar</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section1">
                        <div class="city_table">
                            <h5>JOHANNESBURG</h5>
                            <table class="table table-striped table-bordered table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Building</th>
                                  <th scope="col">Units</th>
                                  <th scope="col">Area</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Waterfall Country Estate</td>
                                  <td>2052</td>
                                  <td>Midrand</td>
                                </tr>
                                <tr>
                                  <td>Dainfern HOA</td>
                                  <td>1236</td>
                                  <td>Dainfern</td>
                                </tr>
                                <tr>
                                  <td>The Hills HOA</td>
                                  <td>885</td>
                                  <td>Garsfontein</td>
                                </tr>
                                <tr>
                                  <td>Highlands Gate HOA</td>
                                  <td>458</td>
                                  <td>Dullstroom</td>
                                </tr>
                                <tr>
                                  <td>Olivedale Retirement Village</td>
                                  <td>418</td>
                                  <td>Randburg</td>
                                </tr>
                                <tr>
                                  <td>Cedar Creek HOA</td>
                                  <td>393</td>
                                  <td>Broadacres</td>
                                </tr>
                                <tr>
                                  <td>Strelitzia Body Corporate</td>
                                  <td>376</td>
                                  <td>Greenstone Hill</td>
                                </tr>
                                <tr>
                                  <td>Greenstone Gate BC</td>
                                  <td>368</td>
                                  <td>Greenstone Hill</td>
                                </tr>
                                <tr>
                                  <td>Milpark Mews</td>
                                  <td>342</td>
                                  <td>Milpark</td>
                                </tr>
                                <tr>
                                  <td>Bel Aire Body Corporate</td>
                                  <td>300</td>
                                  <td>Midrand</td>
                                </tr>
                                <tr>
                                  <td>Waterfall Hills Retirement Village</td>
                                  <td>274</td>
                                  <td>Midrand</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="each_manage_section1">
                        <div class="city_table">
                            <h5>PRETORIA</h5>
                            <table class="table table-striped table-bordered table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Building</th>
                                  <th scope="col">Units</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Blue Valley Golf & Country Estate HOA</td>
                                  <td>986</td>
                                </tr>
                                <tr>
                                  <td>Zambezi Country Estate</td>
                                  <td>726</td>
                                </tr>
                                <tr>
                                  <td>Savannah Country Estate HOA</td>
                                  <td>604</td>
                                </tr>
                                <tr>
                                  <td>Crescent Wood HOA</td>
                                  <td>274</td>
                                </tr>
                                <tr>
                                  <td>Valley View HOA</td>
                                  <td>245</td>
                                </tr>
                                <tr>
                                  <td>Villa Lucca Body Corporate</td>
                                  <td>240</td>
                                </tr>
                                <tr>
                                  <td>Hilltop Body Corporate</td>
                                  <td>192</td>
                                </tr>
                                <tr>
                                  <td>Brooklands Estate (Kosmosdal)</td>
                                  <td>121</td>
                                </tr>
                                <tr>
                                  <td>The Glades HOA</td>
                                  <td>74</td>
                                </tr>
                                <tr>
                                  <td>San Vincenzo HOA</td>
                                  <td>42</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="each_manage_section1">
                        <div class="city_table">
                            <h5>CAPE TOWN</h5>
                            <table class="table table-striped table-bordered table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Building</th>
                                  <th scope="col">Units</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Bordeaux</td>
                                  <td>276</td>
                                </tr>
                                <tr>
                                  <td>Big Bay Beach Club</td>
                                  <td>256</td>
                                </tr>
                                <tr>
                                  <td>Langezandt HOA</td>
                                  <td>199</td>
                                </tr>
                                <tr>
                                  <td>Durham Square</td>
                                  <td>147</td>
                                </tr>
                                <tr>
                                  <td>Thorniebrae</td>
                                  <td>140</td>
                                </tr>
                                <tr>
                                  <td>Sandown Crescent</td>
                                  <td>136</td>
                                </tr>
                                <tr>
                                  <td>Blouberg Heights</td>
                                  <td>128</td>
                                </tr>
                                <tr>
                                  <td>Waterfront Cascades</td>
                                  <td>100</td>
                                </tr>
                                <tr>
                                  <td>The Piazza</td>
                                  <td>98</td>
                                </tr>
                                <tr>
                                  <td>Twin Towers</td>
                                  <td>89</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="each_manage_section1">
                        <div class="city_table">
                            <h5>DURBAN</h5>
                            <table class="table table-striped table-bordered table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Building</th>
                                  <th scope="col">Units</th>
                                  <th scope="col">Area</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Kensington</td>
                                  <td>410</td>
                                  <td>Morningside</td>
                                </tr>
                                <tr>
                                  <td>Renaissance</td>
                                  <td>246</td>
                                  <td>Durban Beach Front</td>
                                </tr>
                                <tr>
                                  <td>Summersands</td>
                                  <td>246</td>
                                  <td>Durban</td>
                                </tr>
                                <tr>
                                  <td>Sabuti</td>
                                  <td>214</td>
                                  <td>Ballito</td>
                                </tr>
                                <tr>
                                  <td>Ocean View Villas</td>
                                  <td>199</td>
                                  <td>Port Edward</td>
                                </tr>
                                <tr>
                                  <td>The Ascots</td>
                                  <td>116</td>
                                  <td>Greyville</td>
                                </tr>
                                <tr>
                                  <td>Cabana Del Mar</td>
                                  <td>81</td>
                                  <td>Amanzimtoti</td>
                                </tr>
                                <tr>
                                  <td>Malindi</td>
                                  <td>74</td>
                                  <td>Umhlanga</td>
                                </tr>
                                <tr>
                                  <td>Kyalanga</td>
                                  <td>64</td>
                                  <td>Umhlanga</td>
                                </tr>
                                <tr>
                                  <td>Westville Junction</td>
                                  <td>51</td>
                                  <td>Westville Junction</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="each_manage_section1">
                        <div class="city_table">
                            <h5>EAST LONDON</h5>
                           <table class="table table-striped table-bordered table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Building</th>
                                  <th scope="col">Units</th>
                                  <th scope="col">Area</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Shamrock Sands</td>
                                  <td>127</td>
                                  <td>Beacon Bay</td>
                                </tr>
                                <tr>
                                  <td>Coral Beach Estate</td>
                                  <td>100</td>
                                  <td>Winterstrand</td>
                                </tr>
                                <tr>
                                  <td>Summerwoods HOA</td>
                                  <td>91</td>
                                  <td>Abbotsford</td>
                                </tr>
                                <tr>
                                  <td>Ascot Park</td>
                                  <td>84</td>
                                  <td>Beacon Bay</td>
                                </tr>
                                <tr>
                                  <td>Triple Point Moya</td>
                                  <td>72</td>
                                  <td>Beacon Bay</td>
                                </tr>
                                <tr>
                                  <td>Kenwick Close BC</td>
                                  <td>71</td>
                                  <td>Braelyn</td>
                                </tr>
                                <tr>
                                  <td>Silver Creek Estate</td>
                                  <td>66</td>
                                  <td>Abbotsford</td>
                                </tr>
                                <tr>
                                  <td>Palm Grove HOA</td>
                                  <td>65</td>
                                  <td>Gonubie</td>
                                </tr>
                                <tr>
                                  <td>Seaspray HOA</td>
                                  <td>56</td>
                                  <td>Gonubie</td>
                                </tr>
                                <tr>
                                  <td>The Village HOA</td>
                                  <td>44</td>
                                  <td>Kidds Beach</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="each_manage_section1">
                        <div class="city_table">
                            <h5>PORT ELIZABETH</h5>
                            <table class="table table-striped table-bordered table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Building</th>
                                  <th scope="col">Units</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Summer Dunes</td>
                                  <td>117</td>
                                </tr>
                                <tr>
                                  <td>North Riding Estate</td>
                                  <td>68</td>
                                </tr>
                                <tr>
                                  <td>River Estate</td>
                                  <td>63</td>
                                </tr>
                                <tr>
                                  <td>Kingsley Green</td>
                                  <td>50</td>
                                </tr>
                                <tr>
                                  <td>Hyde Park</td>
                                  <td>39</td>
                                </tr>
                                <tr>
                                  <td>The Grange</td>
                                  <td>39</td>
                                </tr>
                                <tr>
                                  <td>Waldorf Villas</td>
                                  <td>38</td>
                                </tr>
                                <tr>
                                  <td>Punta Del Mar</td>
                                  <td>36</td>
                                </tr>
                                <tr>
                                  <td>King’s Crest</td>
                                  <td>24</td>
                                </tr>
                                <tr>
                                  <td>Bugutan</td>
                                  <td>10</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
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

    <!-- page section  -->

    <!-- main footer section  -->

   @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
