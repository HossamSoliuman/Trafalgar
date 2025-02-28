@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Import Property</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Import Property</li>
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
                <h3 class="card-title">Import Property By City</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <!--<th style="width: 10px">#</th>-->
                      <th>City</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <td>CAPE TOWN</td>
                       <td><a href="{{ route('admin.importproperty.ct') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                    <tr>
                      <td>JOHANNESBURG</td>
                       <td><a href="{{ route('admin.importproperty.jb') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                    <tr>
                      <td>PORT ELIZABETH</td>
                       <td><a  href="{{ route('admin.importproperty.pe') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                    <tr>
                      <td>DURBAN</td>
                       <td><a href="{{ route('admin.importproperty.durban') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                    
                      <tr>
                      <td>PRETORIA</td>
                       <td><a href="{{ route('admin.importproperty.pretoria') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                     <tr>
                      <td>EAST LONDON</td>
                       <td><a href="{{ route('admin.importproperty.el') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                     <tr>
                      <td>INNER CITY</td>
                       <td><a href="{{ route('admin.importproperty.ic') }}" class="btn btn-primary">Import property</a></td>
                    </tr>
                  
                    
                  </tbody>
                </table>
              </div>
             
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  
               
               
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
