CREATE DATABASE ativpweb;
USE ativpweb;

CREATE TABLE `usuario`(
	  `nomeCompleto` VARCHAR(200),
    `nomeUsuario` VARCHAR(200),
    `email` VARCHAR(200),
    `senha` VARCHAR(36), 
    CONSTRAINT PRIMARY KEY(iduser)
);
