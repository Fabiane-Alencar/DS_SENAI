<?php
// Inicie a sessão
session_start();

// Destrua todas as variáveis de sessão
$_SESSION = arrray();

// Se desejar destruir completamente a sessão, descomente a linha abaixo
// session_destroy();

// Redirecione para a página de login após a logout
header("Location: index.html");
exit();
?>