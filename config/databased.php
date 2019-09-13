<?php

ob_start();
session_start();

// db properties
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'product');

// make a connection to mysql here
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
/*
$con = mysqli_select_db (DB_DATABASE);
if(!$conn){
    die( "Sorry! There seems to be a problem connecting to our database.");
}
*/




?>

