<?php
use models\User;
include "form_in_php/test/test_autoload.php";


$class_array = [
    "first_name"=>"Paolo",
    "last_name"=>"Rossi",
    "birthday"=>"2020-12-20",
    "birth_city"=>"Givoletto",
    "id_regione"=>10,
    "id_provincia"=>2,
    "gender"=>"M",
    "username"=>"a@b.com",
    "password"=>"ciccio"
];

// $user = new User;

// foreach ($class_array as $class_attribute => $value_of_class_attribute) {
//     $user->$class_attribute = $value_of_class_attribute;
// }


$user = User::arrayToUser($class_array);
if(get_class($user) == User::class) {
    echo "test passato è un oggetto \n";
    print_r($user);
}