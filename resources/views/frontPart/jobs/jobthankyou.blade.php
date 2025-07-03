@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','jobs')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
    @section('title',$pageMeta->page_title)
    @section('meta_keywords',$pageMeta->page_keyword)
    @section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

<!--job banner-->
<section class="jobbanner-section">
    <div class="jobbanner-text">
        <h1>THANK YOU!</h1>
    </div>
</section>
<!--end job banner-->

<!--job search form-->
<div class="container">
    <section class="jobsearch_form_section  mt-3">
        <p><strong>Dear applicant</strong> – Thank you for applying for a job  vacancy with Trafalgar. Our relevant HR Manager will be reviewing applications to shortlist preferred candidates for interviewing. We will contact you within a week following the closing date to advise if your application has been shortlisted and to schedule an interview.</p>
        <p>If we do not revert with feedback, your application was not successfully shortlisted. Please do continue to consider and apply for other Trafalgar vacancies ahead.</p>
        <br/>
        <br/>
        <p class="mb-0">Thanks again !</p>
        <p class="mb-0">Symeeria Ebrahim</p>
        <p class="mb-0">Human Resources Director</p>
    </section>
</div>
<!--end job search form-->


<!-- footer top section  -->

    <section class="footer_top_section anotherpage_footer">
        
    </section>

<!-- footer top section  -->

<!-- main footer section  -->

@include('frontPart/mainFooter')

<!-- main footer section  -->

<!-- copyright section  -->
@endsection

@push('job-search-js')
@include('frontPart.js.jobSearchJs')
@endpush
