(function () {
    let percent = 0;
    const line = document.querySelector('.preloader__line');

    const preloaderInterval = setInterval(() => {
        if (screen.width > 520)
            line.style.height = percent++ + '%';
        else
            line.style.width = percent++ + '%';
        if (percent >= 100) {
            document.body.classList.remove('no-scroll');
            document.body.classList.add('active');

            clearInterval(preloaderInterval);
            document
                .querySelector('.preloader')
                .classList.add('preloader--done');
            document
                .getElementById('menu')
                .classList.add('menu--show');
            if (screen.width > 900)
                setTimeout(function () {
                    document
                        .getElementById('preloader__logo-container').remove();
                }, 600);
            else
                document
                    .getElementById('preloader__logo-container').remove();

        }
    }, 20);
})();