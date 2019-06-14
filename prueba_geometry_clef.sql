-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2019 a las 02:42:14
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_geometry_clef`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencias`
--

CREATE TABLE `conferencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `conferencias`
--

INSERT INTO `conferencias` (`id`, `titulo`, `imagen`, `video`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'The modern PWA cheat sheet', 'conf-1.png', 'https://www.youtube.com/embed/cybhV88KLfI', 'PWAs are now installable on every mobile and desktop OSs, but there is a lot of new things since last year we need to do to create a successful experience. We will start understanding the App Lifecycle on every OS including new APIs, the limitations on iOS and how to deal with them, and how WebAPK works on Android. We will mention challenges on desktop PWAs, including multi-window management and we will finally cover distribution channels, including new DOM events to improve analytics, how to create a custom Install experience, and how to distribute the app in the store.', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(2, 'Shape of the web', 'conf-2.png', 'https://www.youtube.com/embed/SeV_Pqw5egU', '“The Shape Of The Web” is about both accomplishments and challenges that lay in past, present and future of the web - from its technologies employed and its employed technologists.', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(3, 'Aprendiendo programación funcional con JavaScript', 'conf-3.png', 'https://www.youtube.com/embed/e-5obm1G_FY', 'In computer science, functional programming is a programming paradigm or pattern (a style of building the structure and elements of computer programs).Functional Programming treats computation as the evaluation of mathematical functions.', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(4, 'Polyhedra, letting your passions take form', 'conf-4.png', 'https://www.youtube.com/embed/jhdJHBD9Fts', 'For millennia, mathematicians and artists have been fascinated by polyhedra, 3D shapes that encode complex symmetries and relationships.', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(5, 'CSS in JS: Is it worth the hype', 'conf-5.png', 'https://www.youtube.com/embed/gpDBX3hYnTE', 'JSS is a more powerful abstraction over CSS. It uses JavaScript as a language to describe styles in a declarative and maintainable way. It is a high performance JS to CSS compiler which works at runtime and server-side.', '2019-06-13 23:31:04', '2019-06-13 23:31:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_06_11_152837_create_usuarios_table', 1),
(35, '2019_06_11_171208_create_conferencias_table', 1),
(36, '2019_06_12_230838_create_usuario_conferencias_table', 1),
(37, '2019_06_13_074426_create_sessions_table', 1),
(38, '2019_06_13_181113_modify_usuarios_table', 1),
(39, '2019_06_13_200327_modify_usuarios_conferencias_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$O/9JEiCapaLrJPzK2s7TAepNngzZtXs1cASHuNXy5VzbyGp1pRhf.', NULL, '2019-06-14 01:19:38', '2019-06-14 01:19:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$1qeZacxKxZzSrXtNkvUvCOdNVt9bbXvc6kFFj0vlz9uxHtAoBvZH2',
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `password`, `empresa`, `cargo`, `direccion`, `ciudad`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Juan Pablo', 'Rodriguez', 'jprodriguez@prueba-geometry-clef.local', '$2y$10$1qeZacxKxZzSrXtNkvUvCOdNVt9bbXvc6kFFj0vlz9uxHtAoBvZH2', 'Geometry', 'Publicista', 'Calle 100 No.9A-11', 'Bogotá', '3131234567', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(2, 'Carolina', 'Martinez', 'caromar12@gmail.com', '$2y$10$1qeZacxKxZzSrXtNkvUvCOdNVt9bbXvc6kFFj0vlz9uxHtAoBvZH2', 'Abstract Digital', 'Diseñadora grafica', 'Calle 50 No.20-11', 'Cali', '3131234569', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(3, 'Paula', 'Fernandez', 'paula123@gmail.com', '$2y$10$1qeZacxKxZzSrXtNkvUvCOdNVt9bbXvc6kFFj0vlz9uxHtAoBvZH2', 'Lumina Group', 'Publicista', 'Calle 80 No.15-11', 'Bogotá', '3131114567', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(4, 'Roberto', 'Matamoros', 'rmatamoros14@gmail.com', '$2y$10$1qeZacxKxZzSrXtNkvUvCOdNVt9bbXvc6kFFj0vlz9uxHtAoBvZH2', 'Media Vision', 'Planner', 'Calle 12 No.4-11', 'Medellin', '3131118888', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(5, 'Eduardo', 'Santos', 'edsantos@gmail.com', '$2y$10$1qeZacxKxZzSrXtNkvUvCOdNVt9bbXvc6kFFj0vlz9uxHtAoBvZH2', 'Portales Digitales', 'CEO', 'Calle 127 No.7-11', 'Bogota', '6123456', '2019-06-13 23:31:04', '2019-06-13 23:31:04'),
(6, 'Ana Maria', 'Benitez', 'anamar@gmail.com', '$2y$10$vWWiP5.MIuPigsetkQkzF.QzS//rkuOB9sysNQkbhtx7hCV1BjqXK', 'Lumina Digital', 'Periodista', 'Cra 10 60-20', 'Barranquilla', '65231584', '2019-06-13 23:36:26', '2019-06-13 23:36:26'),
(7, 'Claudia', 'Estupinan', 'clau@gmail.com', '$2y$10$MGUxUa.X7zkDl3K/ShPQK.BVR.userxac1JrWj8B5JkOO/1.AR9nW', 'Independiente', 'Programadora', 'Calle 45', 'Bogotá', '213121212', '2019-06-14 01:42:13', '2019-06-14 01:42:13'),
(8, 'Jose', 'Perez', 'jose@gmail.com', '$2y$10$P5/z/stmy0Ay3WO7v8zSo.Vv/RIl3GGfxKT9l8Iwb6fdzbpy45upO', 'Cineco', 'CEO', 'Calle 104 No. 12', 'Bogota', '11111111111', '2019-06-14 01:45:15', '2019-06-14 01:45:15'),
(9, 'Andre', 'Lopez', 'andre@gmail.com', '$2y$10$TzWHCR0VYRsdx2FlXDAZQuWOwWJEAJr6L.RyUW1n9RxAqrbOBMn22', 'Geometry', 'Diseño', 'Calle 90', 'Bogota', '545465454', '2019-06-14 01:47:48', '2019-06-14 01:47:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_conferencias`
--

