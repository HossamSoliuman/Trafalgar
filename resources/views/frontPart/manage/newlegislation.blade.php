@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','newlegislation')->first(); @endphp
@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')
    
    <!--about banner-->
    <section class="jobbanner-section about_top_banner">
        <div class="jobbanner-text">
            <h1>New Legislation</h1>
        </div>
    </section>
    <!--about banner-->
    
    <!-- about page section  -->
    <section class="guldenland_section about_page_content mt-5">
        <div class="container">
            <div class="heading mb-4">
                <div class="manage-paragraph text-justify">
                    <p>With the gazetting and implementation of the CSOS and STSM Acts on the 7th October 2016, a summary of the practical implications of the Acts for property owners and investors is available below. Trafalgar Property Management is currently attending to the registration of the property entities we manage with CSOS, based on signed authorisation resolution and together with the lodgement of specified governance documentation. We have added the full legislation documents in MS Word format so keywords and the source legislation can be searched conveniently and time efficiently. We have engaged with the CSOS Ombud to clarify a number of questions and ambiguities in the new legislation and will update the contents of this page as further clarification is forthcoming. Please don’t hesitate to let us know if we can assist with any questions or concerns you may have.</p>
                </div>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing">
                    <div class="each_manage_section manage-paragraph">
                        <h4>TRAFALGAR TRUSTEE / DIRECTOR TRAINING</h4>
                        <ul>
                            <li><a href="#">Training Presentation: CSOS and STSM Acts</a></li>
                            <li><a href="#">Presentation from the CSOS Ombud</a></li>
                            <li><a href="#">Frequently Asked Questions From the CSOS Ombud</a></li>
                        </ul>
                        
                        <h4>TRUSTEE ROLES, RESPONSIBILITIES, GOVERNANCE OBJECTIVES AND EFFECTIVE DECISION MAKING RECOMMENDATIONS</h4>
                         <iframe class="mb-3" width="100%" height="400" src="https://www.youtube.com/embed/t-qiPE63WnA?feature=oembed&enablejsapi=1&origin=https://www.trafalgar.co.za" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                        <h4>SUMMARIES OF THE NEW LEGISLATION</h4>
                        <ul>
                            <li><a href="#">THE STSM ACT: WHAT YOU NEED TO KNOW RIGHT NOW</a></li>
                            <li><a href="#">THE CSOS ACT: HERE ARE THE ESSENTIALS</a></li>
                        </ul>
                        
                        <h4>THE ACTS</h4>
                        <p>The applicable new legislation may be downloaded from the links below in MS Word format to enable convenient searching for keywords:</p>
                        <ul>
                            <li><a href="#">Sectional Title Schemes Management Act</a></li>
                            <li><a href="#">Sectional Title Schemes Management Act Regulations</a></li>
                            <li><a href="#">Annexure 1 Prescribed Management Rules</a></li>
                            <li><a href="#">Annexure 2 Prescribed Conduct Rules</a></li>
                            <li><a href="#">Sectional Titles Act</a></li>
                            <li><a href="#">Sectional Title Act Regulations</a></li>
                            <li><a href="#">Community Scheme Ombuds Services Act</a></li>
                            <li><a href="#">Community Scheme Ombuds Services Act Regulations</a></li>
                            <li><a href="#">Community Scheme Ombuds Services Act Regulations – Fees Levies</a></li>
                        </ul>
                        
                        <h4>CSOS WEBSITE</h4>
                        <ul>
                            <li><a href="#">www.csos.org.za</a></li>
                        </ul>
                        
                        <h4>CSOS’S NEWSLETTER</h4>
                        <ul>
                            <li><a href="#">Shared Living – Issue 1</a></li>
                        </ul>
                        
                        <h4>USEFUL LINKS</h4>
                        <ul>
                            <li><a href="#">http://www.nama.org.za/</a></li>
                            <li><a href="#">http://www.csos.org.za/</a></li>
                            <li><a href="#">https://www.csos.org.za/</a></li>
                        </ul>
                    </div>
                    <div class="each_manage_section manage-paragraph">
                        <h4>ANY QUESTIONS?</h4>
                        <div class="contact_section p-0 mb-4">
                            <div class="maintenance_form_view m-0">
                                <div class="management_form m-0">
                                    <small>If you have any questions, please use the form shown below to submit your question for a detailed response. Thank you.</small>
                                    <form action="{{ route('newlegislationForm') }}" method="post">
                                       @csrf
                                        <div class="maintenance_form_inner">
                                            <span></span>
                                            <div class="field_row">
                                                <div class="form-group m-0">
                                                    <label for="name">First Name<span>*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="surname">Surname<span>*</span></label>
                                                    <input type="text" class="form-control" id="surname" name="surname" required="">
                                                </div>
                                                 <div class="form-group m-0">
                                                    <label for="email">Email:<span>*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="phone">Phone:<span>*</span></label>
                                                    <input type="number" class="form-control" id="phone" name="phone" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="complex">Name of Complex:<span>*</span></label>
                                                    <input type="text" class="form-control" id="complex" name="complex" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="city">City:<span>*</span></label>
                                                    <input type="text" class="form-control" id="city" name="city" required="">
                                                </div>
                                                <div class="form-group m-0">
                                                    <label>Preferred method of contact<span>*</span></label>
                                                    <div class="radio-group">
                                                        <span>
                                                            <input type="radio" value="email" id="p_email" name="method_of_contact">
                                                            <label for="p_email">Email</label>
                                                        </span>
                                                        <span>
                                                            <input checked="" type="radio" id="p_phone" name="method_of_contact" value="phone">
                                                            <label for="p_phone">Cellphone</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-0">
                                                    <label for="time_to_call">Preferred time to contact<span>*</span></label>
                                                    <input type="text" class="form-control" id="time_to_call" name="time_to_call" required="">
                                                </div>
                                            </div>
                                            <div class="field_row mt-3">
                                                <div class="form-group">
                                                    <label for="comment_or_question">Comments or Message</label>
                                                    <textarea class="form-control" id="comment_or_question" rows="3" name="comment_or_question"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="m-0 form-control">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6354048.188095173!2d35.174414!3d38.95682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2str!4v1651643088270!5m2!1sen!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="guldenland_sidebar">
                   @include('frontPart/rightBar/rightBarQuickContactForm') 
                    @include('frontPart/rightBar/rightBarQuickLinkMenu') 
                   
                      @include('frontPart/rightBar/rightBarSocialIcon') 
                     @include('frontPart/rightBar/rightNewsLetter') 
                     <div class="sidelist">
                        <h4>Registration certificates for Trafalgar Property Management (Pty) Ltd</h4>
                        <ul>
                            <li><a href="#">Estate Agency Affairs Board (EAAB) Certificate</a></li>
                            <li><a href="#">National Association of Managing Agents (NAMA) Certificate</a></li>
                            <li><a href="#">Council for Debt Collectors</a></li>
                            <li><a href="#">Professional Indemnity Cover</a></li>
                            <li><a href="#">South African Property Owners Association (SAPOA) Certificate</a></li>
                        </ul>
                    </div>
                    <div class="sidelist">
                        <h4>Registration certificates for Trafalgar Financial Services (Pty) Ltd</h4>
                        <ul>
                            <li><a href="#">Financial Services Board</a></li>
                            <li><a href="#">Registered Credit Provider</a></li>
                            <li><a href="#">FIA Membership Certificate</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about page section  -->

    <!-- main footer section  -->

    @include('frontPart/mainFooter')

    <!-- main footer section  -->

    <!-- copyright section  -->
@endsection
