-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jul-2021 às 01:34
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcategoria` int(11) NOT NULL,
  `descricao_curta` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `descricao_longa` text COLLATE utf8mb4_bin NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descricao_curta` (`descricao_curta`),
  KEY `id_subcategoria` (`id_subcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos_fotos`
--

DROP TABLE IF EXISTS `tb_produtos_fotos`;
CREATE TABLE IF NOT EXISTS `tb_produtos_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_subcategorias`
--

DROP TABLE IF EXISTS `tb_subcategorias`;
CREATE TABLE IF NOT EXISTS `tb_subcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `subcategoria` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subcategoria` (`subcategoria`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
