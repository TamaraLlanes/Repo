<?php
    // PROCESO PRODUCTOS INS - MySQL
    
    // conectar al servidor
   include "conexion.inc";

         // controlar logueado
    include "CtrlSession.inc";
    
    // capturar y convertir datos del formulario
    $descripcion = utf8_decode($_POST["DESC"]);
    $precio      = utf8_decode($_POST["PRECIO"]);
    $marca       = utf8_decode($_POST["MARCA"]);
    $categoria   = utf8_decode($_POST["CAT"]);
    $pais        = utf8_decode($_POST["PAIS"]);

      // proceso upload img
    $carpeta = "descargas/";
    // verificar subida de archivo
    if (is_uploaded_file($_FILES["ADJ"]["tmp_name"])) {
        $nombreTMP   = $_FILES["ADJ"]["tmp_name"];
        $nombreOrig  = $_FILES["ADJ"]["name"];
        
        // mostrar nombre del archivo
        echo "<span>Archivo Temporal: $nombreTMP</span><br />\n";
        echo "<span>Archivo Original: $nombreOrig</span><br />\n";
        // mover archivo
        $destino = $carpeta.$nombreOrig;
        move_uploaded_file($nombreTMP,$destino);
       
    } else {
        echo "<span>NO fue posible subir el archivo</span><br />\n";
    } // endif
 

    // crear sentencia SQL para insertar
    $sql  = "INSERT INTO productos ";
    $sql .= "(idPROD,descPROD,precioPROD,marcaPROD,categoriaPROD,paisPROD,imgPROD,estadoPROD)";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$precio','$marca','$categoria','$pais','$destino','ACTIVO')";
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    //die($sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver automáticamente al formulario (redirigir)
    header("location: FormProductosINS.php" );
?>    