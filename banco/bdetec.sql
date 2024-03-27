-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/03/2024 às 07:01
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdetec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblogradouro`
--

CREATE TABLE `tblogradouro` (
  `idLogradouro` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `cepLogradouro` char(8) DEFAULT NULL,
  `nomeLogradouro` varchar(80) DEFAULT NULL,
  `bairroLogradouro` varchar(80) DEFAULT NULL,
  `numLogradouro` varchar(80) DEFAULT NULL,
  `cidadeLogradouro` varchar(80) DEFAULT NULL,
  `ufLogradouro` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblogradouro`
--

INSERT INTO `tblogradouro` (`idLogradouro`, `idUsuario`, `cepLogradouro`, `nomeLogradouro`, `bairroLogradouro`, `numLogradouro`, `cidadeLogradouro`, `ufLogradouro`) VALUES
(1, 36, '0350210', 'rua vila do chaves', 'jardim sao paulo', '8', 'sao paulo', 'sao paulo'),
(2, 41, '08505410', 'Rua Anna Leal Fugagnolli', 'Jardim Hélio Fugagnolli', '145', 'Ferraz de Vasconcelos', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbuser`
--

INSERT INTO `tbuser` (`id`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'Luciano', 'luciano@gmail.com', '123', '11987654321'),
(2, 'Chaves', 'chaves@gmail.com', '123', '9111111111'),
(3, 'Chiquinha', 'chiquinha@gmail.com', '123', '1192222222222'),
(36, 'Gabriel da Silva Sousa', 'gabrielsilva.sousa2004@gmail.com.br', '123', '11977977038'),
(41, 'Sabrina Santos Gimenes', 'sabrina@gmail.com', '123', '11988776655');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblogradouro`
--
ALTER TABLE `tblogradouro`
  ADD PRIMARY KEY (`idLogradouro`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblogradouro`
--
ALTER TABLE `tblogradouro`
  MODIFY `idLogradouro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblogradouro`
--
ALTER TABLE `tblogradouro`
  ADD CONSTRAINT `tblogradouro_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbuser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
