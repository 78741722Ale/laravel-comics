<div class="flex_cent">
    <!-- Site Cards -->
    <div class="flex_cent" id="footer_upper">
        <div class="container-xl h-100">
            <div class="row w-100 h-100 flex_bet m-0 ">
                <!-- List Items -->
                <div class="col-4 h-100 flex_cent_2 bg-secondary">
                    <!-- Prova del Chiave Valore (su un singolo list item) -->
                    @foreach ($dc_comics_list as $single_value)
                    <!-- Questi sono singoli List Item -->
                    <span>{{$single_value}}</span>
                    @endforeach
                </div>
                <!-- Logo -->
                <div class="col-5 h-100 flex_cent_2 bg-success">DC Logo Goes Here</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Icons -->
    <div class="flex_cent" id="footer_under">
        <div class="container-xl h-100">
            <div class="row w-100 flex_bet m-0 h-100">
                <!-- Sign Up Buttons (Finito) -->
                <div class="col-2 p-0 h-100 flex_start_2">
                    <button class="sign">Sign-Up Now!</button>
                </div>
                <!-- Follow Up Buttons (Finito) -->
                <div class="col-5 p-0 h-100 social flex_end">
                    <ul class="flex_evenly gap-3 mb-0">
                        <li><a class="text-uppercase follow" href="#">Follow Us</a></li>
                        @forelse ($icons as $icon)
                        <li><img src="{{ $icon['img'] }}" alt="{{ $icon['alt'] }}"></li>
                        @empty
                        <p>Qui non c'è niente...</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
