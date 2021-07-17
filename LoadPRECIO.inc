<?php
    // MODULO LoadPRECIO
    
    // generar combo box (lista desplegable) de todos los precios.
    
    // conectar al Servidor
    include "conexion.inc";
    // crear sentencia SQL
    $sql = "SELECT idPROD,precioPROD FROM productos";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar departamentos");
    } else {
        // generar lista
        while ($regPROD = mysql_fetch_array($result)) {
            $idPROD = $regPROD["idPROD"];
            $precio   = utf8_encode($regPROD["precioPROD"]);
            echo "<option value='$idPROD'>$precio</option>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex);
    } // endif  


?>