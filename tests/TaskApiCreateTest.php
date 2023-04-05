<?php

use PHPUnit\Framework\TestCase;

// require_once( ".tests/HTTPClient.php");
require_once "config.php";
require_once "form_in_php/test/test_autoload.php";

class TaskApiCreateTest extends TestCase {

    public function test_create_task_api() {
        (new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("TRUNCATE TABLE task;");

        $payload = [
            "user_id" => 1,
            "name" => "Comprare latte",
            "due_date" => "2023-04-24",
            "done" => false
        ];

        $response = $this->post("http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/tasks.php", $payload);
        fwrite(STDERR, print_r($response, TRUE));

        // $this->assertNull($response);

        $this->assertJson($response);
    }

    public function post(string $url, array $body)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "Content-Type: application/json",
                "User-Agent: Thunder Client (https://www.thunderclient.com)"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
