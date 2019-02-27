<?php
$masterPrice=$_POST["masterPrice"];
$studiaPrice=$_POST["studiaPrice"];
$outdoorPrice=$_POST["outdoorPrice"];
require_once 'mysqlDatabaseAPI/databaseAPI.php';
$query ="UPDATE `Prices` SET `masterPrice`=$masterPrice,`studiaPrice`=$studiaPrice,`outdoorPrice`=$outdoorPrice WHERE `id`=1";
if(!DatabaseAPI::Query($query))
{
    exit("false");
}
exit("true");