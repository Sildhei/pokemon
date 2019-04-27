-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-04-2019 a las 19:37:46
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemons`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
CREATE TABLE IF NOT EXISTS `pokemons` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Numero` int(3) NOT NULL,
  `ImagenPoke` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Stat1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Valor1` int(2) NOT NULL,
  `Stat2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Valor2` int(2) NOT NULL,
  `Evolucion1` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Evolucion2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`ID`, `Nombre`, `Numero`, `ImagenPoke`, `Tipo1`, `Tipo2`, `Stat1`, `Valor1`, `Stat2`, `Valor2`, `Evolucion1`, `Imagen1`, `Evolucion2`, `Imagen2`) VALUES
(12, 'Charmander', 4, 'https://img.pokemondb.net/artwork/charmander.jpg', 'Fire', '-', 'HP', 39, 'Attack', 52, 'Charmeleon', 'https://img.pokemondb.net/artwork/charmeleon.jpg', 'Charizard', 'https://img.pokemondb.net/artwork/charizard.jpg'),
(11, 'Bulbasaur', 1, 'https://img.pokemondb.net/artwork/bulbasaur.jpg', 'Grass', 'Poison', 'HP', 45, 'Attack', 49, 'Ivysur', 'https://img.pokemondb.net/artwork/ivysaur.jpg', 'Venusaur', 'https://img.pokemondb.net/artwork/venusaur.jpg'),
(13, 'Squirtle', 7, 'https://img.pokemondb.net/artwork/squirtle.jpg', 'Water', '-', 'HP', 44, 'Attack', 48, 'Wartortle', 'https://img.pokemondb.net/artwork/wartortle.jpg', 'Blastoise', 'https://img.pokemondb.net/artwork/blastoise.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
