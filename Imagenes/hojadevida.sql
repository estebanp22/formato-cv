-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2024 a las 01:42:51
-- Versión del servidor: 11.5.2-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hojadevida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_correspondencia`
--

CREATE TABLE `direccion_correspondencia` (
  `idCorrespondencia` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `direccion_correspondencia`
--

INSERT INTO `direccion_correspondencia` (`idCorrespondencia`, `idPersona`, `direccion`, `pais`, `departamento`, `municipio`, `telefono`, `email`) VALUES
(1, 1090, 'Barrio laureles m4 c 6 e2', '61', 'NariÃ±o', 'El PeÃ±ol', 3000121311, 'perez.garcia@gmail.com'),
(2, 1010, 'Laureles # 22 12 ', '61', 'Antioquia', 'El Santuario', 314, 'trejos.juan.9254@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion_basica_media`
--

CREATE TABLE `educacion_basica_media` (
  `idEduMedia` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `ultimoAnioCursado` int(11) NOT NULL,
  `tituloObtenido` varchar(50) NOT NULL,
  `fechaGrado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `educacion_basica_media`
--

INSERT INTO `educacion_basica_media` (`idEduMedia`, `idPersona`, `ultimoAnioCursado`, `tituloObtenido`, `fechaGrado`) VALUES
(1, 1090, 11, 'secundaria', '2020-02-20'),
(2, 1010, 11, 'bachiller', '2024-11-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion_superior`
--

CREATE TABLE `educacion_superior` (
  `idEduSuperior` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `semestresAprovados` int(11) NOT NULL,
  `graduado` tinyint(1) NOT NULL,
  `nombreTitulo` varchar(100) NOT NULL,
  `fechaTerminacion` date NOT NULL,
  `numeroTarjetaProfesional` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `educacion_superior`
--

INSERT INTO `educacion_superior` (`idEduSuperior`, `idPersona`, `modalidad`, `semestresAprovados`, `graduado`, `nombreTitulo`, `fechaTerminacion`, `numeroTarjetaProfesional`) VALUES
(1, 1090, 'te', 6, 0, 'ingenieria_industrial', '2022-06-07', 1090),
(2, 1090, 'te', 6, 0, 'ingenieria_industrial', '2022-06-07', 1090),
(3, 1010, 'te', 9, 0, 'diseÃ±o_grafico', '2024-11-06', 1010),
(4, 1010, 'te', 9, 0, 'diseÃ±o_grafico', '2024-11-06', 1010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_laboral`
--

CREATE TABLE `experiencia_laboral` (
  `idExperiencia` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `vigente` tinyint(1) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `naturalezaJuridica` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `dependencia` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `experiencia_laboral`
--

INSERT INTO `experiencia_laboral` (`idExperiencia`, `idPersona`, `vigente`, `empresa`, `naturalezaJuridica`, `pais`, `departamento`, `municipio`, `correo`, `telefono`, `cargo`, `fechaInicio`, `fechaFin`, `dependencia`, `direccion`) VALUES
(1, 1090, 1, 'eam', 'privada', '61', 'QuindÃ­o', 'Armenia', 'eam.@edu.co', 989321, 'Secretaria', '2024-11-04', NULL, 'recursos humanos', 'carre 34 # 22 11'),
(2, 1010, 1, 'epa', 'privada', '61', 'Cundinamarca', 'Cabrera', 'epa@gmail.com', 98432, 'Contratista', '2024-11-12', NULL, 'Maquinaria', 'calle 34 # 33 212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idIdioma` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `habla` varchar(20) NOT NULL,
  `lee` varchar(20) NOT NULL,
  `escribe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idIdioma`, `idPersona`, `idioma`, `habla`, `lee`, `escribe`) VALUES
(1, 1090, 'arabe', 'regular', 'bien', 'regular'),
(2, 1010, 'japones', 'bien', 'regular', 'bien');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libreta_militar`
--

CREATE TABLE `libreta_militar` (
  `idLibreta` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `clase` varchar(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `distritoMilitar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `libreta_militar`
--

INSERT INTO `libreta_militar` (`idLibreta`, `idPersona`, `clase`, `numero`, `distritoMilitar`) VALUES
(1, 1090, '1', 1090, 'Armenia'),
(2, 1010, '1', 101, 'Caqueta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `primerApellido` varchar(100) NOT NULL,
  `segundoApellido` varchar(100) NOT NULL,
  `tipoDocumento` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `paisNacimiento` varchar(20) NOT NULL,
  `departamentoNacimiento` varchar(20) NOT NULL,
  `municipioNacimiento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombres`, `primerApellido`, `segundoApellido`, `tipoDocumento`, `genero`, `fechaNacimiento`, `paisNacimiento`, `departamentoNacimiento`, `municipioNacimiento`) VALUES
(111, 'rew', 'frew', 'rew', 'ce', 'm', '2222-02-22', '61', 'Magdalena', 'Pueblo Viejo'),
(1010, 'Juan', 'Trejos', 'Vargas', 'cc', 'm', '2003-02-11', '61', 'Caldas', 'Manzanares'),
(1090, 'Camila', 'Garcia', 'Perez', 'cc', 'f', '2001-06-06', '61', 'Cauca', 'Caloto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_experiencia`
--

CREATE TABLE `tiempo_experiencia` (
  `idTiempoExperiencia` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `mesesSectorPublico` int(11) NOT NULL,
  `mesesSectorPrivado` int(11) NOT NULL,
  `MesesIndependiente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `direccion_correspondencia`
--
ALTER TABLE `direccion_correspondencia`
  ADD PRIMARY KEY (`idCorrespondencia`),
  ADD KEY `FK_CORRESPONDENCIA_PERSONA` (`idPersona`);

--
-- Indices de la tabla `educacion_basica_media`
--
ALTER TABLE `educacion_basica_media`
  ADD PRIMARY KEY (`idEduMedia`),
  ADD KEY `FK_BASICA_PERSONA` (`idPersona`);

--
-- Indices de la tabla `educacion_superior`
--
ALTER TABLE `educacion_superior`
  ADD PRIMARY KEY (`idEduSuperior`),
  ADD KEY `FK_SUPERIOR_PERSONA` (`idPersona`);

--
-- Indices de la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD PRIMARY KEY (`idExperiencia`),
  ADD KEY `FK_EXPERIENCIA_PERSONA` (`idPersona`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idIdioma`),
  ADD KEY `FK_IDIOMA_PERSONA` (`idPersona`);

--
-- Indices de la tabla `libreta_militar`
--
ALTER TABLE `libreta_militar`
  ADD PRIMARY KEY (`idLibreta`),
  ADD KEY `FK_LIBRETA_PERSONA` (`idPersona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `tiempo_experiencia`
--
ALTER TABLE `tiempo_experiencia`
  ADD PRIMARY KEY (`idTiempoExperiencia`),
  ADD KEY `FK_PERSONA_TIEMPO` (`idPersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direccion_correspondencia`
--
ALTER TABLE `direccion_correspondencia`
  MODIFY `idCorrespondencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `educacion_basica_media`
--
ALTER TABLE `educacion_basica_media`
  MODIFY `idEduMedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `educacion_superior`
--
ALTER TABLE `educacion_superior`
  MODIFY `idEduSuperior` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  MODIFY `idExperiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idIdioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libreta_militar`
--
ALTER TABLE `libreta_militar`
  MODIFY `idLibreta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiempo_experiencia`
--
ALTER TABLE `tiempo_experiencia`
  MODIFY `idTiempoExperiencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direccion_correspondencia`
--
ALTER TABLE `direccion_correspondencia`
  ADD CONSTRAINT `FK_CORRESPONDENCIA_PERSONA` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `educacion_basica_media`
--
ALTER TABLE `educacion_basica_media`
  ADD CONSTRAINT `FK_BASICA_PERSONA` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `educacion_superior`
--
ALTER TABLE `educacion_superior`
  ADD CONSTRAINT `FK_SUPERIOR_PERSONA` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD CONSTRAINT `FK_EXPERIENCIA_PERSONA` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD CONSTRAINT `FK_IDIOMA_PERSONA` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `libreta_militar`
--
ALTER TABLE `libreta_militar`
  ADD CONSTRAINT `FK_LIBRETA_PERSONA` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tiempo_experiencia`
--
ALTER TABLE `tiempo_experiencia`
  ADD CONSTRAINT `FK_PERSONA_TIEMPO` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
