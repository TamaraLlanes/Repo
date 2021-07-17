<?php
    // MODULO LoadCAT
    
    // generar combo box (lista desplegable) de todos las categorias.
    
    // conectar al Servidor
    include "conexion.inc";

    // crear sentencia SQL
    $sql = "SELECT * FROM categorias ORDER BY nomCAT";
    // ejecutar sentencia SQL
    $result = mysqli_query($conex,$sql);
    // confirmar existencia
    if (mysqli_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar categoria");
    } else {
        // generar lista
        while ($regCAT = mysqli_fetch_array($result)){
            $idCAT = $regCAT["idCAT"];
            $nombre   = utf8_encode($regCAT["nomCAT"]);
            //determinar opcion seleccionada
        if($regCAT["idCAT"]){
             // marcar opción
                echo "<option value='$idCAT'>$nombre</option>\n";    
        
        }//endif
        } // end while
        // cerrar conexión
        mysqli_close($conex);
        } // endif  


?>
 

