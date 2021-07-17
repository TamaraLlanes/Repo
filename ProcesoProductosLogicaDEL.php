<?php
    // PROCESO PRODUCTOS UPD Logica
         // controlar logueado
    include "CtrlSession.inc";
    // conectar al Servidor de Base de Datos
    include "conexion.inc";
      
 
  
   // cargar y convertir datos del formulario
    $id = $_GET["ID"];
    // capturar filtro
    $filtro = $_GET["CAT"];
    // capturar orden
    $orden  = $_GET["ORD"];    
    // capturar tipo
    $tipo   = $_GET["TIPO"];
   
    // crear sentencia SQL para eliminar registro
    $sql= "SELECT *FROM productos WHERE idPROD=$id";
        // ejecutar sentencia SQL
        $result =mysqli_query($conex,$sql);

    $regPROD = mysqli_fetch_array($result); 
      // convertir caracteres
           $id      = $regPROD["idPROD"];
          $estado   = $regPROD["estadoPROD"];
          
          if($estado== 'ACTIVO'){
            $estado = 'BAJA';
          // crear sentencia SQL para modificar registro
           $sql  = "UPDATE productos SET ";
           $sql .= "estadoPROD='$estado'";
           $sql .= "WHERE idPROD=$id";
             // ejecutar sentencia SQL
            mysqli_query($conex,$sql);
         }//endif
    // depurar instrucción SQL
   //die($sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al formulario de actualización
   header("Location: ProcesoProductosVER.php?ID=id&CAT=filtro&ORD=orden&TIPO=tipo");
              
?>
