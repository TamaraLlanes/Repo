/* DEFINICION DE FUNCIONES PARA MINISISTEMA SHOPCAM */

       //AJAX
 // Filtro Dinamico de Marca
      function LoadMARCA(id){
      //inicializar objeto AJAX
      var xhr;
      if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
      }else{
        //Crear objeto para IE5 , IE6
        xhr = new ActiveObject("Microsoft.XMLHTTP");
      }//endif
      //realizar peticion
      xhr.open("GET",'LoadMARCAProceso.php?IDC='+id,true);
      xhr.send(null);
      //controlar peticion
      xhr.onreadystatechange = function(){
       //window.alert(xhr.readyState);
      if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById('dataMARCA').innerHTML = xhr.responseText;
      }//endif
      }//endfunction
    }//endfunction

//Filtro Dinamico de Precios por marca
 function LoadPRECIO(id){
      //inicializar objeto AJAX
      var xhr;
      if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
      }else{
        //Crear objeto para IE5 , IE6
        xhr = new ActiveObject("Microsoft.XMLHTTP");
      }//endif
      //realizar peticion
      xhr.open("GET",'LoadPRECIOProceso.php?IDP='+id,true);
      xhr.send(null);
      //controlar peticion
      xhr.onreadystatechange = function(){
       //window.alert(xhr.readyState);
      if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById('dataPRECIO').innerHTML = xhr.responseText;
      }//endif
      }//endfunction
    }//endfunction

//Filtro Dinamico de Pais por Precio
 function LoadPAIS(id){
      //inicializar objeto AJAX
      var xhr;
      if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
      }else{
        //Crear objeto para IE5 , IE6
        xhr = new ActiveObject("Microsoft.XMLHTTP");
      }//endif
      //realizar peticion
      xhr.open("GET",'LoadPAISProceso.php?IDPS='+id,true);
      xhr.send(null);
      //controlar peticion
      xhr.onreadystatechange = function(){
       //window.alert(xhr.readyState);
      if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById('dataPAIS').innerHTML = xhr.responseText;
      }//endif
      }//endfunction
    }//endfunction


   //Enviar consulta
    function ListarCombo(idC,idP,idPS) {
      var idC = document.getElementById('dataCAT').value;
      var idM = document.getElementById('dataMARCA').value; 
      var idP = document.getElementById('dataPRECIO').value;
      var idPS= document.getElementById('dataPAIS').value;
    // window.alert('ProcesoProductosSincroComboVER.php?CAT='+idC+'&MARCA='+idM+'&PRECIO='+idP+'&PAIS='+idPS);
    // confirmar eliminar registro
    //var confirma = window.confirm("Listar seleccion?");
    // evaluar confirmación
    //if (confirma) {
        // enviar formulario
window.location =('ProcesoProductosSincroComboVER.php?CAT='+idC+'&MARCA='+idM+'&PRECIO='+idP+'&PAIS='+idPS);
    
} // end function*/


function CheckFormCatUPD() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Verifique:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("dataCAT").value;
    var nombre  = document.getElementById("dataCAT").value;
   
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Nombre Categoria\n";
    } // endif
// controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
}//end function

function CheckFormMarkUPD() {
// preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Verifique:\n";
    var error   = false;
// capturar datos del formulario
 var id = document.getElementById("dataMARCA").value;
 var nombre  = document.getElementById("dataMARCA").value;
  // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Nombre Marca\n";
    } // endif
// controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
}// end function

function CheckFormPaisUPD() {
// preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Verifique:\n";
    var error   = false;
// capturar datos del formulario
 var id = document.getElementById("dataID").value;
 var nombre  = document.getElementById("dataPAIS").value;
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Nombre Pais\n";
    } // endif
// controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
}// end function


