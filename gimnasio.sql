-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 20:39:48
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admon`
--

CREATE TABLE `admon` (
  `idAdmon` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admon`
--

INSERT INTO `admon` (`idAdmon`, `user`, `password`) VALUES
(1, 'carlos', 'carlos123'),
(1, 'pep', 'pep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `idUsuario` int(11) NOT NULL,
  `fechaPago` varchar(40) NOT NULL,
  `fechaExpiracion` varchar(40) NOT NULL,
  `monto` float NOT NULL,
  `estudiante` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`idUsuario`, `fechaPago`, `fechaExpiracion`, `monto`, `estudiante`) VALUES
(4, '9/20/2023', '10/20/2023', 0, 0),
(3, '9/20/2023', '10/20/2023', 0, 0),
(6, '9/20/2023', '10/20/2023', 0, 0),
(7, '9/20/2023', '10/20/2023', 0, 1),
(1, '9/20/2023', '10/20/2023', 0, 0),
(0, '9/20/2023', '10/20/2023', 0, 0),
(2, '9/20/2023', '10/20/2023', 0, 0),
(5, '9/20/2023', '10/20/2023', 0, 1),
(8, '9/23/2023', '10/23/2023', 0, 1),
(9, '', '', 250, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `idUsuario` int(11) NOT NULL,
  `fecha` varchar(40) NOT NULL,
  `monto` float NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`idUsuario`, `fecha`, `monto`, `tipo`) VALUES
(1, 'Wed Sep 20 2023', 250, 'Renovacion Membresia'),
(2, 'Wed Sep 20 2023', 250, 'Renovacion Membresia'),
(3, 'Wed Sep 20 2023', 250, 'Renovacion Membresia'),
(4, 'Wed Sep 20 2023', 250, 'Renovacion Membresia'),
(5, 'Wed Sep 20 2023', 150, 'Renovacion Membresia'),
(7, 'Wed Sep 20 2023', 150, 'Renovacion Membresia'),
(-1, 'Wed Sep 20 2023', 25, 'Visita Del Dia'),
(0, 'Wed Sep 20 2023', 250, 'Renovacion Membresia'),
(6, 'Wed Sep 20 2023', 250, 'Renovacion Membresia'),
(-1, 'Fri Sep 22 2023', 25, 'Visita Del Dia'),
(-1, 'Fri Sep 22 2023', 15, 'Visita Del Dia'),
(-1, 'Fri Sep 22 2023', 15, 'Visita Del Dia'),
(8, 'Sat Sep 23 2023', 150, 'Renovacion Membresia'),
(-1, 'Sat Sep 23 2023', 15, 'Visita Del Dia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `enfermedad` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombres`, `apellidos`, `telefono`, `sexo`, `edad`, `email`, `enfermedad`) VALUES
(1, 'José Miguel Ángel', 'Gudiño Galindo', '34117312', 'Hombre', 21, 'Gmail', 'Too Chido'),
(2, 'Liliana', 'MArtinez', '341', 'Hombre', 123, 'Gmail', 'Todo Chido'),
(0, 'Carlos Iván', 'Palacios Guzmán', '342', 'Hombre', 22, 'Homail', 'Todo CHido'),
(3, 'Ñoño', 'Giralafes', '123', 'Mujer', 123, '123', '123'),
(4, '666', '66', '6', 'Mujer', 6, '66', '6'),
(5, 'nonono', 'nono', '132', 'Mujer', 123, 'nat_dante@live.com', 'on'),
(6, '123', '123', '123', 'Hombre', 123, '123', '123'),
(7, 'monse', 'villalobos', '12', 'Mujer', 12, '12', '122'),
(8, 'Claudia', 'Yaneth', '34117312', 'Mujer', 30, 'Nose', 'Todo Chido'),
(9, 'pepito', '123', '23', 'Hombre', 123, '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
