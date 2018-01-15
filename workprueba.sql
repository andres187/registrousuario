-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~trusty.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-01-2018 a las 18:50:39
-- Versión del servidor: 5.6.35-1+deb.sury.org~trusty+0.1
-- Versión de PHP: 7.0.26-2+ubuntu14.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workprueba`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_14_191407_add_column_users_table', 2),
(5, '2018_01_14_202336_add_column_users_id', 3);

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `ocupacion` int(11) DEFAULT NULL,
  `identificacion` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tipo`, `ocupacion`, `identificacion`) VALUES
(2, 'pipe', 'prueba2@gmail.com', '$2y$10$FUgF7XhM3xmAaWqJb1jclerGJKNKO84yb5FuIr8cFshIGc4c105cy', NULL, NULL, NULL, 1, 1, 2574512),
(5, 'andres1', 'andresfebo1827@gmail.com', '$2y$10$5/45TaVdzxZhli8nkNna1e0QUojbvKjirFDBMwgF/RMlfCWn/PfVW', NULL, NULL, NULL, 2, 2, 1140873570),
(6, 'andres', 'andresfebo187@gmail.com', '$2y$10$d0sHesVki3jzPZ4iN6ltHefuV88pWbnoYjjgT.B7S71luud8zwj2C', 'DmsOsa1XmN7extIHTd7YxyjLO9RnpMesIw4D6FEpR9CBGLNo8etb9n0MKUl8', '2018-01-15 00:52:03', '2018-01-15 00:52:03', 2, 1, 234567),
(7, 'pipe', 'andresfeebo187@gmail.com', '$2y$10$nXf3jEZ3O8hbRoxNWkSOmO4woC0y1sKnMVOns05YRR/uyA9MKWa1G', 'fBpt3liiUM6Oqb111nP7Homl7AglCPShm1N26WHm7DDL44QrVBebbl8FlOua', '2018-01-15 02:03:21', '2018-01-15 02:44:07', 3, 2, 1234567890),
(8, 'pipelon13', 'pipelon@hotmail.com', '$2y$10$Elm5DI5LNTRjOPsSWD1TjO.8yI3wV5yR7PA2vcWZ4I4ssr8Q.R/x6', NULL, NULL, '2018-01-15 02:40:47', 1, 1, 1140873570),
(10, 'andres', 'andresfebo18337@gmail.com', '$2y$10$b88dtMsIeadsi8adq6/hD.tkRAgF7NuPXdMhSiKXK4ngiUil3sMeq', NULL, NULL, '2018-01-15 02:44:01', 3, 3, 23245355),
(11, 'prueba', 'prueba@prueba.com', '$2y$10$/Ck40rB3TG0wrJjwLchuouqFDfwJyU8r0exN2poi0c6GpM5qoqPzi', 'YlO3Cr7E9MhQYU8MwlemzpRiik3NH6hFSq6RvdwSyKL6bdD17zO7B1GeCwmx', NULL, NULL, 1, 2, 1234567890);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
