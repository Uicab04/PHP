<?php
$dias = array('lunes', 'martes', 'miercoles', 'jueves');
// identifica el tipo de dato
var_dump($dias);

// datos sin identificar
$dias2 = array('lunes2', 'martes2');
print_r($dias2);

print("<br>");
$dias3 = array('lunes', 'martes', 'miercoles', 'jueves');
echo "hos es dia: ".$dias3[2];
echo $dias3[2];

print("<br>");

$diasa = array('lunes' =>18, 'miercoles' => 'jueves' );
echo "edad: ".$diasa['lunes'];

?>