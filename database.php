<?php
$server = 'adminmysql.mysql.database.azure.com';
$username = 'adminadmin';
$password = '@abc123@';
$database = 'adminmysql';

try{
	$con=mysqli_init(); 
	mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "adminmysql.mysql.database.azure.com", "adminadmin@adminmysql", {your_password}, {your_database}, 3306);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
