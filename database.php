<?php
$server = 'adminmysql.mysql.database.azure.com';
$username = 'adminadmin';
$password = '@abc123@';
$database = 'adminmysql';

try{
	$con=mysqli_init(); 
	mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "adminmysql.mysql.database.azure.com", "adminadmin@adminmysql", "@abc123@", "DEMO", 3306);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
