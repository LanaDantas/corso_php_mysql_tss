<?php

use crud\UserCRUD;
use models\User;

include "../../form_in_php/config.php";
include "../autoload.php";


$crud = new UserCRUD;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $user_id = filter_input(INPUT_GET, 'user_id');
        if (!is_null($user_id)) {
            $res = $crud->read($user_id);
            if($res == false){
                $response = [
                    'errors' => [
                        [
                            'status' => 404,
                            'title' => "risorsa non trovata",
                            'details' => filter_input(INPUT_GET,'user_id')
                         ]
                    ]    
                ];  
                echo json_encode($response);
            } else {
                echo json_encode($res);
            }
        }else{
            $users = $crud->read();
            $response = [
                'data' => $users,
                'status' => 200
            ]; 
            echo json_encode($response);
        }

        break;

    case 'DELETE':

        $user_id = filter_input(INPUT_GET, 'user_id');
        if (!is_null($user_id)) {
            $rows = $crud->delete($user_id);
            if ($rows == 1) {
                http_response_code(200);

                $response = 
                        [
                            'data' => $user_id,
                            'status' => 200,
                        ];
            } if ($rows == 0) {

                http_response_code(404);

                $response = [
                    'errors' => [
                        [
                            'status' => 404,
                            'title' => "Utente non trovato",
                            'details' => $user_id
                        ]
                    ]
                ];
            }

            echo json_encode($response,JSON_PRETTY_PRINT);
        }

        break;

    case 'POST':

        $input = file_get_contents('php://input');
        $request = json_decode($input, true); // ottengo un array associativo

        $user = User::arrayToUser($request);

        try {

            $last_id = $crud->create($user);

            $user = (array) $user;
            unset($user['password']);
            $user['user_id'] = $last_id;

            $response = [
                'data' => $user,
                'status' => 202
            ];            
        } catch (\Throwable $th) {
            http_response_code(422);

            $response = [
                'errors' => [
                    [
                        'status' => 422,
                        'title' => "formato errato",
                        'details' => $th->getMessage()
                    ]
                ]
            ];
        }
        echo json_encode($response,JSON_PRETTY_PRINT);

        break;

    case 'PUT':

        $input = file_get_contents('php://input');
        $request = json_decode($input, true);
        $user = User::arrayToUser($request);
        $user_id = filter_input(INPUT_GET, 'user_id');

        if (!is_null($user_id)) {
            $rows = $crud->update($user);

            if ($rows != 0) {
                http_response_code(202);

                $user = (array) $user;
                unset($user['password']);
                unset($user['username']);
                $user['user_id'] = $user_id;
                $response = [
                    'data' => $user,
                    'status' => 202,
                ];
                echo json_encode($response,JSON_PRETTY_PRINT);
            }
            if ($rows === 0) {
                http_response_code(404);

                $response = [
                    'errore' => [
                        [
                            'status' => 404,
                            'title' => "Utente non trovato",
                            'details' => $user_id
                        ]
                    ]
                ];
                echo json_encode($response,JSON_PRETTY_PRINT);
            }
        }

        break;
        default:
        break;
}

function responseError($e)
{
 
    if($e->getCode() == 404){

        http_response_code(404);

        $response = [
            'errors' => [
                [
                    'status' => 404,
                    'title' => "risorsa non trovata",
                    'details' => filter_input(INPUT_GET,'user_id')
                 ]
            ]    
        ];
        return $response;
    }

    if($e->getCode() == 23000){

        http_response_code(422);

        $response = [
            'errors' => [
                [
                    'status' => 422,
                    'title' => "formato non corretto",
                    'details' => $e->getMessage()
                 ]
            ]    
        ];
        return $response;
    }


}