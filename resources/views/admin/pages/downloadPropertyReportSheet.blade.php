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
              <li class="breadcrumb-item active">Download Property Report</li>
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
                <h3 class="card-title">Download Property Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <!--<th style="width: 10px">#</th>-->
                      <th>Name</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      
                    <!--<tr>-->
                    <!--  <td>Trafalgar Port Elizabeth</td>-->
                    <!--   <td><a href="route('admin.syncapi.portElizabeth')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management Pretoria</td>-->
                    <!--   <td><a href="route('admin.syncapi.pretoria')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management Cape Town</td>-->
                    <!--   <td><a  href="route('admin.syncapi.capeTown')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management Johannesburg</td>-->
                    <!--   <td><a href="route('admin.syncapi.johannesBurg')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    
                    <!--  <tr>-->
                    <!--  <td>Trafalgar Property Management East London</td>-->
                    <!--   <td><a href="route('admin.syncapi.eastLondon')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    
                    
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management</td>-->
                    <!--   <td><a href="route('admin.syncapi.trafalgarPropertyMangement')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    
                    
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management PTY LTD - Pretoria</td>-->
                    <!--   <td><a href="route('admin.syncapi.trafalgarPropertyMangementPvtLtd')" class="btn btn-primary">Import property</a></td>-->
                    <!--</tr>-->
                    <tr>
                      <td>Download Property Report</td>
                       <td><a href="{{ route('admin.download-property-report') }}" class="btn btn-primary">Download</a></td>
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
