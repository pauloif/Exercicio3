-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2023 às 22:56
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mysystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `client_id` int(6) NOT NULL,
  `client_name` varchar(60) DEFAULT NULL,
  `client_gender` varchar(12) DEFAULT NULL,
  `client_phone` varchar(20) DEFAULT NULL,
  `client_address` varchar(50) DEFAULT NULL,
  `client_number` varchar(6) DEFAULT NULL,
  `client_district` varchar(50) DEFAULT NULL,
  `client_cnpj` varchar(15) DEFAULT NULL,
  `client_email` varchar(60) DEFAULT NULL,
  `client_comments` text DEFAULT NULL,
  `client_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_gender`, `client_phone`, `client_address`, `client_number`, `client_district`, `client_cnpj`, `client_email`, `client_comments`, `client_created_in`) VALUES
(3, 'fulano 1', 'Masculino', 'telefone 1', 'rua 1', '1', 'bairro 1', 'cpf 1', 'fulano@gmail.com', 'Sem comentários porém', '2023-04-07 20:24:13'),
(5, 'fulano 3', 'Masculino', 'telefone 3', 'rua 3', '3', 'bairro 3', 'cpf 3', 'fulano3@gmail.com', 'Sem comentários 3', '2023-04-07 20:26:05'),
(6, 'fulano 4', 'Masculino', 'telefone 4', 'rua 4', '4', 'bairro 4', 'cpf 4', 'fulano4@gmail.com', 'Sem comentários 4', '2023-04-07 20:26:05'),
(8, 'fulano 2', 'Masculino', 'telefone 2', 'rua 2', '2', 'bairro 2', 'cpf 2', 'fulano2@gmail.com', 'Sem comentários 2', '2023-04-07 20:37:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(6) NOT NULL,
  `supplier_name` varchar(60) DEFAULT NULL,
  `supplier_cnpj` varchar(15) DEFAULT NULL,
  `supplier_product` varchar(50) DEFAULT NULL,
  `supplier_address` varchar(50) DEFAULT NULL,
  `supplier_number` varchar(6) DEFAULT NULL,
  `supplier_district` varchar(50) DEFAULT NULL,
  `supplier_phone` varchar(20) DEFAULT NULL,
  `supplier_email` varchar(60) DEFAULT NULL,
  `supplier_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_cnpj`, `supplier_product`, `supplier_address`, `supplier_number`, `supplier_district`, `supplier_phone`, `supplier_email`, `supplier_created_in`) VALUES
(1, 'Marcela Construções LTDA', '60103009000150', 'Cimento', 'Vila Itaim', '201', 'Vila União', '85993792822', 'marcela@construcoesltda.com.br', '2023-04-01 03:00:00'),
(3, 'Fabio Madereira LTDA', '68448532000128', 'Cimento', 'Rua Herique Macedo Dias', '212', 'Vicente Pinzon', '85995478310', 'fabio@madereiraltda.com.br', '0000-00-00 00:00:00'),
(5, 'Eduardo Cerâmica Ltda', '42456497000105', 'Cimento', 'Vila Jacicarla', '455', 'Henrique Jorge', '85982517374', 'eduardo@ltda.com.br', '2023-04-06 16:25:23'),
(6, 'Miguel Ferragens ME', '99115047000168', 'Cimento', 'Rua Clóvis Meton Coutinho', '552', 'Jardim Cearense', '85986218135', 'miguel@ferragensme.com.br', '2023-04-06 16:32:17'),
(7, 'Henrique Ferragens', '33817454000109', 'Ferragens', 'Rua Monsenhor Tabosa', '452', 'Monteiro de Morais', '88995478436', 'henrique@ferragens.gmail.com', '2023-04-07 15:49:11'),
(9, 'Fornecedor Teste', 'CPF Teste', 'Cimento', 'Rua Teste', 'Teste ', 'Bairro Teste', 'Telefone Teste', 'teste@gmail.com', '2023-04-07 19:14:30'),
(10, 'Fornecedor Teste1', 'CPF Teste1', 'Cimento', 'Rua Teste 1', '111', 'Bairro Teste 1', 'Tel Teste1', 'teste1@gmail.com', '2023-04-07 19:45:38');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Índices para tabela `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
