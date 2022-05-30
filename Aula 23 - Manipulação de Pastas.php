<?php
//Aula 23 - Manipulação de Pastas

$pasta = "nova-pasta";
$dupla = "teste/nova-pasta/";

//Comando criar pasta dentro da raiz da aplicação
 if (!is_dir($pasta)){
 mkdir($pasta, 0755, true);
 }else{
     rmdir($pasta);
 }
 

//Comando criar pasta dentro da raiz da aplicação
// if (!is_dir($dupla)){
//    mkdir($dupla, 0755, true);
//    }

?>

