<?php
require_once('./config/Autoload.php');
$autoload = new Autoload();
$controller = isset($_GET['controller']) ? $_GET['controller']: 'Login';
$action = isset($_GET['action']) && $_GET['action'] != '' ? $_GET['action']: 'Index';
$id = isset($_GET['id']) && $_GET['id'] != '' ? $_GET['id']: '';

$router = new Router($controller,$action,$id);