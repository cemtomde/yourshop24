<?php

require('config.php');

$offers = json_decode($dataOffers, true);
$offer = json_decode($dataOffer, true);

$dir = __DIR__;

$newPrice = 990;
$oldPrice = 1980;
$currencyDisplay = 'руб';

require('lib/app.php');

$newPriceHtml = '<x-newprice>' . $newPrice . '</x-newprice>';
$oldPriceHtml = '<x-oldprice>' . $oldPrice. '</x-oldprice>';
$currencyDisplayHtml = '<x-currency>'. $currencyDisplay .'</x-currency>';

$newPrice = $newPriceHtml;
$oldPrice = $oldPriceHtml;

$renderCallback = new BeforeRenderCallback([], getcwd());

$data_get = $_GET;
$js_injector = new JsInjector($data_get);

$renderCallback->addCallback($js_injector);

ob_start();

register_shutdown_function(function() use($renderCallback) {
    $renderCallback->prepare();
    $content = $renderCallback(ob_get_clean(), 0);
    echo $content;
});
