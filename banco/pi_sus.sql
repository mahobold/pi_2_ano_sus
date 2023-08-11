-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Ago-2023 às 14:00
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pi_sus`
--
CREATE DATABASE IF NOT EXISTS `pi_sus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pi_sus`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `id_medicamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `miligramagem` varchar(100) NOT NULL,
  `imagem` varchar(350) NOT NULL,
  `disponibilidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_medicamento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicamento`, `nome`, `miligramagem`, `imagem`, `disponibilidade`) VALUES
(1, 'Dieimes 3', 'fddf', 'dsfdsf', 'dsfdsf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `datanasc` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `numerocartaosus` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `telefone`, `endereco`, `cpf`, `datanasc`, `email`, `numerocartaosus`, `username`, `senha`) VALUES
(1, 'Dieimes Nuens', 'sdfdsf', 'dsfdsf', 'sdfsdf', 'sdfsdf', 'dsfsdf@sedf', 'dsfdsf', 'dsfsdf', 'dsfdsf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
