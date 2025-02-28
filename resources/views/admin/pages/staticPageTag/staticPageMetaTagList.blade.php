@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Property Solution</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

   
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Property Solution Listing</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Page</th>
                      <th>Page Title</th>
                       <th>Page Keyword</th>
                       <th>Page Description</th>
                     
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($pageMetaTags as $key => $pageMetaTag)
                    <tr>
                    <td>{{ $i = ($pageMetaTags->perPage() * ($pageMetaTags->currentPage() - 1)) + ($key+1) }}</td>
                      <td><a href="{{  route($pageMetaTag->page_name);  }}">{{  route($pageMetaTag->page_name);  }}</a></td>
                       <td>{!! $pageMetaTag->page_title !!}</td>
                        <td>{{ $pageMetaTag->page_keyword }}</td>
                         <td>{{ $pageMetaTag->page_description }}</td>
                      
                        
                         <td>
                             <a href="{{ route('admin.static-page-meta-tag', $pageMetaTag->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                        
                         </td>
                     
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
           
           
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{ $pageMetaTags->links() }}
                   <p >Showing: {{ $pageMetaTags->currentPage() }} - {{ $pageMetaTags->count() }} of {{ $pageMetaTags->total() }}</p>
              </div>
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
        
        </div>
       
      </div><!-- /.container-fluid -->
        
        

    </section>
    <!-- /.content -->
@endsection
