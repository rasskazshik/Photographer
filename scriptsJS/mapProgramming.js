ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {        
        center: [51.632413, 36.139826],
        zoom: 9,
        // Добавим панель маршрутизации.
        controls: ['routePanelControl'],
        yandexMapDisablePoiInteractivity: true
    },
    { 
        yandexMapDisablePoiInteractivity: true, 
        suppressMapOpenBlock: true
    });
    
    var control = myMap.controls.get('routePanelControl');

    // Зададим состояние панели для построения машрутов.
    control.routePanel.state.set({
        // Тип маршрутизации.
        type: 'auto',
        // Выключим возможность задавать пункт отправления в поле ввода.
        fromEnabled: false,
        // Адрес или координаты пункта отправления.
        from: [51.632413, 36.139826],
        // Включим возможность задавать пункт назначения в поле ввода.
        toEnabled: true
    });

    // Зададим опции панели для построения машрутов.
    control.routePanel.options.set({
        // Запрещаем показ кнопки, позволяющей менять местами начальную и конечную точки маршрута.
        allowSwitch: false,
        // Включим определение адреса по координатам клика.
        // Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
        reverseGeocoding: true,
        // Зададим виды маршрутизации, которые будут доступны пользователям для выбора.
        types: {auto: true }
    });
    
    // Получим ссылку на маршрут.
    control.routePanel.getRouteAsync().then(function (route) {
        // Зададим максимально допустимое число маршрутов, возвращаемых мультимаршрутизатором.
        route.model.setParams({results: 1}, true);
        // Повесим обработчик на событие построения маршрута.
        route.model.events.add('requestsuccess', function () {
            var activeRoute = route.getActiveRoute();
            if (activeRoute) {
                // Получим протяженность маршрута
                var length = route.getActiveRoute().properties.get("distance");
                // Получим стоимость
                var lengthValue = Math.round(length.value/1000*$(".outdoorCostPerKm").val());   
                // Пропишем стоимость в калькуляторе
                $(".outdoorCost").html(lengthValue);
                $(".outdoorCostCalculated").val(lengthValue);
                $(".outdoorCostCalculated").trigger("change");
            }
            else{
                $(".outdoorCost").html(0);
                $(".outdoorCostCalculated").val(0);
                $(".outdoorCostCalculated").trigger("change");
            }
        });
    });    
});

