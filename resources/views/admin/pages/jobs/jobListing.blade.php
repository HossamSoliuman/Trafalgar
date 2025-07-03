@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Jobs</h1>-->
            <a href="{{ route('admin.job-management.create'); }}" class="btn  btn-primary btn-sm">Create Job</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Jobs</li>
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
                <h3 class="card-title">Job Listing</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Job title</th>
                      <th>Job location</th>
                       <th>Job Type</th>
                       <th>Job status</th>
                     
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($jobs as $key => $job)
                    <tr>
                    <td>{{ $i = ($jobs->perPage() * ($jobs->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ $job->job_title }}</td>
                      
                       <td>{{ $job->job_location }}</td>
                       <td>@if($job->job_type == 1) Full Time @endif
                       @if($job->job_type == 2) Part Time @endif
                       </td>
                        <td>
                            <!--{{ $job->id }} -->
                            @if($job->job_status == 1)<a href="{{ route('admin.job-management.not-display',$job->id) }}" class="btn  bg-gradient-success btn-xs">Display</a> @else <a href="{{ route('admin.job-management.display',$job->id) }}" class="btn  bg-gradient-danger btn-xs"> Not display</a>  @endif
                            </td>
                            
                         <td>
                             <a href="{{ route('admin.job-management.edit', $job->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                              <a href="{{ route('admin.job-management.show', $job->id) }}" class="btn  bg-gradient-primary btn-xs">View</a>
                          <form  action="{{ route('admin.job-management.destroy', $job->id) }}" method="post">
                                        @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn  bg-gradient-danger btn-xs">Delete</button>
                                    </form>
                        
                         </td>
                     
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
           
           
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{ $jobs->links() }}
                   <p >Showing: {{ $jobs->currentPage() }} - {{ $jobs->count() }} of {{ $jobs->total() }}</p>
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
