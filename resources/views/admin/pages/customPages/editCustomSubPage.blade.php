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
                 <li class="breadcrumb-item"><a href="{{ route('admin.custom-page.page-list')}}">Pages List</a></li>
              <li class="breadcrumb-item active">Edit Page</li>
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
                <h3 class="card-title">Edit Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
           
              <form action="{{ route('admin.custom-sub-page.update',$page->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                    
                    
                    <div class="form-group">
                    <label for="job_type">Parent Page</label>
                    <select class="form-control" id="page_id" name="page_id"  >
                        @foreach($parentPages as $parentPage)
                        <option <?php if($parentPage->id == $page->page_id){ echo "selected"; } ?> value="{{ $parentPage->id }}">{{ $parentPage->page_name }}</option>
                        @endforeach
                         
                    </select>    
                      @error('page_id')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                    
                     <div class="form-group">
                    <label for="page_title">Page Title</label>
                    <input type="text" value="{{ (isset($page->subpage_name))?$page->subpage_name:"" }}" class="form-control" id="page_title" name="page_title" placeholder="Page Title"  />
                     @error('page_title')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                    <div class="form-group">
                    <label for="page_url_name">Page slug</label>
                    <input readonly type="text" value="{{ (isset($page->subpage_route_url))?$page->subpage_route_url:"" }}" class="form-control" id="page_url_name" name="page_url_name" placeholder="Page Title"  />
                     @error('page_url_name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                  
                  
                  
                  
                   <div class="form-group">
                    <label for="job_type">Page Status</label>
                    <select class="form-control" id="page_status" name="page_status"  >
                        <option <?php if($page->subpage_status == 1){ echo "selected"; } ?> value="1">Active</option>
                         <option <?php if($page->subpage_status == 0){ echo "selected"; } ?> value="0">Inactive</option>
                    </select>        
                  </div>
                  
                  
                  
                  
                  
                   <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control" id="description" name="description" >{{ (isset($page->subpage_description))?$page->subpage_description:"" }}</textarea>
                     @error('description')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                  </div>
                  
                   <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                     <input type="file" class="form-control" id="featured_image"  name="featured_image"   />
                     @if($page->subpage_feature_image != "") 
                    
                     <a href="{{ asset('storage/featured_image/'.$page->subpage_feature_image) }}">View Featured image</a>
                     @endif
                      @error('featured_image')
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



@push('ckeditor-script')
@include('admin.pages.js.ckEditorScript')
@endpush
@push('create-title-slug-by-js')
@include('admin.pages.js.createTitleSlugByJs')
@endpush