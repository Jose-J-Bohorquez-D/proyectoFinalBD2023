-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2023 a las 07:16:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campeche`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(50) NOT NULL,
  `desc_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla exclusiva para los roles de el aplicaativo campeche';

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nom_rol`, `desc_rol`) VALUES
(1, 'Super-Administrador', 'tiene acceso total a todo el contenido'),
(2, 'Administrador', 'tiene acceso total a todo el contenido'),
(3, 'Consummidor', 'tiene accso solo a la vista de productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_documento`
--

CREATE TABLE `tipo_de_documento` (
  `id_doc` int(11) NOT NULL,
  `nom_doc` char(50) NOT NULL DEFAULT '',
  `desc_doc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla exclusiva para los tipos de documento que se usan en el aplcativo';

--
-- Volcado de datos para la tabla `tipo_de_documento`
--

INSERT INTO `tipo_de_documento` (`id_doc`, `nom_doc`, `desc_doc`) VALUES
(1, 'TI', 'Tarjeta de identidad'),
(2, 'CC', 'Cedula de ciudadania'),
(3, 'CE', 'Cedula de extranjeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL COMMENT 'identificador unico de cada usuario',
  `tipo_doc` char(3) NOT NULL COMMENT 'tipo de documento de cada usuario',
  `num_doc` bigint(10) NOT NULL COMMENT 'numero de documento de cada usuario',
  `nombre1` varchar(50) DEFAULT NULL COMMENT 'primer nombre de cada usuario',
  `nombre2` varchar(50) NOT NULL COMMENT 'segundo nombre de cada usuario',
  `apellido1` varchar(50) DEFAULT NULL COMMENT 'primer apellido de cada usuario',
  `apellido2` varchar(50) NOT NULL COMMENT 'segundo apellido de cada usuario',
  `fecha_nac` date NOT NULL COMMENT 'fecha de nacimiento d cada usuario',
  `correo` varchar(50) NOT NULL COMMENT 'correo personal de cada usuario',
  `telefono` bigint(20) NOT NULL COMMENT 'numero de telefono movil de cada usuario',
  `direccion` varchar(50) NOT NULL COMMENT 'direccion especifica /ciudad/localidad/barrio/direccion fisica/cod postal de cada usuario',
  `ubicacion` varchar(50) NOT NULL COMMENT 'ubicacion de cada usuario tomada por gps o posicion en maps de cada usuario',
  `usuario` varchar(50) NOT NULL COMMENT 'nombre de usuario o nickname de cada usuario',
  `pwd` varchar(50) NOT NULL COMMENT 'contraseña de acceso para este sistema de cada usuario',
  `rol` int(11) NOT NULL COMMENT 'rol definido de cada usuario',
  `estado` int(11) NOT NULL COMMENT 'estado activo o inactivo de cada usuario',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'fecha de creacion de los datos del usuario /de cada usuario',
  `fecha_actualiza` datetime DEFAULT NULL COMMENT 'fecha de actualizacion de datos de cada usuario',
  `fecha_elimina` datetime DEFAULT NULL COMMENT 'fecha de eliminacion/ocultamiento de los datos de este usuario /de cada usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla exclusiva para los datos personales de los usuarios del aplicativo campeche';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `tipo_doc`, `num_doc`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `fecha_nac`, `correo`, `telefono`, `direccion`, `ubicacion`, `usuario`, `pwd`, `rol`, `estado`, `fecha_crea`, `fecha_actualiza`, `fecha_elimina`) VALUES
(1, 'CC', 1234567890, 'piquiña', '', 'polo', '', '1998-04-17', 'p@gmail.com', 1234567890, 'calle 1 #1-1', 'maps.com/calle1#1-1', 'pikiña', 'abc123', 1, 1, '2018-07-06 21:50:04', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `nom_doc` (`nom_doc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FK_usuarios_roles` (`rol`),
  ADD KEY `FK_usuarios_tipo_de_documento` (`tipo_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_de_documento`
--
ALTER TABLE `tipo_de_documento`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador unico de cada usuario', AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_usuarios_tipo_de_documento` FOREIGN KEY (`tipo_doc`) REFERENCES `tipo_de_documento` (`nom_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
