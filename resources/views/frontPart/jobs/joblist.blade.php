@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','jobs')->first(); @endphp
@if (isset($pageMeta) && !empty($pageMeta))
    @section('title', $pageMeta->page_title)
    @section('meta_keywords', $pageMeta->page_keyword)
    @section('meta_description', $pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')


    <!--job banner-->
    <section class="jobbanner-section">
        <div class="jobbanner-text">
            <h1>Career Opportunities</h1>
        </div>
    </section>
    <!--end job banner-->

  

    <!--job search form-->
    <div class="container">
          <div class="message" style="padding:40px 0">
            <h3>Vacancy Search Instructions</h3>
            <ul class="mt-3" style="padding-left:25px">
              <li class="">Please search for relevant vacancies using the search criteria below which include the job
                    title and location</li>
              <li class="">Please check the job description, experience and qualifications required for the vacancy by clicking on a
                    vacancy of interest</li>
              <li class="">Locations of Trafalgar branches can be checked on our contact page to consider travel to work logistics</li>
              <li class="l">To apply for a vacancy online, please complete the application questionnaire and upload your CV, ID copy and
                    relevant qualification certificates</li>
            </ul>
            <!--<ul class="list-none">-->
            <!--    <li></li>-->
            <!--    <li></li>-->
            <!--    <li></li>-->
            <!--    <li></li>-->
            <!--</ul>-->
        </div>
        <section class="jobsearch_form_section  mt-3">
            <form action="{{ route('jobs') }}" method="get" id="searchJobForm">

                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" name="keyword" class="form-control" id="keyword" placeholder="keyword">
                </div>
                {{-- <div class="form-group">
                    <label for="jobtype">Job Type</label>
                    <div class="icon_select1">
                        <select id="jobtype" name="jobtype" class="form-control">
                            <option value="">Job Type</option>
                            <option value="1">Full Time</option>
                            <option value="2">Part Time</option>
                        </select>
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="jobTitle">Job Title</label>
                    <div class="icon_select1">
                        <select id="jobTitle" name="jobTitle" class="form-control">
                            <option value="">Job Title</option>     
                            @foreach ($all_job as $item)
                                <option value="{{ $item->job_title}}">{{ $item->job_title}}</option>
                            @endforeach                   
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>

                    @php
                        $locationArray = ["Cape Town","Durban","East London","Port Elizabeth","Johannesburg","Knysna","Pretoria","Ballito"];
                        sort($locationArray); 
                    @endphp

                    <select class="form-control" name="location" id="location">
                        <option value="">Location</option>
                        @foreach ($locationArray as $location)
                            <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>




                </div>
                <button id="searchJobButton" type="button" class="btn btn-primary theme-btn">Search Jobs</button>
            </form>

        </section>
    </div>
    <!--end job search form-->

    <!-- job listing section  -->
    <section class="joblisting_section">
        @if (!$jobs->isEmpty())
            @foreach ($jobs as $job)
                @php
                    $jobUrl = str_replace(' ', '-', $job->job_title);

                $jobUrl = route('job', ['job_title' => $job->job_title_slug]); @endphp
                <div style="cursor: pointer;" class="joblisting" onclick="window.location = '{{ $jobUrl }}';">

                    <div class="container">

                        <div class="each_job">


                            <div onclick="window.location = '{{ $jobUrl }}';" class="job_title">
                                <h4>{{ $job->job_title }}</h4>
                                <!--<p>Admin</p>-->
                            </div>
                            <div class="job_location">
                                <h6>Location</h6>
                                <p>{{ $job->job_location }}</p>
                            </div>
                            <div class="job_type">
                                <h6>Job Type</h6>
                                <p>{{ $job->job_type == 1 ? 'Full Time' : 'Part Type' }}</p>
                            </div>
                            {{-- <div class="job_posted">
                                <h6>Posted</h6>

                                <p>{{ $job->created_at->diffForHumans() }}</p>
                            </div> --}}
                        </div>

                    </div>
                </div>
            @endforeach
        @endif

    </section>
    @if ($jobs->hasPages())
        <div class="container ">
            <div class="w-75 m-auto">
                <div class="property_pagination">
                    {{ $jobs->links() }}

                </div>
            </div>
        </div>
    @endif
    <!-- end job listing section  -->

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
