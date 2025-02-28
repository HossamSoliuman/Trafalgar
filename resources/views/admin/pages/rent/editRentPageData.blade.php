@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
               
              <li class="breadcrumb-item active">Edit {{ ucfirst( str_replace('-',' ',$rentPage->page_name)) }}</li>
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
                <h3 class="card-title">{{ ucfirst( str_replace('-',' ',$rentPage->page_name)) }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
           
              <form action="{{ route('admin.rent-page.update',$rentPage->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                    
                  
                    <div class="form-group">
                    <label for="page_name">Page Name</label>
                    <textarea class="form-control" id="page_name" name="page_name"  >{{ $rentPage->page_name }}</textarea>
                     @error('page_name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                 
                   <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"  >{{ $rentPage->page_content }}</textarea>
                     @error('description')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                  
                   <div class="form-group">
                    <label for="featured_image">Logo image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="featured_image" name="featured_image">
                        <label class="custom-file-label" for="featured_image">Choose file</label>
                      </div>
                       @error('featured_image')
                                    </br>
                                      <span style="color:red;" > {{ $message }}<span>
                                    
                                @enderror
                     
                    
                    </div>
                     @if($rentPage->page_featured_image !="")    <img width="120px" height="120px" src="{{ asset('storage/page_featured_image/'.$rentPage->page_featured_image) }}" /> @endif
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
@include('admin.ckEditorScript')
@endpush