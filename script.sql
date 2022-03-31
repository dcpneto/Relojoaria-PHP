CREATE DATABASE relojoaria DEFAULT CHARACTER SET utf8;
USE relojoaria;

CREATE TABLE relogios (
    nome          VARCHAR(255) NOT NULL,
    marca         VARCHAR(255),
    quantidade    INT NOT NULL,
    preco         VARCHAR(255) NOT NULL,
    flag          TINYINT(1) NULL DEFAULT 0,
    data          DATE NOT NULL,
PRIMARY KEY (nome))
