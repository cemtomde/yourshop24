<?php

$apiKey = 'vUbfeVHnKpKVOcqvSHBUuACK8pza92Qe8X';          // Ключ доступа к API
$offer_id = 1930;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = '';     // id потока

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"11042":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"id":11042,"price2":"1980","price":"990","currency":{"code":"RUB","name":"\u0440\u0443\u0431"}},"11043":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"KZ","name":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d"},"id":11043,"price2":"11980","price":"5990","currency":{"code":"KZT","name":"\u0442\u04a3\u0433"}},"11044":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"BY","name":"\u0411\u0435\u043b\u0430\u0440\u0443\u0441\u044c"},"id":11044,"price2":"70","price":"35","currency":{"code":"BYR","name":"Br"}},"11045":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"UA","name":"\u0423\u043a\u0440\u0430\u0438\u043d\u0430"},"id":11045,"price2":"798","price":"399","currency":{"code":"UAH","name":"\u0433\u0440\u043d"}},"11046":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"MD","name":"\u041c\u043e\u043b\u0434\u0430\u0432\u0438\u044f"},"id":11046,"price2":"798","price":"399","currency":{"code":"MDL","name":"\u043b\u0435\u0438"}},"11047":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"UZ","name":"\u0423\u0437\u0431\u0435\u043a\u0438\u0441\u0442\u0430\u043d"},"id":11047,"price2":"236000","price":"118000","currency":{"code":"UZS","name":"\u0441\u0443\u043c"}},"11049":{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"GE","name":"\u0413\u0440\u0443\u0437\u0438\u044f"},"id":11049,"price2":"98","price":"49","currency":{"code":"GEL","name":"\u043b\u0430\u0440\u0438"}}}';
$dataOffer = '{"name":"SlimBiotic \u0434\u043b\u044f \u043f\u043e\u0445\u0443\u0434\u0435\u043d\u0438\u044f","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"id":11042,"price2":"1980","price":"990","currency":{"code":"RUB","name":"\u0440\u0443\u0431"}}';
$productName = 'SlimBiotic для похудения';
$invoice = 'index.php';
$push_link = '';
$companyInfo = array('address' => '610008, ОБЛАСТЬ КИРОВСКАЯ, ГОРОД КИРОВ, УЛИЦА БЛЮХЕРА, ДОМ 8А', 'detail' => 'ООО "ТОРГ ПЛЮС"  ОГРН 1194350011800 ИНН 4345496475');

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
