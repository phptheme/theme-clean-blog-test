<?php

use PhpTheme\CleanBlogTheme\Theme;
use PhpTheme\Core\Html;

require __DIR__ . '/vendor/autoload.php';

$theme = new Theme;

$theme->baseUrl = '/startbootstrap-clean-blog';

$header = [
    'title' => 'Contact Me',
    'description' => 'Have questions? I have answers.',
    'image' => $theme->baseUrl . '/img/contact-bg.jpg'
];

$theme->beginContent();

?>

<p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>

<?php

echo $theme->inputContainer([
    'label' => 'Name',
    'content' => Html::tag('input', '', [
        'class' => 'form-control',
        'placeholder' => 'Name'
    ])
]);

echo $theme->inputContainer([
    'label' => 'E-mail',
    'content' => Html::tag('input', '', [
        'class' => 'form-control',
        'placeholder' => 'E-mail'
    ])
]);

echo $theme->inputContainer([
    'label' => 'Message',
    'content' => Html::tag('textarea', '', [
        'class' => 'form-control',
        'placeholder' => 'Message',
        'rows' => 4
    ])
]);

$content = $theme->endContent();

require __DIR__ . '/_header.php';

echo $theme->contactForm([
    'submitLabel' => 'Send',
    //'message' => 'No message allowed.',
    'content' => $content
]);

require __DIR__ . '/_footer.php';