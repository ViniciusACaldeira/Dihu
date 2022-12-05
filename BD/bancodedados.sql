CREATE DATABASE `dihu` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `permissao` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `usuariocol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `descricao` mediumtext NOT NULL,
  `link` mediumtext DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `evento_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventoID` int(11) NOT NULL,
  `categoriaID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Evento_EventoCategoria_FK` (`eventoID`),
  KEY `Categoria_EventoCategoria_FK` (`categoriaID`),
  CONSTRAINT `Categoria_EventoCategoria_FK` FOREIGN KEY (`categoriaID`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Evento_EventoCategoria_FK` FOREIGN KEY (`eventoID`) REFERENCES `evento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `denuncia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaID` int(11) NOT NULL,
  `anonimo` tinyint(4) NOT NULL,
  `descricao` mediumtext DEFAULT NULL,
  `usuarioID` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Categoria_Denuncia_FK` (`categoriaID`),
  CONSTRAINT `Categoria_Denuncia_FK` FOREIGN KEY (`categoriaID`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` mediumtext DEFAULT NULL,
  `nome` mediumtext NOT NULL,
  `categoriaID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Categoria_SubCategoria_FK` (`categoriaID`),
  CONSTRAINT `Categoria_SubCategoria_FK` FOREIGN KEY (`categoriaID`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `informacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` mediumtext DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `subCategoriaID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SubCategoria_Informacoes_FK` (`subCategoriaID`),
  CONSTRAINT `SubCategoria_Informacoes_FK` FOREIGN KEY (`subCategoriaID`) REFERENCES `subcategoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

