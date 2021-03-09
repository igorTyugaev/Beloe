function initSlider(_carousel) {
    const _preItem = document.getElementById('prev-cell');
    const _nexItem = document.getElementById('next-cell');

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
                index++;
                _preItem.innerHTML = ('0' + index).slice(-2)
                _nexItem.innerHTML = ('0' + slidesLength).slice(-2)
            }
        }
    });
    _nexItem.innerHTML = ('0' + flickityCarousel.slides.length).slice(-2);

    const _sliderNavbarBtnLeft = document.getElementById('btn_prev');
    const _sliderNavbarBtnRight = document.getElementById('btn_next');

    _sliderNavbarBtnLeft.addEventListener('click', (e) => {
        const {currentTarget} = e;
        flickityCarousel.previous();
    });

    _sliderNavbarBtnRight.addEventListener('click', (e) => {
        const {currentTarget} = e;
        flickityCarousel.next();
    });
}

const _huntSlider = document.getElementById('hunt-slider');

const _scrollBtn = document.getElementById('btn_scroll');
const anchor = document.getElementById("features");

_scrollBtn.addEventListener("click", () => {
    anchor.scrollIntoView();
});


initSlider(_huntSlider);
