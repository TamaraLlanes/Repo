<?php 
 //control de session
include "CtrlSession.inc";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>Listado de Marcas</title>
    <link rel="stylesheet" href="Estilos.css"/>
    <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>

<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="dsc">
   <legend>Listado de Marcas</legend>
   <table id="lst">
     <?php
        // conectar al Servidor de Base de Datos
        include "conexion.inc";  
        // determinar orden

        if (isset($_GET["ORD"])) {
            // cargar orden especificado
            $orden = $_GET["ORD"];    
        } else {
            // establecer orden por defecto
            $orden = "idMARCA";
        } // endif
        // determinar tipo de orden
        if (isset($_GET["TIPO"])) {
            // cargar tipo de orden especicado
            $tipoOrden =$_GET["TIPO"];
        } else {
            // establecer tipo de orden por defecto
            $tipoOrden = "asc";
          }//endif

        // crear sentencia SQL para listar
       $sql ="SELECT * FROM marca ORDER BY $orden $tipoOrden";
            // ejecutar sentencia SQL
          $result = mysql_query($sql,$conex);   
         //die($sql);
          // confirmar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar marca");
    } else {   
        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='ProcesoProductosMarcasVER.php?ORD=idMARCA&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             ID
             <a href='ProcesoProductosMarcasVER.php?ORD=idMARCA&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosMarcasVER.php?ORD=nomMARCA&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             NOMBRE
             <a href='ProcesoProductosMarcasVER.php?ORD=nomMARCA&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           
           <th>
             UPD
           </th>          
         </tr>
         ";        

        // generar lista
        while ($regMARCA = mysql_fetch_array($result)){
            $idMARCA = $regMARCA["idMARCA"];
            $nombre   = utf8_encode($regMARCA["nomMARCA"]);
  

            //mostrar en la grilla los resultados de la busqueda             
            echo "<tr>\n";
            echo " <td style='text-align: center;'>$idMARCA</td>\n";             
            echo " <td style='text-align: center;'>$nombre</td>\n";  
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='ProcesoMarcasConfirmUPD.php?ID=$idMARCA'>\n";
            echo "    <img class='btn' src='images/icoUPD2.jpg' />";
            echo "  </a>\n";
            echo " </td>\n";                                                    
            echo "</tr>\n";
        } // end while
      }//endif
          //cerrar conexion
        mysql_close($conex);
     ?>
   </table>
  </fieldset>
</div>

</body>
</html>