CREATE TABLE `usuarios_conferencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `conferencia_id` bigint(20) UNSIGNED NOT NULL,
  `total_rep` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_conferencias`
--

INSERT INTO `usuarios_conferencias` (`id`, `usuario_id`, `conferencia_id`, `total_rep`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 6, '2019-06-14 01:06:44', '2019-06-14 05:37:02'),
(2, 6, 2, 2, '2019-06-14 01:16:31', '2019-06-14 05:41:10'),
(3, 6, 3, 7, '2019-06-14 01:16:35', '2019-06-14 05:41:34'),
(4, 8, 3, 1, '2019-06-14 01:54:32', '2019-06-14 01:54:32'),
(5, 6, 5, 2, '2019-06-14 04:24:34', '2019-06-14 05:37:20'),
(6, 6, 4, 2, '2019-06-14 04:24:43', '2019-06-14 04:25:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conferencias`
--
ALTER TABLE `conferencias`
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
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- Indices de la tabla `usuarios_conferencias`
--
ALTER TABLE `usuarios_conferencias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_conferencias_usuario_id_conferencia_id_unique` (`usuario_id`,`conferencia_id`),
  ADD KEY `usuarios_conferencias_usuario_id_index` (`usuario_id`),
  ADD KEY `usuarios_conferencias_conferencia_id_index` (`conferencia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conferencias`
--
ALTER TABLE `conferencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios_conferencias`
--
ALTER TABLE `usuarios_conferencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_conferencias`
--
ALTER TABLE `usuarios_conferencias`
  ADD CONSTRAINT `usuarios_conferencias_conferencia_id_foreign` FOREIGN KEY (`conferencia_id`) REFERENCES `conferencias` (`id`),
  ADD CONSTRAINT `usuarios_conferencias_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
