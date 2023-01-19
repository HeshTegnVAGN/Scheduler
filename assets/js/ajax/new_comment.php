<?php

session_start();
use models\DB;
use models\Task;

require '../../../config/config.php';
require '../../../models/Task.php';
require '../../../models/User.php';
require '../../../models/Comment.php';

require '../../../../vendor/autoload.php';
//$_POST =
//[
//	'TaskTitle' => 'test',
//	'responsible' => 1,
//    'descr' => '<p>setsetsetset</p>',
//	'priority' => 70
//];
//$_POST['email'] = 'kochura2017@yandex.ru';
return Comment::add($_POST['text'], $_SESSION['user'], $_POST['task']);
