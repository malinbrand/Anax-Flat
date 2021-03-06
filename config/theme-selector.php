<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typo.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],

        "separator3" => "------------------------------------------------",

        "design1" => [
            "title"      => "A theme with...",
            "class"      => "design1",
            "stylesheets" => [
                "css/design1.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "design2" => [
            "title"      => "A theme with...",
            "class"      => "design2",
            "stylesheets" => [
                "css/design2.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],

        "design3" => [
            "title"      => "A theme with...",
            "class"      => "design3",
            "stylesheets" => [
                "css/design3.min.css",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            ],
            "javascripts" => ["js/responsive-menu.js"],
        ],
    ]
];
