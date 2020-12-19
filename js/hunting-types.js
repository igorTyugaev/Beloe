(function () {
    const huntBlocks = document.querySelectorAll('.hunt__item');
    huntBlocks.forEach((item) => {
        item.addEventListener('click', function () {
            let isActive = this.classList.contains('hunt__item_active');
            huntBlocks.forEach((item) => {
                item.classList.remove('hunt__item_active');
            });
            if (!isActive) item.classList.add('hunt__item_active');
        });
    });
})();
