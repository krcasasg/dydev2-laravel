-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-08-2021 a las 16:00:36
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dydev2_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'raul casas', 'krcasasg@gmail.com', NULL, '$2y$10$Hotz4l10aMi3o1rPq4yb7eXwF79W4SO5tpAG2wg4ARiA/XlBi5dj6', NULL, '2021-08-19 15:32:06', '2021-08-19 15:32:06'),
(5, 'juan martinez', 'juan@correo.com', NULL, '$2y$10$b4V0rnCY27ewmtsvDZRoN.V3M4XGl4J31Dyfn6U9x0beQ3BaHXd7S', NULL, '2021-08-19 19:49:15', '2021-08-19 19:49:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `USUARI_ConsInte__b` int NOT NULL,
  `USUARI_Codigo____b` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `USUARI_Clave_____b` varchar(253) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `USUARI_Nombre____b` varchar(253) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `USUARI_Cargo_____b` varchar(253) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `USUARI_ConsInte__PERUSU_b` int DEFAULT NULL,
  `USUARI_InMoCoPa__b` smallint DEFAULT '0',
  `USUARI_InPeToGu__b` smallint DEFAULT '0',
  `USUARI_IndPerCap_b` smallint DEFAULT '0',
  `USUARI_IndPerRep_b` smallint DEFAULT '0',
  `USUARI_InPeMoPo__b` smallint DEFAULT '0',
  `USUARI_Identific_b` varchar(50) DEFAULT NULL,
  `USUARI_UsuaTele__b` varchar(50) DEFAULT NULL,
  `USUARI_ClavTele__b` varchar(50) DEFAULT NULL,
  `USUARI_ConsInte__TURNOS_b` int DEFAULT NULL,
  `USUARI_ClaSalLla_b` varchar(50) DEFAULT NULL,
  `USUARI_LlavExte__b` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `USUARI_IndiActi__b` smallint DEFAULT '-1',
  `USUARI_NaciAnno__b` int DEFAULT NULL,
  `USUARI_NaciMes___b` int DEFAULT NULL,
  `USUARI_NaciDia___b` int DEFAULT NULL,
  `USUARI_SegConVen_b` smallint DEFAULT '0',
  `USUARI_SegDiaVen_b` int DEFAULT '90',
  `USUARI_LonMinCon_b` int DEFAULT '4',
  `USUARI_RepConDia_b` int DEFAULT '180',
  `USUARI_SegFecCon_b` datetime DEFAULT NULL,
  `USUARI_Bloqueado_b` smallint DEFAULT '0',
  `USUARI_FechCrea__b` datetime DEFAULT NULL,
  `USUARI_UsuaCrea__b` varchar(253) DEFAULT NULL,
  `USUARI_ConsInte__PROYEC_b` int DEFAULT NULL,
  `USUARI_Foto______b` varchar(255) DEFAULT NULL,
  `USUARI_UsuaCBX___b` int DEFAULT NULL,
  `USUARI_ConsInte__USUPER_b` int DEFAULT NULL,
  `USUARI_PerCamCam_b` smallint DEFAULT '-1',
  `USUARI_Correo___b` varchar(255) DEFAULT NULL,
  `USUARI_passCorreo_b` varchar(255) DEFAULT NULL,
  `USUARI_HorIniLun_b` time DEFAULT NULL,
  `USUARI_HorFinLun_b` time DEFAULT NULL,
  `USUARI_HorIniMar_b` time DEFAULT NULL,
  `USUARI_HorFinMar_b` time DEFAULT NULL,
  `USUARI_HorIniMie_b` time DEFAULT NULL,
  `USUARI_HorFinMie_b` time DEFAULT NULL,
  `USUARI_HorIniJue_b` time DEFAULT NULL,
  `USUARI_HorFinJue_b` time DEFAULT NULL,
  `USUARI_HorIniVie_b` time DEFAULT NULL,
  `USUARI_HorFinVie_b` time DEFAULT NULL,
  `USUARI_HorIniSab_b` time DEFAULT NULL,
  `USUARI_HorFinSab_b` time DEFAULT NULL,
  `USUARI_HorIniDom_b` time DEFAULT NULL,
  `USUARI_HorFinDom_b` time DEFAULT NULL,
  `USUARI_HorIniFes_b` time DEFAULT NULL,
  `USUARI_HorFinFes_b` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`USUARI_ConsInte__b`, `USUARI_Codigo____b`, `USUARI_Clave_____b`, `USUARI_Nombre____b`, `USUARI_Cargo_____b`, `USUARI_ConsInte__PERUSU_b`, `USUARI_InMoCoPa__b`, `USUARI_InPeToGu__b`, `USUARI_IndPerCap_b`, `USUARI_IndPerRep_b`, `USUARI_InPeMoPo__b`, `USUARI_Identific_b`, `USUARI_UsuaTele__b`, `USUARI_ClavTele__b`, `USUARI_ConsInte__TURNOS_b`, `USUARI_ClaSalLla_b`, `USUARI_LlavExte__b`, `USUARI_IndiActi__b`, `USUARI_NaciAnno__b`, `USUARI_NaciMes___b`, `USUARI_NaciDia___b`, `USUARI_SegConVen_b`, `USUARI_SegDiaVen_b`, `USUARI_LonMinCon_b`, `USUARI_RepConDia_b`, `USUARI_SegFecCon_b`, `USUARI_Bloqueado_b`, `USUARI_FechCrea__b`, `USUARI_UsuaCrea__b`, `USUARI_ConsInte__PROYEC_b`, `USUARI_Foto______b`, `USUARI_UsuaCBX___b`, `USUARI_ConsInte__USUPER_b`, `USUARI_PerCamCam_b`, `USUARI_Correo___b`, `USUARI_passCorreo_b`, `USUARI_HorIniLun_b`, `USUARI_HorFinLun_b`, `USUARI_HorIniMar_b`, `USUARI_HorFinMar_b`, `USUARI_HorIniMie_b`, `USUARI_HorFinMie_b`, `USUARI_HorIniJue_b`, `USUARI_HorFinJue_b`, `USUARI_HorIniVie_b`, `USUARI_HorFinVie_b`, `USUARI_HorIniSab_b`, `USUARI_HorFinSab_b`, `USUARI_HorIniDom_b`, `USUARI_HorFinDom_b`, `USUARI_HorIniFes_b`, `USUARI_HorFinFes_b`) VALUES
(1520, NULL, '12345', 'pedro', 'agente', NULL, 0, 0, 0, 0, 0, '1234567890', NULL, NULL, NULL, NULL, NULL, -1, NULL, NULL, NULL, 0, 90, 4, 180, NULL, 0, NULL, NULL, NULL, 'Comunicado [3].jpg', NULL, NULL, -1, 'pedro@correo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1521, NULL, '12345678', 'juan martinez', 'agente', NULL, 0, 0, 0, 0, 0, '246810', NULL, NULL, NULL, NULL, NULL, -1, NULL, NULL, NULL, 0, 90, 4, 180, NULL, 0, NULL, NULL, NULL, 'Comunicado [3].jpg', NULL, NULL, -1, 'juan@correo.com', NULL, '09:50:00', '14:00:00', '07:30:00', '15:43:00', '02:00:00', '17:00:00', '06:00:00', '14:00:00', '08:00:00', '14:00:00', '09:00:00', '13:00:00', '02:00:00', '13:00:00', '01:00:00', '13:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`USUARI_ConsInte__b`),
  ADD UNIQUE KEY `USUARI_ConsInte__b_UNIQUE` (`USUARI_ConsInte__b`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `USUARI_ConsInte__b` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1522;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
