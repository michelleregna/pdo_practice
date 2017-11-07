<?php 

$dsn = 'mysql:host=sql1.njit.edu;dbname=mcr35';
$username = 'mcr35';
$pw = 'diehard53';

try {
	$db =new PDO($dsn, $username, $pw);
	echo 'Connected Successfully';
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage() . '</br>';

}


?>