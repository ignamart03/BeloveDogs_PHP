-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para belovedogs
DROP DATABASE IF EXISTS `belovedogs`;
CREATE DATABASE IF NOT EXISTS `belovedogs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `belovedogs`;

-- Volcando estructura para tabla belovedogs.animal
DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id_animal` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_animal`) USING BTREE,
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla belovedogs.animal: ~14 rows (aproximadamente)
DELETE FROM `animal`;
INSERT INTO `animal` (`id_animal`, `nombre`) VALUES
	(5, 'Canario'),
	(10, 'Cobaya'),
	(3, 'Conejo'),
	(11, 'Cotorra'),
	(2, 'Gato'),
	(4, 'Hamster'),
	(13, 'Hurón'),
	(15, 'Iguana'),
	(14, 'Jerbo'),
	(8, 'Loro'),
	(16, 'Otro'),
	(12, 'Pájaro'),
	(1, 'Perro'),
	(6, 'Pez'),
	(9, 'Tortuga');

-- Volcando estructura para tabla belovedogs.mascota
DROP TABLE IF EXISTS `mascota`;
CREATE TABLE IF NOT EXISTS `mascota` (
  `id_mascota` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre_mascota` varchar(20) NOT NULL,
  `raza` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dueño` varchar(20) NOT NULL,
  `edad` int unsigned NOT NULL,
  `altura` decimal(20,6) unsigned NOT NULL,
  `sexo` varchar(6) NOT NULL,
  PRIMARY KEY (`id_mascota`) USING BTREE,
  KEY `dueño` (`dueño`),
  KEY `especie` (`raza`) USING BTREE,
  CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`raza`) REFERENCES `raza` (`nombre`),
  CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`dueño`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla belovedogs.mascota: ~4 rows (aproximadamente)
DELETE FROM `mascota`;
INSERT INTO `mascota` (`id_mascota`, `nombre_mascota`, `raza`, `dueño`, `edad`, `altura`, `sexo`) VALUES
	(1, 'Dumbo', 'Ragdoll', 'viillaas', 5, 0.400000, 'MACHO'),
	(2, 'Nieve', 'Ragdoll', 'viillaas', 5, 0.400000, 'HEMBRA'),
	(3, 'Misu', 'Ragdoll', 'iorch', 12, 0.400000, 'MACHO'),
	(4, 'Juan', 'Golden Retriever', 'nachousk', 7, 1.000000, 'MACHO'),
	(5, 'Pepita', 'Persian', 'NANO', 8, 0.500000, 'HEMBRA'),
	(6, 'Rufo', 'Siamese', 'BeloveDogs', 1, 0.200000, 'MACHO'),
	(18, 'Thor', 'Golden Retriever', 'BeloveDogs', 3, 0.900000, 'MACHO'),
	(19, 'Nala', 'Maine Coon', 'BeloveDogs', 7, 0.500000, 'HEMBRA'),
	(20, 'Nana', 'Beagle', 'BeloveDogs', 1, 0.700000, 'HEMBRA'),
	(21, 'Rayo', 'Lionhead', 'BeloveDogs', 3, 0.200000, 'MACHO'),
	(22, 'Venom', 'Dutch', 'BeloveDogs', 6, 0.600000, 'MACHO'),
	(23, 'Macarrón', 'Poodle', 'BeloveDogs', 2, 1.300000, 'MACHO'),
	(24, 'Coco', 'Rabbit', 'BeloveDogs', 2, 0.100000, 'MACHO'),
	(25, 'Chispa', 'Ragdoll', 'BeloveDogs', 4, 0.400000, 'HEMBRA'),
	(26, 'Brownie', 'Holland Lop', 'BeloveDogs', 6, 0.500000, 'HEMBRA'),
	(27, 'Kinder', 'Labrador Retriever', 'BeloveDogs', 5, 1.400000, 'HEMBRA'),
	(28, 'Bimba', 'Persian', 'BeloveDogs', 10, 0.300000, 'HEMBRA');

-- Volcando estructura para tabla belovedogs.raza
DROP TABLE IF EXISTS `raza`;
CREATE TABLE IF NOT EXISTS `raza` (
  `id_raza` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `animal` varchar(20) NOT NULL,
  PRIMARY KEY (`id_raza`) USING BTREE,
  UNIQUE KEY `nombre` (`nombre`),
  KEY `animal` (`animal`),
  CONSTRAINT `raza_ibfk_1` FOREIGN KEY (`animal`) REFERENCES `animal` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=758 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla belovedogs.raza: ~57 rows (aproximadamente)
DELETE FROM `raza`;
INSERT INTO `raza` (`id_raza`, `nombre`, `animal`) VALUES
	(1, 'Golden Retriever', 'Perro'),
	(2, 'Siamese', 'Gato'),
	(3, 'Rabbit', 'Conejo'),
	(4, 'Syrian Hamster', 'Hamster'),
	(5, 'Canary', 'Canario'),
	(6, 'Goldfish', 'Pez'),
	(7, 'Dwarf Hamster', 'Hamster'),
	(8, 'Parrot', 'Loro'),
	(9, 'Turtle', 'Tortuga'),
	(10, 'Guinea Pig', 'Cobaya'),
	(11, 'Parakeet', 'Cotorra'),
	(12, 'Bird', 'Pájaro'),
	(13, 'Ferret', 'Hurón'),
	(14, 'Gerbil', 'Jerbo'),
	(15, 'Iguana', 'Iguana'),
	(16, 'Labrador Retriever', 'Perro'),
	(17, 'Maine Coon', 'Gato'),
	(18, 'Holland Lop', 'Conejo'),
	(19, 'Roborovski Hamster', 'Hamster'),
	(20, 'Budgerigar', 'Canario'),
	(21, 'Betta Fish', 'Pez'),
	(22, 'Roborovski Dwarf Ham', 'Hamster'),
	(23, 'African Grey Parrot', 'Loro'),
	(24, 'Red-Eared Slider', 'Tortuga'),
	(25, 'Abyssinian Guinea Pi', 'Cobaya'),
	(26, 'Quaker Parrot', 'Cotorra'),
	(27, 'Canary Finch', 'Pájaro'),
	(28, 'Angora Ferret', 'Hurón'),
	(29, 'Dwarf Gerbil', 'Jerbo'),
	(30, 'Green Iguana', 'Iguana'),
	(31, 'Poodle', 'Perro'),
	(32, 'Persian', 'Gato'),
	(33, 'Dutch', 'Conejo'),
	(34, 'Teddy Bear Hamster', 'Hamster'),
	(35, 'Fife Fancy', 'Canario'),
	(36, 'Molly Fish', 'Pez'),
	(37, 'Winter White Dwarf H', 'Hamster'),
	(38, 'Cockatiel', 'Loro'),
	(39, 'Russian Tortoise', 'Tortuga'),
	(40, 'Peruvian Guinea Pig', 'Cobaya'),
	(41, 'Lovebird', 'Cotorra'),
	(42, 'Zebra Finch', 'Pájaro'),
	(43, 'Sable Ferret', 'Hurón'),
	(44, 'Chinese Hamster', 'Jerbo'),
	(45, 'Leopard Gecko', 'Iguana'),
	(46, 'Beagle', 'Perro'),
	(47, 'Ragdoll', 'Gato'),
	(48, 'Lionhead', 'Conejo'),
	(49, 'Campbell Hamster', 'Hamster'),
	(50, 'Gloster Canary', 'Canario'),
	(51, 'Guppy Fish', 'Pez'),
	(52, 'Campbell Dwarf Hamst', 'Hamster'),
	(53, 'Caique', 'Loro'),
	(54, 'Greek Tortoise', 'Tortuga'),
	(55, 'Texel Guinea Pig', 'Cobaya'),
	(56, 'Bourke\'s Parakeet', 'Cotorra'),
	(57, 'Diamond Dove', 'Pájaro'),
	(58, 'Otro', 'Otro');

-- Volcando estructura para tabla belovedogs.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `password_hash` varchar(100) DEFAULT NULL,
  `role_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  UNIQUE KEY `username` (`username`),
  KEY `FK_users_1` (`role_type`),
  CONSTRAINT `FK_users_1` FOREIGN KEY (`role_type`) REFERENCES `user_roles` (`role_type`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla belovedogs.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id_user`, `username`, `nombre_completo`, `email`, `direccion`, `telefono`, `created_at`, `password_hash`, `role_type`) VALUES
	(1, 'viillaas', 'Daniel Villas', 'danielvillas@beloveDogs.com', 'BeloveDogs', 666666666, '2023-06-14 16:39:05', 'danielvillas', 'ADMIN'),
	(2, 'nachousk', 'Ignacio Martínez', 'ignaciomartinez@beloveDogs.com', 'BeloveDogs', 677777777, '2023-06-14 16:39:05', 'nachounsk', 'ADMIN'),
	(3, 'iorch', 'Jorge García', 'jorgegarcia@beloveDogs.com', 'BeloveDogs', 688888888, '2023-06-14 16:39:05', 'jorgegh', 'ADMIN'),
	(15, 'Robertufo', 'Roberto García Castillo', 'roberto@gmail.com', 'su casa', 678912345, '2023-06-17 17:12:53', '$2y$10$ZdYY9VFhz2fRonqyq8vUG.FXiWoR4VH86GayFvYnb0ZCoSTpSyWJK', 'CLIENT'),
	(16, 'BeloveDogs', 'Belove Dogs', 'belovedogs@belovedogs.com', 'IES Clara del Rey', 98765432, '2023-06-17 17:39:32', '$2y$10$LX3ccNXPX8sLP0AiWgM.zONO1KpkTBz5dYDubLvVJcNe3uRp03Ct.', 'ADMIN'),
	(17, 'pelling', 'Aitor Pelao', 'pelao2gmail.com', 'elbo', 654321987, '2023-06-18 04:29:07', '$2y$10$dVFdbPSGifggzsVS2QtQeu/JA7EKfPvvmlwSUMLKu9S23juvo0zl.', 'CLIENT'),
	(18, 'JorgeEPK', 'Jorge García Sánchez', 'jorgeepk@gmail.com', 'mandarina', 65498732, '2023-06-18 06:27:17', '$2y$10$YiGsA1og73Vi8hwdrEIxMun13bohj0C5MXRKJzcR/yb4s8UOmyNcC', 'CLIENT'),
	(19, 'Dicadillo', 'Santiago Padilla Briceño', 'dicadillo@gmail.com', 'Zamora', 654321987, '2023-06-18 07:00:32', '$2y$10$nWzUOkfUbDFkV1OK13WhHetxu3PZosg0nv8ay29uA4AM/GZNcdLaa', 'CLIENT'),
	(20, 'Pelao', 'Aitor Pelaez', 'pelao@gmail.com', 'elboalo', 98765432, '2023-06-18 07:38:04', '$2y$10$PXAe7DsbnC7J.5pPIu0RU.pwaN7AOXwFH9Bm1PWE9ql0nLeFOsweK', 'CLIENT'),
	(21, 'NANO', 'Fernando Balúe Martín', 'f.balue@claradelrey.com', 'IES Clara del Rey', 654789321, '2023-06-18 09:10:48', '$2y$10$5dA4rSbok7NtROKw4RJobOm1GdlA5VXVwwJv1dGq.ct7uKxhiLzf2', 'CLIENT'),
	(22, 'qwerqwer', 'sapo', 'danielvillas2003@gmail.com', 'CALLE MAQUEDA 28', 666666666, '2023-06-18 13:23:15', '$2y$10$pxhI6NWQTTE6R1cYIWy2rOBCnMmlIcayPAkdVzZLivyvDL6ONI7am', 'CLIENT');

-- Volcando estructura para tabla belovedogs.user_roles
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `id_role` int NOT NULL,
  `role_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`),
  UNIQUE KEY `role_type` (`role_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla belovedogs.user_roles: ~3 rows (aproximadamente)
DELETE FROM `user_roles`;
INSERT INTO `user_roles` (`id_role`, `role_type`) VALUES
	(1, 'ADMIN'),
	(2, 'CLIENT'),
	(3, 'SUPPLIER');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
