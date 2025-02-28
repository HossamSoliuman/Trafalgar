@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
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
        
           
              <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                     <div class="form-group">
                    <label for="facebookLink">Facebook link</label>
                    <input type="text" class="form-control" id="facebookLink" name="facebookLink" placeholder="Facebook Link" value="{{$setting->facebook_link }}">
                     @error('facebookLink')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                   <div class="form-group">
                    <label for="youtubeLink">Youtube link</label>
                    <input type="text" class="form-control" id="youtubeLink" name="youtubeLink" placeholder="Youtube Link" value="{{$setting->youtube_link }}">
                     @error('youtubeLink')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="twitterLink">Twitter link</label>
                    <input type="text" class="form-control" id="twitterLink" name="twitterLink" placeholder="Twitter Link" value="{{$setting->twitter_link }}">
                     @error('twitterLink')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                   <div class="form-group">
                    <label for="instagramLink">Instagram link</label>
                    <input type="text" class="form-control" id="instagramLink" name="instagramLink" placeholder="Instagram Link" value="{{$setting->instagram_link }}">
                     @error('instagramLink')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                   <div class="form-group">
                    <label for="linkedinIn">Linkedin link</label>
                    <input type="text" class="form-control" id="linkedinIn" name="linkedinIn" placeholder="Linkedin Link" value="{{ $setting->linkedin_link }}">
                     @error('linkedinIn')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                    <div class="form-group">
                    <label for="linkedinIn">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email Address" value="{{ $setting->website_email }}">
                     @error('emailAddress')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                    <div class="form-group">
                    <label for="linkedinIn">Contact Number</label>
                    <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Contact Number" value="{{ $setting->website_contact_no }}">
                     @error('contactNo')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  <input type="hidden" value="{{ $setting->id }}" name="setting_id">
                 
                 
                  <div class="form-group">
                    <label for="logo_image">Logo image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_image" name="logo_image">
                        <label class="custom-file-label" for="logo_image">Choose file</label>
                      </div>
                       @error('logo_image')
                                    
                                      <span style="color:red;" > {{ $message }}<span>
                                    
                                @enderror
                     
                    
                    </div>
                      <img width="100px" height="100px" src="{{ asset('storage/logo_image/'.$setting->logo_image) }}" />
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
