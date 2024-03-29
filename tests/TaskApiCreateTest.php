<?php

use PHPUnit\Framework\TestCase;

require_once "form_in_php/config.php";
require_once "./tests/HTTPClient.php";
require_once "./tests/replace_tasks.php";

class TaskApiCreateTest extends TestCase {

    public function test_create_task_api() {
        (new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("TRUNCATE TABLE task;");

        $payload = [
            "user_id" => 1,
            "name" => "Comprare latte",
            "due_date" => "2023-04-24",
            "done" => false
        ];

        $response = post("http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/tasks.php", $payload);
        fwrite(STDERR, print_r($response, TRUE));

        $this->assertJson($response);
    }
}
