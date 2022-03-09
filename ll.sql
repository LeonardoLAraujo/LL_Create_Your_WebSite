-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Mar-2022 às 23:23
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ll`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratar`
--

CREATE TABLE `contratar` (
  `id` int(4) NOT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `msg` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contratar`
--

INSERT INTO `contratar` (`id`, `nome`, `email`, `msg`) VALUES
(3, 'y@tt', 'leonardoleal@gmail.com', 'lmkkmlç'),
(4, 'leonardo', 'leonardoleal@gmail.com', 'Quero um site de esporte - 119823223132'),
(5, 'ef', 'leonardoleal012@gmail.com', 'Quero um site de anime');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_faleconosco`
--

CREATE TABLE `tb_faleconosco` (
  `id` int(4) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `msg` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_faleconosco`
--

INSERT INTO `tb_faleconosco` (`id`, `nome`, `email`, `msg`) VALUES
(5, 'y@tt', 'leonardoleal45@gmail.com', '.´~ç,'),
(6, 'ef', 'ef@fef', 'dr');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contratar`
--
ALTER TABLE `contratar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_faleconosco`
--
ALTER TABLE `tb_faleconosco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contratar`
--
ALTER TABLE `contratar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_faleconosco`
--
ALTER TABLE `tb_faleconosco`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
