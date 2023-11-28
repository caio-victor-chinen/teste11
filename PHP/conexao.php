<?php 


$servername = "127.0.0.1";  // Endereço do servidor do banco de dados
$username = "root";   // Nome de usuário do banco de dados
$password = "";     // Senha do banco de dados
$database = "oberon";    // Nome do banco de dados

// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}



?>