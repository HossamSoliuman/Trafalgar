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
               <li class="breadcrumb-item"><a href="{{ route('admin.static-page-meta-tag.index')}}">Manage Meta Tag</a></li>
              <li class="breadcrumb-item active">Edit Manage Meta Tag</li>
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
                <h3 class="card-title">Manage Meta Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
           
              <form action="{{ route('admin.static-page-meta-tag.update',$pageMetaTag->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                    
                    
                     <div class="form-group">
                    <label for="title">Page Title</label>
                    <input type="text" class="form-control" id="page_title" name="page_title" placeholder="Page Title" value="{{ $pageMetaTag->page_title }}" >
                     @error('page_title')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                     <div class="form-group">
                    <label for="page_keyword">Page keyword</label>
                    <input type="text" class="form-control" id="page_keyword" name="page_keyword" placeholder="Page keyword" value="{{ $pageMetaTag->page_title }}" >
                     @error('page_keyword')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                     <div class="form-group">
                    <label for="page_description">Page Description</label>
                    <textarea class="form-control" rows="4" cols="50" id="page_description" name="page_description" placeholder="Page Description">{{ $pageMetaTag->page_description }}</textarea>
                  
                     @error('page_description')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  <!-- <div class="form-group">-->
                  <!--  <label for="description">Description</label>-->
                  <!--  <textarea class="form-control" id="description" name="description"  ></textarea>-->
                  
                  <!--    <span  style="color:red;"  > <span>-->
                
                  <!--</div>-->
                  
                  
                  
                  
                  
                  
                  
                  
                  
                
                 
                 
                 
                  
                  
                  
                
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