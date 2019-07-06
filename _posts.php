<?php

echo $theme->posts([
    'items' => [
        [
            'url' => 'post.php',
            'title' => 'Man must explore, and this is exploration at its greatest',
            'description' => 'Problems look mighty small from 150 miles up',
            'created' => 'Posted by Start Bootstrap on September 24, 2019'
        ],
        [
            'url' => 'post.php',
            'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
            'created' => 'Posted by Start Bootstrap on September 24, 2019'
        ],
        [
            'url' => 'post.php',
            'title' => 'Science has not yet mastered prophecy',
            'description' => 'We predict too much for the next year and yet far too little for the next ten.',
            'created' => 'Posted by Start Bootstrap on August 24, 2019'
        ],
        [
            'url' => 'post.php',
            'title' => 'Failure is not an option',
            'description' => 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.',
            'created' => 'Posted by Start Bootstrap on July 8, 2019'
        ]
    ]
]);