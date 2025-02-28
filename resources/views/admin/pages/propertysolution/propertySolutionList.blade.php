@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <a href="{{ route('admin.propertysolution.create'); }}" class="btn  btn-primary btn-sm">Create</a>
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
                      <th>Title</th>
                      <th>Description</th>
                       <th>Icon</th>
                       <th>Status</th>
                     
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($propertySolutions as $key => $propertySolution)
                    <tr>
                    <td>{{ $i = ($propertySolutions->perPage() * ($propertySolutions->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ $propertySolution->title_name }}</td>
                       <td>{!! $propertySolution->description !!}</td>
                        <td>   <img width="120px" height="120px" src="{{ asset('storage/property_soultion/'.$propertySolution->image_link) }}" />   </td>
                        <td>
                            <!--{{ $propertySolution->visible_status }} -->
                            @if($propertySolution->visible_status == 1)<a href="{{ route('admin.propertysolution.not-display',$propertySolution->id) }}" class="btn  bg-gradient-success btn-xs">Display</a> @else <a href="{{ route('admin.propertysolution.display',$propertySolution->id) }}" class="btn  bg-gradient-danger btn-xs"> Not display</a>  @endif</td>
                         <td>
                             <a href="{{ route('admin.propertysolution.edit', $propertySolution->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                          <form  action="{{ route('admin.propertysolution.destroy', $propertySolution->id) }}" method="post">
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
                  {{ $propertySolutions->links() }}
                   <p >Showing: {{ $propertySolutions->currentPage() }} - {{ $propertySolutions->count() }} of {{ $propertySolutions->total() }}</p>
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
