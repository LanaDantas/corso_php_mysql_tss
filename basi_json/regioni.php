<?php
include "./config.php";


function load_stati() { 
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    try { 
        $conn = new PDO($dsn,DB_USER,DB_PASSWORD);

        $select_regioni =  $conn->query("SELECT nome from regione")->fetchAll();
        while ($row = ($select_regioni)) {
            echo "<option value=\"".$row['nome']."\">".$row['nome']."</option>\n"; 
        }
        
    } catch (\Throwable $th) {
        throw $th;
    }
}

load_stati();

?>