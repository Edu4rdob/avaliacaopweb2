CREATE DATABASE avaliacao2;
USE avaliacao2;

CREATE TABLE `usuario`(
    `id` INT AUTO_INCREMENT,
	`nome` VARCHAR(30),
    `nomeUsuario` VARCHAR(30),
    `email` VARCHAR(30),
    `senha` VARCHAR(16), 
    CONSTRAINT PRIMARY KEY(id)
);