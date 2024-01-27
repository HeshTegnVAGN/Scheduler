<?php

use models\DB;
use models\Task;
ini_set('display_errors', true);
session_start();
require '../../../config/config.php';
require '../../../models/TaskModel.php';

require '../../../models/Task.php';
require '../../../models/SubTaskModel.php';
require '../../../models/User.php';
require '../../../models/mail.php';
require '../../../../vendor/autoload.php';
//$_POST =
//[
//	'TaskTitle' => 'test',
//	'responsible' => 3,
//    'descr' => '<p>setsetsetset</p>',
//	'priority' => 70
//];


function dd($arr)
{
    echo '<pre>';
    print_r($arr);
    echo  '</pre>';
}
//
//dd($_POST);
//die();

$task = new \models\SubTaskModel();

$task = $task->add($_POST['title'], $_POST['task_id']);
echo $task;

