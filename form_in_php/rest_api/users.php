<?php
use crud\UserCRUD;
use models\User;
include "../../config.php";
include "../autoload.php";


$crud = new UserCRUD;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $user_id = filter_input(INPUT_GET, 'user_id');
        if(!is_null($user_id)) {
            echo json_encode($crud->read($user_id));
        } else {
            $users = $crud->read();
            echo json_encode($users);
        }
        // ottenere l'elenco degli utenti
        # Model
        break;

    case 'DELETE' :

        $user_id = filter_input(INPUT_GET, 'user_id');
        if(!is_null($user_id)) {
            
            $rows = $crud->delete($user_id);
            if($rows == 1) {
                http_response_code(204);
                $response = [
                    'errors'=> [
                        [
                            'status' => 200,
                            'title' => "user deleted successfully",
                            'details' => $user_id
                        ]
                    ]
                ];
            } elseif($rows == 0) {

                http_response_code(404);
                $response = [
                    'errors'=> [
                        [
                            'status' => 404,
                            'title' => "user dont exists",
                            'details' => $user_id
                        ]
                    ]
                ];
            }

                echo json_encode($response);
            }
        break;

    case 'POST' :

        $input = file_get_contents('php://input');
        $request = json_decode($input,true); // ottengo un array associativo

        $user = User::arrayToUser($request);
        $crud->create($user);




        break;
    
    default:
        # code...
        break;
}