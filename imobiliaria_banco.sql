CREATE DATABASE imobiliaria_site;

USE imobiliaria_site;

CREATE TABLE inquilino (
CodInquilino INT (5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
CPF INT (8) NOT NULL,
Nome VARCHAR (50) NOT NULL,
Email VARCHAR (50) NOT NULL, 
Senha VARCHAR (15) NOT NULL);

INSERT INTO inquilino(CPF, Nome, Email, Senha) VALUES(12345266589, 'Joelma da Silva', 'teste@hotmail.com', 'senha');