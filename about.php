<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./css/about.css"/>
    <link rel="stylesheet" href="./css/slick.css"/>
    <title>О нас</title>
</head>

<body>

<?php
include('header.php');
?>

<div class="numbers">
    <a href="" class="numbers__block">8 (3523) 99 — 30 — 52</a>
    <a href="" class="numbers__block">8 (3523) 99 — 30 — 52</a>
</div>

<main class="main">
    <section class="landing-about">
        <h2>Охотничья база “белое”</h2>
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

    <section class="features">
        <div class="features__item">
            <div class="features__item-inner">
                <img src="media/advantages-1.png" alt="work-3" class="features__img">
                <a href=""><h3 class="features__title">Комфортная охотничья базе</h3></a>
            </div>
        </div>
        <div class="features__item">
            <div class="features__item-inner">
                <img src="media/advantages-2.png" alt="work-3" class="features__img">
                <a href=""><h3 class="features__title">Высокий профессионализм наших
                        специалистов</h3></a>
            </div>
        </div>
        <div class="features__item">
            <div class="features__item-inner">
                <img src="media/advantages-3.png" alt="work-3" class="features__img">
                <a href=""><h3 class="features__title">Отдых для всей семьи на природе</h3>
                </a>
            </div>
        </div>
        <div class="features__item">
            <div class="features__item-inner">
                <img src="media/advantages-4.png" alt="work-3" class="features__img">
                <a href=""><h3 class="features__title">Частное лестничество</h3></a>
            </div>
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

    <section class="contacts">
        <div class="contacts__inner">
            <h2 class="contacts__title">Как до нас <br> доехать?</h2>
            <div class="contacts__text">
                <div class="contacts__text-item">
                    <b>Из г. Челябинск:</b>
                    <p>
                        трасса на Курган до г. Юргамыш далее г. Куртамыш
                        далее <br> на с. Каминское до поворота с указателем
                        «Охотничья база Белое».
                    </p>
                </div>

                <div class="contacts__text-item">
                    <b>Из г. Курган:</b>
                    <p>
                        трасса на г. Куртамыш далее на с. <br> Каминское до
                        поворота с указателем «Охотничья база Белое».
                    </p>
                </div>

                <div class="contacts__text-item">
                    <p>
                        Также, мы присутствуем на Яндекс.Картах. <br> Если у вас
                        есть навигатор, просто напишите в нем:
                    </p>
                    <br>
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
<script src="./js/about.js"></script>
<script src="./js/map.js"></script>
<script src="./js/slick.min.js" type="text/javascript"></script>

</body>

</html>
