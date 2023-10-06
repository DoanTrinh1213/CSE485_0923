<?php
require '../app/config/config.php';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'patient';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst($controller);
$Controller = $controller . 'Controller';
$path = '../app/controllers/' . $Controller . '.php';
if (!file_exists($path)) {
  die('Request not found. Check your path');
}
include $path;
$myController = new $Controller;
if (method_exists($myController, $action)) {
  $myController->$action();
} else {
  echo "Function $action not exists in $Controller";
}

?>