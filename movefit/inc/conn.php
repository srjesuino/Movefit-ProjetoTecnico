<?php
// Configurações de conexão com o banco de dados
$host = "localhost"; // Endereço do servidor do banco de dados
$dbname = "movefit"; // Nome do banco de dados
$user = "root"; // Usuário do banco de dados
$pass = "3[WjEFb2GSOKaned"; // Senha do banco de dados

try {
    // Criação de uma nova conexão PDO com o banco de dados
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    // Tratamento de erro caso a conexão falhe
    echo "Erro na conexão: " . $e->getMessage();
    exit; // Encerra o script em caso de erro
}
