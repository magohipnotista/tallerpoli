-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 02:11:01
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tallerautos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `codigo` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `codigo`, `fecha`) VALUES
(1, 'Nicolás Jiménez Quintero', '100211250', '2022-11-08 07:29:52'),
(2, 'Paola Andrea Correa Quintero', '100118748', '2022-11-08 07:29:52'),
(3, 'Silvia Patricia Fernández Guerra', '100175971', '2022-11-08 07:30:27'),
(4, 'Susan Melisa Fajardo Acosta', '100095885', '2022-11-08 07:30:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `numeroorden` text NOT NULL,
  `numerodeordendown` text NOT NULL,
  `nombrecliente` text NOT NULL,
  `telefono` text NOT NULL,
  `cedula` text NOT NULL,
  `fechainicio` text NOT NULL,
  `fechafinal` text NOT NULL,
  `metododepago` text NOT NULL,
  `vendedor` text NOT NULL,
  `total_antes_iva` text NOT NULL,
  `iva` text NOT NULL,
  `total_despues_iva` text NOT NULL,
  `llave` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `numeroorden`, `numerodeordendown`, `nombrecliente`, `telefono`, `cedula`, `fechainicio`, `fechafinal`, `metododepago`, `vendedor`, `total_antes_iva`, `iva`, `total_despues_iva`, `llave`, `fecha`) VALUES
(1, '340767', '340767down', 'CAMILO CALDERON', '3104018593', '80814376', '2022-11-08 00:33:28', '2022-11-8 0:35:16', 'Binance', 'Silvia Patricia Fernandez Guerra', '1482800', '281732', '1764532', 'SilviaPatriciaFernandezGuerra340767edit', '2022-11-08 05:35:20'),
(2, '10660', '10660down', 'PAOLA CIFUENTES', '3144187981', '52418737', '2022-11-08 00:41:06', '2022-11-8 0:41:11', 'Daviplata', 'Nicolas Jimenez Quintero', '969900', '184281', '1154181', 'NicolasJimenezQuintero10660edit', '2022-11-08 05:41:24'),
(3, '888708', '888708down', 'OSCAR RODRIGUEZ', '3144568974', '54819746', '2022-11-08 02:18:23', '2022-11-8 2:18:28', 'Nequi', 'Paola Andrea Correa Quintero', '830400', '157776', '988176', 'PaolaAndreaCorreaQuintero888708edit', '2022-11-08 07:18:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id` int(11) NOT NULL,
  `nombre_cliente` text NOT NULL,
  `cedula` text NOT NULL,
  `telefono` text NOT NULL,
  `marca_auto` text NOT NULL,
  `placa` text NOT NULL,
  `modelo` text NOT NULL,
  `color` text NOT NULL,
  `empleado_a_cargo` text NOT NULL,
  `foto` text NOT NULL,
  `ProductoAbro` text NOT NULL,
  `cntProductoAbro` text NOT NULL,
  `FajasSuperbelt` text NOT NULL,
  `cntFajasSuperbelt` text NOT NULL,
  `FajasGates` text NOT NULL,
  `cntFajasGates` text NOT NULL,
  `BujiasChampion` text NOT NULL,
  `cntBujiasChampion` text NOT NULL,
  `PastillasHPS` text NOT NULL,
  `cntPastillasHPS` text NOT NULL,
  `Abrazaderasideal` text NOT NULL,
  `cntAbrazaderasideal` text NOT NULL,
  `LiquidodefrenosWagner` text NOT NULL,
  `cntLiquidodefrenosWagner` text NOT NULL,
  `FiltrosFram` text NOT NULL,
  `cntFiltrosFram` text NOT NULL,
  `CablesBB` text NOT NULL,
  `cntCablesBB` text NOT NULL,
  `hora` text NOT NULL,
  `valor_hora` text NOT NULL,
  `llave` text NOT NULL,
  `numeroorden` text NOT NULL,
  `numerodeordendown` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`id`, `nombre_cliente`, `cedula`, `telefono`, `marca_auto`, `placa`, `modelo`, `color`, `empleado_a_cargo`, `foto`, `ProductoAbro`, `cntProductoAbro`, `FajasSuperbelt`, `cntFajasSuperbelt`, `FajasGates`, `cntFajasGates`, `BujiasChampion`, `cntBujiasChampion`, `PastillasHPS`, `cntPastillasHPS`, `Abrazaderasideal`, `cntAbrazaderasideal`, `LiquidodefrenosWagner`, `cntLiquidodefrenosWagner`, `FiltrosFram`, `cntFiltrosFram`, `CablesBB`, `cntCablesBB`, `hora`, `valor_hora`, `llave`, `numeroorden`, `numerodeordendown`, `fecha`) VALUES
