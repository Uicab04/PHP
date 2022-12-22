<?php

function estudiante($nombre){
    echo "nuevo estudiante $nombre<br>";
}
estudiante('victor');
estudiante('victor3');
estudiante('victor33');
estudiante('victor3333');

print('<br>');
// imprimir concatenando lo que tenia esta funcion cuando le mandamos los parametros a la funcion
function estudiante2(
    $nombre = 'manu',
    $apellido = 'uicab',
    $edad = 13
    )
{
    echo "el estudiante $nombre con el apellido $apellido
    tiene la edad: $edad años";
}

estudiante2('carlos','ruiz',45);

print('<br>');

print("funcion resultado suma: ");
function suma($a,$b){
    $resultado = $a + $b;
    echo $resultado;
}
suma(4,6);

// suma 2 retorno
print('<br>');

print("funcion resultado suma: ");
function suma2($c,$d){
    //  si no es necesario almacenarlo en una variable
    echo $c + $d;
    // si es necesario devolvemos el valor afuera
    return $c + $d;
   
}
$resultado2 = suma2(40,6);
echo $resultado2;


?>