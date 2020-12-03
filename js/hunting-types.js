(function () {
    const huntBloks = document.querySelectorAll('.hunt__item');
    huntBloks.forEach((item) => {
        item.addEventListener('click', function () {
            let isActive = this.classList.contains('hunt__item_active');
            huntBloks.forEach((item) => {
                item.classList.remove('hunt__item_active');
            });
            if (!isActive) item.classList.add('hunt__item_active');
        });
    });
})();
