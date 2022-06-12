<div class="flex_cent">
    <!-- Site Information (FATTO) -->
    <div class="flex_cent" id="footer_upper">
        <div class="container-xl h-100">
            <div class="row w-100 h-100 flex_bet m-0 ">
                <!-- List Items -->
                <div class="col-5 p-3 h-100 flex_cent">
                    <!-- List Zone (FATTO) -->
                    <div class="col-12 p-0 flex_cent_2 h-75">
                        <!-- Prima Lista -->
                        <div class="col-4 p-0 h-100 flex_cent">
                            <!-- Lista Superiore -->
                            <div class="col-12 h_70 ps-2">
                                <ul class="footer_list mt-1">
                                    <!-- Title -->
                                    <li class="footer_list_titles text-uppercase">Dc Comics</li>
                                    <!-- Options (With ForEach Title) -->
                                    @foreach ($dc_comics_list as $single_value)
                                    <li class="footer_list_text">{{$single_value}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Lista Inferiore -->
                            <div class="col-12 h_30 ps-2">
                                <ul class="footer_list">
                                    <!-- Title -->
                                    <li class="footer_list_titles text-uppercase">Shop</li>
                                    <!-- Options (With ForEach Title) -->
                                    @foreach ($dc_comics_shop as $single_value)
                                    <li class="footer_list_text">{{$single_value}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Seconda Lista -->
                        <div class="col-4 h-100 ps-2">
                            <ul class="footer_list mt-1">
                                <!-- Title -->
                                <li class="footer_list_titles text-uppercase">Dc</li>
                                <!-- Options (With ForEach Title) -->
                                @foreach ($dc_termini as $single_value)
                                <li class="footer_list_text">{{$single_value}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Terza Lista -->
                        <div class="col-4 h-100 ps-2">
                            <ul class="footer_list mt-1">
                                <!-- Title -->
                                <li class="footer_list_titles text-uppercase">Sites</li>
                                <!-- Options (With ForEach Title) -->
                                @foreach ($dc_sites as $single_value)
                                <li class="footer_list_text">{{$single_value}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Copy Text Zone (FATTO) -->
                    <div class="col-12 copy_text flex_end flex-column h-25">
                        <p class="ms-2">
                            All Site Content TM and &copy 2020 DC Entertainment,
                            unless otherwhise <a href="#">noted here</a>. All rights reserved.
                            <a href="#">Cookie Settings</a>
                        </p>
                    </div>
                </div>
                <!-- Logo (FATTO) -->
                <div class="col-5 h-100 dc_logo"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer icons (FATTO) -->
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
