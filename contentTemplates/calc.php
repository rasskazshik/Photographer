<!-- Page Content -->
  <div class="container contentBackground">

    <div class="row calcRow">
      <div class="col-md-8">
<?php 
    require_once 'scriptsPHP/mysqlDatabaseAPI/databaseAPI.php';
    $query="SELECT * FROM `Prices`";
    $result=DatabaseAPI::Query($query);
    if(!$result){
        exit("<div>Ошибка запроса к базе данных.</div>");
    }
    $prices= mysqli_fetch_assoc($result);
    $masterPrice=$prices["masterPrice"];
    $studiaPrice=$prices["studiaPrice"];
    $outdoorPrice=$prices["outdoorPrice"];
print<<<END
<h3>Итоговая стоимость работ: <span class="totalCost">0</span> руб.</h3>
<p>Стоимость часа работы специалиста: $masterPrice руб.</p>
<input type="text" class="masterCostPerH" value="$masterPrice" hidden autocomplete="off">
<p>Стоимость часа аренды студии: $studiaPrice руб.</p>
<input type="text" class="studiaCostPerH" value="$studiaPrice" hidden autocomplete="off">
<p>Стоимость выезда (за 1 км): $outdoorPrice руб.</p>
<input type="text" class="outdoorCostPerKm" value="$outdoorPrice" hidden autocomplete="off">      
<p>Стоимость работы специалиста: <span class="masterCost">0</span> руб.</p>
<p>Ожидаемая продолжительность работы специалиста: <input type="number" class="masterInput" min="0" value="0" autocomplete="off"> ч.</p>
<input type="text" class="masterCostCalculated" value="0" hidden autocomplete="off">
<p>Аренда студии</p>
<p>Стоимость аренды студии: <span class="studiaCost">0</span> руб.</p>
<p>Ожидаемая продолжительность аренды студии: <input type="number" class="studiaInput" min="0" value="0" autocomplete="off"> ч.</p>
<input type="text" class="studiaCostCalculated" value="0" hidden autocomplete="off">
<p>Стоимость выезда с учетом маршрута: <span class="outdoorCost">0</span> руб.</p>
<input type="text" class="outdoorCostCalculated" value="0" hidden autocomplete="off">
<div id="map"></div>
END;
?> 
      </div>
      <div class="col-md-4">
        <h2>Калькулятор стоимости</h2>
        Мы готовы указать базовые цены на услуги. Итоговая стоимость может незначительно отличаться в случае специфичного заказа - конечную стоимость уточняйте у менеджера.          
      </div>        
    </div>
    
  </div>
  <!-- /.container -->