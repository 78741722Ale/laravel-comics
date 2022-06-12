<div class="flex_cent">
    <!-- Site Additional (FATTO) -->
    <div class="flex_cent" id="site_additional">
        <div class="container-xl h-100">
            <div class="row w-100 flex_end m-0 h-100">
                <!-- Col for Power$Additional -->
                <div class="col-2 additional_text flex_start_2 h-100">
                    <span>Dc Power<sup>sm</sup> Visa</span>
                </div>
                <div class="col-2 additional_text flex_end h-100">
                    <span>Additional Dc Sites</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Navbar -->
    <div class="flex_cent" id="site_navbar">
        <div class="container-xl h-100">
            <div class="row w-100 flex_bet m-0 h-100">
                <!-- Col for Logo&Navbar&Searchbar-->
                <!-- Logo (OK FATTO) -->
                <div class="col-1 p-0 flex_start_2 h-100">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
                </div>
                <!-- Navbar (OK FATTO-FORSE) -->
                <div class="col-8 p-0 h-100">
                    <ul class="flex_evenly h-100">
                        @foreach ($nav_links as $element)
                        <!-- Sacrificato $element['rotta'] x Index, solo per attivare classe attiva su comics -->
                        <li><a class="{{ $element['index'] === 'comics' ?  'active' : ''}}" href="{{$element['ref']}}">{{$element['index']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Searchbar (OK FATTO-FORSE) -->
                <div class="col-3 p-0 flex_end h-100">
                    <form class="flex_end ">
                        <input class="form-control border-bottom me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary btn-outline-ligth" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
