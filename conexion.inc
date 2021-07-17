<?php
    // PROCESO CONEXION AL SERVIDOR
    // conectar al Servidor de Base de Datos
    $conex = mysqli_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=NO se pudo CONECTAR al Servidor de Base de Datos");    
    } // endif
    // seleccionar Base de Datos
    $selDB = mysqli_select_db($conex,"shopcam");
    // control selección
    if (!$selDB) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=NO se pudo SELECCIONAR Base de Datos");
    } // endif
?>