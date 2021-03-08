function initSlider(_carousel) {
    let currentCell = 1;
    let nextCell = currentCell + 1;

    const flickityCarousel = new Flickity(_carousel, {
        cellAlign: 'left',
        // autoPlay: 4500,
        bgLazyLoad: true,
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        setGallerySize: false,
        on: {
            change: function (index) {
                const currentCell = this.slides[index].cells[0].element;
                const _preItem = currentCell.querySelector('.slider-navbar__prev-cell');
                const _nexItem = currentCell.querySelector('.slider-navbar__next-cell');

                index++;
                const slidesLength = this.slides.length;
                let nextIndex = index + 1;
                if (nextIndex > slidesLength)
                    nextIndex = 1;

                _preItem.innerHTML = ('0' + index).slice(-2)
                _nexItem.innerHTML = ('0' + nextIndex).slice(-2)
            }
        }
    });


    const _sliderNavbarBtnsLeft = _carousel.querySelectorAll('.slider-navbar__btn--left');
    const _sliderNavbarBtnsRight = _carousel.querySelectorAll('.slider-navbar__btn--right');

    _sliderNavbarBtnsLeft.forEach((_sliderNavbarBtnLeft, index) => {
        _sliderNavbarBtnLeft.addEventListener('click', (e) => {
            const {currentTarget} = e;
            flickityCarousel.previous();
        });
    });

    _sliderNavbarBtnsRight.forEach((_sliderNavbarBtnRight, index) => {
        _sliderNavbarBtnRight.addEventListener('click', (e) => {
            const {currentTarget} = e;
            flickityCarousel.next();
        });
    });
}

const _huntSlider = document.getElementById('hunt-slider');

const _scrollBtns = _huntSlider.querySelectorAll(".hunt-slider__arrow-down");
const anchor = document.getElementById("features");

_scrollBtns.forEach((_scrollBtn, index) => {
    _scrollBtn.addEventListener("click", () => {
        anchor.scrollIntoView();
    });
});


initSlider(_huntSlider);
