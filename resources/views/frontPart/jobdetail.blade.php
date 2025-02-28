@extends('layouts.front')

@section('content')
  
<!--breadcrumbs-->
<div class="breadcrumbs">
  <div class="container">
      <ul>
          <li><a href="#">Job Listing</a></li>
          <li><a href="#">Sectional Title - Portfolio Administrator</a></li>
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
                    <h1>Sectional Title – Portfolio Administrator</h1>
                    <div class="job_info my-3">
                        <div class="job_type">
                            <small>Job Type</small>
                            <p>Full Time</p>
                        </div>
                        <div class="job_location">
                            <small>Location</small>
                            <p>Johannesburg</p>
                        </div>
                        <div class="job_posted">
                            <small>Posted</small>
                            <p>3 days ago</p>
                        </div>
                    </div>
                    <div class="job_email">
                        <h5>Conatct</h5>
                        <p>birdhrecruitment@tragalar.co.za</p>
                    </div>
                    <div class="job_reference">
                        <h5>Reference</h5>
                        <p>PA.FEB22</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="job_right_section">
                    <h4>Overview</h4>
                    <p>Trafalgar Birdhaven is in search of an experienced Sectional Title Portfolio Administrator to join their dynamic team.</p>
                    <h4>Requirement</h4>
                    <ul>
                        <li>2 years experience as a Portfolio Administrator</li>
                        <li>Computer literate</li>
                        <li>Willing to work under pressure,</li>
                        <li>Own transport</li>
                    </ul>
                    <h4>The responsibilities for the Sectional Title Portfoli Administrator listed in summary but not limited to,includes:</h4>
                    <ul>
                        <li>Assisting the ST Portfolio Manager,</li>
                        <li>Typing of correspondence and minutes,</li>
                        <li>Typing of correspondence to trustees and owners</li>
                        <li>Liaising with Chairman and Trustees in the absence of the Portfolio Manager</li>
                        <li>Assisting with preparation of monthly packs for the chairman of the Body Corporate</li>
                        <li>Ensuring all information is kept up to date on inhouse systems</li>
                        <li>Logging insurance claims</li>
                        <li>Assisting with maintenance issues</li>
                        <li>Management of emails (continuous correspondence with clients within 24h turnaround time)</li>
                        <li>Ensuring invoices are authorized and paid timeously</li>
                        <li>Drafting Annual General Meeting notices and meeting prep</li>
                        <li>Assist with completing AGM workflows after AGMs</li>
                        <li>Submit CSOS Annual Returns after AGMs</li>
                        <li>Other administrative duties.</li>
                    </ul>
                    <h4>Should you mot hear from us within 2 weeks, please consider your application unsuccessful.</h4>
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
            <form>
                <div class="field_row">
                    <div class="form-group">
                        <label for="title">Title<span>*</span></label>
                        <div class="icon_select">
                            <select id="title" class="form-control">
                              <option>Default </option>
                              <option>Mr.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fname">First Name<span>*</span></label>
                        <input type="text" class="form-control" id="fname">
                    </div>
                    <div class="form-group">
                        <label for="sname">Surname<span>*</span></label>
                        <input type="text" class="form-control" id="sname">
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="sa-Resident">South African Resident<span>*</span></label>
                        <input type="text" class="form-control" id="sa-Resident">
                    </div>
                    <div class="form-group">
                        <label for="n-id-number">National ID Number<span>*</span></label>
                        <input type="text" class="form-control" id="n-id-number">
                    </div>
                    <div class="form-group">
                        <label for="h-language">Home Language<span>*</span></label>
                        <div class="icon_select">
                            <select id="h-language" class="form-control">
                              <option>Default </option>
                              <option>Hindi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gender<span>*</span></label>
                        <div class="radio-group">
                          <span>
                            <input type="radio" id="male" name="radio-group" checked>
                            <label for="male">Male</label>
                          </span>
                          <span>
                            <input type="radio" id="female" name="radio-group">
                            <label for="female">Female</label>
                          </span>
                        </div>
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="address">Address<span>*</span></label>
                        <textarea type="text" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="country">Country<span>*</span></label>
                        <input type="text" class="form-control" id="country">
                    </div>
                    <div class="form-group">
                        <label for="city">City<span>*</span></label>
                        <input type="text" class="form-control" id="city">
                    </div>
                    <div class="form-group">
                        <label for="p-code">Postal Code<span>*</span></label>
                        <div class="icon_select">
                            <select id="p-code" class="form-control">
                              <option>Default</option>
                              <option>133001</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address Type<span>*</span></label>
                        <div class="radio-group">
                          <span>
                            <input type="radio" id="residential" name="radio-group" checked>
                            <label for="residential">Residential</label>
                          </span>
                          <span>
                            <input type="radio" id="postal" name="radio-group">
                            <label for="postal">Postal</label>
                          </span>
                          <span>
                            <input type="radio" id="other" name="radio-group">
                            <label for="other">Other</label>
                          </span>
                        </div>
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label>Province<span>*</span></label>
                        <div class="radio-group">
                          <span>
                            <input type="radio" id="eastern-cape" name="radio-group" checked>
                            <label for="eastern-cape">Eastern Cape</label>
                          </span>
                          <span>
                            <input type="radio" id="free-state" name="radio-group">
                            <label for="free-state">Free State</label>
                          </span>
                          <span>
                            <input type="radio" id="gauteng" name="radio-group">
                            <label for="gauteng">Gauteng</label>
                          </span>
                          <span>
                            <input type="radio" id="kwazulu-natal" name="radio-group">
                            <label for="kwazulu-natal">Kwazulu Natal</label>
                          </span>
                          <span>
                            <input type="radio" id="mpumalanga" name="radio-group">
                            <label for="mpumalanga">Mpumalanga</label>
                          </span>
                          <span>
                            <input type="radio" id="NW-Province" name="radio-group">
                            <label for="NW-Province">NW Province</label>
                          </span>
                          <span>
                            <input type="radio" id="Northern-Cape" name="radio-group">
                            <label for="Northern-Cape">Northern Cape</label>
                          </span>
                          <span>
                            <input type="radio" id="Northern-Province" name="radio-group">
                            <label for="Northern-Province">Northern Province</label>
                          </span>
                          <span>
                            <input type="radio" id="Western-Cape" name="radio-group">
                            <label for="Western-Cape">Western Cape</label>
                          </span>
                          <span>
                            <input type="radio" id="Other" name="radio-group">
                            <label for="Other">Other</label>
                          </span>
                        </div>
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="tel-number-home">Telephone Number (Home)<span>*</span></label>
                        <input type="number" class="form-control" id="tel-number-home">
                    </div>
                    <div class="form-group">
                        <label for="tel-number-work">Telephone Number (Work)<span>*</span></label>
                        <input type="number" class="form-control" id="tel-number-work">
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="cell-number">Cell Number<span>*</span></label>
                        <input type="number" class="form-control" id="cell-number">
                    </div>
                    <div class="form-group">
                        <label for="fax-number">Fax Number<span>*</span></label>
                        <input type="number" class="form-control" id="fax-number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address<span>*</span></label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="annual-package">Annual Package (Cost to Comaony)<span>*</span></label>
                        <input type="text" class="form-control" id="annual-package">
                    </div>
                </div>
                
                <div class="field_row">
                    <div class="form-group">
                        <label for="upload-cv">Upload CV<span>*</span></label>
                        <input type="file" class="form-control" id="upload-cv" accept="image/png, image/jpeg">
                    </div>
                </div>
                <button type="submit" class="form-control">Send message</button>
            </form>
        </div>
    </div>
</section>
<div class="next-previous_view text-center">
    <button><span class="icon-arrow-left mr-2"></span>View Previous</button>
    <button>View Next<span class="icon-arrow-right ml-2"></button>
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
