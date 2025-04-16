<?php
// admin/inserir.php
// Este arquivo é responsável por inserir ou atualizar depoimentos no banco de dados
// com base nos dados enviados via POST. Ele inicia a sessão, inclui o arquivo de conexão
// com o banco de dados e executa a query de inserção ou atualização. Após a execução de inserção, 
// redireciona para a página index.php, se for edição, retorna um JSON com o status, feito de duas formas diferentes
// para demonstrar as possiveis soluções que domino com PHP.


require_once '../inc/conn.php'; // Inclui o arquivo de conexão com o banco de dados
session_start(); // Inicia a sessão para usar variáveis de sessão

// Obtém os dados enviados via POST
$NOME = $_POST['nome'];
$COMENTARIO = $_POST['comentario'];
$NOTA = $_POST['nota'];

// Verifica se o ID foi enviado (para diferenciar entre inserção e atualização)
$ID = $_POST['id'] ?? null;

if($ID){
    // Se o ID existir, atualiza o registro no banco de dados
    $sql = "UPDATE depoimentos SET nome = ?, comentario = ?, nota = ? WHERE id = ?";
    $stmt = $conn->prepare($sql); // Prepara a query SQL
    $stmt->bindParam(1, $NOME, PDO::PARAM_STR); // Vincula o parâmetro nome
    $stmt->bindParam(2, $COMENTARIO, PDO::PARAM_STR); // Vincula o parâmetro comentário
    $stmt->bindParam(3, $NOTA, PDO::PARAM_INT); // Vincula o parâmetro nota
    $stmt->bindParam(4, $ID, PDO::PARAM_INT); // Vincula o parâmetro ID
    $stmt->execute(); // Executa a query
} else {
    // Caso contrário, insere um novo registro no banco de dados
    $sql = "INSERT INTO depoimentos (nome, comentario, nota) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql); // Prepara a query SQL
    $stmt->bindParam(1, $NOME, PDO::PARAM_STR); // Vincula o parâmetro nome
    $stmt->bindParam(2, $COMENTARIO, PDO::PARAM_STR); // Vincula o parâmetro comentário
    $stmt->bindParam(3, $NOTA, PDO::PARAM_INT); // Vincula o parâmetro nota
    $stmt->execute(); // Executa a query
}

// Verifica se a operação foi bem-sucedida e define mensagens de retorno
if($stmt && $ID){
    $_SESSION['mensagem'] = "Depoimento atualizado com sucesso!"; // Mensagem de sucesso para atualização
    echo json_encode(array(
        'status' => 'success', // Retorna status de sucesso em JSON
    ));
} else if($stmt){
    $_SESSION['mensagem'] = "Depoimento inserido com sucesso!"; // Mensagem de sucesso para inserção
    header('Location: index.php'); // Redireciona para a página inicial
} else {
    $_SESSION['mensagem'] = "Erro ao inserir/atualizar depoimento!"; // Mensagem de erro
    header('Location: index.php'); // Redireciona para a página inicial
}

$conn = null; // Fecha a conexão com o banco de dados
