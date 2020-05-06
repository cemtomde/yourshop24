<?php require('onepage.php') ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">


	<meta charset="utf-8">
	<title>Система быстрого снижения веса SlimBiotic</title>
	    <!-- Favicon -->
    <link rel="icon" href="img/products_new/3697.png" type="image/png">
    <link rel="shortcut icon" href="img/products_new/3697.png" type="image/png">

    <!-- OG -->

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Система быстрого снижения веса SlimBiotic" />
    <meta property="og:image" content="http://sl990.gardeninonline.ru/img/products_new/3697.png" />
    <meta property="og:image:width" content="150" />
    <meta property="og:image:height" content="150" />
    <meta property="og:site_name" content="Система быстрого снижения веса SlimBiotic" />
    <meta property="og:description" content="Система быстрого снижения веса SlimBiotic" />

    

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,900&amp;subset=cyrillic" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="files/slimbiotic_5/css/style.css"/>

	<!-- JS -->
	<script src="files/_js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="files/_js/validation.js"></script>
	<script type="text/javascript" src="files/_js/ab.min.js"></script>
  	<script type="text/javascript" src="files/slimbiotic_5/js/script.js"></script>

 </head>
<body>



<div class="main-wrapper">
   <header class="header">
      <div class="container wrapper-360">
         <div class="header__top row">
            <div class="header__top-text col-12">
               <img src="files/slimbiotic_5/img/logo.png" alt="SlimBiotic" class="logo">
               <h1 class="header__title">
                  ЗАБУДЬТЕ О&nbsp;ЛИШНЕМ ВЕСЕ!
                  <small class="header__title-small">
                  ИДЕАЛЬНАЯ ФИГУРА <span class="header__title-emph">ВСЕГО ЗА&nbsp;КУРС ПРИМЕНЕНИЯ*</span>
                  </small>
               </h1>
               <div class="hit-badge">
                  <div class="hit-badge__inner">
                     <span class="hit-badge__top">ХИТ</span><br>
                     <span class="hit-badge__bottom">СЕЗОНА</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="header__content row">
            <div class="header__content-left col-12 col-lg-7">
               <div class="row">
                  <div class="order-form col-12 col-lg-6">
                     <p class="order-form__title uppercase">
                        7&nbsp;дней для похудения
                     </p>
                     <p class="order-form__prices">
                        <span class="order-form__prices--old">
                        <span class="price_land_s2"><?= $oldPriceHtml ?></span> <span class="price_land_curr"><?= $currencyDisplayHtml ?></span>
                        </span>
                        <span class="order-form__prices--new">
                           <span class="price_land_s1"><?= $newPriceHtml ?></span> <span class="price_land_curr"><?= $currencyDisplayHtml ?></span>                        </span>
                                             </p>
                     <div class="timer">
                        <p class="timer__title">
                           До&nbsp;окончания акции осталось:
                        </p>
                        <div class="timer__itself">
                            <script src="//megatimer.ru/get/d2bef13e8c52cf0a1206241e7e51a951.js"></script>
                        </div>
                     </div>
                     <div class="order-form__controls">
                        <form class="form orderformcdn" method="POST" action="">
                        	                        	      <?= countrySelect() ?>
                        	                           <div class="form__group">
                              <input type="text" name="name" class="form__control form__control--name" placeholder="Ф. И. О." required="">
                           </div>
                           <div class="form__group">
                              <input type="text" name="phone" class="form__control form__control--phone" placeholder="Телефон" required="">
                           </div>
                           <div class="form__group">
                              <button type="submit" class="form__submit" style="cursor:pointer;">
                              <span class="form__submit-text uppercase">Получи скидку</span>     
                              </button>
                           </div>
                            
                        </form>
                     </div>
                  </div>
                  <div class="features col-12 col-lg-6">
                     <ul class="features__list">
                        <li class="features__item">
                           <img src="files/slimbiotic_5/img/check-icon.png" alt="Отметка">
                           <div class="features__text">
                              <strong class="features__strong">
                              Эффективное
                              </strong>
                              жиросжигание
                           </div>
                        </li>
                        <li class="features__item">
                           <img src="files/slimbiotic_5/img/check-icon.png" alt="Отметка">
                           <div class="features__text">
                              <strong class="features__strong">
                              Ускорение
                              </strong>
                              метаболизма
                           </div>
                        </li>
                        <li class="features__item">
                           <img src="files/slimbiotic_5/img/check-icon.png" alt="Отметка">
                           <div class="features__text">
                              <strong class="features__strong">
                              Снижение
                              </strong>
                              аппетита
                           </div>
                        </li>
                        <li class="features__item">
                           <img src="files/slimbiotic_5/img/check-icon.png" alt="Отметка">
                           <div class="features__text">
                              <strong class="features__strong">
                              Очищение 
                              </strong>
                              организма!
                           </div>
                        </li>
                     </ul>
                     <p class="features__title">
                        Успейте приобрести<br><span class="features__title-emph uppercase">ПО АКЦИИ!</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="header__content-right col-12 col-lg-5">
               <div class="delivery-badge">
                  <p class="delivery-badge__title uppercase">
                     Быстрая доставка!<br>
                     <small class="delivery-badge__title-small lowercase">
                     Оплата при получении
                     </small>
                  </p>
                  <img src="files/slimbiotic_5/img/delivery-icon.png" class="delivery-badge__icon" alt="Грузовичок">
               </div>
               <div class="product">
                  <img src="files/slimbiotic_5/img/product.png" class="product__image" alt="SlimBiotic">
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- section 2 -->
   <div class="section2">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12 col-lg-6">
               <h3 class="section2__h3 uppercase">Вы станете стройной</h3>
               <h2 class="section2__h2 uppercase">Уже после курса<br> применения!</h2>
               <img src="files/slimbiotic_5/img/calendar.png" class="section2__calendar" alt="Календарь">
            </div>
            <div class="col-12 col-lg-6">
               <h2 class="section2__h2-right"><img src="files/slimbiotic_5/img/logo.png" class="section2__logo" alt="logo"> - это мощнейший препарат по сжиганию жировых отложений и подавлению аппетита.</h2>
               <div class="traitlist">
                  <ul>
                     <li>Эффективное жиросжигание</li>
                     <li>Снижение тяги к сладкой, вредной еде</li>
                     <li>Ускорение снижения веса</li>
                     <li>Нормализация обмена веществ</li>
                     <li>Увеличения процесса жиросжигания</li>
                     <li>Избавление от отеков</li>
                     <li>Снижение аппетита и избавление от переедания</li>
                     <li>Тотальная блокировка жировых отложений!</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- section 3 -->
   <div class="section3">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12 col-lg-6">
               <div class="section3__left">
                  <h2 class="section3__left-h2 uppercase"><img src="files/slimbiotic_5/img/logo-red.png" class="section3__logo" alt="logo"> - программа похудения</h2>
                  <h3 class="section3__left-h3 uppercase yellow">для максимального снижения веса!</h3>
                  <p class="section3__left-p white">Slim Biotic - <span class="yellow">борется со всеми</span> причинами лишнего веса, запускает 12-часовой термогенный процесс расщепления жиров и выработки энергии.</p>
                  <p class="section3__left-p white">В отличие от других средств, программа рассчитана на 7 дней пошагового применения, благодаря постепенному воздействию обеспечивается <span class="yellow uppercase">устойчивое снижение веса</span>, ускоряются все процессы пищеварения и <span class="yellow uppercase">вес не возвращается</span> даже после окончания приема курса.</p>
               </div>
            </div>
            <div class="col-12 col-lg-6">
               <div class="section__right">
                  <h2 class="section3__right-h2 uppercase yellow">7 дней для похудения</h2>
                  <img src="files/slimbiotic_5/img/product-btl.png" alt="SlimBiotic" class="section3__right-product">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- section 4 -->
   <div class="section4">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12">
               <h2 class="section4__title uppercase">
                  Уникальный природный состав <span class="pink">для эффективного жиросжигания!</span>
               </h2>
               <p class="section4__p">Slim Biotic содержит <span class="uppercase">только</span> натуральные ингредиенты, которые помогают избавиться от лишнего веса без вреда для здоровья. Природные вещества легко усваиваются организмом, а также придают дополнительную энергию!</p>
            </div>
            <div class="col-lg-3 sec4-topper">
               <div class="sec4box sc4b-1">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_1.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              1 день
                           </h3>
                           <h3 class="sec4trait">
                              Подготовка
                           </h3>
                           <p class="sec4describtion">
                              Организма к безопасному похудению
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_2.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              2 день
                           </h3>
                           <h3 class="sec4trait">
                              Снижение
                           </h3>
                           <p class="sec4describtion">
                              Снижение аппетита, тяги к сладкой, жирной и вредной пище
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- main prod bottle -->
            <div class=" col- col-lg-6 sec4-topper">
               <img src="files/slimbiotic_5/img/prodbox.png" class="sec4prodbox" alt="Коробочка">
            </div>
            <div class="col-12 col-lg-3 sec4-topper">
               <div class="sec4box sc4b-7">
                  <div class="row">
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              7 день
                           </h3>
                           <h3 class="sec4trait">
                              Нормализация
                           </h3>
                           <p class="sec4describtion">
                              Метаболизма, перистальтики кишечника и работы желудка
                           </p>
                        </div>
                     </div>
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_7.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-6">
                  <div class="row">
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              6 день
                           </h3>
                           <h3 class="sec4trait">
                              Улучшение
                           </h3>
                           <p class="sec4describtion">
                              Общего состояния всех систем организма
                           </p>
                        </div>
                     </div>
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_6.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                  </div>
               </div>
            </div>
            <!-- bottom product line -->
            <div class="col-12 col-lg-3">
               <div class="sec4box sc4b-3">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_3.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox sc4-tb-l">
                           <h3 class="dayline">
                              3 день
                           </h3>
                           <h3 class="sec4trait">
                              Запуск
                           </h3>
                           <p class="sec4describtion">
                              Процесс активного липолиза жировых отложений
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-6">
               <div class="sec4box sc4b-4">
                  <div class="row">
                     <div class="col-2 col-lg-5">
                        <img src="files/slimbiotic_5/img/bottle_4.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10 col-lg-7">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              4 день
                           </h3>
                           <h3 class="sec4trait">
                              Подавление
                           </h3>
                           <p class="sec4describtion">
                              Процесса образования новых жировых клеток (адипоцитов)
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-3">
               <div class="sec4box sc4b-5">
                  <div class="row">
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              5 день
                           </h3>
                           <h3 class="sec4trait">
                              Преобразование
                           </h3>
                           <p class="sec4describtion">
                              Жиров, белков и углеводов в энергию
                           </p>
                        </div>
                     </div>
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_5.png" class="section4__prod" alt="Слим Биотик">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section4-mobile">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12">
               <h2 class="section4__title uppercase">
                  Уникальный природный состав <span class="pink">для эффективного жиросжигания!</span>
               </h2>
               <p class="section4__p">Slim Biotic содержит <span class="uppercase">только</span> натуральные ингредиенты, которые помогают избавиться от лишнего веса без вреда для здоровья. Природные вещества легко усваиваются организмом, а также придают дополнительную энергию!</p>
            </div>
            <div class="col-lg-3 sec4-topper">
               <div class="sec4box sc4b-1">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_1.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              1 день
                           </h3>
                           <h3 class="sec4trait">
                              Подготовка
                           </h3>
                           <p class="sec4describtion">
                              Организма к безопасному похудению
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_2.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              2 день
                           </h3>
                           <h3 class="sec4trait">
                              Снижение
                           </h3>
                           <p class="sec4describtion">
                              Снижение аппетита, тяги к сладкой, жирной и вредной пище
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_3.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox sc4-tb-l">
                           <h3 class="dayline">
                              3 день
                           </h3>
                           <h3 class="sec4trait">
                              Запуск
                           </h3>
                           <p class="sec4describtion">
                              Процесс активного липолиза жировых отложений
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2 col-lg-5">
                        <img src="files/slimbiotic_5/img/bottle_4.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10 col-lg-7">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              4 день
                           </h3>
                           <h3 class="sec4trait">
                              Подавление
                           </h3>
                           <p class="sec4describtion">
                              Процесса образования новых жировых клеток (адипоцитов)
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_5.png" class="section4__prod" alt="Слим Биотик">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              5 день
                           </h3>
                           <h3 class="sec4trait">
                              Преобразование
                           </h3>
                           <p class="sec4describtion">
                              Жиров, белков и углеводов в энергию
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_6.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              6 день
                           </h3>
                           <h3 class="sec4trait">
                              Улучшение
                           </h3>
                           <p class="sec4describtion">
                              Общего состояния всех систем организма
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sec4box sc4b-2">
                  <div class="row">
                     <div class="col-2">
                        <img src="files/slimbiotic_5/img/bottle_7.png" class="section4__prod" alt="Slim Biotic">
                     </div>
                     <div class="col-10">
                        <div class="sec4textbox">
                           <h3 class="dayline">
                              7 день
                           </h3>
                           <h3 class="sec4trait">
                              Нормализация
                           </h3>
                           <p class="sec4describtion">
                              Метаболизма, перистальтики кишечника и работы желудка
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- main prod bottle -->
            <div class=" col- col-lg-6 sec4-topper">
               <img src="files/slimbiotic_5/img/prodbox.png" class="sec4prodbox" alt="Коробочка">
            </div>
            <div class="col-12 col-lg-3 sec4-topper">
            </div>
            <!-- bottom product line -->
            <div class="col-12 col-lg-3">
            </div>
            <div class="col-12 col-lg-6">
            </div>
            <div class="col-12 col-lg-3">
            </div>
         </div>
      </div>
   </div>
   <div class="sec5">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12 col-lg-7 offset-lg-5">
               <div class="sec5-wrapper">
                  <div class="opibox">
                     <h2 class="sec5__title uppercase">Мнение специалиста</h2>
                     <p class="sec5__text">
                        Обладая натуральным составом, Slim Biotic является абсолютно безопасным средством для избавления от жировых отложений. Природное сочетание ингредиентов, находящихся в составе Slim Biotic, направлено на максимальное расщепление жировых отложений, ускорение процесса метаболизма, снижение аппетита и избавления от токсичных веществ в организме. После применения препарата вес перестает колебаться, благодаря налаженному процессу обмена веществ.
                     </p>
                  </div>
                  <div class="signbox">
                     <div class="row">
                        <div class="col-12 col-lg-4">
                           <img src="files/slimbiotic_5/img/sign.png" alt="Подпись" class="signbox__img">
                        </div>
                        <div class="col-12 col-lg-8">
                           <p class="signbox__text1">Грушина Елена</p>
                           <p class="signbox__text2">консультант-нутриционист</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-5">
               <img src="files/slimbiotic_5/img/sec6prod.png" class="sec6__img" alt="Слим Биотик">
            </div>
            <div class="col-12 col-lg-7">
               <div class="howbox">
                  <h2 class="sec6__title uppercase white">как применять<img src="files/slimbiotic_5/img/logo-red.png" class="sec6__logo" alt="Слим Биотик">?</h2>
                  <div class="howlist">
                     <ul>
                        <li><span class="howlist__number yellow">1</span> строго по 1 ампуле в сутки, запить<br> стаканом воды</li>
                        <li><span class="howlist__number yellow">2</span> поддерживать оптимальную гидратацию в течение дня (не менее 1,5 л воды в сутки)</li>
                     </ul>
                  </div>
               </div>
               <div class="warningbox">
                  <h3 class="sec6__lt yellow uppercase">внимание! не превышайте дозировку!</h3>
                  <p>Концентрация активных веществ рассчитана ровно на 24 часа. Во избежание передозировки следует строго соблюдать режим дозирования препарата и не нарушать регулярность приема.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="sec7">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12">
               <h2 class="sec7__title uppercase pink">эти девушки уже попробовали <img src="files/slimbiotic_5/img/logo.png" class="sec7logo" alt="Слим Биотик"></h2>
            </div>
            <div class="col-12 col-lg-4">
               <div class="revbox">
                  <img src="files/slimbiotic_5/img/rev1.png" class="rebox__img" alt="">
                  <h4 class="revbox__title">Анастасия, 27 лет</h4>
                  <p class="revbox__text">Думала, что с моим сидячим образом жизни и нехваткой времени похудеть просто невозможно. Увидела рекламу Slim Biotic, заинтересовалась и заказала. Результат не то что удивил, скорее ошарашил! Минус 17 килограмм за месяц. И это без тренировок и диеты. Slim Biotic как-то сам наладил рацион. Просто мой организм стал требовать гораздо меньше еды, чем обычно. Плюс легкость от очищения на первой неделе добавила энергии. Прошла тяжесть, сонливость и захотелось больше двигаться. Теперь я очень активно двигаюсь по магазинам, кардинально меняю гардероб! </p>
               </div>
            </div>
            <div class="col-12 col-lg-4">
               <div class="revbox">
                  <img src="files/slimbiotic_5/img/rev2.png" class="rebox__img" alt="">
                  <h4 class="revbox__title">Ева, 29 лет</h4>
                  <p class="revbox__text">В 14 лет начались проблемы с лишним весом, видимо гормоны переходного возраста сыграли злую шутку. Вот из костлявой девочки с мальчишеской фигурой превратилась в какую-то женщину торгующую на рынке пирожками. Диеты не помогали, как и спорт. Закончив ВУЗ, я вовсе перестала бороться с лишним весом. Личная жизнь не строилась, постоянная депрессия. К 30 годам я весила 92 килограмма и это при росте 168! Однажды подруга рассказала мне про Slim Biotic, сказала, что у них вся бухгалтерия на работе на нем похудела. И он изменил мою жизнь! Я сбросила 24 кг за 40 дней. Очень боялась растяжек и уродливых складок, но тело даже подтянутым стало. </p>
               </div>
            </div>
            <div class="col-12 col-lg-4">
               <div class="revbox">
                  <img src="files/slimbiotic_5/img/rev3.png" class="rebox__img" alt="">
                  <h4 class="revbox__title">Ирина, 36 лет</h4>
                  <p class="revbox__text">Не буду скрывать, я очень люблю вкусно покушать. Вкусно и много. Поэтому, лишние килограммы на талии и везде, где только можно – мои вечные спутники жизни. В один прекрасный день решила все поменять и осуществить свою давнюю мечту – похудеть. Сидела на разных диетах (в том числе Елены Малышевой), пила различные чаи, занималась в спортзале. Результат был, но он так тяжело давался, что даже не радовал… Увидела рекламу препарата Slim Biotic, купила сразу курс. Пропила неделю, особого результата не заметила. Зато на второй потеряла сразу 15 килограмм. И это при том, что диеты я перестала придерживаться. Результатом очень довольна, но надеюсь на большее.</p>
               </div>
            </div>
            <div class="col-12">
               <h2 class="sec7__tl uppercase">создать идеальное тело - <span class="pink">легко</span> вместе со <img src="files/slimbiotic_5/img/logo.png" class="sec7logo" alt="Слим Биотик"><span class="sec7-atata">!</span></h2>
            </div>
         </div>
      </div>
   </div>
   <div class="sec8">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12 col-lg-6 offset-lg-6">
               <img src="files/slimbiotic_5/img/logo.png" alt="SlimBiotic" class="logo sec8__logo">
               <h2 class="sec8__title-pink uppercase pink">начните новую жизнь</h2>
               <h3 class="sec8__title uppercase">в стройном теле уже сегодня!</h3>
            </div>
            <div class="col-12 col-lg-4 offset-lg-4">
               <div class="sec8__probox">
                  <img src="files/slimbiotic_5/img/probox-last.png" class="sec8__prod" alt="">
                  <div class="hit-badge sec8__hb">
                     <div class="hit-badge__inner">
                        <span class="hit-badge__top">ХИТ</span><br>
                        <span class="hit-badge__bottom">СЕЗОНА</span>
                     </div>
                  </div>
                  <div class="delivery-badge sec8__delivery-badge">
                     <p class="delivery-badge__title uppercase">
                        Быстрая доставка!<br>
                        <small class="delivery-badge__title-small lowercase">
                        Оплата при получении
                        </small>
                     </p>
                     <img src="files/slimbiotic_5/img/delivery-icon.png" class="delivery-badge__icon dbi-media" alt="Грузовичок">
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-4">
               <div class="order-form sec8__order-form">
                  <p class="order-form__title uppercase">
                     7&nbsp;дней для похудения
                  </p>
                  <p class="order-form__prices">
                     <span class="order-form__prices--old">
                     <span class="price_land_s2"><?= $oldPriceHtml ?></span> <span class="price_land_curr"><?= $currencyDisplayHtml ?></span>
                     </span>
                     <span class="order-form__prices--new">
                        <span class="price_land_s1"><?= $newPriceHtml ?></span> <span class="price_land_curr"><?= $currencyDisplayHtml ?></span>                  	</span>
                  	                  </p>
                  <div class="timer">
                     <p class="timer__title">
                        До&nbsp;окончания акции осталось:
                     </p>
                     <div class="timer__itself">
                         <script src="//megatimer.ru/get/d2bef13e8c52cf0a1206241e7e51a951.js"></script>
                     </div>
                  </div>
                  <div class="order-form__controls">
                     <form class="form orderformcdn" method="POST" action="">
					 <?= countrySelect() ?>
                        <div class="form__group">
                           <input type="text" name="name" class="form__control form__control--name" placeholder="Ф. И. О." required="">
                        </div>
                        <div class="form__group">
                           <input type="text" name="phone" class="form__control form__control--phone" placeholder="Телефон" required="">
                        </div>
                        <div class="form__group">
                           <button type="submit" class="form__submit" style="cursor:pointer;">
                           <span class="form__submit-text uppercase">Получи скидку</span>     
                           </button>
                        </div>
                       
                     </form>
                  </div>
                  <p class="text-action">Успейте приобрести<br><span class="uppercase">по акции</span>!</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- section 9 -->
   <div class="sec9">
      <div class="container wrapper-360">
         <div class="row">
            <div class="col-12 col-lg-3">
               <span class="sec9-sp1">Доставка почтой<br>или курьером</span>
            </div>
            <div class="col-12 col-lg-3">
               <span class="sec9-sp2"><img src="files/slimbiotic_5/img/shield.png" alt="Защита">Конфиденциальность гарантирована<br>оплата при получении</span>
            </div>
            <div class="col-12 col-lg-3">
               <div class="sec9-sp3 uppercase"><img src="files/slimbiotic_5/img/operator.png" alt="Оператор">37 операторов<br> онлайн</div>
            </div>
            <div class="col-12 col-lg-3">
               <span class="sec9-sp4">35 разговаривают</span><br>
               <span class="sec9-sp5">Круглосуточно без выходных<br>заказывайте!</span>
            </div>
         </div>
         <div class="bottom-icon-block">
            <div class="row">
               <div class="col-12 col-lg-2">
                  <span class="uppercase bib-sp1">оплата</span>
               </div>
               <div class="col-12 col-lg-1">
                  <img src="files/slimbiotic_5/img/mastercard.png" class="sec9__icon sec9-i1" alt="Мастеркард">
                  <h5 class="sec9-littit sec9-it1">Mastercard</h5>
               </div>
               <div class="col-12 col-lg-1">
                  <img src="files/slimbiotic_5/img/visa.png" class="sec9__icon sec9-i2" alt="Виза">
                  <h5 class="sec9-littit sec9-it2">Visa</h5>
               </div>
               <div class="col-12 col-lg-1">
                  <img src="files/slimbiotic_5/img/qiwi.png" class="sec9__icon sec9-i3" alt="Киви">
                  <h5 class="sec9-littit sec9-it3">Qiwi<br>кошелек</h5>
               </div>
               <div class="col-12 col-lg-1">
                  <img src="files/slimbiotic_5/img/cash.png" class="sec9__icon sec9-i4" alt="Наличные">
                  <h5 class="sec9-littit sec9-it4">Наличными</h5>
               </div>
               <div class="col-12 col-lg-2">
                  <span class="uppercase bib-sp2">доставка</span>
               </div>
               <div class="col-12 col-lg-1">
                  <img src="files/slimbiotic_5/img/courier.png" class="sec9__icon sec9-i5" alt="Курьер">
                  <h5 class="sec9-littit sec9-it5">Курьером</h5>
               </div>
               <div class="col-12 col-lg-1">
                  <img src="files/slimbiotic_5/img/post.png" class="sec9__icon sec9-i6" alt="Почта России">
                  <h5 class="sec9-littit sec9-it6">Почта России</h5>
               </div>
               <div class="col-12 col-lg-2">
                  <img src="files/slimbiotic_5/img/delivery.png" class="sec9__icon sec9-i7" alt="Доставка">
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright">
   <center><?= footer() ?></center>
   </div>
</div>


</body>
</html>






