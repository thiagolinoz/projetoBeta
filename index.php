<?php
	include_once('./application/helper/helper.php');
	
	if(!isset($_GET['view'])){
		$view = 'index';
	}else{
		$view = $_GET['view'];
	}

	new Controller($view);
?>