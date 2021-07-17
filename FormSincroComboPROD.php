<?php 
 //control de session
include "CtrlSession.inc";
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso WEB 2.0 - BIOS" />
	<title>FILTROS SINCRONIZADOS</title>
  <link rel="stylesheet" href="Estilos.css"/>
  <script type="text/javascript" src="FuncionesCam.js"></script>
</head>


<body>

<!-- SECCION CABECERA -->
<h1>ShopCam - Filtros Dinamicos de Productos</h1>
  

 <!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Filtrar</legend>
   <form id="dataFRM">
     <table>
       <tr>
         <td><label>Categorias:</label></td>
         <td>
           <select id="dataCAT" name="CAT" onchange="LoadMARCA(this.value);">
              <option value="0">-- Todas las Categorias. --</option>
              <?php
                // crear opciones
                include "LoadCAT.inc";
              ?>                          
           </select>
      
        </td>
         </tr>
          <tr>    
         <td><label>Marcas:</label></td>
          <td> 
            <select id="dataMARCA" name="MARCA" onchange="LoadPRECIO(this.value);">
              <option value="0">-- Seleccione Marca. --</option>

           </select>
         </td>
       </tr>    
          <tr>    
         <td><label>Precios:</label></td>
          <td> 
            <select id="dataPRECIO" name="PRECIO" onchange="LoadPAIS(this.value);">
              <option value="0">-- Seleccione Precio. --</option>

           </select>
         </td>
       </tr>   
        <tr>    
         <td><label>Pais de Origen:</label></td>
          <td> 
            <select id="dataPAIS" name="PAIS">
              <option value="0">-- Seleccione Pais. --</option>

           </select>
         </td>
       </tr>                          
       <tr>
         <td colspan="2">
      <input type="button" value="Listar" onclick="ListarCombo();" />
      <input type="reset"  value="Cancelar" />

         </td>
       </tr>  
  </table>
  </fieldset>
</div>
</form>
</body>
</html>