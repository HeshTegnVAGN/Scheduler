<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/scheduler/');
define('PATH', 'https://imdibil.ru/scheduler/');

include 'config/config.php';
include 'controller/controller.php';