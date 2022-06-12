<?php

return  [
    /* Footer Icons */
    'icons' => [
        [
            "img" => "img/footer-facebook.png",
            "alt" => "facebook"
        ],
        [
            "img" => "img/footer-twitter.png",
            "alt" => "twitter"
        ],
        [
            "img" => "img/footer-youtube.png",
            "alt" => "youtube"
        ],
        [
            "img" => "img/footer-pinterest.png",
            "alt" => "pinterest"
        ],
        [
            "img" => "img/footer-periscope.png",
            "alt" => "periscope"
        ],
    ],
    'apps' => [
        [
            "img" => "img/buy-comics-digital-comics.png",
            "alt" => "#",
            "text" => "Digital Comics"
        ],
        [
            "img" => "img/buy-comics-merchandise.png",
            "alt" => "#",
            "text" => "DC Merchandise"
        ],
        [
            "img" => "img/buy-comics-subscriptions.png",
            "alt" => "#",
            "text" => "Subscription"
        ],
        [
            "img" => "img/buy-comics-shop-locator.png",
            "alt" => "#",
            "text" => "Comic Shop Locator"
        ],
        [
            "img" => "img/buy-dc-power-visa.svg",
            "alt" => "#",
            "text" => "Dc Power Visa"
        ],
    ],
    'footer_list' => [
        'dc_comics_list' => ["Characters","Comics","Movies","TV","Games","Videos","News"],
        'dc_shop' => ["Shop DC","Shop DC Collectibles"],
        'dc_termini' => ["Terms Of Use","Privacy policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"],
        'dc_sites' => ["DC","MAD Magazine","DC Kids","DC Universe","DC Power Visa"]
    ],
    'navbar_list' => [
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "/",
            "index" => "home"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "comics", // Essendo attivo su comics al click dovrebbe riportare alla view Principale
            "index" => "comics"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "movies",
            "index" => "movies"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "tv",
            "index" => "tv"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "games",
            "index" => "games"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "collectibles",
            "index" => "collectibles"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "videos",
            "index" => "videos"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "fans",
            "index" => "fans"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "news",
            "index" => "news"
        ],
        [
            "rotta" => "Route::currentRouteName()",
            "ref" => "shop",
            "index" => "shop"
        ],
    ]
];

