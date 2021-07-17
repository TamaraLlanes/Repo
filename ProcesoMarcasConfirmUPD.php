<?php
    // PROCESO CONFIRM UPD
    
    // conectar al Servdior de Base de Datos
    include "conexion.inc";

 //control de session
include "CtrlSession.inc";
    // capturar ID del formulario o listado
    if (isset($_POST["ID"])) {
        // cargar desde el formulario
        $id = $_POST["ID"];    
    } else {
        // cargar desde el listado
        $id = $_GET["ID"];
    } // endif

    // crear sentencia SQL para buscar el ID
    $sql = "SELECT * FROM marca WHERE idMARCA=$id";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // controlar existencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=ID de Producto INEXISTENTE");
    } // endif
    // cargar registro
    $regPROD = mysql_fetch_array($result);
    // convertir datos
    $id             = $regPROD["idMARCA"];
    $nombre    = utf8_encode($regPROD["nomMARCA"]);
   


    // cerrar conexión
    mysql_close($conex);
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta name="author" content="Proyecto WEB 2.0" />
  <meta charset="utf-8" />
  <title>Actualizar Producto</title>
  <link rel="stylesheet" type="text/css" href="Estilos.css" />
  <script type="text/javascript" src="FuncionesCam.js"></script>
</head>
<body>
  <!-- SECCION CABECERA -->
<h1>ShopCam - Actualizar Producto</h1>
 <!-- SECCION MENU -->
<?php
    include "menu.inc";
?>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Actualizar Marca</legend>
   <form id="dataFRM" action="ProcesoMarcasUPD.php" method="POST">
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
         <td>Marca:</td>
         <td>
           <input id="dataMARCA" 
                  type="text" 
                  name="MARCA"
                  maxlength="50"
                 
                   <?php
                 echo "value='$nombre'"; 
                  ?>
           />
         </td>
       </tr>
       <tr>
         <td colspan="2">
          <input type="button" value="Actualizar" onclick="CheckFormMarkUPD();"/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>
</body>
</html>