<!-- Page Content -->
  <div class="container contentBackground">
    <div class="row">
        <div class="col text-center">
<?php
    $category=$_GET['category'];
    $catecoryTitle;
    $categoryDescription;
    switch ($category)
    {
        case 'svadba':
            $catecoryTitle="свадебное фото";
            $categoryDescription="Свадебное фото -  это не только постановочные кадры, но и умение поймать интересные, в каких-то случаях смешные или, напротив, романтичные моменты в процессе бракосочетания. Без таких живых, оригинальных кадров свадебная фотография может показаться скучной. Поэтому, свадебная фотосъемка предполагает постоянное сопровождение во все важные и интересные моменты мероприятия начиная с утра и до вечера. Другими словами, когда осуществляется профессиональная фотосъемка свадьбы, фотограф безотлучно находится среди гостей, сопровождая пару как на репортажной съемке, так и на постановочной съемке, фиксируя каждый момент начала совместной жизни молодожен.";
            break;
        case 'lovestory':
            $catecoryTitle="лавстори";
            $categoryDescription="Не обязательно находиться на пороге свадьбы, чтобы захотеть сделать фотосессию в стиле лавстори. Каждая влюбленная пара, получающая удовольствие от общения друг с другом, часто хочет обрести еще и визуальное подтверждение своим чувствам и отношениям.";
            break;
        case 'portret':
            $catecoryTitle="портрет";
            $categoryDescription="Портрет – самый распространённый и вместе с тем самый сложный жанр в фотографии. Человек многогранен и в разные моменты своей жизни он может выглядеть по-разному и вместе с тем оставаться настоящим. Настоящий портрет это даже не пойманное мгновение, это квинтэссенция жизни человека. Выражение лица постоянно меняется. Мы складываем мнение о знакомом человеке из совокупности свойственных ему выражений и состояний, а камера фиксирует лишь одно…";
            break;
        case 'child':
            $catecoryTitle="детское фото";
            $categoryDescription="Дети — цветы жизни и всем известно, что растут они очень быстро. А такая фотография помогает сохранить память о быстро ускользающем моменте жизни вашего ребеночка.";
            break;
        case 'studia':
            $catecoryTitle="студийное фото";
            $categoryDescription="Студийная фотография отличается от других видов в первую очередь своей профессиональностью и грамотностью выполнения. Здесь яркость и насыщенность тонов, благоприятное освещение, а также свобода действий в «плане творчества». Спокойно, уютно, всегда можно выпить чай или кофе, воспользоваться душем.";
            break;
        case 'outdoor':
            $catecoryTitle="выездное фото";
            $categoryDescription="Очень часто имеется желание запечатлеть свой образ в экзотической обстановке: заброшенные дома, леса, пустыри, или же просто достопримечательности. Главное - иметь желание, а мы поможем в его осуществлении.";
            break;
    }
print<<<END
<h2>Категория: $catecoryTitle</h2>
<hr> 
<p class="text-justify">$categoryDescription</p>
<hr> 
END;
?>
        </div>
    </div>
    <div class="row galeryRow">
      <div class="col-md-8 slider">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndicators" data-slide-to="1"></li>
              <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://static1.squarespace.com/static/5b37f80ae749408527243c80/5b3e87f3562fa74c3a31511d/5b3e8827aa4a99056da6eac1/1530825020173/macbeth-750x500.jpg" alt="Первый слайд">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://www.pavlov.ru/wp-content/uploads/Stella-na-vezde-v-Staryj-Izborsk-750x500.jpg" alt="Второй слайд">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn1.technopark.ru/technopark/photos_resized/product/600_600/48968/1_48968.jpg" alt="Третий слайд">
              </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
        
      <div class="col-md-4 albumList">
        <h2>Список альбомов</h2>
        <hr>
        <ul>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
            <li>qwe qwqwe</li>
        </ul>
      </div>        
    </div>      
  </div>
  <!-- /.container -->