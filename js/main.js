$(document).ready(function () {
    $('.slider').slick({
        dots: true,
        autoplay: true,
        customPaging: (slider, i) =>
            '0' + (i + 1) + '  —  0' + slider.slideCount,
    });
});

function toggleMenu() {
    document.getElementById("menu").classList.toggle("menu_show");
    document.getElementById("btnCloseMenu").classList.toggle("button_close-active");
    document.getElementById("numbers-main").classList.toggle("numbers_toggle");
    document.getElementsByTagName('body').item(0).style.overflow = 'hidden';
}

function closeMenu() {
    document.getElementById("menu").classList.remove("menu_show");
    document.getElementById("btnCloseMenu").classList.remove("button_close-active");
    document.getElementById("numbers-main").classList.remove("numbers_toggle");
    document.getElementsByTagName('body').item(0).style.overflow = '';
}