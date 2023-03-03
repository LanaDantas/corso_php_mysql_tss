<?php
require "./form_in_php/class/validator/Validable.php";
require "./form_in_php/class/validator/ValidateDate.php";

$testCases = [
[
    'input'=>'20/04/1975',
    'expected'=>'20/04/1975'
],
[
    'input'=>'20/04/1975',
    'expected'=>'20/04/1975'
],
[
    'input'=>'33/04/1975',
    'expected'=>false
],
[
    'input'=>'20/04/1975',
    'expected'=>'20/04/1975'
],
[
    'input'=>'18/33/1975',
    'expected'=>false
],
[
    'input'=>'dd/04/1975',
    'expected'=>false
],
[
    'input'=>'',
    'expected'=>false
]

];

foreach($date as $key => $test) {
    $input = $test['input'];
    $expected = $test['expected'];
    $c = new ValidateDate();
    if($c->isValid($input) != $expected) {
        echo "\ntest numero $key non superato\n";
        var_dump($expected);
        echo "\nnon ha trovato\n";
        var_dump($c->isValid($input));
    }
}

?>