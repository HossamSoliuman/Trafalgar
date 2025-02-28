@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','login')->first(); @endphp

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
                <div class="text-center mb-4 text-uppercase"><h1>{{ __('Login') }}</h1></div>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
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
    
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input mt-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-12 d-flex justify-content-between align-items-center flex-column">
                                    <button type="submit" class="btn submit_button">
                                        {{ __('Login') }}
                                    </button>
                                     @if (Route::has('lost-password'))
                                        <a class="btn-link" href="{{ route('lost-password') }}">
                                            <u>{{ __('Forgot Your Password?') }}</u>
                                        </a>
                                    @endif
                                    
                                     @if (Route::has('register'))
                                        <a class="btn-link" href="{{ route('register') }}">
                                            <u>{{ __('Create account') }}</u>
                                        </a>
                                    @endif
    
                                    <!--@if (Route::has('password.request'))-->
                                    <!--    <a class="btn-link" href="{{ route('password.request') }}">-->
                                    <!--        <u>{{ __('Forgot Your Password?') }}</u>-->
                                    <!--    </a>-->
                                    <!--@endif-->
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