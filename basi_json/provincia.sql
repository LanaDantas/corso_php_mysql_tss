-- Active: 1678187039915@@127.0.0.1@3306@form_in_php
CREATE TABLE provincia (
    id_provincia int NOT NULL AUTO_INCREMENT,
    nome VARCHAR(99) not NULL,
    sigla CHAR(2) NOT NULL,
    id_regione int,
    PRIMARY KEY(id_provincia),
    FOREIGN KEY (id_regione) REFERENCES regione(id_regione)
);

drop table provincia;

INSERT INTO provincia(nome) VALUES('Agrigento');

SELECT * FROM provincia;

TRUNCATE TABLE provincia;

INSERT INTO provincia (nome) VALUES ('Viterbo');