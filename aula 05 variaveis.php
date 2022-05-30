<?php
//variáveis
//$cor = "Laranja";
//echo $cor

//variaveis nao podem começar com números $1exemplo

?>

<?php
//$x = 150;
//$y = 150;

//echo $x + $y;

?>


<?php
$x = 250;
$y = 150;
    function teste (){
        global $x;
        echo "O valor de x dentro da função é:  $x";
    }
    teste ();
echo "<br>O Valor de x Fora: $x";

?>







