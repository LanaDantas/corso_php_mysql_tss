<?php

function replace_tasks( )
{
    (new PDO(DB_DSN,DB_USER,DB_PASSWORD))->query("INSERT INTO `task` (`task_id`, `user_id`, `name`, `due_date`, `done`) VALUES 
    (1, 1, 'Comprare latte', '2023-04-24', false),
    (2, 2, 'Comprare il pane', '2023-04-28', true),
    (3, 3, 'Andare in baca', '2023-04-18', false)
");
}