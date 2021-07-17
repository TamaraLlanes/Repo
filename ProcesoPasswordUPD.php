<?php
    // ProcesoPasswordUPD
    
    // conectar al servidor
    include "conexion.inc";
    // capturar datos del formulario
    $usuario    = utf8_encode($_POST["USR"]);
    $password   = md5(utf8_encode($_POST["PSW1"]));
    $passwordNew  = md5(utf8_encode($_POST["PSWNEW"]));
    $passwordNew1  = md5(utf8_encode($_POST["PSWNEW1"]));
    
 
    // crear sentencia para control de usuario
    $sql  = "SELECT * FROM usuarios WHERE ";
    $sql.= "usrNAME ='$usuario' AND usrPAS ='$password'";




    // ejecutar sentencia
    $result = mysql_query($sql,$conex);

    // controlar exitencia
    if (mysql_num_rows($result)==0) {
        // enviar mensaje de error
        header("location: errorPage.php?MSG=Usuario y/o contraseña incorrectos");
    } else {

   
        // cargar y convertir datos del formulario
// cargar registro
    $regUSR = mysql_fetch_array($result);
    // convertir datos
    $usuario  = $regUSR["usrNAME"];
    
// Cambiar password
    // crear sentencia SQL para modificar registro
    $sql  = "UPDATE usuarios SET ";
    $sql .= "usrPAS='$passwordNew'";
    $sql .= "WHERE usrNAME='$usuario'";
 // depurar instrucción SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);

   header("location: FormLOG.php");
    } // endif

?>