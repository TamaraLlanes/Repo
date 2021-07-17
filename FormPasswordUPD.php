<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>Cambiar Password Usuario</title>
    <link rel="stylesheet" href="Estilos.css"/>
    <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>
<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Cambiar Password Usuario</legend>
   <form id="dataFRM" action="ProcesoPasswordUPD.php" method="POST">
     <table>

    
       <tr>
         <td>Usuario:</td>
         <td>
           <input id="dataUSR" 
                  type="text" 
                  name="USR"
                  maxlength="10"
                  title="Máximo 10 caracteres" 
           />
         </td>
       </tr>
       <tr>
         <td>Contraseña:</td>
         <td>
           <input id="dataPSW1" 
                  type="password" 
                  name="PSW1"
                  maxlength="10"
                  title="Máximo 10 caracteres"                   
           />
         </td>
       </tr>
       <tr>
         <td>Nueva Contraseña:</td>
         <td>
           <input id="dataPSWNEW" 
                  type="password" 
                  name="PSWNEW"
                  maxlength="10"
                  title="Máximo 10 caracteres"                   
           />
         </td>
       </tr>
        <tr>
         <td>Repetir Nueva Contraseña:</td>
         <td>
           <input id="dataPSWNEW1" 
                  type="password" 
                  name="PSWNEW1"
                  maxlength="10"
                  title="Máximo 10 caracteres"                   
           />
         </td>
       </tr>            
       <tr>
         <td colspan="2">
           <input type="button" value="Modificar"  onclick="CheckUPDpass();" />
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>
       <tr>
         <td colspan="2" style="text-align: rigth;">
          
         </td>
       </tr>                                   
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>