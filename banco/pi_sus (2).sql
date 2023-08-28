-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Ago-2023 às 11:01
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
-- Estrutura da tabela `cardio`
--

DROP TABLE IF EXISTS `cardio`;
CREATE TABLE IF NOT EXISTS `cardio` (
  `id_pessoacardio` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `fadiga` varchar(100) NOT NULL,
  `peito` varchar(100) NOT NULL,
  `exame` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoacardio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliger`
--

DROP TABLE IF EXISTS `cliger`;
CREATE TABLE IF NOT EXISTS `cliger` (
  `id_pessoacliger` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `febre` varchar(100) NOT NULL,
  `vomito` varchar(100) NOT NULL,
  `nausea` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoacliger`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliger`
--

INSERT INTO `cliger` (`id_pessoacliger`, `nome`, `idade`, `febre`, `vomito`, `nausea`) VALUES
(1, 'qc', 'qe', 'cq', 'ce', 'cq');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

DROP TABLE IF EXISTS `dentista`;
CREATE TABLE IF NOT EXISTS `dentista` (
  `id_pessoadent` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `ida` varchar(100) NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `aparelho` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoadent`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dentista`
--

INSERT INTO `dentista` (`id_pessoadent`, `nome`, `idade`, `ida`, `motivo`, `aparelho`) VALUES
(1, 'Dieimes 3', ' w ', 'gw', 'eg', 'h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ginecol`
--

DROP TABLE IF EXISTS `ginecol`;
CREATE TABLE IF NOT EXISTS `ginecol` (
  `id_pessoaginecol` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `preventivo` varchar(100) NOT NULL,
  `diu` varchar(100) NOT NULL,
  `ativa` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoaginecol`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ginecol`
--

INSERT INTO `ginecol` (`id_pessoaginecol`, `nome`, `idade`, `preventivo`, `diu`, `ativa`) VALUES
(1, 'rw', 'g43', 'rb', 'b', 'r');

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
-- Estrutura da tabela `nefro`
--

DROP TABLE IF EXISTS `nefro`;
CREATE TABLE IF NOT EXISTS `nefro` (
  `id_pessoanefro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `colica` varchar(100) NOT NULL,
  `urina` varchar(100) NOT NULL,
  `agua` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoanefro`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nefro`
--

INSERT INTO `nefro` (`id_pessoanefro`, `nome`, `idade`, `colica`, `urina`, `agua`) VALUES
(1, '24eh', '42g', 'gh43gh', 'g', ''),
(2, 'rbeawb', 'bwvb', 'ewb', 'r', ''),
(3, 'grh', 'h', 'rehq', '3', ''),
(4, 'htq', 'qmn', 'trqj', 'tqjn', 'j4q');

-- --------------------------------------------------------

--
-- Estrutura da tabela `neuro`
--

DROP TABLE IF EXISTS `neuro`;
CREATE TABLE IF NOT EXISTS `neuro` (
  `id_pessoaneuro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `tontura` varchar(100) NOT NULL,
  `cabeca` varchar(100) NOT NULL,
  `desmaio` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoaneuro`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `neuro`
--

INSERT INTO `neuro` (`id_pessoaneuro`, `nome`, `idade`, `tontura`, `cabeca`, `desmaio`) VALUES
(1, 'maria', 'ere', 'rer', 'bbB', 'RWbBR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oftal`
--

DROP TABLE IF EXISTS `oftal`;
CREATE TABLE IF NOT EXISTS `oftal` (
  `id_pessoaoftal` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `oculos` varchar(100) NOT NULL,
  `cabeca` varchar(100) NOT NULL,
  `ocular` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoaoftal`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `oftal`
--

INSERT INTO `oftal` (`id_pessoaoftal`, `nome`, `idade`, `oculos`, `cabeca`, `ocular`) VALUES
(1, 'dieimes', ' w ', 'wd', 'ffq', 'fq1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `otorrino`
--

DROP TABLE IF EXISTS `otorrino`;
CREATE TABLE IF NOT EXISTS `otorrino` (
  `id_pessoaotorrino` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `ouvido` varchar(100) NOT NULL,
  `rinite` varchar(100) NOT NULL,
  `audicao` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoaotorrino`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `otorrino`
--

INSERT INTO `otorrino` (`id_pessoaotorrino`, `nome`, `idade`, `ouvido`, `rinite`, `audicao`) VALUES
(1, 'e', 'eb ', 'reb', 'breq', 'bgqe');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `sobrenome`, `telefone`, `endereco`, `cpf`, `datanasc`, `email`, `numerocartaosus`, `senha`, `camimg`) VALUES
(5, 'maria', 'oi', '190', 'sesc', '09929717994', '0132007', 'rrjq4jj@gmail.com', '0999993821', '$2y$10$H2JGiTnvCUqSmOBOobIn..MFvBMr6TfTehISF1TP91.zt14mnoZL6', ''),
(4, 'Dieimes', '', '43988179995', 'Av. Brasil 123', '1111111111', '31022023', 'dlnfldfl@fdsgfg', '1111', '$2y$10$wf7.xDYQujKKinpVm5M1vuNr5N31BrYEDdwLfGD7UtSJM/tq2ez3y', ''),
(6, 'bre', 'h', 'H', '3', 'ERW', 'hr', 'HR', 'h', '$2y$10$zcMPJHiPNaaiaO7KSE6W3.0aQeZ/zJyC21Eiaml6MV3gmWcfubttO', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pneu`
--

DROP TABLE IF EXISTS `pneu`;
CREATE TABLE IF NOT EXISTS `pneu` (
  `id_pessoapneu` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `asma` varchar(100) NOT NULL,
  `fuma` varchar(100) NOT NULL,
  `fadiga` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pessoapneu`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pneu`
--

INSERT INTO `pneu` (`id_pessoapneu`, `nome`, `idade`, `asma`, `fuma`, `fadiga`) VALUES
(1, 'nivjewune', 'vwdb', 'wbe', 'WBr', 'bwr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
