<?php
    // PROCESO PRODUCTOS UPD
    
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
    // cargar y convertir datos del formulario
// cargar registro

    // convertir datos
    $id             = $_POST["ID"];
    $nombre    = utf8_encode($_POST["CAT"]);
   
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE categorias SET ";
    $sql .= "nomCAT='$nombre' ";  
    $sql .= "WHERE idCAT=$id";
    // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver al formulario de actualización
    header("Location: ProcesoProductosCategoriasVER.php?ID='$id'");                            
?>
