-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2019 às 20:42
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(16) DEFAULT NULL,
  `r_social` varchar(16) DEFAULT NULL,
  `inscricao` varchar(16) DEFAULT NULL,
  `cnpj` varchar(16) DEFAULT NULL,
  `bairro` varchar(16) DEFAULT NULL,
  `endereco` varchar(16) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(16) DEFAULT NULL,
  `responsavel` varchar(16) DEFAULT NULL,
  `FK_cidade_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `r_social`, `inscricao`, `cnpj`, `bairro`, `endereco`, `cep`, `telefone`, `email`, `responsavel`, `FK_cidade_id`) VALUES
(5, 'le', '45', '45', '45', 'g', 'l', 45, 45, 'le', 'bruno', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD KEY `FK_cliente_1` (`FK_cidade_id`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_cliente_1` FOREIGN KEY (`FK_cidade_id`) REFERENCES `cidade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
