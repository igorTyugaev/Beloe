<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/basic.css"/>
    <link rel="stylesheet" href="css/gallery.css"/>
    <link rel="stylesheet" href="css/slick.css"/>
    <title>Галерея</title>
</head>

<body>

<?php
include('header.php');
?>

<main class="main">
    <section class="gallery gallery_green">
        <h1 class="gallery__title">Галерея</h1>
        <div class="slider_about">
            <div class="slider__item">
                <img
                        src="./media/about/0349.jpg"
                        alt=""
                        class="slider__item-img"
                />
            </div>
            <div class="slider__item">
                <img
                        src="./media/about/0086.jpg"
                        alt=""
                        class="slider__item-img"
                />
            </div>
            <div class="slider__item">
                <img
                        src="./media/about/0336.jpg"
                        alt=""
                        class="slider__item-img"
                />
            </div>
            <div class="slider__item">
                <img
                        src="./media/about/0346.jpg"
                        alt=""
                        class="slider__item-img"
                />
            </div>
            <div class="slider__item">
                <img
                        src="./media/about/0426.jpg"
                        alt=""
                        class="slider__item-img"
                />
            </div>
            <div class="slider__item">
                <img
                        src="./media/about/0465.jpg"
                        alt=""
                        class="slider__item-img"
                />
            </div>
        </div>

        <div class="slider__list">
            <div class="slider__list__item">
                <div class="slider__list__item-bg"></div>
                <h2>Охота на лося</h2>
            </div>
            <div class="slider__list__item">
                <div class="slider__list__item-bg"></div>
                <h2>Охота на лося</h2>
            </div>
            <div class="slider__list__item">
                <div class="slider__list__item-bg"></div>
                <h2>Охота на лося</h2>
            </div>
        </div>
    </section>

</main>

<div class="numbers numbers_green">
    <a href="" class="numbers__block">8 (3523) 99 — 30 — 52</a>
    <a href="" class="numbers__block">8 (3523) 99 — 30 — 52</a>
</div>

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        type="text/javascript"
></script>
<script
        src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"
        type="text/javascript"
></script>
<script src="./js/about.js"></script>
<script src="./js/map.js"></script>
<script src="./js/slick.min.js" type="text/javascript"></script>

</body>

</html>
