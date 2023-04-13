<?php
include "./form_in_php/config.php";

function load_stati() { 
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    try { 
        $conn = new PDO($dsn,DB_USER,DB_PASSWORD);
        $select_regioni =  $conn->query("SELECT * from regione")->fetchAll();
        
        foreach($select_regioni as $row=>$regione) {
            echo "<option value=\"".$regione['id_regione']."\">".$regione['nome']."</option>\n"; 
        }
        
    } catch (\Throwable $th) {
        throw $th;
    }
}

load_stati();

?>