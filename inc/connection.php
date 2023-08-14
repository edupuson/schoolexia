<?php 
// Stagging
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'schoolexia');

$db = new mysqli(SERVER, USER, PASSWORD, DB) or die("Connectin failed : " . $db->error);