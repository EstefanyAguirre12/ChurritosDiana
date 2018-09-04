-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2018 a las 02:36:20
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barolo`
--
CREATE DATABASE IF NOT EXISTS `barolo` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `barolo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

DROP TABLE IF EXISTS `acciones`;
CREATE TABLE `acciones` (
  `id_accion` int(11) NOT NULL,
  `nombre_accion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_accion` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `IdCargo` int(11) NOT NULL,
  `NombreCargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`IdCargo`, `NombreCargo`, `Descripcion`) VALUES
(1, 'Root', 'Dios'),
(2, 'Administrador', 'Dueño'),
(3, 'Hotelero', 'trabajador de hotel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorialavanderia`
--

DROP TABLE IF EXISTS `categorialavanderia`;
CREATE TABLE `categorialavanderia` (
  `IdCategoria` int(11) NOT NULL,
  `Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorialavanderia`
--

INSERT INTO `categorialavanderia` (`IdCategoria`, `Categoria`) VALUES
(1, 'higiene'),
(3, 'manteleria'),
(2, 'ropa de cama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaproducto`
--

DROP TABLE IF EXISTS `categoriaproducto`;
CREATE TABLE `categoriaproducto` (
  `IdCategoria` int(11) NOT NULL,
  `CategoriaProducto` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoriaproducto`
--

INSERT INTO `categoriaproducto` (`IdCategoria`, `CategoriaProducto`) VALUES
(1, 'Almuerzo'),
(2, 'Bebida'),
(3, 'Cena'),
(4, 'Desayuno'),
(5, 'Entrada'),
(6, 'Postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentatotal`
--

DROP TABLE IF EXISTS `cuentatotal`;
CREATE TABLE `cuentatotal` (
  `IdCuenta` int(11) NOT NULL,
  `IdEnte` int(11) NOT NULL,
  `Fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuentatotal`
--

INSERT INTO `cuentatotal` (`IdCuenta`, `IdEnte`, `Fecha`) VALUES
(1, 2, '12/06/18'),
(2, 1, '12/06/18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleconferencia`
--

DROP TABLE IF EXISTS `detalleconferencia`;
CREATE TABLE `detalleconferencia` (
  `IdReserva` int(11) NOT NULL,
  `IdSala` int(11) NOT NULL,
  `IdMesa` int(11) NOT NULL,
  `CantidadMesas` int(11) NOT NULL,
  `IdSilla` int(11) NOT NULL,
  `CantidadSillas` int(11) NOT NULL,
  `HoraInicio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `HoraFin` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `IdCuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalleconferencia`
--

INSERT INTO `detalleconferencia` (`IdReserva`, `IdSala`, `IdMesa`, `CantidadMesas`, `IdSilla`, `CantidadSillas`, `HoraInicio`, `HoraFin`, `Fecha`, `IdCuenta`) VALUES
(1, 1, 1, 214, 1, 232, '02:32', '12:31', '2018-06-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallereserva`
--

DROP TABLE IF EXISTS `detallereserva`;
CREATE TABLE `detallereserva` (
  `IdDetalle` int(11) NOT NULL,
  `FechaInicio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FechaFin` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `HoraInicio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `IdHabitacion` int(11) NOT NULL,
  `HoraFin` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `IdCuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detallereserva`
--

INSERT INTO `detallereserva` (`IdDetalle`, `FechaInicio`, `FechaFin`, `HoraInicio`, `IdHabitacion`, `HoraFin`, `IdCuenta`) VALUES
(1, '2018-06-28', '2018-06-28', '15:21', 11, '00:12', 1),
(3, '2018-06-28', '2018-06-14', '02:13', 6, '14:33', 1),
(4, '2018-07-28', '2018-06-14', '02:13', 9, '14:33', 1),
(5, '2018-07-10', '2018-06-14', '02:13', 9, '14:33', 1),
(6, '2018-07-15', '2018-06-14', '02:13', 9, '14:33', 1),
(7, '2018-07-20', '2018-06-14', '02:13', 9, '14:33', 1),
(8, '2018-07-10', '2018-06-14', '02:13', 10, '14:33', 1),
(9, '2018-07-20', '2018-06-14', '02:13', 12, '14:33', 1),
(10, '2018-07-27', '2018-07-31', '15:13', 10, '01:05', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallerestaurante`
--

DROP TABLE IF EXISTS `detallerestaurante`;
CREATE TABLE `detallerestaurante` (
  `IdDetalle` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `IdCuenta` int(11) NOT NULL,
  `IdMesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `IdEmpleado` int(11) NOT NULL,
  `NombreEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidosEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DUIEmpleado` int(11) NOT NULL,
  `TelefonoEmpleado` int(11) NOT NULL,
  `DireccionEmpleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FotoEmpleado` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `IdCargo` int(11) NOT NULL,
  `IdGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IdEmpleado`, `NombreEmpleado`, `ApellidosEmpleado`, `DUIEmpleado`, `TelefonoEmpleado`, `DireccionEmpleado`, `FotoEmpleado`, `IdCargo`, `IdGenero`) VALUES
(1, 'Daniel', 'Barrera', 356151515, 515151515, 'San salvador', 'DANICX.JPG', 1, 1),
(2, 'w', 'j', 2121, 122, 'f', 'e', 3, 1),
(3, 'j', 'j', 2121, 122, 'f', 'e', 2, 1),
(4, 'dwef', 'bhbh', 7667, 766, 'gtdewte', '5b0f5acadcf98.jpg', 3, 1),
(5, 'Estefany', 'Aguirre', 12345, 12345, 'gdhr', '5b0f5b1c83bda.jpg', 2, 2),
(6, 'rjjnj', 'njnjnj', 8787, 8787878, 'hhj', '5b10b957f03a7.jpg', 2, 1),
(7, 'gtytvv', 'vtvtvt', 12345, 13245, 'behfbeh', '5b48e613722f5.jpg', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entes`
--

DROP TABLE IF EXISTS `entes`;
CREATE TABLE `entes` (
  `IdEnte` int(11) NOT NULL,
  `Nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DocIdentidad` int(11) NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IdGenero` int(11) NOT NULL,
  `IdTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `entes`
--

INSERT INTO `entes` (`IdEnte`, `Nombres`, `Apellidos`, `DocIdentidad`, `Correo`, `Telefono`, `IdGenero`, `IdTipo`) VALUES
(1, 'Roland', 'Van', 123456, 'sds@mdkf.co', 12345678, 1, 3),
(2, 'Andres', 'Martinez', 12345678, 'andresguapo@gmail.com', 54896624, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado` (
  `IdEstado` int(11) NOT NULL,
  `Estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `Estado`) VALUES
(1, 'Disponible'),
(2, 'Ocupada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `IdGenero` int(11) NOT NULL,
  `NombreGenero` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`IdGenero`, `NombreGenero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE `habitaciones` (
  `IdHabitacion` int(11) NOT NULL,
  `NumeroHabitacion` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Precio` double(6,2) NOT NULL,
  `IdTipoHabitacion` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`IdHabitacion`, `NumeroHabitacion`, `Capacidad`, `Precio`, `IdTipoHabitacion`, `IdEstado`) VALUES
(6, 102, 2, 30.00, 1, 1),
(8, 2, 2, 89.99, 2, 2),
(9, 69, 2, 69.00, 2, 1),
(10, 22, 4, 40.00, 1, 1),
(11, 40, 1, 70.00, 2, 1),
(12, 12, 5, 120.00, 6, 1),
(13, 12, 12, 120.00, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavanderia`
--

DROP TABLE IF EXISTS `lavanderia`;
CREATE TABLE `lavanderia` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Color` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `IdEstado` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `IdMaterial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lavanderia`
--

INSERT INTO `lavanderia` (`Id`, `Nombre`, `Cantidad`, `Color`, `IdEstado`, `IdCategoria`, `IdMaterial`) VALUES
(1, 'Toalla', 75, 'blanco', 1, 1, 1),
(2, 'edredon', 76, 'ocre', 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `IdMaterial` int(11) NOT NULL,
  `Material` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`IdMaterial`, `Material`) VALUES
(1, 'algodon'),
(2, 'lino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesarestaurante`
--

DROP TABLE IF EXISTS `mesarestaurante`;
CREATE TABLE `mesarestaurante` (
  `IdMesaRes` int(11) NOT NULL,
  `NumeroMesa` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesarestaurante`
--

INSERT INTO `mesarestaurante` (`IdMesaRes`, `NumeroMesa`, `Capacidad`, `IdEstado`) VALUES
(1, 1, 6, 1),
(2, 2, 6, 1),
(3, 3, 6, 1),
(4, 4, 8, 1),
(5, 5, 8, 1),
(6, 6, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

DROP TABLE IF EXISTS `mesas`;
CREATE TABLE `mesas` (
  `IdMesa` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`IdMesa`, `Cantidad`, `Nombre`) VALUES
(1, 30, 'Redonda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidohabitacion`
--

DROP TABLE IF EXISTS `pedidohabitacion`;
CREATE TABLE `pedidohabitacion` (
  `IdPedido` int(11) NOT NULL,
  `IdHabitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL,
  `NombreProducto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double(6,2) NOT NULL,
  `IdTipo` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `NombreProducto`, `Descripcion`, `Precio`, `IdTipo`, `IdCategoria`) VALUES
(2, 'Carne', 'Exquisito Brownie con chocolate derretido que te hara volar a las estrellas con su sabor', 6.75, 1, 3),
(3, 'Jugo', 'Sabroso estofado al estilo nordico', 12.00, 3, 2),
(4, 'Huevo', 'Bebida de los dioses', 2.10, 5, 4),
(6, 'Pollo', 'juguito', 3.00, 5, 1),
(7, 'Papas', 'coctel de concha', 1.00, 3, 5),
(8, 'Pastel', 'coctel de concha', 1.00, 3, 6),
(9, 'Brownie', 'chocolate', 1.00, 1, 6),
(10, 'Nachos', 'coctel de concha', 1.00, 3, 5),
(11, 'HotCakes', 'Bebida de los dioses', 2.10, 5, 4),
(12, 'Pupusas', 'Exquisito Brownie con chocolate derretido que te hara volar a las estrellas con su sabor', 6.75, 1, 3),
(13, 'Soda', 'Sabroso estofado al estilo nordico', 12.00, 3, 2),
(14, 'Pasta ', 'juguito', 3.00, 5, 1),
(15, 'Brownie', 'chocolate', 1.00, 1, 6),
(16, 'Pastel', 'coctel de concha', 1.00, 3, 6),
(17, 'Papas', 'coctel de concha', 1.00, 3, 5),
(18, 'Nachos', 'coctel de concha', 1.00, 3, 5),
(19, 'Huevo', 'Bebida de los dioses', 2.10, 5, 4),
(20, 'Vanegas', 'Bebida de los dioses', 2.10, 5, 4),
(21, 'Pupusas', 'Exquisito Brownie con chocolate derretido que te hara volar a las estrellas con su sabor', 6.75, 1, 3),
(22, 'Carne', 'Exquisito Brownie con chocolate derretido que te hara volar a las estrellas con su sabor', 6.75, 1, 3),
(23, 'Jugo', 'Sabroso estofado al estilo nordico', 12.00, 3, 2),
(24, 'Soda', 'Sabroso estofado al estilo nordico', 12.00, 3, 2),
(25, 'Pollo', 'juguito', 3.00, 5, 1),
(26, 'Pasta ', 'juguito', 5.00, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

DROP TABLE IF EXISTS `salas`;
CREATE TABLE `salas` (
  `IdSala` int(11) NOT NULL,
  `NombreSala` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Costo` double NOT NULL,
  `IdEstadoSala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`IdSala`, `NombreSala`, `Descripcion`, `Capacidad`, `Costo`, `IdEstadoSala`) VALUES
(1, 'Sala1', 'sala numero 1', 50, 30, 2),
(2, 'Sala 2', 'sala numero 2', 12, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

DROP TABLE IF EXISTS `sillas`;
CREATE TABLE `sillas` (
  `IdSilla` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sillas`
--

INSERT INTO `sillas` (`IdSilla`, `Cantidad`, `Nombre`) VALUES
(1, 20, 'Formal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoente`
--

DROP TABLE IF EXISTS `tipoente`;
CREATE TABLE `tipoente` (
  `IdTipo` int(11) NOT NULL,
  `TipoEnte` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipoente`
--

INSERT INTO `tipoente` (`IdTipo`, `TipoEnte`) VALUES
(2, 'Clientes'),
(3, 'Huesped');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

DROP TABLE IF EXISTS `tipohabitacion`;
CREATE TABLE `tipohabitacion` (
  `IdTipoHabitacion` int(11) NOT NULL,
  `TipoHabitacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`IdTipoHabitacion`, `TipoHabitacion`) VALUES
(1, 'Doble'),
(2, 'matrimonial'),
(3, 'Individual'),
(4, 'Party'),
(5, 'Suit'),
(6, 'PentHouse');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomesa`
--

DROP TABLE IF EXISTS `tipomesa`;
CREATE TABLE `tipomesa` (
  `IdTipoMesa` int(11) NOT NULL,
  `TipoMesa` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

DROP TABLE IF EXISTS `tipoproducto`;
CREATE TABLE `tipoproducto` (
  `IdTipo` int(11) NOT NULL,
  `TipoProducto` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`IdTipo`, `TipoProducto`) VALUES
(1, 'postre'),
(2, 'plato principal'),
(3, 'sopa'),
(4, 'ensalada'),
(5, 'bebida'),
(6, 'Entrada'),
(7, 'Jugos'),
(8, 'Alcohol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposilla`
--

DROP TABLE IF EXISTS `tiposilla`;
CREATE TABLE `tiposilla` (
  `IdTipoSilla` int(11) NOT NULL,
  `TipoSilla` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ClaveUsuario` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `IdEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NombreUsuario`, `ClaveUsuario`, `IdEmpleado`) VALUES
(1, 'Danicx', '$2y$10$A0WaxTrp1pRZ2Bm/PkG1U.u0ZZCwAWqnnzaiIQ2dXuCRczZOh0v2S', 1),
(3, 'Rolando', '123456', 2),
(5, 'Estefany', '$2y$10$o3Hml2lgnFptuFl47lKIteS5YQ0TUAHMtZw2BAX8MoiM/Qkyj0vVe', 5),
(8, 'Candy', '$2y$10$nbv8..0Y3NPcnzo9lnbEc.1jXQFc8gndc2eXfqhW0n.Y52ClmVndm', 4),
(10, 'Estef', '$2y$10$SculHJeWjwjmseEe6gIpAu0aba2YXL/FabLEEulid9EXkIvduS9FK', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id_accion`),
  ADD UNIQUE KEY `id_accion` (`id_accion`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`IdCargo`),
  ADD UNIQUE KEY `NombreCargo` (`NombreCargo`);

--
-- Indices de la tabla `categorialavanderia`
--
ALTER TABLE `categorialavanderia`
  ADD PRIMARY KEY (`IdCategoria`),
  ADD UNIQUE KEY `Categoria` (`Categoria`);

--
-- Indices de la tabla `categoriaproducto`
--
ALTER TABLE `categoriaproducto`
  ADD PRIMARY KEY (`IdCategoria`),
  ADD UNIQUE KEY `CategoriaProducto` (`CategoriaProducto`);

--
-- Indices de la tabla `cuentatotal`
--
ALTER TABLE `cuentatotal`
  ADD PRIMARY KEY (`IdCuenta`),
  ADD KEY `IdEnte` (`IdEnte`);

--
-- Indices de la tabla `detalleconferencia`
--
ALTER TABLE `detalleconferencia`
  ADD PRIMARY KEY (`IdReserva`),
  ADD KEY `IdSala` (`IdSala`),
  ADD KEY `IdMesa` (`IdMesa`),
  ADD KEY `IdSilla` (`IdSilla`),
  ADD KEY `IdCuenta` (`IdCuenta`);

--
-- Indices de la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  ADD PRIMARY KEY (`IdDetalle`),
  ADD KEY `IdHabitacion` (`IdHabitacion`),
  ADD KEY `IdCuenta` (`IdCuenta`);

--
-- Indices de la tabla `detallerestaurante`
--
ALTER TABLE `detallerestaurante`
  ADD PRIMARY KEY (`IdDetalle`),
  ADD KEY `IdBebida` (`IdProducto`),
  ADD KEY `IdCuenta` (`IdCuenta`),
  ADD KEY `IdMesa` (`IdMesa`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IdEmpleado`),
  ADD KEY `IdCargo` (`IdCargo`),
  ADD KEY `IdGenero` (`IdGenero`),
  ADD KEY `DUIEmpleado` (`DUIEmpleado`);

--
-- Indices de la tabla `entes`
--
ALTER TABLE `entes`
  ADD PRIMARY KEY (`IdEnte`),
  ADD KEY `IdGenero` (`IdGenero`),
  ADD KEY `IdTipo` (`IdTipo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`IdGenero`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`IdHabitacion`),
  ADD KEY `IdTipoHabitacion` (`IdTipoHabitacion`),
  ADD KEY `IdEstado` (`IdEstado`);

--
-- Indices de la tabla `lavanderia`
--
ALTER TABLE `lavanderia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdEstado` (`IdEstado`),
  ADD KEY `IdCategoria` (`IdCategoria`),
  ADD KEY `IdMaterial` (`IdMaterial`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`IdMaterial`);

--
-- Indices de la tabla `mesarestaurante`
--
ALTER TABLE `mesarestaurante`
  ADD PRIMARY KEY (`IdMesaRes`),
  ADD KEY `IdEstado` (`IdEstado`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`IdMesa`);

--
-- Indices de la tabla `pedidohabitacion`
--
ALTER TABLE `pedidohabitacion`
  ADD PRIMARY KEY (`IdPedido`),
  ADD KEY `IdHabitacion` (`IdHabitacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `IdTamanio` (`IdTipo`),
  ADD KEY `IdTipoBebida` (`IdCategoria`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`IdSala`),
  ADD KEY `IdEstadoSala` (`IdEstadoSala`);

--
-- Indices de la tabla `sillas`
--
ALTER TABLE `sillas`
  ADD PRIMARY KEY (`IdSilla`);

--
-- Indices de la tabla `tipoente`
--
ALTER TABLE `tipoente`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Indices de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  ADD PRIMARY KEY (`IdTipoHabitacion`);

--
-- Indices de la tabla `tipomesa`
--
ALTER TABLE `tipomesa`
  ADD PRIMARY KEY (`IdTipoMesa`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Indices de la tabla `tiposilla`
--
ALTER TABLE `tiposilla`
  ADD PRIMARY KEY (`IdTipoSilla`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `NombreUsuario` (`NombreUsuario`),
  ADD UNIQUE KEY `IdEmpleado` (`IdEmpleado`),
  ADD KEY `IdEmpelado` (`IdEmpleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id_accion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `IdCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorialavanderia`
--
ALTER TABLE `categorialavanderia`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoriaproducto`
--
ALTER TABLE `categoriaproducto`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cuentatotal`
--
ALTER TABLE `cuentatotal`
  MODIFY `IdCuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalleconferencia`
--
ALTER TABLE `detalleconferencia`
  MODIFY `IdReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detallerestaurante`
--
ALTER TABLE `detallerestaurante`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `entes`
--
ALTER TABLE `entes`
  MODIFY `IdEnte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `IdHabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `lavanderia`
--
ALTER TABLE `lavanderia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `IdMaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mesarestaurante`
--
ALTER TABLE `mesarestaurante`
  MODIFY `IdMesaRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `IdMesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidohabitacion`
--
ALTER TABLE `pedidohabitacion`
  MODIFY `IdPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `IdSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sillas`
--
ALTER TABLE `sillas`
  MODIFY `IdSilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoente`
--
ALTER TABLE `tipoente`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  MODIFY `IdTipoHabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipomesa`
--
ALTER TABLE `tipomesa`
  MODIFY `IdTipoMesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tiposilla`
--
ALTER TABLE `tiposilla`
  MODIFY `IdTipoSilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentatotal`
--
ALTER TABLE `cuentatotal`
  ADD CONSTRAINT `cuentatotal_ibfk_1` FOREIGN KEY (`IdEnte`) REFERENCES `entes` (`IdEnte`);

--
-- Filtros para la tabla `detalleconferencia`
--
ALTER TABLE `detalleconferencia`
  ADD CONSTRAINT `detalleconferencia_ibfk_1` FOREIGN KEY (`IdMesa`) REFERENCES `mesas` (`IdMesa`),
  ADD CONSTRAINT `detalleconferencia_ibfk_2` FOREIGN KEY (`IdSala`) REFERENCES `salas` (`IdSala`),
  ADD CONSTRAINT `detalleconferencia_ibfk_3` FOREIGN KEY (`IdSilla`) REFERENCES `sillas` (`IdSilla`),
  ADD CONSTRAINT `detalleconferencia_ibfk_4` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`);

--
-- Filtros para la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  ADD CONSTRAINT `detallereserva_ibfk_1` FOREIGN KEY (`IdHabitacion`) REFERENCES `habitaciones` (`IdHabitacion`),
  ADD CONSTRAINT `detallereserva_ibfk_2` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`);

--
-- Filtros para la tabla `detallerestaurante`
--
ALTER TABLE `detallerestaurante`
  ADD CONSTRAINT `detallerestaurante_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`),
  ADD CONSTRAINT `detallerestaurante_ibfk_2` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`),
  ADD CONSTRAINT `detallerestaurante_ibfk_3` FOREIGN KEY (`IdMesa`) REFERENCES `mesarestaurante` (`IdMesaRes`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`IdCargo`) REFERENCES `cargos` (`IdCargo`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`);

--
-- Filtros para la tabla `entes`
--
ALTER TABLE `entes`
  ADD CONSTRAINT `entes_ibfk_1` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`),
  ADD CONSTRAINT `entes_ibfk_2` FOREIGN KEY (`IdTipo`) REFERENCES `tipoente` (`IdTipo`);

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`),
  ADD CONSTRAINT `habitaciones_ibfk_2` FOREIGN KEY (`IdTipoHabitacion`) REFERENCES `tipohabitacion` (`IdTipoHabitacion`);

--
-- Filtros para la tabla `lavanderia`
--
ALTER TABLE `lavanderia`
  ADD CONSTRAINT `lavanderia_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`),
  ADD CONSTRAINT `lavanderia_ibfk_2` FOREIGN KEY (`IdCategoria`) REFERENCES `categorialavanderia` (`IdCategoria`),
  ADD CONSTRAINT `lavanderia_ibfk_3` FOREIGN KEY (`IdMaterial`) REFERENCES `material` (`IdMaterial`);

--
-- Filtros para la tabla `mesarestaurante`
--
ALTER TABLE `mesarestaurante`
  ADD CONSTRAINT `mesarestaurante_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`IdTipo`) REFERENCES `tipoproducto` (`IdTipo`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`IdCategoria`) REFERENCES `categoriaproducto` (`IdCategoria`);

--
-- Filtros para la tabla `salas`
--
ALTER TABLE `salas`
  ADD CONSTRAINT `salas_ibfk_1` FOREIGN KEY (`IdEstadoSala`) REFERENCES `estado` (`IdEstado`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdEmpleado`) REFERENCES `empleados` (`IdEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
