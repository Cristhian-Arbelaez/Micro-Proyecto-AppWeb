-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 20:04:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `micro-proyecto-appweb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ListarProductos` ()   BEGIN
SELECT '' as detalles, 
		p.ID_Producto, 
        p.Nombre,
        p.Precio, 
        p.ID_Proveedor,
        pro.Nombre as Nombre_Proveedor,
        p.Fecha, 
        '' as opciones 
FROM producto p INNER JOIN proveedor pro on p.ID_Proveedor = pro.ID_Proveedor AND p.Precio > 0 ORDER BY p.ID_Producto DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ListarProveedores` ()   BEGIN
SELECT '' as detalles, 
		pro.ID_Proveedor, 
        pro.Nombre,
        pro.Fecha, 
        '' as opciones 
FROM proveedor pro ORDER BY pro.ID_Proveedor DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ObtenerDatosDashboard` ()   BEGIN
DECLARE total_lista_compras int;
DECLARE total_lista_productos int;
DECLARE total_productos int;
DECLARE total_proveedores int;

SET total_lista_compras = (SELECT COUNT(*) FROM lista_compras);
SET total_lista_productos = (SELECT COUNT(*) FROM lista_productos);
SET total_productos = (SELECT COUNT(*) FROM `producto` WHERE Precio > 0);
SET total_proveedores = (SELECT COUNT(*) FROM `proveedor` WHERE ID_Proveedor > 1);

SELECT IFNULL(total_lista_compras,0) AS total_lista_compras,
	   IFNULL(total_lista_productos,0) AS total_lista_productos,
       IFNULL(total_productos,0) AS total_productos,
       IFNULL(total_proveedores,0) AS total_proveedores;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_lista_compras`
--

CREATE TABLE `estado_lista_compras` (
  `ID_Estado_Lista_Compras` int(11) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estado_lista_compras`
--

