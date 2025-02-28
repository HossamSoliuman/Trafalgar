@extends('layouts.front')

@section('content')

<section class="profile_section_view">
    <div class="container">
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="{{ route('user-profile')}}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('change-password')}}">Change Password</a>
                    </li>
                    <li >
                        <a href="{{ route('favourite-properties') }}">Favourite</a>
                    </li>
                    <!--    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Others</a>-->
                    <!--    <ul class="collapse list-unstyled" id="pageSubmenu">-->
                    <!--        <li>-->
                    <!--            <a href="#">Page 1</a>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="#">Page 2</a>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                </ul>
            </nav>
    
            <!-- Page Content  -->
            <div id="content">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <span class="icon-menu"></span>
                </button>
                <div class="profile-form auth_forms_view py-0 border-0">
                    <div class="card-body col-md-6">
                        <form method="POST" action="{{ route('update-profile') }}"> 
                        @csrf
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control " name="name" value="{{ Auth::user()->name }}" >
                                      @error('name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control " name="email"  value="{{ Auth::user()->email }}" >
                                         @error('email')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                <label for="phone_number">Phone</label>
                                    <input id="phone_number" type="number" class="form-control " name="phone_number"  value="{{ Auth::user()->phone_number }}" >
                                        @error('phone_number')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                <label for="address">Address</label>
                                    <input id="address" type="text" class="form-control " name="address"  value="{{ Auth::user()->address }}" >
                                      @error('address')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                                </div>
                                <div class="col-md-12 d-flex justify-content-between align-items-end flex-column">
                                    <button type="submit" class="btn submit_button w-50 mb-0">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- main footer section  -->

@include('frontPart/mainFooter')

<!-- main footer section  -->

<!-- copyright section  -->
@endsection