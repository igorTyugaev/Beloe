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

function initForm(_form) {
    _form.addEventListener('submit', (e) => {
        e.preventDefault();
        const {currentTarget} = e;

        const data = scrabbleInputs(currentTarget);

        if (data) {
            console.log('Отправка формы...');
            sendForm(data, currentTarget);
            if (codeStatus) {
                if (idShowPopUp != 0) showPopUpLogic(false);
                currentTarget.reset();
            }
        }

        function checkValidityInput(input) {
            let hint = input.parentNode.querySelector(
                '.form__input-wrapper__error'
            );

            if (!hint) {
                hint = input.parentNode.parentNode.querySelector(
                    '.form__input-wrapper__error'
                );
            }

            switch (input.getAttribute('name')) {
                case 'phone':
                    if (input.validity.valid) {
                        removeErrorInput(input, hint);
                        return true;
                    } else {
                        setErrorInput(
                            input,
                            hint,
                            'Недопустимый номер телефона!'
                        );
                        return false;
                    }
                    break;
                case 'email':
                    if (input.validity.valid) {
                        removeErrorInput(input, hint);
                        return true;
                    } else {
                        setErrorInput(input, hint, 'Недопустимый email!');
                        return false;
                    }
                    break;
                case 'name':
                    if (input.validity.valid) {
                        removeErrorInput(input, hint);
                        return true;
                    } else {
                        setErrorInput(input, hint, 'Как к Вам обращаться?');
                        return false;
                    }
                    break;
                default:
                    return true;
                    break;
            }
        }

        function setErrorInput(input, hint, textError) {
            input.style.borderColor = 'red';
            hint.classList.add('form__input-wrapper__error--show');
            hint.innerHTML = textError;
        }

        function removeErrorInput(input, hint) {
            if (input.hasAttribute('style')) input.removeAttribute('style');
            hint.classList.remove('form__input-wrapper__error--show');
            hint.innerHTML = '';
        }

        function scrabbleInputs(currentForm) {
            let fo = new FormData();
            const inputs = currentForm.querySelectorAll('input, textarea');
            let isValidityForm = true;

            inputs.forEach((input, index) => {
                const _isValidityInput = checkValidityInput(input);

                if (_isValidityInput) {
                    fo.append(input.name, input.value);
                }
                isValidityForm &= _isValidityInput;
            });

            if (!isValidityForm) return null;

            if (idPopup == 7) {
                fo.append('res', JSON.stringify(answersQuizlet));
                answersQuizlet = null;
            }

            fo.append('csrfToken', csrfToken);
            // fo.append('formsended', currentForm.getAttribute('name'));
            fo.append('formsended', formName);

            return fo;
        }

        function sendForm(sendData, currentForm) {
            const base_url = 'https://beloe.ru/';

            axios
                .post(
                    url,
                    sendData,
                    {withCredentials: true},
                    {headers: headers}
                )
                .then(
                    (response) => {
                        console.log(response);
                    },
                    (error) => {
                        console.log(error);
                    }
                );
        }
    });
}

const forms = document.querySelectorAll('form');
forms.forEach((_form) => {
    initForm(_form);
});

function initDatePiker(input) {
    const datepicker = new Datepicker(input, {
        showOnClick: true,
    });
}

const _datePikers = document.querySelectorAll('input[name="arrival_date"]');
_datePikers.forEach((_datePiker) => {
    initDatePiker(_datePiker);
});

