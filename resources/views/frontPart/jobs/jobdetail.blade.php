
@if(isset($job) && !empty($job))
@section('title',$job->job_title)
@section('meta_keywords',$job->job_title)

@section('meta_description',$job->job_description)
@endif

@extends('layouts.front')

@section('content')
  
<!--breadcrumbs-->
<div class="breadcrumbs">
  <div class="container">
      <ul>
          <li><a href="{{ route('jobs') }}">Job Listing</a></li>
          <li><a href="#">{{ (isset($job->job_title))? ucfirst($job->job_title) :""}} - {{ (isset($job->job_location))? ucfirst($job->job_location) :""}}</a></li>
      </ul>
  </div>
</div>
<!--end breadcrumbs-->
  
<!--job detail-->

<section class="job_detail_section">
    <div class="container">
        <div class="job_detail_view">
            <div class="">
                <div class="job_left_section">
                    <h1>{{ (isset($job->job_title))? ucfirst($job->job_title) :""}}</h1>
                    <div class="job_info my-3">
                        <div class="job_type">
                            <small>Job Type</small>
                            <p>{{ (isset($job->job_type) && $job->job_type == 1)?"Full Time":"Part Type" }}</p>
                        </div>
                        <div class="job_location">
                            <small>Location</small>
                            <p>{{ (isset($job->job_location))? $job->job_location :""}}</p>
                        </div>
                        <div class="job_posted">
                            <small>Posted</small>
                            <p> {{ (isset($job->created_at))? $job->created_at->diffForHumans() :""}}  </p>
                        </div>
                    </div>
                    <div class="job_email">
                        <h5>Conatct</h5>
                        <p>{{ (isset($job->hr_email))? $job->hr_email :""}}</p>
                    </div>
                  
                </div>
            </div>
            <div class="">
                <div class="job_right_section">
                    @if(isset($job->job_description))
                    {!! $job->job_description !!}
                    @else
                    No Description Found
                    @endif
                   
                  
                </div>
            </div>
        </div>
    </div>
</section>

<!--end job detail-->

