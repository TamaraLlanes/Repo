
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
	<title>Catalogo de Productos de Baja</title>
    <link rel="stylesheet" href="Estilos.css"/>
    <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>


<!-- SECCION CABECERA -->
<h1>ShopCam - Listado de productos de Bajas</h1>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Filtrar Bajas por Categoria</legend>
   <form id="dataFRM" action="ProcesoProductosVerBAJA.php" method="POST">
     <table>
       <tr>
         <td>Listado de Productos de Baja:</td>
         <td>
           <select id="dataCAT" name="CAT">
              <option value="0">-- Listar Todos. --</option>
              <?php
                // crear opciones
                include "LoadCAT.inc";
              ?>                          
           </select>
         </td>
       <tr>
         <td colspan="2">
           <input type="submit" value="Listar" />
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                    
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>