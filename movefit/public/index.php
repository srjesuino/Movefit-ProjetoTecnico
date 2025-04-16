<!--
index.php
Este arquivo é o ponto de entrada para a aplicação. Ele inclui os cabeçalhos, o conteúdo principal e o rodapé da página.
Ele também importa os estilos e scripts necessários para o funcionamento da página.
Ele utiliza o Bootstrap para o layout responsivo e o Swiper para os carrosséis de imagens.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Movefit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importando o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Importando estilos personalizados -->
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <!-- Importando o CSS do Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Importando o JavaScript do Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Importando o JavaScript personalizado -->
    <script src="../assets/js/main.js"></script>
</head>

<body>
    <?php
    // Incluindo o cabeçalho da página
    include 'inc/header.php';
    // Incluindo o conteúdo principal da página
    include 'inc/main.php';
    // Incluindo o rodapé da página
    include 'inc/footer.php';
    ?>
</body>