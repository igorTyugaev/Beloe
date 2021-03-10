const _menu = document.getElementById("menu");
const _btnCloseMenu = document.getElementById("btnCloseMenu");
const _numBlock = document.getElementById("numbers-main");
const _body = document.getElementsByTagName('body');

function toggleMenu() {
    _menu.classList.toggle("menu_show");
    _btnCloseMenu.classList.toggle("button_close-active");
    if (_numBlock) _numBlock.classList.toggle("numbers_toggle");
    _body.item(0).style.overflow = 'hidden';
}

function closeMenu() {
    _menu.classList.remove("menu_show");
    _btnCloseMenu.classList.remove("button_close-active");
    if (_numBlock) _numBlock.classList.remove("numbers_toggle");
    _body.item(0).style.overflow = '';
}