<?php
    // MODULO LoadMARCA
    
    // generar combo box (lista desplegable) de todos los Marcas respecto a la categoria seleccionada.
    
    // conectar al Servidor
    include "conexion.inc";
    
     //Cargar id desde AJAX
 // determinar filtro por categoria
        if(isset($_GET["IDC"])) {
            // cargar filtro desde forumulario
            $id = $_GET["IDC"]; 
        } // endif
        // determinar filtro
        if ($id=="0") {
            $filtroCAT = "";
        } else {
            // crear sentencia SQL para filtrar por Categoria
            $filtroCAT = "WHERE categoriaPROD='$id'";
        } // endif
         // ejecutar sentencia SQL
        $result = mysql_query($filtroCAT,$conex);
         // die($filtroCAT);
       
    // crear sentencia SQL para listar por Marca
    
       $sql="SELECT DISTINCT m.nomMARCA,m.idMARCA ";
       $sql.="FROM productos AS p ";
       $sql.="INNER JOIN marca AS m ";
       $sql.="ON  p.marcaPROD= m.idMARCA ";
       $sql.="INNER JOIN categorias AS c ";
       $sql.="ON p.categoriaPROD = c.idCAT ";
       $sql.="$filtroCAT";
       $sql .= "ORDER BY nomMARCA";
       
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    //die($sql);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=No se encontraron registros de marcas");
    } else {
        // generar lista
        while ($regMARCA = mysql_fetch_array($result)) {
               
            $idMARCA = $regMARCA["idMARCA"];
            $nombre   = utf8_encode($regMARCA["nomMARCA"]);
            
            echo "<option value='$idMARCA'>$nombre</option>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex);
    } // endif  


?>