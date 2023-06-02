<?php

use models\DB;
use models\Task;
use models\TaskModel;

ini_set('display_errors', true);
require '../../../config/config.php';
require '../../../models/TaskModel.php';

require '../../../models/Task.php';
require '../../../models/User.php';
require '../../../models/mail.php';
require '../../../../vendor/autoload.php';
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
if($task->task->responsibile != $_SESSION['user'])
{
	http_response_code(505);
	throw new Exception();
}

$task->task->status = $_POST['status'];
$task->save();
if($task->task->created_by != $_SESSION['user'] and $_POST['status'] == TaskModel::ENDED)
{

    $user = new \models\User($task->task->created_by);
    $resp = new \models\User($_SESSION['user']);
    $res = $user->getAdmissions($_SESSION['user']);
    if(!$res[0]['finish_note'])
    {
        file_put_contents(__DIR__.'/0.txt', 'accedd denied ', FILE_APPEND);
        die();
    }
    try {

        sendEmail($user->email, $user->name, 'Задача пользователю '.$resp->name.' выполнена!'.PHP_EOL.'Текст: '.$task->task->text.PHP_EOL, 'Задача выполнена! (#'.$task->id.' '.$task->title);
        file_put_contents(__DIR__.'/0.txt', 'sended', FILE_APPEND);
    } catch (Exception $e)
    {
        print_r($e);
    }

}
echo 'succss';
