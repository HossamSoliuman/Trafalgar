@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Add Jobs</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
                 <li class="breadcrumb-item"><a href="{{ route('admin.job-management.index')}}">Jobs</a></li>
              <li class="breadcrumb-item active">Add Jobs</li>
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
                <h3 class="card-title">Create Job</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
           
              <form action="{{ route('admin.job-management.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    
                     <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" value="{{ old('job_title') }}" class="form-control" id="job_title" name="job_title" placeholder="Job Title"  />
                     @error('job_title')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                    <div class="form-group">
                    <label for="job_location">Job Location</label>
                    <select class="form-control" id="job_location" name="job_location">
                        <option value="">Select Location</option>
                        <option value="Cape Town">Cape Town</option>
                         <option value="Trafalgar Group" >Trafalgar Group</option>
                        <option value="Stellenbosch">Stellenbosch</option>
                        <option value="Durban">Durban</option>
                        <option value="East London" >East London</option>
                        <option value="Port Elizabeth" >Port Elizabeth</option>
                        <option value="Mossel Bay" >Mossel Bay</option>
                        <option value="Johannesburg" >Johannesburg</option>
                        <option value="Knysna" >Knysna</option>
                        <option value="Pretoria" >Pretoria</option>
                         <option value="Berea" >Berea</option>
                         
                    
                    </select>
                     @error('job_location')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                   <div class="form-group">
                    <label for="job_type">Job Type</label>
                    <select class="form-control" id="job_type" name="job_type"  >
                        <option value="1">Full Time</option>
                         <option value="2">Part Time</option>
                    </select>        
                  </div>
                  
                  
                  
                   <div class="form-group">
                    <label for="hr_email">Hr Email</label>
                     <input type="email" class="form-control" id="hr_email" value="{{ old('hr_email') }}" name="hr_email" placeholder="Hr email"  />
                  
                     @error('hr_email')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="job_description">Job Description</label>
                    <textarea  class="form-control" id="job_description" name="description" >{{ old('description') }}</textarea>
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
