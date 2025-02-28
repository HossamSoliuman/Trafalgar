@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>User</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Users List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <!--<th>City</th>-->
                       <th>email</th>
                      <!--<th>Method Of contact</th>-->
                      <!-- <th>Time to call</th>-->
                      <!--<th>comment/question</th>-->
                      <th >Created on</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $key => $user)
                    <tr>
                       <td>{{ $i = ($users->perPage() * ($users->currentPage() - 1)) + ($key+1) }}</td>
                      <td>{{ $user->name }}</td>
                       
                        <td>{{ $user->email }}</td>
                        
                      <td>
                       {{ $user->created_at }}
                      </td>
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  
                  {{ $users->links() }}
                   <p >Showing: {{ $users->currentPage() }} - {{ $users->count() }} of {{ $users->total() }}</p>
                <!--<ul class="pagination pagination-sm m-0 float-right">-->
                <!--  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>-->
                <!--  <li class="page-item"><a class="page-link" href="#">1</a></li>-->
                <!--  <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                <!--  <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <!--  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>-->
                <!--</ul>-->
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
