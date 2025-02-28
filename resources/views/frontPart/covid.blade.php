@php $pageMeta = App\Models\StaticPageMetaTag::where('page_name','covid-19')->first(); @endphp

@if(isset($pageMeta) && !empty($pageMeta))
@section('title',$pageMeta->page_title)
@section('meta_keywords',$pageMeta->page_keyword)
@section('meta_description',$pageMeta->page_description)
@endif
@extends('layouts.front')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ul></ul>
        </div>
    </div>
    
    <!-- page section  -->

    <section class="guldenland_section manage_section mt-5">
        <div class="container">
            <div class="heading h1_tag mb-4">
                <h1>Covid-19 Operational Plan Toolkit</h1>
            </div>
            <div class="guldenland_products">
                <div class="guldenland_products_listing manage_section_listing1">
                    <div class="each_manage_section">
                        <p>All rental buildings and community schemes (sectional title buildings and HOA’s) which employ staff such as cleaners, gardeners, general maintenance staff and caretakers are required to develop and implement a Covid-19 Operational Plan as prescribed by the relevant regulations. Maintaining a documented portfolio of evidence for the plan will also be important. In an effort to promote legal compliance and simplify the implementation process, Trafalgar has collated a toolkit of relevant templates and documents which will be helpful for implementation purposes. The generic templates cover all areas of a credible Covid-19 Operational Plan, but will need to be customised and tailored to the specific building context which will vary. There is also information provided about training available from Occupational Health and Safety Consultants, which will provide more detail and specialised training, targeted at Covid-19 Compliance Officers and larger complexes.</p>
                        <p>The index of templates making up the overall toolkit is shown below, and each document can be downloaded from the link provided. Should you have any questions arising from this toolkit or how to apply these to your complex, please contact your portfolio manager or alternatively please log your query in the form provided below, for a detailed response.</p>
                        <ul class="pdfs">
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/COVID-19-Policy-2020.docx">Covid-19 Operational Policy</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/COVID-19-Management-Plan-2020.docx">Covid-19 Management Plan</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/COVID-19-Compliance-Officer-DMA166a.docx">Covid-19 Compliance Officer appointment</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/20_2020_v4._guidance_on_vuln.pdf">Guidelines for vulnerable employees and over 60’s</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/06/Regulations-L3_Final_Final-002.pdf">Alert Level 3 Regulations applicable from 1 June 2020</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/06/Alert-Level-3-Regulations-and-implications-for-owners-and-residents-in-complexes-010620.pdf">Alert Level 3 Regulations and implications for owners and residents in complexes</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/Covid-19-Operationa-Plan-Safety-and-Hygiene-Training-2020.pptx">Staff training slides (Powerpoint)</a> & <a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/Covid-19-Operationa-Plan-Safety-and-Hygiene-Training-2020.pdf">Staff training slides (PDF)</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/Covid-19-screening-schedule.xlsx">Daily screening template</a></li>
                            <li><a href="https://www.trafalgar.co.za/wp-content/uploads/2020/05/covid-signage.zip">Signage</a></li>
                        </ul>
                    </div>
                    <div class="each_manage_section">
                        <div class="contact_section p-0">
                            <div class="maintenance_form_view m-0">
                                <div class="management_form">
                                <small>Please submit your details and Covid-19 related questions:</small>
                                    <form action="{{ route('covidform') }}" method="post">
                                        @csrf
                                       
                                        <div class="maintenance_form_inner">
                                            <div class="field_row">
                                                <div class="form-group">
                                                    <label for="name">Name<span>*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" required="">
                                                </div>
                                            </div>
                                            <div class="field_row">
                                                <div class="form-group">
                                                    <label for="email">Email:<span>*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City:<span>*</span></label>
                                                    <input type="text" class="form-control" id="city" name="city" required="">
                                                </div>
                                            </div>
                                            <div class="field_row">
                                                <div class="form-group">
                                                    <label for="building_name">Building Name:<span>*</span></label>
                                                    <input type="text" class="form-control" id="building_name" name="building_name" required="">
                                                </div>
                                            </div>
                                            <span></span>
                                            <div class="field_row">
                                                <div class="form-group">
                                                    <label for="comment_or_question">Comments or Questions</label>
                                                    <textarea class="form-control" id="comment_or_question" rows="3" name="comment_or_question"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="m-0 form-control">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
