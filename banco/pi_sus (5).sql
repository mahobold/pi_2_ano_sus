-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Out-2023 às 14:44
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
-- Estrutura da tabela `cadastro_especialidade`
--

DROP TABLE IF EXISTS `cadastro_especialidade`;
CREATE TABLE IF NOT EXISTS `cadastro_especialidade` (
  `id_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_especialidade`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_especialidade`
--

INSERT INTO `cadastro_especialidade` (`id_especialidade`, `especialidade`) VALUES
(1, 'pi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_medico`
--

DROP TABLE IF EXISTS `cadastro_medico`;
CREATE TABLE IF NOT EXISTS `cadastro_medico` (
  `id_medico` int(11) NOT NULL AUTO_INCREMENT,
  `nomemedico` varchar(300) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `crm` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `especialidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_medico`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_medico`
--

INSERT INTO `cadastro_medico` (`id_medico`, `nomemedico`, `idade`, `crm`, `endereco`, `telefone`, `especialidade`) VALUES
(1, 'oi', 'oi', 'oi', 'oi', 'oi', 'oi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ft`
--

DROP TABLE IF EXISTS `ft`;
CREATE TABLE IF NOT EXISTS `ft` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `camimg` varchar(300) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `datanasc` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `numerocartaosus` varchar(30) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `camimg` varchar(300) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `sobrenome`, `telefone`, `endereco`, `cpf`, `datanasc`, `email`, `numerocartaosus`, `senha`, `camimg`) VALUES
(1, 'maria', 'vitÃ³ria', '(11) 11111-1111', 'oi', '111.111.111-11', '11/11/1111', 'hhhh@gmail.com', '111111111111111', '$2y$10$Be2oolNbAjkZx6f2tXRaveMQR0E8xd6aoZ4GXr1Y6IeDVBPUW3TqO', 'Imagens_recebidos/foto_teste.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
