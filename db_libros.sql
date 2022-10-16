-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 21:02:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `email`, `password`, `Nombre`, `is_admin`) VALUES
(2, 'geronimo@gmail.com', '$2a$12$dhbVcDR1U0FF1IIur7t9cevwuYS.5kDt/JXsncM6.GM25TmbhSmiy', 'geronimo', 1),
(3, 'emicolombo@gmail.com', '$2a$12$l0VUqNoCuBDyhQVmjGir4Oq.V8dA73Ixe7lNX.pTL7wDdMnOL0ujK', 'Emilio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_clientes`
--

CREATE TABLE `compra_clientes` (
  `id_libro` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre_libro` varchar(25) NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `nombre` text NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `imagen`, `nombre`, `precio`) VALUES
(1, 'img/libro1.jpg', 'The Kinfolk ', 500),
(2, 'img/libro2.jpg', 'THE TWO TOWERS ', 1000),
(3, 'img/libro3.jpg', 'the Psyschology of Money', 2500),
(4, 'img/libro4.jpg', 'STUPORE E TREMORI', 500),
(5, 'img/libro5.jpg', 'A STORYTELLING WORKBOOK ', 450),
(6, 'img/libro6.jpg', 'Company of One ', 1000),
(7, 'img/libro7.jpg', 'The Chronicles Of Narnia ', 2500),
(8, 'img/libro8.jpg', 'THE Subtle Art Of Not Giving A Fuck ', 700),
(9, 'img/libro9.jpg', 'I Came Upon A Lighthouse ', 300),
(10, 'img/libro10.jpg', 'How Innovation Works', 3000),
(11, 'img/libro11.jpg', 'Zero To One ', 500),
(12, 'img/libro12.jpg', 'Stephen Hawking ', 1500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `compra_clientes`
--
ALTER TABLE `compra_clientes`
  ADD KEY `id_libro` (`id_libro`) USING BTREE;

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra_clientes`
--
ALTER TABLE `compra_clientes`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra_clientes`
--
ALTER TABLE `compra_clientes`
  ADD CONSTRAINT `compra_clientes_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
