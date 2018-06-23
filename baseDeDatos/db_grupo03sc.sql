-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2018 a las 04:42:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_grupo03sc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `email`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Pablo', 'Ponce', '456445', 'Calle 12 de Agosto', 'pablo@gmail.com', 1, NULL, NULL),
(2, 'Carlos', 'Robles', '456445', 'Calle 12 de Agosto', 'carlosR@gmail.com', 1, NULL, NULL),
(3, 'Pablo', 'Anez', '5464', 'av la salle', 'pabloA@gmail.com', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `idficha` int(10) UNSIGNED NOT NULL,
  `idservicio` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Reservado', 1, NULL, NULL),
(2, 'Libre', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichaatencion`
--

CREATE TABLE `fichaatencion` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `idestado` int(10) UNSIGNED NOT NULL,
  `idmascota` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `especie`, `raza`, `sexo`, `edad`, `idcliente`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'firulais', 'canina', 'caniche', 'macho', 5, 1, 1, NULL, NULL),
(2, 'cachuchin', 'felina', 'siames', 'macho', 2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_06_21_000000_create_usuario_table', 1),
(2, '2018_06_21_100000_create_password_resets_table', 1),
(3, '2019_06_21_200000_create_cliente_table', 1),
(4, '2020_06_21_300000_create_estado_table', 1),
(5, '2020_06_21_400000_create_personal_table', 1),
(6, '2021_06_21_500000_create_mascota_table', 1),
(7, '2022_06_21_600000_create_servicio_table', 1),
(8, '2023_06_21_600000_create_promocion_table', 1),
(9, '2024_06_21_700000_create_fichaatencion_table', 1),
(10, '2025_06_21_800000_create_detalle_table', 1),
(11, '2025_06_21_900000_create_tratamiento_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento` double(8,2) NOT NULL,
  `idservicio` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `preciototal` double(8,2) NOT NULL,
  `idpersonal` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechar` date NOT NULL,
  `plazo` int(11) NOT NULL,
  `iddetalle` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `email`, `password`, `tipo`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gonzalo', 'gonzalo@gmail.com', '$2y$10$gtroFBx09CGiALjqJoaFCOiyPDhKaMUzi.0gaKbZEM8fux9gMiBYS', 'cliente', 1, 'K6HX8S3pZArZgURUpnQ233juNzVsUESEAQmL6raiXDZkKCPRmfruWRVjlt92', '2018-06-22 23:49:27', '2018-06-22 23:49:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cliente_email_unique` (`email`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_idficha_foreign` (`idficha`),
  ADD KEY `detalle_idservicio_foreign` (`idservicio`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fichaatencion`
--
ALTER TABLE `fichaatencion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fichaatencion_idestado_foreign` (`idestado`),
  ADD KEY `fichaatencion_idmascota_foreign` (`idmascota`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mascota_especie_unique` (`especie`),
  ADD KEY `mascota_idcliente_foreign` (`idcliente`);

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
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_ci_unique` (`ci`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promocion_idservicio_foreign` (`idservicio`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicio_idpersonal_foreign` (`idpersonal`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tratamiento_iddetalle_foreign` (`iddetalle`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fichaatencion`
--
ALTER TABLE `fichaatencion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
