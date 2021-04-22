(function () {

    let countPeople = 1,
        countDay = 7;
    let totalPriceProduct = 0;

    const _huntItems = document.querySelectorAll('.hunt__item');

    _huntItems.forEach((_huntItem) => {
        const idProduct = _huntItem.id;
        const titleProduct = _huntItem.querySelector('h3').childNodes[0].data;
        const priceProduct = _huntItem.dataset.price;

        const btnAddProduct = _huntItem.querySelectorAll('.button').item(0);

        btnAddProduct.addEventListener("click", (e) => {
            const { currentTarget } = e;
            const btnInner = currentTarget.querySelector('.button__inner');
            btnInner.innerHTML = "Добавлено</br></br>Добавлено";

            if (!productCart.has(idProduct)) {
                const product = {
                    id: idProduct,
                    title: titleProduct,
                    price: priceProduct
                };

                productCart.set(idProduct, product);
                addProdactToCartUI(product);
            }
        });
    });

    function addProdactToCartUI(product) {
        const cartItem = createCartItem(product);
        _cartList.append(cartItem);
        updateTotalPriceCart(product.price);
    }

    function createCartItem(product) {
        const cartItemWrapper = document.createElement('li');
        const cartItemTitle = document.createElement('span');
        const cartItemBtnClose = document.createElement('button');

        cartItemWrapper.classList = 'cart__item';
        cartItemBtnClose.classList = 'cart__close-item';

        cartItemBtnClose.setAttribute('data-id', product.id);

        cartItemTitle.innerText = product.title;
        cartItemBtnClose.innerHTML = `<img class="cart__close-img" src="./media/close.svg" alt="close_btn">`;


        cartItemBtnClose.addEventListener('click', () => {
            const idItem = cartItemBtnClose.getAttribute('data-id', product.id);
            console.log(productCart.get(idItem).price);
            totalPriceProduct -= productCart.get(idItem).price;
            _totalPriceCart.innerText = (+totalPriceProduct) * (+order.countPeople) * (+order.countDay);
            cartItemBtnClose.parentNode.remove();
        });

        cartItemWrapper.append(cartItemTitle);
        cartItemWrapper.append(cartItemBtnClose);

        return cartItemWrapper;
    }

    function updateTotalPriceCart(price) {
        totalPriceProduct += (+price);
        _totalPriceCart.innerText = (+totalPriceProduct) * (+order.countPeople) * (+order.countDay);
    }

    const
        _btnDayLeft = document.getElementById('btn_day_left'),
        _btnDayRight = document.getElementById('btn_day_right'),

        _btnPeopleLeft = document.getElementById('btn_people_left'),
        _btnPeopleRight = document.getElementById('btn_people_right'),

        _titleDay = document.getElementById('day_field'),
        _titlePeople = document.getElementById('people_field');

    const
        _cartList = document.getElementById('cartList'),
        _totalPriceCart = document.getElementById('totalPriceCart');


    const updateDay = (newValue) => {

        if ((newValue % 100) >= 10 && (newValue % 100) <= 20) {
            _titleDay.innerText = `${newValue} ДНЕЙ`
        } else {
            switch (newValue % 10) {
                case 1:
                    _titleDay.innerText = `${newValue} ДЕНЬ`
                    break;
                case 2:
                case 3:
                case 4:
                    _titleDay.innerText = `${newValue} ДНЯ`
                    break;
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                    _titleDay.innerText = `${newValue} ДНЕЙ`
                    break;
                default:
                    _titleDay.innerText = `${newValue} ДНЕЙ`
                    break;
            }
        }
        order.countDay = newValue;
        _totalPriceCart.innerText = (+totalPriceProduct) * (+order.countPeople) * (+order.countDay);
    }
    updateDay(countDay);

    const updatePeople = (newValue) => {
        if ((newValue % 100) >= 10 && (newValue % 100) <= 20) {
            _titlePeople.innerText = `${newValue} ЧЕЛОВЕК`;
        } else if ((newValue % 10) >= 2 && (newValue % 10) <= 4) {
            _titlePeople.innerText = `${newValue} ЧЕЛОВЕКА`;
        } else {
            _titlePeople.innerText = `${newValue} ЧЕЛОВЕК`;
        }
        order.countPeople = newValue;
        _totalPriceCart.innerText = (+totalPriceProduct) * (+order.countPeople) * (+order.countDay);
    }
    updatePeople(countPeople);

    _btnDayLeft.addEventListener("click", () => {
        countDay > 1 && updateDay(--countDay)
    })

    _btnDayRight.addEventListener("click", () => {
        updateDay(++countDay)
    })

    _btnPeopleLeft.addEventListener("click", () => {
        countPeople > 1 && updatePeople(--countPeople);
    })

    _btnPeopleRight.addEventListener("click", () => {
        updatePeople(++countPeople);
    })

})();
