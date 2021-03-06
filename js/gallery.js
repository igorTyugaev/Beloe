// let acc = document.getElementsByClassName("button-accordion");
// let i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function () {
//         /* Toggle between adding and removing the "active" class,
//         to highlight the button that controls the panel */
//
//         console.log(this.classList)
//
//         if (this.classList.value != "button-accordion button-accordion--active") {
//             document.getElementsByClassName("button-accordion button-accordion--active")
//                 .item(0).classList.remove("button-accordion--active")
//
//             this.classList.toggle("button-accordion--active");
//         }
//     });
// }

function initSlider(_slider) {
    const _carousel = _slider.querySelector('.slider__content');

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
                // console.log('Slide changed to' + index);
            }
        }
    });

    _slider.addEventListener('click', (e) => {
        const {currentTarget} = e;

        if (showSlider === currentTarget) {
            currentTarget.classList.toggle('slider--show');
        } else {
            showSlider.classList.remove('slider--show');
            currentTarget.classList.add('slider--show');
        }
        showSlider = currentTarget;
        // console.log('click');
    })
}


const _galleryWrapper = document.getElementById('gallery');
const _sliders = _galleryWrapper.querySelectorAll('.slider');
let showSlider = _sliders[0];
showSlider.classList.add('slider--show');

_sliders.forEach((_slider) => {
    initSlider(_slider);
});