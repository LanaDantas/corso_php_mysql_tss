<?php
/*
$nome = "Mario";
echo "\tciao $nome \n";
echo 'ciao $nome \n';
*/

# Index Array
//$colori = array() uguale a:
$colori = ["red","green","blu"];

//echo "\n".$colori[2]."\n";

# Associative Array (HashMap)
$persona = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "email" => "mario.rossi@email.com"
];

//print_r($persona);
//var_dump($persona);

//echo $persona['email'];

$classe = array(
    [
        "email" => "mario.rossi@email.com",
        "nome" => "Mario",
        "cognome" => "Rossi"
    ],
    [
        "email" => "giovanni.verdi@email.com",
        "nome" => "Giovanni",
        "cognome" => "Verdi"
    ]
);

//print_r($classe[0]["nome"]);

# Imperativo
echo "for Loop \n";
for ($i=0; $i < count($classe) ; $i++) { 

    $allievo = $classe[$i];
    echo $allievo['nome']."\n";
}

echo "\nforeach Loop \n";
echo "-----------------\n";
foreach ($classe as $i => $allievo) {
    echo ($i+1) . ") "  . $allievo['nome'];
    echo "\n";
}

# dichiarativo / funzionale
echo "\nmap di un array\n";
echo "-----------------\n";
function stampaNome($allievo) {
    echo $allievo['nome'];
    echo "\n";
}

array_map('stampaNome',$classe);