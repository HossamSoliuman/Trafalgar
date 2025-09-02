<section class="about-section section-padding">
    <div class="scheme_consultation">
        <a href="{{ $setting->calendly_link }}" target="_blank">
            @if ($setting->calendly_icon)
                <img class="img-fluid" src="{{ asset('storage/banner_image/' . $setting->calendly_icon) }}" alt="calender" />
            @endif
            <p>Book your FREE 15 minute community scheme consultation</p>
        </a>
    </div>
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-lg-6 d-flex p-0">
                <div id="youtube-video-container" class="youtube-video-container w-100 h-100">
                    <div class="video-placeholder d-flex align-items-center justify-content-center w-100 h-100"
                         style="background-image: url('{{ asset('front/images/vid-poster.webp') }}'); background-size: cover; background-position: center; min-height: 100%;">
                        <button class="load-video-btn"
                                style="background: rgba(0,0,0,0.7); color: white; border: none; border-radius: 50%; width: 80px; height: 80px; font-size: 18px;">
                            ▶
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="about-section-content pl-3">
                    <div class="heading">
                        <h2>About us</h2>
                    </div>
                    <h6>
                        Trafalgar's core business is property management services for sectional title schemes and home owners associations across South Africa.
                    </h6>
                    <p>
                        Trafalgar has a successful 50-year property management track record, dating back to the
                        opening of the first sectional title registers in South Africa. Trafalgar holds current
                        registration certificates with all the regulatory bodies relevant to managing agents in South Africa:
                        the Property Practitioners Regulatory Authority ("PPRA"), the National Association of
                        Managing Agents ("NAMA") and the Council for Debt Collectors.
                    </p>
                    @php $aboutus = route('about-us'); @endphp
                    <button style="cursor: pointer;" onclick="location.href='{{ $aboutus }}'" class="theme-btn mt-2">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const videoContainer = document.getElementById('youtube-video-container');
        const placeholder = videoContainer.querySelector('.video-placeholder');
        const loadVideoBtn = placeholder.querySelector('.load-video-btn');

        loadVideoBtn.addEventListener('click', function () {
            const iframe = document.createElement('iframe');
            iframe.setAttribute('class', 'wp-video-shortcode w-100 h-100');
            iframe.setAttribute('src', 'https://www.youtube.com/embed/7sNnYFXViME?autoplay=1&loop=1');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allowfullscreen', '');

            placeholder.style.display = 'none';
            videoContainer.appendChild(iframe);
        });
    });
</script>
