-- Active: 1677862054652@@127.0.0.1@3306
use form_in_php;

CREATE TABLE regione (
    id_regione int NOT NULL AUTO_INCREMENT,
    nome VARCHAR(99) not NULL,
    PRIMARY KEY(id_regione)
);

drop table regione;

insert into regione (nome) values('Abruzzo');

SELECT * from regione;

TRUNCATE TABLE regione;

insert into regione (nome) values('Valle d\'Aosta/Vallée d\'Aoste');
