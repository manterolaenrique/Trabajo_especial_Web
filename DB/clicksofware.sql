-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 04:45:42
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clicksofware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `id_opinion` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `id_opinion`, `img`) VALUES
(24, 35, 'img/task/5ddc9b38c5c00.jpg'),
(25, 69, 'img/task/5ddc9bd5a6d4d.jpg'),
(26, 49, 'img/task/5ddc9c86aaab7.jpg'),
(27, 35, 'img/task/5ddc9e1ed0b52.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `id` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `opinion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opinion`
--

INSERT INTO `opinion` (`id`, `id_servicio`, `cliente`, `opinion`) VALUES
(35, 16, 'Esteban', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(37, 14, 'Nicolas', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(38, 14, 'Federico', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(39, 16, 'Nicola', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(41, 14, 'Cristian', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(43, 18, 'Enrique', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(44, 14, 'Alejo', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(45, 18, 'Florencia', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(46, 16, 'Matias', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(49, 23, 'Juan', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(50, 23, 'Alejandro', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(51, 23, 'Catalina', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi cum explicabo dicta quidem cupiditate. Labore voluptatem quo inventore optio provident, cumque obcaecati eius! Porro minus atque odit voluptatem nisi. Totam.'),
(68, 14, 'Juan carlos', 'me gusta '),
(69, 33, 'CHISPA', 'SOY GAY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `info` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `info`) VALUES
(14, 'Pagina Web Dinamica ', 'Los sitios Web dinámicos son aquellos que permiten crear aplicaciones dentro de la propia Web, otorgando una mayor interactividad con el navegante'),
(16, 'Sistema de Gestion Gastronomico ', 'Gestión Gastronómica es un sistema que agiliza y simplifica la operatoria de ventas y proveedores de un negocio gastronómico que opere con Fast-Food'),
(18, 'Sistemas erp', 'Planificación de Recursos Empresariales es un conjunto de sistemas de información que permite la integración de ciertas operaciones de una empresa, especialmente las que tienen que ver con la producción, la logística, el inventario'),
(23, 'Pagina Web Estatica', 'Las páginas web estáticas son básicamente informativas y están enfocadas principalmente a mostrar una información permanente'),
(33, 'LA CONCHA DE TU MADRE', 'HIJO DE PUTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `prioridad` int(2) NOT NULL,
  `finalizada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `titulo`, `descripcion`, `prioridad`, `finalizada`) VALUES
(1, 'Tarea 1', 'Descripcion 1', 1, 1),
(2, 'Arreglar ambiente de Javi', 'No le anda phpmyadmin al muy croto', 10, 1),
(3, 'Titulo 2', 'Desc 2', 3, 1),
(4, 'Hacer la página de Web', '', 0, 1),
(22, 'Con de todo', 'D', 4, 1),
(23, 'Test1', 'asd', 4, 1),
(24, 'asdasdasd', 'asdasdad', 0, 0),
(25, 'AAAAAAa', 'asdasd', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contraseña`) VALUES
(2, 'test', '$2y$12$ohaKZw6QA6sLNECRYdqYd.dkmQMAigNkR8MN/kxGlupL5N7bpYBki'),
(5, 'henry', '$2y$10$nxEJ.zXCuvLqbAom9KaXUO5v9eBc4g9DUYodXTrWnidjaN2any9UW'),
(31, 'facu', '$2y$10$4RVqvBOSNUQackF6lJzvIe555mZba0i5gZZR.ap29iupI1cSfOzNW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_opinion`);

--
-- Indices de la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_servicio_id` (`id_servicio`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_opinion`) REFERENCES `opinion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD CONSTRAINT `fk_servicio_id` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
