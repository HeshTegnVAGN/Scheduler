<?php

use models\DB;
use models\Task;

require '../../../config/config.php';
require '../../../models/Task.php';
require '../../../models/User.php';
//$_POST =
//[
//	'TaskTitle' => 'test',
//	'responsible' => 1,
//    'descr' => '<p>setsetsetset</p>',
//	'priority' => 70
//];
session_start();

$task = new Task();
$task->get($_POST['id']);
if($task->responsibile != $_SESSION['user'])
{
	http_response_code(505);
	throw new Exception();
}
$task->status = $_POST['status'];
$task->save();
echo 'succss';
