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
        <h1>Trafalgar Jobs</h1>
    </div>
</section>
<!--end job banner-->
  
<!--job search form-->
<div class="container">
    <section class="jobsearch_form_section">
         <form action="{{ route('jobs') }}" method="get" id="searchJobForm">
          
            <div class="form-group">
                <label for="keyword">Keyword</label>
                <input type="text" name="keyword" class="form-control" id="keyword" placeholder="keyword">
            </div>
            <div class="form-group">
                <label for="jobtype">Job Type</label>
                <div class="icon_select1">
                    <select id="jobtype" name="jobtype" class="form-control">
                         <option value="">Job Type</option>
                      <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                
                @php $locationArray =  ["Cape Town","Stellenbosch","Durban","East London","Port Elizabeth","Mossel Bay","Johannesburg","Knysna","Pretoria"]; @endphp
                     <select class="form-control" name="location" id="location">
                          <option value="">Location</option>
                         @foreach($locationArray as  $locationArrays)
                          <option  value="{{ $locationArrays }}">{{ $locationArrays }}</option>
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
        @if(!$jobs->isEmpty())
                 @foreach($jobs as $job)
                  @php
                    $jobUrl =  str_replace(' ','-',$job->job_title);
                    
                    $jobUrl =  route('job',['job_title' =>$job->job_title_slug ]) @endphp
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
                        <p>{{ ($job->job_type == 1)?"Full Time":"Part Type" }}</p>
                    </div>
                    <div class="job_posted">
                        <h6>Posted</h6>
                        
                        <p>{{ $job->created_at->diffForHumans() }}</p>
                    </div>
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
