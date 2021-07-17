<?php
    // PROCESO USUARIOS REG - MySQL
    
    // conectar al servidor
    include "conexion.inc";
    
 //control de session
include "CtrlSession.inc";
    // capturar y convertir datos del formulario
    $usuario    = utf8_decode($_POST["USR"]);
    $nombre     = utf8_decode($_POST["NOM"]);
    $password   = md5(utf8_decode($_POST["PSW"]));

    // controlar exitencia
    $sql = "SELECT * FROM usuarios WHERE usrNAME='$usuario'";
    // ejecutar sentencia de control
    $result = mysqli_query($conex,$sql);
    // determinar exitencia
    if (mysqli_num_rows($result)==0) {
        // crear sentencia SQL para insertar
        $sql  = "INSERT INTO usuarios ";
        $sql .= "(usrNAME,usrNOM,usrPAS) ";
        $sql .= "VALUES ";
        $sql .= "('$usuario','$nombre','$password')";
        // ejecutar sentencia SQL
        mysqli_query($conex,$sql);
        // cerrar conexión
        mysql_close($conex);
        // volver automáticamente al formulario (redirigir)
        header("location: FormLOG.php");        
    } else {
        // cerrar conexión
        mysql_close($conex);        
        // enviar mensaje de error
        header("location: errorPage.php?MSG=el usuario ya exite");        
    } // endif

?>