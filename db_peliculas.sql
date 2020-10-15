-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 21:04:17
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
-- Base de datos: `db_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`) VALUES
(1, 'romance'),
(2, 'terror'),
(3, 'accion'),
(4, 'comedia'),
(5, 'suspenso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre`, `descripcion`, `precio`, `id_genero`) VALUES
(1, 'Titanic', 'Una joven de la alta sociedad abandona a su arrogante pretendiente por un artista humilde en el trasatlántico que se hundió durante su viaje inaugural.', 200, 1),
(2, 'WALL·E', 'Luego de pasar años limpiando la Tierra desierta, el robot Wall-E conoce a EVA y la sigue por toda la galaxia.', 580, 1),
(5, 'Zero', 'Bajo en estatura pero grande en amor, un soltero conoce a dos mujeres muy diferentes que amplían sus horizontes y lo ayudan a encontrar un propósito en la vida.', 200, 1),
(6, 'La chica que saltaba a través del tiempo', 'Una adolescente intenta usar a su favor su nueva capacidad para viajar en el tiempo.', 550, 1),
(7, '6 años', 'Una pareja de jóvenes volátiles que están juntos hace seis años tendrá oportunidades inesperadas para sus carreras que amenazarán su futuro.', 300, 1),
(8, 'Comando especial', 'Cuando los policías Schmidt y Jenko se unen a la unidad secreta Jump Street, ellos usan sus apariencias juveniles para trabajar de forma encubierta como estudiantes de preparatoria.', 340, 4),
(9, 'Feliz día de tu muerte 2', 'Tree Gelbman vuelve a entrar en el bucle temporal para averiguar por qué entró la primera vez. Sin embargo, Lori ha resucitado y pretende vengarse de Tree.', 470, 4),
(10, 'A Haunted House 2', 'A Haunted House 2, es una secuela de la película de comedia estadounidense estrenada en enero del 2013. Se estrenó el 18 de abril de 2014 en los Estados Unidos.', 460, 4),
(11, 'Father Figures', 'Dos hermanos mellizos crecieron pensando que su padre había muerto, pero descubren que está vivo y emprenden un viaje para encontrarlo.', 360, 4),
(12, 'Chicos buenos', 'Max, Thor y Lucas faltan a la escuela y se lanzan en una alocada y épica aventura llena de malas decisiones.', 780, 4),
(13, 'Capitán América y el Soldado del Invierno', 'Capitán América, Viuda Negra y un nuevo aliado, Falcon, se enfrentan a un enemigo inesperado mientras intentan exponer una conspiración que pone en riesgo al mundo', 600, 3),
(14, 'Soy el número cuatro', 'Un fugitivo extraterrestre, uno de nueve que viven en la Tierra, tiene habilidades extraordinarias y se hace pasar por un adolescente ordinario con la esperanza de evitar a las personas que desean matarlo.', 230, 3),
(15, 'Batman Beyond: Return of the Joker', 'El joven protegido de uno de los superhéroes más grandes del mundo debe asumir nuevas responsabilidades y luchar contra un viejo enemigo de su jefe, el Guasón, que vuelve a Ciudad Gótica más enojado que nunca.', 600, 3),
(16, 'Black Butler', 'Después de su supuesta muerte, una joven mujer regresa a la casa de su familia con un demonio a su lado para vengar el asesinato de sus padres.', 450, 3),
(17, 'Selfless', 'Un anciano extremadamente rico, quien muere de cáncer, se somete a un procedimiento médico radical que transfiere su conciencia al cuerpo de un joven saludable.', 470, 3),
(18, 'Nosotros', 'Adelaide y su esposo viajan a la casa en la que ella creció junto a la playa. Tiene un presentimiento siniestro que precede a un encuentro espeluznante: cuatro enmascarados se presentan ante su casa. Lo aterrador viene cuando muestran sus rostros.', 790, 2),
(19, 'Brightburn', 'Las plegarias de una pareja son respondidas cuando un objeto llega a la Tierra transportando una forma de vida que parece ser un bebé. Con el paso de los años, el alienígena crece y comienza a usar sus poderes de forma siniestra.', 340, 2),
(20, 'Noche de miedo', 'Noche de miedo es el remake de la película de 1985 del mismo nombre de Tom Holland. Touchstone Pictures. Fue estrenada el 19 de agosto de 2011.​', 540, 2),
(21, 'El círculo', 'Un reportero de TV investiga el mito sobre una extraña videocinta, que trae la muerte a todos los que la miran.', 120, 2),
(22, 'P', 'Una huérfana que aprendió hechicería de su abuela debe encontrar empleo en Bangkok, donde los personajes más despreciables se enfrentarán a sus poderes.', 800, 2),
(23, 'Eliminar amigo', 'Un año después de su suicidio, el vengativo espíritu de una adolescente acosada se venga a través de la computadora de quienes, con sus humillaciones, la empujaron hacia la muerte.', 230, 5),
(24, 'No respires', 'Unos ladrones saben que un ciego guarda mucho dinero en su vivienda y entran en su casa para robarle. Pero descubren que el hombre guarda un secreto terrible y lo que parecía un atraco sencillo se termina convirtiendo en la peor pesadilla de sus vidas.', 540, 5),
(25, 'Captive State', 'Diez años después de la invasión alienígena, los humanos se dividen en rebeldes y colaboracionistas. En Chicago, el joven Gabriel se une a la resistencia terrícola, pero todavía no es consciente del peligro que pende sobre él y sus camaradas.', 230, 5),
(26, 'Gone Girl', 'Un hombre reporta que su esposa desapareció en su quinto aniversario de bodas, pero la imagen pública de una relación feliz empieza a desmoronarse por la presión de la policía y de los medios de comunicación.', 370, 5),
(27, 'Nerve', 'Presionada por sus amigos, una adolescente participa en un juego de realidad virtual, pero el cariz de lo que se presuponía un divertimiento, cambia y se torna primero inquietante, después siniestro.', 860, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(1, 'user@user.com', '$2y$10$aojSMJE2kQgF/F.HAnIej.fhMf9.UJvmooBvrqAf2FuJRBg8IFZXC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
