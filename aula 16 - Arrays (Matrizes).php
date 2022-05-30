<?php
//ARRAYS

//unicos valores

$carros = array ("Fusca","Uno","Gol");
$carro = ["Fusca", "Uno", "Gol", "Polo"];
$modelo = ["Fusca", "Uno", "Gol", "Polo","Monza"];
$idade = array("Jan"=>"30","Maria"=>"31","Lucas"=>"93", );
$qtd = count ($modelo);
$years = array ("Jan"=>30, "Maria"=>17, "Leleca"=>16, "Ceci"=>12, "Lucas"=>8, );


echo "A quantidade na MAtriz e: ".count($carros);
echo "<br>";
echo "A quantidade na MAtriz e: ".count($carro);
echo "<br>";

for ($i=0; $i < $qtd; $i++){
    echo $modelo[$i];
    echo "<br>";
}
echo "<br>";
echo "<br>";

foreach ($carros as $tipo){
    echo $tipo."<br>";
}

echo "<br>";
echo "<br>";

// pode-se usar tambem valores chaves

echo $idade ["Lucas"];

echo "<br>";
echo "<br>";

// assossiativo

foreach ($idade as $chave => $valor){
    echo "O nome é $chave é a idade é $valor <br>";
}


echo "<br>";
echo "<br>";

asort ($years);
    foreach ($years as $chave => $valor){
        echo $chave. "<br>";
    }


    echo "<br>";
    echo "<br>";
    
ksort ($years);
        foreach ($years as $chave => $valor){
            echo $chave. "<br>";
        }


?>


