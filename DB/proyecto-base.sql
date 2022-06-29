-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2022 a las 09:10:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto-base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compañias`
--

CREATE TABLE `compañias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `compañias`
--

INSERT INTO `compañias` (`id`, `nombre_empresa`, `ciudad`, `created_at`, `updated_at`) VALUES
(1, 'em', 'ca', '2022-06-28 09:27:24', '2022-06-28 09:27:24'),
(2, 'COMPAÑIA MANUFACTURERA MANISOL S.A.', 'Manizales', '2022-06-29 11:22:40', '2022-06-29 11:22:40'),
(3, 'INDUSTRIAS MAVILTEX S.A.S', 'Medellin', '2022-06-29 11:23:04', '2022-06-29 11:23:04'),
(4, 'MATEUS AGUDELO TITO', 'Villavicencio', '2022-06-29 11:23:31', '2022-06-29 11:23:31'),
(5, 'TEJIDOS INDUSTRIALES COVETA S A', 'Bogotá', '2022-06-29 11:24:00', '2022-06-29 11:24:00'),
(6, 'INDUDISE S.A.S', 'Manizales', '2022-06-29 11:24:18', '2022-06-29 11:24:18'),
(7, 'CONFECCIONES CABEGU S.A.S.', 'Armenia', '2022-06-29 11:24:44', '2022-06-29 11:24:44'),
(8, 'GRISALES GARCIA MARIA SORELY', 'Pereira', '2022-06-29 11:25:45', '2022-06-29 11:25:45'),
(9, 'APLETON S.A.S.', 'Medellin', '2022-06-29 11:26:13', '2022-06-29 11:26:13'),
(10, 'EXPORLOOFAH S.A.S', 'Ibague', '2022-06-29 11:26:38', '2022-06-29 11:26:38'),
(11, 'CREACIONES VASTAGO S.A.S', 'Cali', '2022-06-29 11:26:54', '2022-06-29 11:26:54'),
(12, 'INGENIERIA DE SISTEMAS DE TRANSPORTE Y CABLES S.A.S', 'Manizales', '2022-06-29 11:27:11', '2022-06-29 11:27:11'),
(13, 'SEVEN & SEVEN S.A.S', 'Medellin', '2022-06-29 11:27:29', '2022-06-29 11:27:29'),
(14, 'FERDITEX S.A.S.', 'Bogotá', '2022-06-29 11:28:01', '2022-06-29 11:28:01'),
(15, 'MANUFACTURAS SAGARI LIMITADA', 'Pereira', '2022-06-29 11:28:32', '2022-06-29 11:28:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `cantidad`, `precio`, `descripcion`, `created_at`, `updated_at`) VALUES
(18, '75', 7500.00, 'Hilo Alabanil', '2022-06-29 09:58:52', '2022-06-29 09:58:52'),
(19, '120', 3000.00, 'Hilo Ameto Drima', '2022-06-29 09:59:13', '2022-06-29 09:59:13'),
(20, '76', 6000.00, 'Hilo Aptan', '2022-06-29 09:59:36', '2022-06-29 09:59:36'),
(21, '50', 3000.00, 'Hilo Ameto Drima', '2022-06-29 09:59:57', '2022-06-29 09:59:57'),
(22, '90', 4000.00, 'Hilo tubino', '2022-06-29 10:00:22', '2022-06-29 10:00:22'),
(23, '78', 4300.00, 'Hilo Sylko', '2022-06-29 10:00:46', '2022-06-29 10:00:46'),
(24, '43', 8000.00, 'Hilo Sol', '2022-06-29 10:01:03', '2022-06-29 10:01:03'),
(25, '45', 10800.00, 'Hilo Cisne', '2022-06-29 10:01:21', '2022-06-29 10:01:21'),
(26, '65', 6000.00, 'Hilo Dorado', '2022-06-29 10:01:44', '2022-06-29 10:01:44'),
(27, '43', 3800.00, 'Hilaza Filtear', '2022-06-29 10:02:02', '2022-06-29 10:02:02'),
(28, '78', 11800.00, 'Hilaza Algodon', '2022-06-29 10:02:23', '2022-06-29 10:02:23'),
(29, '67', 3800.00, 'Hilaza Filetear', '2022-06-29 10:02:42', '2022-06-29 10:02:42'),
(30, '78', 6800.00, 'Hilaza Algodon Kaki', '2022-06-29 10:03:00', '2022-06-29 10:03:00'),
(31, '76', 3400.00, 'Tela Alpaca', '2022-06-29 10:03:17', '2022-06-29 10:03:17'),
(32, '123', 4500.00, 'Tela Boucle', '2022-06-29 10:03:38', '2022-06-29 10:03:38'),
(33, '33', 7000.00, 'Tela Suede', '2022-06-29 10:03:57', '2022-06-29 10:03:57'),
(34, '35', 4600.00, 'Tela Denim', '2022-06-29 10:04:15', '2022-06-29 10:04:15'),
(35, '35', 31000.00, 'Cuero de Champiñon', '2022-06-29 10:04:35', '2022-06-29 10:04:35'),
(36, '45', 50000.00, 'Cuero Bovino', '2022-06-29 10:04:58', '2022-06-29 10:04:58'),
(37, '48', 50000.00, 'Cuero Becerro', '2022-06-29 10:05:18', '2022-06-29 10:05:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_06_15_201124_empleado', 1),
(5, '2022_06_15_203003_compañia', 1),
(6, '2022_06_15_203631_inventario', 1),
(7, '2022_06_20_202802_produccion', 1),
(8, '2022_06_20_202851_proveedor', 1),
(9, '2022_06_20_202926_producto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccions`
--

CREATE TABLE `produccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `horas_extra` decimal(8,2) NOT NULL,
  `id_empleado` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `unidad` int(11) NOT NULL,
  `id_inv` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedors`
--

CREATE TABLE `proveedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_comp` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedors`
--

INSERT INTO `proveedors` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `id_comp`, `created_at`, `updated_at`) VALUES
(1, '1007233458', 'Juan', 'Gonzáles', '3140983345', 2, '2022-06-28 09:27:50', '2022-06-29 11:29:26'),
(2, '30314098', 'Maria', 'Lopera', '3209876549', 3, '2022-06-29 11:30:10', '2022-06-29 11:30:10'),
(3, '100898234', 'Mateus', 'Agudelo', '3149870965', 4, '2022-06-29 11:31:10', '2022-06-29 11:31:10'),
(4, '102345876', 'Carlos', 'Muñoz', '3227560989', 5, '2022-06-29 11:31:43', '2022-06-29 11:31:43'),
(5, '1007233345', 'David', 'Ortiz', '3159087656', 6, '2022-06-29 11:32:22', '2022-06-29 11:32:22'),
(6, '30345798', 'Leonidas', 'Ceballos', '3209987560', 7, '2022-06-29 11:32:56', '2022-06-29 11:32:56'),
(7, '76307332', 'Isabela', 'Loaiza', '3057879218', 8, '2022-06-29 11:33:26', '2022-06-29 11:33:26'),
(8, '10547808', 'Isabela', 'Ceballos', '3156769799', 9, '2022-06-29 11:33:57', '2022-06-29 11:33:57'),
(9, '10516932', 'Andres', 'Garcia', '3227779809', 10, '2022-06-29 11:34:27', '2022-06-29 11:34:27'),
(10, '34532270', 'Felipe', 'Muñoz', '3204980909', 11, '2022-06-29 11:35:00', '2022-06-29 11:35:00'),
(11, '76323459', 'Cristian', 'Agudelo', '3209809312', 12, '2022-06-29 11:35:33', '2022-06-29 11:35:33'),
(12, '34531725', 'Isabel', 'Mora', '3208972398', 13, '2022-06-29 11:36:07', '2022-06-29 11:36:07'),
(13, '76305729', 'Daniel', 'Taborda', '310980645', 14, '2022-06-29 11:36:42', '2022-06-29 11:36:42'),
(14, '42870562', 'Camilo', 'Ramirez', '3048234388', 15, '2022-06-29 11:37:18', '2022-06-29 11:37:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `apellido`, `cedula`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$KVCrAgjrkz6/Hj/bBsyYmu2pDjSts4JdP8fI4516LSyWcVtOUszLa', 'Administrador', '1', '1', NULL, NULL, '2022-06-28 09:10:17', '2022-06-28 09:10:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compañias`
--
ALTER TABLE `compañias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `produccions`
--
ALTER TABLE `produccions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produccions_id_empleado_foreign` (`id_empleado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `producto_cod_prod_unique` (`cod_prod`),
  ADD KEY `producto_id_inv_foreign` (`id_inv`);

--
-- Indices de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proveedors_cedula_unique` (`cedula`),
  ADD KEY `proveedors_id_comp_foreign` (`id_comp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compañias`
--
ALTER TABLE `compañias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `produccions`
--
ALTER TABLE `produccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `produccions`
--
ALTER TABLE `produccions`
  ADD CONSTRAINT `produccions_id_empleado_foreign` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_id_inv_foreign` FOREIGN KEY (`id_inv`) REFERENCES `compañias` (`id`);

--
-- Filtros para la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD CONSTRAINT `proveedors_id_comp_foreign` FOREIGN KEY (`id_comp`) REFERENCES `compañias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
