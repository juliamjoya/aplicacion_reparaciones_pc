-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2024 a las 21:34:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_reparaciones_pc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_operacion`
--

CREATE TABLE `registro_operacion` (
  `id` int(11) NOT NULL,
  `numero_recibido` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_fallos_pc` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `repuestos_reparacion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_revision` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro_operacion`
--

INSERT INTO `registro_operacion` (`id`, `numero_recibido`, `descripcion_fallos_pc`, `repuestos_reparacion`, `fecha_revision`) VALUES
(1, '001', 'Se pone muy lento el ordenador al abrir 2-3 ventanas', 'No aplica', '2024-04-07 16:35:47'),
(2, '002', 'El monitor esta roto/quebrado', 'Monitor 13\'\' para asus rog flow', '2024-04-07 16:02:38'),
(3, '003', 'El teclado numerico independiente no funciona', 'Teclado alfanumerico para Dell Gamer', '2024-04-07 16:04:38'),
(4, '004', 'Se reinicia el pc cuando se recalienta', 'Pasta termica para cambio y mantenimento preventivo a disipadores.', '2024-04-07 16:10:12'),
(5, '005', 'Presenta un ruido alto al momento de encenderse', 'No aplica', '2024-04-07 16:15:03'),
(6, '006', 'No enciende el ordenador', 'Disco Duro de estado solido de 512 GB', '2024-04-07 16:17:39'),
(7, '007', 'El ordenador no da imagen/video', 'Tarjeta grafica nvidia RTX 3050', '2024-04-07 16:18:36'),
(8, '008', 'No funcionan los puertos USB', 'Placa base MSI-32250', '2024-04-07 16:28:40'),
(9, '009', 'No da sonido el ordenador', 'Bocinas para Hewlett Packard 5420', '2024-04-07 16:29:38'),
(10, '010', 'El microfono se daño', 'Microfono generico', '2024-04-07 16:31:43'),
(11, '011', 'La camara web no se ve bien', 'Camara web generica para Acer', '2024-04-07 16:34:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_recepcion`
--

CREATE TABLE `registro_recepcion` (
  `id` int(11) NOT NULL,
  `numero_recibido` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_pc` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `marca_pc` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_cliente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_cliente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_operario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_recepcion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro_recepcion`
--

INSERT INTO `registro_recepcion` (`id`, `numero_recibido`, `estado_pc`, `marca_pc`, `nombre_cliente`, `telefono_cliente`, `codigo_operario`, `fecha_recepcion`) VALUES
(11, '011', 'Excelente estado', 'Ordenador marca Dell', 'Cliente: Sheldon Cooper', 'Telefono Cliente: 01800123456', 'Codigo Operario: CODOPERARIO # 111', '2024-04-07 03:09:33'),
(12, '012', 'Bueno estado', 'Lenovo thinkpad', 'Leonard Hofstadter', '654321', 'CODOPERARIO # 112', '2024-04-07 03:14:45'),
(13, '003', 'Regular estado', 'Hewlett Packard Gamer', 'Rajesh Koothrappali', '456789', 'CODOPERARIO # 113', '2024-04-06 22:13:12'),
(14, '004', 'Malo estado', 'Asus ROG FLOW X13', 'Penny Dayana Rojas', '321654', 'CODOPERARIO # 115', '2024-04-06 22:13:12'),
(21, '999', 'Muy buen estado', 'Macbook pro', 'Sam Winchester', '998877665544', 'COD-741852963', '2024-04-06 22:42:18'),
(23, '777', 'Delicado', 'Asus notebook', 'pantro', '01800548612', '', '2024-04-06 22:52:08'),
(24, '666', 'buen estado', 'Dell', 'Alberto Rojas Pascual', '30084512698', 'COD-0011223344', '2024-04-06 22:58:20'),
(25, '555', 'Excelente estado', 'Packard Bell', 'David Leonardo Murcia', '300987456321', 'COD-225588', '2024-04-06 23:12:01'),
(26, '020', 'test_estado', 'test_ordenador', 'test_nombre_cliente', 'test_telefono_cliente', 'test_codigo_operador', '2024-04-07 02:10:17'),
(27, '021', 'test_estado_2', 'test_ordenador_2', 'test_nombre_cliente_2', 'test_telefono_cliente_2', 'test_codigo_operador_2', '2024-04-07 02:13:56'),
(28, '022', 'test_estado_3', 'test_ordenador_3', 'test_nombre_cliente_3', 'test_telefono_cliente_3', 'test_codigo_operador_3', '2024-04-07 02:31:26'),
(29, '029', 'test_estado_4', 'test_ordenador_4', 'test_nombre_cliente_4', 'test_telefono_cliente_4', 'test_codigo_operador_4', '2024-04-07 03:11:04'),
(30, '030', 'test_estado_5', 'test_ordenador_5', 'test_nombre_cliente_5', 'test_telefono_cliente_5', 'test_codigo_operador_5', '2024-04-07 03:12:18'),
(31, '031', 'test_estado_6', 'test_ordenador_6', 'test_nombre_cliente_6', 'test_telefono_cliente_6', 'test_codigo_operador_6', '2024-04-07 03:16:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_operacion`
--
ALTER TABLE `registro_operacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_recepcion`
--
ALTER TABLE `registro_recepcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_operacion`
--
ALTER TABLE `registro_operacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `registro_recepcion`
--
ALTER TABLE `registro_recepcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
