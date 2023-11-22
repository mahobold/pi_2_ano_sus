-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22/11/2023 às 12:01
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meucod21_aluno_postar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pi_2023_sus_pessoas`
--

DROP TABLE IF EXISTS `pi_2023_sus_pessoas`;
CREATE TABLE `pi_2023_sus_pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `datanasc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numerocartaosus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `camimg` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pi_2023_sus_pessoas`
--

INSERT INTO `pi_2023_sus_pessoas` (`id_pessoa`, `nome`, `sobrenome`, `telefone`, `endereco`, `cpf`, `datanasc`, `email`, `numerocartaosus`, `senha`, `camimg`) VALUES
(1, 'Maria', 'Hobold', '9809', 'sesc', '1111', '1111', 'sqcx', '5555', '$2y$10$dbU4DMszzv4lAqQS7GzBjOR6UUjNaXXLKBPFdH/hZtQskAxG.Lbiu', '../img/foto_perfil/655dedd9b0840.jpg'),
(3, 'marcela', 'dsdd', 'weeewfr', 'eretfgfgd', 's6xertg', 'ftyf cvgf', 'fhttrtr', 'thrthu', '$2y$10$aLxmgo12N3PnPxRIoujDaO67gOIVkCrfsrp3E.0ZMhvsjnpvSxScG', '../img/Imagens_recebidos/foto_teste.png'),
(5, 'marcela', 'l', '666', '666', '999', '666', '666', 'thrthu', '$2y$10$.zYC2FKnPaIQNoXkLkz3xuiSX4JV2Q7jmxAZt660qxl3RjfghBdZm', '../img/Imagens_recebidos/foto_teste.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pi_2023_sus_pessoas`
--
ALTER TABLE `pi_2023_sus_pessoas`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pi_2023_sus_pessoas`
--
ALTER TABLE `pi_2023_sus_pessoas`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
