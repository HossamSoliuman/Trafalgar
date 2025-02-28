  <div class="sidelist sociallinks_list">
                        <h4>Social Links</h4>
                        <ul>
                            <li><a target="_blank" href="<?php if($setting->facebook_link){ echo $setting->facebook_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/facebook.svg') }}" alt="facebook" /></a></li>
                            <li><a target="_blank" href="<?php if($setting->twitter_link){ echo $setting->twitter_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/twitter.svg') }}" alt="twitter" /></a></li>
                            <li><a target="_blank" href="<?php if($setting->youtube_link){ echo $setting->youtube_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/youtube.svg') }}" alt="youtube" /></a></li>
                            <li><a target="_blank" href="<?php if($setting->linkedin_link){ echo $setting->linkedin_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/linkedin.svg') }}" alt="linkedin" /></a></li>
                            <li><a target="_blank" href="<?php if($setting->instagram_link){ echo $setting->instagram_link; }else{ echo "#"; } ?>"><img class="img-fluid" src="{{ asset('front/images/instagram.svg') }}" alt="instagram" /></a></li>
                        </ul>
                    </div>