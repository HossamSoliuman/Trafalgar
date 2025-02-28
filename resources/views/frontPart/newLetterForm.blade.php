@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','newsletter-signup')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    
    <!-- page section  -->

    <div class="auth_forms_view">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-md-5">
                    <div class="text-center mb-4 text-uppercase"><h1>Newsletter Signup</h1></div>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('subscriber-newsletter') }}" method="post">
                               @csrf   
                                <div class="row mb-2">
                                    <label for="email" class="col-md-12">Name</label>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required id="letter_name" name="letter_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="email" class="col-md-12">{{ __('E-Mail Address') }}</label>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" required id="letter_email" name="letter_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn submit_button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>

    <!-- page section  -->

    <!-- main footer section  -->

   @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
