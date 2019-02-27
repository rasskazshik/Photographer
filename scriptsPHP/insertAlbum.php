<?php
$categoryId=$_POST["categoryId"];
$albumTitle=$_POST["albumTitle"];
require_once 'mysqlDatabaseAPI/databaseAPI.php';
$query ="INSERT INTO `Album`(`idCategory`, `title`) VALUES ($categoryId,'$albumTitle')";
if(DatabaseAPI::Insert($query)==-1)
{
    exit("false");
}
exit("true");