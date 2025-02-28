@extends('layouts.front')

@section('content')

<section class="profile_section_view">
    <div class="container">
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <ul class="list-unstyled components">
                     <li>
                        <a href="{{ route('user-profile') }}">Profile</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('change-password') }}">Change Password</a>
                    </li>
                    <li >
                        <a href="{{ route('favourite-property-list') }}">Favourite</a>
                    </li>
                    
                </ul>
            </nav>
    
            <!-- Page Content  -->
            <div id="content">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <span class="icon-menu"></span>
                </button>
                <div class="profile-form auth_forms_view py-0 border-0">
                    <div class="card-body col-md-6">
                        <form method="POST" action="#"> 
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                <label for="o-password">Old Password</label>
                                    <input id="o-password" type="password" class="form-control " name="o-password" >
                                </div>
                                <div class="col-md-12 mb-3">
                                <label for="n-password">New Password</label>
                                    <input id="n-password" type="password" class="form-control " name="n-password" >
                                </div>
                                <div class="col-md-12 d-flex justify-content-between align-items-end flex-column">
                                    <button disabled type="submit" class="btn submit_button w-50 mb-0">update</button>
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