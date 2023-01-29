<?php
require '../../../config/config.php';


$db = new \models\DB();

$id = $_POST['id'];

$res = $db->conn->query("SELECT user_admissions.*, users.name from user_admissions join users on user_to = users.id where id = '$id'");

echo json_encode($res->fetch_assoc(), 1);