-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 22:47:52
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `imagen`, `estado`) VALUES
(14, 'Impresora', 'files/6511da5cc52cd_L4260-1.jpg', 1),
(15, 'Iphone 15 Pro Max', 'files/6511da9e5daed_500_333.jpeg', 1),
(16, 'Laptop', 'files/6511e43f12234_c06605069.png', 1),
(17, 'Mouse', 'files/6511e054d6bb8_e8384959-ad1a-1b95-762b-2861496b886e.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`, `estado`) VALUES
(1, 'Administrador', 1),
(8, 'Lector', 1),
(9, 'Editor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `edad`, `telefono`, `correo`, `id_rol`, `password`, `estado`) VALUES
(1, 'Rodney', 'Chiluiza', 18, '0978893942', 'rodney@gmail.com', 1, '12345678', 1),
(3, 'Patricio', 'Morocho', 51, '0963258741', 'patricio@gmail.com', 8, '123', 1),
(4, 'Ricardo', 'Castro', 20, '0789654123', 'ricardo@gmail.com', 8, '', 1),
(29, 'Deserunt modi quis o', 'Quis aliquip et reru', 97, '9873546728', 'nycota@mailinator.com', 8, '', 0),
(30, 'Deserunt modi quis o', 'Quis aliquip et reru', 97, '9873546728', 'nycota@mailinator.com', 9, '', 0),
(34, 'Voluptas voluptatem ', 'Velit commodi ut dic', 86, '1317253792', 'nane@mailinator.com', 9, '', 7),
(35, 'Non voluptatem Offi', 'Dolor dolores laudan', 43, '2209347859', 'lukyv@mailinator.com', 9, '', 1),
(36, 'Hic veniam quia rep', 'Vel Nam reiciendis q', 19, '1989907678', 'nerekapel@mailinator.com', 8, '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
