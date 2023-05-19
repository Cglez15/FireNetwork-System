drop database if exists proyecto;
create database proyecto;
use proyecto;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create table cita_medica (
id_cita int auto_increment primary key not null,
dia_cita varchar (25),
mes_cita varchar (25),
año_cita varchar (25));

CREATE TABLE `usuarios`(
`id_usuario` int(11) auto_increment primary key not null,
`name` varchar (250) NOT NULL,
`apellidoPaterno_usuario` varchar (250) NOT NULL,
`apellidoMaterno_usuario` varchar (250) NOT NULL,
`email` varchar (250) NOT NULL,
`password` varchar (250) NOT NULL,
`telefono_usuario` varchar (250) NOT NULL,
`edad_usuario` varchar (250) NOT NULL,
`imagen` varchar(50) DEFAULT NULL,
`code` text NOT NULL,
`unique_id` int(255) NOT NULL,
`status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `imagenes` (
  `cod_imagen` int(11) auto_increment primary key not null,
  `imagen` varchar(50) DEFAULT NULL,
  `bandera` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--


CREATE TABLE `contactanos`(
`id_usuario` int(11) auto_increment primary key not null,
`nameContac` varchar (250) NOT NULL,
`emailContac` varchar (250) NOT NULL,
`temaContac` varchar (250) NOT NULL,
`msjContac` varchar (2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `messages` (
  `msg_id` int(11) auto_increment primary key NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `user_id` int(11) auto_increment primary key NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
`status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into users (user_id, email, password, unique_id, status) values
 ('3', 'g@gmail.com', '0cc175b9c0f1b6a831c399e269772662', '464063383', 'Active now');
 
 CREATE TABLE `formularios` (
  `id_user` int(11) auto_increment primary key NOT NULL,
  `problema1` varchar(255) NOT NULL,
  `problema2` varchar(255) NOT NULL,
  `problema3` varchar(255) NOT NULL,
  `problema4` varchar(255) NOT NULL,
  `problema5` varchar(255) NOT NULL,
  `problema6` varchar(255) NOT NULL,
  `problema7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
    
select * from  `contactanos`;
select * from  `usuarios`;
select * from  `users`;
select * from  `imagenes`;
select * from  `messages`;
select * from  `formularios`;



