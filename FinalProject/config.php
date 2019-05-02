<?php

// Connecting to the MySQL database
$user = 'root';
$password = 'root';

$database = new PDO('mysql:host=localhost;dbname=cats.sql', $user, $password);

include 'functions.php';

session_start();

$_SESSION['catViewer'] = $viewer;

$current_url = basename($_SERVER['REQUEST_URI']);



function my_autoloader($class) {
	include 'classes/class.' . $class . '.php';
}
spl_autoload_register('my_autoloader');

?>