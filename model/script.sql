drop database if exists BDPortal;
create database BDPortal;
use BDPortal;

drop table if exists usuario;
create table usuario(
    `codUsu` int primary key auto_increment not null,
   `nombreUsu`varchar(50) not null,
    `password` varchar(50) not null
);

drop table if exists docente;
create table docente(
    `codDoc` int primary key auto_increment not null,
    `nombreDoc` varchar(50) not null,
    `password` varchar(50) not null
);

insert into docente(codDoc, nombreDoc, password) values
(1,'DC0001','docente1'),
(2,'DC0002','docente2');

insert into usuario(codUsu,nombreUsu,password) values
(1,'AL0001','alumno1'),
(2,'AL0002','alumno2'),
(3,'AL0003','alumno3'),
(4,'AL0004','alumno4'),
(5,'AL0005','alumno5');



drop table if exists files;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;



