-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2024 a las 13:32:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_envio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id`, `producto`, `marca`, `cantidad`, `direccion`, `fecha_envio`) VALUES
(4, 'sierra circular', 'makita', 4, 'santiago ', '2024-09-18'),
(6, 'sierra circular', 'Makita', 10, 'rancagua', '2024-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `marca`, `descripcion`, `categoria`, `cantidad`, `precio`) VALUES
(4, 'Sierra circula ', 'Makita', 'sierra cuenta con un potente motor de 8.2 AMP, gran capacidad de corte', 'herramienta', 34, 0),
(5, 'Taladro Percutor', 'Bosch', 'cuenta con un potente motor de 550 W', 'herramienta', 15, 0),
(6, 'martillo', 'hyper tough', 'martillo con mango de madera', 'herramienta', 30, 0),
(13, 'Taladro Percutor Bosch GSB 550 RE 550W7', ' Bosch', 'Taladro Percutor, cuenta con un motor de 550W de utilidad para diferentes materiales.', 'herramienta', 10, 0),
(14, 'Sierra circular Makita 1800W', 'Makita', 'Esta sierra tiene un motor 8,2 AMP, genera cortes 0° a -56° u positivos de 22,5°, 45° y 56°.', 'herramienta', 5, 0),
(15, 'Lijadora Roto-orbital Stanley Ss30-b2c 300w', 'Stanley', 'Lijadora con regulador de velocidad, motor de 300W y recolector de polvo.Lijadora con regulador de v', 'herramienta', 10, 0),
(16, 'Esmeril Angular 4-1/2', 'Makita', 'Esmeril Angular 4 1/2 de la marca Makita este cuenta con un motor de 720W, disco de diametro de 115m', 'herramienta', 4, 65000),
(17, 'Cortador de tubos PVC', 'Redline', 'Cortador de tubos de PVC de la marca Redline, con la capacidad de cortar hasta 28mm, tiene un ancho ', 'herramienta', 15, 0),
(18, 'Llave para tubo de acero inoxidable', 'Ubermann', 'Llave para tubos de acero inoxidable de la marca Ubermann y su capacidad de apertura es de 25 mm.', 'herramienta', 12, 0),
(19, 'Sierra caladora electrica Lernen', 'Lernen', 'Sierra caladora de la marca Lernen con una potencia de 400W, su voltaje es de 220V, pesa alrededor d', 'herramienta', 16, 0),
(20, 'Martillo Suave Doble Cara', 'Toolmak', 'Martillo doble cara, una de sus caras esta recubierta por plastico y goma, es de la marca Toolmak, s', 'herramienta', 18, 0),
(21, 'Soplete portatil Pg800', 'Providus ', 'Soplete de la marca Providus el gas utilizado por este soplete es el butano, el encendido es manual,', 'herramienta', 18, 0),
(22, 'Estante Acero Pintado 90x40x180 cm', 'generica', 'Estanteria de estructura en base a perfiles metalicos ranurados con la capacidad de ensamblado, cuen', 'muebles', 15, 0),
(23, 'Juego de Comedor 4 Sillas', 'vekkahome', 'Comedor de la marca vekkahome ,este incluye cuatro sillas, las sillas estan acolchadas, esto entrega', 'muebles', 10, 0),
(24, 'Sofá Mira 2 Cuerpos Zander', 'Zander', 'Sofa 2 cuerpos con tapizado de alta calidad, construido en base a madera de pino, le otorga una base', 'muebles', 8, 0),
(25, 'Sillón reclinable 84x92x103 cm', 'Just Home', 'Sillon de la marca Just Home de color chocolate, su ancho es de 84cm, una altura de 103cm y una prof', 'muebles', 10, 0),
(26, 'Silla Ejecutiva', 'generica', 'Silla para ejecutivos con una estructura de metal, con un tamño de 102 cm de alto, 64 cm de ancho y ', 'muebles', 12, 0),
(27, 'Librero De Arbol Organizador De Libros Alto 147cm', 'generica', 'Librero de diseño de arbol el cual entrega un amplio almacenaje y una agradable estetica, ademas de ', 'muebles', 15, 0),
(28, 'Proyector Android Led 500 ANSI 9000', 'ANSI', 'Proyector led ansi las funciones con las que cuenta es un sistema operativo con android 9.0 y una ap', 'tecnologia', 10, 0),
(29, 'Smart Camera Seguridad', 'Xiaomi', 'Camara de seguridad de la marca Xiaomi la cual tiene como caracteristica una grabacion de 1920px1080', 'tecnologia', 10, 0),
(30, 'Tablet M9 4GB-128GB 9\" IPS', 'lenovo ', 'Tablet de la marca lenovo con una camara de 8 MP, con una pantalla de aproximadamente de 22.86 cm o ', 'tecnologia', 13, 0),
(31, 'Bateria externa Xiaomi 20000MAH\" IPS', 'Xiaomi ', 'Bateria externa de la marca Xiaomi modelo Redmi 18W, se conecta via usb, tiene un tamaño de 15,4 cm ', 'tecnologia', 18, 0),
(32, 'Parlante karaoke bluetooth', 'Master-G', 'Parlante de karaoke bluetooth 6.5 con una potencia de 20W de la marca Master-G sus medidas son de 25', 'tecnologia', 20, 0),
(33, 'CAMARA DEPORTIVA', 'generica', 'Camara deportiva con la capacidad de ser sumergida, cuenta con una resolusion hd 1080p, carcasa impe', 'tecnologia', 25, 0),
(34, 'Bolsas de Basura', 'Impeke ', 'Bolsas de Basura de 50 x 70 cm de la marca Impeke de 10 unidades de gran resistencia.', 'limpieza', 40, 0),
(35, 'Trapero Húmedo Cerámica', 'Virginia ', 'Trapero húmedo para ceramica de la marca Virginia con olor a lavanda y flores el packete contiene 10', 'limpieza', 40, 0),
(36, 'Mopa Plana Virutex', 'Virutex', 'Mopa Plana de la marca Virutex de 35cm, entrega una gran versatilidad al momento de ser utilizada en', 'limpieza', 15, 0),
(37, 'Saco de alimento MASTER DOG Adulto', 'MASTER DOG', 'Saco de alimento para perros adultos de la marca Masterdog con sabor a carn, es un saco de 18kg', 'mascotas', 25, 0),
(38, 'Saco de alimento de 1kg gatos pequeños', 'Champion Cat', 'Saco de alimento para gatos pequeños de 1kg de la marca Champion Cat con sabor a carne y leche', 'mascotas', 25, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `envio` varchar(100) NOT NULL,
  `fecha_envio` date NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Producto` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `id_cargo`, `correo`) VALUES
(1, 'manuel1', '1234', 1, 'manuel@gmail.com'),
(3, 'luis', '2121', 2, 'luis@gmail.com'),
(5, 'nelson', '2425', 2, 'nelson@gmail.com'),
(6, 'milton', '8989', 1, 'milton@gmail.com'),
(9, 'cristopher', '2345', 1, 'cris@gmail.com'),
(10, 'maria1', '1212', 2, 'maria1@gmail.com'),
(13, 'manuel2', '3232', 1, 'manuel2@gmail.com'),
(17, 'lore', '9090', 1, 'lore@gmail.com'),
(18, 'claudio', '4545', 2, 'claudio@gmail.com'),
(19, 'Martin ', '3434', 1, 'martin@gmail.com'),
(20, 'Martin ', '3535', 1, 'martin@gmail.com'),
(24, 'laura', '4343', 1, 'laura@gmail.com'),
(25, 'cristopher1', '8989', 2, 'cristopher@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
