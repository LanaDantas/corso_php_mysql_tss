<<?php
 use crud\UserCRUD;
 use models\User;

include "config.php";
include "form_in_php/test/test_autoload.php";

(new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("TRUNCATE TABLE user;");
$crud = new UserCRUD();
$user = new User();

$user->first_name = "Mario";
$user->last_name = "Rossi";
$user->birthday = "2017-01-01";
$user->birth_city = "Torino";
$user->id_regione = "9";
$user->id_provincia = "15";
$user->gender = "M";
$user->username = "mariorossi@email.com";
$user->password = md5('Password');

$result = $crud->read();
if ($result == false) {
    echo "\ndatabase iniziale vuoto\n";
}

$crud->create($user);

$result = $crud->read(1);
if (class_exists(User::class) && get_class($result) == User::class) {
    echo "test superato";
}
//print_r($result);

$result = $crud->read(2);
if ($result === false) {
    echo "\nutente non esistente\n";
}
//print_r($result);

$result = $crud->read();
if (is_array($result) && count($result) === 1) {
    echo "\nricerca di tutti gli utenti\n";
}

// $crud->delete(1);
// $result = $crud->read(1);
// if($result === false) {
//     echo "\nutente con id 1 è stato eliminato";
// }






// if(count($result) == 1) {
//     echo "test utente inserito";
// }

// //print_r($result);

// try {
//     $crud->create($user);
// } catch (\Throwable $th) {
//     if($th->getCode() == "23000")
//     echo "test superato";
// }
