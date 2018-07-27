-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2018 a las 06:31:19
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ieea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Primaria'),
(2, 'Secundaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id`, `name`, `category_id`) VALUES
(1, 'Matematicas', 2),
(2, 'Espaï¿½ol', 2),
(3, 'Ciencia_Naturales', 1),
(4, 'Artes Marciales', 1),
(5, 'Civismo', 1),
(6, 'Quimica', 2),
(7, 'Fisica', 2),
(8, 'Biologia', 1),
(9, 'Historia', 2),
(10, 'Ingles', 2),
(13, 'asd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_active` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `lastname`, `email`, `age`, `address`, `created_at`, `is_active`) VALUES
(1, 'Eduardo', 'Moo', 'eduardo@gmail.com', '50', 'Calle 64 entre 80', '0000-00-00 00:00:00', 1),
(2, 'Placido', 'Balam', 'placido@gmail.com', '44', 'Calle 64 entre 80', '2018-07-10 00:00:00', 1),
(3, 'Paloma', 'Sabido', 'paloma@gmail.com', '40', 'Calle 64 entre 80', '2018-07-10 00:00:00', 1),
(4, 'Luis', 'Perez Cano', 'luis@gmail.com', '20', 'His home', '2018-07-12 07:30:32', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor_has_course`
--

CREATE TABLE `instructor_has_course` (
  `id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instructor_has_course`
--

INSERT INTO `instructor_has_course` (`id`, `instructor_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 6),
(4, 1, 7),
(5, 2, 3),
(6, 2, 4),
(7, 2, 8),
(8, 2, 9),
(9, 3, 5),
(10, 3, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Cursando'),
(2, 'Finalizado'),
(3, 'Desertado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`id`, `name`, `lastname`, `created_at`) VALUES
(16, 'Luis', 'Pech', '2018-07-15 20:36:39'),
(18, 'Karlassss', 'Estrada', '2018-07-17 18:29:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_has_course`
--

CREATE TABLE `student_has_course` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `student_has_course`
--

INSERT INTO `student_has_course` (`id`, `student_id`, `course_id`, `status_id`) VALUES
(1, 16, 1, 2),
(2, 16, 1, 1),
(3, 16, 1, 1),
(4, 16, 1, 1),
(5, 16, 1, 1),
(6, 16, 1, 1),
(7, 16, 1, 1),
(8, 16, 1, 1),
(9, 16, 1, 1),
(10, 16, 1, 1),
(11, 16, 1, 1),
(12, 16, 1, 1),
(13, 16, 1, 1),
(14, 16, 1, 1),
(15, 16, 1, 1),
(16, 16, 1, 1),
(17, 16, 1, 1),
(18, 16, 1, 1),
(19, 16, 1, 1),
(20, 16, 1, 1),
(21, 16, 1, 1),
(22, 16, 1, 1),
(23, 16, 1, 1),
(24, 16, 1, 1),
(25, 16, 1, 1),
(26, 16, 1, 1),
(27, 16, 1, 1),
(28, 16, 1, 1),
(29, 16, 1, 1),
(30, 16, 1, 1),
(31, 16, 1, 1),
(32, 16, 1, 1),
(33, 16, 1, 1),
(34, 16, 1, 1),
(35, 16, 1, 1),
(36, 16, 1, 1),
(37, 16, 1, 1),
(38, 16, 1, 1),
(39, 16, 1, 1),
(40, 16, 1, 1),
(41, 16, 1, 1),
(42, 16, 1, 1),
(43, 16, 1, 1),
(44, 16, 1, 1),
(45, 16, 1, 1),
(46, 16, 1, 1),
(47, 16, 1, 1),
(48, 16, 1, 1),
(49, 16, 1, 1),
(50, 16, 1, 1),
(51, 16, 1, 1),
(52, 16, 1, 1),
(53, 16, 1, 1),
(54, 16, 1, 1),
(55, 16, 1, 1),
(56, 16, 1, 1),
(57, 16, 1, 1),
(58, 16, 1, 1),
(59, 16, 1, 1),
(60, 16, 1, 1),
(61, 16, 1, 1),
(62, 16, 1, 1),
(63, 16, 1, 1),
(64, 16, 1, 1),
(65, 16, 1, 1),
(66, 16, 1, 1),
(67, 16, 1, 1),
(68, 16, 1, 1),
(69, 16, 1, 1),
(70, 16, 1, 1),
(71, 16, 1, 1),
(72, 16, 1, 1),
(73, 16, 1, 1),
(74, 16, 1, 1),
(75, 16, 1, 1),
(76, 16, 1, 1),
(77, 16, 1, 1),
(78, 16, 1, 1),
(79, 16, 1, 1),
(80, 16, 1, 1),
(81, 16, 1, 1),
(82, 16, 1, 1),
(83, 16, 1, 1),
(84, 16, 1, 1),
(85, 16, 1, 1),
(86, 16, 1, 1),
(87, 16, 1, 1),
(88, 16, 1, 1),
(89, 16, 1, 1),
(90, 16, 1, 1),
(91, 16, 1, 1),
(92, 16, 1, 1),
(93, 16, 1, 1),
(94, 16, 1, 1),
(95, 16, 1, 1),
(96, 16, 1, 1),
(97, 16, 1, 1),
(98, 16, 1, 1),
(99, 16, 1, 1),
(100, 16, 1, 1),
(101, 16, 1, 1),
(102, 16, 1, 1),
(103, 16, 1, 1),
(104, 16, 1, 1),
(105, 16, 1, 1),
(106, 16, 1, 1),
(107, 16, 1, 1),
(108, 16, 1, 1),
(109, 16, 1, 1),
(110, 16, 1, 1),
(111, 16, 1, 1),
(112, 16, 1, 1),
(113, 16, 1, 1),
(114, 16, 1, 1),
(115, 16, 1, 1),
(116, 16, 1, 1),
(117, 16, 1, 1),
(118, 16, 1, 1),
(119, 16, 1, 1),
(120, 16, 1, 1),
(121, 16, 1, 1),
(122, 16, 1, 1),
(123, 16, 1, 1),
(124, 16, 1, 1),
(125, 16, 1, 1),
(126, 16, 1, 1),
(127, 16, 1, 1),
(128, 16, 1, 1),
(129, 16, 1, 1),
(130, 16, 1, 1),
(131, 16, 1, 1),
(132, 16, 1, 1),
(133, 16, 1, 1),
(134, 16, 1, 1),
(135, 16, 1, 1),
(136, 16, 1, 1),
(137, 16, 1, 1),
(138, 16, 1, 1),
(139, 16, 1, 1),
(140, 16, 1, 1),
(141, 16, 1, 1),
(142, 16, 1, 1),
(143, 16, 1, 1),
(144, 16, 1, 1),
(145, 16, 1, 1),
(146, 16, 1, 1),
(147, 16, 1, 1),
(148, 16, 1, 1),
(149, 16, 1, 1),
(150, 16, 1, 1),
(151, 16, 1, 1),
(152, 16, 1, 1),
(153, 16, 1, 1),
(154, 16, 1, 1),
(155, 16, 1, 1),
(156, 16, 1, 1),
(157, 16, 1, 1),
(158, 16, 1, 1),
(159, 16, 1, 1),
(160, 16, 1, 1),
(161, 16, 1, 1),
(162, 16, 1, 1),
(163, 16, 1, 1),
(164, 16, 1, 1),
(165, 16, 1, 1),
(166, 16, 1, 1),
(167, 16, 1, 1),
(168, 16, 1, 1),
(169, 16, 1, 1),
(170, 16, 1, 1),
(171, 16, 1, 1),
(172, 16, 1, 1),
(173, 16, 1, 1),
(174, 16, 1, 1),
(175, 16, 1, 1),
(176, 16, 1, 1),
(177, 16, 1, 1),
(178, 16, 1, 1),
(179, 16, 1, 1),
(180, 16, 1, 1),
(181, 16, 1, 1),
(182, 16, 1, 1),
(183, 16, 1, 1),
(184, 16, 1, 1),
(185, 16, 1, 1),
(186, 16, 1, 1),
(187, 16, 1, 1),
(188, 16, 1, 1),
(189, 16, 1, 1),
(190, 16, 1, 1),
(191, 16, 1, 1),
(192, 16, 1, 1),
(193, 16, 1, 1),
(194, 16, 1, 1),
(195, 16, 1, 1),
(196, 16, 1, 1),
(197, 16, 1, 1),
(198, 16, 1, 1),
(199, 16, 1, 1),
(200, 16, 1, 1),
(201, 16, 1, 1),
(202, 16, 1, 1),
(203, 16, 1, 1),
(204, 16, 1, 1),
(205, 16, 1, 1),
(206, 16, 1, 1),
(207, 16, 1, 1),
(208, 16, 1, 1),
(209, 16, 1, 1),
(210, 16, 1, 1),
(211, 16, 1, 1),
(212, 16, 1, 1),
(213, 16, 1, 1),
(214, 16, 1, 1),
(215, 16, 1, 1),
(216, 16, 1, 1),
(217, 16, 1, 1),
(218, 16, 2, 1),
(219, 18, 3, 1),
(221, 16, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_admin` tinyint(2) NOT NULL,
  `is_active` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `password`, `email`, `created_at`, `is_admin`, `is_active`) VALUES
(5, 'admin', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'admin@gmail.com', '2018-07-26 00:00:00', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_course_category_idx` (`category_id`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instructor_has_course`
--
ALTER TABLE `instructor_has_course`
  ADD PRIMARY KEY (`id`,`instructor_id`,`course_id`),
  ADD KEY `fk_instructor_has_course_course1_idx` (`course_id`),
  ADD KEY `fk_instructor_has_course_instructor1_idx` (`instructor_id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_has_course`
--
ALTER TABLE `student_has_course`
  ADD PRIMARY KEY (`id`,`student_id`,`course_id`,`status_id`),
  ADD KEY `fk_student_has_course_course1_idx` (`course_id`),
  ADD KEY `fk_student_has_course_student1_idx` (`student_id`),
  ADD KEY `fk_student_has_course_status1_idx` (`status_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `instructor_has_course`
--
ALTER TABLE `instructor_has_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `student_has_course`
--
ALTER TABLE `student_has_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_course_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instructor_has_course`
--
ALTER TABLE `instructor_has_course`
  ADD CONSTRAINT `fk_instructor_has_course_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instructor_has_course_instructor1` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `student_has_course`
--
ALTER TABLE `student_has_course`
  ADD CONSTRAINT `fk_student_has_course_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_has_course_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_has_course_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
