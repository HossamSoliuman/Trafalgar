@extends('layouts.admin')

@section('content')
<?php ///print_r($contactus); ?>
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>Newsletter Subscribers</h1>-->
            <a class="btn  btn-primary btn-sm" href="{{ route('admin.newletter-export') }}">Excel&nbsp;&nbsp;<i class="fas fa-download"></i> </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.news-letter-subscriber')}}">Home</a></li>
              <li class="breadcrumb-item active">Newsletter Subscriber</li>
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
                <h3 class="card-title">Newsletter Subscribers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <!--<th style="width: 10px">#</th>-->
                      <th style="width: 10px">#</th>
                        <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Created at</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($newsLetterSignUp as $key => $newsLetterSignUps)
                    <tr>
                         <td>{{ $i = ($newsLetterSignUp->perPage() * ($newsLetterSignUp->currentPage() - 1)) + ($key+1) }}</td>
                       <td>{{ $newsLetterSignUps->user_name }}</td>
                      <td>{{ $newsLetterSignUps->user_email }}</td>
                     <td>
                           
                            @if($newsLetterSignUps->is_active == 1)<a href="{{ route('admin.news-letter-subscriber.not-display',$newsLetterSignUps->id) }}" class="btn  bg-gradient-success btn-xs">subscribed</a> @else <a href="{{ route('admin.news-letter-subscriber.display',$newsLetterSignUps->id) }}" class="btn  bg-gradient-danger btn-xs">unsubscribed</a>  @endif</td>
                        
                      <td>
                       {{ $newsLetterSignUps->created_at }}
                      </td>
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
                
              <?php //dd($contactus->links()) ?>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  
                  {{ $newsLetterSignUp->links() }}
                   <p >Showing: {{ $newsLetterSignUp->currentPage() }} - {{ $newsLetterSignUp->count() }} of {{ $newsLetterSignUp->total() }}</p>
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
