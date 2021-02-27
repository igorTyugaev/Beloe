<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/gallery.css"/>
    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <title>Галерея</title>
</head>

<body>

<?php
include('header.php');
?>

<div class="numbers numbers_green">
    <a href="tel:+73523993052" class="numbers__block">8 (3523) 99 — 30 — 52</a>
    <a href="tel:+73523993052" class="numbers__block">8 (3523) 99 — 30 — 52</a>
</div>

<main class="main">
    <section class="gallery gallery_green">
        <h2 class="gallery__title">Галерея</h2>

        <div class="slider__list">
            <button class="button-accordion button-accordion--active">
                <div class="carousel-item">
                    <div class="carousel"
                         data-flickity='{"pageDots": false, "autoPlay": 4500, "lazyLoad": true}'>
                        <div class="carousel-cell"><img
                                    class="carousel-cell-image"
                                    src="./media/about/0349.jpg"
                                    alt=""
                            /></div>
                        <div class="carousel-cell"><img
                                    class="carousel-cell-image"
                                    data-flickity-lazyload="./media/about/0349.jpg"
                                    alt=""
                            /></div>
                        <div class="carousel-cell"><img
                                    class="carousel-cell-image"
                                    data-flickity-lazyload="./media/about/0349.jpg"
                                    alt=""
                            /></div>
                        <div class="carousel-cell">
                            <img
                                    class="carousel-cell-image"
                                    data-flickity-lazyload="./media/about/0349.jpg"
                                    alt=""
                            />
                        </div>
                    </div>
                    <h3 class="carousel-title">База охоты</h3>
                    <p class="carousel-status"></p>
                </div>
            </button>
            <button class="button-accordion">
                <div class="carousel-item">
                    <div class="carousel"
                         data-flickity='{"pageDots": false, "autoPlay": 4500, "lazyLoad": true}'>
                        <div class="carousel-cell"><img
                                    class="carousel-cell-image"
                                    src="./media/about/0349.jpg"
                                    alt=""
                            /></div>
                        <div class="carousel-cell"><img
                                    data-flickity-lazyload="./media/about/0349.jpg"
                                    alt=""
                                    class="carousel-cell-image"
                            /></div>
                        <div class="carousel-cell"><img
                                    data-flickity-lazyload="./media/about/0349.jpg"
                                    alt=""
                                    class="carousel-cell-image"
                            /></div>
                        <div class="carousel-cell"><img
                                    data-flickity-lazyload="./media/about/0349.jpg"
                                    alt=""
                                    class="carousel-cell-image"/></div>
                    </div>
                    <h3 class="carousel-title">База охоты</h3>
                    <p class="carousel-status"></p>
                </div>
            </button>
        </div>
    </section>
</main>

<script src="./js/gallery.js" type="text/javascript"></script>
<script src="./js/flickity.pkgd.js" type="text/javascript"></script>

</body>

</html>
