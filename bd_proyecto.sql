-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2025 a las 17:54:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--
-- Creación: 26-09-2025 a las 23:44:59
-- Última actualización: 12-12-2025 a las 14:59:53
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `año` int(11) NOT NULL,
  `director` varchar(40) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `genero`, `año`, `director`, `stock`, `imagen`) VALUES
(10, 'Spiderman', 'Acción', 2002, 'Sam raimi', 'stock', 'spiderman1.0.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 25-09-2025 a las 23:25:52
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fechanac` date NOT NULL,
  `rol` varchar(30) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `nombre_usuario`, `email`, `fechanac`, `rol`, `contraseña`) VALUES
(1, 'a', 'as', 'a', '', '0000-00-00', '', '$2y$10$SAE/7.4f/ktm8ybu.MfInuXW75SK.iBha35Wx6QxxNUvdoql8wYBW'),
(2, 'ricardo', 'lopez', 'fulano123', 'carlo23@live.com.ar', '1978-09-12', 'gerente', '$2y$10$7GL8xxuzwy0EK2ADKkdOoOgbqMRAeDy28zo.suuJv.S4eHOxzIfqu'),
(3, 'maximiliano', 'bossio', 'bossio123@', 'bossiohotmail.com', '1976-07-09', 'empleado', '$2y$10$mpLysA7PZ.jsUcTHXG4egOql1LNxCRHDZbDnv5NlxxZOmQ.GhKZOK'),
(4, 'juan', 'perez', 'jperez23', 'jperezexample.com', '1990-12-12', 'gerente', '$2y$10$KXmaeYhliWcxJL0idFojHeiPX5OGxRyPkMjziZdZjZtZYWvG76PhK'),
(5, 'carlos ', 'jimenez', 'carlosj21', 'carlo23live.com.ar', '1980-12-12', 'gerente', '$2y$10$myRs4X3.wtE6/q/zeHAjweaY6EsbCTRBzVb7U0B3V0umtGDHnT1Xu'),
(6, 'roberto', 'sanchez', 'sandro', 'americalive.com', '1945-08-19', 'gerente', '$2y$10$b2fOQNWNE2nzen4580ZTxei/UNdP7Zi9rzVbjrZ30//SH5oZifaQi'),
(7, 'roberto', 'sanchez', 'sandro45', 'eldeamerica@live.com', '1945-08-19', 'gerente', '$2y$10$K.ajZx8FLwJAqbHRLpSWj.zY6LSEoA3Ku1z/fcELdS.j5Aiyjt2lm'),
(8, 'estaban', 'perez', 'eperez', 'anon34@live.com.ar', '1999-12-12', '', '$2y$10$72/THE0nsFMB6eVqRkqbTexcroXmaX9nMVQdNH7cFyocDlCdv//.K'),
(9, 'ricardo', 'martinez', 'ricardom', 'ricardo78@live.com', '1990-02-22', '', '$2y$10$WFmWqycRemB2U/V01BF43OzlXdilVaAS6205TsPY9mddalAd0CfCK'),
(10, 'juan', 'torres', 'juant23', 'juantorres@live.com.ar', '1987-09-12', 'gerente', '$2y$10$2R4LThFDtKLJ9OTFNvl6EOJ4nkI07.dHM0gWcLIKDF.p.HIK3KcxW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
