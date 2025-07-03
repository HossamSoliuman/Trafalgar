@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Sitemap</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Generate Sitemap</h3>
              </div>
              <form action="{{ route('generate-sitemap') }}" method="get" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="calendlyLink">Click the button to generate a new sitemap for your website.</label>
                    </br>
                    <a href="{{ route('updated-sitemap') }}">New sitemap</a>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
         
          </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
