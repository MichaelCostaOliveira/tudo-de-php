-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Jun-2018 às 01:11
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crud_inserir`
--

DROP TABLE IF EXISTS `crud_inserir`;
CREATE TABLE IF NOT EXISTS `crud_inserir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `crud_inserir`
--

INSERT INTO `crud_inserir` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Michael Ricardo Costa de Oliveira', 'maicon__costa@hotmail.com', '123'),
(2, 'Michael Ricardo Costa de Oliveira', 'maicon__costa@hotmail.com', '1234'),
(3, 'Michael Ricardo Costa de Oliveira', 'superfoda@hotmail.com', '123'),
(4, 'Michael Ricardo Costa de Oliveira', 'maicon__costa@hotmail.com', '147'),
(5, 'Michael Ricardo Costa de Oliveira', 'maicon__costa@hotmail.com', '159'),
(6, 'Michael Ricardo Costa de Oliveira', 'maicon__costa@hotmail.com', '1245'),
(7, 'Michael Ricardo Costa de Oliveira', 'michaelrcostadeoliveira@gmail.com', '789'),
(8, 'Stev Sttifler ', 'fodao@hotmail.com', '157'),
(9, 'Maik Master', 'soufodao@hotmail.com', 'michael123'),
(10, 'Maik', 'soufoda@gmail.com', '123456789'),
(11, 'jhdfnbkl', 'isudhvf@djkvsk', 'lk xv lvm'),
(12, 'qufirugherugheeirgeit', 'avjhsfjivofjv@jkcjnxvk', 'iwduvwdkhvfj'),
(13, 'Ana Lucia', 'lucia@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `valor` varchar(220) NOT NULL,
  `imagem` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`, `imagem`) VALUES
(6, 'Celular S7 Edge', 'R$2000,00', 'CRUD/crud/imagen/celular.jpg'),
(7, 'Relogio', 'R$1500,00', 'CRUD/crud/imagen/relogio.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
