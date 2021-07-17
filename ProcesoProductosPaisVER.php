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
	<title>Listado de Paises</title>
    <link rel="stylesheet" href="Estilos.css"/>
    <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>

<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="dsc">
   <legend>Listado de Paises </legend>
   <table id="lst">
     <?php

         if (isset($_GET["ORD"])) {
            // cargar orden especificado
            $orden = $_GET["ORD"];    
        } else {
            // establecer orden por defecto
            $orden = "idPROD";
        } // endif
        // determinar tipo de orden
        if (isset($_GET["TIPO"])) {
            // cargar tipo de orden especicado
            $tipoOrden =$_GET["TIPO"];
        } else {
            // establecer tipo de orden por defecto
            $tipoOrden = "asc";
          }//endif

        // conectar al Servidor de Base de Datos
        include "conexion.inc";
        
        // crear sentencia SQL para listar
       $sql ="SELECT * FROM productos ORDER BY $orden $tipoOrden ";
        // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
             // confirmar existencia

    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=Debe agregar categoria");
    } else {
   

        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='ProcesoProductosPaisVER.php?ORD=idPROD&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             ID
             <a href='ProcesoProductosPaisVER.php?ORD=idPROD&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosPaisVER.php?ORD=paisPROD&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             NOMBRE
             <a href='ProcesoProductosPaisVER.php?ORD=paisPROD&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           
           <th>
             UPD
           </th>          
         </tr>
         ";        

        // generar lista
        while ($regPROD = mysql_fetch_array($result)){
            $idPROD = $regPROD["idPROD"];
            $nombre   = utf8_encode($regPROD["paisPROD"]);
  

            //mostrar en la grilla los resultados de la busqueda             
            echo "<tr>\n";
            echo " <td style='text-align: center;'>$idPROD</td>\n";             
            echo " <td style='text-align: center;'>$nombre</td>\n";  
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='ProcesoPaisConfirmUPD.php?ID=$idPROD'>\n";
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