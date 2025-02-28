@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Change password</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Change password</li>
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
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          

              <form action="{{ route('admin.password') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                     <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"  >
                     @error('password')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cnfpassword">Confirm Password</label>
                    <input type="password" class="form-control" name="cnfpassword" id="cnfpassword"  >
                     @error('cnfpassword')
                    <span  style="color:red;"  > {{ $message }}<span>
                   
                    @enderror
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
