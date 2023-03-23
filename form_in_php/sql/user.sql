-- Active: 1677862054652@@127.0.0.1@3306@form_in_php
CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `birth_city` varchar(255) NOT NULL,
  `id_regione` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (id_user)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`first_name`, `last_name`, `birthday`, `birth_city`, `id_regione`, `id_provincia`, `gender`, `username`, `password`)
    VALUES ('Mario', 'Rossi', '12/12/12', 'Torino', '18', '96', 'F', 'mariorossi@email.com', MD5('password'));

SELECT * FROM user;

TRUNCATE TABLE user;