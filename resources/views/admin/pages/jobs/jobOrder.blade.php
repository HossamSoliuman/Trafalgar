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
              <li class="breadcrumb-item active">Order Jobs List</li>
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
                    <h3 class="card-title">Order Job Listing</h3>                
                </div>
                <!-- /.card-header -->
                <form action="{{ route('admin.job.update.order') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <small>(All jobs that are checked will appear at the top of the main Careers page.)</small>                
                        <table class="table table-bordered">
                            <thead>                  
                                <tr>
                                <th style="width: 10px">#</th>
                                <th>Select</th>
                                <th>Job title</th>
                                <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $key => $job)                            
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td> <input type="checkbox" name="order[]" id="order" value="{{$job->id}}" @if ($job->order != 0) checked @endif ></td>
                                        <td>{{ $job->job_title }}</td>   
                                        <td>{{ $job->job_location }}</td>                   
                                    </tr>
                                @endforeach                    
                            </tbody>
                        </table>                                    
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
