<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/basic.css"/>
    <link rel="stylesheet" href="./css/about.css"/>
    <link rel="stylesheet" href="./css/slick.css"/>
    <title>База Белое</title>
</head>
<body>

<?php
include('header.php');
?>

<main class="main">
    <section class="landing-about">
        <h1 class="title title_green">Охотничья база “белое”</h1>
        <p class="landing-about__text">
            Всем любителям охоты, тем, кто не видит своей жизни без
            этого общения с природой, рекомендуем богатые дичью
            охотничьи угодья. В наших угодьях обитают такие животные,
            как лось, кабан, сибирская косуля, пушные виды, заяц, лиса,
            енотовидная собака, а из птиц - глухарь, тетерев, утка. Мы
            сделаем всё, чтобы охота доставила Вам массу неповторимых и
            ярких впечатлений.
        </p>
    </section>
    <section class="advantages">
        <div
                class="advantages__block advantages__block_1 quarter-screen"
        >
            <div class="advantages__overlay"></div>
            <span>Комфортная охотничья базе</span>
        </div>
        <div
                class="advantages__block advantages__block_2 quarter-screen"
        >
            <div class="advantages__overlay"></div>
            <span>Высокий профессионализм наших специалистов</span>
        </div>
        <div
                class="advantages__block advantages__block_3 quarter-screen"
        >
            <div class="advantages__overlay"></div>
            <span>Отдых для всей семьи на природе</span>
        </div>
        <div
                class="advantages__block advantages__block_4 quarter-screen"
        >
            <div class="advantages__overlay"></div>
            <span>Частное лестничество</span>
        </div>
    </section>
    <section class="">
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
    </section>
    <section class="location">
        <div class="location__text">
            <h2 class="title">Как до нас доехать?</h2>
            <div class="location__text-main">
                <b>Из г. Челябинск:</b>
                <p>
                    трасса на Курган до г. Юргамыш далее г. Куртамыш
                    далее на с. Каминское до поворота с указателем
                    «Охотничья база Белое».
                </p>
                <b>Из г. Курган:</b>
                <p>
                    трасса на г. Куртамыш далее на с. Каминское до
                    поворота с указателем «Охотничья база Белое».
                </p>
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
        <div id="map" class="map"></div>
    </section>
</main>

<div class="numbers">
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
