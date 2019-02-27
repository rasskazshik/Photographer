<?php
$albumId=$_POST["albumId"];
require_once 'mysqlDatabaseAPI/databaseAPI.php';
$query ="SELECT `id`, `idAlbum`, `image` FROM `Photo` WHERE `idAlbum`=$albumId";
$resultPhoto = DatabaseAPI::Query($query);
if(!$resultPhoto)
{
    exit("false");
}
while($photos= mysqli_fetch_assoc($resultPhoto))
{
    unlink("../images/albums/origin/".$photos["image"]);
    unlink("../images/albums/mini/".$photos["image"]);
    $id=$photos["id"];
    $query="DELETE FROM `Photo` WHERE `id`=$id";
    $resultPhotoDelete = DatabaseAPI::Query($query);
    if(!$resultPhotoDelete)
    {
        exit("false");
    }
}
$query="DELETE FROM `Album` WHERE `id`=$albumId";
$resultAlbumDelete = DatabaseAPI::Query($query);
if(!$resultAlbumDelete)
{
    exit("false");
}
else
{
    exit("true");
}