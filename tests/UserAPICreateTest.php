<?php

use PHPUnit\Framework\TestCase;

require_once "form_in_php/config.php";
require_once "./tests/HTTPClient.php";

class UserApiCreateTest extends TestCase {

    public function test_create_user_api() {
    (new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("TRUNCATE TABLE user;");

        $payload = [
            "user_id" => 1,
            "first_name" => "Giuse",
            "last_name" => "Bianchi",
            "birthday" => "2017-03-17",
            "birth_city" => "Como",
            "regione_id" => 16,
            "provincia_id" => 15,
            "gender" => "M",
            "username" => "b@c",
            "password" => "Password",
        ];

        $response = post("http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/users.php", $payload);
        fwrite(STDERR, print_r($response, TRUE));

        // $this->assertNull($response);

        $this->assertJson($response);
    }
}

// nodemon -x ./vendor/bin/phpunit tests