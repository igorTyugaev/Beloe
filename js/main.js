$(document).ready(function () {
    $('.slider').slick({
        dots: true,
        autoplay: true,
        customPaging: (slider, i) =>
            '0' + (i + 1) + '  —  0' + slider.slideCount,
    });
});
