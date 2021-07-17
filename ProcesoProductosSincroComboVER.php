<?php
include "CtrlSession.inc";
?>



<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html" />
 <meta charset="utf-8" />
 <meta name="author" content="Curso Web 2.0 - BIOS" />
 <title>Listado de Productos</title>
 <link rel="stylesheet" href="Estilos.css"/>
 <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>

<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="dsc">
   <legend>Listado</legend>
   <table id="lst">
     <?php
        // conectar al Servidor de Base de Datos
        include "conexion.inc";

        // determinar filtro
        if(isset($_GET["CAT"])) {
            // cargar filtro desde forumulario
            $categoria = $_GET["CAT"]; 
        } // endif
        // determinar filtro
        if ($categoria=="0") {
            $filtroCAT = "";
        } else {
            // crear sentencia SQL para filtrar por Categoria
            $filtroCAT = "WHERE categoriaPROD='$categoria'";
             // ejecutar sentencia SQL
        $result = mysqli_query($conex,$filtroCAT);
         // die($filtroCAT);
        } // endif
         
         if(isset($_GET["MARCA"])) {
            // cargar filtro desde forumulario
            $marca = $_GET["MARCA"];
        } // endif
        // determinar filtro
        if ($marca=="0") {
            $filtroMARK = "";
        } else {
            // crear sentencia SQL para filtrar por Marca
            $filtroMARK = "AND marcaPROD='$marca'";
             // ejecutar sentencia SQL
        $result = mysqli_query($conex,$filtroMARK);
          //die($filtroMARK);
        } // endif
         
        if(isset($_GET["PRECIO"])) {
            // cargar filtro desde forumulario
            $precio = $_GET["PRECIO"];
        } // endif
        // determinar filtro
        if ($precio=="0") {
            $filtroPS = "";
        } else {
            // crear sentencia SQL para filtrar por Precio
            $filtroPS = "AND precioPROD";
             // ejecutar sentencia SQL
        $result = mysqli_query($conex,$filtroPS);
          //die($filtroPS);
        } // endif

        if(isset($_GET["PAIS"])) {
            // cargar filtro desde forumulario
            $pais = $_GET["PAIS"];
        } // endif
        // determinar filtro
        if ($pais=="0") {
            $filtroPAIS = "";
        } else {
            // crear sentencia SQL para filtrar por Precio
            $filtroPAIS = "AND paisPROD";
             // ejecutar sentencia SQL
        $result = mysqli_query($conex,$filtroPAIS);
          //die($filtroPS);
        } // endif
        // determinar orden
        if (isset($_POST["ORD"])) {
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
          }//endif*/

           // crear sentencia SQL para listar
      $sql="SELECT p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,c.nomCAT,p.paisPROD,p.imgPROD,p.estadoPROD ";
      $sql.="FROM productos AS p ";
      $sql.="JOIN marca AS m ";
      $sql.="ON p.marcaPROD = m. idMARCA ";
      $sql.="$filtroMARK ";   
      $sql.="JOIN categorias AS c ";
      $sql.="ON p.categoriaPROD = c.idCAT "; 
      $sql.="$filtroCAT "; 
      $sql.="$filtroPS "; 
      $sql.="$filtroPAIS ";
      $sql .= "ORDER BY $orden $tipoOrden "; 
   //die($sql);
    // depurar sentencia
       // ejecutar sentencia SQL
        $result = mysqli_query($conex,$sql);
        //die($sql);
    
       //  controlar existencia
       
       if (mysqli_num_rows($result)==0) {
            // enviar mensaje de error
            header("Location: errorPage.php?MSG=No existen datos para el filtro especificado");
        }// endif*/
        
     
        // crear cabecera de grilla de datos
        echo "
         <tr>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=idPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             ID
             <a href='ProcesoProductosSincroComboVER.php?ORD=idPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=descPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Descripcion
             <a href='ProcesoProductosSincroComboVER.php?ORD=descPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=precioPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Precio
             <a href='ProcesoProductosSincroComboVER.php?ORD=precioPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=marcaPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Marca
             <a href='ProcesoProductosSincroComboVER.php?ORD=marcaPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=categoriaPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Categoria
             <a href='ProcesoProductosSincroComboVER.php?ORD=categoriaPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=paisPROD&CAT=$categoria&PAIS=$pais&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Pais
             <a href='ProcesoProductosSincroComboVER.php?ORD=paisPROD&CAT=$categoria&PAIS=$pais&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
           <th>
             <a href='ProcesoProductosSincroComboVER.php?ORD=imgPROD&CAT=$categoria&TIPO=asc'>
               <img class='btn' src='images/btnUp.png' />
             </a>  
             Foto
             <a href='ProcesoProductosSincroComboVER.php?ORD=imgPROD&CAT=$categoria&TIPO=desc'>
               <img class='btn' src='images/btnDown.png' />
             </a>               
           </th>
            
         </tr>
         ";
          while($regPROD = mysqli_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPROD["idPROD"];
            $descripcion    = utf8_encode($regPROD["descPROD"]);            
            $precio         = utf8_encode($regPROD["precioPROD"]);  
            $marca          = utf8_encode($regPROD["nomMARCA"]);  
            $categoria      = utf8_encode($regPROD["nomCAT"]);
            $pais           = utf8_encode($regPROD["paisPROD"]);
            $img            = utf8_encode($regPROD["imgPROD"]);
            $estado         = utf8_encode($regPROD["estadoPROD"]);
           
               if($estado=='ACTIVO'){
          
            //mostrar en la grilla los resultados de la busqueda             
            echo " <tr>\n";
            echo " <td style='text-align: right;'>$id</td>\n";             
            echo " <td>$descripcion</td>\n";
            echo " <td>$precio</td>\n";
            echo " <td>$marca</td>\n";
            echo " <td>$categoria</td>\n";
            echo " <td>$pais</td>\n";
            echo " <td><img id='myImg' class='gallery--img'
             src='$img'  alt='' style='width:50%;max-width:200px'>"; 
             echo"</td>\n";
                                                                  
         echo " </tr>\n";
        } // end if
        }//end while
  
  echo"<a href='imprimirListadoComboPDF.php?CAT=$categoria&ORD=$orden&TIPO=$tipoOrden'>Imprime PDF";
        echo" <img class='btn' src='images/icoPDF.png'/>";
               echo"</a>";            
echo "</table>";
echo"</fieldset>";
echo"</div>";
         //cerrar conexion
        mysqli_close($conex);
     ?>


<div id='myModal' class='modal'>
 <img  src ='' alt='' class='modal-content' id='myImg'>
 </div>

<script>
// Get the modal
var imagenes = document.querySelectorAll('.gallery--img');
var modal = document.querySelector('#myModal');
var img = document.querySelector('.modal-content');

for(var i = 0; i < imagenes.length; i++){
  imagenes[i].addEventListener('click', function(e){
  modal.classList.toggle('modal-open');
  img.setAttribute('src', e.target.src);

  });
}


</script>
 
</body>
</html>