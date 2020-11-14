<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/basic.css"/>
    <link rel="stylesheet" href="css/hunting-types.css"/>
    <title>Виды охоты</title>
</head>
<body>

<?php
include('header.php');
?>

<div class="numbers">
    <a href="" class="numbers__block">8 (3523) 99 — 30 — 52</a>
    <a href="" class="numbers__block">8 (3523) 99 — 30 — 52</a>
</div>
<main>
    <section class="first-slide">
        <div class="first-slide__img"></div>
        <div class="first-slide__lead">
            <h1>
                Виды
                <br/>
                охоты
            </h1>
            <p>
                Охотничья база "Белое" предлагает охоту на лося, кабана
                (с вышки), сибирскую косулю (трофейная, загонная), лису,
                зайца глухаря, тетерева, водоплавающую дичь. Егерское
                обслуживание.
            </p>
            <button class="button button_main-slider">
                консультация
            </button>
        </div>
    </section>
    <section class="hunt__list">
        <div class="hunt__item">
            <div class="hunt__item-bg"></div>
            <h2>Охота на лося</h2>
            <b>Cезон охоты:</b>

            <br/>
            <span>старше 1 года: с 1 октября по 31 декабря.</span>
            <br/>
            <span>до 1 года: с 1 октября по 15 января.</span>
        </div>
        <div class="hunt__item">
            <div class="hunt__item-bg"></div>
            <h2>Охота на лося</h2>
            <b>Cезон охоты:</b>

            <br/>
            <span>старше 1 года: с 1 октября по 31 декабря.</span>
            <br/>
            <span>до 1 года: с 1 октября по 15 января.</span>
        </div>
        <div class="hunt__item">
            <div class="hunt__item-bg"></div>
            <h2>Охота на лося</h2>
            <b>Cезон охоты:</b>

            <br/>
            <span>старше 1 года: с 1 октября по 31 декабря.</span>
            <br/>
            <span>до 1 года: с 1 октября по 15 января.</span>
        </div>
        <div class="hunt__item">
            <div class="hunt__item-bg"></div>
            <h2>Охота на лося</h2>
            <b>Cезон охоты:</b>

            <br/>
            <span>старше 1 года: с 1 октября по 31 декабря.</span>
            <br/>
            <span>до 1 года: с 1 октября по 15 января.</span>
        </div>
    </section>
    <section class="calc">
        <h2 class="title title_green">калькулятор охотника</h2>
        <div class="calc__des">
                    <span>
                        Охотничья база "Белое" предлагает вам расчитать
                        приблизительную цену вашей охоты
                    </span>
        </div>
        <div class="calc__inner">
            <div class="calc__main half-screen">
                <ul>
                    <li
                            class="calc__list-item calc__list-item_accommodation"
                    >
                        проживание
                        <div class="calc__select">
                            <button
                                    class="calc__button calc__button_left"
                            ></button>
                            <span>5 дней</span>
                            <button
                                    class="calc__button calc__button_right"
                            ></button>
                            <button
                                    class="calc__button calc__button_left"
                            ></button>
                            <span>1 человек</span>
                            <button
                                    class="calc__button calc__button_right"
                            ></button>
                        </div>
                    </li>
                    <li class="calc__list-item">
                        <span>Охота на лося</span>
                    </li>
                    <li>
                        <hr/>
                    </li>
                    <li
                            class="calc__list-item calc__list-item_accommodation"
                    >
                        <span>Итого:</span>
                        <span>3333 рублей</span>
                    </li>
                </ul>
            </div>
            <div class="calc__lead half-screen">
                <input type="text" placeholder="Ваш e-mail"/>
                <input type="text" placeholder="ваш телефон"/>
                <input type="text" placeholder="Ваше имя"/>
                <button class="button">Консультация</button>
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
    <script
            src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"
            type="text/javascript"
    ></script>
    <script src="./js/map.js"></script>
    <script src="./js/types-of-hunting.js"></script>
</main>
</body>
</html>
