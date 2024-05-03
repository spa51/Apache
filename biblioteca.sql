-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2021 a las 20:16:07
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_libro` int(10) NOT NULL,
  `nombre_aut` varchar(20) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_libro`, `nombre_aut`, `nacionalidad`, `fecha_de_nacimiento`) VALUES
(25, 'Adrian Calvarro Lamo', 'Mexico', '1943-06-18'),
(50, 'Habiba El Bouzidi Ll', 'Colombia', '1930-01-22'),
(95, 'Asad Espinosa Valenz', 'Colombia', '1950-04-02'),
(98, 'Herminio Sieso Berre', 'Argentina', '1900-07-20'),
(99, 'Efren Sanmarco Cueco', 'Colombia', '1920-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lector`
--

CREATE TABLE `lector` (
  `contador_lec` int(11) NOT NULL,
  `id_lector` int(10) NOT NULL,
  `nombre_lec` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `prestamos` int(1) NOT NULL,
  `multa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `lector`
--

INSERT INTO `lector` (`contador_lec`, `id_lector`, `nombre_lec`, `telefono`, `prestamos`, `multa`) VALUES
(1, 112, 'Silvio Barraza Badda', '6462114051', 1, 0),
(2, 138, 'Carlino Chale Carabe', '5554111036', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `contador_lib` int(10) NOT NULL,
  `id_libro` int(10) NOT NULL,
  `nombre_lib` varchar(40) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `año` year(4) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`contador_lib`, `id_libro`, `nombre_lib`, `genero`, `editorial`, `año`, `estado`) VALUES
(5, 25, 'La Bolsa Judoca', 'Geología', 'Editorial Santillana', 1982, 'Prestado'),
(4, 50, 'El Mazo Docente', 'Humor', 'Editorial Voluntad', 1981, 'Prestado'),
(1, 95, 'La Nostalgia Mandril', 'Deportes', 'Editorial Solar', 1982, 'Prestado'),
(2, 98, 'El Algodón Pantera', 'Fantasía', 'Paradigma Libros', 1939, 'Prestado'),
(3, 99, 'El Gordo Comandante', 'Religión', 'Editorial Solar', 1953, 'Biblioteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `contador_pre` int(11) NOT NULL,
  `id_lector` int(10) NOT NULL,
  `id_libro` int(10) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `marca` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`contador_pre`, `id_lector`, `id_libro`, `fecha_prestamo`, `fecha_devolucion`, `marca`) VALUES
(1, 112, 25, '2021-09-08', '2021-09-23', 1),
(4, 112, 99, '2021-10-11', '2021-10-14', 1),
(5, 112, 98, '2021-10-13', '2021-10-28', 1),
(8, 112, 95, '2021-10-27', '0000-00-00', 0),
(9, 138, 98, '2021-10-18', '0000-00-00', 0),
(10, 138, 25, '2021-10-18', '0000-00-00', 0),
(11, 138, 50, '2021-10-18', '0000-00-00', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `lector`
--
ALTER TABLE `lector`
  ADD PRIMARY KEY (`id_lector`),
  ADD UNIQUE KEY `contador_lec` (`contador_lec`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD UNIQUE KEY `contador_lib` (`contador_lib`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`contador_pre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lector`
--
ALTER TABLE `lector`
  MODIFY `contador_lec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `contador_lib` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `contador_pre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
