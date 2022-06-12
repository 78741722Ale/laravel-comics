
<div class="flex_cent">
    <!-- Jumbotron (OK FATTO) -->
    <div class="flex_cent" id="site_jumbo">
        <div class="container-xl h-100">
            <div class="row w-100 m-0 flex_cent_2 h-100">
                Jumbotron Goes Here
            </div>
        </div>
    </div>
    <!-- Site Cards -->
    <div class="flex_cent" id="site_card">
        <div class="container-xl h-100">
            <div class="w-100 p-4 gap-3 flex_cent_2 h-100 flex-wrap">
                <!-- Cards - Falle poi dinamiche (OK TIENILE COSI) -->
                @foreach ($fumetti as $fumetto)
                <div class="card mx-2 p-0" style="width: 11rem;">
                    <!-- Immagine -->
                    <img src="{{$fumetto['thumb']}}" class="card-img-top" alt="Testo Dinamico">
                    <!-- Text  -->
                    <h6 class="card-title ps-0 pt-1 pb-0 mb-0">{{$fumetto['series']}}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Site Icons -->
    <div class="flex_cent" id="site_icon">
        <div class="container-xl h-100">
            <div class="row-cols-5 flex_cent_2 w-100 m-0 h-100">
                <!-- 1 Col (Sono dinamiche)-->
                @forelse ($apps as $app)
                <div class="col p-0 h-100 flex_cent_2">
                    <!-- Image -->
                    <div class="col-4 h-100 flex_cent_2">
                        <img class="w-50 h-50" src="{{ $app['img'] }}" alt="{{ $app['alt'] }}"></li>
                    </div>
                    <!-- Text -->
                    <div class="col-8 h-100 flex_start_2">
                        <span class="text-uppercase app_text">{{ $app['text'] }}</span>
                    </div>
                </div>
                @empty
                <p>Qui non c'è niente...</p>
                @endforelse
            </div>
        </div>
    </div>
</div>



