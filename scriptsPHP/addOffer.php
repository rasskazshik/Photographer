<?php
$name=$_POST["name"];
$contacts=$_POST["contacts"];
$message=$_POST["message"];
$date=date("Y-m-d H:i:s");
require_once 'mysqlDatabaseAPI/databaseAPI.php';
$query ="INSERT INTO `Offers`(`name`, `contacts`, `message`, `date`) VALUES ('$name','$contacts','$message','$date')";
if(DatabaseAPI::Insert($query)==-1)
{
    exit("false");
}
exit("true");