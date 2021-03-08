function initSlider(_carousel) {

    const flickityCarousel = new Flickity(_carousel, {
        cellAlign: 'left',
        // autoPlay: 4500,
        bgLazyLoad: true,
        prevNextButtons: false,
        pageDots: false,
        setGallerySize: false
    });
}

const _huntSlider = document.getElementById('hunt-slider');
const _sliderNavbarBtnsLeft = document.querySelectorAll('.slider-navbar__btn--left');
const _sliderNavbarBtnsRight = document.querySelectorAll('.slider-navbar__btn--right');

_sliderNavbarBtnsLeft.forEach((_sliderNavbarBtnLeft, index) => {
    _sliderNavbarBtnLeft.addEventListener('click', (e) => {

    });
});

_sliderNavbarBtnsRight.forEach((_sliderNavbarBtnRight, index) => {
    _sliderNavbarBtnRight.addEventListener('click', (e) => {

    });
});

// const _preItem = _slider.querySelector('.slider__pre-item');
// const _nexItem = _slider.querySelector('.slider__nex-item');

initSlider(_huntSlider);
