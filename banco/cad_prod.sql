-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2020 às 16:27
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cad_prod`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_produto`
--

CREATE TABLE `cadastro_produto` (
  `id` int(3) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `descricao` varchar(60) NOT NULL,
  `valor` varchar(60) NOT NULL,
  `categoria` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_produto`
--

INSERT INTO `cadastro_produto` (`id`, `nome`, `descricao`, `valor`, `categoria`) VALUES
(10, 'Carro', 'pequeno', '12,00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'moveis'),
(2, 'decoracao'),
(3, 'celular'),
(4, 'informatica'),
(5, 'brinquedos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_produto`
--
ALTER TABLE `cadastro_produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categorias_id` (`categoria`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_produto`
--
ALTER TABLE `cadastro_produto`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cadastro_produto`
--
ALTER TABLE `cadastro_produto`
  ADD CONSTRAINT `fk_categorias_id` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
