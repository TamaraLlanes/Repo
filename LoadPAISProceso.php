<?php
    // MODULO LoadPAIS
    
    // generar combo box (lista desplegable) de todos los paises de origen .
    
    // conectar al Servidor
    include "conexion.inc";

         //Cargar id desde el precio con AJAX
        if(isset($_GET["IDPS"])) {
            //  // determinar filtro por precio
            $id = $_GET["IDPS"];
        } // endif
        // determinar filtro
        if ($id=="0") {
            $filtroPS = "";
        } else {
            // crear sentencia SQL para filtrar por Marca
            $filtroPS = "WHERE precioPROD='$id'";
             // ejecutar sentencia SQL
        } // endif
        $result = mysql_query($filtroPS,$conex);
          //die($filtroPS);

        //Filtrar PAIS por PRECIO 
       $sql="SELECT DISTINCT  idPROD,paisPROD FROM productos";        
       // ejecutar sentencia SQL
            $result = mysql_query($sql,$conex);
             //die($sql);
        // confirmar existencia
        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: errorPage.php?MSG=Debe agregar pais");
            } else {
            // generar lista
            while ($regPROD = mysql_fetch_array($result)) {
                $idPROD = $regPROD["idPROD"];
                $pais   = utf8_encode($regPROD["paisPROD"]);

                echo "<option value=$pais>$pais</option>\n";
            } // end while
           // cerrar conexión
            mysql_close($conex); 
        } // endif
         


?>