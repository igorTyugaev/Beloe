(function () {
  let isFlag = 0;

  function appearScroll(appearBlock, callback, border) {
    let flag = true;
    let wrapper = document;

    const heightBlcok = appearBlock.clientHeight;
    appearBlock.setAttribute("style", `height:${heightBlcok}px;padding-bottom:0;padding-top:${heightBlcok}px;overflow: hidden;transition: padding .7s;`);
    const htmlName = window.location.pathname.split("/").pop().split('.')[0];

    if (flag) {
      flag = showBlock(appearBlock, callback, border);
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
    const htmlName = window.location.pathname.split("/").pop().split('.')[0];

    if (flag) {
      flag = showBlock(appearBlock, callback, border);
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
