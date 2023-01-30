
<?php
require '../../../config/config.php';
session_start();
$id = $_SESSION['user'];

$db = new \models\DB();

$res = $db->conn->query("UPDATE user_settings set picture = '' where id = '$id'");

echo 'a';