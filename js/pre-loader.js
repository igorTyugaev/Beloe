(function () {
    let percent = 0;
    const line = document.querySelector('.preloader__line');
    document.body.classList.add('no-scroll');

    const preloaderInterval = setInterval(() => {
        if (window.screen.width > 520)
            line.style.height = percent++ + '%';
        else
            line.style.width = percent++ + '%';
        if (percent >= 100) {
            document.body.classList.remove('no-scroll');
            document.body.classList.add('active');

            clearInterval(preloaderInterval);
            document
                .querySelector('.preloader')
                .classList.add('preloader--done');
            document
                .getElementById('menu')
                .classList.add('menu--show');

            if (screen.width > 900)
                setTimeout(function () {
                    document
                        .getElementById('preloader__logo-container').remove();
                }, 600);
            else
                document
                    .getElementById('preloader__logo-container').remove();

        }
    }, 20);
})();

(function () {
    let isFlag = 0;

    function appearScroll(appearBlock, callback, border) {
        let flag = true;
        let wrapper = document;

        const heightBlcok = appearBlock.clientHeight;
        appearBlock.setAttribute("style", `height:${heightBlcok}px;padding-bottom:0;padding-top:${heightBlcok}px;overflow: hidden;transition: padding .7s;`);

        if (flag) {
            setTimeout(() => {
                flag = showBlock(appearBlock, callback, border);
            }, 2480);
        }

        wrapper.addEventListener('scroll', () => {
            if (flag) flag = showBlock(appearBlock, callback, border);
        });
    }

    function showBlock(appearBlock, callback, border) {
        // возвращает размер элемента и его позицию относительно viewport
        const appearTop = appearBlock.getBoundingClientRect();
        const vh = document.documentElement.clientHeight;
        const vw = document.documentElement.clientWidth;

        const appearValueHeight = vh * border;
        const appearValueWidth = vw * border;

        const foorValueHeight = (appearTop.top / appearValueHeight) >> 0;
        const foorValueWidth = (appearTop.left / appearValueWidth) >> 0;

        const conditionHeight = (Math.abs(foorValueHeight) === 0);
        const conditionWidth = (Math.abs(foorValueWidth) === 0);

        if (conditionHeight && conditionWidth) {
            callback();
            return false;
        } else {
            return true;
        }
    }

    function appearAction(block, index) {
        if (isFlag != 0 || index === 0) {
            isFlag++;
            setTimeout(() => {
                queueClear(block);
            }, (300 * (+isFlag)));
        } else {
            isFlag++;
            queueClear(block);
        }
    }

    function queueClear(block) {
        // block.classList.add('title-block--show');
        block.classList.add('show-block');
        block.style.paddingTop = 0;
        setTimeout(() => {
            block.removeAttribute('style');
            isFlag--;
        }, 700);
    }

    const caseDescs = document.querySelectorAll('.title-block');
    caseDescs.forEach((caseDesc, index) => {
        appearScroll(caseDesc, () => appearAction(caseDesc, index), 0.85);
    });
})();

(function () {
    let isFlag = 0;

    function appearScroll(appearBlock, callback, border) {
        let flag = true;
        let wrapper = document;

        const heightBlcok = appearBlock.clientHeight;
        appearBlock.setAttribute("style", `height:${heightBlcok}px;padding-bottom:0;padding-top:${heightBlcok}px;overflow: hidden;transition: padding .7s;`);
        const htmlName = window.location.pathname.split("/").pop().split('.')[0];
        console.log(htmlName)

        if (flag) {
            setTimeout(() => {
                flag = showBlock(appearBlock, callback, border);
            }, 2480);
        }

        wrapper.addEventListener('scroll', () => {
            if (flag) flag = showBlock(appearBlock, callback, border);
        });
    }

    function showBlock(appearBlock, callback, border) {
        // возвращает размер элемента и его позицию относительно viewport
        const appearTop = appearBlock.getBoundingClientRect();
        const vh = document.documentElement.clientHeight;
        const appearValue = vh * border;
        const foorValue = (appearTop.top / appearValue) >> 0;
        const condition = (Math.abs(foorValue) === 0);

        if (condition) {
            callback();
            return false;
        } else {
            return true;
        }
    }

    function appearAction(block, index) {
        if (isFlag != 0 || index === 0) {
            isFlag++;
            setTimeout(() => {
                queueClear(block);
            }, (140 * (+isFlag)));
        } else {
            isFlag++;
            queueClear(block);
        }
    }

    function queueClear(block) {
        // block.classList.add('title-block--show');
        block.classList.add('show-block');
        block.style.paddingTop = 0;
        setTimeout(() => {
            block.removeAttribute('style');
            isFlag--;
        }, 700);
    }

    const caseDescs = document.querySelectorAll('.nav-block');
    caseDescs.forEach((caseDesc, index) => {
        appearScroll(caseDesc, () => appearAction(caseDesc, index), 0.85);
    });
})();

(function () {
    let isFlag = 0;

    function appearScroll(appearBlock, callback, border) {
        let flag = true;
        let wrapper = document;

        const heightBlcok = appearBlock.clientHeight;
        const htmlName = window.location.pathname.split("/").pop().split('.')[0];

        if (flag) {
            setTimeout(() => {
                flag = showBlock(appearBlock, callback, border);
            }, 2480);
        }

        wrapper.addEventListener('scroll', () => {
            if (flag) flag = showBlock(appearBlock, callback, border);
        });
    }

    function showBlock(appearBlock, callback, border) {
        // возвращает размер элемента и его позицию относительно viewport
        const appearTop = appearBlock.getBoundingClientRect();
        const vh = document.documentElement.clientHeight;
        const appearValue = vh * border;
        const foorValue = (appearTop.top / appearValue) >> 0;
        const condition = (Math.abs(foorValue) === 0);

        if (condition) {
            callback();
            return false;
        } else {
            return true;
        }
    }

    function appearAction(block, index) {
        if (isFlag != 0 || index === 0) {
            isFlag++;
            setTimeout(() => {
                queueClear(block);
            }, (300 * (+isFlag)));
        } else {
            isFlag++;
            queueClear(block);
        }
    }

    function queueClear(block) {
        block.classList.add('opacity-block--show');
        setTimeout(() => {
            // block.removeAttribute('style');
            isFlag--;
        }, 700);
    }

    const caseDescs = document.querySelectorAll('.opacity-block');
    caseDescs.forEach((caseDesc, index) => {
        appearScroll(caseDesc, () => appearAction(caseDesc, index), 0.95);
    });
})();
