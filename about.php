<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <title>О нас</title>
</head>

<body>

    <?php
include('header.php');
?>

    <div class="numbers numbers--white">
        <a href="tel:+73523993052" class="button button--phone-white">
            <div class="button__wrapper">
                <div class="button__inner">8 (3523) 99 — 30 — 52<br><br>8 (3523) 99 — 30 — 52</div>
            </div>
        </a>
        <a href="tel:+73523993052" class="button button--phone-white">
            <div class="button__wrapper">
                <div class="button__inner">8 (3523) 99 — 30 — 52<br><br>8 (3523) 99 — 30 — 52</div>
            </div>
        </a>
    </div>

    <main class="main">
        <section class="landing-about">
            <h2>
                <span class="title-block">Охотничья база</span>
                <span class="title-block">“белое”</span>
            </h2>
            <p class="landing-about__text opacity-block">
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
                    <span href="">
                        <h3 class="features__title">Комфортная охотничья базе</h3>
                    </span>
                </div>
            </div>
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-2.png" alt="work-3" class="features__img">
                    <span href="">
                        <h3 class="features__title">Высокий профессионализм наших
                            специалистов</h3>
                    </span>
                </div>
            </div>
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-3.png" alt="work-3" class="features__img">
                    <span href="">
                        <h3 class="features__title">Отдых для всей семьи на природе</h3>
                    </span>
                </div>
            </div>
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-4.png" alt="work-3" class="features__img">
                    <span href="">
                        <h3 class="features__title">Частное лестничество</h3>
                    </span>
                </div>
            </div>
        </section>

        <section class="gallery" id="gallery">
            <div class="slider slider--show">
                <div class="slider__cover"></div>
                <div class="slider__content">
                    <div class="slider__cell">
                        <img src="./media/about/0349.jpg" alt="" class="slider__cell-img">
                    </div>
                    <div class="slider__cell" data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell" data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                    <div class="slider__cell" data-flickity-bg-lazyload="./media/about/0349.jpg">
                    </div>
                </div>
                <div class="slider__arrow">
                    <p class="slider__pre-item">01</p>
                    <div class="slider__line"></div>
                    <p class="slider__nex-item">02</p>
                </div>
            </div>
        </section>

        <section class="contacts">
            <div class="contacts__inner">
                <h2 class="contacts__title">
                    <span class="title-block">Как до нас</span>
                    <span class="title-block">доехать?</span>
                </h2>
                <div class="contacts__text opacity-block">
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
                        <a target="_blank"
                            href="https://yandex.ru/maps/?ll=64.950954%2C54.722367&mode=search&oid=45798440183&ol=biz&z=14.61">
                            Охотничья база Белое
                        </a>
                    </div>
                </div>
            </div>
            <div id="map" class="contacts__map"></div>
        </section>
    </main>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>

    <script src="./js/flickity.pkgd.min.js" type="text/javascript"></script>
    <script src="./js/bg-lazyload.js" type="text/javascript"></script>
    <script src="./js/datepicker.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/about.js"></script>
    <script src="./js/map.js"></script>
    <script src="./js/gallery.js" type="text/javascript"></script>
    <script src="./js/popup.js"></script>


</body>

</html>
