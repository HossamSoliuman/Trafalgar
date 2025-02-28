@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','report-maintenance-issues')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <div class="breadcrumbs">
      <div class="container">
          <ul>
              <li><a href="#">Manage</a></li>
              <li><a href="#">Report Maintenance Issues</a></li>
          </ul>
      </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Report Maintenance Issues</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing">
                    <div class="maintenance_form_view">
                        <div class="maintenance_form">
                            <form action="{{ route('report-maintenance-issues-email') }}" method="post" id="reportMaintenanceForm" enctype="multipart/form-data">
                                @csrf
                                <div class="maintenance_form_inner">
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="building_name">Building name:<span>*</span></label>
                                            <input type="text" class="form-control" name="building_name" id="building_name">
                                            @error('building_name')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="unit_no">Unit Number:<span>*</span></label>
                                            <input type="text" name="unit_no" class="form-control" id="unit_no">
                                            @error('unit_no')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="physical_address">Physical address:<span>*</span></label>
                                            <textarea type="text" class="form-control" id="physical_address" name="physical_address" rows="2"></textarea>
                                            @error('physical_address')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h4>Contact Details:</h4>
                                <div class="maintenance_form_inner">
                                    <div class="field_row">
                                         <div class="form-group">
                                            <label for="name">Name:<span>*</span></label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            @error('name')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:<span>*</span></label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            @error('email')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tel">Tel:<span>*</span></label>
                                            <input type="number" class="form-control" id="tel" name="tel">
                                            @error('tel')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cell">Cell:<span>*</span></label>
                                            <input type="text" class="form-control" id="cell" name="cell">
                                            @error('cell')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="report_maintenance">Report maintenance:<span>*</span></label>
                                            <textarea  class="form-control" id="report_maintenance" name="report_maintenance" rows="2"></textarea>
                                            @error('report_maintenance')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label>Urgency (please tick one):<span>*</span></label>
                                            <div class="radio-group">
                                              <span>
                                                <input type="radio" id="critical" name="urgency" value="critical" checked="">
                                                <label for="critical">Critical (< 6 hours)</label>
                                              </span>
                                              <span>
                                                <input type="radio" value="urgent" id="urgent" name="urgency">
                                                <label for="urgent">Urgent (< 12 hours)</label>
                                              </span>
                                              <span>
                                                <input type="radio" value="high" id="high" name="urgency">
                                                <label for="high" >High (24 - 48 hours)</label>
                                              </span>
                                              <span>
                                                <input value="low" type="radio" id="low" name="urgency">
                                                <label for="low" >Low (5 working days)</label>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <b class="my-3 d-block">Disclaimer: indicative timing is an objective resolution turn around time and dependent on contractor availability and the scope of work required.</b>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label>Person responsible for the account:<span>*</span></label>
                                            <div class="radio-group">
                                              <span>
                                                <input type="radio" id="hoa" name="responsible_for_account" value="Body Corporate/HOA" checked>
                                                <label for="hoa">Body Corporate / HOA</label>
                                              </span>
                                              <span>
                                                <input type="radio" id="owner" name="responsible_for_account" value="owner">
                                                <label for="owner">Owner</label>
                                              </span>
                                              <span>
                                                <input type="radio" id="tenant" name="responsible_for_account" value="tenant">
                                                <label for="tenant">Tenant</label>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label>Quote first/approved job:<span>*</span></label>
                                            <div class="radio-group">
                                              <span>
                                                <input type="radio" id="quotation" name="quote_first" value="Quotation required" checked="">
                                                <label for="quotation">Quotation required</label>
                                              </span>
                                              <span>
                                                <input type="radio" id="directly" name="quote_first" value="Attend to work directly">
                                                <label for="directly">Attend to work directly</label>
                                              </span>
                                            </div>
                                        </div>
                                    </div>
                                    <b class="my-3 d-block">Image Upload: Please resize images to 100 – 150kbs. The file max size limit is 1MB</b>
                                    <div class="field_row">
                                        <div class="form-group">
                                            <label for="upload_file1">Upload file 1<span>*</span></label>
                                            <input type="file" class="form-control" id="upload_file1" name="upload_file1" accept="image/png, image/jpeg">
                                              @error('upload_file1')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_file2">Upload file 2<span>*</span></label>
                                            <input type="file" class="form-control" id="upload_file2" name="upload_file2" accept="image/png, image/jpeg">
                                            @error('upload_file2')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_file3">Upload file 3<span>*</span></label>
                                            <input type="file" class="form-control" name="upload_file3" id="upload_file3" accept="image/png, image/jpeg">
                                            @error('upload_file3')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_file4">Upload file 4<span>*</span></label>
                                            <input type="file" class="form-control" id="upload_file4" name="upload_file4" accept="image/png, image/jpeg">
                                            @error('upload_file4')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_file5">Upload file 5<span>*</span></label>
                                            <input type="file" class="form-control" id="upload_file5" name="upload_file5" accept="image/png, image/jpeg">
                                            @error('upload_file5')
                                              <span  style="color:red;"  > {{ $message }}<span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="button" id="submitReportForm" class="form-control">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                   @include('frontPart/rightBar/rightBarQuickContactForm') 
                    @include('frontPart/rightBar/rightBarQuickLinkMenu') 
                   
                      @include('frontPart/rightBar/rightBarSocialIcon') 
                     @include('frontPart/rightBar/rightNewsLetter') 
                </div>
            </div>
        </div>
    </section>

    <!-- page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection

@push('report-maintenance-issues-js')
@include('frontPart.js.reportMaintenanceIssuesJs')
@endpush

