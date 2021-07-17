<?php
    // MODULO LoadMARCA
    
    // generar combo box (lista desplegable) de todos los dptos.
    
    // conectar al Servidor
    include "conexion.inc";
    // crear sentencia SQL
    $sql = "SELECT * FROM marca ORDER BY nomMARCA";
    // ejecutar sentencia SQL
    $result = mysqli_query($conex, $sql);
    
    // confirmar existencia
    if (mysqli_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar departamentos");
    } else {
        // generar lista
        while ($regMARCA = mysqli_fetch_array($result)) {
            $idMARCA = $regMARCA["idMARCA"];
            $nombre   = utf8_encode($regMARCA["nomMARCA"]);
            echo "<option value='$idMARCA'>$nombre</option>\n";
        } // end while
        // cerrar conexión
        mysqli_close($conex);
    } // endif  


?>