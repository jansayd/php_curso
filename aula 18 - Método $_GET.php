<?php
//Aula 18 - Método $_GET
// mais importante nas aulas
// get em ingles significa PEGAR, pegar informações de algum lugar. - como exemplo pegar informação do link da página - URL
// como exemplo podemos editar o link do arquivo como abaixo, para podermos pegar o valor dentro do html com o _GET
// http://localhost/curso-php/aula%2018%20-%20M%C3%A9todo%20$_GET.php?nome=Jan

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método _GET</title>
</head>
<body>
    <h1> Olá meu amigo <?php echo $_GET['nome']; ?></h1>

    <a href = "aula 18 - Método $_GET.php?nome=Pedro"> Ir para Pedro</a><br>
    <a href = "aula 18 - Método $_GET.php?nome=Matheus"> Ir para Matheus</a><br>
    <a href = "aula 18 - Método $_GET.php?nome=Ceci"> Ir para Ceci</a><br>
</body>
</html>


