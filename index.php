<?php

use PhpTheme\CleanBlogTheme\Theme;

require __DIR__ . '/vendor/autoload.php';

$theme = new Theme;

$theme->baseUrl = '/startbootstrap-clean-blog';

$header = [
    'title' => 'Clean Blog Demo',
    'description' => 'A Blog Theme by Start Bootstrap (demo)',
    'image' => $theme->baseUrl . '/img/home-bg.jpg'
];

require __DIR__ . '/_header.php';

require __DIR__ . '/_posts.php';

echo $theme->button([
    'label' => 'Older Posts →',
    'url' => '#posts',
    'align' => 'right'
]);

require __DIR__ . '/_footer.php';