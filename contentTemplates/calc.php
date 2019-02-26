<!-- Page Content -->
  <div class="container contentBackground">

    <div class="row calcRow">
      <div class="col-md-8">
        <h3>Итоговая стоимость работ: <span class="totalCost">0</span> руб.</h3>
        <p>Стоимость часа работы специалиста: 3000 руб.</p>
        <input type="text" class="masterCostPerH" value="3000" hidden autocomplete="off">
        <p>Стоимость часа аренды студии: 1000 руб.</p>
        <input type="text" class="studiaCostPerH" value="1000" hidden autocomplete="off">
        <p>Стоимость выезда за 1 км: 60 руб.</p>
        <input type="text" class="outdoorCostPerKm" value="60" hidden autocomplete="off">      
        <p>Стоимость работы специалиста: <span class="masterCost"></span> руб.</p>
        <p>Ожидаемая продолжительность работы специалиста: <input type="number" class="masterInput" min="0" value="0" autocomplete="off"> ч.</p>
        <input type="text" class="masterCostCalculated" value="0" hidden autocomplete="off">
        <p>Аренда студии</p>
        <p>Стоимость аренды студии: <span class="studiaCost"></span> руб.</p>
        <p>Ожидаемая продолжительность аренды студии: <input type="number" class="studiaInput" min="0" value="0" autocomplete="off"> ч.</p>
        <input type="text" class="studiaCostCalculated" value="0" hidden autocomplete="off">
        <p>Стоимость выезда с учетом маршрута: <span class="outdoorCost">0</span> руб.</p>
        <input type="text" class="outdoorCostCalculated" value="0" hidden autocomplete="off">
        <div id="map"></div>
      </div>
      <div class="col-md-4">
        <h2>Калькулятор стоимости</h2>
        Мы готовы указать базовые цены на услуги. Итоговая стоимость может незначительно отличаться в случае специфичного заказа - конечную стоимость уточняйте у менеджера.          
      </div>        
    </div>
    
  </div>
  <!-- /.container -->