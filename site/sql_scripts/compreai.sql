-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 09-Maio-2022 às 04:55
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `compreai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ca_categorias`
--

CREATE TABLE `ca_categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_categorias`
--

INSERT INTO `ca_categorias` (`id`, `nome`) VALUES
(1, 'Informática'),
(2, 'Vestuário'),
(3, 'Eletrodomésticos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ca_cores`
--

CREATE TABLE `ca_cores` (
  `id` int(11) NOT NULL,
  `nome` varchar(18) NOT NULL,
  `cd_hex` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_cores`
--

INSERT INTO `ca_cores` (`id`, `nome`, `cd_hex`) VALUES
(1, 'Vermelho', '#FF0000'),
(2, 'Vermelho Escuro', '#8B0000'),
(3, 'Vermelho Claro', '#d33a3a'),
(4, 'Azul', '#0000FF'),
(5, 'Azul Escuro', '#00008B'),
(6, 'Azul Claro', '#BFEFFF'),
(7, 'Verde', '#00FF00'),
(8, 'Verde Escuro', '#006400'),
(9, 'Verde Claro', '#90EE90'),
(10, 'Amarelo', '#FFFF00'),
(11, 'Amarelo Queimado', '#FFD700'),
(12, 'Amarelo Claro', '#EEE8AA'),
(13, 'Rosa', '#FF69B4'),
(14, 'Rosa Escuro', '#8B0A50'),
(15, 'Rosa Claro', '#FF82AB'),
(16, 'Marrom', '#CD661D'),
(17, 'Marrom Escuro', '#8B4513'),
(18, 'Marrom Claro', '#CD853F'),
(22, 'Laranja', '#FF7F00'),
(23, 'Laranja Escuro', '#EE7621'),
(24, 'Laranja Claro', '#EE7942'),
(25, 'Roxo', '#A020F0'),
(26, 'Roxo Escuro', '#551A8B'),
(27, 'Roxo Claro', '#AB82FF'),
(28, 'Cinza', '#BEBEBE'),
(29, 'Cinza Escuro', '#696969'),
(30, 'Cinza Claro', '#EEE9E9'),
(31, 'Branco', '#000000'),
(32, 'Preto', '#FFFFFF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ca_imagens`
--

CREATE TABLE `ca_imagens` (
  `id` int(11) NOT NULL,
  `caminho` varchar(70) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_imagens`
--

INSERT INTO `ca_imagens` (`id`, `caminho`, `categoria`, `id_produto`) VALUES
(1, 'imagens/Bermuda/1/Vitrine/prod1.png', 'Vitrine', 1),
(2, 'imagens/Bermuda/1/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 1),
(3, 'imagens/Placa de Vídeo/1/Detalhes/prod1.png', 'Detalhes', 1),
(4, 'imagens/Placa de Vídeo/1/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 1),
(5, 'imagens/Monitor/2/Vitrine/prod1.png', 'Vitrine', 2),
(6, 'imagens/Monitor/2/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 2),
(7, 'imagens/Monitor/2/Detalhes/site2 - Copia.png', 'Detalhes', 2),
(8, 'imagens/Placa de Vídeo/3/Vitrine/prod1.png', 'Vitrine', 3),
(9, 'imagens/Placa de Vídeo/3/Detalhes/site1.png', 'Detalhes', 3),
(12, 'imagens/Monitor/4/Detalhes/prod1.png', 'Detalhes', 4),
(13, 'imagens/Monitor/4/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 4),
(23, 'imagens/Monitor/9/Vitrine/site2 - Copia.png', 'Vitrine', 9),
(24, 'imagens/Monitor/9/Vitrine/site1 - Copia.png', 'Vitrine', 9),
(25, 'imagens/Monitor/9/Detalhes/site1.png', 'Detalhes', 9),
(26, 'imagens/Monitor/9/Detalhes/site1.png', 'Detalhes', 9),
(27, 'imagens/Tênis/10/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 10),
(28, 'imagens/Tênis/10/Vitrine/site1.png', 'Vitrine', 10),
(29, 'imagens/Tênis/10/Detalhes/site2.png', 'Detalhes', 10),
(30, 'imagens/Tênis/10/Detalhes/site1.png', 'Detalhes', 10),
(31, 'imagens/Placa de Vídeo/11/Vitrine/prod1.png', 'Vitrine', 11),
(32, 'imagens/Placa de Vídeo/11/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 11),
(33, 'imagens/Bermuda/11/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 11),
(34, 'imagens/Placa de Vídeo/11/Detalhes/site1.png', 'Detalhes', 11),
(35, 'imagens/Monitor/4/Vitrine/prod1.png', 'Vitrine', 4),
(36, 'imagens/Monitor/5/Vitrine/prod1.png', 'Vitrine', 5),
(37, 'imagens/Monitor/2/Vitrine/prod1.png', 'Detalhes', 2),
(38, 'imagens/Placa de Vídeo/3/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 3),
(39, 'imagens/Placa de Vídeo/3/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 3),
(40, 'imagens/Monitor/4/Vitrine/prod1.png', 'Vitrine', 4),
(41, 'imagens/Monitor/4/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 4),
(42, 'imagens/Monitor/4/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 4),
(43, 'imagens/Monitor/5/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 5),
(44, 'imagens/Monitor/5/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 5),
(45, 'imagens/Monitor/5/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ca_marcas`
--

CREATE TABLE `ca_marcas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_marcas`
--

INSERT INTO `ca_marcas` (`id`, `nome`) VALUES
(1, 'NVIDIA'),
(2, 'AMD Radeon'),
(3, 'Philips'),
(4, 'DELL'),
(5, 'Lacoste'),
(6, 'Hering'),
(7, 'Levis'),
(8, 'Dolce & Gabbana'),
(9, 'Nike'),
(10, 'Adidas'),
(11, 'Levis'),
(12, 'Dolce & Gabbana'),
(13, 'Nike'),
(14, 'Adidas'),
(15, 'Brastemp'),
(16, 'Consul'),
(17, 'Samsung'),
(19, 'AOC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ca_produtos`
--

CREATE TABLE `ca_produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `modelo` varchar(16) DEFAULT NULL,
  `preco_custo` decimal(10,0) NOT NULL,
  `preco_venda` decimal(10,0) NOT NULL,
  `cd_barras` bigint(13) NOT NULL,
  `cd_referencia` bigint(13) NOT NULL,
  `unidade` varchar(2) NOT NULL,
  `ncm` bigint(8) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_produtos`
--

INSERT INTO `ca_produtos` (`id`, `descricao`, `modelo`, `preco_custo`, `preco_venda`, `cd_barras`, `cd_referencia`, `unidade`, `ncm`, `id_marca`, `id_subcategoria`) VALUES
(1, 'Chip Gráfico', 'GTX 750', '400', '500', 500, 1234567891234, 'PC', 12345678, 1, 1),
(2, 'Tela de Computador', 'S2421HN', '2800', '3100', 3100, 1234567891234, 'PC', 12345678, 4, 2),
(3, 'Placa Gráfica', 'RX 6500', '1200', '1523', 1523, 1234567891234, 'PC', 12345678, 1, 1),
(4, 'Tela de computador', '227F', '3000', '3200', 3200, 1234567891234, 'PC', 12345678, 17, 2),
(5, 'Tela de computador', '22B1HM5', '3000', '3200', 3200, 1234567891234, '', 12345678, 19, 2),
(10, 'Calçado', 'Shox', '100', '140', 140, 1234567891234, 'KG', 12345678, 9, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ca_subcategorias`
--

CREATE TABLE `ca_subcategorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_subcategorias`
--

INSERT INTO `ca_subcategorias` (`id`, `nome`, `id_categoria`) VALUES
(1, 'Placa de Vídeo', 1),
(2, 'Monitor', 1),
(3, 'Teclado', 1),
(4, 'Camiseta', 2),
(5, 'Camisa', 2),
(6, 'Calça', 2),
(7, 'Bermuda', 2),
(8, 'Sapatênis', 2),
(9, 'Sapato', 2),
(10, 'Tênis', 2),
(11, 'Meia', 2),
(12, 'Geladeira', 3),
(13, 'Micro-Ondas', 3),
(14, 'Fogão', 3),
(15, 'Máquina de Lavar', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rel_produto_cor`
--

CREATE TABLE `rel_produto_cor` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rel_produto_cor`
--

INSERT INTO `rel_produto_cor` (`id`, `id_produto`, `id_cor`) VALUES
(1, 3, 16),
(2, 4, 32),
(3, 5, 32),
(4, 6, 32),
(5, 7, 10),
(6, 8, 10),
(7, 9, 10),
(8, 10, 10),
(9, 11, 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ca_categorias`
--
ALTER TABLE `ca_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ca_cores`
--
ALTER TABLE `ca_cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ca_imagens`
--
ALTER TABLE `ca_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ca_marcas`
--
ALTER TABLE `ca_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ca_produtos`
--
ALTER TABLE `ca_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ca_subcategorias`
--
ALTER TABLE `ca_subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rel_produto_cor`
--
ALTER TABLE `rel_produto_cor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ca_categorias`
--
ALTER TABLE `ca_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ca_cores`
--
ALTER TABLE `ca_cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `ca_imagens`
--
ALTER TABLE `ca_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `ca_marcas`
--
ALTER TABLE `ca_marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `ca_produtos`
--
ALTER TABLE `ca_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `ca_subcategorias`
--
ALTER TABLE `ca_subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `rel_produto_cor`
--
ALTER TABLE `rel_produto_cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
