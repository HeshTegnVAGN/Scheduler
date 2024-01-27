<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
use models\DB;
use models\Task;
use models\User;

require '../../../config/config.php';
require '../../../models/TaskModel.php';

require '../../../models/Task.php';
require '../../../models/User.php';


function dd($arr)
{
    echo '<pre>';
    print_r($arr);
    echo  '</pre>';
}




$task = new Task();
$task->get($_POST['id']);

$task->task->title = $_POST['edit_title'];
$task->task->responsibile = $_POST['edit_responsible'];
$task->task->priority = $_POST['edit_priority'];
$task->task->text = $_POST['edit_descr'] ?: ($_POST['alternate_decr'] ?: '');
$task->save();

$task->deleteSubTasks();
foreach ($_POST['subtask'] as $st)
{
    $task->addSubtask($st);
}



http_response_code(200);
