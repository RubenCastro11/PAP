-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2021 às 18:12
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estilos`
--

CREATE TABLE `estilos` (
  `id_estilo` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estilos`
--

INSERT INTO `estilos` (`id_estilo`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Motocross', NULL, NULL, NULL),
(2, 'Pista', NULL, NULL, NULL),
(3, 'Naked', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nome` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origem_marca` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ano_criacao` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logotipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nome`, `origem_marca`, `ano_criacao`, `logotipo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Husqvarna', 'Suécia', '1904', NULL, NULL, NULL, NULL),
(2, 'KTM', 'Áustria', '1934', NULL, NULL, NULL, NULL),
(3, 'BMW', 'Alemanha', '1916', NULL, NULL, NULL, NULL),
(4, 'Honda', 'Japão', '1948', NULL, NULL, NULL, NULL),
(10, 'Kawasaki', 'Japão', '1962', '1614961752_logo kawa.jpg', '2021-03-05 16:29:12', '2021-03-05 16:29:12', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motas`
--

CREATE TABLE `motas` (
  `id_mota` int(11) NOT NULL,
  `id_estilo` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `marca` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cilindrada` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quilometros` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int(11) NOT NULL,
  `cor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_fabrico` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `motas`
--

INSERT INTO `motas` (`id_mota`, `id_estilo`, `id_user`, `marca`, `modelo`, `cilindrada`, `quilometros`, `preco`, `cor`, `data_fabrico`, `observacoes`, `fotografia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Husqvarna', 'FE', '250', '0 ', 10250, 'Branco', '2021', 'A FE 250 é a menor capacidade de 4 tempos da linha de enduro, o que também significa que é a mais leve. Com uma série de recursos e tecnologias avançadas, esta máquina enduro avançada e brilha em terrenos técnicos difíceis.', '', NULL, NULL, NULL),
(2, 1, 2, 'KTM', 'EXC', '300', '1350', 7100, 'Laranja', '2019', 'Mota com 300 de cilindrada a 2 tempos do ano de 2019 com poucos quilometros. Mota impecavel para enduro e para motocross sem problemas e com a revisao feita.', '', NULL, NULL, NULL),
(3, 2, 3, 'BMW', 'S', '1000', '17000', 15500, 'Brano', '2016', ' BMW S1000RR 2016  com os seguintes extras:\r\n-Ponteira Akrapovic HP titanium\r\n-Manetes bomba de travao Brembo Rcs19, embraiagem Brembo Rcs19\r\n-Proteção Radiador R&G e radiador de oleo R&G\r\n-Tampas de oleo Rizoma\r\n-Suporte de matricula Curto\r\n', '', NULL, NULL, NULL),
(4, 3, 4, 'Honda', 'Hornet', '600', '28990', 6000, 'Preto', '2012', 'Honda CB600 F com cerca de 28990 km, praticamente nova', '', NULL, NULL, NULL),
(6, 3, NULL, 'Yamaha', 'FZ', '800', '23500', 6000, 'Azul', '2010-06-16', 'Revisão feita. Pneus em muito bom estado. Frente tem pouco mais de 1000kms. Manetes curtas. Banco condutor em gel. Suporte telemóvel com ficha de carregamento. Ponteira réplica Akrapovic', '', '2021-02-26 16:27:24', '2021-02-26 16:27:24', NULL),
(11, 2, NULL, 'Honda', 'Cbr', '1000', '11000', 7150, 'Tricolor', '2010-06-16', 'Mota muito nova de tudo com muito pouco uso com 11.000km toda de origem', '1614957380_cbr2.webp', '2021-03-05 15:16:20', '2021-03-05 15:16:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicidades`
--

CREATE TABLE `publicidades` (
  `id_publicidade` int(11) NOT NULL,
  `id_mota` int(11) NOT NULL,
  `designacao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `publicidades`
--

INSERT INTO `publicidades` (`id_publicidade`, `id_mota`, `designacao`, `fotografia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Mota com 300 de cilindrada a 2 tempos do ano de 2019 com poucos quilometros. Mota impecavel para enduro e para motocross sem problemas e com a revisao feita', NULL, NULL, NULL, NULL),
(2, 4, 'Honda CB600 F  e cerca de 28990 km, praticamente nova', 'C:\\xampp\\tmp\\php2D30.tmp', '2021-03-01 17:32:59', '2021-03-01 17:32:59', NULL),
(4, 7, 'a', '1614869280_ktm-removebg-preview.png', '2021-03-04 14:48:00', '2021-03-04 14:48:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Noel', 'noel@gmail.com', NULL, '$2y$10$QRY/udsguHa9bJf8vi7uKuq.jyOTMbSzBtHBc31t7epWieYNKcmj.', NULL, '2021-02-25 14:51:17', '2021-02-25 14:51:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estilos`
--
ALTER TABLE `estilos`
  ADD PRIMARY KEY (`id_estilo`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `motas`
--
ALTER TABLE `motas`
  ADD PRIMARY KEY (`id_mota`),
  ADD KEY `id_estilo` (`id_estilo`,`id_user`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `publicidades`
--
ALTER TABLE `publicidades`
  ADD PRIMARY KEY (`id_publicidade`),
  ADD KEY `id_mota` (`id_mota`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estilos`
--
ALTER TABLE `estilos`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `motas`
--
ALTER TABLE `motas`
  MODIFY `id_mota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `publicidades`
--
ALTER TABLE `publicidades`
  MODIFY `id_publicidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
