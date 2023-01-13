<?php


use models\DB;
use models\TaskService;


require ROOT.'models/TaskService.php';
require ROOT.'models/User.php';
require ROOT.'models/Task.php';
$db = new DB();
$task = new TaskService();
$tasks = $task->get(1);

include ROOT.'views/index.php';