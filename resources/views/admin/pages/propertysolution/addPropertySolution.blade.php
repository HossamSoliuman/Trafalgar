@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Property Solution</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
                 <li class="breadcrumb-item"><a href="{{ route('admin.propertysolution.index')}}">Property Solution List</a></li>
              <li class="breadcrumb-item active">Create Property Solution</li>
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
        
           
              <form action="{{ route('admin.propertysolution.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                     <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title" >
                     @error('title')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                   <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control" id="description" name="description" ></textarea>
                     @error('description')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                  
                  
                   <div class="form-group">
                    <label for="displayStatus">Display</label>
                    <select class="form-control" id="displayStatus" name="displayStatus">
                        <option value="1">Yes</option>
                         <option value="0">No</option>
                    </select>        
                  </div>
                  
                  
                  
                  
                
                 
                 
                  <div class="form-group">
                    <label for="propertySolutionImage">Logo image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="propertySolutionImage" name="propertySolutionImage">
                        <label class="custom-file-label" for="propertySolutionImage">Choose file</label>
                      </div>
                       @error('propertySolutionImage')
                                    </br>
                                      <span style="color:red;" > {{ $message }}<span>
                                    
                                @enderror
                     
                    
                    </div>
                     
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