<!--apply online form-->
<section class="apply_online_form_section">
    <div class="container">
        <div class="apply_online_form">
            <h4>Apply Online</h4>
            <form action="{{ route('apply-for-job') }}" method="post"  enctype="multipart/form-data" id="apply-for-individual-job" >
              @csrf
                <div class="field_row">
                    <div class="form-group">
                        <label for="title">Title<span>*</span></label>
                        <div class="icon_select1">
                            <select id="title" name="title" class="form-control" required>
                              <option  value="Mr.">Mr. </option>
                              <option  value="Ms."> Ms. </option>
                              <option  value="Mrs."> Mrs. </option>
                              <option  value="Dr."> Dr. </option>
                              <option  value="Prof."> Prof. </option>
                              <option  value="Rev."> Rev. </option>
                            </select>
                        </div>
                          @error('title')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="first_name">First Name<span>*</span></label>
                        <input type="text" value="{{ old('first_name') }}" name="first_name" class="form-control" id="first_name" required>
                          @error('first_name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                        <label   for="sur_name">Surname<span>*</span></label>
                        <input type="text" value="{{ old('sur_name') }}" name="sur_name" class="form-control" id="sur_name" required>
                          @error('sur_name')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                    
                    
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="sa_resident">South African Resident<span>*</span></label>
                        <div class="radio-group">
                          <span>
                            <input type="radio" id="Yes" value="Yes" name="sa_resident" checked>
                            <label for="Yes" >Yes</label>
                          </span>
                          <span>
                            <input type="radio" id="No" value="No" name="sa_resident">
                            <label for="No">No</label>
                          </span>
                        </div>
                        {{-- <input type="text" value="{{ old('sa_resident') }}" name="sa_resident" class="form-control" id="sa_resident" required> @error('sa_resident') --}}
                      @error('sa_resident')
                        <span  style="color:red;"  > {{ $message }}<span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="nid_number">National ID, Permit, Passport or Visa Number<span>*</span></label>
                        <input type="text" value="{{ old('nid_number') }}" name="nid_number" class="form-control" id="nid_number" required>
                        @error('nid_number')
                          <span  style="color:red;"  > {{ $message }}<span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="home_language">Home Language<span>*</span></label>
                        <div class="icon_select1">
                            <select id="home_language" name="home_language" class="form-control" required>
                               <option value="English">English </option>
                                  <option value=" Afrikaans"> Afrikaans </option>
                                  <option value="IsiXhosa"> IsiXhosa </option>
                                  <option value="IsiZulu"> IsiZulu </option>
                                  <option value="IsiNdabele"> IsiNdabele </option>
                                  <option value="Sepedi"> Sepedi </option>
                                  <option value="Sesotho"> Sesotho </option>
                                  <option value="Setswana"> Setswana </option>
                                  <option value="Siswati"> Siswati </option>
                                  <option value="Tswhivenda"> Tswhivenda </option>
                                  <option value=" Xitsonga"> Xitsonga </option>
                                  <option value=" Other"> Other </option>
                            </select>
                        </div>
                        @error('home_language')
                          <span  style="color:red;"  > {{ $message }}<span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender<span>*</span></label>
                        <div class="radio-group">
                          <span>
                            <input type="radio" id="male" value="male" name="gender" checked>
                            <label for="male" >Male</label>
                          </span>
                          <span>
                            <input type="radio" id="female" value="female" name="gender">
                            <label for="female">Female</label>
                          </span>
                        </div>
                          @error('gender')
                            <span  style="color:red;"  > {{ $message }}<span>
                          @enderror
                    </div>
                
                
                {{-- <div class="field_row"> --}}
                    <div class="form-group">
                        <label for="address">Residential Address<span>*</span></label>
                        <textarea  id="address" name="address" class="form-control" rows="3" required>{{ old('address') }}</textarea>
                         @error('address')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                {{-- </div> --}}
                
                {{-- <div class="field_row"> --}}
                    
                    <div class="form-group">
                        <label for="city">City<span>*</span></label>
                        <input type="text"  value="{{ old('city') }}" class="form-control" name="city" id="city" required>
                         @error('city')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="postal_code">Postal Code<span>*</span></label>
                        <input type="text"  value="{{ old('postal_code') }}" class="form-control" name="postal_code" id="postal_code" required>
                         @error('postal_code')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label>Address Type<span>*</span></label>
                        <div class="radio-group">
                          <span>
                            <input type="radio" value="residential" id="residential" name="address_type" checked>
                            <label for="residential">Residential</label>
                          </span>
                          <span>
                            <input type="radio" value="postal" id="postal" name="address_type">
                            <label for="postal">Postal</label>
                          </span>
                          <span>
                            <input type="radio" value="other" id="other1" name="address_type">
                            <label for="other">Other</label>
                          </span>
                        </div>
                          @error('address_type')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div> --}}
                {{-- </div> --}}
                {{-- <div class="field_row"> --}}
                <div class="form-group">
                    <label>Province<span>*</span></label>
                    <div class="icon_select1">
                        <select id="province" name="province" class="form-control" required>
                          <option value="eastern Cape" selected>Eastern Cape</option>
                          <option value="free State">Free State</option>
                          <option value="gauteng">Gauteng</option>
                          <option value="kwazulu natal">Kwazulu Natal</option>
                          <option value="mpumalanga">Mpumalanga</option>
                          <option value="nm province">NW Province</option>
                          <option value="northern cape">Northern Cape</option>
                          <option value="northern province">Northern Province</option>
                          <option value="western cape">Western Cape</option>
                          <option value="other">Other</option>
                        </select>
                    </div>
                    {{-- <div class="radio-group">
                      <span>
                        <input type="radio" value="eastern Cape" id="eastern_cape" name="province" checked>
                        <label for="eastern_cape">Eastern Cape</label>
                      </span>
                      <span>
                        <input type="radio" value="free State" id="free_state" name="province">
                        <label for="free_state">Free State</label>
                      </span>
                      <span>
                        <input type="radio" value="gauteng" id="gauteng"  name="province">
                        <label for="gauteng">Gauteng</label>
                      </span>
                      <span>
                        <input type="radio" value="kwazulu natal" id="kwazulu_natal"  name="province">
                        <label for="kwazulu_natal">Kwazulu Natal</label>
                      </span>
                      <span>
                        <input type="radio" value="mpumalanga" id="mpumalanga"  name="province">
                        <label for="mpumalanga">Mpumalanga</label>
                      </span>
                      <span>
                        <input type="radio" id="nm_province" value="nm province"  name="province">
                        <label for="nm_province">NW Province</label>
                      </span>
                      <span>
                        <input type="radio" value="northern cape" id="northern_cape"  name="province">
                        <label for="northern_cape">Northern Cape</label>
                      </span>
                      <span>
                        <input type="radio" value="northern province" id="northern_province"  name="province">
                        <label for="northern_province">Northern Province</label>
                      </span>
                      <span>
                        <input type="radio" value="western cape" id="western_cape"  name="province">
                        <label for="western_cape">Western Cape</label>
                      </span>
                      <span>
                        <input type="radio" id="other" value="other"  name="province">
                        <label for="other">Other</label>
                      </span>
                    </div> --}}
                  @error('province')
                    <span  style="color:red;"  > {{ $message }}<span>
                  @enderror
                </div>
              {{-- </div> --}}
                
                <div class="form-group">
                    <label for="country">Country<span>*</span></label>
                    <input type="text" class="form-control" value="{{ old('country') }}" name="country" id="country" required>
                    @error('country')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                </div>
                <div class="field_row d-flex">
                    <div class="form-group w-50">
                        <label for="tel_number_home">Telephone Number (Home)</label>
                        <input type="number" class="form-control" name="tel_number_home" value="{{ old('tel_number_home') }}" id="tel_number_home" />
                           @error('tel_number_home')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                    <div class="form-group w-50">
                        <label for="tel_number_work">Telephone Number (Work)</label>
                        <input type="number" value="{{ old('tel_number_work') }}" class="form-control" name="tel_number_work" id="tel_number_work" >
                         @error('tel_number_work')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                </div>
                
                {{-- <div class="field_row"> --}}
                    <div class="form-group">
                        <label for="cell_number">Cell Number<span>*</span></label>
                        <input type="number" value="{{ old('cell_number') }}" name="cell_number" class="form-control" id="cell_number" required >
                          @error('cell_number')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                   
                    <div class="form-group">
                        <label for="email_address">Email Address<span>*</span></label>
                        <input type="email"  value="{{ old('email_address') }}" class="form-control" id="email_address" name="email_address" required>
                         @error('email_address')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                    </div>
                {{-- </div> --}}
                
                {{-- <div class="field_row"> --}}
                    <div class="form-group">
                        <label for="annual_package">Current Annual Salary<span>*</span></label>
                        <input type="text" value="{{ old('annual_package') }}"  class="form-control" name="annual_package" id="annual_package" required>
                      @error('annual_package')
                        <span  style="color:red;"  > {{ $message }}<span>
                      @enderror
                    </div>
                {{-- </div> --}}

                <div class="form-group">
                    <label for="salary_expectation">Salary Expectation<span>*</span></label>
                    <input type="number" value="{{ old('salary_expectation') }}"  class="form-control" name="salary_expectation" id="salary_expectation" required>
                  @error('salary_expectation')
                    <span  style="color:red;"  > {{ $message }}<span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="notice_period">Notice period<span>*</span></label>
                  <input type="text" value="{{ old('notice_period') }}"  class="form-control" name="notice_period" id="notice_period" required>
                @error('notice_period')
                  <span  style="color:red;"  > {{ $message }}<span>
                @enderror
              </div>
                
                {{-- <div class="field_row"> --}}
                <div class="form-group">
                        <label for="upload_cv">Upload CV<span>*</span></label>
                        <input type="file" class="form-control" name="upload_cv[]" id="upload_cv" required accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf" >
                        @error('upload_cv')
                          <span  style="color:red;"  > {{ $message }}<span>
                        @enderror
                </div>
                {{-- </div> --}}
              
                <div class="form-group">
                    <label for="upload_id">Upload ID<span>*</span></label>
                    <input type="file" class="form-control" name="upload_id" id="upload_id" required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                    @error('upload_id')
                      <span  style="color:red;"  > {{ $message }}<span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="upload_qualifications">Upload Qualifications<span>*</span></label>
                    <input multiple type="file" class="form-control" name="upload_qualifications[]" id="upload_qualifications" required accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf" >
                    @error('upload_qualifications')
                      <span style="color:red;"  > {{ $message }}<span>
                    @enderror
                </div>

              </div>                            
                <!--<button type="submit" class="form-control" id="submitButton" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Send message</button>-->              
                <button type="submit" class="form-control" id="submitButton" >Submit Application</button>
                <input type="hidden"  value="{{ (isset($job->id))? $job->id :"" }}" name="job_id">
            </form>
        </div>
    </div>
