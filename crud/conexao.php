<?php // Abertura do PHP

/*

As variaveis de coneão com o banco de dados:

SERVIDOR - Colocar o endereço do servidor
USUÁRIO - Usuário do banco
SENHA - senha do banco de dados
DBNAME - Nome do banco de dados

*/

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeto";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>
 