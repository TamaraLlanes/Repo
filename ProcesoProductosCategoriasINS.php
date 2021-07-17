<?php
    // PROCESO PRODUCTOS INS - MySQL
    
    // conectar al servidor
   include "conexion.inc";

    // capturar y convertir datos del formulario
    
    $categoria   = utf8_decode($_POST["CAT"]);
  

    // crear sentencia SQL para insertar
    $sql  = "INSERT INTO categorias ";
    $sql .= "(idCAT,nomCAT)";
    $sql .= "VALUES ";
    $sql .= "(null,'$categoria')";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    //die($sql);
    
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario (redirigir)
    header("location: FormProductosCategoriasINS.php");
?>    