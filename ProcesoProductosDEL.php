
<?php
    // PROCESO PERSONAS Eliminacion
    // conectar al Servidor de Base de Datos
    include "conexion.inc";

     // controlar logueado
    include "CtrlSession.inc";

  if (isset($_POST["ID"])) {
        // cargar desde el formulario
        $id = $_POST["ID"];    
    } else {
        // cargar desde el listado
        $id = $_GET["ID"];
    } // endif
    // crear sentencia SQL para buscar el ID

    // crear sentencia SQL para eliminar registro
    $sql= "DELETE FROM productos WHERE idPROD= $id";
    // depurar instrucción SQL
  //die($sql);
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    
    // redirigir al listado
header("Location:ProcesoProductosVerBAJA.php?ID=$id&CAT=$filtro&ORD=$orden&TIPO=$tipo");  


?> 