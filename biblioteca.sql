CREATE DATABASE IF NOT EXISTS `biblioteca`;
USE `biblioteca`;

CREATE TABLE IF NOT EXISTS `biblio` (
`nome_biblio` VARCHAR(45) NOT NULL,
`fone_biblio` INT NOT NULL,
`endereco_biblio` VARCHAR(45) NOT NULL,
`email_biblio` VARCHAR(45) NOT NULL,
`cod_biblio` INT NOT NULL auto_increment,
PRIMARY KEY (`cod_biblio`)
);

CREATE TABLE IF NOT EXISTS `livros` (
`nome_livro` VARCHAR(45) NOT NULL,
`autor_livro` VARCHAR(45) NOT NULL,
`editora_livro` VARCHAR(45) NOT NULL,
`isbn` INT NOT NULL,
`qtd_paginas` INT NOT NULL,
`cod_livro` INT NOT NULL auto_increment,
`cod_b` INT NOT NULL,
PRIMARY KEY (`cod_livro`),
CONSTRAINT `fk_livros_biblio` FOREIGN KEY (`cod_b`) REFERENCES `biblioteca`.`biblio` (`cod_biblio`)
);

SELECT * FROM `biblioteca`.`livros`;