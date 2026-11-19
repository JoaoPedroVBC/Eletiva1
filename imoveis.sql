-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2026 às 08:16
-- Versão do servidor: 10.11.16-MariaDB
-- Versão do PHP: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imoveis`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `imo_id` int(11) NOT NULL,
  `imo_rua` varchar(150) DEFAULT NULL,
  `imo_bairro` varchar(50) NOT NULL,
  `imo_num` int(11) NOT NULL,
  `imo_tipo` varchar(20) DEFAULT NULL,
  `imo_valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imoveis`
--

INSERT INTO `imoveis` (`imo_id`, `imo_rua`, `imo_bairro`, `imo_num`, `imo_tipo`, `imo_valor`) VALUES
(2, 'José bonifacio Mori', 'Vila Marques', 323, 'apartamento', 1555.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `locatario`
--

CREATE TABLE `locatario` (
  `loc_id` int(11) NOT NULL,
  `loc_nome` varchar(100) NOT NULL,
  `loc_email` varchar(50) NOT NULL,
  `loc_cpf` varchar(50) NOT NULL,
  `loc_idade` int(11) NOT NULL,
  `loc_telefone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `prop_id` int(11) NOT NULL,
  `prop_nome` varchar(100) NOT NULL,
  `prop_email` varchar(50) NOT NULL,
  `prop_cpf` varchar(50) NOT NULL,
  `prop_idade` int(11) NOT NULL,
  `pro_telefone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`imo_id`);

--
-- Índices de tabela `locatario`
--
ALTER TABLE `locatario`
  ADD PRIMARY KEY (`loc_id`);

--
-- Índices de tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`prop_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `imo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `locatario`
--
ALTER TABLE `locatario`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
