<?php
include"config.php";

$province_string = file_get_contents('province.json');
$province_object = json_decode($province_string);

/*
$province_array = array_map(function($provincia){
    return $provincia->nome;
},$province_object);

$province_unique = array_unique($province_array);
sort($province_unique);
*/

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;

try {
    $conn = new PDO($dsn,DB_USER,DB_PASSWORD);
    $conn->query('TRUNCATE TABLE provincia');

    foreach($province_object as $provincia) {
        $nome = $provincia->nome;
        $sigla = $provincia->sigla;
        $nome_provincia = addslashes($nome);
        $sigla_provincia = addslashes($sigla);
        $sql = "INSERT INTO provincia (nome,sigla) VALUES('$nome_provincia','$sigla_provincia');";
        echo $sql ."\n";
        $conn->query($sql);
    }
} catch (\Throwable $th) {
    throw $th;
}
