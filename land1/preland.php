<?php

$redirectUrl = 'http://bestpresent70.site/land2';
$push_link = '';

require('lib/app.php');

$prelandInjector = new PrelandInjector();
$prelandInjector->redirectUrl = $redirectUrl;

$renderCallback = new BeforeRenderCallback([], getcwd());
$renderCallback->addCallback($prelandInjector);

ob_start($renderCallback);

register_shutdown_function(function() use($renderCallback) {
    $renderCallback->prepare();
    $content = $renderCallback(ob_get_clean(), 0);
    echo $content;
});
