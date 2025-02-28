@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','register')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@extends('layouts.front')

@section('content')

<div class="auth_forms_view">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-center mb-4 text-uppercase"><h1>Register</h1></div>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="row mb-2">
                                <label for="name" class="col-md-12">{{ __('Name') }}</label>
    
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <label for="email" class="col-md-12">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-2">
                                <label for="password" class="col-md-12">{{ __('Password') }}</label>
    
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="cpassword" class="col-md-12">Confirm Password</label>
    
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" >
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-12 d-flex justify-content-between align-items-center flex-column">
                                    <button type="submit" class="btn submit_button">Register</button>
    
                                    <span>Aleardy have an account? <a class="btn-link" href="{{ route('login') }}"><u>Sign in</u></a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- main footer section  -->

@include('frontPart/mainFooter')

<!-- main footer section  -->

<!-- copyright section  -->
@endsection
