-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2016 a las 06:43:10
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cnbv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
`idEstatus` int(11) NOT NULL,
  `nombreEstatus` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcionEstatus` varchar(150) COLLATE utf8_bin NOT NULL,
  `idUsuarioCreadorEstatus` int(11) NOT NULL,
  `fechaCreacionEstatus` datetime NOT NULL,
  `idUsuarioModificadorEstatus` int(11) NOT NULL,
  `fechaModificacionEstatus` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pat`
--

CREATE TABLE IF NOT EXISTS `pat` (
`idPat` int(11) NOT NULL,
  `nombrePat` varchar(40) COLLATE utf8_bin NOT NULL,
  `anioPat` int(11) NOT NULL,
  `auditoriasPat` int(11) NOT NULL,
  `seguimientosPat` int(11) NOT NULL,
  `observacionesPat` int(11) NOT NULL,
  `prasPat` int(11) NOT NULL,
  `idEstatusPat` int(11) NOT NULL,
  `activoPat` int(11) NOT NULL,
  `idUsuarioCreadorPat` int(11) NOT NULL,
  `fechaCreacionPat` datetime NOT NULL,
  `idUsuarioModificadorPat` int(11) NOT NULL,
  `fechaModificacionPat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pat_detalle`
--

CREATE TABLE IF NOT EXISTS `pat_detalle` (
`idPatDetalle` int(11) NOT NULL,
  `consecutivoPatDetalle` int(11) NOT NULL,
  `tipoPatDetalle` int(11) NOT NULL,
  `paPatDetalle` int(11) NOT NULL,
  `clavePatDetalle` int(11) NOT NULL,
  `instanciaPatDetalle` int(11) NOT NULL,
  `justificacionPatDetalle` int(11) NOT NULL,
  `areaPatDetalle` int(11) NOT NULL,
  `descripcionPatDetalle` text COLLATE utf8_bin NOT NULL,
  `objetivoPatDetalle` text COLLATE utf8_bin NOT NULL,
  `spiPatDetalle` int(11) NOT NULL,
  `sptPatDetalle` int(11) NOT NULL,
  `tsrPatDetalle` int(11) NOT NULL,
  `tshPatDetalle` int(11) NOT NULL,
  `priPatDetalle` int(11) NOT NULL,
  `prfPatDetalle` int(11) NOT NULL,
  `apPatDetalle` int(11) NOT NULL,
  `muestraPatDetalle` int(11) NOT NULL,
  `universoPatDetalle` int(11) NOT NULL,
  `pendientePatDetalle` int(11) NOT NULL,
  `riesgosPatDetalle` int(11) NOT NULL,
  `cuadrantePatDetalle` int(11) NOT NULL,
  `revisado` int(11) NOT NULL,
  `verificadoPatDetalle` int(11) NOT NULL,
  `comentariosPatDetalle` int(11) NOT NULL,
  `idEstatusPatDetalle` int(11) NOT NULL,
  `idUsuarioCreadorPatDetalle` int(11) NOT NULL,
  `fechaCreacionPatDetalle` datetime NOT NULL,
  `idUsuarioModificadorPatDetalle` int(11) NOT NULL,
  `fechaModificacionPatDetalle` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
`idPublicacion` int(11) NOT NULL,
  `idTipoPublicacionPublicaciones` int(11) NOT NULL,
  `tituloPublicaciones` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcionPublicaciones` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `textoPublicaciones` text COLLATE utf8_bin NOT NULL,
  `idEstatusPublicaciones` int(11) NOT NULL,
  `idUsuarioCreadorPublicaciones` int(11) NOT NULL,
  `fechaCreacionPublicaciones` datetime NOT NULL,
  `idUsuarioModificadorPublicaciones` int(11) NOT NULL,
  `fechaModificacionPublicaciones` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idPublicacion`, `idTipoPublicacionPublicaciones`, `tituloPublicaciones`, `descripcionPublicaciones`, `textoPublicaciones`, `idEstatusPublicaciones`, `idUsuarioCreadorPublicaciones`, `fechaCreacionPublicaciones`, `idUsuarioModificadorPublicaciones`, `fechaModificacionPublicaciones`) VALUES
(1, 1, 'Noticia CNVB', 'Descripción: Noticia en General sobre aconrtecimientos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2016-03-02 00:00:00', 1, '2016-03-02 00:00:00'),
(2, 2, 'Fechas limite de entrega!', 'Descripción: Noticia sobre las nuevas reformas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '2016-03-02 00:00:00', 1, '2016-03-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipospublicaciones`
--

CREATE TABLE IF NOT EXISTS `tipospublicaciones` (
`idTipoPublicacion` int(11) NOT NULL,
  `nombreTiposPublicaciones` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcionTiposPublicaciones` varchar(150) COLLATE utf8_bin NOT NULL,
  `imagenTiposPublicaciones` varchar(50) COLLATE utf8_bin NOT NULL,
  `idEstatusTiposPublicaciones` int(11) NOT NULL,
  `idUsuarioCreadorTiposPublicaciones` int(11) NOT NULL,
  `fechaCreacionTiposPublicaciones` datetime NOT NULL,
  `idUsuarioModificadorTiposPublicaciones` int(11) NOT NULL,
  `fechaModificacionTiposPublicaciones` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipospublicaciones`
--

INSERT INTO `tipospublicaciones` (`idTipoPublicacion`, `nombreTiposPublicaciones`, `descripcionTiposPublicaciones`, `imagenTiposPublicaciones`, `idEstatusTiposPublicaciones`, `idUsuarioCreadorTiposPublicaciones`, `fechaCreacionTiposPublicaciones`, `idUsuarioModificadorTiposPublicaciones`, `fechaModificacionTiposPublicaciones`) VALUES
(1, 'Noticias', 'Solo son noticias a modo de información', 'iconoTipoNoticia.png', 1, 1, '2016-03-02 00:00:00', 1, '2016-03-02 00:00:00'),
(2, 'Boletines', 'Publicación de información que se debe de tener en cuenta', 'iconoTipoNoticia.png', 1, 1, '2016-03-02 00:00:00', 1, '2016-03-02 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
 ADD PRIMARY KEY (`idEstatus`);

--
-- Indices de la tabla `pat`
--
ALTER TABLE `pat`
 ADD PRIMARY KEY (`idPat`);

--
-- Indices de la tabla `pat_detalle`
--
ALTER TABLE `pat_detalle`
 ADD PRIMARY KEY (`idPatDetalle`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
 ADD PRIMARY KEY (`idPublicacion`);

--
-- Indices de la tabla `tipospublicaciones`
--
ALTER TABLE `tipospublicaciones`
 ADD PRIMARY KEY (`idTipoPublicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
MODIFY `idEstatus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pat`
--
ALTER TABLE `pat`
MODIFY `idPat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pat_detalle`
--
ALTER TABLE `pat_detalle`
MODIFY `idPatDetalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
MODIFY `idPublicacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipospublicaciones`
--
ALTER TABLE `tipospublicaciones`
MODIFY `idTipoPublicacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
