ymaps.ready(init);
function init() {
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
            iconImageHref: '../media/logo.svg',
            iconImageSize: [80, 40],
            iconImageOffset: [-43, -20],
        }
    );

    myMap.geoObjects.add(myPlacemark);
}
