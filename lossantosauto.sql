-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31/03/2020 às 02:02
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
(4, 'Volkswagen', 'Gol 2021', 48090, 'Por 25 anos, o Volkswagen Gol foi o carro mais vendido do Brasil. Foi apenas em 2015 que ele perdeu o posto para o Chevrolet Onix. Queridinho incontestável dos brasileiros, o modelo já passou por diversas transformações até chegar à sua atual geração lançada em 2008 e reestilizada três vezes (2012, 2016 e 2018). Após a última mudança ele foi reposicionado na linha Volkswagen para atuar abaixo do subcompacto up!.', 'src/public/carros/gol 2021.webp'),
(5, 'Chevrolet', 'Onix 2020', 52890, 'Carro mais vendido do Brasil desde 2015, o Chevrolet Onix chegou à sua segunda geração no final de 2019 já como linha 2020. Do modelo anterior sobrou apenas o nome e algumas influências visuais. Agora o Onix é um projeto dividido entre Brasil e China, usa nova plataforma GEM e motorizações totalmente inéditas por aqui.', 'src/public/carros/onix 2020.webp'),
(6, 'Chevrolet', 'S10 Cabine Dupla', 109590, 'Primeira picape do segmento médio produzida no Brasil, a Chevrolet S10 foi lançada em 1995 inicialmente disponível apenas na versão com cabine simples e motor a gasolina. A primeira geração durou até 2012 com duas reestilizações, já a segunda geração foi resultado de um projeto tocado pelas divisões brasileira e tailandesa da GM. É uma das picapes médias mais vendidas do Brasil até hoje.', 'src/public/carros/s10 cabine dupla 2020.jpeg'),
(7, 'Nissan', 'GT-R 2017', 900000, 'O superesportivo GT-R, conhecido pelo apelido de \"Godzilla\", já está disponível no Brasil. O modelo, vendido apenas sob encomenda, chega em versão única Premium. Com novo visual por dentro e por fora, a linha 2017 é oferecida com sete opções de cores para a carroceria (branco, dois tons de cinza, preto, azul, vermelho e laranja) e quatro para o interior (preto, caramelo, laranja e vermelho). ', 'src/public/carros/gt r 2017.webp'),
(8, 'Ford', 'Ka 2020', 45590, 'Único modelo de passeio da Ford no Brasil além do esportivo Mustang e do sedã importado Fusion, o Ford Ka é um sobrevivente da estratégia global da marca em privilegiar SUVs e picapes. O Ka é o Ford mais vendido do Brasil e um dos mais comercializados no mundo, onde também adota o nome Figo. A atual terceira geração foi totalmente desenvolvida no Brasil e se tornou global.', 'src/public/carros/ka 2020.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
