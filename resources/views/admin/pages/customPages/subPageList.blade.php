@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Jobs</h1>-->
           
            <a href="{{ route('admin.custom-sub-page.add-subpage',Request::segment(4)); }}" class="btn  btn-primary btn-sm">Create SubPage</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
               <li class="breadcrumb-item"><a href="{{ route('admin.custom-page.page-list')}}">Page List</a></li>
              <li class="breadcrumb-item active">Sub page</li>
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
                <h3 class="card-title">Sub pages Listing</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                        <th>Parent Page</th>
                      <th>Sub Page title</th>
                         <th>Sub Page Slug</th>
                      
                      <th>Sub Page Description</th>
                       
                       <th>Sub page Status</th>
                     
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($subPages as $key => $page)
                    <tr>
                    <td>{{ $i = ($subPages->perPage() * ($subPages->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ $page->page->page_name }}</td>
                      <td>{{ $page->subpage_name }}</td>
                       <td>{{ $page->subpage_route_url }}</td>
                     
                       <td>{!! $page->subpage_description !!}</td>
                       
                        <td>
                         
                            @if($page->subpage_status == 1)<a href="{{ route('admin.custom-sub-page.not-display',$page->id) }}" class="btn  bg-gradient-success btn-xs">Display</a> @else <a href="{{ route('admin.custom-sub-page.display',$page->id) }}" class="btn  bg-gradient-danger btn-xs"> Not display</a>  @endif
                            </td>
                           
                         <td>
                             <a href="{{ route('admin.custom-sub-page.edit',$page->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                          <!--    <a href="{{ route('admin.job-management.show', $page->id) }}" class="btn  bg-gradient-primary btn-xs">View</a>-->
                          <form  action="{{ route('admin.custom-sub-page.destroy', $page->id) }}" method="post">
                                        @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn  bg-gradient-danger btn-xs">Delete</button>
                                    </form>
                        
                         </td>
                     
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
           
           
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{ $subPages->links() }}
                   <p >Showing: {{ $subPages->currentPage() }} - {{ $subPages->count() }} of {{ $subPages->total() }}</p>
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
