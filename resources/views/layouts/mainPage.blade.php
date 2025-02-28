<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', config('app.name', 'trafalgar'))</title>
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="facebook-domain-verification" content="6nhe1alkmxja7k47r81iea4g6sa3m5" />
    <!-- Style -->

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="stylesheet" href="{{ asset('front/fonts/icomoon/style.css') }}">
    <!--{{-- <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" media="print"> --}}-->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('front/mainPage/bootstrap.min.css') }}"> -->
    <!--<link rel="stylesheet" href="{{ asset('front/mainPage/style2.css') }}">-->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <style>
        @media (min-width: 1201px) {
            .container {
                max-width: 1200px;
                padding: 0px;
            }
        }
    </style>


    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/css/bootstrap-multiselect.css"
        integrity="sha512-EvvoSMXERW4Pe9LjDN9XDzHd66p8Z49gcrB7LCUplh0GcEHiV816gXGwIhir6PJiwl0ew8GFM2QaIg2TW02B9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/img/favicon-512-mar.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PRZJX5P');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="preload" href="{{ asset('front/images/property_bg.webp') }}" as="image">

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRZJX5P" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('frontPart/navBarSection')

    @yield('content')

    <section class="copyright_section">
        <div class="container">
            <div class="copyright_content">
                <p>Copyright © 2022 Trafalgar Property.</p>
                <ul>
                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- copyright section  -->
    @include('frontPart/footerLinks')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(function() {

            @if (Session::has('success'))



                @if (Session::has('formName') && Session::get('formName') == 'Property Management Quote Request')
                    window.dataLayer.push({
                        'type': 'Property Management Quote Request',
                        'event': 'FormSubmitted'
                    });
                @endif


                @if (Session::has('formName') && Session::get('formName') == 'reportMaintenanceForm')

                    window.dataLayer.push({
                        'type': 'Report Maintenance Issues',
                        'event': 'FormSubmitted'
                    });
                @endif

                @if (Session::has('formName') && Session::get('formName') == 'finance-contact-mail')
                    window.dataLayer.push({
                        'type': 'Finance',
                        'event': 'FormSubmitted'
                    });
                @endif

                @if (Session::has('formName') && Session::get('formName') == 'insure-contact-mail')
                    window.dataLayer.push({
                        'type': 'Insurance',
                        'event': 'FormSubmitted'
                    });
                @endif

                @if (Session::has('formName') && Session::get('formName') == 'quick-contact')
                    // alert("{{ Session::get('pagename') }}");
                    window.dataLayer.push({
                        'type': 'Quick Contact',
                        'event': 'FormSubmitted',
                        'pagename': '{{ Session::get('pagename') }}'
                    });
                @endif

                @if (Session::has('formName') && Session::get('formName') == 'trafalgar_contactus')

                    window.dataLayer.push({
                        'type': 'Contact Us',
                        'event': 'FormSubmitted'
                    });
                @endif
                @if (Session::has('formName') && Session::get('formName') == 'Maintrafalgar_contactus')

                    setTimeout(function() {
                        // Push data to dataLayer
                        window.dataLayer.push({
                            'type': 'Contact Us',
                            'event': 'FormSubmitted'
                        });

                        // Optionally, change the color of an element
                        document.getElementById('yourElementId').style.color = '#870000';
                    }, 10000);
                @endif

                @if (Session::has('formName') && Session::get('formName') == 'agent-contact-form')


                    @if (Session::has('pageName') && Session::get('pageName') == 'agent')

                        window.dataLayer.push({
                            'type': 'Trafalgar Agent Individual Contact Form',
                            'event': 'FormSubmitted',
                            'name': '{{ str_replace('-', ' ', Session::get('subjectName')) }}'
                        });
                    @else

                        window.dataLayer.push({
                            'type': 'Trafalgar Agent Individual Property Contact Form',
                            'event': 'FormSubmitted',
                            'property_id': '{{ Session::get('subjectName') }}'
                        });
                    @endif
                @endif


                @if (Session::has('formName') && Session::get('formName') == 'Trafalgar Individual Property Application Form')

                    window.dataLayer.push({
                        'type': 'Trafalgar Individual Property Application Form',
                        'event': 'FormSubmitted',
                        'propertyid': '{{ Session::get('propertyId') }}'
                    });
                @endif

                @if (Session::has('formName') && Session::get('formName') == 'Trafalgar Individual Job Application Form')

                    window.dataLayer.push({
                        'type': 'Trafalgar Individual Job Application Form',
                        'event': 'FormSubmitted',
                        'jobtitle': '{{ Session::get('jobTitle') }}'
                    });
                @endif







                toastr.success("{{ Session::get('success') }}");
            @endif

            @if (Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif

            @if (Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif
        });
    </script>

    @stack('home-page-search-js')
    @stack('tagger-script-property-search-result-page')
    @stack('property-search-rent-list-js')
    @stack('property-search-sale-list-js')
    @stack('property-search-commercial-list-js')
    @stack('property-search-commercial-sale-list-js')
    @stack('property-search-commercial-rent-list-js')
    @stack('report-maintenance-issues-js')
    @stack('agent-detail-page-js')
    @stack('property-detail-js-page')
    @stack('js-for-email-property-alert-page')
    @stack('agent-search-js-page')
    @stack('job-search-js')

    <!--Start of Tawk.to Script-->
    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62a1fc6bb0d10b6f3e7683b7/1g54c425r';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
        $("#faccount").click(function() {

            if (window.pageYOffset < 20) {
                $('html,body').animate({
                        scrollTop: $("#online_account").offset().top - 200
                    },
                    'fast');


            }
        });

        $("#fapplication").click(function() {

            if (window.pageYOffset < 20) {
                $('html,body').animate({
                        scrollTop: $("#online_application").offset().top - 200
                    },
                    'fast');
            }
        });

        $("#fcertificate").click(function() {

            if (window.pageYOffset < 20) {
                $('html,body').animate({
                        scrollTop: $("#reg_certificate").offset().top - 200
                    },
                    'fast');
            }
        });

        $("#fisseu").click(function() {

            if (window.pageYOffset < 20) {
                $('html,body').animate({
                        scrollTop: $("#maintenance_isseu").offset().top - 200
                    },
                    'fast');
            }
        });

        $("#fportal").click(function() {

            if (window.pageYOffset < 20) {
                $('html,body').animate({
                        scrollTop: $("#property_portal").offset().top - 200
                    },
                    'fast');
            }
        });
    </script>
</body>

</html>
