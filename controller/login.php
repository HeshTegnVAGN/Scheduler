<?php


require '../config/config.php';
require '../models/User.php';
session_start();


$bd = new \models\DB();
$pw = md5($_POST['password']);
$res = $bd->conn->query("SELECT * from users where email = '{$_POST['email']}'");
if($res->num_rows == 0)
{
    $_SESSION['error'] = 'Полльзователь с таким логинои не найден';
    header('Location: https://imdibil.ru/scheduler/login');
}
$user = $res->fetch_assoc();
if($user['password'] == $pw)
{

	$_SESSION['user'] = $user['id'];

	header("Location: https://imdibil.ru/scheduler");
} else
{
    $_SESSION['error'] = 'Неверный пароль';
    header('Location: https://imdibil.ru/scheduler/login');
}

