<!DOCTYPE html>
<html>
<head>
 <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '671095746760288');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
  fbq('track', 'Purchase');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=671095746760288&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


    <title>Заказ принят</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" type="text/css" href="invoice2/static/style.css" media="all">
    <style>
        body { margin-top: 50px }
    </style>
</head>

<body>
<?php if($order_id) { ?>
    <h1>Ваша заявка принята</h1>

    <p>
        Спасибо за Ваш заказ! <br>
        Наш оператор свяжется с Вами в самое ближайшее время. Пожалуйста, включите ваш контактный телефон.
    </p>

    <table style="margin: auto">

        <tr>
            <th>Вы заказали</th>
            <td>
                <p><?= $product_name ?></p>
            </td>
        </tr>

        <tr>
            <th>Заказ №:</th>
            <td><?= $order_id ?></td>
        </tr>


        <tr>
            <th>Имя:</th>
            <td><?= $order_name; ?></td>
        </tr>


        <tr>
            <th>Телефон для связи:</th>
            <td><?= $order_phone; ?></td>
        </tr>


    </table>

<?php
    if ($fb_pixel) {
        require_once ('pieces/fb_pixel.php');
    }
    require_once ('trackers_order.php');
}
else {
    echo 'Ошибка!';
}
?>

</body>
</html>