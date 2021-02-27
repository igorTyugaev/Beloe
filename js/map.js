ymaps.ready(init);
function init() {
    const windowWidth = window.innerWidth;
    let myMap = new ymaps.Map('map', {
        center: [54.721915, 64.953378],
        zoom: 9,
        controls: [],
    });
    let myPlacemark = new ymaps.Placemark(
        [54.721915, 64.953378],
        {},
        {
            iconLayout: 'default#image',
            iconImageHref: './media/logo.svg',
            iconImageSize: [0.0625 * windowWidth, 0.03125 * windowWidth],
            iconImageOffset: [
                -0.03125 * windowWidth,
                (-0.03125 / 2) * windowWidth,
            ],
        }
    );

    myMap.geoObjects.add(myPlacemark);
}
