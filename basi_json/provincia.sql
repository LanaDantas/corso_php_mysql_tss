-- Active: 1677862054652@@127.0.0.1@3306@form_in_php
CREATE TABLE provincia (
    provincia_id int NOT NULL AUTO_INCREMENT,
    nome VARCHAR(99) not NULL,
    sigla CHAR(2) NOT NULL,
    regione_id int,
    PRIMARY KEY(provincia_id),
    FOREIGN KEY (regione_id) REFERENCES regione(regione_id)
);

drop table provincia;

INSERT INTO provincia(nome) VALUES('Agrigento');

SELECT * FROM provincia;

TRUNCATE TABLE provincia;

INSERT INTO provincia (nome) VALUES ('Viterbo');