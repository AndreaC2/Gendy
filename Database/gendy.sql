-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2020 a las 02:21:03
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gendy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOMBRE_CATEGORIA` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `ID_NEGOCIO` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_CITA` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL,
  `HORA_CITA` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_de_pago`
--

CREATE TABLE `medios_de_pago` (
  `ID_MEDIOS_DE_PAGO` int(11) NOT NULL,
  `TIPO_DE_MEDIO_DE_PAGO` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_de_pago_negocio`
--

CREATE TABLE `medios_de_pago_negocio` (
  `ID_NEGOCIO` int(11) NOT NULL,
  `ID_MEDIOS_DE_PAGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `ID_MENU` int(11) NOT NULL,
  `ID_NEGOCIO` int(11) NOT NULL,
  `NOMBRE_PLATO_` mediumtext NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `DESCRIPCION` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `ID_NEGOCIO` int(11) NOT NULL,
  `RAZON_SOCIAL` mediumtext NOT NULL,
  `CONTRASENA_NEGOCIO` mediumtext NOT NULL,
  `CORREO_ELECTRONICO_NEGOCIO` mediumtext NOT NULL,
  `TELEFONO_NEGOCIA` int(11) NOT NULL,
  `DIRECCION_NEGOCIO` mediumtext NOT NULL,
  `LOCALIDAD` mediumtext NOT NULL,
  `PUNTAJE_NEGOCIO` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios_favoritos`
--

CREATE TABLE `negocios_favoritos` (
  `ID_NEGOCIO` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `ID_NEGOCIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID_SERVICIOS` int(11) NOT NULL,
  `ID_NEGOCIO` int(11) NOT NULL,
  `NOMBRE_SERVICIOS` mediumtext NOT NULL,
  `DESCRIPCION_SERVICIOS` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) UNSIGNED NOT NULL,
  `NOMBRE_USUARIO` varchar(250) NOT NULL,
  `APODO_USUARIO` varchar(125) NOT NULL,
  `CONTRASENA` varchar(125) NOT NULL,
  `CORREO_ELECTRONICO` varchar(125) NOT NULL,
  `TELEFONO` int(11) DEFAULT NULL,
  `PUNTAJE_USUARIO` smallint(6) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE_USUARIO`, `APODO_USUARIO`, `CONTRASENA`, `CORREO_ELECTRONICO`, `TELEFONO`, `PUNTAJE_USUARIO`) VALUES
(1, 'Andrea Calderon', 'Andrea', 'Gendy1234', 'ankcalderonga@unal.edu.co', 310123456, 5),
(2, 'Sebastian', 'Sebas', 'asdfg', 'sebas@gmail.com', 1223452114, 5),
(3, 'Pepito perez', 'pepito', 'vamos', 'Pepito@gmail.com', 123456, 5),
(8, '', '', '', '', 0, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`ID_NEGOCIO`,`ID_USUARIO`,`ID_CITA`,`ID_SERVICIO`);

--
-- Indices de la tabla `medios_de_pago`
--
ALTER TABLE `medios_de_pago`
  ADD PRIMARY KEY (`ID_MEDIOS_DE_PAGO`);

--
-- Indices de la tabla `medios_de_pago_negocio`
--
ALTER TABLE `medios_de_pago_negocio`
  ADD PRIMARY KEY (`ID_NEGOCIO`,`ID_MEDIOS_DE_PAGO`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_MENU`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`ID_NEGOCIO`);

--
-- Indices de la tabla `negocios_favoritos`
--
ALTER TABLE `negocios_favoritos`
  ADD PRIMARY KEY (`ID_NEGOCIO`,`ID_USUARIO`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD PRIMARY KEY (`ID_CATEGORIA`,`ID_NEGOCIO`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID_SERVICIOS`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`) USING HASH,
  ADD UNIQUE KEY `CORREO_ELECTRONICO` (`CORREO_ELECTRONICO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_CITA_TIENE_NEG_NEGOCIO` FOREIGN KEY (`ID_NEGOCIO`) REFERENCES `negocio` (`ID_NEGOCIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
