<?php
//LOOP - LAÇOS DE REPETIÇÕES

//PRINCIPAIS
//  while - repete enquanto for verdadeiro (true)
// do .. while - execua um bloco e depois repete o loop desde que a condição seja verdadeiro
//  for - repete determinado numero de vezes.
// foreach - executa algo para cada item dentro de uma matriz


//while

$x = 1;

while ($x <=5){
    echo "O número é: $x <br>";
    $x++;
}

echo"<br>";

$y = 0;

while ($y <=100){
    echo "O número é: $y <br>";
    $y+=10;
}

echo"<br>";

// do...while


$z = 0;

do {
    echo "O número é: $z<br>";
    $z++;
} while ($z <=5);

echo"<br>";


// for

for ($a=0; $a<=10; $a++){
    echo "O numero é: $a <br>";
}


echo"<br>";

// foreach

$cores = ["azul","amarelo","verde", "vermelho"];

foreach ($cores as $valor){
    echo "A cor é $valor <br>";
}

echo"<br>";


?>


