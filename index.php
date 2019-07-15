<?php
/**
* Title: Simple task manager 
* Author: José Camacho
* Nickname: sircoko
* Date: 07/14/2019
* Description: Script for job application. 
**/
	require_once 'application/system/Routes.php';

	function __autoload($class_name){
		if(file_exists('application/classes/'.$class_name.'.php')){
			require_once 'application/classes/'.$class_name.'.php';
		} else if (file_exists('application/controller/'.$class_name.'.php')){
			require_once 'application/controller/'.$class_name.'.php';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task Manager</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>