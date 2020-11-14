<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/basic.css">
    <link rel="stylesheet" href="css/contacts.css">
    <title>Document</title>
</head>

<body>

<?php
include('header.php');
?>

<div class="numbers numbers_green">
    <a href="tel:+73523993052" class="numbers__block">8 (3523) 99 — 30 — 52</a>
    <a href="tel:+73523993052" class="numbers__block">8 (3523) 99 — 30 — 52</a>
</div>

<main>
    <section class="contacts contacts_green">
        <div class="contacts__inner">
            <h2 class="contacts__inner-title">Как до нас <br> доехать?</h2>
            <div class="contacts__inner-text">
                <div class="place">
                    <b>Из г. Челябинск:</b>
                    <p>
                        трасса на Курган до г. Юргамыш далее г. Куртамыш
                        далее на с. Каминское до поворота с указателем
                        «Охотничья база Белое».
                    </p>
                </div>

                <div class="place">
                    <b>Из г. Курган:</b>
                    <p>
                        трасса на г. Куртамыш далее на с. Каминское до
                        поворота с указателем «Охотничья база Белое».
                    </p>
                </div>

                <div class="other">
                     <span>
                            Также, мы присутствуем на Яндекс.Картах. Если у вас
                            есть навигатор, просто напишите в нем:
                        </span>
                    <a
                            target="_blank"
                            href="https://yandex.ru/maps/?ll=64.950954%2C54.722367&mode=search&oid=45798440183&ol=biz&z=14.61"
                    >
                        Охотничья база Белое
                    </a>
                </div>
            </div>
        </div>
        <div id="map" class="contacts__map"></div>
    </section>

</main>

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        type="text/javascript"
></script>
<script
        src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"
        type="text/javascript"
></script>
<script src="./js/map.js"></script>
</body>

</html>