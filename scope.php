<?php

$edad = 22;
function estudiante(){
    // si agregamos global todos los parametros se volveran igual a este, si no lo imprime diferente
    global $edad;
    $edad = 13;
    echo $edad;
}
 estudiante();
 echo ' y ';
 echo $edad;

?>