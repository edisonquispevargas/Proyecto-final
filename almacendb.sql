-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2020 a las 00:23:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacendb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` smallint(6) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `telefono`, `email`, `cargo`, `genero`) VALUES
(14, 'Edison Quispe', '983896738', 'edi@gmail.com', 'almacen', 'masculino'),
(15, 'Jhon Huaman', '985621535', 'jh@gmal.com', 'contador', 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `id` smallint(6) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `precio_compra` varchar(10) DEFAULT NULL,
  `precio_venta` varchar(10) DEFAULT NULL,
  `stock` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`id`, `nombre_producto`, `precio_compra`, `precio_venta`, `stock`) VALUES
(18, 'Plomones', 'S/14', 'S/18', '14 cajas'),
(19, 'Lapiceros', 'S/10', 'S/11', '11 cajas'),
(22, 'papel bond', 'S/10', 'S/11', '1 millar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` smallint(6) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `cantidad` varchar(10) DEFAULT NULL,
  `precio_total` varchar(10) DEFAULT NULL,
  `fecha_entrada` date NOT NULL,
  `proveedor` varchar(40) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `cantidad`, `precio_total`, `fecha_entrada`, `proveedor`, `descripcion`) VALUES
(72, 'Lapicero', '12', '$/2', '2020-09-19', 'WTT-CUSCO', '2 cajas'),
(73, 'papel bond', '15', '$/15', '2020-09-27', 'HHT.P/R', ' 1 millar'),
(75, 'cuadernos', '12', 'S/50', '2020-09-04', 'P.R-SAC', 'para tienda 1'),
(76, 'BOLIGRAFO', '5', 'S/100', '2020-09-11', 'GIOVA.S.A', '5-CAJAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` smallint(6) NOT NULL,
  `nombre_proveedor` varchar(50) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `producto_servicio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre_proveedor`, `direccion`, `telefono`, `email`, `producto_servicio`) VALUES
(14, 'THALSND542', 'Lima', '652685415', 'thlsn@gmail.com', 'lapiceros'),
(17, 'HIDROSTAL', 'Lima', '983646894', 'hid@gmail.com', 'Cuadernos'),
(18, 'CIME S.A', 'Arequipa', '985264652', 'cime@gmail.com', 'Libros'),
(19, 'GIOVA. SA', 'La Victoria Lima', '985623235', 'GIOVA@gmail.com', 'Plumones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `contraseña`) VALUES
(3, 'admin', '$2y$10$HcNxEP4i46103mbygSEH6ujFFnOFkS75.RZ7xidZOstAGnzxTSaP2'),
(4, 'unajma', '$2y$10$rkYHrpW07ss8n7B3m07qx.Iw6W6PfrJDeShwZMhYTWMqYK9/OhOmC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precio`
--
ALTER TABLE `precio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `precio`
--
ALTER TABLE `precio`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
