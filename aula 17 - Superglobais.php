<?php
//SuperGlobais

// São vairaveis pre definidas, que são sempre acessiveis, ja vem prontas que trazem funções específicas. 

/* 
$GLOBALS  unica que não começa com _ Underline
$_SERVER
$_REQUEST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

/* aqui delcarado normalmente eles funcionam*/

$a = 10;
$b = 20;

/* se for somar dentro de uma função elas NÃO vão funcionar*/

// function soma(){
// $c = $a + $b;
// }
// soma();
// echo $c;

/* vai mostrar varios erros e não vai funcionar por está dentro da função a somatoria*/

/* pra funcionar usamos a super <global>*/

function soma(){
//$c = $a + $b;
$GLOBALS ['c'] = $GLOBALS ['a'] +  $GLOBALS ['b'];

// ou como abaixo: 

global $a, $b, $c;
$c = $a+$b;
}

soma();
echo $c;

echo "<br>";
echo "<br>";

//_SERVER
// MOSTRA O CAMINHO ONDE ESTAMOS TRABALHANDO, PRA ELE MESMO

echo $_SERVER ['PHP_SELF'];

echo "<br>";
echo "<br>";

echo $_SERVER ['SERVER_NAME'];

echo "<br>";
echo "<br>";

echo $_SERVER ['HTTP_HOST'];

echo "<br>";
echo "<br>";

echo $_SERVER ['REMOTE_ADDR'];

echo "<br>";
echo "<br>";

// INFORMAÇÕES DE QUEM ACESSA NOSSA PAGINA
echo $_SERVER ['HTTP_USER_AGENT'];


// 📖 Leitura Sugerida (Superglobais): https://bit.ly/3oI85eY
// 📖 Leitura Sugerida ($_SERVER): https://bit.ly/3HKCYqt




?>


