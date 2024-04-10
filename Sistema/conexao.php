<?php
// Configurações do banco de dados
$hostname = "localhost"; // Hostname do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$database = "escola"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
     die("Erro de conexão: " . $conn->connect_error);
     
}
?>