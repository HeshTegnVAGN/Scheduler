<?php
require '../../../config/config.php';


$db = new \models\DB();

$id = $_POST['id'];

$res = $db->conn->query("SELECT user_admissions.*, users_sched.name from user_admissions join users_sched on user_to = users_sched.id where id = '$id'");

echo json_encode($res->fetch_assoc(), 1);