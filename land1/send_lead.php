<?php

require_once('config.php');

$data_post = $_POST;
$error = '';

if( !isset($data_post['phone']) || !isset($data_post['name']) || !isset($data_post['country'])){
    $error_message = 'Получены не все данные. Вернитесь и заполните форму.';
    require ('error.php');
    die;
}

$data = array(
    'key' => $apiKey,
    'id' => microtime(true), // тут лучше вставить значение, по которому вы сможете индетифицировать свой лид; можно оставить microtime если у вас нет своей crm
    'offer_id' => $offer_id,
    'stream_hid' => $stream_hid,
    'name' => @$data_post['name'],
    'phone' => @$data_post['phone'],
    'comments' => @$data_post['comments'],
    'country' => @$data_post['country'],    // код страны покупателя (RU, UA и т.п.)
    'address' => @$data_post['address'],
    'tz' => 3, // очень желательно получать его с ленда, но если никак лучше оставить пустым или 3 (таймзона мск)
    'web_id' => '', // id вебмастера в вашей системе
    'ip_address' => (isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']),
    'user_agent' => $_SERVER['HTTP_USER_AGENT'],

    "utm_source" => @$data_post['utm_source'],
    "utm_medium" => @$data_post['utm_medium'],
    "utm_campaign" => @$data_post['utm_campaign'],
    "utm_content" => @$data_post['utm_content'],
    "utm_term" => @$data_post['utm_term'],

    "sub1" => @$data_post['sub1'],
    "sub2" => @$data_post['sub2'],
    "sub3" => @$data_post['sub3'],
    "sub4" => @$data_post['sub4'],
    "sub5" => @$data_post['sub5'],
);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'ignore_errors' => 1,
        'timeout' => 30,
        'content' => http_build_query($data),
    )
);

$result = curl($apiSendLeadUrl, $data);
$obj = json_decode($result);

$apiErrors = array(
    'incorrect customer phone' => 'Не корректный телефон',
    'customer name too long' => 'Слишком длинное имя',
);

if (null === $obj) {
    // Ошибка в полученном ответе
    $error_message = 'Ошибка в полученном ответе';
    $error_info = '';
    require ('error.php');
    die;
} elseif (!empty($obj->errmsg)) {
    // Ошибка в отправленом запросе
    $error_message = (isset($apiErrors[$obj->errmsg]) ? $apiErrors[$obj->errmsg] : '');
    $error_info = $obj->errmsg;
    require ('error.php');
    die;
}

if ($obj->order_id) {

    $order_id = $obj->order_id;
    $order_name = $data_post['name'];
    $order_phone = $data_post['phone'];

    setcookie("order_id", $order_id);
    setcookie("order_name", $order_name);
    setcookie("order_phone", $order_phone);
    setcookie("product_name", $productName);

    if (isset($data_post['fb_pixel'])) {
        $fb_pixel = @$data_post['fb_pixel'];
        setcookie("fb_pixel", $fb_pixel);

        $price = null;
        $currency = null;
        $offers = json_decode($dataOffers, true);

        foreach($offers as $struct) {
            if ($data_post['country'] == $struct['country']['code']) {
                $price = $struct['price'];
                $currency = $struct['currency']['code'];
                setcookie("product_price", $price);
                setcookie("product_currency", $currency);
                break;
            }
        }
    } else {
        setcookie("fb_pixel");
    }

    header('Location: order.php?id='.$order_id);
    die();
}

function curl($url, $post = null, $head=0){

    $isCurlEnabled = function(){
        return function_exists('curl_version');
    };
    if (!$isCurlEnabled) {
        echo "pls install curl";
        die;
    }

    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    if($head){
        curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
    }else{
        curl_setopt($ch,CURLOPT_HEADER, 0);
    }

    if($post){
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    $response = curl_exec($ch);
    $header_data = curl_getinfo($ch);
    curl_close($ch);
    return $response;

}
