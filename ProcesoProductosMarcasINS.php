<?php
    // PROCESO PRODUCTOS INS - MySQL
    
    // conectar al servidor
   include "conexion.inc";

    // controlar logueado
    include "CtrlSession.inc";

    // capturar y convertir datos del formulario
    
    $marca   = utf8_decode($_POST["MARCA"]);
  

    // crear sentencia SQL para insertar
    $sql  = "INSERT INTO marca ";
    $sql .= "(idMARCA,nomMARCA)";
    $sql .= "VALUES ";
    $sql .= "(null,'$marca')";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    //die($sql);
    
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario (redirigir)
    header("location: FormProductosCategoriasINS.php");
?>    