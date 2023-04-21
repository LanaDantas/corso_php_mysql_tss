<?php

//definisco delle costanti per far prima (nome costante + valore della costante)
define('DB_HOST', 'localhost');
define ('DB_USER','root');
define ('DB_PASSWORD', '');
define('DB_NAME', 'form_in_php');

// define('DB_HOST', 'localhost');
// define ('DB_USER','id20599802_lanadantas');
// define ('DB_PASSWORD', '.Chiara100510');
// define('DB_NAME', 'id20599802_forminphp');

//Creiamo una costante per $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
define('DB_DSN', "mysql:host=".DB_HOST.";dbname=".DB_NAME);