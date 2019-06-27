<?php

include '../carrito.php';
include '../DAO/model_products.php';


$id=$_REQUEST['id'];

$objMethod=new products_model();
$lista=$objMethod->get_products_id($id);

$categoria=$lista[0];

foreach ($lista as $row){
$id=$row[1];

$nombre=$row[2];

$descripcion=$row[3];

$imagen=$row[4];

$precio=$row[5];
}

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

<form>
<table>
	<tr>
	<th rowspan="4"><img src="../imagenes/<?php echo $imagen ; ?>.jpg" width="200" height="200"></th>
	<th><h4><?php echo $nombre; ?></h4> </th>
	</tr>
	<tr>
	<td><p><?php echo $descripcion; ?></p> </td>
	</tr>
	<tr>
	<th><h3><?php echo $precio; ?></h3> </th>
	</tr>
	<tr>
	<td aling="right">Ingrese cantidad: <input type="number" min="1" max="100" value="1" name="tctCan"> </td> 
	</tr>
	<tr>
		<th align="right" colspan="2">
		<button class='mdl-button mdl-js-button mdl-button--raised  mdl-button--accent' type='button'>Cerrar</button>
		<form action="" method="post">
			<input type="text" name="id" id="id" value="<?php echo openssl_encrypt($id, COD, KEY); ?>">
			<input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($nombre, COD, KEY); ?>">
			<input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($precio, COD, KEY); ?>">
			<input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY);; ?>">
		</form>
		<button class='mdl-button mdl-js-button mdl-button--raised  mdl-button--accent' name="btnAdd" value="Add" type='submit'>Agregar a Carrito</button><?php echo $mensaje; ?>

		</th>
	</tr>

</table>
</form>

</body>
</html>


