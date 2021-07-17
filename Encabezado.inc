  

  <legend>Bienvenida</legend>
    <?php
        // acceder a la sesión
        session_start();
        
       $usuario = $_SESSION["nombreLogueado"];
     
        echo "<p>Bienvenid@ $usuario</p>\n";

    ?>