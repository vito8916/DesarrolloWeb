<?php 
include_once "contenido.php";
 class home extends contenido
        {
            //constructor y demas de la clase blog
     
        function showcontent()
            {
            parent::showcontent();
            echo "<p>Este es el contenido del Blog</p>";
            }
        }
?>


