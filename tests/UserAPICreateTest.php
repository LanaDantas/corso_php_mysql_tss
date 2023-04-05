<?php

use PHPUnit\Framework\TestCase;

class UserApiCreateTest extends TestCase {

    public function test_create_user_api()
    {
        $payload = [
            "first_name" => "Giuse",
            "last_name" => "Bianchi",
            "birthday" => "2017-03-17",
            "birth_city" => "Como",
            "regione_id" => 16,
            "provincia_id" => 15,
            "gender" => "M",
            "username" => "pluto@it",
            "password" => "Password",
        ];

        $response = $this->post("http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/users.php", $payload);
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
