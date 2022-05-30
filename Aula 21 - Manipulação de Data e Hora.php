<?php
//Aula 32 Manipulação Data e HOra


 /* MANIPULANDO DATAS e HORA - date()*/ 

 //DATA COMPLETA
 echo date('d/m/Y');
 echo "<br>";

 //HORA
 echo date('H:i:s');

 //PADRAO BRASILEIRO DE DATAS
 // dia/mes/ano
 //06/09/2021

 //PADRAO AMERICANO DE DATAS
 //ano/mes/dia
 //2021/09/06

 echo "<br><br>";

 //CALCULAR DIAS ENTRE DATAS
 $hoje = date('Y-m-d');
 $vencimento = '2021-10-15';

 $diferenca = strtotime($vencimento) - strtotime($hoje);
 $dias = floor($diferenca / (60*60*24));

 //CONVERSÃO PARA O PADRAO BR
 $venc = explode('-',$vencimento);
 $venc_formatado =  $venc[2]."/".$venc[1]."/".$venc[0];

 $data_hoje = explode('-',$hoje);
 $hoje_formatado =  $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

 echo "Vencimento: $venc_formatado <br>";
 echo "Hoje: $hoje_formatado <br><br>";
 echo "A diferença é de $dias dias entre as datas";

 echo "<br><br>";

 //COMPARAR DUAS DATAS MAIOR OU MENOR
 $data1 = date('Y-m-d');
 $data2 = '2021-09-05';

 if (strtotime($data1) > strtotime($data2)){
   echo "A data 1 é maior que a data 2 <br>";
   echo "Vencido! <br>";
 }elseif(strtotime($data1) == strtotime($data2)){
   echo "A data 1 é igual a data 2 <br>";
   echo "Vence hoje! <br>";
 }else{
   echo "A data 1 é menor que a data 2 <br>";
   echo "Tudo tranquilo... <br>";
 }

?>
