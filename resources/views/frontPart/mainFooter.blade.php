 <section class="main_footer">
        <div class="container">
            <div class="footerlogo_socialicon">
                <img class="footer_logo" src="{{ asset('front/images/footer-logo.webp')}}" alt="logo">
                <ul>
                    <li><a href="<?php if($setting->facebook_link){ echo $setting->facebook_link; }else{ echo "#"; } ?>" target="_blank"><img src="{{ asset('front/images/facebook.webp')}}" alt="facebook"></a></li>
                    <li><a href="<?php if($setting->instagram_link){ echo $setting->instagram_link; }else{ echo "#"; } ?>" target="_blank"><img src="{{ asset('front/images/insta.webp')}}" alt="insta"></a></li>
                    <li><a href="<?php if($setting->twitter_link){ echo $setting->twitter_link; }else{ echo "#"; } ?>" target="_blank"><img src="{{ asset('front/images/twitter.webp')}}" alt="twitter"></a></li>
                    <li><a href="<?php if($setting->linkedin_link){ echo $setting->linkedin_link; }else{ echo "#"; } ?>" target="_blank"><img src="{{ asset('front/images/linked.webp')}}" alt="linked"></a></li>
                    <li><a href="<?php if($setting->youtube_link){ echo $setting->youtube_link; }else{ echo "#"; } ?>" target="_blank"><img src="{{ asset('front/images/youtube.webp')}}" alt="youtube"></a></li>
                </ul>
            </div>
            <div class="row m-0">
                <div class="col-md-6 col-lg-3">
                    <div class="footer_main_content">
                        <h5>TRAFALGAR PROPERTY</h5>
                        <div class="content_list">
                            <ul>
                                <li><a href="{{ route('/') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About us</a></li>
                                <li><a href="{{ route('agent-search') }}">Agent Search</a></li>
                                <li><a href="{{ route('property-management.sectional-title-and-hoa-management.developer-services') }}">Developer Services</a></li>
                                <li><a href="{{ route('jobs') }}">Career Opportunities</a></li>
                                <li><a href="https://news.trafalgar.co.za/">Blog</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_main_content">
                        <h5>I’m Interested In</h5>
                        <div class="content_list">
                            <ul>
                                <li><a href="{{ route('rent') }}">Renting My House</a></li>
                                <li><a href="{{ route('manage') }}">Selling My House </a></li>
                                <li><a href="{{ route('manage') }}">Property Management Services </a></li>
                                <li><a href="{{ route('insure') }}">Property Insurance </a></li>
                                <li><a href="{{ route('finance') }}">Property Finance</a></li>
                                 <li><a href="{{ route('contact-us') }}">Making Contact</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_main_content">
                        <h5>Popular Property Search</h5>
                      
                        <div class="content_list">
                            <ul>
                          
                                <li><a href="{{ route('property-to-rent-by-area') }}">Property To Rent by Area</a></li>
                               @php
                               $popularPropertyLink = ['Cape Town','Johannesburg','Midrand','Durban','Pretoria','Port Elizabeth','East London'];
                               for($r=0; $r < count($popularPropertyLink)-1; $r++ ){
                               
                            $sqlQuery = \App\Models\EntegralApiData::select('*')->where('town',$popularPropertyLink[$r])->where('mandate_saletype','for rent')->first();
                         if(isset($sqlQuery)){
                            $suburb_pserach  = str_replace(" ","-",$sqlQuery->suburb);
                            $town_pserach  = str_replace(" ","-",$sqlQuery->town);
                            $province_pserach  = str_replace(" ","-",$sqlQuery->province);
                       @endphp
                       
                         @if($sqlQuery->mandate_saletype == 'for rent')  
                               @php   $mandate_saletype_pserach= 'to-rent';
                                $mandate_saletype_pserach_text= 'To Rent';
                               @endphp
                                @else
                                  @php   $mandate_saletype_pserach = 'for-sale';
                                    $mandate_saletype_pserach_text= 'To Sale';
                                  @endphp 
                                @endif
                                
                                @php
                                 
                                 $customUrl_pserach = route($mandate_saletype_pserach,['url_city'=>$suburb_pserach,'url_town'=>$town_pserach,'url_province'=>$province_pserach,'city'=>$sqlQuery->town]); 
                             @endphp
                             @if($sqlQuery->town == 'Midrand')
                               <li><a href="{{ route('johannesburg.property-to-rent-midrand') }}">Property {{ $mandate_saletype_pserach_text }} {{ $sqlQuery->town }}</a></li>
                             @else
                             <li><a href="{{ $customUrl_pserach }}">Property {{ $mandate_saletype_pserach_text }} {{ $sqlQuery->town }}</a></li>
                             @endif
                             @php
                             }
}
                               
                               
                               
                               @endphp
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_main_content">
                        <h5>General Info</h5>
                        <div class="content_list d-flex justify-content-between">
                            <ul>
                                <li><a href="{{ route('useful-links') }}">Useful Links</a></li>
                                 <li><a href="{{ route('privacy-policy') }}">Privacy Policy </a></li>
                                  <li><a href="{{ asset('storage/brochure/Supplier-Privacy-Policy.pdf') }}" target="_blank">Supplier Privacy Policy</a></li>
                                  
                                   <li><a href="{{ asset('storage/brochure/Trafalgar-Property-Management-Pty-Ltd-PAIA-Manual.pdf') }}" target="_blank">PAIA Manual – TPM</a></li>
                                    <li><a href="{{ asset('storage/brochure/Trafalgar-Financial-Services-Pty-Ltd-PAIA-Manual.pdf') }}" target="_blank">PAIA Manual – TFS</a></li>
                                     <li><a href="{{ asset('storage/brochure/PAIAForms.pdf') }}" target="_blank">PAIA Forms</a></li>
                                    
                                  <!--front/pdf/Supplier-Privacy-Policy.pdf-->
                                  <!--<li><a href="{{ asset('front/pdf/Supplier-Privacy-Policy.pdf') }}" target="_blank">Supplier Privacy Policy</a></li>-->
                                <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                                 <li><a href="{{ route('terms-conditions') }}">Terms Conditions</a></li>
                               
                                <!--<li><a href="https://sacoronavirus.co.za" target="_blank">Covid-19</a></li>-->
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>