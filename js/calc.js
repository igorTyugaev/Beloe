(function () {
    const
        _arrowsDayLeft = document.getElementById('btn_day_left'),
        _arrowDayRight = document.getElementById('btn_day_right'),
        _arrowsPeopleLeft = document.getElementById('btn_people_left'),
        _arrowsPeopleRight = document.getElementById('btn_people_right'),
        _dayField = document.getElementById('day_field'),
        _peopleField = document.getElementById('people_field'),
        _huntItems = document.querySelectorAll('.hunt__item');

    const
        _cartList = document.getElementById('cartList'),
        _totalPriceCart = document.getElementById('totalPriceCart');


    let countPeople = 1,
        countDay = 7;

    const updateDay = (newValue) => {

        if ((newValue % 100) >= 10 && (newValue % 100) <= 20) {
            _dayField.innerText = `${newValue} ДНЕЙ`
        } else {
            switch (newValue % 10) {
                case 1:
                    _dayField.innerText = `${newValue} ДЕНЬ`
                    break;
                case 2:
                case 3:
                case 4:
                    _dayField.innerText = `${newValue} ДНЯ`
                    break;
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                    _dayField.innerText = `${newValue} ДНЕЙ`
                    break;
                default:
                    _dayField.innerText = `${newValue} ДНЕЙ`
                    break;
            }
        }
    }
    updateDay(countDay);

    const updatePeople = (newValue) => {
        if ((newValue % 100) >= 10 && (newValue % 100) <= 20) {
            _peopleField.innerText = `${newValue} ЧЕЛОВЕК`;
        } else if ((newValue % 10) >= 2 && (newValue % 10) <= 4) {
            _peopleField.innerText = `${newValue} ЧЕЛОВЕКА`;
        } else {
            _peopleField.innerText = `${newValue} ЧЕЛОВЕК`;
        }
    }
    updatePeople(countPeople);

    _arrowsDayLeft.addEventListener("click", () => {
        countDay > 1 && updateDay(--countDay)
        updateCartList(huntCart);
    })

    _arrowDayRight.addEventListener("click", () => {
        updateDay(++countDay)
        updateCartList(huntCart);
    })

    _arrowsPeopleLeft.addEventListener("click", () => {
        countPeople > 1 && updatePeople(--countPeople);
        updateCartList(huntCart);

    })

    _arrowsPeopleRight.addEventListener("click", () => {
        updatePeople(++countPeople);
        updateCartList(huntCart);
    })


    const updateCartList = (newHuntCart) => {
        let cartListInnerHTML = `<li class="cart__item">
                            <span>Утиная охота</span>
                            <button class="cart__close-item">
                                <img class="cart__close-img" src="./media/close.svg" alt="close_btn">
                            </button>
                        </li>
                        <li class="cart__item">
                            <span>Охота на лося (с вышки)</span>
                            <button class="cart__close-item">
                                <img class="cart__close-img" src="./media/close.svg" alt="close_btn">
                            </button>
                        </li>`
        let totalPrice = 5000
        newHuntCart.forEach((item) => {
            cartListInnerHTML += `
            <li class="cart__item">
                <span>${item['title']}</span>
                <button class="cart__close-item">
                    <img class="cart__close-img" src="./media/close.svg" alt="close_btn">
                </button>
            </li>`
            totalPrice += Number.parseInt(item['price'])
        });
        cartListInnerHTML += `<li class="cart__item"><hr class="calc__line"/></li>`

        _cartList.innerHTML = cartListInnerHTML;
        _totalPriceCart.innerText = +totalPrice * +countPeople * +countDay;
    }

    let huntItemsData = [];
    let huntCart = [];

    _huntItems.forEach((item) => {
        const title = item.querySelector('h3').childNodes[0].data;
        const itemId = item.id;
        const button = item.querySelectorAll('.button').item(0);
        const price = item.dataset.price;

        huntItemsData.push({
            title,
            price,
            itemId,
            button
        });

        button.addEventListener("click", (e) => {
            const { currentTarget } = e;
            const btnInner = button.querySelector('.button__inner')
            huntCart.push({
                title,
                price,
                itemId
            });

            updateCartList(huntCart);
            btnInner.innerHTML = "Добавлено</br></br>Добавлено";
        })
    })

})()

function removeItemCart(e) {
    // const _totalPriceCart = document.getElementById('totalPriceCart');
    console.log(e);
    e.parentNode.remove();

    // _totalPriceCart.innerText = +totalPrice * +countPeople * +countDay;
}
