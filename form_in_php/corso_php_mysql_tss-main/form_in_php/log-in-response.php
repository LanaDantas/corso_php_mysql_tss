<?php
/*
& -> variabile
"" / '' -> stringa
parola singola -> costante es.(CICCIO)
*/

$test = filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL);

if($test === false) {
    echo "\nLa mail non è valida\n";
} else {
    echo "Grazie, la tua email è valida: $test";
}

//curl http://localhost/corso_php_mysql_tss/form_in_php/log-in-response.php?email=sbagliata