use database `examen`; 
--------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

CREATE TABLE IF NOT EXISTS `orden_compra` (
  `orden_cod` int(100) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `total` int(100) NOT NULL,
  `idnacional` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`orden_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `orden_compra`
--

INSERT INTO `orden_compra` (`orden_cod`, `fecha`, `total`, `idnacional`) VALUES
(15, '2000-01-01', 21000, '11223344-5'),
(16, '2000-01-01', 466, '78.317.999-'),
(17, '2000-01-01', 2147483647, '78.317.999-'),
(18, '2000-01-01', 2147483647, '78.317.999-'),
(19, '2000-01-01', 932, '78.317.999-'),
(20, '2000-01-01', 932, '78.317.999-'),
(21, '2000-01-01', 932, '78.317.999-'),
(22, '2000-01-01', 932, '78.317.999-'),
(23, '', 0, ''),
(24, '', 0, ''),
(25, '', 0, ''),
(26, '', 0, ''),
(27, '2000-01-01', 2222, '11223344-5'),
(28, '', 0, ''),
(29, '', 0, ''),
(30, '', 0, ''),
(31, '', 0, ''),
(32, '', 0, ''),
(33, '', 0, ''),
(34, '', 0, ''),
(35, '', 0, ''),
(36, '', 0, ''),
(37, '', 0, ''),
(38, '', 0, ''),
(39, '', 0, ''),
(40, '', 0, ''),
(41, '', 0, ''),
(42, '', 0, ''),
(43, '', 0, ''),
(44, '', 0, ''),
(45, '', 0, ''),
(46, '', 0, ''),
(47, '', 0, ''),
(48, '2000-01-01', 932, '78.317.999-'),
(49, '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `producto_cod` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `producto_nomb` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`producto_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_cod`, `producto_nomb`) VALUES
('P001', 'Carcaza iPhone6'),
('P002', 'Lamina Portectora iPhone6'),
('P003', 'Carcaza iPhone5'),
('P004', 'Lamina Protectora iPhone5'),
('P005', 'Cargador Universal 2A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_orden`
--

CREATE TABLE IF NOT EXISTS `productos_orden` (
  `producto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(100) NOT NULL,
  `precio_unitario` int(100) NOT NULL,
  `orden_cod` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos_orden`
--

INSERT INTO `productos_orden` (`producto`, `cantidad`, `precio_unitario`, `orden_cod`) VALUES
('P001', 2, 200, 0),
('P003', 4, 200, 0),
('P005', 11, 22, 0),
('P004', 5, 2000, 0),
('P005', 10, 2000, 0),
('P002', 20, 20000, 0),
('P003', 3, 2000, 0),
('P001', 2, 2000, 0),
('P005', 1, 11000, 0),
('P003', 1, 222, 0),
('P002', 1, 22, 0),
('P004', 1, 222, 0),
('P001', 1, 2147483647, 0),
('P001', 1, 1000, 0),
('P001', 1, 300, 0),
('P001', 1, 2147483647, 0),
('P001', 1, 1000, 0),
('P001', 1, 300, 0),
('P002', 1, 44, 0),
('P003', 1, 444, 0),
('P003', 1, 444, 0),
('P002', 1, 44, 0),
('P003', 1, 444, 0),
('P003', 1, 444, 0),
('P002', 1, 44, 0),
('P003', 1, 444, 0),
('P003', 1, 444, 0),
('P002', 1, 44, 0),
('P003', 1, 444, 0),
('P003', 1, 444, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('P001', 1, 2000, 0),
('P001', 1, 200, 0),
('P001', 1, 22, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('P002', 1, 44, 0),
('P003', 1, 444, 0),
('P002', 1, 444, 0),
('', 0, 0, 0),
('', 0, 0, 0),
('', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedor`
--

CREATE TABLE IF NOT EXISTS `Proveedor` (
  `idnacional` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idnacional`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Proveedor`
--

INSERT INTO `Proveedor` (`idnacional`, `nombre`, `direccion`, `telefono`, `email`, `contacto`) VALUES
('11223344-5', 'Shangai Corp', 'Calle nueva 005, Shangai,China', '1234567788888888', 'corre@shangai.com', 'Bilbo Bolson'),
('78.317.999-3', 'Melon', 'reg.Arica #588', '800 600 6000', 'melon@gmail.com', 'no tengo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_autorizados`
--

CREATE TABLE IF NOT EXISTS `usuarios_autorizados` (
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios_autorizados`
--

INSERT INTO `usuarios_autorizados` (`usuario`, `contraseña`) VALUES
('epidemia', '1234'),
('gato_juanito', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
