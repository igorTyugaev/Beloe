<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <title>База "Белое"</title>
</head>

<body>

    <section class="preloader">
        <div class="preloader__logo-container" id="preloader__logo-container">
            <a href="index.php" class="preloader__logo-box">
                <img src="./media/logo.svg" alt="Охотничья база Белое" class="preloader__logo" />
            </a>
        </div>
        <div class="preloader__line"></div>
    </section>

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
        <section class="hunt-slider">
            <div id="hunt-slider" class="hunt-slider__wrapper">
                <div class="hunt-slider__cell">
                    <div class="hunt-slider__inner">
                        <div class="hunt-slider__col hunt-slider__col--img">
                            <img class="hunt-slider__img" src="./media/bg-ls-1.png" alt="slider-img-1">
                        </div>
                        <div class="hunt-slider__col">
                            <div class="hunt-slider__content">
                                <div class="hunt-slider__body">
                                    <h3 class="hunt-slider__subtitle">
                                        Охотничья база “белое”
                                    </h3>
                                    <h2 class="hunt-slider__title">
                                        <span class="title-block">
                                            ОХОТА
                                        </span>
                                        <span class="title-block">
                                            НА КОСУЛЮ
                                        </span>
                                        <span class="title-block">
                                            ЗАГОНОМ
                                        </span>
                                    </h2>
                                </div>

                                <div class="hunt-slider__footer">
                                    <div class="hunt-slider__info">
                                        <p class="hunt-slider__text">
                                            <span class="hunt-slider__text hunt-slider__text--accent">
                                                Сезон начинается:
                                            </span>
                                            с 1 октября по 31 декабря.
                                        </p>
                                    </div>
                                    <button class="button button--white button--hunt-slider" data-show-popup="consult">
                                        <div class="button__wrapper">
                                            <div class="button__inner">Консультация<br><br>Консультация
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hunt-slider__cell">
                    <div class="hunt-slider__inner">
                        <div class="hunt-slider__col hunt-slider__col--img">
                            <img class="hunt-slider__img" src="./media/bg-ls-1.png" alt="slider-img-1">
                        </div>
                        <div class="hunt-slider__col">
                            <div class="hunt-slider__content">
                                <div class="hunt-slider__body">
                                    <h3 class="hunt-slider__subtitle">
                                        Охотничья база “белое”
                                    </h3>
                                    <h2 class="hunt-slider__title">
                                        ОХОТА<br>
                                        НА КОСУЛЮ
                                        ЗАГОНОМ
                                    </h2>
                                </div>

                                <div class="hunt-slider__footer">
                                    <div class="hunt-slider__info">
                                        <p class="hunt-slider__text">
                                            <span class="hunt-slider__text hunt-slider__text--accent">
                                                Сезон начинается:
                                            </span>
                                            с 1 октября по 31 декабря.
                                        </p>
                                    </div>
                                    <button class="button button--white button--hunt-slider" data-show-popup="consult">
                                        <div class="button__wrapper">
                                            <div class="button__inner">Консультация<br><br>Консультация
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hunt-slider__cell">
                    <div class="hunt-slider__inner">
                        <div class="hunt-slider__col hunt-slider__col--img">
                            <img class="hunt-slider__img" src="./media/bg-ls-1.png" alt="slider-img-1">
                        </div>
                        <div class="hunt-slider__col">
                            <div class="hunt-slider__content">
                                <div class="hunt-slider__body">
                                    <h3 class="hunt-slider__subtitle">
                                        Охотничья база “белое”
                                    </h3>
                                    <h2 class="hunt-slider__title">
                                        ОХОТА<br>
                                        НА КОСУЛЮ
                                        ЗАГОНОМ
                                    </h2>
                                </div>

                                <div class="hunt-slider__footer">
                                    <div class="hunt-slider__info">
                                        <p class="hunt-slider__text">
                                            <span class="hunt-slider__text hunt-slider__text--accent">
                                                Сезон начинается:
                                            </span>
                                            с 1 октября по 31 декабря.
                                        </p>
                                    </div>
                                    <button class="button button--white button--hunt-slider" data-show-popup="consult">
                                        <div class="button__wrapper">
                                            <div class="button__inner">Консультация<br><br>Консультация
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="hunt-slider__arrow-down" id="btn_scroll">
                <img src="./media/arrow_down.svg" alt="arrow_down" class="hunt-slider__arrow-img">
            </button>

            <div class="hunt-slider__nav slider-navbar">
                <button class="slider-navbar__btn slider-navbar__btn--left" id="btn_prev"></button>
                <div class="slider-navbar__inner">
                    <p class="slider-navbar__prev-cell" id="prev-cell">01</p>
                    <div class="slider-navbar__hyphen"></div>
                    <p class="slider-navbar__next-cell" id="next-cell">02</p>
                </div>
                <button class="slider-navbar__btn slider-navbar__btn--right" id="btn_next"></button>
            </div>
        </section>

        <section class="features" id="features">
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-1.png" alt="work-3" class="features__img">
                    <a href="">
                        <h3 class="features__title">Комфортная охотничья базе</h3>
                    </a>
                </div>
            </div>
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-2.png" alt="work-3" class="features__img">
                    <a href="">
                        <h3 class="features__title">Высокий профессионализм наших
                            специалистов</h3>
                    </a>
                </div>
            </div>
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-3.png" alt="work-3" class="features__img">
                    <a href="">
                        <h3 class="features__title">Отдых для всей семьи на природе</h3>
                    </a>
                </div>
            </div>
            <div class="features__item">
                <div class="features__item-inner">
                    <img src="media/advantages-4.png" alt="work-3" class="features__img">
                    <a href="">
                        <h3 class="features__title">Частное лестничество</h3>
                    </a>
                </div>
            </div>
        </section>

        <section class="reviews reviews_green">
            <h2 class="reviews__title">
                <span class="title-block">Отзывы</span>
                <span class="title-block">наших клиентов</span>
            </h2>
            <a href="reviews.php" class="reviews__more-item">Все отзывы</a>
            <div class="reviews__list">
                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>

                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>

                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>

                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-avatar reviews__item">
                        <span>ИТ</span>
                    </div>
                    <div class="reviews__item-inner">
                        <ul class="reviews__item-inner__name">
                            <li>Игорь</li>
                            <li>Тишман</li>
                        </ul>
                        <div class="reviews__item-inner__mark">
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star reviews__star--active">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="reviews__star ">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="star" d="M12 2L15.2328 7.55041L21.5106
                            8.90983L17.2308 13.6996L17.8779
                            20.0902L12 17.5L6.12215 20.0902L6.76919
                            13.6996L2.48944 8.90983L8.76718 7.55041L12 2Z" stroke="white" fill="white"
                                        stroke-width="2" />
                                </svg>
                            </span>
                        </div>
                        <p class="reviews__item-inner__massage">Возможно самая шикарная
                            охотничья
                            база
                            в Курганской области!!! Очень крутая гостиница с комфортабельными
                            номерами, просторным холлом, бильярд, баня. В ближайшее время...
                        </p>
                        <button class="reviews__item-inner__more">
                            Читать отзыв полностью
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="contacts">
            <div class="contacts__inner">
                <h2 class="contacts__title">
                    <span class="title-block">Как до нас</span>
                    <span class="title-block">доехать?</span>
                </h2>
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

    <script src="./js/pre-loader.js" type="text/javascript"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="./js/datepicker.js"></script>
    <script src="./js/map.js"></script>
    <script src="./js/popup.js"></script>
    <script src="./js/reviews.js"></script>
    <script src="./js/flickity.pkgd.min.js" type="text/javascript"></script>
    <script src="./js/bg-lazyload.js" type="text/javascript"></script>
    <script src="./js/main.js" type="text/javascript"></script>
    <script src="./js/hunt-slider.js" type="text/javascript"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>

</html>
