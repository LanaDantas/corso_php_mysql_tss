<?php

use crud\TaskCRUD;
use models\Task;

include "../../config.php";
include "../autoload.php";


$crud = new TaskCRUD;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $user_id = filter_input(INPUT_GET, 'user_id', FILTER_VALIDATE_INT);
        if (!is_null($user_id)) {
            echo json_encode($crud->read($user_id));
        } else {
            $tasks = $crud->read();
            echo json_encode($tasks);
        }

        break;

    case 'DELETE':
        $task_id = filter_input(INPUT_GET, 'task_id');
        if (!is_null($task_id)) {
            $rows = $crud->delete($task_id);
            if ($rows == 1) {
                http_response_code(204);
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

            echo json_encode($response,JSON_PRETTY_PRINT);
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
            echo json_encode($response,JSON_PRETTY_PRINT);
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
            echo json_encode($response,JSON_PRETTY_PRINT);
        } else {
            $tasks = $crud->read();
            echo json_encode($tasks);
        }

        break;

    default:
        # code...
        break;
}
