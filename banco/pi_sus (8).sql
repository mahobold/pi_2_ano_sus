-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Nov-2023 às 14:36
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
-- Estrutura da tabela `cadastro_adm`
--

DROP TABLE IF EXISTS `cadastro_adm`;
CREATE TABLE IF NOT EXISTS `cadastro_adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cod_login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cam_img` varchar(300) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_adm`
--

INSERT INTO `cadastro_adm` (`id_adm`, `nome`, `cod_login`, `senha`, `cam_img`) VALUES
(1, 'Maria', '12345678', '1234', '../img/Imagens_recebidos/foto_teste.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_especialidade`
--

DROP TABLE IF EXISTS `cadastro_especialidade`;
CREATE TABLE IF NOT EXISTS `cadastro_especialidade` (
  `id_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_especialidade`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_especialidade`
--

INSERT INTO `cadastro_especialidade` (`id_especialidade`, `especialidade`) VALUES
(2, 'ClÃ­nico_geral'),
(3, 'Dentista'),
(4, 'Ginecologista'),
(5, 'Nefrologista'),
(6, 'Neurologista'),
(7, 'Oftalmologista'),
(8, 'Pneumologista'),
(9, 'Otorrinolaringologista');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_medico`
--

INSERT INTO `cadastro_medico` (`id_medico`, `nomemedico`, `idade`, `crm`, `endereco`, `telefone`, `especialidade`) VALUES
(2, 'oi', 'ere', 'oi', 'HEAH', 'htej65', 'oi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardio`
--

DROP TABLE IF EXISTS `cardio`;
CREATE TABLE IF NOT EXISTS `cardio` (
  `id_pessoacardio` int(11) NOT NULL AUTO_INCREMENT,
  `fadiga` varchar(100) NOT NULL,
  `peito` varchar(100) NOT NULL,
  `exame` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoacardio`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardio`
--

INSERT INTO `cardio` (`id_pessoacardio`, `fadiga`, `peito`, `exame`, `data`, `hora`) VALUES
(3, 'erv', 'wg', 'grw', '2023-11-22', '14:04'),
(4, 'WGv', 'wG', 'H2q', '2023-11-11', '15:04'),
(5, 'wbh', 'h3', '3', '2023-11-18', '12:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliger`
--

DROP TABLE IF EXISTS `cliger`;
CREATE TABLE IF NOT EXISTS `cliger` (
  `id_pessoacliger` int(11) NOT NULL AUTO_INCREMENT,
  `febre` varchar(100) NOT NULL,
  `vomito` varchar(100) NOT NULL,
  `nausea` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoacliger`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliger`
--

INSERT INTO `cliger` (`id_pessoacliger`, `febre`, `vomito`, `nausea`, `data`, `hora`) VALUES
(2, '11', '11', 'cq', '2023-11-08', '12:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

DROP TABLE IF EXISTS `dentista`;
CREATE TABLE IF NOT EXISTS `dentista` (
  `id_pessoadentista` int(11) NOT NULL AUTO_INCREMENT,
  `ida` varchar(100) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `aparelho` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoadentista`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ginecol`
--

DROP TABLE IF EXISTS `ginecol`;
CREATE TABLE IF NOT EXISTS `ginecol` (
  `id_pessoaginecol` int(11) NOT NULL AUTO_INCREMENT,
  `preventivo` varchar(100) NOT NULL,
  `diu` varchar(100) NOT NULL,
  `ativa` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoaginecol`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nefro`
--

DROP TABLE IF EXISTS `nefro`;
CREATE TABLE IF NOT EXISTS `nefro` (
  `id_nefro` int(11) NOT NULL AUTO_INCREMENT,
  `colica` varchar(100) NOT NULL,
  `urina` varchar(100) NOT NULL,
  `agua` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_nefro`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `neuro`
--

DROP TABLE IF EXISTS `neuro`;
CREATE TABLE IF NOT EXISTS `neuro` (
  `id_pessoaneuro` int(11) NOT NULL AUTO_INCREMENT,
  `cabeca` varchar(100) NOT NULL,
  `tontura` varchar(100) NOT NULL,
  `convulsao` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoaneuro`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oftal`
--

DROP TABLE IF EXISTS `oftal`;
CREATE TABLE IF NOT EXISTS `oftal` (
  `id_pessoaoftal` int(11) NOT NULL AUTO_INCREMENT,
  `oculos` varchar(100) NOT NULL,
  `cabeca` varchar(100) NOT NULL,
  `ocular` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoaoftal`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `oftal`
--

INSERT INTO `oftal` (`id_pessoaoftal`, `oculos`, `cabeca`, `ocular`, `data`, `hora`) VALUES
(1, '11', '11', '11', '2023-10-20', '12:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `otorrino`
--

DROP TABLE IF EXISTS `otorrino`;
CREATE TABLE IF NOT EXISTS `otorrino` (
  `id_pessoaotorrino` int(11) NOT NULL AUTO_INCREMENT,
  `ouvido` varchar(100) NOT NULL,
  `rinite` varchar(100) NOT NULL,
  `audicao` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoaotorrino`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `sobrenome`, `telefone`, `endereco`, `cpf`, `datanasc`, `email`, `numerocartaosus`, `senha`, `camimg`) VALUES
(2, 'maria', 'h', '65', 'HEAH', '111.111.111-11', '55/55/55', '5555', '555', '$2y$10$s8Zrzv8RoSAe3vqCR7dqDuwqODAPEL0lIdR6ebnCzF8X4P5My3e8a', 'img/Imagens_recebidos/foto_teste.png'),
(4, '44444444444', '444', '(44) 44444-4444', '4444', '444.444.444-44', '44', '44', '44', '$2y$10$qRw67dyS7Ouc53DloLeXCul07HDhyYcy4lfcupQ7DptU1eG87UNSi', '../img/Imagens_recebidos/foto_teste.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pneu`
--

DROP TABLE IF EXISTS `pneu`;
CREATE TABLE IF NOT EXISTS `pneu` (
  `id_pessoapneu` int(11) NOT NULL AUTO_INCREMENT,
  `asma` varchar(100) NOT NULL,
  `fuma` varchar(100) NOT NULL,
  `fadiga` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoapneu`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