(1, 'CAMILO CALDERON', '80814376', '3104018593', 'CITROEN', 'JSW 339', '2022', 'ROJO', 'Silvia Patricia Fernandez Guerra', 'vista/imagenes/autos/CAMILOCALDERON.jpg', 'SI', '2', 'SI', '2', 'SI', '2', 'SI', '2', 'SI', '2', 'SI', '2', 'SI', '2', 'SI', '2', 'SI', '2', '12', '10000', 'SilviaPatriciaFernandezGuerra340767edit', '340767', '340767down', '2022-11-08 05:33:28'),
(2, 'PAOLA CIFUENTES', '52418737', '3144187981', 'MAZDA', 'JSS344', '2000', 'NEGRO', 'Nicolas Jimenez Quintero', 'vista/imagenes/autos/PAOLACIFUENTES.jpg', 'SI', '1', 'NO', '0', 'NO', '0', 'SI', '4', 'SI', '4', 'NO', '0', 'SI', '1', 'SI', '2', 'SI', '1', '5', '15000', 'NicolasJimenezQuintero10660edit', '10660', '10660down', '2022-11-08 05:41:06'),
(3, 'PEDRO GOMEZ', '45798632', '3214789654', 'AUDI', 'JSS233', '2022', 'GRIS', 'Silvia Patricia Fernandez Guerra', 'vista/imagenes/autos/PEDROGOMEZ.jpg', 'NO', '0', 'NO', '0', 'NO', '0', 'SI', '2', 'SI', '4', 'NO', '0', 'SI', '1', 'NO', '0', 'NO', '0', '3', '12000', 'SilviaPatriciaFernandezGuerra516053edit', '516053', '516053down', '2022-11-08 06:04:37'),
(4, 'OSCAR RODRIGUEZ', '54819746', '3144568974', 'CHEVROLET', 'JSS456', '2000', 'ROJO', 'Paola Andrea Correa Quintero', 'vista/imagenes/autos/OSCARRODRIGUEZ.jpg', 'SI', '1', 'NO', '0', 'SI', '2', 'SI', '3', 'SI', '2', 'NO', '0', 'SI', '1', 'SI', '1', 'SI', '1', '6', '15000', 'PaolaAndreaCorreaQuintero888708edit', '888708', '888708down', '2022-11-08 07:18:23'),
(11, 'PEDRO LOPEZ', '808142654', '654654', 'TEST', 'TEST', 'YETS', 'DFSDF', 'Nicolas Jimenez Quintero', 'vista/imagenes/subirFoto.png', 'SI', '2', 'NO', '0', 'NO', '0', 'SI', '2', 'NO', '0', 'NO', '0', 'SI', '2', 'NO', '0', 'SI', '2', '5', '5000', 'NicolasJimenezQuintero943621edit', '943621', '943621down', '2022-11-08 23:57:39'),
(12, 'TEST', '80814376', '310413565', 'TOYOTA', 'JHG344', '2000', 'RPOJO', 'Nicolas Jimenez Quintero', 'vista/imagenes/subirFoto.png', 'SI', '1', 'SI', '1', 'SI', '18', 'SI', '1', 'SI', '1', 'SI', '1', 'SI', '1', 'SI', '1', 'SI', '1', '4', '34000', 'NicolasJimenezQuintero197714edit', '197714', '197714down', '2022-11-09 00:25:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
