<?php
include"config.php";

$province_string = file_get_contents('province.json');
$province_object = json_decode($province_string);


$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;

