<?php
	include ("ajax_config.php");
	$id = sanitize($_POST['id']);
	$soluong = sanitize($_POST['qty']);
	$size = sanitize($_POST['size']);
	$mausac = sanitize($_POST['color']);

	addtocart($id,$size,$mausac,$soluong);

	$return['cart'] = count($_SESSION['cart']);
	echo json_encode($return);
?>   
