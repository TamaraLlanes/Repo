<?php

   include "lib/MPDF57/mpdf.php";
   
   include "conexion.inc";

    // determinar filtro
    $id         = $_GET["ID"];
    $filtro     = $_GET["CAT"];
    $orden      = $_GET["ORD"];
    $tipoOrden  = $_GET["TIPO"];


    // crear sentencia SQL para listar
        // crear sentencia SQL para listar
    $sql="SELECT p.idPROD,p.descPROD,p.precioPROD,m.nomMARCA,c.nomCAT,p.paisPROD,p.imgPROD,p.estadoPROD ";
      $sql.="FROM productos AS p ";
      $sql.="JOIN marca AS m ";
      $sql.="ON p.marcaPROD = m. idMARCA ";
      $sql.="$filtroMARK ";   
      $sql.="JOIN categorias AS c ";
      $sql.="ON p.categoriaPROD = c.idCAT "; 
      $sql.="$filtroCAT "; 
      $sql.="$filtroPS "; 
      $sql.="$filtroPAIS ";
      $sql .= "ORDER BY $orden $tipoOrden "; 

   $result = mysql_query($sql,$conex);   
   
   $texto =      "
        <table id='lst'>
         <thead>
         <tr>
           <th> ID </th>
           <th> DESCRIPCION</th>
           <th>PRECIO</th>
           <th>MARCA</th>
           <th>CATEGORIA</th> 
           <th>PAIS</th> 
           <th>FOTO</th> 
           </tr>       
         </thead>
         "; 
         $contenido="<tbody>";       
        while ($regPROD = mysql_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPROD["idPROD"];
            $descripcion    = utf8_encode($regPROD["descPROD"]);            
            $precio         = utf8_encode($regPROD["precioPROD"]);  
            $nombreMARCA    = utf8_encode($regPROD["nomMARCA"]);  
            $nombreCAT      = utf8_encode($regPROD["nomCAT"]);
            $pais           = utf8_encode($regPROD["paisPROD"]);
            $img            = utf8_encode($regPROD["imgPROD"]);
           
              $estado            = utf8_encode($regPROD["estadoPROD"]);
           
               if($estado=='ACTIVO'){
                
           $contenido.= " 
              <tr><td style='text-align: right;'>$id</td>\n'           
              <td>$descripcion</td>\n
              <td>$precio</td>\n
              <td style='text-align: right;'>$nombreMARCA</td>\n
              <td style='text-align: right;'>$nombreCAT</td>\n
              <td>$pais</td>\n
              <td><img class='btn' src='$img' /></td>
            </tr>\n";
        } // end while

        }

        // cerrar conexión
        mysql_close($conex); 
        
        $contenido.="</tbody></table>" ;
        
        $textoEntero=$texto.$contenido;
        
        $clase = file_get_contents('Estilos.css');
        
        $mpdf = new mPDF('c','A4'); 
        
        $mpdf->writeHTML ("$clase",1);
        
        $mpdf->writeHTML ("$textoEntero");
        
           $mpdf->Output('ReporteCombo.pdf','I');
     

?>