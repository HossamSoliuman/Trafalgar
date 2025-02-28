@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Jobs</h1>-->
            <!--<a href="#" class="btn  btn-primary btn-sm">Create Job</a>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Page List</li>
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
                <h3 class="card-title">Page Listing</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Page title</th>
                      <th>Description</th>
                       
                       <th>Page status</th>
                      <th>Add Sub page</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($pages as $key => $page)
                    <tr>
                    <td>{{ $i = ($pages->perPage() * ($pages->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ ucfirst($page->page_name) }}</td>
                      
                       <td>{!! $page->description !!}</td>
                       
                        <td>
                         
                            @if($page->page_status == 1)<a href="{{ route('admin.custom-page.not-display',$page->id) }}" class="btn  bg-gradient-success btn-xs">Display</a> @else <a href="{{ route('admin.custom-page.display',$page->id) }}" class="btn  bg-gradient-danger btn-xs"> Not display</a>  @endif
                            </td>
                             <td> <a href="{{ route('admin.custom-sub-page.add-subpage',$page->id)}}" class="btn  bg-gradient-primary btn-xs">Add sub pages</a>
                             <a href="{{ route('admin.custom-sub-page.all-subpages',$page->id)}}" class="btn  bg-gradient-primary btn-xs my-2">view all sub pages</a>
                             </td>
                         <td>
                             <a href="{{ route('admin.custom-page.edit', $page->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                              <!--<a href="{{ route('admin.job-management.show', $page->id) }}" class="btn  bg-gradient-primary btn-xs">View</a>-->
                          <!--<form  action="{{ route('admin.job-management.destroy', $page->id) }}" method="post">-->
                          <!--              @csrf-->
                          <!--               @method('DELETE')-->
                          <!--               <button type="submit" class="btn  bg-gradient-danger btn-xs">Delete</button>-->
                          <!--          </form>-->
                        
                         </td>
                     
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
           
           
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{ $pages->links() }}
                   <p >Showing: {{ $pages->currentPage() }} - {{ $pages->count() }} of {{ $pages->total() }}</p>
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
