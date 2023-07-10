<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/');
define('PATH', 'https://scheduler.imdibil.ru/');

include 'config/config.php';
include 'controller/controller.php';