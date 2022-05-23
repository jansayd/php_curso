<?php
/*MANIPULAÇÃO DE STRINGS */

$palavra = "Beleza amanha e o segundo dia da semana";

//STRLEN

//echo strlen ($palavra);


//str_word_count()

//echo str_word_count ($palavra);


//strrev();

//echo strrev ('Jan Kleber');


//strpos()
//echo strpos ('oi tudo bom','tudo')


//str_replace
//$palavra = "ola mundo";
//echo str_replace ("mundo","Jan", $palavra);

$data = "25-08-2021";
$data_formatada = str_replace ("-","/",$data);
echo "Data antiga: $data <br> Data formatada:$data_formatada";




?>