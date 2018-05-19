-- Generation time: Fri, 18 May 2018 18:18:19 +0200
-- Host: localhost
-- DB name: barolo
/*!40030 SET NAMES UTF8 */;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `IdCargo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



DROP TABLE IF EXISTS `categoriainmueble`;
CREATE TABLE `categoriainmueble` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



DROP TABLE IF EXISTS `categoriaproducto`;
CREATE TABLE `categoriaproducto` (
  `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `CategoriaProducto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `categoriaproducto` VALUES ('1','Almuerzo'); 


DROP TABLE IF EXISTS `cuentatotal`;
CREATE TABLE `cuentatotal` (
  `IdCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdEnte` int(11) NOT NULL,
  `Fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCuenta`),
  KEY `IdEnte` (`IdEnte`),
  CONSTRAINT `cuentatotal_ibfk_1` FOREIGN KEY (`IdEnte`) REFERENCES `entes` (`IdEnte`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `cuentatotal` VALUES ('1','1','12/02/19'),
('2','1','12/02/18'); 


DROP TABLE IF EXISTS `detalleconferencia`;
CREATE TABLE `detalleconferencia` (
  `IdReserva` int(11) NOT NULL AUTO_INCREMENT,
  `IdSala` int(11) NOT NULL,
  `IdMesa` int(11) NOT NULL,
  `CantidadMesas` int(11) NOT NULL,
  `IdSilla` int(11) NOT NULL,
  `CantidadSillas` int(11) NOT NULL,
  `HoraInicio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `HoraFin` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `IdCuenta` int(11) NOT NULL,
  PRIMARY KEY (`IdReserva`),
  KEY `IdSala` (`IdSala`),
  KEY `IdMesa` (`IdMesa`),
  KEY `IdSilla` (`IdSilla`),
  KEY `IdCuenta` (`IdCuenta`),
  CONSTRAINT `detalleconferencia_ibfk_1` FOREIGN KEY (`IdMesa`) REFERENCES `mesas` (`IdMesa`),
  CONSTRAINT `detalleconferencia_ibfk_2` FOREIGN KEY (`IdSala`) REFERENCES `salas` (`IdSala`),
  CONSTRAINT `detalleconferencia_ibfk_3` FOREIGN KEY (`IdSilla`) REFERENCES `sillas` (`IdSilla`),
  CONSTRAINT `detalleconferencia_ibfk_4` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `detalleconferencia` VALUES ('1','1','1','5','1','5','12:00','16:00','12/06/18','1'),
('2','2','1','5','1','5','12:00','16:00','12/06/18','1'); 


