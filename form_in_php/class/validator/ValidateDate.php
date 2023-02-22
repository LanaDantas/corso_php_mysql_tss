<?php

class ValidateDate {
    public function isValid($value) {

        $sanitize = trim(strip_tags($value));

        $dt = DateTime::createFromFormat('d/m/Y', $sanitize);
        echo $value."\n";
        // echo $dt->format('d/m/Y') . " === " . $sanitize ."\n";
        // print_r($dt && $dt->format('d/m/Y')===$sanitize);
        echo "\n----------------------------\n"; // die();

        if($dt && $dt->format('d/m/Y') === $sanitize) {
            return $dt->format('d/m/Y');
        } else {
            return false;
        };
    }

    public function message() {
        return 'data non valida';
    }
}



?>