@extends('layouts.front')

@section('content')
    
    
    <!-- page section  -->

    <section class="guldenland_section mt-5">
        <div class="container">
         
            <div class="guldenland_products">
                <div class="guldenland_products_listing">
                    
                   
                       <h1 class="entry-title">Contractors – Thank you</h1>
                            

            
                  <p>Thank you for completing our form.</p>
<p>We will be in touch shortly.</p>
                  
                    
               
                </div>
                <div class="guldenland_sidebar">
                   
                    <div class="property_alert">
                        <div class="e-magazine-right-content">
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/alert.png') }}" alt="Alert">
                                </div>
                                <div class="magazine-content">
                                    <h4>Property Alerts</h4>
                                    <p>Sign up for your customised property alerts delivered
                                        directly to your inbox.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/property.png') }}" alt="Property">
                                </div>
                                <div class="magazine-content">
                                    <h4>List Your Property</h4>
                                    <p>List to sell your property with the help of our qualified
                                        real estate professionals.</p>
                                </div>
                            </div>
                            <div class="each-magazine">
                                <div class="icon-div">
                                    <img class="img-fluid" src="{{ asset('front/images/valuation.png') }}" alt="Valuation">
                                </div>
                                <div class="magazine-content">
                                    <h4>Free Valution</h4>
                                    <p>Request a free property valuation from one of our real
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
