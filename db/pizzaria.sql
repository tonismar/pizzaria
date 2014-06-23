# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.16)
# Database: pizzaria
# Generation Time: 2014-06-23 20:55:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table itens_pedido
# ------------------------------------------------------------

DROP TABLE IF EXISTS `itens_pedido`;

CREATE TABLE `itens_pedido` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `sabores` varchar(100) NOT NULL DEFAULT '',
  `tamanho` varchar(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `itens_pedido` WRITE;
/*!40000 ALTER TABLE `itens_pedido` DISABLE KEYS */;

INSERT INTO `itens_pedido` (`id`, `id_pedido`, `sabores`, `tamanho`)
VALUES
	(1,1,'4 queijos','G');

/*!40000 ALTER TABLE `itens_pedido` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pedidos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `observacao` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `total` float NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;

INSERT INTO `pedidos` (`id`, `data`, `observacao`, `total`, `id_pessoa`)
VALUES
	(1,'2014-06-19','Este é um teste de pedido. Tem que lista na hora que chamar. Ok!',134.43,2);

/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pessoas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pessoas`;

CREATE TABLE `pessoas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '',
  `telefone` varchar(15) NOT NULL DEFAULT '',
  `endereco` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;

INSERT INTO `pessoas` (`id`, `nome`, `telefone`, `endereco`)
VALUES
	(1,'Tonismar','5185761176','Saldanha da Gama 85 Harmonia apto 303'),
	(2,'Márcia','5185761177','Cel. Vicente 201 Centro apto 201-A'),
	(3,'Teste','84012767','R. Placido de Castro, 130 - Marechal Rondon'),
	(4,'Bernardo','5130591176','Endereço Teste'),
	(5,'Pessoa de Teste','5199999999','Av. Teste 6');

/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
