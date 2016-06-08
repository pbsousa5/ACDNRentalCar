-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2016 at 12:47 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

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
`car_id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
`cli_id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `aniversario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doc_habilitacao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `foto_perfil` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Locacao`
--

CREATE TABLE IF NOT EXISTS `Locacao` (
`id_locacao` int(11) NOT NULL,
  `data_devolucao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loc_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Locadora`
--

CREATE TABLE IF NOT EXISTS `Locadora` (
`loc_id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_adm`
--

CREATE TABLE IF NOT EXISTS `usuario_adm` (
`uid` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuario_adm`
--

INSERT INTO `usuario_adm` (`uid`, `name`, `email`, `pass`) VALUES
(1, 'user', 'user@user.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Carro`
--
ALTER TABLE `Carro`
 ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
 ADD PRIMARY KEY (`cli_id`), ADD UNIQUE KEY `doc_habilitacao_UNIQUE` (`doc_habilitacao`), ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `Locacao`
--
ALTER TABLE `Locacao`
 ADD PRIMARY KEY (`id_locacao`,`cli_id`,`car_id`,`loc_id`), ADD KEY `fk_Locacao_Locadora_idx` (`loc_id`), ADD KEY `fk_Locacao_Carro1_idx` (`car_id`), ADD KEY `fk_Locacao_Cliente1_idx` (`cli_id`);

--
-- Indexes for table `Locadora`
--
ALTER TABLE `Locadora`
 ADD PRIMARY KEY (`loc_id`), ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `usuario_adm`
--
ALTER TABLE `usuario_adm`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `email_UNIQUE` (`email`), ADD UNIQUE KEY `uid_UNIQUE` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Carro`
--
ALTER TABLE `Carro`
MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Locacao`
--
ALTER TABLE `Locacao`
MODIFY `id_locacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Locadora`
--
ALTER TABLE `Locadora`
MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario_adm`
--
ALTER TABLE `usuario_adm`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
