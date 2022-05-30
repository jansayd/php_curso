<?php
//MANiPULAÇÃO DE NUMEROS

//$valor = 4*5;
//var_dump ($valor);


//$valor1 = 4*2.5;
//var_dump ($valor1);

//$valor = "15";
//$valor_convertido = (int) $valor;
//var_dump ($valor_convertido);

$valor1 = 100;
$valor2 = 1.57;
$valor3 = "123a";

var_dump(is_int($valor1));
var_dump(is_int($valor2));
var_dump(is_int($valor3));


var_dump(is_float($valor1));
var_dump(is_float($valor2));
var_dump(is_float($valor3));

var_dump(is_numeric($valor1));
var_dump(is_numeric($valor2));
var_dump(is_numeric($valor3));


?>


