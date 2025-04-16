<?php
// admin/index.php
// Este arquivo é o painel administrativo para gerenciar depoimentos. Ele exibe um formulário para adicionar novos depoimentos
// e uma tabela com os depoimentos já cadastrados. O painel também permite editar e excluir depoimentos existentes com os botões encontrado nas linhas da tabela.
// O painel é estilizado com Bootstrap e possui um layout responsivo.
// O código PHP é responsável por gerenciar a sessão, exibir mensagens de sucesso ou erro e conectar-se ao banco de dados para buscar os depoimentos.

session_start(); // Inicia a sessão para gerenciar mensagens e autenticação
$mensagem = null;

// Verifica se há uma mensagem na sessão e a exibe
if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem'];
    unset($_SESSION['mensagem']); // Remove a mensagem da sessão após exibi-la
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <!-- Importa o CSS do Bootstrap para estilização -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Importa o CSS personalizado -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <!-- Importa o JavaScript personalizado -->
    <script src="../assets/js/admin.js"></script>
    <!-- Importa o JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1>Painel Administrativo</h1>
    </header>

    <main>
        <!-- Exibe uma mensagem de sucesso, se houver com estilização do Bootstrap -->
        <?php if ($mensagem): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($mensagem) ?> <!-- Exibe a mensagem de sucesso -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="content">
            <div class="form-container">
                <h3>Cadastro.</h3>
                <p>Preencha os campos abaixo para adicionar um novo depoimento.</p>
                <!-- Formulário para cadastro de depoimentos -->
                <form class="admin-form" action="inserir.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required> <!-- Campo obrigatório -->
                    <label for="comentario">Comentário:</label>
                    <textarea id="comentario" name="comentario" required></textarea> <!-- Campo obrigatório -->

                    <label for="nota">Nota:</label>
                    <select id="nota" name="nota" required> <!-- Campo obrigatório -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="table-container">
                <h3>Depoimentos cadastrados</h3>
                <p>Você pode editar ou excluir depoimentos clicando no botão correspondente.</p>
                <!-- Tabela para exibição dos depoimentos cadastrados -->
                <table class="testimonials-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Comentário</th>
                            <th>Nota</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="depoimentos">
                        <?php
                        require_once '../inc/conn.php'; // Inclui o arquivo de conexão com o banco de dados

                        // Consulta todos os depoimentos no banco de dados
                        $sql = "SELECT * FROM depoimentos";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $depoimentos = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtém os resultados como um array associativo

                        // Itera sobre os depoimentos e os exibe na tabela
                        foreach ($depoimentos as $depoimento):
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($depoimento['id']) ?></td> <!-- Exibe o ID do depoimento -->
                                <td id="nome-<?= htmlspecialchars($depoimento['id']) ?>"><?= htmlspecialchars($depoimento['nome']) ?></td> <!-- Exibe o nome -->
                                <td id="comentario-<?= htmlspecialchars($depoimento['id']) ?>"><?= htmlspecialchars($depoimento['comentario']) ?></td> <!-- Exibe o comentário -->
                                <td id="nota-<?= htmlspecialchars($depoimento['id']) ?>"><?= htmlspecialchars($depoimento['nota']) ?></td> <!-- Exibe a nota -->
                                <td>
                                    <div class="actions" id="actions-<?= htmlspecialchars($depoimento['id']) ?>">
                                        <!-- Botão para editar o depoimento, a edição é feita na mesma linha do depoimento da tabela, 
                                             uma forma muito pratica, desenvolvida apenas com a manipulaçãod o DOM via JS -->
                                        <a data-id= <?= htmlspecialchars($depoimento['id']) ?> class="btn btn-warning editar" title="Editar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                            </svg>
                                        </a>
                                        <!-- Botão para excluir o depoimento -->
                                        <a href="excluir.php? id=<?= htmlspecialchars($depoimento['id']) ?>" class="btn btn-danger" title="Excluir">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x-fill" viewBox="0 0 16 16">
                                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> MoveFit. All rights reserved.</p>
    </footer>
</body>

</html>