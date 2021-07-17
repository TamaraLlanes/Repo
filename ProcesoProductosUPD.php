<?php
    // PROCESO PRODUCTOS UPD
    
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
    // cargar y convertir datos del formulario
// cargar registro

    // convertir datos
    $id             = $_POST["ID"];
    $descripcion    = utf8_encode($_POST["DESC"]);
    $precio         = utf8_encode($_POST["PRECIO"]);
    $marca          = utf8_encode($_POST["MARCA"]);
    $categoria      = utf8_encode($_POST["CAT"]); 
    $pais           = $_POST["PAIS"]; 
   // $img      = utf8_encode($_POST["ADJ"]); 

  //  var_dump($img);
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE productos SET ";
    $sql .= "descPROD='$descripcion', ";
    $sql .= "precioPROD='$precio', ";
    $sql .= "marcaPROD='$marca',";
    $sql .= "categoriaPROD='$categoria',";
    $sql .= "paisPROD='$pais' "; 
   // $sql .= "imgPROD='$img', ";  
    $sql .= "WHERE idPROD=$id ";
    // depurar instrucción SQL
    //die($sql);
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al formulario de actualización
    header("Location: FormProductosUPD.php");                            
?>