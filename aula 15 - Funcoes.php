<?php
/*Funções functions() */

//deve-se escever a função como abaixo
// e a função nao e Case Sensitive... minusculos ou maisculos ela vai funcionar: Escrever ou esCreVer
function EscreverMensagem(){
echo "Olá tudo bom !!!";
}
//para apresentar a função deve-se chamar a função criada como abaixo:
EscreverMensagem();

echo "<br>";


function Escrever($nome){
    echo "Olá tudo bom $nome !!!<br>";
    }
    Escrever("Jan");
    
echo "<br>";

function Escrevervarios($variosnome){
    echo "Olá tudo bom $variosnome !!!<br><br>";
    }
    Escrevervarios("Jan");
    Escrevervarios("maria");
    Escrevervarios("ceci");
    Escrevervarios("leleca");
    Escrevervarios("lucas");

    
echo "<br>";



function soma($valor1, $valor2){
    echo $valor1 + $valor2;
    }
soma(10,50);

echo "<br>";
echo "<br>";


function sum($valores1, $valores2){
    return $valores1 + $valores2 ."<br>";
    }
echo sum(11,22);

echo "<br>";

function fazercafe ($tipo = "Nescafé"){
    return "Fazendo uma xícara de: $tipo <br>";
}

echo fazercafe ("expresso");
echo fazercafe();
echo fazercafe(null);

?>


