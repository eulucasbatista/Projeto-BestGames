-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2016 às 17:52
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dwa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrar_game`
--

CREATE TABLE IF NOT EXISTS `cadastrar_game` (
  `id_cadastrar_game` int(6) NOT NULL,
  `nome_do_jogo` varchar(60) COLLATE utf8_bin NOT NULL,
  `genero` varchar(30) COLLATE utf8_bin NOT NULL,
  `estado` varchar(30) COLLATE utf8_bin NOT NULL,
  `ano_de_lancamento` varchar(30) COLLATE utf8_bin NOT NULL,
  `plataforma` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastrar_game`
--

INSERT INTO `cadastrar_game` (`id_cadastrar_game`, `nome_do_jogo`, `genero`, `estado`, `ano_de_lancamento`, `plataforma`) VALUES
(1, 'Battlefield 4', 'Guerra', 'Usado', '2013', 'PS4'),
(2, 'Battlefield 4', 'Guerra', 'Usado', '2013', 'PS4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(6) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sobrenome` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senha` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `endereco` varchar(350) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cep` decimal(8,0) unsigned zerofill NOT NULL,
  `telefone` decimal(12,0) DEFAULT NULL,
  `cpf` decimal(11,0) NOT NULL,
  `cidade` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `plataforma` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `endereco`, `cep`, `telefone`, `cpf`, `cidade`, `estado`, `plataforma`) VALUES
(1, 'efghdf', 'sdkfhsdfjkas', 'asfh@sj', '5644', 'rua sdkl', '00557352', '356', '2198738', 'guru', 'sp', 'XBOX 360'),
(3, 'Ronaldo', 'Cavalcante', 'ronne.2014@hotmail.com', '123456', 'Rua Pau Ferro', '07215160', '1124121723', '45210328856', 'Guarulhos', 'SP', 'PS3'),
(4, 'Batista', 'Cavalcante', 'batista@hotmail.com', '101010', 'Rua Pau Ferro', '07215160', '1124121723', '45210328856', 'Guarulhos', 'SP', 'PS4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastrar_game`
--
ALTER TABLE `cadastrar_game`
  ADD PRIMARY KEY (`id_cadastrar_game`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrar_game`
--
ALTER TABLE `cadastrar_game`
  MODIFY `id_cadastrar_game` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
