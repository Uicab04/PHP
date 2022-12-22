<?php 
$amigos = array('jose<br>','manu<br>','jose<br>','manu<br>',);

asort($amigos);
print_r($amigos);

// reemplazo elemnto del array
$cursos = array('jose1<br>','manu<br>','jose2<br>','manu<br>','asdasd','aaaaaa','bbbbb');
$cursos[3] = 'javascript<br>';
print_r($cursos);
?>