<?php


use models\DB;
use models\TaskService;

require ROOT.'models/TaskService.php';

require ROOT.'models/User.php';

require ROOT.'models/Task.php';

$uri = explode('/',$_SERVER['REQUEST_URI']);

$page = $uri[2];


$db = new DB();

$task = new TaskService();

$tasks = $task->get(1);


include ROOT . 'views/inc/header.php';



//if(!$_SESSION['user']['id'] and !in_array($page, ['login', 'signup']))
//{
//	header('Location: /scheduler/login');
//}


//include ROOT.'views/'.$page.'.php';
include ROOT.'views/index.php';
include ROOT . '/views/inc/footer.php';
