
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `smt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `smt`;

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `vestimentas` (
  `cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `descricao` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `estacao_ano` (
	`cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`descricao` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `meteorologia` (
	`cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`descricao` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `utensilios` (
	`cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`descricao` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pontos` (
  `cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `localizacao` int(11),
  `utensilios` int(11),
  `descricao` varchar(50) CHARACTER SET latin1 NOT NULL,
  `vestimentas` int(11) NOT NULL,
  `estacao_ano` int(11) NOT NULL,
  `meteorologia` int(11) NOT NULL,
  `historico` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tempo_estimado` double NOT NULL,
  `distancias` double NOT NULL,
  constraint `fk_utensilios_pontos` foreign key (`utensilios`) references `utensilios` (`cod`),
  constraint `fk_meteorologia_pontos` foreign key (`meteorologia`) references `meteorologia` (`cod`),
  constraint `fk_estacao_ano_pontos` foreign key (`estacao_ano`) references `estacao_ano` (`cod`),
  constraint `fk_vestimentas_pontos` foreign key (`vestimentas`) references `vestimentas` (`cod`)	
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `fotos` (
	`cod` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `cod_pontos` int(11) NOT NULL,
    `link` varchar(50) NOT NULL,
    constraint `fk_cod_pontos_pontos` foreign key (`cod_pontos`) references `pontos` (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


