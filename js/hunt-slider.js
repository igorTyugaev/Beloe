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
                // console.log()
                const currentSlide = this.cells[index].element;
                const allSlideis = this.cells;
                index++;
                _preItem.innerHTML = ('0' + index).slice(-2);

                (function () {
                    let isFlag = 0;

                    function appearScroll(appearBlock, callback, border) {
                        let flag = true;
                        let wrapper = document;

                        const heightBlcok = appearBlock.clientHeight;
                        appearBlock.setAttribute("style", `height:${heightBlcok}px;padding-bottom:0;padding-top:${heightBlcok}px;overflow: hidden;transition: padding .7s;`);
                        const htmlName = window.location.pathname.split("/").pop().split('.')[0];

                        showBlock(appearBlock, callback, border);
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

                        if (conditionHeight) {
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
                        block.classList.add('show-block');
                        block.style.paddingTop = 0;
                        setTimeout(() => {
                            block.removeAttribute('style');
                            isFlag--;
                        }, 700);
                    }

                    const caseDescs = currentSlide.querySelectorAll('.title-block');
                    caseDescs.forEach((caseDesc, index) => {
                        appearScroll(caseDesc, () => appearAction(caseDesc, index), 0.85);
                    });

                    allSlideis.forEach((item) => {
                        item = item.element;
                        const caseDescs = item.querySelectorAll('.title-block');
                        caseDescs.forEach((block) => {
                            block.classList.remove('show-block');
                        });
                    });
                })();

                (function () {
                    let isFlag = 0;

                    function appearScroll(appearBlock, callback, border) {
                        showBlock(appearBlock, callback, border);
                    }

                    function showBlock(appearBlock, callback, border) {
                        callback();
                        return false;
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

                    allSlideis.forEach((item) => {
                        item = item.element;
                        const caseDescs = item.querySelectorAll('.opacity-block');
                        caseDescs.forEach((block) => {
                            block.classList.remove('opacity-block--show');
                        });
                    });

                    const caseDescs = currentSlide.querySelectorAll('.opacity-block');
                    caseDescs.forEach((caseDesc, index) => {
                        appearScroll(caseDesc, () => appearAction(caseDesc, index), 0.85);
                        console.log(index);
                    });
                })();

            }
        }
    });
    _nexItem.innerHTML = ('0' + flickityCarousel.slides.length).slice(-2);

    const _sliderNavbarBtnLeft = document.getElementById('btn_prev');
    const _sliderNavbarBtnRight = document.getElementById('btn_next');

    _sliderNavbarBtnLeft.addEventListener('click', (e) => {
        const { currentTarget } = e;
        flickityCarousel.previous();
    });

    _sliderNavbarBtnRight.addEventListener('click', (e) => {
        const { currentTarget } = e;
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
