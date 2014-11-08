/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50621
Source Host           : localhost:3307
Source Database       : minigames

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2014-11-08 15:50:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_juego` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  KEY `id_juego` (`id_juego`),
  CONSTRAINT `id_juego` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comentarios
-- ----------------------------

-- ----------------------------
-- Table structure for comentario_juego
-- ----------------------------
DROP TABLE IF EXISTS `comentario_juego`;
CREATE TABLE `comentario_juego` (
  `folio` int(11) NOT NULL AUTO_INCREMENT,
  `id_juego` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `id_juego1` (`id_juego`),
  KEY `nick1` (`nick`),
  CONSTRAINT `id_juego1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nick1` FOREIGN KEY (`nick`) REFERENCES `usuarios` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comentario_juego
-- ----------------------------

-- ----------------------------
-- Table structure for juegos
-- ----------------------------
DROP TABLE IF EXISTS `juegos`;
CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `tipo_de_usuario` varchar(25) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_juego`),
  KEY `tipo_de_usuario` (`tipo_de_usuario`),
  CONSTRAINT `tipo_de_usuario` FOREIGN KEY (`tipo_de_usuario`) REFERENCES `usuarios` (`tipo_de_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of juegos
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `nick` varchar(50) NOT NULL,
  `tipo_de_usuario` varchar(25) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` char(1) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`nick`),
  KEY `tipo_de_usuario` (`tipo_de_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
