<?php

// $file = scandir("./form_in_php/class/validator");
// print_r($file);
require "./form_in_php/class/validator/ValidateMail.php";

$emails = [
    'a','  ','a@',
];


$v = new ValidateMail();

// 
foreach ($emails as $index => $email) {
    if ($v->isValid($email) == false) {
        echo "test superato per [$email]\n";
    } else {
        echo "test numero [$index] non superato per [$email]";
    };

} 

?>