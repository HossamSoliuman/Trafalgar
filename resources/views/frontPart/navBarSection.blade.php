<section class="header_section">
    <style>
        .site-menu.main-menu .visibleinmobileonly{display:none !important;}
    </style>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-2">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5">
                        <div class="d-flex mr-auto email-phone">
                            <a href="@if($setting->website_contact_no){{ str_replace(' ','','tel:'.$setting->website_contact_no) }}@endif" class="d-flex align-items-center mr-4">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">
                                @if($setting->website_contact_no) {{ $setting->website_contact_no }} @endif
                                </span>
                            </a>
                            <a href="@if($setting->website_email) {{ 'mailto:'.$setting->website_email }} @endif" class="d-flex align-items-center mr-auto">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block"> @if($setting->website_email) {{ $setting->website_email }} @endif</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-7 text-right top_right_text">
                        <div class="mr-auto">
                            
                            <a href="https://trafalgar.grailafrica.com/" target="_blank" class="p-2 pl-0">Claims</a>
                            <a href="{{ url('/jobs') }}" class="p-2 pl-0">Careers</a>
                            <a href="{{ route('online-services') }}" class="p-2 pl-0">Online services</a>
                            <!--<a target="_blank" href="https://trafalgar.estatemate.co.za/login" class="p-2 pl-0">Property app</a>-->
                            <a target="_blank" href="https://trafalgar-app.unibase.solutions/" class="p-2 pl-0">Web App</a>
                          
                            <a target="_blank" href="http://webgui.unibase.co.za/scripts/eri.dll?pagename=sectitlelandtrarev1revMW1" class="p-2 pl-0">Property portal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3">
                        <a href="{{ route('/') }}">
                            <img class="header_logo" src="{{ asset('front/images/header-logo.webp')}}" alt="logo">
                        </a>
                    </div>
                    <div class="col-6 col-lg-9">
                        <nav class="site-navigation text-right" >
                            <div class="container">
                                <div
                                    class="d-inline-block d-lg-none ml-md-0 mr-auto py-sm-2 py-md-3 menu-hamburger">
                                    <a href="#" class="site-menu-toggle js-menu-toggle"><span
                                            class="icon-menu h3"></span></a>
                                </div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block p-0">
                                    <li class="active"><a href="{{ route('/') }}" class="nav-link">Home</a></li>
                                    <li class="has-children">
                                        <a href="{{ route('/')}}" class="nav-link">Property search</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ route('/',['tab'=>'rent'])}}" class="nav-link">Residential to Rent</a></li>
                                            <li><a href="{{ route('commercial-property-for-rent.multiple-areas',['city' => 'Port Elizabeth,Eastern Cape']) }}" class="nav-link">Commercial to Rent</a></li>
                                             <li><a href="{{ route('/',['tab'=>'sale'])}}" class="nav-link">Residential for Sale</a></li>
                                              <li><a href="{{ route('commercial-property-for-sale.multiple-areas',['city' => 'Port Elizabeth,Eastern Cape']) }}" class="nav-link">Commercial for Sale</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#" class="nav-link">Rent or sell</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ route('rent')}}" class="nav-link">Rent your Home</a></li>
                                            <li><a href="{{ route('sell') }}" class="nav-link">Sell your Home</a></li>
                                               <li><a href="{{ route('agent-search')}}" class="nav-link">Agents</a></li>
                                                  <li><a href="{{ route('contact-us')}}" class="nav-link">Offices</a></li>
                                        </ul>
                                    </li>
                                    @php $customPages = \App\Models\Page::all();
                                    @endphp
                                    
                                    @foreach($customPages as $customPage)
                                      <!--<li ><a href="route($customPage->page_url_name)" class="nav-link"> $customPage->page_name</a></li>-->
                                      @endforeach
                                      <li class="has-children">
                                        <a href="{{ route('manage') }}" class="nav-link">Property management</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ route('property-management.community-scheme-management') }}"
                                                    class="nav-link">Community Scheme Management</a></li>
                                            <li><a href="{{ route('property-management.sectional-title-and-hoa-management') }}"
                                                    class="nav-link">Sectional Title & HOA Management</a></li>
                                            <li><a href="{{ route('property-management.commercial-property-management') }}"
                                                    class="nav-link">Commercial Property Management</a></li>

                                            <li><a href="{{ route('property-management.estate-management') }}"
                                                    class="nav-link">Estate Management</a></li>

                                            <li><a href="{{ route('property-management.sectional-title-and-hoa-management.developer-services') }}"
                                                    class="nav-link">Property Developer Services</a></li>

                                            <li><a href="{{ route('managing-agent') }}"
                                                    class="nav-link">Managing Agents</a></li>
                                            <li><a href="https://training.trafalgar.co.za/" target="_blank"
                                                    class="nav-link">Training Courses</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#" class="nav-link">Financial services</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ route('insure') }}" class="nav-link">Property Insurance</a></li>
                                            <li><a href="{{ route('finance') }}" class="nav-link">Property Finance</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('about-us') }}" class="nav-link">About</a>
                                        <ul class="dropdown arrow-top">
                                             <li><a href="{{ route('about-us') }}" class="nav-link">About us</a></li>
                                            <li><a href="{{ url('/jobs') }}" class="nav-link">Careers</a></li>
                                            <li><a href="https://news.trafalgar.co.za" class="nav-link">News</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact-us') }}" class="nav-link">Contact</a></li>
                                    <li class="visibleinmobileonly"><a href="https://trafalgar.grailafrica.com/" target="_blank" class="nav-link">Claims</a></li>
                                    <li class="visibleinmobileonly"><a href="{{ url('/jobs') }}" class="nav-link">Careers</a></li>
                                    <li class="visibleinmobileonly"><a href="{{ route('online-services') }}" class="nav-link">Online services</a></li>
                                    <li class="visibleinmobileonly"><a target="_blank" href="https://trafalgar-app.unibase.solutions/" class="nav-link">Web App</a></li>
                                    <li class="visibleinmobileonly"><a target="_blank" href="http://webgui.unibase.co.za/scripts/eri.dll?pagename=sectitlelandtrarev1revMW1" class="nav-link">Property portal</a></li>
                            
                            <!--<a target="_blank" href="https://trafalgar.estatemate.co.za/login" class="p-2 pl-0">Property app</a>-->
                            
                          
                            
                                    <li class="has-children">
                                        <a href="#" class="nav-link"><span class="icon-user-circle-o navicon"></span></a>
                                        <ul class="dropdown arrow-top">
                                            @guest
                                                @if (Route::has('login'))
                                                    <li>
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif
                    
                                                @if (Route::has('register'))
                                                    <li>
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                               
                                                @else
                                                
                                                @if(Auth::user()->user_type == 1)
                                                    <li>
                                                        <a class="nav-link" href="{{ route('user-profile') }}" >
                                                            {{ ucfirst(Auth::user()->name) }}
                                                        </a>
                                                    </li>
                                                      <li><a href="{{ route('favourite-properties')}}" class="nav-link">Favorites</a></li>
                                                    @endif
                                                    
                                                     @if(Auth::user()->user_type == 0)
                                                    <li>
                                                        <a class="nav-link" href="{{ route('admin.dashboard') }}" >
                                                            {{ ucfirst(Auth::user()->name) }}
                                                        </a>
                                                    </li>
                                                    @endif
                                                    
                                                    
                                                    
                                                    <li>
                                                        <a class="nav-link" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                    </form>
                                                    </li>
                                            @endguest
                                            
                                                  
                                            <!--<li><a href="{{ url('/register') }}" class="nav-link">Register</a></li>-->
                                            <!--<li><a href="{{ url('/profile') }}" class="nav-link">profile</a></li>-->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>