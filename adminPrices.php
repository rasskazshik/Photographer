<?php 
    session_start();
    if($_SESSION["isAuth"]!=true)
    {
        header("Location: admin.php");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Фотография - Курск</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  
  <script defer src="vendor/jquery/jquery.min.js"></script>
  <script defer src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script defer src="scriptsJS/prices.js" type="text/javascript"></script>
</head>
    <body>
<?php 
//контент навигации
require_once 'contentTemplates/navigationAdmin.html';
//контент страницы
require_once 'contentTemplates/adminPrices.php';
//контент футера
require_once 'contentTemplates/footer.html';
?>
    </body>
</html>