DROP TABLE IF EXISTS `detallereserva`;
CREATE TABLE `detallereserva` (
  `IdDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `FechaInicio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FechaFin` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `HoraInicio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `IdHabitacion` int(11) NOT NULL,
  `HoraFin` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `IdCuenta` int(11) NOT NULL,
  PRIMARY KEY (`IdDetalle`),
  KEY `IdHabitacion` (`IdHabitacion`),
  KEY `IdCuenta` (`IdCuenta`),
  CONSTRAINT `detallereserva_ibfk_1` FOREIGN KEY (`IdHabitacion`) REFERENCES `habitaciones` (`IdHabitacion`),
  CONSTRAINT `detallereserva_ibfk_2` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `detallereserva` VALUES ('1','10/05/18','20/08/18','10:00','1','10:00','1'),
('2','10/05/18','20/08/18','12:00','1','12:00','1'),
('3','10/05/18','20/08/18','10:00','1','10:00','1'); 


DROP TABLE IF EXISTS `detallerestaurante`;
CREATE TABLE `detallerestaurante` (
  `IdDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `IdCuenta` int(11) NOT NULL,
  `IdMesa` int(11) NOT NULL,
  PRIMARY KEY (`IdDetalle`),
  KEY `IdBebida` (`IdProducto`),
  KEY `IdCuenta` (`IdCuenta`),
  KEY `IdMesa` (`IdMesa`),
  CONSTRAINT `detallerestaurante_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`),
  CONSTRAINT `detallerestaurante_ibfk_2` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`),
  CONSTRAINT `detallerestaurante_ibfk_3` FOREIGN KEY (`IdMesa`) REFERENCES `mesarestaurante` (`IdMesaRes`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `detallerestaurante` VALUES ('4','2','1','1','1'),
('5','2','2','1','1'),
('6','5','2','2','1'),
('7','2','1','1','1'); 


DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidosEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DUIEmpleado` int(11) NOT NULL,
  `TelfonoEmpleado` int(11) NOT NULL,
  `DireccionEmpleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FotoEmpleado` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `IdCargo` int(11) NOT NULL,
  `IdGenero` int(11) NOT NULL,
  PRIMARY KEY (`IdEmpleado`),
  KEY `IdCargo` (`IdCargo`),
  KEY `IdGenero` (`IdGenero`),
  CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`IdCargo`) REFERENCES `cargos` (`IdCargo`),
  CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



DROP TABLE IF EXISTS `entes`;
CREATE TABLE `entes` (
  `IdEnte` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DocIdentidad` int(11) NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IdGenero` int(11) NOT NULL,
  `IdTipo` int(11) NOT NULL,
  PRIMARY KEY (`IdEnte`),
  KEY `IdGenero` (`IdGenero`),
  KEY `IdTipo` (`IdTipo`),
  CONSTRAINT `entes_ibfk_1` FOREIGN KEY (`IdGenero`) REFERENCES `genero` (`IdGenero`),
  CONSTRAINT `entes_ibfk_2` FOREIGN KEY (`IdTipo`) REFERENCES `tipoente` (`IdTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `entes` VALUES ('1','Estefany Elizabeth','Aguirre','123456789','estefanyaguirre1200@hotmail.com','12345678','2','1'); 


DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado` (
  `IdEstado` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `estado` VALUES ('1','Disponible'),
('2','Ocupada'); 


DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `IdGenero` int(11) NOT NULL,
  `NombreGenero` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `genero` VALUES ('1','Masculino'),
('2','Femenino'); 


DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE `habitaciones` (
  `IdHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroHabitacion` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `IdTipoHabitacion` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL,
  PRIMARY KEY (`IdHabitacion`),
  KEY `IdTipoHabitacion` (`IdTipoHabitacion`),
  KEY `IdEstado` (`IdEstado`),
  CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`),
  CONSTRAINT `habitaciones_ibfk_2` FOREIGN KEY (`IdTipoHabitacion`) REFERENCES `tipohabitacion` (`IdTipoHabitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `habitaciones` VALUES ('1','102','2','100','2','2'); 


DROP TABLE IF EXISTS `inmuebles`;
CREATE TABLE `inmuebles` (
  `IdInmueble` int(11) NOT NULL AUTO_INCREMENT,
  `NombreInmueble` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Color` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `IdEstado` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `IdMaterial` int(11) NOT NULL,
  PRIMARY KEY (`IdInmueble`),
  KEY `IdEstado` (`IdEstado`),
  KEY `IdCategoria` (`IdCategoria`),
  KEY `IdMaterial` (`IdMaterial`),
  CONSTRAINT `inmuebles_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`),
  CONSTRAINT `inmuebles_ibfk_2` FOREIGN KEY (`IdCategoria`) REFERENCES `categoriainmueble` (`IdCategoria`),
  CONSTRAINT `inmuebles_ibfk_3` FOREIGN KEY (`IdMaterial`) REFERENCES `material` (`IdMaterial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



DROP TABLE IF EXISTS `material`;
CREATE TABLE `material` (
  `IdMaterial` int(11) NOT NULL AUTO_INCREMENT,
  `Material` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdMaterial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



DROP TABLE IF EXISTS `mesarestaurante`;
CREATE TABLE `mesarestaurante` (
  `IdMesaRes` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroMesa` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL,
  PRIMARY KEY (`IdMesaRes`),
  KEY `IdEstado` (`IdEstado`),
  CONSTRAINT `mesarestaurante_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `mesarestaurante` VALUES ('1','5','5','2'); 


DROP TABLE IF EXISTS `mesas`;
CREATE TABLE `mesas` (
  `IdMesa` int(11) NOT NULL AUTO_INCREMENT,
  `IdTipoMesa` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  PRIMARY KEY (`IdMesa`),
  KEY `IdTipoMesa` (`IdTipoMesa`),
  CONSTRAINT `mesas_ibfk_1` FOREIGN KEY (`IdTipoMesa`) REFERENCES `tipomesa` (`IdTipoMesa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `mesas` VALUES ('1','1','10'),
('2','3','15'),
('3','2','5'); 


DROP TABLE IF EXISTS `pedidohabitacion`;
CREATE TABLE `pedidohabitacion` (
  `IdPedido` int(11) NOT NULL AUTO_INCREMENT,
  `FechaPedido` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `IdDetalleRes` int(11) NOT NULL,
  `IdHabitacion` int(11) NOT NULL,
  `IdCuenta` int(11) NOT NULL,
  PRIMARY KEY (`IdPedido`),
  KEY `IdDetallePlato` (`IdDetalleRes`),
  KEY `IdHabitacion` (`IdHabitacion`),
  KEY `IdCuenta` (`IdCuenta`),
  CONSTRAINT `pedidohabitacion_ibfk_4` FOREIGN KEY (`IdHabitacion`) REFERENCES `habitaciones` (`IdHabitacion`),
  CONSTRAINT `pedidohabitacion_ibfk_5` FOREIGN KEY (`IdDetalleRes`) REFERENCES `detallerestaurante` (`IdDetalle`),
  CONSTRAINT `pedidohabitacion_ibfk_6` FOREIGN KEY (`IdCuenta`) REFERENCES `cuentatotal` (`IdCuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double(6,2) NOT NULL,
  `IdTipo` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `IdTamanio` (`IdTipo`),
  KEY `IdTipoBebida` (`IdCategoria`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`IdTipo`) REFERENCES `tipoproducto` (`IdTipo`),
  CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`IdCategoria`) REFERENCES `categoriaproducto` (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `productos` VALUES ('1','Pollo Frito','pollo frito ','15.00','1','1'),
('2','Carne','Carne a la plancha','17.00','1','1'); 


DROP TABLE IF EXISTS `salas`;
CREATE TABLE `salas` (
  `IdSala` int(11) NOT NULL AUTO_INCREMENT,
  `NombreSala` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Costo` double NOT NULL,
  `IdEstadoSala` int(11) NOT NULL,
  PRIMARY KEY (`IdSala`),
  KEY `IdEstadoSala` (`IdEstadoSala`),
  CONSTRAINT `salas_ibfk_1` FOREIGN KEY (`IdEstadoSala`) REFERENCES `estado` (`IdEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `salas` VALUES ('1','Sala 1','sala numero 1','50','70','2'),
('2','Sala 2','sala numero 2','50','70','2'); 


DROP TABLE IF EXISTS `sillas`;
CREATE TABLE `sillas` (
  `IdSilla` int(11) NOT NULL AUTO_INCREMENT,
  `IdTipoSilla` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  PRIMARY KEY (`IdSilla`),
  KEY `IdTipoSilla` (`IdTipoSilla`),
  CONSTRAINT `sillas_ibfk_1` FOREIGN KEY (`IdTipoSilla`) REFERENCES `tiposilla` (`IdTipoSilla`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `sillas` VALUES ('1','3','12'),
('2','2','13'),
('3','1','10'); 


DROP TABLE IF EXISTS `tipoente`;
CREATE TABLE `tipoente` (
  `IdTipo` int(11) NOT NULL AUTO_INCREMENT,
  `TipoEnte` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tipoente` VALUES ('1','Huesped'),
('2','Cliente'); 


DROP TABLE IF EXISTS `tipohabitacion`;
CREATE TABLE `tipohabitacion` (
  `IdTipoHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `TipoHabitacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdTipoHabitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tipohabitacion` VALUES ('1','Individual'),
('2','Doble'); 


DROP TABLE IF EXISTS `tipomesa`;
CREATE TABLE `tipomesa` (
  `IdTipoMesa` int(11) NOT NULL AUTO_INCREMENT,
  `TipoMesa` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdTipoMesa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tipomesa` VALUES ('1','Redonda'),
('2','Cuadrada'),
('3','Rectangular'); 


DROP TABLE IF EXISTS `tipoproducto`;
CREATE TABLE `tipoproducto` (
  `IdTipo` int(11) NOT NULL AUTO_INCREMENT,
  `TipoProducto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tipoproducto` VALUES ('1','Comida'); 


DROP TABLE IF EXISTS `tiposilla`;
CREATE TABLE `tiposilla` (
  `IdTipoSilla` int(11) NOT NULL AUTO_INCREMENT,
  `TipoSilla` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdTipoSilla`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `tiposilla` VALUES ('1','Metalica'),
('2','Madera'),
('3','Escritorio'); 


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ClaveUsuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `IdEmpelado` int(11) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `IdEmpelado` (`IdEmpelado`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdEmpelado`) REFERENCES `empleados` (`IdEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;





/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

