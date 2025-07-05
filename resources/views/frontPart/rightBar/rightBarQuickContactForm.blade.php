                    @include('frontPart/rightBar/rightBarMenu')
                    <div class="sidelist contact_sidelist">
                        <h4>Quick Contact</h4>
                        <form action="{{ route('quick-contact') }}" method="post" id="quick-contact">
                            <input type="hidden" required name="pageurl" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"> @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Name<span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter name"
                                            required="" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-6 pr-2">
                                    <div class="form-group ">
                                        <label for="email">Email<span>*</span></label>
                                        <input type="email" class="form-control" placeholder="Enter email"
                                            required="" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-6 pl-2">
                                    <div class="form-group">
                                        <label for="phone">Phone<span>*</span></label>
                                        <input type="text" required="" class="form-control"
                                            placeholder="Enter phone" id="phone" name="phone">
                                    </div>
                                </div>

                                @php $route = Route::current()->getName(); @endphp

                                @if ($route == 'agent-search')
                                    <input type="hidden" required name="pagename" value="agent search contact form">
                                @elseif($route == 'manage.sectional-title-and-hoa-management')
                                    <input type="hidden" required name="pagename"
                                        value="sectional title and hoa management contact form">
                                @elseif($route == 'manage.commercial-property-management')
                                    <input type="hidden" required name="pagename"
                                        value="commercial property management contact form">
                                @elseif($route == 'manage.estate-management')
                                    <input type="hidden" required name="pagename"
                                        value="estate management contact form">
                                @elseif($route == 'manage.sectional-title-and-hoa-management.developer-services')
                                    <input type="hidden" required name="pagename"
                                        value="developer services contact form">
                                @elseif($route == 'about-us')
                                    <input type="hidden" required name="pagename" value="about us contact form">
                                @elseif($route == 'rent.vacancy-marketing')
                                    <input type="hidden" required name="pagename"
                                        value="vacancy marketing contact form">
                                @elseif($route == 'rent.tenant-screening')
                                    <input type="hidden" required name="pagename"
                                        value="tenant screening contact form">
                                @elseif($route == 'rent.tenant-guide')
                                    <input type="hidden" required name="pagename" value="tenant guide contact form">
                                @endif

                                <div class="col-12">
                                    <div class="foabout-usessage">Message<span>*</span></label>
                                        <textarea id="message" required="" class="form-control" name="message" placeholder="Enter message" rows="4"
                                            style="width:100%;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="form-control">Send message</button>
                                </div>

                            </div>
                        </form>
                    </div>
