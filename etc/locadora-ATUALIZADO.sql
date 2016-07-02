-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2016 às 18:54
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

DROP TABLE IF EXISTS `carro`;
CREATE TABLE IF NOT EXISTS `carro` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `chassi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placa` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cor` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`car_id`, `chassi`, `placa`, `cor`, `modelo`, `marca`, `ano`, `foto`) VALUES
(3, 'JT2JA82J1SXXXXXXX', 'NHG2020', 'CINZA', 'CELTA', 'CHEVROLET', 2011, NULL),
(4, 'JT2JA82J1SXXXXXXX', 'NNN0000', 'PRETO', 'CLASSIC', 'CHEVROLET', 2013, NULL),
(5, 'JT2JA82J1SXXXXHHH', 'GHH8080', 'LARANJA', 'RENEGADE', 'JEEP', 2016, NULL),
(6, 'TK2JA82J1SXXXXFGH', 'NWL3333', 'PRETO', 'FRONTIER', 'NISSAN', 2010, NULL),
(7, 'T2JA82J1SXXXXJJJ', 'JJJ0000', 'BRANCO', 'C4', 'CITROEN', 2015, NULL),
(8, 'T2JA82J1SXXXXJJJ', 'JJJ0000', 'BRANCO', 'C4', 'CITROEN', 2015, NULL),
(9, 'T2JA82J1SXXXXJJJ', 'JJK0000', 'BRANCO', 'C3', 'CITROEN', 2015, NULL),
(10, 'T2JA82J1SXXXXJJJ', 'JJL0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(11, 'T2JA82J1SXXXXJJJ', 'JJM0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(12, 'T2JA82J1SXXXXJJJ', 'JJN0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(13, 'T2JA82J1SXXXXJJJ', 'JJO0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(14, 'T2JA82J1SXXXXJJJ', 'JJP0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(15, 'T2JA82J1SXXXXJJJ', 'JJJ0000', 'BRANCO', 'C4', 'CITROEN', 2015, NULL),
(16, 'T2JA82J1SXXXXJJJ', 'JJK0000', 'BRANCO', 'C3', 'CITROEN', 2015, NULL),
(17, 'T2JA82J1SXXXXJJJ', 'JJL0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(18, 'T2JA82J1SXXXXJJJ', 'JJM0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(19, 'T2JA82J1SXXXXJJJ', 'JJN0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(20, 'T2JA82J1SXXXXJJJ', 'JJO0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(21, 'T2JA82J1SXXXXJJJ', 'JJP0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(22, 'T2JA82J1SXXXXJJJ', 'JJJ0000', 'BRANCO', 'C4', 'CITROEN', 2015, NULL),
(23, 'T2JA82J1SXXXXJJJ', 'JJK0000', 'BRANCO', 'C3', 'CITROEN', 2015, NULL),
(24, 'T2JA82J1SXXXXJJJ', 'JJL0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(25, 'T2JA82J1SXXXXJJJ', 'JJM0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(26, 'T2JA82J1SXXXXJJJ', 'JJN0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(27, 'T2JA82J1SXXXXJJJ', 'JJO0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(28, 'T2JA82J1SXXXXJJJ', 'JJP0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL),
(29, 'T2JA82J1SXXXXJJJ', 'JJQ0000', 'BRANCO', 'VOYAGE', 'VOLKSWAGEN', 2015, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aniversario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doc_habilitacao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `foto_perfil` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `doc_habilitacao_UNIQUE` (`doc_habilitacao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `nome`, `sobrenome`, `endereco`, `aniversario`, `doc_habilitacao`, `email`, `senha`, `foto_perfil`) VALUES
(1, 'Kelly', 'Correia', NULL, '1994-10-18', NULL, 'ksuenny@gmail.com', '123', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

DROP TABLE IF EXISTS `locacao`;
CREATE TABLE IF NOT EXISTS `locacao` (
  `id_locacao` int(11) NOT NULL AUTO_INCREMENT,
  `data_devolucao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loc_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `data_retirada` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_locacao`,`cli_id`,`car_id`,`loc_id`),
  KEY `fk_Locacao_Locadora_idx` (`loc_id`),
  KEY `fk_Locacao_Carro1_idx` (`car_id`),
  KEY `fk_Locacao_Cliente1_idx` (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locadora`
--

DROP TABLE IF EXISTS `locadora`;
CREATE TABLE IF NOT EXISTS `locadora` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`loc_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `locadora`
--

INSERT INTO `locadora` (`loc_id`, `nome`, `endereco`, `telefone`, `email`) VALUES
(13, 'ACDN - Centro2', 'Rua do Sol, N 36, Bairro: Pinhal', '134552', 'centro@acdn.com'),
(14, 'ACDN - Interior', 'Rua do Interior, N 200, Bairro Algu', '990129812', 'interior@acdn.com'),
(15, 'ACDN - Internacional', '56th st, Manhattan, NY', '982727180', 'international-us@acdn.com'),
(16, 'ACDN - Filial', 'Rua Tal, avenida 4, Bairro: Vinhais', '9093108301', 'filial@acdn.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_adm`
--

DROP TABLE IF EXISTS `usuario_adm`;
CREATE TABLE IF NOT EXISTS `usuario_adm` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `uid_UNIQUE` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario_adm`
--

INSERT INTO `usuario_adm` (`uid`, `name`, `email`, `pass`) VALUES
(1, 'user', 'user@user.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `locacao`
--
ALTER TABLE `locacao`
  ADD CONSTRAINT `fk_Locacao_Carro1` FOREIGN KEY (`car_id`) REFERENCES `carro` (`car_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Cliente1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Locadora` FOREIGN KEY (`loc_id`) REFERENCES `locadora` (`loc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
