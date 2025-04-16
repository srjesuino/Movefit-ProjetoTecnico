<?php
// admin/excluir.php
// Este arquivo é responsável por excluir um depoimento do banco de dados
// com base no ID passado como parâmetro GET. Ele inicia a sessão, inclui o arquivo de conexão
// com o banco de dados e executa a query de exclusão. Após a execução, redireciona para a página index.php.

session_start(); // Inicia a sessão
require_once '../inc/conn.php'; // Inclui o arquivo de conexão com o banco de dados

$ID = $_GET['id']; // Obtém o ID do depoimento a ser excluído via parâmetro GET

// Prepara a query SQL para excluir o depoimento com base no ID
$sql = "DELETE FROM depoimentos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $ID, PDO::PARAM_INT); // Vincula o parâmetro ID à query
$stmt->execute(); // Executa a query

// Verifica se a execução foi bem-sucedida e define uma mensagem de sessão
if($stmt){
    $_SESSION['mensagem'] = "Depoimento excluído com sucesso!";
} else {
    $_SESSION['mensagem'] = "Erro ao excluir depoimento!";
}

$conn = null; // Fecha a conexão com o banco de dados
header('Location: index.php'); // Redireciona para a página index.php
