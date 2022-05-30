<?php
// Aula 27 - Sessions - PARECIDO COM O COOKIES porem ele nao cria um arquivo, basicamente e uma
// forma de armazenar 
// variáveis e compartilhar entre todas as paginas, enquanto o navegador estiver
// aberto. fechar o navegador perde tudo.

session_start(); // Inicia a sessão
$_SESSION['usuario'] = 'Thiago';



//E quando você precisar exibir o valor salvo na sessão (provavelmente em outras páginas),
// é só fazer assim:

<?php
session_start();
echo $_SESSION['usuario']; // Resultado: Thiago
?>


//Você pode salvar quantos valores quiser, pode re-definir os valores e usa-los 
//em echos, argumentos de funções e da forma que preferir.

//Para deletar uma variável específica da sessão você usa o unset():

<?php
unset($_SESSION['usuario']); // Deleta uma variável da sessão


//Você também pode destruir toda a sessão de uma só vez, eliminando todas as 
//variáveis salvas nela:

<?php
session_destroy(); // Destrói toda sessão
//Com isso você tem total controle das sessões no seu site e pode salvar, por exemplo, 
//o nome de usuário depois que ele fez o login e salvar outra variável informando que /
//o usuário está logado. Esta é uma prática muito comum em sistemas de autenticação de usuário.
