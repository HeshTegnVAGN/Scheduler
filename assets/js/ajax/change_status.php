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
$task = new Task();
$task->get($_POST['id']);
$task->status = $_POST['status'];
$task->save();
echo 'succss';
