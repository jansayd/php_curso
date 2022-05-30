<?php
/*
TIPOS DE DADOS
String, [palavras]
Integer [inteiro]
FLoat [Decima, numeros decimais]
Booelan, [Booelano - True e False]
Array, [Matriz]
Object, [Objeto]
NULL [Nulo]
*/
//STRING
$capital = "Manaus";
//echo $capital;


//INTEGER

$número  = 245;
$numero2 = -2;
$total = $número + $numero2;

//echo $total;

//caso queira saber o tipo de variavel e o resultado usa-se  o var_dump


//Float

$numero3 = 3.5;


//BOOLEAN

$jan_bonito = true;

//ARRAY (MATRIZES)

$carro = array("chevette","opala","comodoro","fiat147");


//OBJECT - OBJETO

class carro {
    public $cor;
    public $modelo;
    public function __construct($cor,$modelo){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }
    public function mensagem (){
        return "O Carro é $this->cor e o modelo e $this->modelo ";
    }

}

$carro1 = new carro ("Branco","Fusca");
$carro2 = new carro ("Vermelho","Ferrari");

// echo $carro2->mensagem();



//NULL (NULO)
$x="oi";
$x= null;

// serve pra Zerar a Variavel e deixar o lugar dele reservado..

?>


