<?php


require '../config/config.php';
require '../models/User.php';


$bd = new \models\DB();
$pw = md5($_POST['password']);
$res = $bd->conn->query("SELECT * from users where email = '{$_POST['email']}'");
$user = $res->fetch_assoc();
if($user['password'] == $pw)
{
	session_start();

	$_SESSION['user'] = $user['id'];

	header("Location: https://imdibil.ru/scheduler");
}

