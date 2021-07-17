<?php
    // PROCESO CONFIRM DEL
    
    // conectar al Servdior de Base de Datos
    include "conexion.inc";
    // capturar ID del formulario o listado
    if (isset($_POST["ID"])) {
        // cargar desde el formulario
        $id = $_POST["ID"];    
    } else {
        // cargar desde el listado
        $id = $_GET["ID"];

    } // endif
    // crear sentencia SQL para buscar el ID
    $sql = "SELECT * FROM productos WHERE idPROD=$id";
    // ejecutar sentencia SQL
    $result = mysqli_query($conex,$sql);
    // controlar existencia
    if (mysqli_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=ID de Producto INEXISTENTE");
    } // endif
    // cargar registro
    $regPROD = mysqli_fetch_array($result);
    // convertir datos
    $id             = $regPROD["idPROD"];
    $descripcion    = utf8_encode($regPROD["descPROD"]);
    $precio         = utf8_encode($regPROD["precioPROD"]);
    $marca          = utf8_encode($regPROD["marcaPROD"]);
    $categoria      = utf8_encode($regPROD["categoriaPROD"]); 
    $pais           = utf8_encode($regPROD["paisPROD"]); 
    $img            = $regPROD["imgPROD"]; 

    // cerrar conexión
    mysqli_close($conex);
        // redirigir al listado
header("Location:ProcesoProductosDEL.php?ID=$id&CAT=$filtro&ORD=$orden&TIPO=$tipo");   
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta name="author" content="Proyecto WEB 2.0" />
  <meta charset="utf-8" />
  <title>Eliminar Producto</title>
  <link rel="stylesheet" type="text/css" href="Estilos.css" />
  <script type="text/javascript" src="FuncionesCam.js"></script>
</head>
<body>
  <!-- SECCION CABECERA -->
<h1>ShopCam - Eliminar Producto</h1>
 <!-- SECCION MENU -->
<?php
    include "menu.inc";
?>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Eliminar</legend>
   <form id="dataFRM" action="ProcesoProductosDEL.php" method="POST" enctype="multipart/form-data">
     <table>
      <tr>
         <td>Id:</td>
         <td>
           <input id="dataID" 
                  type="text" 
                  name="ID"
                  maxlength="50"
                  title="Máximo 50 caracteres" 
                  readonly="true"
                  <?php
                   echo "value='$id'"; 
                  ?>
           />

         </td>
       </tr>
       <tr>
         <td>Descripcion:</td>
         <td>
           <input id="dataDESC" 
                  type="text" 
                  name="DESC"
                  maxlength="50"
                 
                   <?php
                 echo "value='$descripcion'"; 
                  ?>
           />
         </td>
       </tr>
       <tr>
         <td>Precio:</td>
         <td>
           <input id="dataPRECIO" 
                  type="text" 
                  name="PRECIO"
                  maxlength="100"
                   <?php
                  echo "value='$precio'"; 
                  ?>                 
           />
         </td>
       </tr>
       <tr>
         <td>Marca:</td>
         <td>
           <select id="dataMARCA" name="MARCA">
              <option value="0">-- Seleccione Marca. --</option>
            <?php
                // crear opciones con marca seleccionado
                include "LoadMARCA.inc";
              ?>
                                     
           </select>
         </td>
       </tr>
       <tr>
         <td>Categoria:</td>
         <td>
           <select id="dataCAT" name="CAT" >
              <option value="0">-- Seleccione Cat. --</option>
                 <?php
                // crear opciones con categoria seleccionado
                include "LoadCAT.inc";
              ?>                
           </select>
         </td>
       </tr>
      <tr>
         <td>Origen:</td>
         <td>
           <select  id="dataPAIS" name="PAIS" value="0">
            <option value="0">Seleccione Origen</option>
           <option value="china">CHINA</option>
           <option value="usa">USA</option>
           <option value="uk">UK</option>
            <?php
                  // marcar opción
                echo "<option value='dataPAIS' selected>$pais</option>\n";    
                  ?> 
       </select>
         </td>
       </tr>
      
       <tr>
         <td colspan="2">
          <input type="button" value="Eliminar" onclick="ConfirmaDEL();"/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>
</body>
</html>