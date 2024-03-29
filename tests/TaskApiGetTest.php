<?php

use PHPUnit\Framework\TestCase;

require_once "form_in_php/config.php";
require_once "./tests/HTTPClient.php";
require_once "./tests/replace_tasks.php";

class TaskApiGetTest extends TestCase {

    public function test_get_task_api() {
        (new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("TRUNCATE TABLE task;");
        replace_tasks();

        $response = get("http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/tasks.php");
        fwrite(STDERR, print_r($response, TRUE));

        $this->assertJson($response);
    }
}
