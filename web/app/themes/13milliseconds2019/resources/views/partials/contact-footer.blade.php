<section id="contact" class="row" data-city="{{$options->location}}">
    <div class="col-md-6 locationInfo">
        <div class="wrap row no-gutter">

            <div class="col-12 cityBlock">
                Currently in <span id="city"></span>
            </div>

            <div class="col-md-6">
                <div id="clock">
                    <i class="fal fa-clock"></i>
                </div>
                <div id="time"></div>
            </div>
            
            <div class="col-md-6">
                <div id="weatherIcon"></div>
                <div>
                    <span id="tempF">70</span>˚F / <span id="tempC">20</span>˚C
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 contactInfo">
        <div class="wrap">
            <div class="email">
                <a target="_blank" href="mailto:{{$options->contactEmail}}">{{$options->contactEmail}}</a>
            </div>

            <div class="links">
                @foreach ($options->links as $link)
                    <a target="_blank" href="{{$link['link']}}">{{$link['name']}}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>