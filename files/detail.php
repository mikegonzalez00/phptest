<?php
include 'global/conect.php';
include 'carrito.php';
include 'files/header.php';

?>

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

<?php
include 'files/footer.php';
?>



