-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2019 a las 19:11:51
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `podocarpusdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aves`
--

CREATE TABLE `aves` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_c` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `habitat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aves`
--

INSERT INTO `aves` (`id`, `nombre`, `nombre_c`, `descripcion`, `habitat`) VALUES
(1, 'Águila', 'Aquila chrysaetos', 'Águila es el nombre dado a las mayores aves depredadoras. Las diversas especies y subespecies de águilas pueden encontrarse en casi cualquier parte del mundo excepto en la Antártida. Son miembros de las aves de presa, del orden de Accipitriformes, (o Falconiformes acorde a una clasificación anterior), familia Accipitridae, subfamilia Buteoninae.', 'Zona montañosa con bosques');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nom_servicio` varchar(100) NOT NULL,
  `fecha_ini_tem` varchar(100) NOT NULL,
  `fecha_fin_tem` varchar(50) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `informacion` varchar(100) NOT NULL,
  `galeria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `domicilio` varchar(300) NOT NULL,
  `nacionalidad` varchar(150) NOT NULL,
  `lugarEncargo` varchar(150) NOT NULL,
  `urlAvatar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `nombres`, `apellidos`, `correo`, `celular`, `domicilio`, `nacionalidad`, `lugarEncargo`, `urlAvatar`) VALUES
(1, 'Juan', 'Perez', 'jperez@gmail.com', '0999999999', 'Manuel Agustin Aguirre y SUcre', 'Ecuatoriana', 'PN Podocarpus Refugio', 'url'),
(4, 'Ramiro', 'Leon', 'rleon1@yahoo.es', '0919191919', ' bolivar y sucre', 'venezuelan', 'Administracion', 'url1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `rol`, `user`, `password`) VALUES
(1, 'Ramiro', 'Ramirez', '12@gmail.com', 1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aves`
--
ALTER TABLE `aves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT de la tabla `aves`
--
ALTER TABLE `aves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
