<?php
    // CONTROL DE SESSION
    session_start();
    if (!isset($_SESSION["nombreLogueado"])) {
        // mensaje de error
        header("Location: errorPage.php?MSG=debe inciar sesión");
    } // endif

if ($usuario = ($_SESSION["nombreLogueado"]=='admin')) {
        // mensaje de error
       include "menu.inc";
        echo "<p>Bienvenid@ $usuario Administrador</p>\n";
    }else{

     if($usuario = ($_SESSION["nombreLogueado"])){
           
             include "menuConsumidor.inc";
              echo "<p>Bienvenid@ $usuario</p>\n";
        }
}


         
?>