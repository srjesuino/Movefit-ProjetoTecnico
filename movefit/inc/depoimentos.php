<?php
// Inclui o arquivo de conexão com o banco de dados
require_once '../inc/conn.php';

// Prepara a consulta SQL para selecionar todos os depoimentos
$sql = "SELECT * FROM depoimentos";
$stmt = $conn->prepare($sql);

// Executa a consulta
$stmt->execute();

// Obtém todos os resultados da consulta como um array associativo
$depoimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Itera sobre cada depoimento retornado
foreach ($depoimentos as $depoimento) {
    // Cria um elemento HTML para exibir o depoimento
    echo '<div class="swiper-slide depoimento-item">';
    // Exibe o nome do autor do depoimento, escapando caracteres especiais para evitar XSS
    echo '<h3>' . htmlspecialchars($depoimento['nome']) . '</h3>';    
    // Exibe a nota do depoimento, escapando caracteres especiais
    echo '<span>Nota: ' . htmlspecialchars($depoimento['nota']) . '</span>';
    // Exibe o comentário do depoimento, escapando caracteres especiais
    echo '<p>' . htmlspecialchars($depoimento['comentario']) . '</p>';
    echo '</div>';
}