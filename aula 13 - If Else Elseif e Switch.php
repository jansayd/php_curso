<?php
//IF ELSE ELSEIF

// if 

$hora = 21;

if ($hora<12){
    echo "Bom dia!";
    } elseif ($hora<18){
    echo "Boa Tarde!";
    } else{
        echo "Boa noite!";
    }

echo "<br>";


//SWITCH

$cor = "Azul";

switch($cor){
    case "Vermelho":
        echo "A cor é vermelho";
        break;
    case "Azul":
        echo "A cor é Azul";
        break;
    case "Rosa":
        echo "A cor é Rosa";
        break;
    default:
    echo "A cor ".$cor." não e conhecida";
}



?>