</section>


<script>
document.getElementById("apply-for-individual-job").addEventListener("submit", function(event) {
    let submitButton = document.getElementById("submitButton");
    if (!this.checkValidity()) {
        event.preventDefault();
        return;
    }
    submitButton.disabled = true;
    submitButton.innerText = "Sending, please wait...";
});
</script>

<div class="next-previous_view text-center">
  
    @php   $checkPreviousJob = \App\Models\Job::where('job_status',1)->where('id', '<',$job->id)->take(1)->first();  @endphp
    @if ($checkPreviousJob !== null)
    @php
                  
        $jobUrlPrevious =  route('job',['job_title' =>$checkPreviousJob->job_title_slug ]) @endphp
    <button onclick="location.href = '{{ $jobUrlPrevious }}';" ><span class="icon-arrow-left mr-2"></span>View Previous</button>
    @else
        <button disabled><span class="icon-arrow-left mr-2"></span>View Previous</button>
    @endif
    @php   $checkNextJob = \App\Models\Job::where('job_status',1)->where('id', '>',$job->id)->take(1)->first(); @endphp
    @if ($checkNextJob !== null)
     @php
                  
        $jobUrlNext =  route('job',['job_title' =>$checkNextJob->job_title_slug ]) @endphp
    <button  onclick="location.href = '{{ $jobUrlNext }}';" >View Next<span class="icon-arrow-right ml-2"></span></button>
    @else
    <button disabled>View Next<span class="icon-arrow-right ml-2"></span></button>
    @endif
</div>
<!--end apply online form-->

<!-- footer top section  -->

    <section class="footer_top_section anotherpage_footer">
        
    </section>

<!-- footer top section  -->

<!-- main footer section  -->

@include('frontPart/mainFooter')

<!-- main footer section  -->

<!-- copyright section  -->
@endsection

@push('tagger-script-property-search-result-page')
@include('frontPart.js.propertySearchResultTagger')
@endpush
