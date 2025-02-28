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
              <li class="breadcrumb-item active">Rent Page list</li>
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
                <h3 class="card-title">Rent Page Listing</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Page name</th>
                      <th>Page content</th>
                       <th>Featured Image</th>
                     
                     
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($rentPages as $key => $rentPage)
                    <tr>
                    <td>{{ $i = ($rentPages->perPage() * ($rentPages->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ $rentPage->page_name }}</td>
                       <td>{!! $rentPage->page_content !!}</td>
                       <td>
                             @if($rentPage->page_featured_image !="")    <img width="120px" height="120px" src="{{ asset('storage/page_featured_image/'.$rentPage->page_featured_image) }}" /> @endif
                           </td>
                       
                            
                         <td>
                             <a href="{{ route('admin.edit-rent-page', $rentPage->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                              <!--<a href="{{ route('admin.job-management.show', $rentPage->id) }}" class="btn  bg-gradient-primary btn-xs">View</a>-->
                         
                        
                         </td>
                     
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
           
           
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  {{ $rentPages->links() }}
                   <p >Showing: {{ $rentPages->currentPage() }} - {{ $rentPages->count() }} of {{ $rentPages->total() }}</p>
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
