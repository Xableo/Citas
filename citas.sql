-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 04:37:43
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
(43, 42, '2023-10-19 10:00:00', 'La parte del teclado no sirve checarlo y enviarme un mensaje que es lo me recomienda', 'Laptop Asus', 'Cargador Original de la Asus', 0, '2023-10-17 10:34:27'),
(44, 43, '2023-10-18 11:00:00', 'Cambier la pantalla', 'Lapto Hp, password 123455', 'Cargar original Hp', 0, '2023-10-17 16:20:10'),
(45, 44, '2023-10-18 09:00:00', 'bcdbj', 'nbddb', 'nbxcb', 2, '2023-10-18 12:22:29');

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
(42, 'Francisco Javier Zetina Murillo', '2023-10-17 10:34:27'),
(43, 'Francisco Javier Zetina Murillo', '2023-10-17 16:20:10'),
(44, 'Francisco', '2023-10-18 12:22:29');

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
(42, 'id', '43', '2023-10-18 12:19:37'),
(42, 'patient_id', '42', '2023-10-18 12:19:37'),
(42, 'name', 'Francisco Javier Zetina Murillo', '2023-10-18 12:19:37'),
(42, 'email', 'ZetinaXabier23@gmail.com', '2023-10-18 12:19:37'),
(42, 'contact', '+529242122051', '2023-10-18 12:19:37'),
(42, 'gender', 'Masculino', '2023-10-18 12:19:37'),
(42, 'dob', '2023-10-17', '2023-10-18 12:19:37'),
(42, 'address', 'Jesús carranza ver', '2023-10-18 12:19:37'),
(42, 'equipo', 'Laptop Asus', '2023-10-18 12:19:37'),
(42, 'accesorios', 'Cargador Original de la Asus', '2023-10-18 12:19:37'),
(44, 'id', '45', '2023-10-18 12:32:56'),
(44, 'patient_id', '44', '2023-10-18 12:32:56'),
(44, 'name', 'gvssxvsg', '2023-10-18 12:32:56'),
(44, 'email', 'bdbv@gmail.com', '2023-10-18 12:32:56'),
(44, 'contact', '3737466', '2023-10-18 12:32:56'),
(44, 'gender', 'Masculino', '2023-10-18 12:32:56'),
(44, 'dob', '2023-10-18', '2023-10-18 12:32:56'),
(44, 'address', 'cdscdc', '2023-10-18 12:32:56'),
(44, 'equipo', 'nbddb', '2023-10-18 12:32:56'),
(44, 'accesorios', 'nbxcb', '2023-10-18 12:32:56'),
(43, 'id', '44', '2023-10-18 20:22:57'),
(43, 'patient_id', '43', '2023-10-18 20:22:57'),
(43, 'name', 'Francisco', '2023-10-18 20:22:57'),
(43, 'email', 'juanfe@gmai.com', '2023-10-18 20:22:57'),
(43, 'contact', '9241396167', '2023-10-18 20:22:57'),
(43, 'gender', 'Masculino', '2023-10-18 20:22:57'),
(43, 'dob', '2023-10-17', '2023-10-18 20:22:57'),
(43, 'address', 'Campo Nuevo', '2023-10-18 20:22:57'),
(43, 'equipo', 'Lapto Hp, password 123455', '2023-10-18 20:22:57'),
(43, 'accesorios', 'Cargar original Hp', '2023-10-18 20:22:57');

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
(1, 'name', 'Agenda tu cita'),
(6, 'short_name', 'Agenda tu cita'),
(11, 'logo', 'uploads/1697655540_logo pc systems sin fondo (1).png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1697655540_logo pc systems sin fondo (1).png');

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
(1, 'Хавьер ', 'Зетина', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'uploads/1697480760_Goku.jpg', NULL, 1, '2021-01-20 14:02:37', '2023-10-16 12:26:08'),
(7, 'Хавьер ', 'Зетина', 'javier', 'e10adc3949ba59abbe56e057f20f883e', 'uploads/1697208060_Goku.jpg', NULL, 0, '2021-12-12 15:41:46', '2023-10-13 08:41:07');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `location`
--
ALTER TABLE `location`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `patient_list`
--
ALTER TABLE `patient_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
