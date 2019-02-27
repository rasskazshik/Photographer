<?php
require_once 'mysqlDatabaseAPI/databaseAPI.php';

$albumId=$_POST["albumId"];

$file_count = count($_FILES["photos"]['name']);
for($i=0;$i<$file_count;$i++){
    //имя с префиксом
    $nameOrigin= time().$_FILES["photos"]["name"][$i]; 
    //временный путь к файлу
    $tmpOrigin=$_FILES["photos"]["tmp_name"][$i]; 
    //перемещаем оригинал
    $flag=move_uploaded_file($tmpOrigin, "../images/albums/origin/$nameOrigin");
    
    
    $thumb_directory =  "../images/albums/mini/";    	//Папка для миниатюр 
    $orig_directory = "../images/albums/origin/";    	//Папка для полноразмерных изображений 
 
    $file="../images/albums/origin/$nameOrigin";    
 
    $nw = 450;
    $nh = 300;
    $source = $file;
    $stype = explode(".", $source);
    $stype = $stype[count($stype)-1];
    $dest = $thumb_directory . $nameOrigin;

    $size = getimagesize($source);
    $w = $size[0];
    $h = $size[1];

    switch($stype) {
        case 'gif':
            $simg = imagecreatefromgif($source);
            break;
        case 'jpg':
            $simg = imagecreatefromjpeg($source);
            break;
        case 'png':
            $simg = imagecreatefrompng($source);
            break;
    }

    $dimg = imagecreatetruecolor($nw, $nh);
    $wm = $w/$nw;
    $hm = $h/$nh;
    $h_height = $nh/2;
    $w_height = $nw/2;

    if($w> $h) {
        $adjusted_width = $w / $hm;
        $half_width = $adjusted_width / 2;
        $int_width = $half_width - $w_height;
        imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
    } 
    elseif(($w <$h) || ($w == $h)) {
        $adjusted_height = $h / $wm;
        $half_height = $adjusted_height / 2;
        $int_height = $half_height - $h_height;

        imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
    } 
    else {
        imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
    }
    
    imagejpeg($dimg,$dest,100);    

    if(file_exists ($thumb_directory.$nameOrigin)&&file_exists ($orig_directory.$nameOrigin))
    {
        $query ="INSERT INTO `Photo`(`idAlbum`, `image`) VALUES ($albumId,'$nameOrigin')";
        if(DatabaseAPI::Insert($query)==-1)
        {
            exit("false");
        }        
    }
    else
    {
        exit("false");
    }
}
exit("true");