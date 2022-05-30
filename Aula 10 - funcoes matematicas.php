<?php
//FUNÇÕES MATEMÁTICAS

$a=10;
$b=5;


$resultado = $a + $b;
$resultado1 = $a - $b;
$resultado2 = $a * $b;
$resultado3 = $a / $b;

echo "$resultado<br>";
echo "$resultado1<br>";
echo "$resultado2<br>";
echo "$resultado3<br>";

//  php existem funções prontas 


echo pi();

echo "<br>";

$numeros = [1,10,40,5000,-20,15];

echo min($numeros);
echo "<br>";

echo max($numeros);
echo "<br>";

//raiz quadrada
echo sqrt(25);
echo "<br>";

//arredondar numeros

$numero2 = 10.6;
echo round ($numero2);
echo "<br>";

//numeros randomicos
echo rand(1,100);
echo "<br>";




?>


