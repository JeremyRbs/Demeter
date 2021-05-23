<?php 
	session_start();

	session_destroy();
	header('Location: ../Public/html/panier.php');
	
?>