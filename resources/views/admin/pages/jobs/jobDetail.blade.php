@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Job Detail</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
                 <li class="breadcrumb-item"><a href="{{ route('admin.job-management.index')}}">Jobs</a></li>
              <li class="breadcrumb-item active">Job Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Job Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Title</th>
                      <th>Details</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                       <td>
                      <b>Job Title</b>
                      </td>
                      <td>{{ $job->job_title}}</td>
                    </tr>
                     <tr>
                     
                       <td>
                       <b>Job Description</b>
                      </td>
                      <td>{!! $job->job_description !!}</td>
                    </tr>
                     <tr>
                    
                       <td>
                       <b>Job Location</b>
                      </td>
                      <td>{{ $job->job_location }}</td>
                    </tr>
                     <tr>
                   
                       <td>
                       <b>Job Type</b>
                      </td>
                      <td>@if($job->job_type == 1) Full Time @endif
                       @if($job->job_type == 2) Part Time @endif</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Status</b>
                      </td>
                      <td>  @if($job->job_status == 1)<a href="{{ route('admin.job-management.not-display',$job->id) }}" class="btn  bg-gradient-success btn-xs">Display</a> @else <a href="{{ route('admin.job-management.display',$job->id) }}" class="btn  bg-gradient-danger btn-xs"> Not display</a>  @endif</td>
                    </tr>
                     <tr>
                   
                       <td>
                       <b>Hr email</b>
                      </td>
                      <td>{{ $job->hr_email}}</td>
                    </tr>
                  
                     <tr>
                   
                       <td>
                       <b>Created on</b>
                      </td>
                      <td>{{ $job->created_at}}</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
             
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection



@push('ckeditor-script')
@include('admin.pages.js.ckEditorScript')
@endpush