INSERT INTO `estado_lista_compras` (`ID_Estado_Lista_Compras`, `Estado`) VALUES
(1, 'Comprado'),
(2, 'En Proceso De Compra'),
(3, 'No Comprado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_compras`
--

CREATE TABLE `lista_compras` (
  `ID_Lista_Compras` int(11) NOT NULL,
  `ID_Estado_Lista_Compras` int(11) NOT NULL,
  `ID_Lista_Producto` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Fecha` date NOT NULL,
  `ID_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `lista_compras`
--

INSERT INTO `lista_compras` (`ID_Lista_Compras`, `ID_Estado_Lista_Compras`, `ID_Lista_Producto`, `Nombre`, `Fecha`, `ID_Usuario`) VALUES
(1, 3, 10, 'Compras en exito', '2023-11-09', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_productos`
--

CREATE TABLE `lista_productos` (
  `ID_Lista_Productos` int(11) NOT NULL,
  `ID_Producto1` int(11) NOT NULL,
  `ID_Producto2` int(11) NOT NULL,
  `ID_Producto3` int(11) NOT NULL,
  `ID_Producto4` int(11) NOT NULL,
  `ID_Producto5` int(11) NOT NULL,
  `ID_Producto6` int(11) NOT NULL,
  `ID_Producto7` int(11) NOT NULL,
  `ID_Producto8` int(11) NOT NULL,
  `ID_Producto9` int(11) NOT NULL,
  `ID_Producto10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `lista_productos`
--

INSERT INTO `lista_productos` (`ID_Lista_Productos`, `ID_Producto1`, `ID_Producto2`, `ID_Producto3`, `ID_Producto4`, `ID_Producto5`, `ID_Producto6`, `ID_Producto7`, `ID_Producto8`, `ID_Producto9`, `ID_Producto10`) VALUES
(10, 2, 3, 4, 5, 6, 10, 11, 12, 13, 9),
(11, 3, 4, 3, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Precio` double NOT NULL,
  `ID_Proveedor` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre`, `Precio`, `ID_Proveedor`, `Fecha`) VALUES
(1, 'pezcado', 20000, 4, '2023-11-13'),
(2, 'leche', 3000, 3, '2023-11-09'),
(3, 'panela', 2000, 2, '2023-11-09'),
(4, 'cafe', 3200, 3, '2023-11-09'),
(5, 'jamon', 4600, 4, '2023-11-09'),
(6, 'canela', 1000, 2, '2023-11-09'),
(9, 'carne', 12000, 3, '2023-11-09'),
(10, 'agua', 5000, 3, '2023-11-09'),
(11, 'bombillo', 2300, 3, '2023-11-09'),
(12, 'pastel', 15000, 4, '2023-11-09'),
(13, 'lentejas', 32000, 3, '2023-11-09'),
(14, 'pollo', 23000, 4, '2023-11-14'),
(15, 'arroz', 3400, 4, '2023-11-15'),
(16, 'pera', 400, 4, '2023-11-16'),
(17, 'manzana', 1500, 2, '2023-11-16'),
(18, 'frijoles', 6000, 2, '2023-11-16'),
(20, 'buñuelos', 3000, 4, '2023-11-16'),
(21, 'arepas', 4600, 2, '2023-11-16'),
(22, 'papaya', 5000, 3, '2023-11-17'),
(23, 'chocolatina', 2000, 4, '2023-11-17'),
(24, 'queso', 5000, 4, '2023-11-17'),
(25, 'frutiño', 600, 3, '2023-11-15'),
(26, 'manjo', 200, 2, '2023-11-17'),
(27, 'uva', 200, 3, '2023-11-17'),
(28, 'cerveza', 4000, 3, '2023-11-17'),
(31, 'medias', 5900, 3, '2023-11-17'),
(32, 'mani', 600, 3, '2023-11-17'),
(33, 'maiz', 5000, 2, '2023-11-17'),
(34, 'pilas', 3900, 2, '2023-11-17'),
(35, 'tomate', 4000, 3, '2023-11-17'),
(36, 'camisa', 45000, 3, '2023-11-17'),
(37, 'fresa', 5600, 2, '2023-11-17'),
(39, 'jabon', 3600, 3, '2023-11-17'),
(40, 'mango', 777, 3, '2023-11-17'),
(41, 'mango2', 4677, 3, '2023-11-17'),
(42, 'adobe', 4000, 3, '2023-11-17'),
(43, 'cobija', 45000, 5, '2023-11-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_Proveedor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_Proveedor`, `Nombre`, `Fecha`) VALUES
(1, 'No', '2023-11-09'),
(2, 'Olimpica', '2023-11-09'),
(3, 'Jumbo', '2023-11-09'),
(4, 'Exito', '2023-11-09'),
(5, 'D1', '2023-11-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Correo_Electronico` varchar(100) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Nombres`, `Apellidos`, `Correo_Electronico`, `Contraseña`) VALUES
(1, 'Cristhian', 'Arbelaez', 'carbelaez@unicauca.edu.co', '123456789'),
(2, 'Daniela', 'Paredes', 'danielaparedes@unicauca.edu.co', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado_lista_compras`
--
ALTER TABLE `estado_lista_compras`
  ADD PRIMARY KEY (`ID_Estado_Lista_Compras`);

--
-- Indices de la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  ADD PRIMARY KEY (`ID_Lista_Compras`),
  ADD KEY `FK_ID_Usuario` (`ID_Usuario`),
  ADD KEY `FK_Estado_Lista_Compras` (`ID_Estado_Lista_Compras`) USING BTREE,
  ADD KEY `FK_ID_Lista_Producto` (`ID_Lista_Producto`);

--
-- Indices de la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
  ADD PRIMARY KEY (`ID_Lista_Productos`),
  ADD KEY `FK_ID_Producto` (`ID_Producto1`,`ID_Producto2`,`ID_Producto3`,`ID_Producto4`,`ID_Producto5`,`ID_Producto6`,`ID_Producto7`,`ID_Producto8`,`ID_Producto9`,`ID_Producto10`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `FK_ID_Proveedor` (`ID_Proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado_lista_compras`
--
ALTER TABLE `estado_lista_compras`
  MODIFY `ID_Estado_Lista_Compras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  MODIFY `ID_Lista_Compras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
  MODIFY `ID_Lista_Productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  ADD CONSTRAINT `lista_compras_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_compras_ibfk_2` FOREIGN KEY (`ID_Estado_Lista_Compras`) REFERENCES `estado_lista_compras` (`ID_Estado_Lista_Compras`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_compras_ibfk_3` FOREIGN KEY (`ID_Lista_Producto`) REFERENCES `lista_productos` (`ID_Lista_Productos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
  ADD CONSTRAINT `lista_productos_ibfk_1` FOREIGN KEY (`ID_Producto1`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_10` FOREIGN KEY (`ID_Producto10`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_2` FOREIGN KEY (`ID_Producto2`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_3` FOREIGN KEY (`ID_Producto3`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_4` FOREIGN KEY (`ID_Producto4`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_5` FOREIGN KEY (`ID_Producto5`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_6` FOREIGN KEY (`ID_Producto6`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_7` FOREIGN KEY (`ID_Producto7`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_8` FOREIGN KEY (`ID_Producto8`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_productos_ibfk_9` FOREIGN KEY (`ID_Producto9`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `proveedor` (`ID_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
