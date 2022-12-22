<?php
//no concatena comentarios
print 'Hola mundo';
echo "<br>"; 
echo 'Hola mundo', 'manu';

echo "<br>"; 
// variables
$nombre = 'victor';

// imprimir victor
echo $nombre;
echo "<br>"; 
$numero = 3.2;
echo 'esto es: $numero';
echo "<br>"; 


// imprime la variable
echo "esto es: $numero";
echo "<br>"; 
// concatenar manera 2
echo 'esto es: '.$numero;


echo "<br>"; 
print 'constantes, no cambian en el programa: ';
define('curso','php');
echo curso;



?>