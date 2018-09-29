-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2018 a las 10:18:00
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

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
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `h_reserva` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `h_servicio` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `h_habitaciones` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `h_registros` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `r_mesas` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `r_ordenes` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `r_registros` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `e_reservacion` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `e_salones` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `e_registro` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `l_registros` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `rr_registro` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `b_datos` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `g_registros` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`IdCargo`, `NombreCargo`, `Descripcion`, `h_reserva`, `h_servicio`, `h_habitaciones`, `h_registros`, `r_mesas`, `r_ordenes`, `r_registros`, `e_reservacion`, `e_salones`, `e_registro`, `l_registros`, `rr_registro`, `b_datos`, `g_registros`) VALUES
(1, 'Root', 'Este tipo de usuario tiene acceso a todo el sistema', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 'Administrador', 'Este a usuario es el cargo de local', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1'),
(3, 'Hotelero', 'Administrador de hotel', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'Eventos', 'Administrador de eventos', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0'),
(6, 'Restaurante', 'Administrador de restaurante', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0');

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
(1, 'Linpieza'),
(3, 'Mateleria'),
(2, 'Ropa');

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
  `numb_cuenta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado_cuenta` int(1) NOT NULL,
  `costo_e` int(10) NOT NULL,
  `costo_r` int(10) NOT NULL,
  `costo_h` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `pago` int(10) NOT NULL,
  `IdEnte` int(11) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuentatotal`
--

INSERT INTO `cuentatotal` (`IdCuenta`, `numb_cuenta`, `estado_cuenta`, `costo_e`, `costo_r`, `costo_h`, `total`, `pago`, `IdEnte`, `Fecha`) VALUES
(1, '21206181006', 0, 0, 0, 0, 60, 0, 2, '2012-06-18 00:00:00'),
(2, '1190920180248', 1, 0, 7, 0, 0, 0, 1, '2018-09-19 02:48:50'),
(26, '1190920180250', 0, 0, 0, 0, 0, 0, 1, '2018-09-19 02:50:22'),
(27, '22190920180251', 0, 0, 0, 0, 0, 0, 22, '2018-09-19 02:51:24'),
(28, '8190920180259', 0, 0, 0, 0, 0, 0, 8, '2018-09-19 02:59:02'),
(29, '24190920181606', 0, 0, 0, 0, 0, 0, 24, '2018-09-19 16:06:58'),
(30, '13270920181626', 0, 0, 0, 0, 0, 0, 13, '2018-09-27 16:26:48'),
(31, '25270920181830', 0, 0, 0, 0, 130, 0, 25, '2018-09-27 18:30:36'),
(32, '26270920181840', 2, 0, 0, 70, 140, 0, 26, '2018-09-27 18:40:14'),
(33, '27270920181911', 0, 0, 0, 0, 0, 0, 27, '2018-09-27 19:11:04'),
(34, '28270920182304', 0, 0, 0, 0, 0, 0, 28, '2018-09-27 23:04:09'),
(35, '29270920182315', 0, 0, 0, 0, 0, 0, 29, '2018-09-27 23:15:30'),
(36, '31290920180312', 0, 0, 0, 0, 0, 0, 31, '2018-09-29 03:12:17'),
(37, '35290920180337', 0, 0, 0, 0, 0, 0, 35, '2018-09-29 03:37:43'),
(38, '3290920180614', 2, 50, 12, 90, 152, 160, 3, '2018-09-29 06:14:58'),
(39, '3290920181014', 0, 0, 0, 0, 0, 0, 3, '2018-09-29 10:14:29');

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
(1, 3, 2, 12, 1, 54, '04:54', '05:54', '2018-09-30', 38);

--
-- Disparadores `detalleconferencia`
--
DROP TRIGGER IF EXISTS `update_salas`;
DELIMITER $$
CREATE TRIGGER `update_salas` AFTER INSERT ON `detalleconferencia` FOR EACH ROW BEGIN
UPDATE salas SET salas.IdEstadoSala=2 WHERE salas.IdSala= NEW.IdSala;
UPDATE cuentatotal SET cuentatotal.costo_e = ( SELECT SUM(salas.Costo) FROM salas INNER JOIN detalleconferencia ON detalleconferencia.IdSala = salas.IdSala WHERE detalleconferencia.IdCuenta= NEW.IdCuenta ) , cuentatotal.total=(SELECT SUM(cuentatotal.costo_e+ cuentatotal.costo_r+cuentatotal.costo_h))
WHERE cuentatotal.IdCuenta = NEW.IdCuenta;  
END
$$
DELIMITER ;

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
(1, '2018-09-29', '2018-09-30', '07:59', 8, '07:59', 38);

--
-- Disparadores `detallereserva`
--
DROP TRIGGER IF EXISTS `update_habitaciones`;
DELIMITER $$
CREATE TRIGGER `update_habitaciones` AFTER INSERT ON `detallereserva` FOR EACH ROW BEGIN
UPDATE habitaciones SET habitaciones.IdEstado=2 WHERE habitaciones.IdHabitacion= NEW.IdHabitacion;
UPDATE cuentatotal SET cuentatotal.costo_h = ( SELECT SUM(habitaciones.Precio) FROM habitaciones INNER JOIN detallereserva ON detallereserva.IdHabitacion = habitaciones.IdHabitacion WHERE detallereserva.IdCuenta= NEW.IdCuenta ) , cuentatotal.total=(SELECT SUM(cuentatotal.costo_e+ cuentatotal.costo_r+cuentatotal.costo_h))
WHERE cuentatotal.IdCuenta = NEW.IdCuenta; 
END
$$
DELIMITER ;

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

--
-- Volcado de datos para la tabla `detallerestaurante`
--

INSERT INTO `detallerestaurante` (`IdDetalle`, `Cantidad`, `IdProducto`, `IdCuenta`, `IdMesa`) VALUES
(1, 5, 13, 38, 1);

--
-- Disparadores `detallerestaurante`
--
DROP TRIGGER IF EXISTS `update_resturante`;
DELIMITER $$
CREATE TRIGGER `update_resturante` AFTER INSERT ON `detallerestaurante` FOR EACH ROW BEGIN
UPDATE cuentatotal SET cuentatotal.costo_r = ( SELECT SUM(productos.Precio) FROM productos INNER JOIN detallerestaurante ON detallerestaurante.IdProducto = productos.IdProducto WHERE detallerestaurante.IdCuenta= NEW.IdCuenta ) , cuentatotal.total=(SELECT SUM(cuentatotal.costo_e+ cuentatotal.costo_r+cuentatotal.costo_h))
WHERE cuentatotal.IdCuenta = NEW.IdCuenta; 

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `IdEmpleado` int(11) NOT NULL,
  `NombreEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidosEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DUIEmpleado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `TelefonoEmpleado` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `DireccionEmpleado` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `correo_empleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `FotoEmpleado` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `IdCargo` int(11) NOT NULL,
  `IdGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IdEmpleado`, `NombreEmpleado`, `ApellidosEmpleado`, `DUIEmpleado`, `TelefonoEmpleado`, `DireccionEmpleado`, `correo_empleado`, `FotoEmpleado`, `IdCargo`, `IdGenero`) VALUES
(1, 'Daniel Alexander', 'Barrera Marroquin', '99999999-9', '48990908', 'San salvador', 'daniel.alex.barrera@gmail.com', 'DANICX.JPG', 1, 1),
(2, 'David andres', 'Godines', '059586021', '73237747', '89 Avenida Norte y Calle 11 Poniente\r\n', 'david.godines@gmail.com', '5b0f5acadcf98.jpg', 3, 1),
(3, 'Erick jose', 'Recinos', '550955632', '13271176', 'Colonia Buenos Aires 3, Diagonal Centroamérica, Avenida Alvarado, contiguo al Ministerio de Hacienda', 'erick.recinos@hotmail.com', '5b48e613722f5.jpg', 2, 1),
(4, 'Felix gerardo', 'palacios', '252247811', '73237747', ' Colonia San Francisco, Avenida Las Camelias y Calle Los Abetos No. 21', 'felix.cliford@gmail.com', '5b0f5acadcf98.jpg', 3, 1),
(5, 'Estefany', 'Aguirre', '913826261', '82944371', ' 1ª Calle Poniente entre 60ª Avenida Norte y Boulevard Constitución', 'estefany.aguirre@hotmil.com', '5b0f5b1c83bda.jpg', 2, 2),
(6, 'Daniel Alejandro', 'Merches', '402884411', '37576418', ' Colonia San Francisco, Avenida Las Camelias y Calle Los Abetos No. 21', 'daniel.alegandro@gmail.com', '5b10b957f03a7.jpg', 2, 1),
(7, 'Jose andres', 'Martines', '492424449', '22603910', 'Avenida Monseñor Romero y Final Calle 5 de Noviembre entre 21ª y 23ª Calle Oriente, una cuadra al no', 'andres.martines@hotmail.com', '5b48e613722f5.jpg', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entes`
--

DROP TABLE IF EXISTS `entes`;
CREATE TABLE `entes` (
  `IdEnte` int(11) NOT NULL,
  `Nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DocIdentidad` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `IdGenero` int(11) NOT NULL,
  `IdTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `entes`
--

INSERT INTO `entes` (`IdEnte`, `Nombres`, `Apellidos`, `DocIdentidad`, `Correo`, `Telefono`, `IdGenero`, `IdTipo`) VALUES
(1, 'Roland', 'Van', '571682960', 'sds@mdkf.co', '19432849', 1, 3),
(2, 'Andres', 'Martinez', '481471199', 'andresguapo@gmail.com', '96351801', 1, 2),
(3, 'Alexander', 'Alexander', '331645619', 'daniel.alex.barrfdfdera@gmail.com', '34160163', 1, 2),
(4, 'ella', 'no', '952884643', 'daniel.alex.barrera@gmail.com', '07728671', 1, 3),
(6, '76825348', 'Alexander', '232323232', 'daniel.aldsdsex.barrera@gmail.com', '56845471', 1, 2),
(8, 'dsfdfsfds', 'fdsfsdf', '952884624', 'ddfdfaniel.alex.gfgfdgbarrera@gmail.com', '28343154', 1, 2),
(13, 'dfdsssssssssssss', 'ssfdsdddddddddd', '952884626', 'daniel.adfdlex.barrera@gmail.com', '67728491', 1, 2),
(16, 'dsfdfsfdsfds', 'fsdfsdfsdf', '148203874', 'sadsalex.barrera@gmail.com', '58453137', 1, 2),
(17, 'sdfsdfsdfds', 'fsdfsdfsdf', '548303874', 'danbarrera@gmail.co', '85841925', 2, 3),
(18, 'dffffffffff', 'dsaasdas', '148303877', 'daniea@gmail.com', '50597369', 1, 2),
(19, 'dsadsadsadsad', 'adsagsvs', '132313245', 'arrera@gmail.com', '60515665', 1, 3),
(22, 'dfdggfdgdf', 'gdfgdfgdf', '565634543', 'danbarrera@gmail.com', '91313237', 1, 2),
(24, 'Ariel', 'Reyes', '132324234', 'arel.reyes@gmail.com', '46787105', 1, 2),
(25, 'Estefany', 'Arce', '148303874', 'tefaxd@hotmail.com', '71078029', 2, 3),
(26, 'Jhon', 'Olmedo', '283431541', 'olmedo@hotmail.com', '85125366', 1, 3),
(27, 'Jhon', 'Cruz', '049217414', 'jhoncrz@hotmail.com', '90364043', 1, 3),
(28, 'Michelle', 'Matamoros', '012345678', 'michell.matamoros@gmail.com', '73254899', 2, 2),
(29, 'Gabriel', 'Chavez', '987654321', 'gabriel.chavez@gmail.com', '78956642', 1, 2),
(30, 'dsadsadasd', 'Alexander', '23324242-3', 'daniel.aadsalex.barrera@gmail.com', '3432-3243', 1, 2),
(31, 'sadsadasd', 'adasdasd', '23213123-1', 'daniel.alesweqwex.barrera@gmail.com', '2321-3121', 1, 2),
(32, 'fsdfsdfs', 'dfsdfsdfsd', '32424432-_', 'daniel.alex.barrera@gmail.com32323', '7682-548_', 1, 2),
(33, 'sdfsdfsdfsd', 'fdsfsdfsdfsd', '2321322_-_', 'dani423432el.alex.barrera@gmail.com3', '2332-4324', 1, 2),
(34, 'srefdsfsd', 'fsdfsdf', '2343243_-_', 'daniel.alex.barrera@gmail.com', '4334-3242', 1, 2),
(35, '76825348', 'Alexander', '34234234-2', 'daniel423423arrera@gmail.com', '2342-3424', 1, 2),
(36, '76825348', 'Alexander', '45353453-4', 'daniel.alex.barrera@gmail.com', '7682-5348', 1, 2),
(37, 'sdsadas', 'dasd', '21222222-2', 'daniel.aleasdasdarrera@gmail.com', '3232-3221', 1, 2);

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
  `NumeroHabitacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Precio` double(6,2) NOT NULL,
  `IdTipoHabitacion` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`IdHabitacion`, `NumeroHabitacion`, `Capacidad`, `Precio`, `IdTipoHabitacion`, `IdEstado`) VALUES
(6, 'Presidencial 1', 10, 30.00, 1, 1),
(8, 'Individual 1', 1, 89.99, 2, 2),
(9, 'Familiar 1', 4, 69.00, 2, 1),
(10, 'Individual 2', 1, 40.00, 1, 1),
(11, 'Lujo 1', 5, 70.00, 2, 1),
(12, 'Pareja 1', 2, 120.00, 6, 1),
(13, 'Lujo 2', 5, 120.00, 5, 1),
(14, 'Pareja 2', 2, 12.00, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huespedusuario`
--

DROP TABLE IF EXISTS `huespedusuario`;
CREATE TABLE `huespedusuario` (
  `IdUsuario` int(11) NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `NumeroHab` int(4) NOT NULL,
  `IdHuesped` int(11) NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `huespedusuario`
--

INSERT INTO `huespedusuario` (`IdUsuario`, `Clave`, `NumeroHab`, `IdHuesped`, `Usuario`) VALUES
(2, '$2y$10$HSDpFJAZGpYEvYsYJbm3POb4XeBdyeyBpSBZTVMLOuWyvgBTw3wUS', 6, 1, 'Andress'),
(3, '$2y$10$tYMNzlLI2ConOo.LL9iLPOZH5Z6Zx/yRb0LF4gA2vOZOqGsfMuB3i', 100, 2, 'Estefany');

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
(6, 6, 5, 1),
(7, 1, 6, 1);

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
(1, 30, 'Redonda'),
(2, 20, 'Glorieta'),
(3, 50, 'Cuadrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidohabitacion`
--

DROP TABLE IF EXISTS `pedidohabitacion`;
CREATE TABLE `pedidohabitacion` (
  `IdPedido` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` int(1) NOT NULL,
  `IdCuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidohabitacion`
--

INSERT INTO `pedidohabitacion` (`IdPedido`, `IdProducto`, `Cantidad`, `Estado`, `IdCuenta`) VALUES
(2, 6, 2, 1, 1),
(16, 4, 1, 1, 2),
(18, 12, 1, 1, 1);

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
(26, 'Pasta ', 'juguito', 5.00, 5, 1),
(27, 'Palitos de queso', 'Ricos palitos de queso, para tu antojo', 0.00, 6, 5),
(28, 'Palitos de queso', 'Ricos palitos de queso, para tu antojo', 2.00, 6, 5),
(29, 'Chimichangas', 'Ricas tortillas con frijoles de la casa, mix de carnes y bañado en nuestro adereso secreto', 4.50, 2, 1),
(30, 'Chimichangas', 'Ricas tortillitas con frijoles de la casa, mix de nuestras carnes y adereso secreto.', 450.00, 2, 1),
(31, 'Estofado Nordico', 'Rico estofado nordico originario del comedor de batalla', 599.00, 2, 3);

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
(1, 'Sala1', 'Sala recomendad para eventos pequeños', 50, 30, 1),
(2, 'Sala 2', 'sala recomendad para eventos de larga duracion', 12, 12, 1),
(3, 'Sala 3', 'sala recomendad para eventos de en dias calurosos', 400, 50, 2);

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
(1, 'Bebida'),
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
  `IdEmpleado` int(11) NOT NULL,
  `tiempo_clave` datetime NOT NULL,
  `numb_ingresos` int(1) NOT NULL,
  `tiempo_intentos` datetime NOT NULL,
  `estado_sesion` int(1) NOT NULL,
  `Codigo` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NombreUsuario`, `ClaveUsuario`, `IdEmpleado`, `tiempo_clave`, `numb_ingresos`, `tiempo_intentos`, `estado_sesion`, `Codigo`) VALUES
(12, 'Danicx', '$2y$10$KIY341NPzpUyjkJHJ7sKmeRDBo7dsfBahhMoYStjbSuJHNzd8xbVe', 1, '2018-09-06 00:00:00', 0, '2018-09-21 00:00:00', 0, '12345'),
(13, 'Alfa1234', '$2y$10$wBmdorn7rJ9udaQIBny0d.jntrbtSCdLabw.lN7.lYj5mU7sL8MuC', 4, '2018-09-06 00:00:00', 0, '2018-09-07 00:00:00', 0, 'GH620');

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
  ADD UNIQUE KEY `numb_cuenta` (`numb_cuenta`),
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
  ADD UNIQUE KEY `DUIEmpleado_2` (`DUIEmpleado`),
  ADD KEY `IdCargo` (`IdCargo`),
  ADD KEY `IdGenero` (`IdGenero`),
  ADD KEY `DUIEmpleado` (`DUIEmpleado`);

--
-- Indices de la tabla `entes`
--
ALTER TABLE `entes`
  ADD PRIMARY KEY (`IdEnte`),
  ADD UNIQUE KEY `DocIdentidad` (`DocIdentidad`),
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
  ADD UNIQUE KEY `NumeroHabitacion` (`NumeroHabitacion`),
  ADD KEY `IdTipoHabitacion` (`IdTipoHabitacion`),
  ADD KEY `IdEstado` (`IdEstado`);

--
-- Indices de la tabla `huespedusuario`
--
ALTER TABLE `huespedusuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `IdHuesped` (`IdHuesped`);

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
  ADD KEY `IdCuenta` (`IdCuenta`),
  ADD KEY `IdProducto` (`IdProducto`);

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
  ADD UNIQUE KEY `NombreSala` (`NombreSala`),
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
  MODIFY `IdCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `IdCuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `detalleconferencia`
--
ALTER TABLE `detalleconferencia`
  MODIFY `IdReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detallereserva`
--
ALTER TABLE `detallereserva`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detallerestaurante`
--
ALTER TABLE `detallerestaurante`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `entes`
--
ALTER TABLE `entes`
  MODIFY `IdEnte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `IdHabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `huespedusuario`
--
ALTER TABLE `huespedusuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `IdMesaRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `IdMesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidohabitacion`
--
ALTER TABLE `pedidohabitacion`
  MODIFY `IdPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `IdSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- Filtros para la tabla `huespedusuario`
--
ALTER TABLE `huespedusuario`
  ADD CONSTRAINT `huespedusuario_ibfk_1` FOREIGN KEY (`IdHuesped`) REFERENCES `entes` (`IdEnte`);

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
-- Filtros para la tabla `pedidohabitacion`
--
ALTER TABLE `pedidohabitacion`
  ADD CONSTRAINT `pedidohabitacion_ibfk_1` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`),
  ADD CONSTRAINT `pedidohabitacion_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`);

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
