@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Jobs Application</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Jobs Application</li>
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
                    <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Searching For Applicant:</h3>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.job-applications') }}" method="get" id="searchJobForm">   
                    <div class="row">
                     
                    <div class="col-3">
                    <input type="text"  id="username" name="name" class="form-control" placeholder="Applicant Name"  >
                    </div>
                    <div class="col-3">
                    <input type="text" id="job"  name="job" class="form-control" placeholder="Job"   >
                    </div>
                    <div class="col-3">
                    <input type="text" id="location"  name="location" class="form-control" placeholder="Location"  >
                    </div>
                    <!--<div class="col-3">-->
                  
                    <!--<select  id="type"  class="form-control" name="type" >-->
                    <!--     <option value="">Job Type</option>-->
                    <!--  <option value="1">Full Time</option>-->
                    <!--  <option value="2">Part Time</option>-->
                     
                    <!--</select>-->
                    <!--</div>-->
                    <div class="col-3">
                   
                    <button id="searchJobButton" type="button" class="btn btn-primary active form-control"> Search</button>
                    </div>
                   
                    </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>

   
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Jobs Application</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                    <th style="width: 10px">#</th>
                      <th>Applicant Name</th>
                      <th>Job Tittle</th>
                       <th>Job Location</th>
                      <th>Applicant Address</th>
                       <th>Status</th>
                     <th>Date of Application received</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($appliedJobs as $key => $appliedJob)
                    <tr>
                    <td>{{ $i = ($appliedJobs->perPage() * ($appliedJobs->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ $appliedJob->title." ".ucfirst($appliedJob->first_name)." ".$appliedJob->sur_name }}</td>
                       <td>{{ (isset($appliedJob->job->job_title))? ucfirst($appliedJob->job->job_title) : '' }}</td>
                        <td>{{ (isset($appliedJob->job->job_location))? ucfirst($appliedJob->job->job_location) : '' }}</td>
                       <td>{{ $appliedJob->address }}</td>
                      
                          <td>
                              
                            <form method="post" action="{{ route('admin.job-applications.change-status',$appliedJob->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                <div class="form-group">
                                
                                <select name="set_status" class="form-control">
                                <option <?php if($appliedJob->job_application_status == 1){ echo "selected"; } ?> value="1" >New</option>
                                <option  <?php if($appliedJob->job_application_status == 2){ echo "selected"; } ?>  value="2" >In Process</option>
                                <option  <?php if($appliedJob->job_application_status == 3){ echo "selected"; } ?>  value="3" >Shortlisted</option>
                                <option <?php if($appliedJob->job_application_status == 4){ echo "selected"; } ?>  value="4" >Rejected</option>
                                <option  <?php if($appliedJob->job_application_status == 5){ echo "selected"; } ?>  value="5" >Selected</option>
                                </select>
                                </div>
                                
                                </div>
                                
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-xs">Change status</button>
                                </div>
                            </form>
                              
                          </td>
                             <td>{{ $appliedJob->created_at }}</td>
                         <td>
                             
                                 <a href="{{ route('admin.job-applications.show', $appliedJob->id) }}" class="btn  bg-gradient-primary btn-xs">View full information</a>
                          <form  action="{{ route('admin.job-applications.destroy', $appliedJob->id) }}" method="post">
                                        @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn  bg-gradient-danger btn-xs">Delete</button>
                                    </form>
                        
                         </td>
                     
                     
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
           
           
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{ $appliedJobs->links() }}
                    <p >Showing: {{ $appliedJobs->currentPage() }} - {{ $appliedJobs->count() }} of {{ $appliedJobs->total() }}</p>
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

@push('admin-job-applicant-search-js')
@include('admin.pages.js.jobApplicantSearchAdmin')
@endpush