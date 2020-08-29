-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2020 a las 21:13:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Serio', '150.00', '\'SERIO\': Las historias detrás del primer álbum audiovisual de Lil Supa’\r\nEsto es lo que esconde, canción por canción, la obra maestra de Marlon Morales.', 'imgProd/i1.jpg'),
(2, 'Guia para la accion', '200.00', 'ÁLBUM DISCOGRÁFICO - 2009 - Nuestra Doctrina No Es Un Dogma, Es Una Guía Para La Acción - Canserber', 'imgProd/i3.jpg'),
(3, 'Muerte - Cancerbero', '300.00', 'Compositor y exponente de rap, Canserbero.​ El álbum cuenta con 14 temas los cuales hablan acerca de la muerte, la violencia, el crimen y el desamor. ', 'imgProd/i4.jpg'),
(8, ' Lil\' Peep ‎– Hellboy ', '250.00', 'Hellboy es el cuarto y último mixtape del rapero estadounidense Lil Peep. Fue lanzado el 25 de septiembre de 2016. Lo que ocurre meses después de firmar con la compañía administradora', 'imgProd/i10.jpg'),
(4, 'Player Hater - Rels B', '200.00', 'Primer álbum de larga duración (EP) de Skinny Flakkk, lanzado el mismo día de su cumpleaños 17 de octubre del año 2015 ', 'imgProd/i6.jpg'),
(5, 'Libres - Rels B', '100.00', 'Album novedoso y con una oferta especial', 'imgProd/i7.jpg'),
(6, 'Lies - Lil xan', '150.00', 'Lil Xan (también conocido como Diego) y Lil Skies se unen para ofrecer una canción aparentemente optimista sobre la muerte, la depresión y el suicidio. Lanzado como sencillo para su próximo álbum \"Heartbreak', 'imgProd/i8.jpg'),
(7, 'Indigos ', '200.00', 'En 2008; Canserbero & Lil Supa\' lanzan un disco que rápidamente se convirtió en una joya del Rap latino, Representando la unión de dos prodigios del Boombap en español', 'imgProd/i9.jpg'),
(9, 'Come Over When You\'re Sober, Pt. 2 ', '250.00', 'Es el segundo álbum de estudio del cantante y rapero estadounidense Lil Peep. El álbum se retrasó debido a la muerte de Lil Peep en noviembre de 2017, casi un año antes de que se publicara el álbum', 'imgProd/i11.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 1, 150, 150),
(2, 1, 1, 150, 150),
(3, 1, 1, 150, 150),
(4, 1, 1, 150, 150),
(5, 1, 1, 150, 150),
(22, 1, 1, 150, 150),
(23, 1, 1, 150, 150),
(24, 1, 1, 150, 150),
(25, 7, 1, 200, 200),
(26, 5, 1, 100, 100),
(27, 4, 1, 200, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passworda` varchar(100) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `passworda`, `nivel`) VALUES
(11, 'David', 'd@gmail.com', '123', '1'),
(13, 'Ordonez', 'o@gmail.com', '123', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(14, 5, 250, '2020-06-01 18:06:02'),
(15, 5, 250, '2020-06-01 18:06:16'),
(16, 5, 250, '2020-06-01 18:06:54'),
(21, 10, 150, '2020-06-01 18:06:39'),
(22, 1, 350, '2020-06-05 14:06:33'),
(23, 1, 350, '2020-06-05 14:06:58'),
(24, 1, 350, '2020-06-05 14:06:32'),
(25, 13, 300, '2020-06-05 14:06:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
