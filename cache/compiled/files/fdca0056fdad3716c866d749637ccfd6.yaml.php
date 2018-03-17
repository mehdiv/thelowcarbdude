<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mehdiv/Dev/thelowcarbdude/user/config/site.yaml',
    'modified' => 1514330931,
    'data' => [
        'title' => 'The Lowcarb Dude',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Luis Monterrubio',
            'email' => 'luis.monterrubio@me.com'
        ],
        'metadata' => [
            'description' => '“Anyone can cook healthy, delicious and beautifully” Yes I eat lotsa fat and feel good LCHF | Keto | Lowcarb evangelist'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
        ],
        'global_featured_image' => 'featured.jpg',
        'social' => [
            0 => [
                'text' => 'facebook',
                'url' => 'http://www.facebook.com/getgrav'
            ],
            1 => [
                'text' => 'twitter',
                'url' => 'http://www.twitter.com/getgrav'
            ],
            2 => [
                'text' => 'google-plus',
                'url' => 'http://www.plus.google.com/getgrav'
            ],
            3 => [
                'text' => 'linkedin',
                'url' => 'http://www.linkedin.com/getgrav'
            ],
            4 => [
                'text' => 'youtube-play',
                'url' => 'http://www.youtube.com/getgrav'
            ],
            5 => [
                'text' => 'home',
                'url' => 'http://www.getgrav.org'
            ]
        ],
        'slider' => [
            0 => [
                'image' => 'slide3.jpg',
                'title' => 'A very delicious blog',
                'url' => '#'
            ],
            1 => [
                'image' => 'slide1.jpg',
                'title' => 'Duis autem',
                'url' => '#'
            ],
            2 => [
                'image' => 'slide2.jpg',
                'title' => 'Pumpkin recipe',
                'url' => '#'
            ]
        ],
        'menu' => [
            0 => [
                'url' => 'error',
                'text' => 'Error Page'
            ]
        ],
        'copyright' => 'Designed and developed by <a title="WebMan WordPress Themes" href="http://www.webmandesign.eu/"><strong>WebMan Design</strong></a>, Ported By <a href="http://www.getgrav.org" rel="dofollow" target="_blank" title="Grav">Grav Team</a>'
    ]
];
