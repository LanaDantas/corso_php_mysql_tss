<?php

$nome = $_POST['first_name'];
$cognome = $_POST['last_name'];
$birthday = $_POST['birthday'];
$birthplace = $_POST['birth_place'];
$sesso = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($nome == '' or $cognome == '' or $birthday == '' or $birthplace == '' or $sesso == '' or $username == '' or $password == ''){
    echo "Compilare tutti i campi";
 } else {
    echo "<h2>Registrazine completata. Benvenuto $username</h2><br />";
 }

