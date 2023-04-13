<?php
include"form_in_php\form_in_php/config.php";

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
        $regione_id = $provincia->regione;
        $nome_provincia = addslashes($provincia->nome);
        $sigla_provincia = addslashes($provincia->sigla);

        $regione_id = $conn->query("SELECT id_regione FROM regione WHERE nome =\"$regione_id\"")->fetchColumn();
        
      // $conn->query(("SELECT id_regione FROM regione WHERE nome =\"$regione\"")->get_result()->fetch_all());

        $sql = "INSERT INTO provincia (nome,sigla,id_regione) VALUES('$nome_provincia','$sigla_provincia','$regione_id');";
        echo $sql ."\n";
        $conn->query($sql);
    }
} catch (\Throwable $th) {
    throw $th;
}
