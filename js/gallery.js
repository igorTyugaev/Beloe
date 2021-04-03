function initSlider(_slider) {
    const _carousel = _slider.querySelector('.slider__content');
    const _preItem = _slider.querySelector('.slider__pre-item');
    const _nexItem = _slider.querySelector('.slider__nex-item');

    const flickityCarousel = new Flickity(_carousel, {
        cellAlign: 'left',
        // autoPlay: 4500,
        bgLazyLoad: true,
        prevNextButtons: true,
        pageDots: false,
        lazyLoad: true,
        setGallerySize: false,
        on: {
            change: function (index) {
                index++;
                const slidesLength = this.slides.length;
                let nextIndex = index + 1;
                if (nextIndex > slidesLength)
                    nextIndex = index;

                _preItem.innerHTML = ('0' + index).slice(-2)
                _nexItem.innerHTML = ('0' + slidesLength).slice(-2)
            }
        }
    });

    _nexItem.innerHTML = ('0' + flickityCarousel.slides.length).slice(-2)

    _slider.addEventListener('click', (e) => {
        const {currentTarget} = e;

        if (showSlider != currentTarget) {
            showSlider.classList.remove('slider--show');
            currentTarget.classList.add('slider--show');
        }
        showSlider = currentTarget;
    })
}

const _galleryWrapper = document.getElementById('gallery');
const _sliders = _galleryWrapper.querySelectorAll('.slider');
let showSlider = _sliders[0];
showSlider.classList.add('slider--show');

_sliders.forEach((_slider, index) => {
    initSlider(_slider);
});
