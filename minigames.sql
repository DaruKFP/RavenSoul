/*
Navicat MySQL Data Transfer

Source Server         : mysql_wamp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : minigames

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-11-29 14:49:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_juego` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `num_com` int(2) DEFAULT NULL,
  `com_ant` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `id_juego` (`id_juego`),
  KEY `nick` (`nick`),
  CONSTRAINT `id_juego` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nick` FOREIGN KEY (`nick`) REFERENCES `usuarios` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for comentario_juego
-- ----------------------------
DROP TABLE IF EXISTS `comentario_juego`;
CREATE TABLE `comentario_juego` (
  `folio` int(11) NOT NULL AUTO_INCREMENT,
  `id_juego` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `id_juego1` (`id_juego`),
  KEY `nick1` (`nick`),
  CONSTRAINT `id_juego1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nick1` FOREIGN KEY (`nick`) REFERENCES `usuarios` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for juegos
-- ----------------------------
DROP TABLE IF EXISTS `juegos`;
CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `tipo_de_usuario` varchar(25) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(320) NOT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  `intrucciones` varchar(100) NOT NULL,
  `dir_juego` varchar(30) NOT NULL,
  `dir_imagen` varchar(50) NOT NULL,
  `portada` varchar(60) NOT NULL,
  PRIMARY KEY (`id_juego`),
  KEY `tipo_de_usuario` (`tipo_de_usuario`),
  CONSTRAINT `tipo_de_usuario` FOREIGN KEY (`tipo_de_usuario`) REFERENCES `usuarios` (`tipo_de_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `nick` varchar(50) NOT NULL,
  `tipo_de_usuario` varchar(25) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`nick`),
  KEY `tipo_de_usuario` (`tipo_de_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
