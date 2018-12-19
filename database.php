<?php
$server = 'adminmysql.mysql.database.azure.com';
$username = 'adminadmin';
$password = '@abc123@';
$database = 'adminmysql';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
