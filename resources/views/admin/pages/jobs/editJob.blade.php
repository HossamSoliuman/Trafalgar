@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Jobs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
                 <li class="breadcrumb-item"><a href="{{ route('admin.job-management.index')}}">Jobs</a></li>
              <li class="breadcrumb-item active">Edit Jobs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
           
              <form action="{{ route('admin.job-management.update',$job->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                    @method('PUT')
                <div class="card-body">
                    
                     <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title" required  value="{{ $job->job_title }}" />
                     @error('job_title')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                    <div class="form-group">
                    <label for="job_location">Job Location</label>

                    @php $locationArray =  ["Cape Town","Stellenbosch","Durban","Trafalgar Group","East London","Port Elizabeth","Mossel Bay","Johannesburg","Knysna","Pretoria","Berea"]; @endphp
                     <select class="form-control" id="job_location" name="job_location">
                          <option value="">Select Location</option>
                         @foreach($locationArray as  $locationArrays)
                          <option <?php if($locationArrays == $job->job_location){ echo "selected"; } ?> value="{{ $locationArrays }}">{{ $locationArrays }}</option>
                       @endforeach
                        
                    
                    </select>
                   
                     @error('job_location')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                   <div class="form-group">
                    <label for="job_type">Job Type</label>
                    <select class="form-control" id="job_type" name="job_type" required >
                        <option value="1" <?php if($job->job_type == 1){ echo "selected"; } ?> >Full Time</option>
                         <option value="2" <?php if($job->job_type == 2){ echo "selected"; } ?> >Part Time</option>
                    </select>        
                  </div>
                  
                  
                  
                   <div class="form-group">
                    <label for="hr_email">Hr Email</label>
                     <input type="email" value="{{ $job->hr_email }}" class="form-control" id="hr_email" name="hr_email" placeholder="Hr email" required />
                  
                     @error('hr_email')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="job_description">Job Description</label>
                    <textarea  class="form-control" id="job_description" name="description" >{{ $job->job_description }}</textarea>
                     @error('description')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
          
        </div>
        
        
        
        

    </section>
    <!-- /.content -->
@endsection



@push('ckeditor-script')
@include('admin.pages.js.ckEditorScript')
@endpush
