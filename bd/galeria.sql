-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2019 às 05:50
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE `album` (
  `id_Album` int(11) NOT NULL,
  `capa` text NOT NULL,
  `titulo_album` varchar(100) NOT NULL,
  `albumcreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`id_Album`, `capa`, `titulo_album`, `albumcreated`) VALUES
(1, 'imagens_thumb/gretchen1.jpg', 'gretchen1', '0000-00-00 00:00:00'),
(2, 'imagens_thumb/gretchen2.jpg', 'gretchen2', '0000-00-00 00:00:00'),
(10, 'imagens_thumb/97c7b632b61e551db8209769d23ec772.png', 'pop', '2019-06-07 00:47:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `imagem` text NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `Titulo_album` varchar(100) NOT NULL,
  `id_album` int(11) NOT NULL,
  `imagem_criada_em` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `imagem`, `titulo`, `Titulo_album`, `id_album`, `imagem_criada_em`) VALUES
(1, 'imagens_thumb/meme1.jpg', 'meme1', 'ricardo', 1, '0000-00-00 00:00:00'),
(2, 'imagens_thumb/meme2.jpg', 'meme2', 'ricardo', 1, '0000-00-00 00:00:00'),
(3, 'imagens_thumb/meme3.jpg', 'meme3', 'ricardo', 2, '0000-00-00 00:00:00'),
(4, 'imagens_thumb/meme4.jpg', 'meme4', 'ricardo', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha_usuario` varchar(12) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `nome_usuario`, `sobrenome_usuario`, `data_nascimento`, `senha_usuario`, `created`) VALUES
(12, 'eric.andersom9@gmail.com', 'Eric Anderson ', 'Ferreira dos Santos', '1998-02-01', '123456', '2019-05-29 09:57:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_Album`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_Album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
