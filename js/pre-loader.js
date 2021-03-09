(function () {
    let percent = 0;
    let isHorizontal = false;
    const line = document.querySelector('.preloader__line');
    if (screen.width <= 520) {
        isHorizontal = true;
        document.getElementById("menu").classList.toggle("menu_show");
    }
    const preloaderInterval = setInterval(() => {
        if (!isHorizontal)
            line.style.height = percent++ + '%';
        else
            line.style.width = percent++ + '%';
        // percentBlock.innerHTML = percent + '%';
        if (percent >= 100) {
            // canScroll = 'down';
            document.body.classList.remove('no-scroll');
            // document
            //     .querySelector('.main-logo')
            //     .classList.add('main-logo_active');
            document.body.classList.add('active');
            // gallerySlider();
            // infoSliderInit();
            // changeHeaderColor('add');
            clearInterval(preloaderInterval);
            document
                .querySelector('.preloader')
                .classList.add('preloader--done');
            document
                .getElementById('menu')
                .classList.add('menu--show');

            if (isHorizontal)
                document.getElementById("menu").classList.toggle("menu_show");

        }
    }, 20);
})();