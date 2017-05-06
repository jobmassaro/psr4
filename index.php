<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use Models\User;
use ActiveRecord\Database;

require_once('app/start.php');


$user = new User();
$d = new Database();


