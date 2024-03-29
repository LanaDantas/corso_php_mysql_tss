<?php

namespace models;

class Task {

    public $task_id;
    public $user_id;
	public $name;
	public $due_date;
	public bool $done;

    public static function arrayTask(array $class_array) {
        $task = new Task();
        foreach ($class_array as $class_attribute => $value_of_class_attribute) {
            $task->$class_attribute = $value_of_class_attribute;
        }
        return $task;
    }
}
