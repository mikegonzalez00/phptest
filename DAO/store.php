<?php

session_start();

include './model_products.php';

$op=$_REQUEST['op'];

switch ($op) {
	case 1:

	unset($_SESSION['lista']);

	$objMethod=new products_model();
	$lista=$objMethod->get_products();
	$_SESSION['lista']=$lista;
	header("Location: ../VISTA/catalog.php");
		break;
	
	case 2;
		break;
}


?>