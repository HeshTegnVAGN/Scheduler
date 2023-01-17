<?php

use models\DB;
use models\Task;
use models\User;

require '../../../config/config.php';
require '../../../models/Task.php';
require '../../../models/User.php';

$task = new Task();
$task->get($_POST['id']);

$task->title = $_POST['edit_title'];
$task->responsibile = new User($_POST['edit_responsible']);
$task->priority = $_POST['edit_priority'];
$task->text = $_POST['edit_descr'] ?: ($_POST['alternate_decr'] ?: '');
$task->save();
http_response_code(200);
