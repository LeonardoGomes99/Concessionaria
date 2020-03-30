-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30/03/2020 às 04:47
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lossantosauto`
--
CREATE DATABASE IF NOT EXISTS `lossantosauto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lossantosauto`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `detalhes` text NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `cars`
--

INSERT INTO `cars` (`id`, `marca`, `modelo`, `preco`, `detalhes`, `imagem`) VALUES
(1, 'Honda', 'Civic 2020', 97900, 'Primeiro carro da Honda produzido no Brasil e modelo mais vendido da marca ao redor do mundo, o Civic tem importância histórica para a marca. Fabricado em Sumaré há cinco gerações, o Honda Civic revolucionou o mercado em sua décima geração, popularmente conhecida como New Civic, e manteve o perfil ousado nos modelos seguintes. ', 'src/public/carros/civic 2020.jpeg'),
(2, 'Honda', 'Fit 2020', 62000, 'Lançado no Brasil em 2003, o Fit ganhou sua segunda geração no país em 2008 e a terceira - e atual - em 2014. O modelo, produzido em Sumaré (SP), faz sucesso há mais de 15 anos por combinar a versatilidade de uma minivan com o tamanho compacto de um hatch.', 'src/public/carros/fit 2020.jpeg'),
(3, 'Volkswagen', 'Saveiro 2021', 54370, 'Lançada no Brasil em 1982 como a quarta integrante da família Gol, a Volkswagen Saveiro começou a ser vendida com motor 1.6 refrigerado a ar e, em 1984, passou a adotar motor refrigerado a água. Entre 1989 e 1991, a Saveiro também contou com um propulsor a diesel que equipava exclusivamente os veículos para exportação. ', 'src/public/carros/saveiro 2021.jpeg'),
(4, 'Volkswagen', 'Gol 2021', 48090, 'Por 25 anos, o Volkswagen Gol foi o carro mais vendido do Brasil. Foi apenas em 2015 que ele perdeu o posto para o Chevrolet Onix. Queridinho incontestável dos brasileiros, o modelo já passou por diversas transformações até chegar à sua atual geração lançada em 2008 e reestilizada três vezes (2012, 2016 e 2018). Após a última mudança ele foi reposicionado na linha Volkswagen para atuar abaixo do subcompacto up!.', 'src/public/carros/gol 2021.webp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `email`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
