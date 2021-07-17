
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<meta name="author" content="Curso Web 2.0 - BIOS" />
	<title>Ingreso al Sistema</title>
    <link rel="stylesheet" href="/shopcam.V1/Estilos.css"/>
    <script type="text/javascript" src="/shopcam.V1/FuncionesCam.js"></script>
</head>

<body>
<!-- SECCION CABECERA -->

<!-- SECCION CABECERA -->
<h1>ShopCam - Ingreso al Sistema</h1>
<!-- SECCION CONTENIDO -->

<div id="contenido">

  <fieldset id="frm">
   <legend>Login</legend>
   <form id="dataFRM" action="/shopcam.V1/ProcesoLOG.php" method="POST">
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
           <input id="dataPSW" 
                  type="password" 
                  name="PSW"
                  maxlength="10"
                  title="Máximo 10 caracteres"                   
           />
         </td>
       </tr>
       <tr>
         <td colspan="2">
           <input type="button" value="Login"  onclick="CheckLOG();"/>
           <input type="reset"  value="Cancelar" />
         </td>
       </tr>
       <tr>
         <td colspan="2" style="text-align: left;">
           <a class="reg" href="FormREG.php">Registrarse</a>
         </td>
         <td colspan="3" style="text-align: rigth;">
           <a class="reg" href="FormPasswordUPD.php">Cambiar Contrasena</a>
         </td>
       </tr>

     </table>
   </form>
  </fieldset>
</div>

</body>
</html>