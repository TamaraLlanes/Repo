<?php
    // controlar logueado
  include "CtrlSession.inc";
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
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Eliminar Producto</legend>
   <form id="dataFRM" action="ProcesoProductosConfirmDEL.php" method="POST" enctype="multipart/form-data">
     <table>
      <tr>
         <td>Id:</td>
         <td>
           <input id="dataID" 
                  type="text" 
                  name="ID"
                  maxlength="50"
                  title="Máximo 50 caracteres" 
                 
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
                 title="deshaiblitado"
                  value="deshabilitado"
                  disabled="true" 
                 
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
                  title="deshaiblitado"
                  value="deshabilitado"
                  disabled="true"  
                                
           />
         </td>
       </tr>
       <tr>
         <td>Marca:</td>
         <td>
           <select id="dataMARCA" name="MARCA" disabled="true">
              <option value="0">-- Seleccione Marca. --</option>
            <?php
                // crear opciones con marca seleccionado
                //include "LoadMarcaSel.inc";
              ?>
                                     
           </select>
         </td>
       </tr>
       <tr>
         <td>Categoria:</td>
         <td>
           <select id="dataCAT" name="CAT" disabled="true">
              <option value="0">-- Seleccione Cat. --</option>
                 <?php
                // crear opciones con categoria seleccionado
                //include "LoadDptosSel.inc";
              ?>                
           </select>
         </td>
       </tr>
      <tr>
         <td>Origen:</td>
         <td>
           <select  id="dataPAIS" name="PAIS" value="0" disabled="true">
           	<option value="0">Seleccione Origen</option>
           <option value="china">CHINA</option>
           <option value="usa">USA</option>
           <option value="uk">UK</option>
       </select>
         </td>
       </tr>
       <tr>
       	<td>
       <tr>
 <tr>
         <td>Foto:</td>
         <td>
            <td><input id="dataADJ" type="file" name="ADJ" disabled="true" /></td>
       

</tr>
       <tr>
         <td colspan="2">
            <input type="button" value="Confirmar"  onclick="CheckID();" />
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>                            
     </table>
   </form>
  </fieldset>
</div>
</body>
</html>