<?php

$nome = filter_input(INPUT_POST,"first_name");
$cognome = filter_input(INPUT_POST,"last_name");
$birthday = filter_input(INPUT_POST,"birthday");
$birthplace = filter_input(INPUT_POST,"birth_place");
$gender = filter_input(INPUT_POST,"gender");
$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");
//  print_r($_POST);

if(!$username) {
    echo "<h2>Username non è valida</h2>";
      } elseif (!$nome) {
          echo "<h2>Compilare tutti i campi</h2>";
        } elseif (!$cognome) {
            echo "<h2>Compilare tutti i campi</h2>";
        } elseif (!$birthday) {
            echo "<h2>Compilare tutti i campi</h2>";
        } elseif (!$birthplace) {
            echo "<h2>Compilare tutti i campi</h2>";
        } elseif (!$gender) {
            echo "<h2>Compilare tutti i campi</h2>";
        } elseif (!$password) {
            echo "<h2>Inserire una password</h2>";
     } else {
        echo "<h2>Grazie $username, la tua username è valida</h2>";
}
