@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Contact Us</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Us</li>
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
                <h3 class="card-title">Contact to agents Property</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Agent Name</th>
                      <th>Property Id</th>
                      <th>Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Message</th>
                       <th>Contact on</th>
                       
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($contactus as $key => $contactuss)
                    <tr>
                       <td>{{ $i = ($contactus->perPage() * ($contactus->currentPage() - 1)) + ($key+1) }}</td>
                         <td>
                             @php $agentData = \App\Models\Agent::where('agent_id',$contactuss->agent_id)->first() @endphp
                             @if($agentData != null)
                             <a style="color: inherit;" href="{{ route('agent',['agentid'=> $contactuss->agent_id]) }}">{{ $agentData->first_name." ".$agentData->last_name }}</a>
                             @else
                             Agent not found
                             @endif</td>
                               <td>
                             <?php
                             $propertyData = \App\Models\EntegralApiData::where('property_id',$contactuss->property_id)->first();
                             if($propertyData != null){
                                $suburb = str_replace(" ","-",$propertyData->suburb);
                                $town = str_replace(" ","-",$propertyData->town);
                                $province = str_replace(" ","-",$propertyData->province);
                                $mandate_saletype = str_replace(" ","-",$propertyData->mandate_saletype);
                               $customUrl = route('property-'.$mandate_saletype,['p_suburb'=>$suburb, 'p_town'=>$town, 'p_province'=>$province,'p_id'=>$propertyData->id,'p_ref'=>$propertyData->property_id]);
                              ?>
                              <a style="color: inherit;" href="{{ $customUrl }}">{{ $contactuss->property_id }}</a>
                              <?php
                             }else{
                              echo  "Property not found";
                             }
                             ?>
                              
                             </td>
                      <td>{{ $contactuss->name }}</td>
                        <td>{{ $contactuss->email }}</td>
                         <td>{{ $contactuss->phone_number }}</td>
                          <td>{{ $contactuss->message }}</td>
                         
                         
                      <td>
                       {{ $contactuss->created_at }}
                      </td>
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
                <!--{{ $contactus->links() }}-->
              <?php //dd($contactus->links()) ?>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  
                  {{ $contactus->links() }}
                   <p >Showing: {{ $contactus->currentPage() }} - {{ $contactus->count() }} of {{ $contactus->total() }}</p>
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
