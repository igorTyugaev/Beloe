function initReview(review) {
    const moreBtn = review.querySelector('.reviews__item-inner__more');
    const messageText = review.querySelector('.reviews__item-inner__massage');
    const showMessage = 'Читать отзыв полностью';
    const hiddenMessage = 'Свернуть отзыв';
    let massageState = false;

    if (moreBtn) {
        moreBtn.addEventListener('click', () => {
            messageText.classList.toggle('reviews__item-inner__massage--show');

            if (massageState)
                moreBtn.innerHTML = showMessage;
            else
                moreBtn.innerHTML = hiddenMessage;

            massageState = !massageState;
        });
    }

}

const reviews = document.querySelectorAll('.reviews__item');

reviews.forEach((review) => {
    initReview(review)
});