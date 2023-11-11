-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2023 a las 21:02:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `id` int(30) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `date_sched` datetime NOT NULL,
  `ailment` text NOT NULL,
  `equipo` text NOT NULL,
  `accesorios` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `date_sched`, `ailment`, `equipo`, `accesorios`, `status`, `date_created`) VALUES
(50, 49, '2023-11-02 10:00:00', 'Ensamblarla112', 'Monitor', 'Todo el kit Completo', 1, '2023-10-19 09:22:49'),
(53, 52, '2023-11-06 14:18:00', 'No da pantalla', 'Lapto Acer', 'cargador', 0, '2023-10-30 14:18:48'),
(56, 55, '2023-11-08 15:08:00', 'Mantenimiento completo de computadora', 'Lapto Hp, contraseña 123456', 'Cargador Original y funda de la laptop', 1, '2023-10-30 15:08:10'),
(58, 57, '2023-11-02 12:00:00', 'Saca ralla al momento de imprimir alguna Hoja ', 'Impresora Cannon Mg3110', 'Cargador de impresor y Cable USB de impresora', 1, '2023-10-31 15:09:22'),
(59, 58, '2023-11-02 15:14:00', 'Kit completo de computadora, favor de ensamblarla', 'Asus. sin contraseña por el momento', 'Monitor, Pantalla, Teclado, Mouse.', 0, '2023-10-31 15:14:38'),
(60, 59, '2023-11-09 16:00:00', 'Cabezales dañados', 'Impresora HP', 'Cargador y el USB', 2, '2023-10-31 15:21:25'),
(61, 60, '2023-11-06 08:00:00', 'saca las copias mal', 'Impresora cannon', 'cargador', 0, '2023-11-03 00:22:09'),
(62, 61, '2023-11-03 13:12:00', 'nul', 'nul', 'nul', 0, '2023-11-03 01:12:32'),
(63, 62, '2023-11-06 10:00:00', 'Error de Display de la pantalla ', 'Celular Samsung Galaxy S23 Ultra. Contraseña 123456', 'Cargador y celular todo completo en la caja de fabrica', 0, '2023-11-03 09:29:18'),
(64, 63, '2023-11-03 12:49:00', 'No imprime', 'Impresora Cannon', 'Cargador', 0, '2023-11-03 13:49:30'),
(65, 64, '2023-11-06 16:00:00', 'nul', 'nul', 'nul', 0, '2023-11-05 20:45:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `location`
--

CREATE TABLE `location` (
  `id` int(30) NOT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `max_a_day` int(5) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient_list`
--

CREATE TABLE `patient_list` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `patient_list`
--

INSERT INTO `patient_list` (`id`, `name`, `date_created`) VALUES
(49, 'Francisco Javier Zetina Murillo', '2023-10-19 09:22:49'),
(52, 'Juan Felipe Reyes Alcatara', '2023-10-30 14:18:48'),
(55, 'Arturo Salas Hernandez', '2023-10-30 15:08:10'),
(57, 'Karen Yamileth Monjaras Hernandez', '2023-10-31 15:09:22'),
(58, 'Armando Vasconcelos Gonzales', '2023-10-31 15:14:38'),
(59, 'Gerardo Santiago Zuñiga', '2023-10-31 15:21:25'),
(60, 'Vivian Yulieth Lopez Palacios', '2023-11-03 00:22:09'),
(61, 'Francisco Zetina Baltazar', '2023-11-03 01:12:32'),
(62, 'Sheila Guadalupe Zetina Murillo', '2023-11-03 09:29:18'),
(63, 'Ivonne Garcia  Bahena', '2023-11-03 13:49:30'),
(64, 'Luis Eduardo Zetina Murillo', '2023-11-05 20:45:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient_meta`
--

CREATE TABLE `patient_meta` (
  `patient_id` int(30) NOT NULL,
  `meta_field` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `patient_meta`
--

INSERT INTO `patient_meta` (`patient_id`, `meta_field`, `meta_value`, `date_created`) VALUES
(55, 'id', '56', '2023-10-31 15:05:23'),
(55, 'patient_id', '55', '2023-10-31 15:05:23'),
(55, 'name', 'Arturo Salas Hernández', '2023-10-31 15:05:23'),
(55, 'email', 'ArturoSalasHernandez@gmail.com', '2023-10-31 15:05:23'),
(55, 'contact', '9241435497', '2023-10-31 15:05:23'),
(55, 'gender', 'Masculino', '2023-10-31 15:05:23'),
(55, 'dob', '2023-10-30', '2023-10-31 15:05:23'),
(55, 'address', 'Suchilapan Ver. 206', '2023-10-31 15:05:23'),
(55, 'equipo', 'Lapto Hp, contraseña 123456', '2023-10-31 15:05:23'),
(55, 'accesorios', 'Cargador Original y funda de la laptop', '2023-10-31 15:05:23'),
(59, 'id', '60', '2023-11-01 12:07:54'),
(59, 'patient_id', '59', '2023-11-01 12:07:54'),
(59, 'name', 'Gerardo Santiago Zuñiga', '2023-11-01 12:07:54'),
(59, 'email', 'gerarzu@gmail.com', '2023-11-01 12:07:54'),
(59, 'contact', '9241770370', '2023-11-01 12:07:54'),
(59, 'gender', 'Masculino', '2023-11-01 12:07:54'),
(59, 'dob', '2023-10-31', '2023-11-01 12:07:54'),
(59, 'address', 'Campo Nuevo.', '2023-11-01 12:07:54'),
(59, 'equipo', 'Impresora HP', '2023-11-01 12:07:54'),
(59, 'accesorios', 'Cargador y el USB', '2023-11-01 12:07:54'),
(57, 'id', '57', '2023-11-03 00:19:52'),
(57, 'patient_id', '57', '2023-11-03 00:19:52'),
(57, 'name', 'Karen Yamileth Monjaras Hernandez', '2023-11-03 00:19:52'),
(57, 'email', 'Karencita23@gmail.com', '2023-11-03 00:19:52'),
(57, 'contact', '9241379923', '2023-11-03 00:19:52'),
(57, 'gender', 'Masculino', '2023-11-03 00:19:52'),
(57, 'dob', '2023-10-31', '2023-11-03 00:19:52'),
(57, 'address', 'Nuevo Uvero. Xalapa', '2023-11-03 00:19:52'),
(57, 'equipo', 'Impresora Cannon Mg3110', '2023-11-03 00:19:52'),
(57, 'accesorios', 'Cargador de impresor y Cable USB de impresora', '2023-11-03 00:19:52'),
(60, 'id', '60', '2023-11-03 00:22:57'),
(60, 'patient_id', '60', '2023-11-03 00:22:57'),
(60, 'name', 'Vivian Yulieth Lopez Palacios', '2023-11-03 00:22:57'),
(60, 'email', 'vivian23@gmail.com', '2023-11-03 00:22:57'),
(60, 'contact', '924536366', '2023-11-03 00:22:57'),
(60, 'gender', 'Masculino', '2023-11-03 00:22:57'),
(60, 'dob', '2023-11-03', '2023-11-03 00:22:57'),
(60, 'address', 'Donaji', '2023-11-03 00:22:57'),
(60, 'equipo', 'Impresora cannon', '2023-11-03 00:22:57'),
(60, 'accesorios', 'cargador', '2023-11-03 00:22:57'),
(61, 'id', '61', '2023-11-03 09:20:04'),
(61, 'patient_id', '61', '2023-11-03 09:20:04'),
(61, 'name', 'Francisco Zetina Baltazar', '2023-11-03 09:20:04'),
(61, 'email', 'fodoj83812@synclane.com', '2023-11-03 09:20:04'),
(61, 'contact', '9241466206', '2023-11-03 09:20:04'),
(61, 'gender', 'Masculino', '2023-11-03 09:20:04'),
(61, 'dob', '2023-11-03', '2023-11-03 09:20:04'),
(61, 'address', 'Jesus carranza ver\r\n\r\n', '2023-11-03 09:20:04'),
(61, 'equipo', 'nul', '2023-11-03 09:20:04'),
(61, 'accesorios', 'nul', '2023-11-03 09:20:04'),
(62, 'id', '', '2023-11-03 09:29:18'),
(62, 'patient_id', '', '2023-11-03 09:29:18'),
(62, 'name', 'Sheila Guadalupe Zetina Murillo', '2023-11-03 09:29:18'),
(62, 'email', 'guadalupe@gmail.com', '2023-11-03 09:29:18'),
(62, 'contact', '9721083490', '2023-11-03 09:29:18'),
(62, 'gender', 'Femenino', '2023-11-03 09:29:18'),
(62, 'dob', '2023-11-03', '2023-11-03 09:29:18'),
(62, 'address', 'Calle Juan de la luz enriquez. Entre las calles de lazaro cardenas y profirio dias. codigo postal 96950', '2023-11-03 09:29:18'),
(62, 'equipo', 'Celular Samsung Galaxy S23 Ultra. Contraseña 123456', '2023-11-03 09:29:18'),
(62, 'accesorios', 'Cargador y celular todo completo en la caja de fabrica', '2023-11-03 09:29:18'),
(49, 'id', '49', '2023-11-03 10:19:54'),
(49, 'patient_id', '49', '2023-11-03 10:19:54'),
(49, 'name', 'Francisco Javier Zetina Murillo', '2023-11-03 10:19:54'),
(49, 'email', 'ZetinaXabier23@gmail.com', '2023-11-03 10:19:54'),
(49, 'contact', '9242122051', '2023-11-03 10:19:54'),
(49, 'gender', 'Masculino', '2023-11-03 10:19:54'),
(49, 'dob', '2023-10-19', '2023-11-03 10:19:54'),
(49, 'address', 'Jesús Carranza Ver', '2023-11-03 10:19:54'),
(49, 'equipo', 'Monitor', '2023-11-03 10:19:54'),
(49, 'accesorios', 'Todo el kit Completo', '2023-11-03 10:19:54'),
(52, 'id', '52', '2023-11-03 10:35:24'),
(52, 'patient_id', '52', '2023-11-03 10:35:24'),
(52, 'name', 'Juan Felipe Reyes Alcatara', '2023-11-03 10:35:24'),
(52, 'email', 'juanferal.16@gmail.com', '2023-11-03 10:35:24'),
(52, 'contact', '924536366', '2023-11-03 10:35:24'),
(52, 'gender', 'Masculino', '2023-11-03 10:35:24'),
(52, 'dob', '2023-10-30', '2023-11-03 10:35:24'),
(52, 'address', 'Campo Nuevo', '2023-11-03 10:35:24'),
(52, 'equipo', 'Lapto Acer', '2023-11-03 10:35:24'),
(52, 'accesorios', 'cargador', '2023-11-03 10:35:24'),
(58, 'id', '58', '2023-11-03 11:30:40'),
(58, 'patient_id', '58', '2023-11-03 11:30:40'),
(58, 'name', 'Armando Vasconcelos Gonzales', '2023-11-03 11:30:40'),
(58, 'email', 'armando.vascon@itsjc.edu.mx', '2023-11-03 11:30:40'),
(58, 'contact', '9241149561', '2023-11-03 11:30:40'),
(58, 'gender', 'Masculino', '2023-11-03 11:30:40'),
(58, 'dob', '2023-10-31', '2023-11-03 11:30:40'),
(58, 'address', 'Suchilapan Ver.', '2023-11-03 11:30:40'),
(58, 'equipo', 'Asus. sin contraseña por el momento', '2023-11-03 11:30:40'),
(58, 'accesorios', 'Monitor, Pantalla, Teclado, Mouse.', '2023-11-03 11:30:40'),
(63, 'id', '', '2023-11-03 13:49:30'),
(63, 'patient_id', '', '2023-11-03 13:49:30'),
(63, 'name', 'Ivonne Garcia  Bahena', '2023-11-03 13:49:30'),
(63, 'email', 'fodoj83812@synclane.com', '2023-11-03 13:49:30'),
(63, 'contact', '924536366', '2023-11-03 13:49:30'),
(63, 'gender', 'Femenino', '2023-11-03 13:49:30'),
(63, 'dob', '2023-11-03', '2023-11-03 13:49:30'),
(63, 'address', 'Jesús carranza Ver. 96950', '2023-11-03 13:49:30'),
(63, 'equipo', 'Impresora Cannon', '2023-11-03 13:49:30'),
(63, 'accesorios', 'Cargador', '2023-11-03 13:49:30'),
(64, 'id', '', '2023-11-05 20:45:41'),
(64, 'patient_id', '', '2023-11-05 20:45:41'),
(64, 'name', 'Luis Eduardo Zetina Murillo', '2023-11-05 20:45:41'),
(64, 'email', 'fodoj83812@synclane.com', '2023-11-05 20:45:41'),
(64, 'contact', '9241468219', '2023-11-05 20:45:41'),
(64, 'gender', 'Masculino', '2023-11-05 20:45:41'),
(64, 'dob', '2023-11-05', '2023-11-05 20:45:41'),
(64, 'address', 'Juan de la luz enriquez', '2023-11-05 20:45:41'),
(64, 'equipo', 'nul', '2023-11-05 20:45:41'),
(64, 'accesorios', 'nul', '2023-11-05 20:45:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedule_settings`
--

CREATE TABLE `schedule_settings` (
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `schedule_settings`
--

INSERT INTO `schedule_settings` (`meta_field`, `meta_value`, `date_create`) VALUES
('day_schedule', 'Monday,Tuesday,Wednesday,Thursday,Friday', '2021-09-02 19:55:37'),
('morning_schedule', '07:00,12:00', '2021-09-02 19:55:37'),
('afternoon_schedule', '12:15,16:00', '2021-09-02 23:55:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', ''),
(6, 'short_name', 'Agendar una cita'),
(11, 'logo', 'uploads/1699040220_logo pc systems sin fondo.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1699040340_Ofiicial.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Хавьер ', 'Зетина', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'uploads/1699041060_goku.jpg', NULL, 1, '2021-01-20 14:02:37', '2023-11-03 13:51:11'),
(7, 'Хавьер ', 'Зетина', 'Francisco', 'e10adc3949ba59abbe56e057f20f883e', 'uploads/1699041240_Francisco.jpg', NULL, 0, '2021-12-12 15:41:46', '2023-11-03 13:54:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patient_list`
--
ALTER TABLE `patient_list`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patient_meta`
--
ALTER TABLE `patient_meta`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indices de la tabla `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `location`
--
ALTER TABLE `location`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `patient_list`
--
ALTER TABLE `patient_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `patient_meta`
--
ALTER TABLE `patient_meta`
  ADD CONSTRAINT `patient_meta_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
