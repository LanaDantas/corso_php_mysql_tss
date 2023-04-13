<?php

use crud\TaskCRUD;
use models\Task;

include "../../form_in_php/config.php";
include "../autoload.php";

$crud = new TaskCRUD;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $task_id = filter_input(INPUT_GET, 'task_id');
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
            $tasks = $crud->read();
            $response = [
                'data' => $tasks,
                'status' => 200
            ]; 
            echo json_encode($response);
        }

        break;

    case 'DELETE':
        $task_id = filter_input(INPUT_GET, 'task_id');
        if (!is_null($task_id)) {
            $rows = $crud->delete($task_id);
            if ($rows == 1) {
                http_response_code(200);

                $response =
                    [
                        'data' => $task_id,
                        'status' => 200,
                    ];
            }
            if ($rows == 0) {

                http_response_code(404);

                $response = [
                    'errors' => [
                        [
                            'status' => 404,
                            'title' => "Task non trovata",
                            'details' => $task_id
                        ]
                    ]
                ];
            }

            echo json_encode($response, JSON_PRETTY_PRINT);
        }

        break;

    case 'POST':
        $input = file_get_contents('php://input');
        $request = json_decode($input, true);
        $task = Task::arrayTask($request);

        try {
            $last_id = $crud->create($task);

            $task = (array) $task;
            $task['task_id'] = $last_id;
            $response = [
                'data' => $task,
                'status' => 201
            ];
            echo json_encode($response, JSON_PRETTY_PRINT);
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
        break;

    case 'PUT':

        $task_id = filter_input(INPUT_GET, 'task_id');
        $input = file_get_contents('php://input');
        $request = json_decode($input, true);
        $task = Task::arrayTask($request);

        if (!is_null($task_id)) {
            $rows = $crud->update($task);

            if ($rows == 1) {
                $task = (array) $task;

                $task['task_id'] = $task_id;

                $response = [
                    'data' => $task,
                    'status' => 200,
                    'details' => "Task with ID " . $task_id . " updated successfully"
                ];
            }
            if ($rows == 0) {
                http_response_code(404);
                $response = [
                    'errors' => [
                        [
                            "title" =>  "Nessuna attività trovata",
                            "detail" => $task_id
                        ]
                    ]
                ];
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        } else {
            $tasks = $crud->read();
            echo json_encode($tasks);
        }

        break;

    default:
        # code...
        break;
}
