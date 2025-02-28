@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Import Agents</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Import Agents</li>
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
                <h3 class="card-title">Sync Api Import Agents By City</h3>
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
                      <td>unibase_sandbox</td>
                       <td><a href="{{ route('admin.syncapiimportagents.unibaseAgentApiData') }}" class="btn btn-primary">Import unibase sandbox agents</a></td>
                    </tr>
                    
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management PTY LTD - Pretoria</td>-->
                    <!--   <td><a href=" route('admin.syncapiimportagents.trafalgar-property-mangement-pretoria') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management</td>-->
                    <!--   <td><a href="route('admin.syncapiimportagents.trafalgar-property-mangement') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management East London</td>-->
                    <!--   <td><a  href="route('admin.syncapiimportagents.east-london') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--  <td>Trafalgar Property Management Pretoria</td>-->
                    <!--   <td><a href=" route('admin.syncapiimportagents.pretoria') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                    
                    <!--  <tr>-->
                    <!--  <td>Trafalgar Property Management Cape Town</td>-->
                    <!--   <td><a href=" route('admin.syncapiimportagents.capetown') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                    
                    <!-- <tr>-->
                    <!--  <td>Trafalgar Property Management Johannesburg</td>-->
                    <!--   <td><a href=" route('admin.syncapiimportagents.johannesburg') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                    
                    <!-- <tr>-->
                    <!--  <td>Trafalgar Port Elizabeth</td>-->
                    <!--   <td><a href=" route('admin.syncapiimportagents.port-elizabeth') " class="btn btn-primary">Import agents</a></td>-->
                    <!--</tr>-->
                  
                    
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
