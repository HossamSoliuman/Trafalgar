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
               
              <li class="breadcrumb-item active">Edit {{ ucfirst( str_replace('-',' ',$pageData->page_name)) }}</li>
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
                <h3 class="card-title">{{ ucfirst( str_replace('-',' ',$pageData->page_name)) }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        
           
              <form action="{{ route('admin.pagemanagement.update',$pageData->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                    
                  
                   
                 
                   <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"  >{{ $pageData->page_content }}</textarea>
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
@include('admin.ckEditorScript')
@endpush