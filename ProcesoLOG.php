<?php
    // PROCESO LOGIN
    
    // conectar al servidor
    include "conexion.inc";
    // capturar datos del formulario
    $usuario    = utf8_encode($_POST["USR"]);
    $password   = md5(utf8_encode($_POST["PSW"]));
    
    // crear sentencia para control de usuario
    $sql  = "SELECT * FROM usuarios WHERE ";
    $sql.= "usrNAME ='$usuario' AND usrPAS ='$password'";
     // ejecutar sentencia
    $result = mysqli_query($conex,$sql);

    // controlar exitencia
    if (mysqli_num_rows($result)==0) {
        // enviar mensaje de error
        header("location: errorPage.php?MSG=Usuario y/o contraseña incorrectos");
    } else {
        // crear sesión
        session_start();
        // guardar en sesión el nombre del usuario
        $_SESSION["nombreLogueado"] = $usuario;
        // crear cookie
        setcookie("login","usrOK",time()+60);
    } // endif
    
    if($_SESSION["nombreLogueado"]=='admin'){
        
        header('location:Bienvenida.php');
        include "menu.inc";
        
    }else{
        
        if($_SESSION["nombreLogueado"]){
            echo "<script>alert(\"No tienes permisos de admin.\");window.location='BienvenidaConsumidor.php';</script>";
             include "menuConsumidor.inc";
        }
        
    }
?>