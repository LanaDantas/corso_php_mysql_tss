<?php

use PHPUnit\Framework\TestCase;

require_once "form_in_php/config.php";
require_once "./tests/HTTPClient.php";
require_once "./tests/replace_users.php";

class UserApiGetTest extends TestCase {

    public function test_get_user_api() {
    (new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("TRUNCATE TABLE user;");
    replace_users();
    
        $response = get("http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/users.php");
        fwrite(STDERR, print_r($response, TRUE));
        $this->assertJson($response);
    }
}
