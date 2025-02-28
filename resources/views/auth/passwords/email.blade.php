@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','lost-password')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif

@extends('layouts.app')

@section('content')
<div class="auth_forms_view">
<div class="container">
    <div class="row justify-content-center ss">
        <div class="col-md-5">
            <div class="text-center mb-4 text-uppercase"><h1>Reset Password</h1></div>
            <div class="card">
                <!--<div class="card-header">{{ __('Reset Password') }}</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-12 d-flex justify-content-between align-items-center flex-column">
                                <button type="submit" class="btn submit_button w-75 mt-2">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
