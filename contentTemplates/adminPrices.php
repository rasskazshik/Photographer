<!-- Page Content -->
  <div class="container contentBackground">

    <div class="row albumsRow">
        <div class="col container mt-5 priceContainer">
            <h3 class='text-center'>Базовые цены (руб.)</h3>
            <form class="pricesForm">
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
<span>Стоимость часа работы специалиста</span>
<br>
<input class="w-100  mt-1 mb-2" type="number" value="$masterPrice" min="1" max="2147483647" name="masterPrice" placeholder="Стоимость часа работы специалиста" required autocomplete="off">
<hr>
<span>Стоимость часа аренды студии</span>
<br>
<input class="w-100  mt-1 mb-2" type="number" value="$studiaPrice" min="1" max="2147483647"  name="studiaPrice" placeholder="Стоимость часа аренды студии" required autocomplete="off">
<hr>
<span>Стоимость выезда (за 1 км)</span>
<br>
<input class="w-100  mt-1 mb-2" type="number" value="$outdoorPrice" min="1" max="2147483647"  name="outdoorPrice" placeholder="Стоимость выезда (за 1 км)" required autocomplete="off">
<hr>
<input class="w-100" type="submit" value="Изменить цены">

END;
?>                
            </form>            
      </div>        
    </div>
    
  </div>
  <!-- /.container -->