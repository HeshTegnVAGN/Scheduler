<?php

use models\DB;
require '../config/config.php';
session_start();

$db = new DB();

if(!$_POST['name'])
{
    header('Location: https://scheduler.imdibil.ru/profile/access');
}
$email = $_POST['name'];
$res = $db->conn->query("SELECT id from users where email = '$email'");

if($res->num_rows == 0)
{
    header('Location: https://scheduler.imdibil.ru/profile/access');
}

$id = ($res->fetch_assoc())['id'];
$from = $_SESSION['user'];
$add = $_POST['adding'] ?: 0;
$edit = $_POST['edit'] ?: 0;
$comment = $_POST['comment'] ?: 0;
$check = $db->conn->query("SELECT * from user_admissions where user_from = '$from' and user_to = '$id'");
if($check->num_rows > 0)
{
    $id_a = ($check->fetch_assoc())['id'];
    $db->conn->query("UPDATE user_admissions set `adding` = '$add', `edit` = '$edit', `comment` = '$comment' where id = '$id_a'");
    header('Location: https://scheduler.imdibil.ru/profile/access');
    die();
}

$db->conn->query("INSERT INTO `user_admissions`(`user_from`, `user_to`, `adding`, `edit`, `comment`) 
VALUES ('$from', '$id','$add','$edit','$comment')");

header('Location: https://scheduler.imdibil.ru/profile/access');