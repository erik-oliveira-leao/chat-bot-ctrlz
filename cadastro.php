<?php
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
$host= 'localhost';
$bd= 'id18699469_ctrl';
$senhabd= '';
$userbd = 'root';


// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome = $_POST ["nome"];
$email = $_POST ["e-mail"]; 
$tel = $_POST ["tel"];  
$rua = $_POST ["rua"]; 
$num = $_POST ["num"]; 
$log = $_POST ["log"]; 
$emailuni9 = $_POST ["e-mailuni9"]; 
$ra = $_POST ["ra"]; 


//Gravando no banco de dados !
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$query = "INSERT INTO `promocao` (nome, email,  telefone, endereco, numero, logradouro, emailisnt, ra) 
VALUES('$nome', '$email', '$tel', '$rua', '$num', '$log', '$emailuni9', '$ra')";


mysql_query($query,$conexao);
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>