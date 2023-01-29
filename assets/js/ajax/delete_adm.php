<?php

use models\DB;

require '../../../config/config.php';
$id = $_GET['id'];

$db = new DB();

$db->conn->query("DELETE from user_admissions where id = '$id'");