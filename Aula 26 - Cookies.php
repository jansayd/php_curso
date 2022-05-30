<?php
// Aula 26 - Cookies - são pequenos arquivos incorporados peço servidor no computadot do usuário;
// exemplo: colocando produtos nos carrinhos de compras, a luz vai embora,, quando liga o computador, aparece tudo novamente ,, como exemplo.

// CRIAR COOKIE E NOME PARA DURAÇÃO 24 HORAS "86400" OU TRINTAS DIAS *30
setcookie ('nome','Jan', time()+(86400*30))

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookies </h1>

    <?php 
    if (isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
        echo "O Nome é $nome";
    }else{
        echo "Não tem nenhum cookie";
    }
    ?>

</body>
</html>
