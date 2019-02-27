<!-- Page Content -->
  <div class="container contentBackground">
    <div class="row albumsRow">
      <div class="col container albumsContainer mt-5">
          <h3 class='text-center'>Список альбомов</h3>
<?php 
    $category =$_GET["categoryId"];
    switch($category){
        case "1":
            echo "<h4 class='text-center'>Свадебное фото</h4>";
            break;
        case "2":
            echo "<h4 class='text-center'>Лавстори</h4>";
            break;
        case "3":
            echo "<h4 class='text-center'>Портретное фото</h4>";
            break;
        case "4":
            echo "<h4 class='text-center'>Детское фото</h4>";
            break;
        case "5":
            echo "<h4 class='text-center'>Студийные работы</h4>";
            break;
        case "6":
            echo "<h4 class='text-center'>Выездное фото</h4>";
            break;
        default :
            exit("<div>Доступ без указания статической категории жанра запрещен!</div>");
            break;
    }
print<<<END
          <select class="categoryAlbums w-100 mt-2 mb-1">
            <option selected disabled>Выберите категорию</option>
            <option value="adminAlbums.php?categoryId=1">Свадебное фото</option>
            <option value="adminAlbums.php?categoryId=2">Лавстори</option>
            <option value="adminAlbums.php?categoryId=3">Портретное фото</option>
            <option value="adminAlbums.php?categoryId=4">Детское фото</option>
            <option value="adminAlbums.php?categoryId=5">Студийные работы</option>
            <option value="adminAlbums.php?categoryId=6">Выездное фото</option>
          </select>
          <form class="newAlbumForm">
            <input class="newAlbumTitle w-100  mt-1 mb-2" name="albumTitle" type="text" placeholder="Название добавляемого альбома" required autocomplete="off">
            <input type="text" name="categoryId" value="$category" hidden>
            <input class="w-100" type="submit" value="Добавить новый альбом">
          </form>
          <div>
              <ul>
END;
require_once 'scriptsPHP/mysqlDatabaseAPI/databaseAPI.php';
$query="
SELECT `Album`.`id` as 'albumId', `Album`.`title` as 'albumTitle', COUNT(`Photo`.`id`) as 'photoCount'
FROM `Album` 
LEFT JOIN `Photo`
ON `Album`.`id`=`Photo`.`idAlbum`
WHERE `Album`.`idCategory`=$category
GROUP BY `Album`.`id`";
$result=DatabaseAPI::Query($query);
if(!$result){
    exit("<div>Ошибка запроса к базе данных.</div>");
}
while($albums = mysqli_fetch_assoc($result))
{
    $albumId = $albums["albumId"];
    $albumTitle = $albums["albumTitle"];
    $albumCountPhoto = $albums["photoCount"];
    if($albumId==null){
        exit('<li class="mt-2 no-marker">Альбомы в категории отсутствуют</li>');
    }
    else{
print<<<END
<li class="mt-2 no-marker"><a href="adminAlbum.php?albumId=$albumId">$albumTitle (фотографий в альбоме: $albumCountPhoto)</a></li>
END;
    }
}
?>                  
              </ul>
          </div>
      </div>        
    </div>
    
  </div>
  <!-- /.container -->