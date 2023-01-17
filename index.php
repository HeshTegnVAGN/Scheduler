<?php
session_start();
error_reporting(E_ALL);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/scheduler/');
define('PATH', 'https://imdibil.ru/scheduler/');

include 'config/config.php';
include 'controller/controller.php';