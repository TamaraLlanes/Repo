<?php
    // MODULO LoadPRECIO
    
    // generar combo box (lista desplegable) de todos los precios.
    
    // conectar al Servidor
    include "conexion.inc";

         //Cargar id desde de la marca AJAX
        if(isset($_GET["IDP"])) {
            //  // determinar filtro por marca
            $id = $_GET["IDP"];
        } // endif
        // determinar filtro
        if ($id=="0") {
            $filtroMARK = "";
        } else {
            // crear sentencia SQL para filtrar por Marca
            $filtroMARK = "WHERE marcaPROD='$id'";
             // ejecutar sentencia SQL
        } // endif
        $result = mysql_query($filtroMARK,$conex);
          //die($filtroMARK);

        //Filtrar Precio por Marca 
       $sql ="SELECT idPROD,precioPROD FROM productos $filtroMARK";
 
       // ejecutar sentencia SQL
            $result = mysql_query($sql,$conex);
             //die($sql);
        // confirmar existencia
        if (mysql_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: errorPage.php?MSG=Debe agregar precio");
            } else {
            // generar lista
            while ($regPROD = mysql_fetch_array($result)) {
                $idPROD = $regPROD["idPROD"];
                $precio   = utf8_encode($regPROD["precioPROD"]);

                echo "<option value=$precio>$precio</option>\n";
            } // end while
           // cerrar conexión
            mysql_close($conex); 
        } // endif
         


?>