-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2016 at 11:45 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carro`
--

CREATE TABLE IF NOT EXISTS `Carro` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `aniversario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doc_habilitacao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `foto_perfil` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  UNIQUE KEY `doc_habilitacao_UNIQUE` (`doc_habilitacao`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Locacao`
--

CREATE TABLE IF NOT EXISTS `Locacao` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Locadora`
--

CREATE TABLE IF NOT EXISTS `Locadora` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`loc_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Locadora`
--

INSERT INTO `Locadora` (`loc_id`, `nome`, `endereco`, `telefone`, `email`) VALUES
(1, 'Matriz', 'Av 20, Numero 36, Bairro: Pinhal', '123513', 'mail@mail.com'),
(13, 'ACDN - Centro', 'Rua do Sol, N 36, Bairro: Pinhal', '134552', 'centro@acdn.com'),
(14, 'ACDN - Interior', 'Rua do Interior, N 200, Bairro Algu', '990129812', 'interior@acdn.com'),
(15, 'ACDN - Internacional', '56th st, Manhattan, NY', '982727180', 'international-us@acdn.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_adm`
--

CREATE TABLE IF NOT EXISTS `usuario_adm` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `uid_UNIQUE` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuario_adm`
--

INSERT INTO `usuario_adm` (`uid`, `name`, `email`, `pass`) VALUES
(1, 'user', 'user@user.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Locacao`
--
ALTER TABLE `Locacao`
  ADD CONSTRAINT `fk_Locacao_Carro1` FOREIGN KEY (`car_id`) REFERENCES `Carro` (`car_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Cliente1` FOREIGN KEY (`cli_id`) REFERENCES `Cliente` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Locacao_Locadora` FOREIGN KEY (`loc_id`) REFERENCES `Locadora` (`loc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
