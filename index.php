<!DOCTYPE html>
<html lang="en">
<?php 
    include_once "home.php";

?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/estilo.css" />
</head>
<body>
    <p>
   <?php 
        $mivar = new home();
        $mivar->showcontent();
   ?>
    </p>
</body>
</html>