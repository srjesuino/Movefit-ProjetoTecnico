-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/04/2025 às 02:41
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `movefit`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `nota` int(11) NOT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `depoimentos`
--

INSERT INTO `depoimentos` (`id`, `nome`, `comentario`, `nota`, `data`) VALUES
(16, 'Roberto', 'Muito intuitivo! Em poucos minutos já estava mexendo no software como se soubesse há tempos.', 5, '2025-04-15 18:27:00'),
(17, 'Carla', 'Amei como tudo é bem organizado. Consigo encontrar o que desejo de forma simples!', 5, '2025-04-15 18:29:00'),
(18, 'Carolina', 'Testei no celular e ficou bem responsivo. Gostei bastante.', 5, '2025-04-15 18:30:24'),
(19, 'Diego', 'Os estados de loading e sucesso/erro estão bem implementados, garantindo uma UX mais completa e confiável.', 5, '2025-04-15 18:31:48'),
(20, 'Laura ', 'Performance tá excelente. Carregamento rápido e sem travadinhas — nota 10 na otimização!', 5, '2025-04-15 18:33:53'),
(21, 'Julio', 'Sistema bem estável até agora. Testei vários fluxos diferentes e nada bugou.', 5, '2025-04-15 18:34:52'),
(22, 'Isabel', 'Gostei que o layout é leve visualmente, mas ainda assim super funcional. Clean sem ser vazio.', 5, '2025-04-15 18:36:17'),
(23, 'Luis Felipe', 'A navegação entre seções está fluida. Os tempos de carregamento estão baixos e não há travamentos visíveis.', 5, '2025-04-15 18:37:38'),
(24, 'Gabriela', 'A experiência do usuário foi priorizada com sucesso: os fluxos são intuitivos e há feedback visual claro em todas as ações.', 5, '2025-04-15 18:39:36'),
(25, 'Juliana', 'No geral, o sistema demonstra boas práticas de UI/UX, com foco em funcionalidade e clareza.', 5, '2025-04-15 18:42:02');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
