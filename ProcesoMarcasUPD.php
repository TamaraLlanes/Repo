<?php
    // PROCESO PRODUCTOS UPD
    
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
    // cargar y convertir datos del formulario
// cargar registro
    
 //control de session
include "CtrlSession.inc";

    // convertir datos
    $id             = $_POST["ID"];
    $nombre    = utf8_encode($_POST["MARCA"]);
   
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE marca SET ";
    $sql .= "nomMARCA='$nombre' ";  
    $sql .= "WHERE idMARCA=$id";
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("Location: ProcesoProductosMarcasVER.php?ID='$id'");                            
?>
