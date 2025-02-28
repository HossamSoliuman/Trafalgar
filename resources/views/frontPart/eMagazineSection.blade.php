  <section class="e-magazine section-padding">
      <div class="container">
          <div class="heading">
              <h2>E-Magazine</h2>
          </div>
          <div class="row">
              <div class="col-lg-6">
                  <div class="magazine-image-section text-center">
                      <img class="img-fluid" src="{{ asset('front/images/magazine-image.webp') }}" alt="magazine-image"
                          loading="lazy">
                      <button class="theme-btn"
                          onclick="window.open('https://www.estate-living.co.za/trafalgar/','_blank')"> View Magazine
                      </button>
                  </div>
              </div>
              <div class="col-lg-6 e-magazine-right-content">
                  <div class="each-magazine">
                      <div class="icon-div">
                          <img style="cursor: pointer;" onclick="window.location='{{ route('email-property-alert') }}';"
                              src="{{ asset('front/images/icon-property-alerts.webp') }}" alt="alert" loading="lazy">
                      </div>
                      <div class="magazine-content">
                          <h4><a href="{{ route('email-property-alert') }}">Property Alerts</a></h4>
                          <p><a href="{{ route('email-property-alert') }}" style="color:#bfd630">Sign up</a> for your
                              customised property alerts delivered
                              directly to your inbox.</p>
                      </div>
                  </div>
                  <div class="each-magazine">
                      <div class="icon-div">
                          <img style="cursor: pointer;" onclick="window.location='{{ route('sell') }}';"
                              src="{{ asset('front/images/icon-sell-your-property.webp') }}" alt="property"
                              loading="lazy">
                      </div>
                      <div class="magazine-content">
                          <h4><a href="{{ route('sell') }}">Sell Your Property</a></h4>
                          <p>List to sell your property with the help of our qualified
                              real estate professionals.</p>
                      </div>
                  </div>
                  <div class="each-magazine">
                      <div class="icon-div">
                          <img style="cursor: pointer;" onclick="window.location='{{ route('sell') }}#e-magazine';"
                              src="{{ asset('front/images/icon-free-evaluation.webp') }}" alt="valuation"
                              loading="lazy">
                      </div>
                      <div class="magazine-content">
                          <h4><a href="{{ route('sell') }}#e-magazine">Free Evaluation</a></h4>
                          <p>Request a free property Evaluation from one of our real
                              estate agents to find out what your property is worth.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
