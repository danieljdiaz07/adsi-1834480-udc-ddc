-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2020 a las 04:55:25
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestaudc_sjba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividadeducativa_sjba`
--

CREATE TABLE `actividadeducativa_ddc` (
  `id` int(11) NOT NULL,
  `actividaddelpapa` varchar(38) NOT NULL,
  `actividaddelamama` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividadeducativa_sjba`
--

INSERT INTO `actividadeducativa_sjba` (`id`, `actividaddelpapa`, `actividaddelamama`) VALUES
(42, 'Oficios varios', 'Ama de casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion_sjba`
--

CREATE TABLE `administracion_ddc` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificatucarrera_sjba`
--

CREATE TABLE `calificatucarrera_ddc` (
  `id` int(11) NOT NULL,
  `calificatucarrera` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificatucarrera_sjba`
--

INSERT INTO `calificatucarrera_ddc` (`id`, `calificatucarrera`) VALUES
(1, 'Excelente'),
(2, 'Satisfecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_sjba`
--

CREATE TABLE `encuesta_ddc` (
  `id_ddc` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(31) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `actividaddelpapa` varchar(20) NOT NULL,
  `actividaddelamama` varchar(20) NOT NULL,
  `id_estadocivil` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `id_nivelacademicoPapa` int(11) NOT NULL,
  `id_nivelacademicoMama` int(11) NOT NULL,
  `tipodeinstitucion` varchar(9) NOT NULL,
  `id_tipodevivienda` int(11) NOT NULL,
  `id_region` int(50) NOT NULL,
  `carrera` varchar(26) NOT NULL,
  `tiempo_de_graduado` int(11) NOT NULL,
  `id_ingresoeconomico` int(11) NOT NULL,
  `calificatucarrera` varchar(10) NOT NULL,
  `asignaturas_matriculadas` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta_sjba`
--

INSERT INTO `encuesta_ddc` (`id_ddc`, `nombre`, `apellido`, `identificacion`, `email`, `telefono`, `direccion`, `actividaddelpapa`, `actividaddelamama`, `id_estadocivil`, `id_genero`, `nacimiento`, `id_nivelacademicoPapa`, `id_nivelacademicoMama`, `tipodeinstitucion`, `id_tipodevivienda`, `id_region`, `carrera`, `tiempo_de_graduado`, `id_ingresoeconomico`, `calificatucarrera`, `asignaturas_matriculadas`) VALUES
(7, 'Sebastian Javier', 'Blanquicett Acosta', 1007740012, 'sebastianjavier12@hotmail.com', '36637373', 'San fernando', 'Oficios varios', 'Ama de casa', 1, 1, '2001-07-12', 4, 3, '3', 1, 3, 'ADSI', 2, 3500000, '1', 12),
(8, 'Matanga', 'La Changa', 122334, 'jjjjj@hotmail.com', '66666', 'San Jose De Los Campanos', 'Oficios varios', 'Ama de casa', 5, 2, '2012-12-12', 1, 8, '2', 3, 2, 'ADSI', 12, 500000, '2', 23),
(9, 'Pacho', 'Pachera', 13579, 'jejeje@gmail.com', '33456443232', 'por allá lejos', 'Mecánico', 'Abogada', 1, 1, '3333-02-23', 5, 8, '1', 1, 3, 'ADSI', 11, 5500000, '1', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil_sjba`
--

CREATE TABLE `estadocivil_ddc` (
  `id` int(11) NOT NULL,
  `estadocivil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadocivil_sjba`
--

INSERT INTO `estadocivil_ddc` (`id`, `estadocivil`) VALUES
(1, 'Soltero(a)'),
(2, 'Casado(a)'),
(3, 'Union Libre'),
(4, 'Divorciado(a)'),
(5, 'Viudo(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_sjba`
--

CREATE TABLE `estudiantes_ddc` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(31) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_sjba`
--

CREATE TABLE `genero_ddc` (
  `id` int(11) NOT NULL,
  `genero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero_sjba`
--

INSERT INTO `genero_ddc` (`id`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresoeconomico_sjba`
--

CREATE TABLE `ingresoeconomico_ddc` (
  `id` int(11) NOT NULL,
  `ingresoeconomico` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginadmi_sjba`
--

CREATE TABLE `loginadmi_ddc` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `inputPassword` varchar(15) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `loginadmi_sjba`
--

INSERT INTO `loginadmi_ddc` (`id`, `identificacion`, `inputPassword`, `nombre`) VALUES
(1, 4514739, '12', 'luz'),
(2, 1201, '111', 'Ana Lucia Vargas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_sjba`
--

CREATE TABLE `login_ddc` (
  `id` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `inputPassword` varchar(35) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login_sjba`
--

INSERT INTO `login_ddc` (`id`, `identificacion`, `inputPassword`, `nombre`, `apellido`) VALUES
(3, 1007740012, '12', 'Sebastian ', 'Blanquicett'),
(5, 122334, '1201', 'Matanga', 'dijo la changa'),
(9, 13579, '13579', 'Pacho', 'Pachera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacimiento_sjba`
--

CREATE TABLE `nacimiento_ddc` (
  `id` int(11) NOT NULL,
  `nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacademicomama_sjba`
--

CREATE TABLE `nivelacademicomama_ddc` (
  `id` int(11) NOT NULL,
  `nivelacademico_mama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivelacademicomama_sjba`
--

INSERT INTO `nivelacademicomama_ddc` (`id`, `nivelacademico_mama`) VALUES
(1, 'Analfabeta'),
(2, 'Basica Primaria'),
(3, 'Basica Secundaria'),
(4, 'Bachiller'),
(5, 'Tecnico'),
(6, 'Tecnologo'),
(7, 'Universitario'),
(8, 'Posgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacademicopapa_sjba`
--

CREATE TABLE `nivelacademicopapa_ddc` (
  `id` int(11) NOT NULL,
  `nivelacademico_papa` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivelacademicopapa_sjba`
--

INSERT INTO `nivelacademicopapa_ddc` (`id`, `nivelacademico_papa`) VALUES
(1, ' Analfabeta'),
(2, 'Basica Primaria'),
(3, 'Basica Secundaria'),
(4, 'Bachiller'),
(5, 'Tecnico'),
(6, 'Tecnologo'),
(7, 'Universitario'),
(8, 'Posgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_datos_sjba`
--

CREATE TABLE `otros_datos_ddc` (
  `id` int(11) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `asignaturas_matriculadas` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `otros_datos_sjba`
--

INSERT INTO `otros_datos_ddc` (`id`, `carrera`, `asignaturas_matriculadas`) VALUES
(1, 'ADSI', 1),
(2, 'ADSI', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region_sjba`
--

CREATE TABLE `region_ddc` (
  `id` int(11) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region_sjba`
--

INSERT INTO `region_ddc` (`id`, `region`) VALUES
(1, 'LOCALIDAD 1 - HISTORICA Y DEL CARIBE NORTE'),
(2, 'LOCALIDAD 2 - VIRGEN Y TURISTICA'),
(3, 'LOCALIDAD 3 - INDUSTRIAL DE LA BAHIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_de_graduado_sjba`
--

CREATE TABLE `tiempo_de_graduado_ddc` (
  `id` int(11) NOT NULL,
  `tiempo_de_graduado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiempo_de_graduado_sjba`
--

INSERT INTO `tiempo_de_graduado_ddc` (`id`, `tiempo_de_graduado`) VALUES
(1, 2019),
(2, 2018),
(3, 2017),
(4, 2016),
(5, 2015),
(6, 2014),
(7, 2013),
(8, 2012),
(9, 2011),
(10, 2010),
(11, 2009),
(12, 2008),
(13, 2007),
(14, 2006),
(15, 2005),
(16, 2004),
(17, 2003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeinstitucion_sjba`
--

CREATE TABLE `tipodeinstitucion_ddc` (
  `id` int(11) NOT NULL,
  `tipodeinstitucion` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodeinstitucion_sjba`
--

INSERT INTO `tipodeinstitucion_ddc` (`id`, `tipodeinstitucion`) VALUES
(1, 'Privada'),
(2, 'Mixta'),
(3, 'Publica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodevivienda_sjba`
--

CREATE TABLE `tipodevivienda_ddc` (
  `id` int(11) NOT NULL,
  `tipodevivienda` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodevivienda_sjba`
--

INSERT INTO `tipodevivienda_ddc` (`id`, `tipodevivienda`) VALUES
(1, 'Propia'),
(2, 'Alquilada'),
(3, 'Familiar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividadeducativa_sjba`
--
ALTER TABLE `actividadeducativa_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administracion_sjba`
--
ALTER TABLE `administracion_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificatucarrera_sjba`
--
ALTER TABLE `calificatucarrera_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuesta_sjba`
--
ALTER TABLE `encuesta_ddc`
  ADD PRIMARY KEY (`id_ddc`),
  ADD KEY `id_ingresoeconomico` (`id_ingresoeconomico`),
  ADD KEY `id_estadocivil` (`id_estadocivil`),
  ADD KEY `id_tipodevivienda` (`id_tipodevivienda`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_nivelacademico` (`id_nivelacademicoPapa`),
  ADD KEY `id_nivelacademicoMama` (`id_nivelacademicoMama`),
  ADD KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `estadocivil_sjba`
--
ALTER TABLE `estadocivil_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes_sjba`
--
ALTER TABLE `estudiantes_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero_sjba`
--
ALTER TABLE `genero_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresoeconomico_sjba`
--
ALTER TABLE `ingresoeconomico_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `loginadmi_sjba`
--
ALTER TABLE `loginadmi_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_sjba`
--
ALTER TABLE `login_ddc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `nacimiento_sjba`
--
ALTER TABLE `nacimiento_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivelacademicomama_sjba`
--
ALTER TABLE `nivelacademicomama_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivelacademicopapa_sjba`
--
ALTER TABLE `nivelacademicopapa_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `otros_datos_sjba`
--
ALTER TABLE `otros_datos_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `region_sjba`
--
ALTER TABLE `region_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiempo_de_graduado_sjba`
--
ALTER TABLE `tiempo_de_graduado_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodeinstitucion_sjba`
--
ALTER TABLE `tipodeinstitucion_ddc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodevivienda_sjba`
--
ALTER TABLE `tipodevivienda_ddc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividadeducativa_sjba`
--
ALTER TABLE `actividadeducativa_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `administracion_sjba`
--
ALTER TABLE `administracion_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificatucarrera_sjba`
--
ALTER TABLE `calificatucarrera_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `encuesta_sjba`
--
ALTER TABLE `encuesta_ddc`
  MODIFY `id_sjba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estadocivil_sjba`
--
ALTER TABLE `estadocivil_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudiantes_sjba`
--
ALTER TABLE `estudiantes_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero_sjba`
--
ALTER TABLE `genero_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ingresoeconomico_sjba`
--
ALTER TABLE `ingresoeconomico_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `loginadmi_sjba`
--
ALTER TABLE `loginadmi_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login_sjba`
--
ALTER TABLE `login_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `nacimiento_sjba`
--
ALTER TABLE `nacimiento_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivelacademicomama_sjba`
--
ALTER TABLE `nivelacademicomama_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `nivelacademicopapa_sjba`
--
ALTER TABLE `nivelacademicopapa_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `otros_datos_sjba`
--
ALTER TABLE `otros_datos_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `region_sjba`
--
ALTER TABLE `region_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiempo_de_graduado_sjba`
--
ALTER TABLE `tiempo_de_graduado_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipodeinstitucion_sjba`
--
ALTER TABLE `tipodeinstitucion_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodevivienda_sjba`
--
ALTER TABLE `tipodevivienda_ddc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
