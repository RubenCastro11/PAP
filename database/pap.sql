-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2021 às 22:18
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
(3, 'Naked', NULL, '2021-03-08 17:23:33', NULL),
(4, 'Big Trail', '2021-07-06 16:10:12', '2021-07-06 16:10:12', NULL);

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
(1, 'Husqvarna', 'Suécia', '1904', '1625600883_277-2777311_husqvarna-motorcycles-husqvarna-motorcycles-logo-vector-hd-png.png', NULL, '2021-07-06 18:48:03', NULL),
(2, 'KTM', 'Áustria', '1934', '1626339941_ktm.jpg', NULL, '2021-07-15 08:05:41', NULL),
(3, 'BMW', 'Alemanha', '1916', '1626344308_1626339989_bmw.jpeg', NULL, '2021-07-15 09:18:28', NULL),
(4, 'Honda', 'Japão', '1948', '1626340074_hondaas.jpg', NULL, '2021-07-15 08:07:54', NULL),
(10, 'Kawasaki', 'Japão', '1962', '1614961752_logo kawa.jpg', '2021-03-05 16:29:12', '2021-03-05 16:29:12', NULL),
(11, 'Yamaha', 'Japão', '1887', '1626340027_yamahalogo.png', NULL, '2021-07-15 08:07:07', NULL);

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
  `id_marca` int(11) NOT NULL,
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

INSERT INTO `motas` (`id_mota`, `id_estilo`, `id_user`, `id_marca`, `modelo`, `cilindrada`, `quilometros`, `preco`, `cor`, `data_fabrico`, `observacoes`, `fotografia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'FE', '250', '0 ', 10250, 'Branco', '2021', 'A FE 250 é a menor capacidade de 4 tempos da linha de enduro, o que também significa que é a mais leve. Com uma série de recursos e tecnologias avançadas, esta máquina enduro avançada e brilha em terrenos técnicos difíceis.', '1616057377_fe250.png', NULL, '2021-03-18 08:49:38', NULL),
(3, 2, 6, 3, 'S', '1000', '17000', 15500, 'Branco', '2016-06-08', 'BMW S1000RR 2016  com os seguintes extras:\r\n-Ponteira Akrapovic HP titanium\r\n-Manetes bomba de travao Brembo Rcs19, embraiagem Brembo Rcs19\r\n-Proteção Radiador R&G e radiador de oleo R&G\r\n-Tampas de oleo Rizoma\r\n-Suporte de matricula Curto', '1626341975_bmw fin.png', NULL, '2021-07-15 08:39:35', NULL),
(4, 3, 5, 4, 'Hornet', '600', '28990', 6000, 'Preto', '2012', 'Honda CB600 F com cerca de 28990 km, praticamente nova', '1615823942_hornet.webp', NULL, '2021-03-15 15:59:02', NULL),
(6, 3, 7, 11, 'FZ', '800', '23500', 6000, 'Azul', '2010-06-16', 'Revisão feita. Pneus em muito bom estado. Frente tem pouco mais de 1000kms. Manetes curtas. Banco condutor em gel. Suporte telemóvel com ficha de carregamento. Ponteira réplica Akrapovic', '1626339800_FZ8.jpg', '2021-02-26 16:27:24', '2021-07-15 08:03:20', NULL),
(11, 2, 5, 4, 'Cbr', '1000', '11000', 7150, 'Tricolor', '2010-06-16', 'Mota muito nova de tudo com muito pouco uso com 11.000km toda de origem', '1616777026_cbr2.webp', '2021-03-05 15:16:20', '2021-03-26 16:43:46', NULL),
(22, 2, 8, 10, 'H2R', '1000', '0', 62990, 'Preto', '2021-01-01', '305 CV\r\n228 kW {310 PS} / 14,000 rpm\r\nRefrigeração líquida, 4 cilindros em linha, 4 tempos, 4 cilindros em linha com compressor.\r\nInjeção de combustível: Ø 50 mm x 4 com injeção dupla', '1625776648_H2R.jpg', '2021-07-08 19:37:28', '2021-07-08 19:37:28', NULL),
(23, 4, 6, 3, 'R1250GS', '1250', '11362', 21000, 'Branco', '2019-06-11', 'Extras:\r\n- Alarme BMW\r\n- eCall SOS\r\n- Barras projecção\r\n- faróis auxiliaras Led X-Vision montados na InParts.\r\n- TopCase aluminio GIVI Dolomiti 46L\r\n- Ficha dupla USB montada na BMW\r\n- Kit passageiro para verão HP (alteração dos bancos e vidro maior)', '1625777049_gs.jfif', '2021-07-08 19:44:09', '2021-07-08 19:44:09', NULL);

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
(1, 3, 'BMW S1000RR 2016 com os seguintes extras: -Ponteira Akrapovic HP titanium -Manetes bomba de travao Brembo Rcs19, embraiagem Brembo Rcs19 -Proteção Radiador R&G e radiador de oleo R&G -Tampas de oleo Rizoma -Suporte de matricula Curto', '1626340199_bmw fin.png', NULL, '2021-07-15 08:09:59', NULL),
(2, 4, 'Honda CB600 F  e cerca de 28990 km, praticamente nova', '1626349034_1625773845_hornet.webp', '2021-03-01 17:32:59', '2021-07-15 10:37:14', NULL);

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
(1, 'Noel', 'noel@gmail.com', NULL, '$2y$10$QRY/udsguHa9bJf8vi7uKuq.jyOTMbSzBtHBc31t7epWieYNKcmj.', NULL, '2021-02-25 14:51:17', '2021-02-25 14:51:17'),
(2, 'Noel', 'noel@ugmail.com', NULL, '$2y$10$QRY/udsguHa9bJf8vi7uKuq.jyOTMbSzBtHBc31t7epWieYNKcmj.', NULL, '2021-02-25 14:51:17', '2021-02-25 14:51:17'),
(5, 'Moto Veiga', 'motoveigabraga@gmail.com', NULL, '$2y$10$/UoEt3VamxHJZNqKleKeFOJmdiHNGzhIcJDzGRooCyd2Nj7Oq3jju', NULL, '2021-04-14 07:49:00', '2021-04-14 07:49:00'),
(6, 'Bmw Motorrad', 'bmwmotorrad@gmail.com', NULL, '$2y$10$t5P5RGK3fICU6MfxwQaJ/Oc7HuxfMXfklyemH1hWYX2d.uFoQz0L.', NULL, '2021-04-14 07:53:48', '2021-04-14 07:53:48'),
(7, 'Moto Fundador', 'motofundador@gmail.com', NULL, '$2y$10$7fkWCRhTl.WGUv2jHaqike1Sg2XDulR09MBzFvuEMdTGAavFDb7NS', NULL, '2021-04-14 07:58:40', '2021-04-14 07:58:40'),
(8, 'Kawasaki', 'kawasaki@gmail.com', NULL, '$2y$10$IJHZxNS2cjro5WUnMGfTaewFYW8fF/3ExkzlYnfXqasHm.mHuxXXO', NULL, '2021-07-08 19:34:06', '2021-07-08 19:34:06');

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
  ADD KEY `id_estilo` (`id_estilo`,`id_user`),
  ADD KEY `id_marca` (`id_marca`);

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
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `motas`
--
ALTER TABLE `motas`
  MODIFY `id_mota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `publicidades`
--
ALTER TABLE `publicidades`
  MODIFY `id_publicidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
