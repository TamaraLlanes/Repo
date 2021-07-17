<?php
    // PROCESO PRODUCTOS UPD
    
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
    // cargar y convertir datos del formulario
// cargar registro

    // convertir datos
    $id             = $_POST["ID"];
    $nombre    = utf8_encode($_POST["PAIS"]);
   
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE productos SET ";
    $sql .= "paisPROD='$nombre' ";  
    $sql .= "WHERE idPROD=$id";
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("Location: ProcesoProductosPaisVER.php?ID='$id'");                            
?>
