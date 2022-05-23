<?php
  echo "opa está tudo ok";
  echo "opa está tudo ok";
  echo "<p>opa está tudo ok</p>";

  //Criar uma variavel, no php usa-se $ e da forma como e escrito
  // não pode mudar a variável, se for maiusculo, tem que ser
  //  maiusculo, caso digite minusculo o mesmo dá erro. Usa // para cometar PHP
    
  $cor = "Amarelo";
    echo "<p> A cor é $cor</p>";

    //Variavel usada antes do HTML dentro do PHP
    $texto = "Olá mundo";

    // pode tambem criar um script Java Script no PHP e ser usando dentro do html

    $js = "<script>alert('Criado com PHP')</script>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>
<body>
    <h1>
    <?php echo $texto;
    ?>
    </h1>

    <h1>
    <?php echo $js;
    ?>
    </h1>

    <!--agora vamos mesclar o PH com HTML  (esta lonha esta comentada em html

    1 - abrir o PHP e criar variavel Ativado que vai receber "SIM"
-->
    <?php $ativado = "não";?>
    
    
    <?php if ($ativado == "sim"){ ?>
        <h1> Está ativado sim </h1>

    <?php }else{ ?>
        <h1> Não está ativado </h1>
    <?php } ?>
   
</body>
</html>
