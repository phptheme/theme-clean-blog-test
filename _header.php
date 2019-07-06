<?php

$theme->beginLayout([
    'title' => 'Coming Soon Template Demo!',
    'header' => $header,
    'footer' => [
        'copyright' => 'Copyright &copy; Your Website {year} (demo)',
        'buttons' => [
            [
                'icon' => 'fab fa-twitter',
                'url' => '#twitter',
                'label' => 'Twitter link'
            ],
            [
                'icon' => 'fab fa-facebook-f',
                'url' => '#facebook',
                'label' => 'Facebook link'
            ],                        
            [
                'icon' => 'fab fa-instagram',
                'url' => '#instagram',
                'label' => 'Instagram link'
            ]
        ]
    ],
    'navigation' => [
        'title' => 'My Site Title',
        'homeUrl' => '#home',
        'items' => [
            [
                'label' => 'Home',
                'url' => '/'
            ],
            [
                'label' => 'About',
                'url' => 'about.php'
            ],
            [
                'label' => 'Sample Post',
                'url' => 'post.php'
            ],
            [
                'label' => 'Contact',
                'url' => 'contact.php'
            ]
        ]
    ]
]);