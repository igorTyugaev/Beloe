<header id="menu" class="menu">

    <div class="menu__logo-container">
        <a href="index.php" class="menu__logo-box">
            <img
                    src="./media/logo.svg"
                    alt="Охотничья база Белое"
                    class="menu__logo"
            />
        </a>
        <button onclick="closeMenu()" id="btnCloseMenu" class="button_close"></button>
    </div>

    <hr class="menu__line"/>

    <nav class="menu__nav">
        <ul>
            <li class="menu__link-container">
                <a class="menu__link" href="hunting-types.php">Все виды охоты</a>
            </li>

            <li>
                <hr class="menu__line"/>
            </li>

            <li class="menu__link-container">
                <a class="menu__link" href="about.php">О
                    нас</a></li>
            <li class="menu__link-container"><a class="menu__link" href="our-news.php">Новости</a>
            </li>
            <li class="menu__link-container"><a class="menu__link"
                                                href="reviews.php">Отзывы</a></li>
            <li class="menu__link-container"><a class="menu__link" href="gallery.php">Галерея</a>
            </li>

            <li>
                <hr class="menu__line"/>
            </li>

            <li class="menu__link-container"><a class="menu__link" href="contacts.php">Контакты</a>
            </li>
            <li class="menu__lang">
                <img src="./media/RUS.svg" alt="RU" class="lang lang--active"/>
                <img src="./media/DEU.svg" alt="DEU" class="lang"/>
            </li>
        </ul>
    </nav>


    <span class="menu__address">
                Россия, Курганская область лес
                <br/>
                Каминская Дача
            </span>
    <a class="menu__drive" href="contacts.php">Как проехать?</a>

    <div class="menu__bottom-container">
        <div class="numbers container numbers_menu">
            <a href="tel:+73523993052" class="numbers__block">
                <div class="numbers__block__wrapper">
                    <div class="numbers__block__inner">
                        8 (3523) 99 — 30 — 52<br><br>8 (3523) 99 — 30 — 52
                    </div>
                </div>
            </a>
            <a href="tel:+73523993052" class="numbers__block">
                <div class="numbers__block__wrapper">
                    <div class="numbers__block__inner">
                        8 (3523) 99 — 30 — 52<br><br>8 (3523) 99 — 30 — 52
                    </div>
                </div>
            </a>
        </div>

        <button class="button button--green" data-show-popup="consult">
            <div class="button__wrapper">
                <div class="button__inner">
                    Записаться на охоту<br><br>Записаться на охоту
                </div>
            </div>
        </button>

    </div>

    <div class="menu__cover"></div>

</header>

<div class="menu--small">
    <button onclick="toggleMenu()" id="btnDropDownMenu" class="button button_menu">
        Меню
    </button>
</div>

<div id="popup-order" class="popup">
    <div class="popup__body">
        <button class="popup__close">
            <img src="media/close.svg" alt="">
        </button>
        <h2 class="popup__title">Записаться<br>
            на охоту</h2>
        <div class="popup__form">
            <input type="text" placeholder="Дата заезда"/>
            <input type="text" placeholder="Время для звонка"/>
            <input type="text" placeholder="ваш телефон"/>
            <input type="text" placeholder="Ваше имя"/>
            <button class="button button--white">
                <div class="button__wrapper">
                    <div class="button__inner">Консультация<br><br>Консультация</div>
                </div>
            </button>
        </div>
        <p class="popup__success">
            Скоро мы с вами свяжемся!
        </p>
    </div>
</div>

<div id="popup-consult" class="popup">
    <div class="popup__body">
        <div class="popup__close">
            <img src="media/close.svg" alt="">
        </div>
        <h2 class="popup__title">Записаться<br>
            на охоту</h2>
        <div class="popup__form">
            <input type="text" placeholder="Время для звонка"/>
            <input type="text" placeholder="ваш телефон"/>
            <input type="text" placeholder="Ваше имя"/>
            <button class="button button--white">
                <div class="button__wrapper">
                    <div class="button__inner">Консультация<br><br>Консультация</div>
                </div>
            </button>
        </div>
        <p class="popup__success">
            Скоро мы с вами свяжемся!
        </p>
    </div>
</div>




