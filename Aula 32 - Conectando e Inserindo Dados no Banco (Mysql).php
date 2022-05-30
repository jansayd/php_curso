<?php
require('db/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo Dados</title>
</head>
<body>
    <h1>Aula Inserindo Dados</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu email" required>
        <button type="submit" name="salvar">Salvar</button>
    </form> 
    <br>
    <?php

//INSERIR UM DADO NO BANCO (MODO SIMPLES)
//$sql = $pdo->prepare("INSERT INTO clientes VALUES (null,'Dimitri','teste@teste.com','18-09-2021')");
//$sql->execute();

//MODO CORRETO ANTI SQL INJECTION

 if (isset($_POST['salvar'])&& isset($_POST['nome'])&& isset($_POST['email'])){
    
    $nome = limparPost($_POST['nome']);
    $email= limparPost($_POST['email']);
    $data=date('d-m-Y');

    //VALIDAÇÃO DE CAMPO VAZIO
    if ($nome=="" || $nome==null){
        echo "<b style='color:red'>Nome não pode ser vazio</b>";
        exit();
    }

    if ($email=="" || $email==null){
        echo "<b style='color:red'>Email não pode ser vazio</b>";
        exit();
    }
    
    //VALIDAÇÕES DE NOME E EMAIL

    //VERIFICAR SE NOME ESTA CORRETO
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
        echo "<b style='color:red'>Somente permitido letras e espaços em branco para o nome</b>";
        exit();
    }

    //VERIFICAR SE É UM EMAIL VÁLIDO
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<b style='color:red'>Formato de email inválido!</b>";
        exit();
    }

    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
    $sql->execute(array($nome,$email,$data));

    echo "<b style='color:green'>Cliente inserido com sucesso!</b>";

 }
    ?>
    
</body>
</html>