function CheckForm() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Verifique:\n";
    var error   = false;
    // capturar datos del formulario
    var descripcion  = document.getElementById("dataDESC").value;
    var precio       = document.getElementById("dataPRECIO").value;
    var marca        = document.getElementById("dataMARCA").value;
    var categoria    = document.getElementById("dataCAT").value;
    var pais         = document.getElementById("dataPAIS").value;
   // var img          = document.getElementById("dataADJ").src;
   
    // validar datos
    if (descripcion=="") {
        error   = true;
        mensaje = mensaje+"Descripcion\n";
    } // endif
    if (precio=="") {
        error   = true;
        mensaje = mensaje+"Precio\n";
    } // endif
   
    if (isNaN(precio)) {  // is Not a Number
        error   = true;
        mensaje = mensaje+"Precio debe ser numérico\n";
    } // endif        
    if (marca=="0") {
        error   = true;
        mensaje = mensaje+"Marca\n";
    } // endif
    
   if (categoria=="0") {
        error   = true;
        mensaje = mensaje+"Categoria\n";
    } // endif
   
   if (pais=="") {
        error   = true;
        mensaje = mensaje+"Pais\n";
    } // endif
    

       // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
} // end function

function CheckID() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Verifique ID:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("dataID").value;    
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID vacío\n";
    } // endif
    if (isNaN(id)) {    // is Not a Number
        error   = true;
        mensaje = mensaje+"ID debe ser numérico\n";
    } // endif    
    
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
} // end function


function CheckLOG() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!...Error:\n";
    var error   = false;
    // capturar datos del formulario
    var usuario = document.getElementById("dataUSR").value;    
    var pass    = document.getElementById("dataPSW").value;
       
    // validar datos
    if (usuario=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Nombre de Usuario\n";
    } // endif
    if (pass=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Contraseña\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
} // end function

function CheckREG() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!...Error:\n";
    var error   = false;
    // capturar datos del formulario
    var nombre = document.getElementById("dataNOM").value;    
    var usuario = document.getElementById("dataUSR").value;    
    var pass1   = document.getElementById("dataPSW1").value;
    var pass2   = document.getElementById("dataPSW2").value;        
    // validar datos
 if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Nombre \n";
    } // endif

    if (usuario=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Nombre de Usuario\n";
    } // endif
    if (pass1=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Contraseña\n";
    } // endif
    if (pass2=="") {
        error   = true;
        mensaje = mensaje+"Repita Contraseña\n";
    } // endif        
    if (pass2!=pass1) {
        error   = true;
        mensaje = mensaje+"Las contraseñas deben ser iguales\n";        
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
} // end function

// Cambiar password
function CheckUPDpass() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!...Error:\n";
    var error   = false;
    // capturar datos del formulario
    var usuario = document.getElementById("dataUSR").value;    
    var pass1   = document.getElementById("dataPSW1").value;
    var passNew   = document.getElementById("dataPSWNEW").value;
    var passNew2   = document.getElementById("dataPSWNEW1").value; 

    if (usuario=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Nombre de Usuario\n";
    } // endif
    if (pass1=="") {
        error   = true;
        mensaje = mensaje+"Se requiere Contraseña\n";
    } // endif
    
    if (passNew=="") {
        error   = true;
        mensaje = mensaje+"Requiere Nueva Contraseña\n";       
     } // endif
    if (passNew2=="") {
        error   = true;
        mensaje = mensaje+"Repita Contraseña\n";       
     } // endif   

    if (passNew2!=passNew) {
        error   = true;
        mensaje = mensaje+"Las contraseñas deben ser iguales\n";        
    } // endif


      // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                        
} // end function


//Cambiar estado
function ConfirmaDELLST(id,filtro,orden,tipo) {
    //window.alert('ProcesoProductosLogicaDEL.php?ID='+id+'&CAT='+filtro+'&ORD='+orden+'&TIPO='+tipo);
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar al proceso de Eliminación
   window.location ='ProcesoProductosLogicaDEL.php?ID='+id+'&CAT='+filtro+'&ORD='+orden+'&TIPO='+tipo
    } // endif
} // end function

//Eliminar registro
function ConfirmaDEL(id,filtro,orden,tipo) {
    window.alert('ProcesoProductosDEL.php?ID='+id+'&CAT='+filtro+'&ORD='+orden+'&TIPO='+tipo);
    // confirmar eliminar registro
    var confirma = window.confirm("está seguro de eliminar el registro?");
    // evaluar confirmación
    if (confirma) {
        // enviar formulario
    window.location = 'ProcesoProductosDEL.php?ID='+id+'&CAT='+filtro+'&ORD='+orden+'&TIPO='+tipo;
   
    } // endif
} // end function




