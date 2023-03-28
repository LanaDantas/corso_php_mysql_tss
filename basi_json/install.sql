-- Active: 1677862054652@@127.0.0.1@3306@form_in_php

CREATE Table regione (
    regione_id int NOT NULL AUTO_INCREMENT,
    nome VARCHAR(99) not NULL,
    PRIMARY KEY (regione_id)

);

drop table regione;

insert INTO regione (nome)
        value('Abruzzo');

SELECT * FROM regione;

INSERT INTO regione(nome)VALUES ('Valle d\'Aosta/Vallée d\'Aoste');

TRUNCATE TABLE regione;

CREATE Table provincia (
    provincia_id int NOT NULL AUTO_INCREMENT,
    regione_id int NOT NULL,
    nome VARCHAR(255) not NULL,
    sigla CHAR(2) not NULL,
    PRIMARY KEY (provincia_id)
    /*FOREIGN KEY (id_regione) REFERENCES regione (id_regione)*/
    );


SELECT regione_id FROM regione WHERE nome = 'Sicilia'; 

INSERT INTO provincia (nome,sigla,regione_id) VALUES ('Agrigento', 'AG', 15);

SELECT * FROM provincia;

drop table provincia;
