<?php
session_start();
$db_username = 'root';
$db_password = 'n0m3l0';
$conn = new PDO( 'mysql:host=localhost:3308;dbname=forum', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
}

?>