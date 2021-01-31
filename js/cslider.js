let map = function (x, in_min, in_max, out_min, out_max) {
    return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}

let multiItemsSlider = (function () {
    return function (selector, config) {
        let
            _mainElement = document.querySelector(selector), // основный элемент блока
            _csliderWrapper = _mainElement.querySelector('.cslider__wrapper'), // обертка для .cslider-item

            _csliderPreItem = _mainElement.querySelector('.cslider__pre-item'),
            _csliderNexItem = _mainElement.querySelector('.cslider__nex-item'),

            _csliderItems = _mainElement.querySelectorAll('.cslider__item'), // элементы (.cslider-item)
            _csliderControls = _mainElement.querySelectorAll('.cslider__control'), // элементы управления
            _csliderControlLeft = _mainElement.querySelector('.cslider__control_left'), // кнопка "LEFT"
            _csliderControlRight = _mainElement.querySelector('.cslider__control_right'), // кнопка "RIGHT"
            _wrapperWidth = parseFloat(getComputedStyle(_csliderWrapper).width), // ширина обёртки
            _itemWidth = parseFloat(getComputedStyle(_csliderItems[0]).width), // ширина одного элемента
            _positionLeftItem = 0, // позиция левого активного элемента
            _transform = 0, // значение транфсофрмации .cslider_wrapper
            _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
            _items = []; // массив элементов

        // наполнение массива _items
        _csliderItems.forEach(function (item, index) {
            _items.push({item: item, position: index, transform: 0});
        });

        let position = {
            getItemMin: function () {
                let indexItem = 0;
                _items.forEach(function (item, index) {
                    if (item.position < _items[indexItem].position) {
                        indexItem = index;
                    }
                });
                return indexItem;
            },
            getItemMax: function () {
                let indexItem = 0;
                _items.forEach(function (item, index) {
                    if (item.position > _items[indexItem].position) {
                        indexItem = index;
                    }
                });
                return indexItem;
            },
            getMin: function () {
                return _items[position.getItemMin()].position;
            },
            getMax: function () {
                return _items[position.getItemMax()].position;
            }
        }

        let _transformItem = function (direction) {
            let nextItem;
            if (direction === 'right') {
                _positionLeftItem++;
                if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) > position.getMax()) {
                    nextItem = position.getItemMin();
                    _items[nextItem].position = position.getMax() + 1;
                    _items[nextItem].transform += _items.length * 100;
                    _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
                }
                _transform -= _step;
            }
            if (direction === 'left') {
                _positionLeftItem--;
                if (_positionLeftItem < position.getMin()) {
                    nextItem = position.getItemMax();
                    _items[nextItem].position = position.getMin() - 1;
                    _items[nextItem].transform -= _items.length * 100;
                    _items[nextItem].item.style.transform = 'translateX(' + _items[nextItem].transform + '%)';
                }
                _transform += _step;
            }
            _csliderWrapper.style.transform = 'translateX(' + _transform + '%)';
            let pos = Math.abs(_positionLeftItem) % _items.length;
            pos = map(pos, 0, (_items.length - 1), 1, _items.length)

            let posNex = pos == _items.length ? 1 : pos + 1;

            _csliderPreItem.innerHTML = ('0' + pos).slice(-2)
            _csliderNexItem.innerHTML = ('0' + posNex).slice(-2)

        }

        // обработчик события click для кнопок "назад" и "вперед"
        let _controlClick = function (e) {
            if (e.target.classList.contains('cslider__control')) {
                e.preventDefault();
                let direction = e.target.classList.contains('cslider__control_right') ? 'right' : 'left';
                _transformItem(direction);
            }
        };

        let _setUpListeners = function () {
            // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
            _csliderControls.forEach(function (item) {
                item.addEventListener('click', _controlClick);
            });
        }

        // инициализация
        _setUpListeners();

        return {
            right: function () { // метод right
                _transformItem('right');
            },
            left: function () { // метод left
                _transformItem('left');
            }
        }

    }
}());

let cslider = multiItemsSlider('.cslider')
