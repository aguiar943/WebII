-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 12-Jul-2022 às 12:25
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
-- Estrutura da tabela `ca_fornecedor`
--

CREATE TABLE `ca_fornecedor` (
  `id` int(11) NOT NULL,
  `fo_social` varchar(60) NOT NULL,
  `fo_fantasia` varchar(60) NOT NULL,
  `fo_cnpj` varchar(14) NOT NULL,
  `fo_ie` varchar(11) NOT NULL,
  `fo_telefone` varchar(11) NOT NULL,
  `fo_email` varchar(55) NOT NULL,
  `fo_provedor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_fornecedor`
--

INSERT INTO `ca_fornecedor` (`id`, `fo_social`, `fo_fantasia`, `fo_cnpj`, `fo_ie`, `fo_telefone`, `fo_email`, `fo_provedor`) VALUES
(1, 'aa aa aa aa aa', 'aa aa aa aa aa', '11111111111112', '11111111114', '11111111118', 'asdasdasd3333.', '@yahoo.com.br'),
(2, 'sdfsdfsdfdfg', 'sdfsDDD', '33333333333333', '33333333333', '33333333333', 'dfgfdgfg.dfgd44', '@hotmail.com'),
(3, 'asasdasda', 'sdasdasd', '11111111111113', '11111111111', '11111111111', 'asdasdasd', '@outlook.com.br'),
(4, 'asasdasda', 'sdasdasd', '11111111111119', '11111111111', '11111111111', 'asdasdasd', '@gmail.com'),
(9, 'fgdfgdfgdfgdfg', 'dfgdfgdfgdfgdfg', '55555555555555', '55555555555', '55555555555', 'dfgdfgdgdffdgd@gmail.com', ''),
(10, 'fffffffffffffffffffff', 'fffffffffffffffffffff', '44444444444444', '44444444444', '44444444444', 'fffffffffffffffffffff@gmail.com', ''),
(11, 'tttttttttttttttt', 'tttttttttttttttt', '11111111111111', '11111111111', '11111111111', 'tttttttttttttttt', '@gmail.com'),
(12, 'todayinc', 'today inc', '22222222222222', '22222222222', '22222222222', 'dfdfdfdfdfdf', '@gmail.com'),
(13, 'fantasy incz', 'fantasy incz', '25555555555551', '55555555551', '55555555551', 'ddddddddddddd', '@outlook.com.br'),
(14, 'fanstar', 'fanstar', '34343434454545', '56565656565', '56565656565', '1sdsd2as.asd2sd3', '@yahoo.com.br'),
(15, 'popopopopz', 'p p p p p', '45678979897089', '44545454545', '98989898989', 'ghghghghgh.15aawff8', '@gmail.com'),
(16, 'sfsdfsd', 'sdfsdfsdfsdf', '67676767676767', '67767676767', '56565656565', 'sdfsdfsdfsdf', '@gmail.com');

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
(3, 'imagens/Placa de Vídeo/1/Detalhes/lista_vacinas_mauricio.jpg', 'Detalhes', 1),
(4, 'imagens/Placa de Vídeo/1/Detalhes/exames_mauricio_unimed_nl.jpg', 'Detalhes', 1),
(5, 'imagens/Monitor/2/Vitrine/prod1.png', 'Vitrine', 2),
(6, 'imagens/Monitor/2/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 2),
(7, 'imagens/Monitor/2/Detalhes/site2 - Copia.png', 'Detalhes', 2),
(8, 'imagens/Placa de Vídeo/3/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 3),
(9, 'imagens/Placa de Vídeo/3/Detalhes/site1.png', 'Detalhes', 3),
(12, 'imagens/Monitor/4/Detalhes/prod1.png', 'Detalhes', 4),
(13, 'imagens/Monitor/4/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 4),
(23, 'imagens/Monitor/9/Vitrine/site2 - Copia.png', 'Vitrine', 9),
(24, 'imagens/Monitor/9/Vitrine/site1 - Copia.png', 'Vitrine', 9),
(25, 'imagens/Monitor/9/Detalhes/site1.png', 'Detalhes', 9),
(26, 'imagens/Monitor/9/Detalhes/site1.png', 'Detalhes', 9),
(27, 'imagens/Tênis/10/Vitrine/contato_cesar_nl.png', 'Vitrine', 10),
(28, 'imagens/Tênis/10/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 10),
(29, 'imagens/Tênis/10/Detalhes/prod1.png', 'Detalhes', 10),
(30, 'imagens/Tênis/10/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 10),
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
(45, 'imagens/Monitor/5/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 5),
(46, 'imagens/Calça/12/Vitrine/prod1.png', 'Vitrine', 12),
(87, 'imagens/Calça/34/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 34),
(88, 'imagens/Bermuda/34/Detalhes/contato_cesar_nl.png', 'Detalhes', 34),
(89, 'imagens/Bermuda/35/Vitrine/contato_cesar_nl.png', 'Vitrine', 35),
(90, 'imagens/Bermuda/35/Vitrine/thumb-1920-601846.jpg', 'Vitrine', 35),
(91, 'imagens/Bermuda/35/Detalhes/prod1.png', 'Detalhes', 35),
(92, 'imagens/Bermuda/35/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 35),
(93, 'imagens/Bermuda/36/Vitrine/prod1.png', 'Vitrine', 36),
(94, 'imagens/Bermuda/36/Detalhes/contato_cesar_nl.png', 'Detalhes', 36),
(95, 'imagens/Calça/37/Vitrine/diagrama_caso_uso_badminton.jpg', 'Vitrine', 37),
(96, 'imagens/Calça/37/Vitrine/prod1.png', 'Vitrine', 37),
(97, 'imagens/Calça/37/Detalhes/thumb-1920-601846.jpg', 'Detalhes', 37),
(98, 'imagens/Bermuda/37/Detalhes/prod1.png', 'Detalhes', 37),
(99, 'imagens/Calça/38/Vitrine/exames_mauricio_unimed_nl.jpg', 'Vitrine', 38),
(100, 'imagens/Calça/38/Detalhes/lista_vacinas_mauricio.jpg', 'Detalhes', 38);

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
(1, 'Chip Gráfico', 'GTX 750', '416', '516', 1234567891234, 1234567891234, 'PC', 12345678, 1, 1),
(3, 'Placa Gráfica', 'Placa Grafica', '1200', '1523', 1234567891234, 1234567891234, 'PC', 12345678, 1, 1),
(4, 'Tela de computador', '227F', '3000', '3200', 1234567891234, 1234567891234, 'PC', 12345678, 17, 2),
(5, 'Tela de computador', '22B1HM5', '3000', '3200', 1234567891234, 1234567891234, 'PC', 12345678, 19, 2),
(10, 'Calçado', 'Shox', '100', '140', 1234567891234, 1234567891234, 'KG', 12345678, 9, 10),
(34, 'asasasasDDDD', 'ss ss ss ss sss', '22222', '2', 4444444444444, 3333333333333, 'UN', 88888888, 2, 6),
(35, 'sdsdsd', 'sadsdsd', '11', '11', 4444444444444, 4444444444444, 'UN', 44444444, 14, 7),
(36, 'dfsfdsdfsf', 'ssdsdsdsdsd', '6665', '6666', 4444444444444, 4444444444444, 'UN', 44444444, 14, 7),
(37, 'sdfsfsdfsdfsdfdf', 'sdfsd fsdf', '4444', '4444', 2444444444441, 2444444444444, 'MT', 24444444, 2, 6),
(38, 'sdsd', 'sdsdsd', '333', '333', 5555555555555, 5555555555555, 'PC', 55555555, 14, 6);

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
-- Estrutura da tabela `ca_usuario`
--

CREATE TABLE `ca_usuario` (
  `us_idl` int(11) NOT NULL,
  `us_cpf` varchar(11) DEFAULT NULL,
  `us_email` varchar(50) DEFAULT NULL,
  `us_nome` varchar(100) DEFAULT NULL,
  `us_rg` varchar(12) DEFAULT NULL,
  `us_celular` varchar(11) DEFAULT NULL,
  `us_telefone` varchar(11) DEFAULT NULL,
  `us_senha` varchar(255) DEFAULT NULL,
  `us_cartao` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ca_usuario`
--

INSERT INTO `ca_usuario` (`us_idl`, `us_cpf`, `us_email`, `us_nome`, `us_rg`, `us_celular`, `us_telefone`, `us_senha`, `us_cartao`) VALUES
(1, '123456', 'DFSDFSDFF', 'DFGDFGDFG', '111111111111', '11111111111', '11111111111', '202cb962ac59075b964b07152d234b70', '11111111111'),
(2, '12345698741', 'dsdsdsdsdsd', 'vasco', '12365478965', '5236974126', '1236547896', 'fcea920f7412b5da7be0cf42b8c93759', '15874569812');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 11, 10),
(42, 30, 17),
(43, 31, 18),
(44, 31, 17),
(45, 32, 18),
(46, 32, 17),
(47, 33, 32),
(48, 34, 10),
(49, 34, 0),
(50, 34, 12),
(51, 34, 11),
(52, 34, 0),
(53, 34, 0),
(54, 35, 13),
(55, 35, 15),
(56, 36, 32),
(57, 37, 0),
(58, 37, 0),
(59, 37, 29),
(60, 37, 22),
(61, 37, 0),
(62, 38, 14),
(63, 38, 25),
(64, 1, 12),
(65, 1, 11),
(66, 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `rg` bigint(11) NOT NULL,
  `celular1` bigint(11) NOT NULL,
  `celular2` bigint(11) NOT NULL,
  `cartao` bigint(11) NOT NULL,
  `provedor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `cpf`, `rg`, `celular1`, `celular2`, `cartao`, `provedor`) VALUES
(3, 'valmir@gmail.com', '111111111111111', 'valmir', 11111111112, 33333333333, 33333333333, 3333333333, 33333333333, ''),
(4, 'blackgil@gmail.com', '123456', 'marcone', 11111111113, 11111111111, 11111111111, 1111111111, 11111111111, ''),
(5, 'vinic@gmail', '123456', 'vinicius', 11111111111, 11111111111, 11111111111, 1111111111, 11111111111, ''),
(6, 'gilmar@gmail.com', '123456', 'sdfsdfsdfsdfdf', 11111111111, 11111111111, 11111111111, 1111111111, 11111111111, ''),
(14, 'mauricio@gmail.com', '123456', 'mauricio', 1234567890, 12345698745, 12365478523, 5236987456, 12345698745, '');

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
-- Índices para tabela `ca_fornecedor`
--
ALTER TABLE `ca_fornecedor`
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
-- Índices para tabela `ca_usuario`
--
ALTER TABLE `ca_usuario`
  ADD PRIMARY KEY (`us_idl`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rel_produto_cor`
--
ALTER TABLE `rel_produto_cor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
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
-- AUTO_INCREMENT de tabela `ca_fornecedor`
--
ALTER TABLE `ca_fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `ca_imagens`
--
ALTER TABLE `ca_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `ca_marcas`
--
ALTER TABLE `ca_marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `ca_produtos`
--
ALTER TABLE `ca_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `ca_subcategorias`
--
ALTER TABLE `ca_subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `ca_usuario`
--
ALTER TABLE `ca_usuario`
  MODIFY `us_idl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rel_produto_cor`
--
ALTER TABLE `rel_produto_cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
