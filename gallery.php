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

    <div class="numbers numbers--green opacity-block">
        <a href="tel:+73523993052" class="button button--phone-green">
            <div class="button__wrapper">
                <div class="button__inner">8 (3523) 99 — 30 — 52<br><br>8 (3523) 99 — 30 — 52</div>
            </div>
        </a>
        <a href="tel:+73523993052" class="button button--phone-green">
            <div class="button__wrapper">
                <div class="button__inner">8 (3523) 99 — 30 — 52<br><br>8 (3523) 99 — 30 — 52</div>
            </div>
        </a>
    </div>

<main class="main">
    <section class="gallery gallery_green" id="gallery">
        <h2 class="gallery__title">
            <span class="title-block">Галерея</span>
        </h2>

        <div class="gallery__wrapper">
            <div class="slider slider--show">
                <h3 class="slider__title">База охоты</h3>
                <div class="slider__cover"></div>
                <div class="slider__content">
                    <div class="slider__cell">
                        <img src="./media/about/0349.jpg" alt="" class="slider__cell-img">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                </div>
                <div class="slider__arrow">
                    <p class="slider__pre-item">01</p>
                    <div class="slider__line"></div>
                    <p class="slider__nex-item">02</p>
                </div>
            </div>
            <div class="slider">
                <h3 class="slider__title">База охоты</h3>
                <div class="slider__cover"></div>
                <div class="slider__content">
                    <div class="slider__cell">
                        <img src="./media/about/0349.jpg" alt="" class="slider__cell-img">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                </div>
                <div class="slider__arrow">
                    <p class="slider__pre-item">01</p>
                    <div class="slider__line"></div>
                    <p class="slider__nex-item">02</p>
                </div>
            </div>
            <div class="slider">
                <h3 class="slider__title">База охоты</h3>
                <div class="slider__cover"></div>
                <div class="slider__content">
                    <div class="slider__cell">
                        <img src="./media/about/0349.jpg" alt="" class="slider__cell-img">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell"
                         data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                </div>
                <div class="slider__arrow">
                    <p class="slider__pre-item">01</p>
                    <div class="slider__line"></div>
                    <p class="slider__nex-item">02</p>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="./js/flickity.pkgd.min.js" type="text/javascript"></script>
<script src="./js/bg-lazyload.js" type="text/javascript"></script>
<script src="./js/datepicker.js"></script>
<script src="./js/show-animation.js"></script>
<script src="./js/gallery.js" type="text/javascript"></script>
<script src="./js/main.js"></script>
<script src="./js/popup.js"></script>
</body>

</html>
