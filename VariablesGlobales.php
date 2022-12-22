<?php

$n1 = 55555;
$n2 = 33322;
function sumar(){
    // llamar funciones de afuera
    $GLOBALS['s'] = $GLOBALS['n1'] + $GLOBALS['n2'];
}
sumar();
echo $s;

print("<br>");
// IMPRIME RUTA 
echo $_SERVER['PHP_SELF'];
print("<br>");
// SERVIDOR
echo $_SERVER['SERVER_NAME'];
print("<br>");



echo $_SERVER['HTTP_REFERER'];



?>