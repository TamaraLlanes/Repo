
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>Registrar Usuario</title>
    <link rel="stylesheet" href="Estilos.css"/>
    <script type="text/javascript" src="FuncionesCam.js"></script>
</head>

<body>

<!-- SECCION CONTENIDO -->
<div id="contenido">
  <fieldset id="frm">
   <legend>Registrarse</legend>
   <form id="dataFRM" action="ProcesoREG.php" method="POST">
     <table>

      <tr>
         <td>Nombre:</td>
         <td>
           <input id="dataNOM" 
                  type="text" 
                  name="NOM"
                  maxlength="10"
                  title="Máximo 10 caracteres" 
           />
         </td>
       </tr>
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
         <td>Repetir:</td>
         <td>
           <input id="dataPSW2" 
                  type="password" 
                  name="PSW"
                  maxlength="10"
                  title="Máximo 10 caracteres"                   
           />
         </td>
       </tr>       
       <tr>
         <td colspan="2">
           <input type="button" value="Registrase"  onclick="CheckREG(); "/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>
       <tr>
        <br />
         <td colspan="2" style="text-align: rigth;">
           <a class="reg" href="FormPasswordUPD.php">Cambiar Contasena</a>
         </td>
       </tr>                                   
     </table>
   </form>
  </fieldset>
</div>

</body>
</html>