<?php


include '../DAO/model_products.php';

$id=$_REQUEST['id'];

$objMethod=new products_model();
$lista=$objMethod->get_products_id($id);

$categoria=$lista[0];

$id=$lista[1];

$nombre=$lista[2];

$descripcion=$lista[3];

$imagen=$lista[4];

$precio=$lista[5];


?>
<html>

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Index</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-amber.min.css" />	
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<style>
		.demo-card-square.mdl-card {
		  width: 320px;
		  height: 320px;
		}
		.demo-card-square > .mdl-card__title {
		  color: #fff;
		}
	</style>
</head>

<body>

</body>
</html>


