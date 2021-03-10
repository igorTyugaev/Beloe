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

        <button class="button button--green" data-show-popup="order">
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
        <div class="popup__close">
            <img src="media/close.svg" alt="">
        </div>
        <h2 class="popup__title">Записаться<br>
            на охоту</h2>
        <form novalidate class="popup__form form" name="order" action="/">

            <input class="form__input" type="text" name="arrival_date"
                   placeholder="Дата заезда"
                   min="2021-01-01" max="2099-12-31">

            <select class="form__input" type="text" form="order"
                    name="time_call" required>
                <option value="" disabled selected>
                    Время для звонка
                </option>
                <option value="0:00">9:00</option>
                <option value="0:30">9:30</option>

                <option value="0:00">10:00</option>
                <option value="0:30">10:30</option>

                <option value="0:00">11:00</option>
                <option value="0:30">11:30</option>

                <option value="0:00">12:00</option>
                <option value="0:30">12:30</option>

                <option value="0:00">13:00</option>
                <option value="0:30">13:30</option>

                <option value="0:00">14:00</option>
                <option value="0:30">14:30</option>

                <option value="0:00">14:00</option>
                <option value="0:30">14:30</option>

                <option value="0:00">14:00</option>
                <option value="0:30">14:30</option>

                <option value="0:00">15:00</option>
                <option value="0:30">15:30</option>

                <option value="0:00">16:00</option>
                <option value="0:30">16:30</option>
            </select>

            <div class="form__input-wrapper">
                <input class="form__input" name="phone" type="tel"
                       placeholder="Ваш телефон"
                       pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                       required/>
                <span class="form__input-wrapper__error"></span>
            </div>
            <div class="form__input-wrapper">
                <input class="form__input" name="name" type="text"
                       placeholder="Ваше имя"
                       required/>
                <span class="form__input-wrapper__error"></span>
            </div>
            <button type="submit" class="button button--white form__btn">
                <div class="button__wrapper">
                    <div class="button__inner">Консультация<br><br>Консультация</div>
                </div>
            </button>
        </form>
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
        <h2 class="popup__title">Получить<br>
            консультацию</h2>
        <form novalidate class="popup__form form" name="order" action="/">
            <input type="text" placeholder="Время для звонка"/>
            <div class="form__input-wrapper">
                <input class="form__input" name="phone" type="tel"
                       placeholder="Ваш телефон"
                       pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                       required/>
                <span class="form__input-wrapper__error"></span>
            </div>
            <div class="form__input-wrapper">
                <input class="form__input" name="name" type="text"
                       placeholder="Ваше имя"
                       required/>
                <span class="form__input-wrapper__error"></span>
            </div>
            <button type="submit" class="button button--white form__btn">
                <div class="button__wrapper">
                    <div class="button__inner">Консультация<br><br>Консультация</div>
                </div>
            </button>
        </form>
        <p class="popup__success">
            Скоро мы с вами свяжемся!
        </p>
    </div>
</div>




