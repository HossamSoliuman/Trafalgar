@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Profile</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3 class="card-title">Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          

              <form action="{{ route('admin.profile') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                     <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ Auth::user()->name }}">
                     @error('name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ Auth::user()->email }}">
                     @error('email')
                    <span  style="color:red;"  > {{ $message }}<span>
                   
                    @enderror
                  </div>
                 
                  <div class="form-group">
                    <label for="profileImage">Profile image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="profileImage" name="profileImage">
                        <label class="custom-file-label" for="profileImage">Choose file</label>
                      </div>
                       @error('profileImage')
                                    
                                      <span style="color:red;" > {{ $message }}<span>
                                    
                                @enderror
                     
                    
                    </div>
                      <img width="100px" height="100px" src="{{ asset('storage/profileImage/'.Auth::user()->profile_image) }}" />
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
          
        </div>
        
        
        
        

    </section>
    <!-- /.content -->
@endsection
