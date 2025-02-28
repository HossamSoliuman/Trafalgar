  <section class="property-solution online_services_view section-padding">
        <div class="container">
            <div class="heading text-center">
                <h1>One-stop Property Solutions </h1>
            </div>
            <div class="online_services_ mt-lg-5 mt-sm-4 mt-3">
                @if($propertySolutions)
                @foreach($propertySolutions as $propertySolution)
                    <div class="each-property-solution">
                        <div class="eachimg">
                            <img src="{{ asset('storage/property_soultion/'.$propertySolution->image_link) }}" alt="{{ $propertySolution->title_name }}">
                        </div>
                        <h5>{{ $propertySolution->title_name }}</h5>
                       {!! $propertySolution->description !!}
                        <button onclick="window.location='{{ $propertySolution->url_link }}'" class="theme-btn">Use us Now!</button>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
