<?php
$photoId=$_POST["photoId"];
require_once 'mysqlDatabaseAPI/databaseAPI.php';
$query ="SELECT `image` FROM `Photo` WHERE `id`=$photoId";
$resultPhoto = DatabaseAPI::Query($query);
if(!$resultPhoto)
{
    exit("false");
}
$photos= mysqli_fetch_assoc($resultPhoto);
unlink("../images/albums/origin/".$photos["image"]);
unlink("../images/albums/mini/".$photos["image"]);
$id=$photos["id"];
$query="DELETE FROM `Photo` WHERE `id`=$photoId";
$resultPhotoDelete = DatabaseAPI::Query($query);
if(!$resultPhotoDelete)
{
    exit("false");
}
else
{
    exit("true");
}
