<?php

use PhpTheme\CleanBlogTheme\Theme;

require __DIR__ . '/vendor/autoload.php';

$theme = new Theme;

$theme->baseUrl = '/startbootstrap-clean-blog';

$header = [
    'title' => 'About Me',
    'description' => 'This is what I do.',
    'image' => $theme->baseUrl . '/img/about-bg.jpg'
];

$theme->beginContent();

?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
    
<?php

$content = $theme->endContent();

require __DIR__ . '/_header.php';

echo $theme->post([
    'content' => $content
]);

require __DIR__ . '/_footer.php';