<?php 
 //control de session
include "CtrlSession.inc";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Proyecto WEB 2.0" />
	<meta charset="utf-8" />
	<title>Insertar Categoria Del Producto</title>
	<link rel="stylesheet" type="text/css" href="Estilos.css" />
  <script type="text/javascript" src="FuncionesCam.js"></script>
</head>
<body>


<!-- SECCION CABECERA -->
<h4>ShopCam - MENU ADMINISTRADOR</h4>

<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Insertar Categoria</legend>
   <form id="dataFRM" action="ProcesoProductosCategoriasINS.php" method="POST">
     <table>
       <tr>
         <td><legend>Nombre de Categoria:</legend></td>
         <td>
           <input id="dataCAT" 
                  type="text" 
                  name="CAT"
                  maxlength="50"
                  title="Máximo 50 caracteres" 
           />
         </td>
       </tr>
       <tr>
        <br />
        <td style="text-align: left;">
        	
    <a href="ProcesoProductosCategoriasVER.php?CAT=id">Ver Categorias</a>
       </td>
     </tr>
       <tr>
         <td colspan="2">
           <input type="submit" value="Enviar" />
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
  <!-- Listado Marcas  -->
  <fieldset id="frm">
   <legend>Insertar Marca</legend>
   <form id="dataFRM" action="ProcesoProductosMarcasINS.php" method="POST">
     <table>
       <tr>
         <td><legend>Nombre de Marcas:</legend></td>
         <td>
           <input id="dataMARCA" 
                  type="text" 
                  name="MARCA"
                  maxlength="50"
                  title="Máximo 50 caracteres" 
           />
         </td>
       </tr>
       <tr>
        <br />
        <td style="text-align: left;">
    <a href="ProcesoProductosMarcasVER.php?CAT=id">Ver Marcas</a>
       </td>
     </tr>
       <tr>
         <td colspan="2">
           <input type="submit" value="Enviar" />
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
  <!-- Listado Pais  -->
  <fieldset id="frm">
   <legend>Listar Pais</legend>
   <form id="dataFRM" action="ProcesoProductosPaisINS.php" method="POST">
     <table>
       <tr>
        <br />
        <td style="text-align: center;">
    <a href="ProcesoProductosPaisVER.php?PAIS=id">Ver Pais</a>
       </td>
     </tr>
       </tr>                            
     </table> 
   </form>
  </fieldset>
</div>
</body>
</html>