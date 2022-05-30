<?php
/*cURL - permite que você se conecte e se 
comunique com diferentes tipos de servidores
usando diferentes tipos de protocolos como
protocolos https, ftp, gopher, telnet, dict,
file e ldap. libcurl também suporta 
certificados HTTPS, HTTP POST, HTTP PUT,
upload via FTP e muito mais.

DICA: https://stackoverflow.com/questions/2138527/php-curl-and-http-post-example

Modo feio de entender: É o Ajax do PHP.
Faz basicamente a mesma coisa só que com
mais poderes.

Pode fazer GET ou POST, mandar e receber
dados diretamente a uma URL.

*/
/*
//EXEMPLO cURL GET

//SEMPRE INICIALIZAR
$ch = curl_init();

//APONTAR A URL DESEJADA
curl_setopt($ch, CURLOPT_URL,"https://viacep.com.br/ws/69043160/json/");

//ATIVAR RETORNO COMO STRING DO SERVIDOR
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//EXECUTAR TODO O cURL
$retorno = curl_exec($ch);

//FECHAR O cURL
curl_close ($ch);

//MOSTRAR RETORNO VINDO
echo "<pre>$retorno</pre>";

echo "<br>";
echo "a rua e :";

//para mostrar somente um campo em específico

$dados = json_decode ($retorno, true);
echo $dados ["logradouro"];

*/
// EXEMPLO POST

//SEMPRE INICIALIZAR
$ch = curl_init();

//APONTAR A URL DESEJADA
curl_setopt($ch, CURLOPT_URL,"http://localhost/curso-php/Aula%2029%20-%20cURL_TESTE.php");

//OPÇÃO PARA DIZER QUE É POST (PADRÃO É GET)
curl_setopt($ch, CURLOPT_POST, 1);

//OS CAMPOS QUE QUEREMOS MANDAR VIA POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('valor1' => 'Lucas', 'valor2' => 'lindo')));

//ATIVAR RETORNO COMO STRING DO SERVIDOR
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//EXECUTAR TODO O cURL
$resultado = curl_exec($ch);

//FECHAR O cURL
curl_close ($ch);

//MOSTRAR RETORNO VINDO
echo "<pre>$resultado</pre>";



