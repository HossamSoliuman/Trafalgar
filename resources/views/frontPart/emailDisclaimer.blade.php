
@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','email-disclaimer')->first(); @endphp

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

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Email Disclaimer</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>This message and any attachment contain information intended solely for the addressee which is confidential or private in nature and subject to legal privilege. If you receive this message in error please notify the sender immediately by email and thereafter delete the message and do not disclose the content in any way. The Trafalgar Group of Companies (Trafalgar (Pty) Ltd; Trafalgar Financial Services (Pty) Ltd and Trafalgar Property Management (Pty) Ltd) (“the Group”) cannot assure the integrity of this communication, nor that it is free of errors, virus, interception or interference, and disclaims all liability for any such. Views and opinions are those of the sender unless clearly stated as being that of the Group. The authority of the sender to bind the Group should be verified by the recipient and not assumed. For contact and address information regarding the Group please go to <a href="/">www.trafalgar.co.za</a></p>
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
