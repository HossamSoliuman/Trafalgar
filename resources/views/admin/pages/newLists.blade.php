@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">News List</li>
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
                <h3 class="card-title">Details</h3><a href="{{ route('admin.news.create')}}" class="btn  btn-primary btn-sm">Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  
                    <tr>
                      <!--<th style="width: 10px">#</th>-->
                      <th>Title</th>
                        <th>Feature Image</th>
                      <th>Slug</th>
                    
                      <th>Dispaly</th>
                      <th >Created at</th>
                       <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(!empty($newLists))
                      @foreach($newLists as $newList)
                    <tr>
                      
                      <td>{{ $newList->news_title }}</td>
                        <td> <img width="120px" height="80px" src="{{ asset('storage/news_feature_image/'.$newList->news_featured_image) }}" /></td>
                       <td>{{ $newList->news_title_slug }}</td>
                      
                         <td>
                         @if($newList->visible_status == 1)
                         <a href="{{ route('admin.news.not-display',$newList->id) }}" class="btn  bg-gradient-success btn-xs">Display</a>
                         
                         @endif
                         @if($newList->visible_status == 0)
                         <a href="{{ route('admin.news.display',$newList->id) }}" class="btn  bg-gradient-danger btn-xs"> Not display</a>
                            @endif
                         </td>
                         
                         
                      <td>
                       {{ $newList->created_at }}
                      </td>
                      
                      <td><a href="{{ route('admin.news.edit',$newList->id) }}" class="btn  bg-gradient-primary btn-xs">Edit</a>
                          <form  action="{{ route('admin.news.destroy', $newList->id) }}" method="post">
                                        @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn  bg-gradient-danger btn-xs">Delete</button>
                                    </form>
                        
                         </td>
                     
                      <!--<td><span class="badge bg-danger">55%</span></td>-->
                    </tr>
                    @endforeach
                    @endif
                    
                  </tbody>
                </table>
              </div>
               
            
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  
                  {{ $newLists->links() }}
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
