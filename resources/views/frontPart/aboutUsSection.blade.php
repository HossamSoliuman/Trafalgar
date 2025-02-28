<section class="about-section">
    <div class="scheme_consultation">
        <a href="{{ $setting->calendly_link }}" target="_blank">
            @if ($setting->calendly_icon)
                <img class="img-fluid" src="{{ asset('storage/banner_image/' . $setting->calendly_icon) }}"
                    alt="calender" />
            @endif
            <p>Book your FREE 15 minute community scheme consultation</p>
        </a>
    </div>
    <div class="row m-0">
        <div class="col-lg-6 pl-0">
            <div class="wp-video">
                <div id="youtube-video-container" class="youtube-video-container">
                    <div class="video-placeholder"
                        style="background-image: url('{{ asset('front/images/vid-poster.webp') }}'); background-size: cover; width: 100%; height: 394px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                        <button class="load-video-btn"
                            style="background: rgba(0,0,0,0.7); color: white; border: none; padding: 10px 20px; border-radius: 5px;">
                            Play Video
                        </button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const videoContainer = document.getElementById('youtube-video-container');
                        const placeholder = videoContainer.querySelector('.video-placeholder');
                        const loadVideoBtn = placeholder.querySelector('.load-video-btn');

                        loadVideoBtn.addEventListener('click', function() {
                            // Create iframe dynamically
                            const iframe = document.createElement('iframe');
                            iframe.setAttribute('height', '394');
                            iframe.setAttribute('class', 'wp-video-shortcode w-100');
                            iframe.setAttribute('src',
                                'https://www.youtube.com/embed/7sNnYFXViME?si=ASlrQQsVksamG930&autoplay=1&loop=1');
                            iframe.setAttribute('frameborder', '0');
                            iframe.setAttribute('allowfullscreen', '');

                            // Replace placeholder with iframe
                            placeholder.style.display = 'none';
                            videoContainer.appendChild(iframe);
                        });

                        // Optional: Intersection Observer for more advanced lazy loading
                        if ('IntersectionObserver' in window) {
                            const observer = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        loadVideoBtn.click();
                                        observer.disconnect();
                                    }
                                });
                            }, {
                                threshold: 0.1
                            }); // Trigger when 10% of the element is visible

                            observer.observe(videoContainer);
                        }
                    });
                </script>
            </div>
        </div>
        <!-- Rest of the content remains the same -->
        <div class="col-lg-6 mt-lg-0 mt-3 d-flex align-items-center">
            <div class="about-section-content">
                <div class="heading">
                    <h1>About us</h1>
                </div>
                <h3>Trafalgar's core business is property management services
                    for sectional title schemes and home owners associations
                    across South Africa.</h3>
                <p>Trafalgar has a successful 50-year property management track record, dating back to the opening
                    of the first sectional title registers in South Africa. Trafalgar holds current registration
                    certificates with all the regulatory bodies relevant to managing agents in South Africa: the
                    Property Practitioners Regulatory Authority ("PPRA"), the National Association of Managing Agents
                    ("NAMA") and
                    the Council for Debt Collectors.</p>
                @php $aboutus = route('about-us'); @endphp
                <button style='cursor: pointer;' onclick="location.href='{{ $aboutus }}'"
                    class="theme-btn mt-2">Learn More</button>
            </div>
        </div>
    </div>
</section>
