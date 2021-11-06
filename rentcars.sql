-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2021 às 15:48
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rentcars`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_cars`
--

CREATE TABLE `tab_cars` (
  `ID_Car` int(11) NOT NULL,
  `Model` varchar(200) DEFAULT NULL,
  `Brand` varchar(200) DEFAULT NULL,
  `Board` varchar(50) DEFAULT NULL,
  `Year` varchar(20) DEFAULT NULL,
  `IMG_Car` varchar(250) DEFAULT NULL,
  `Available` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_users`
--

CREATE TABLE `tab_users` (
  `ID_User` int(11) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_users`
--

INSERT INTO `tab_users` (`ID_User`, `Login`, `Pass`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_cars`
--
ALTER TABLE `tab_cars`
  ADD PRIMARY KEY (`ID_Car`);

--
-- Índices para tabela `tab_users`
--
ALTER TABLE `tab_users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_cars`
--
ALTER TABLE `tab_cars`
  MODIFY `ID_Car` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_users`
--
ALTER TABLE `tab_users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
