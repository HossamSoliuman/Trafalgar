@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Applicant Detail</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
                 <li class="breadcrumb-item"><a href="{{ route('admin.job-management.index')}}">Jobs</a></li>
              <li class="breadcrumb-item active">Add Jobs</li>
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
                <h3 class="card-title">Applicant Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Title</th>
                      <th>Details</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                       <td>
                      <b>Full Name</b>
                      </td>
                      <td>{{ $appliedJob->title." ".$appliedJob->first_name." ".$appliedJob->sur_name }}</td>
                    </tr>
                     <tr>
                     
                       <td>
                       <b>South African Resident</b>
                      </td>
                      <td>{{ $appliedJob->south_african_resident }}</td>
                    </tr>
                     <tr>
                    
                       <td>
                       <b>National Id Number</b>
                      </td>
                      <td>{{ $appliedJob->national_id_number }}</td>
                    </tr>
                     <tr>
                   
                       <td>
                       <b>Home Language</b>
                      </td>
                      <td>{{ $appliedJob->home_language}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Gender</b>
                      </td>
                      <td>{{ $appliedJob->gender}}</td>
                    </tr>
                     <tr>
                   
                       <td>
                       <b>Address</b>
                      </td>
                      <td>{{ $appliedJob->address}}</td>
                    </tr>
                     <tr>
                   
                       <td>
                       <b>Country</b>
                      </td>
                      <td>{{ $appliedJob->country}}</td>
                    </tr>
                      
                     <tr>
                   
                       <td>
                       <b>City</b>
                      </td>
                      <td>{{ $appliedJob->city}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Postal code</b>
                      </td>
                      <td>{{ $appliedJob->postal_code}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Address Type</b>
                      </td>
                      <td>{{ $appliedJob->address_type}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Province</b>
                      </td>
                      <td>{{ $appliedJob->province}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Telephone number (home)</b>
                      </td>
                      <td>{{ $appliedJob->tel_number_home}}</td>
                    </tr>
                   
                     <tr>
                   
                       <td>
                       <b>Telephone Number (work)</b>
                      </td>
                      <td>{{ $appliedJob->tel_number_work}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Cell Number</b>
                      </td>
                      <td>{{ $appliedJob->cell_number}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Fax Number</b>
                      </td>
                      <td>{{ $appliedJob->fax_number}}</td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Email</b>
                      </td>
                      <td>{{ $appliedJob->email_address}}</td>
                    </tr>
                    
                    <tr>
                   
                       <td>
                       <b>Annual Package</b>
                      </td>
                      <td>{{ $appliedJob->annual_package}}</td>
                    </tr>
                    
                    
                    <tr>
                   
                       <td>
                       <b>CV</b>
                      </td>
                      <td>
                          @if(isset($appliedJob->appliedJobDocument))
                          @php $appliedJobDocuments =  $appliedJob->appliedJobDocument @endphp  
                        
                          @foreach($appliedJobDocuments as  $app)
                          
                          <a  href="{{ asset('storage/upload_cv/'.$app->document_link) }}" >Download Cv</a> , 
                          @endforeach
                          @endif
                      </td>
                    </tr>
                    
                    
                    <tr>
                   
                       <td>
                       <b>Status</b>
                      </td>
                      <td>
                       <form method="post" action="{{ route('admin.job-applications.change-status',$appliedJob->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                <div class="form-group">
                                
                                <select name="set_status" class="form-control">
                                <option <?php if($appliedJob->job_application_status == 1){ echo "selected"; } ?> value="1" >New</option>
                                <option  <?php if($appliedJob->job_application_status == 2){ echo "selected"; } ?>  value="2" >In Process</option>
                                <option  <?php if($appliedJob->job_application_status == 3){ echo "selected"; } ?>  value="3" >Shortlisted</option>
                                <option <?php if($appliedJob->job_application_status == 4){ echo "selected"; } ?>  value="4" >Rejected</option>
                                <option  <?php if($appliedJob->job_application_status == 5){ echo "selected"; } ?>  value="5" >Selected</option>
                                </select>
                                </div>
                                
                                </div>
                                
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update status</button>
                                </div>
                            </form>
                      </td>
                    </tr>
                    
                    <tr>
                   
                       <td>
                       <b>Job Note</b>
                      </td>
                      <td>  
                      <form method="post" action="{{ route('admin.job-applications.add-note',$appliedJob->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                               <div class="form-group">
                        <label>Textarea</label>
                        <textarea name="add_note" class="form-control" rows="3" placeholder="Enter ...">{{ $appliedJob->job_note }}</textarea>
                      </div>
                                
                                </div>
                                
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Note</button>
                                </div>
                            </form>
                            </td>
                    </tr>
                    
                     <tr>
                   
                       <td>
                       <b>Applied on</b>
                      </td>
                      <td>{{ $appliedJob->created_at}}</td>
                    </tr>
                   
                  </tbody>
                </table>
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



@push('ckeditor-script')
@include('admin.pages.js.ckEditorScript')
@endpush
