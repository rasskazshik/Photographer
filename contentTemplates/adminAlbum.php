<!-- Page Content -->
  <div class="container contentBackground">

<?php
    $albumId=$_GET["albumId"];
    require_once 'scriptsPHP/mysqlDatabaseAPI/databaseAPI.php';
    $query = "SELECT * FROM `Album` WHERE `id`=$albumId";
    $result = DatabaseAPI::Query($query);
    $album = mysqli_fetch_assoc($result);
    $albumTitle = $album["title"];
print<<<END
<div class="row albumRow">
  <div class="col mt-5 albumContent">
    <h3 class="text-center">Фотографии в альбоме</h3>
    <h3 class="text-center">$albumTitle</h3>
    <form class="newPhotosForm">       
        <input class="newAlbumTitle w-100" type="file" name="photos[]" multiple="true" accept="image/x-png,image/gif,image/jpeg" required autocomplete="off">
        <input type="text" value="$albumId" name="albumId" hidden>
        <input class="w-100" type="submit" value="Добавить фотографии">
        <input class="w-100 deleteAlbumButton" type="button" albumId="$albumId" value="Удалить альбом">  
    </form>
  </div>
END;

$query = "SELECT `id`, `image` FROM `Photo` WHERE `idAlbum`=$albumId";
$result = DatabaseAPI::Query($query);
if($result->num_rows<1)
{
    exit('<div class="col adminAlbumPhoto mt-2 mb-2">В альбоме нет фотографий</div>');
}
while($photos = mysqli_fetch_assoc($result))
{
    $id = $photos["id"];
    $image = $photos["image"];
print<<<END
<div class="col adminAlbumPhoto mt-2 mb-2">
    <img src="images/albums/mini/$image">
    <input class="deleteImageButton w-100" type="button" imageId="$id" albumId="$albumId" value="Удалить">
</div>
END;
}
?>     
    </div>       
    
  </div>
  <!-- /.container -->