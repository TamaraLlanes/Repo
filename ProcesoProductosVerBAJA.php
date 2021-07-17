<?php 
include "CtrlSession.inc";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>Listado de Productos BAJA</title>
    <link rel="stylesheet" href="Estilos.css"/>
    <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>

<!-- SECCION MENU -->

<!-- SECCION CABECERA -->
<h1>ShopCam - Listado de Productos eliminados</h1>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="dsc">
   <legend>Listado de eliminados</legend>
   <table id="lst">
     <?php
        // conectar al Servidor de Base de Datos
        include "conexion.inc";
        // determinar filtro
        if(isset($_POST["CAT"])) {
            // cargar filtro desde forumulario
            $categoria = $_POST["CAT"];
        } else {
            // cargar filtro desde listado
            $categoria = $_GET["CAT"];
        } // endif
        // determinar filtro
        if ($categoria=="0") {
            $filtro = "";
        } else {
            // crear sentencia SQL para filtrar por Categoria
            $filtro = "WHERE categoriaPROD='$categoria'";
        } // endif
       // determinar orden
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
          }
        // crear sentencia SQL para listar
       $sql= " SELECT p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,c.nomCAT,p.paisPROD,p.imgPROD,p.estadoPROD ";
       $sql.="FROM productos AS p ";
       $sql.="INNER JOIN marca AS m ";
       $sql.="ON p.marcaPROD= m.idMARCA ";
       $sql.="INNER JOIN categorias AS c ";
       $sql.="ON p.categoriaPROD = c.idCAT ";
       $sql.="$filtro ";
       $sql.="AND p.estadoPROD = 'BAJA'";
       $sql.= "ORDER BY $orden $tipoOrden";

        // depurar sentencia
         //die($sql);
        // ejecutar sentencia SQL
        $result = mysqli_query($conex,$sql);
        //  controlar existencia
        if (mysqli_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: errorPage.php?MSG=No existen datos para el filtro especificado");
        } // endif
        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=idPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             ID
             <a href='ProcesoProductosVerBAJA.php?ORD=idPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=descPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Descripcion
             <a href='ProcesoProductosVerBAJA.php?ORD=descPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=precioPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Precio
             <a href='ProcesoProductosVerBAJA.php?ORD=precioPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=marcaPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Marca
             <a href='ProcesoProductosVerBAJA.php?ORD=marcaPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=categoriaPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Categoria
             <a href='ProcesoProductosVerBAJA.php?ORD=categoriaPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=paisPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Pais
             <a href='ProcesoProductosVerBAJA.php?ORD=paisPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=imgPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Foto
             <a href='ProcesoProductosVerBAJA.php?ORD=imgPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosVerBAJA.php?ORD=estadoPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Estado
             <a href='ProcesoProductosVerBAJA.php?ORD=estadoPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           
           <th>
             UPD
           </th>
           <th>
             DEL
           </th>            
         </tr>
         ";        
        while ($regPROD = mysqli_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPROD["idPROD"];
            $descripcion    = utf8_encode($regPROD["descPROD"]);            
            $precio         = utf8_encode($regPROD["precioPROD"]);  
            $nombreMARCA    = utf8_encode($regPROD["nomMARCA"]);  
            $nombreCAT      = utf8_encode($regPROD["nomCAT"]);
            $pais           = utf8_encode($regPROD["paisPROD"]);
            $img            = utf8_encode($regPROD["imgPROD"]);
            $estado         = utf8_encode($regPROD["estadoPROD"]);
            //mostrar en la grilla los resultados de la busqueda             
            echo "<tr>\n";
            echo " <td style='text-align: right;'>$id</td>\n";             
            echo " <td>$descripcion</td>\n";
            echo " <td>$precio</td>\n";
            echo " <td>$nombreMARCA</td>\n";
            echo " <td>$nombreCAT</td>\n";
            echo " <td>$pais</td>\n";
            echo " <td><img class='btn' src='$img' /></td>\n";
            echo " <td>$estado</td>\n";
            echo " <td  style='text-align: center;'>\n";
            echo "  <a href='ProcesoProductosConfirmUPD.php?ID=$id'>\n";
            echo "    <img class='btn' src='images/icoUPD2.jpg' />";
            echo "  </a>\n";
            echo " </td>\n";
            echo " <td style='text-align: center;'>\n";
  echo "  <a href=\"javascript:ConfirmaDEL($id,'$categoria','$orden','$tipoOrden');\">\n";
            echo "    <img class='btn' src='images/icoDEL.jpg' />";
            echo "  </a>\n";            
            echo " </td>\n";                                                                         echo "</tr>\n";
      } // end while

          //cerrar conexion
        mysqli_close($conex);
     ?>
   </table>
  </fieldset>
</div>

</body>
</html>