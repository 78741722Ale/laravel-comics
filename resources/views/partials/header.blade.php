<div class="flex_cent">
    <!-- Site Additional -->
    <div class="flex_cent" id="site_additional">
        <div class="container-xl h-100">
            <div class="row w-100 flex_end m-0 h-100">
                <!-- Col for Power$Additional -->
                <div class="col-2 flex_cent_2 bg-danger h-100">Power Visa</div>
                <div class="col-2 flex_cent_2 bg-danger h-100">Additional</div>
            </div>
        </div>
    </div>
    <!-- Site Navbar -->
    <div class="flex_cent" id="site_navbar">
        <div class="container-xl h-100">
            <div class="row w-100 flex_bet m-0 h-100">
                <!-- Col for Logo&Navbar&Searchbar-->
                <!-- Logo -->
                <div class="col-1 p-0 flex_start_2 h-100">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
                </div>
                <!-- Navbar -->
                <div class="col-9 h-100">
                    <ul class="flex_evenly h-100 bordo">
                        @foreach ($nav_links as $element)
                        <li><a class="{{$element['rotta']}} " href="{{$element['ref']}}">{{$element['index']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Searchbar -->
                <div class="col-2 flex_cent_2 bg-warning h-100">Searchbar</div>
            </div>
        </div>
    </div>
</div>
