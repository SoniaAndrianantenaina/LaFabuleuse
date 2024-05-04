-- create DATABASE fabulous;
-- use fabulous;


-- fabulous.admins definition
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.lieux definition

CREATE TABLE `lieux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.services definition

CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.typeclients definition

CREATE TABLE `typeclients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.typesoiree definition

CREATE TABLE `typesoiree` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.clients definition

CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idtype` int DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `clients_FK` (`idtype`),
  CONSTRAINT `clients_FK` FOREIGN KEY (`idtype`) REFERENCES `typeclients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.servicesdetails definition

CREATE TABLE `servicesdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idservices` int DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `servicesdetails_FK` (`idservices`),
  CONSTRAINT `servicesdetails_FK` FOREIGN KEY (`idservices`) REFERENCES `services` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.themes definition

CREATE TABLE `themes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idTypeSoire` int DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `themes_FK` (`idTypeSoire`),
  CONSTRAINT `themes_FK` FOREIGN KEY (`idTypeSoire`) REFERENCES `typesoiree` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- fabulous.reservation definition

CREATE TABLE `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idClient` int DEFAULT NULL,
  `datePrevue` date DEFAULT NULL,
  `idTypeSoiree` int DEFAULT NULL,
  `idTheme` int DEFAULT NULL,
  `nbParticipants` int DEFAULT NULL,
  `idLieux` int DEFAULT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `etat` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `reservation_FK` (`idClient`),
  KEY `reservation_FK_1` (`idTypeSoiree`),
  KEY `reservation_FK_2` (`idTheme`),
  KEY `reservation_FK_3` (`idLieux`),
  CONSTRAINT `reservation_FK` FOREIGN KEY (`idClient`) REFERENCES `clients` (`id`),
  CONSTRAINT `reservation_FK_1` FOREIGN KEY (`idTypeSoiree`) REFERENCES `typesoiree` (`id`),
  CONSTRAINT `reservation_FK_2` FOREIGN KEY (`idTheme`) REFERENCES `themes` (`id`),
  CONSTRAINT `reservation_FK_3` FOREIGN KEY (`idLieux`) REFERENCES `lieux` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
