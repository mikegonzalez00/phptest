
<?php
include 'global/config.php';
include 'carrito.php';
include 'files/header.php';

?>
<style>
.text-thead{    font-size: 16px !important;
    text-align: center !important;
    background:#fb9803 !important;
	color: #fff !important}
.text-tbody{    font-size: 14px!important;
    text-align: center !important;}
</style>

    <h1>Contenido de carrito</h1>
    <hr>
    <br>
    <p>Productos en el carrito</p>
    <br>
    <table class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp" style="width: 90%;">
	  <thead>
	    <tr>
	     <th class="text-thead">Nombre</th>
	      <th class="text-thead">Cantidad</th>
	      <th class="text-thead">Precio</th>
	      <th class="text-thead">Total</th>
	      <th class="text-thead">--</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php  $total=0; ?>
	  	<?php  foreach($_SESSION['CARRITO'] as $_indice=>$producto) { ?>
	    <tr>
	     <th class="text-tbody"><?php  echo $producto['NOMBRE'] ?></th>
	      <th class="text-tbody"><?php  echo $producto['CANTIDAD'] ?></th>
	      <th class="text-tbody"><?php  echo $producto['PRECIO'] ?></th>
	      <th class="text-tbody"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD']); ?></th>
	      <th class="text-tbody">
	      	<form action="" method="post"> 
	      		<input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
	      		<input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
	      		<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['NOMBRE'], COD, KEY); ?>" >
      			<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['PRECIO'], COD, KEY); ?>">
      			
	      	<button type="submit" name="btnAdd" value="Delete" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
				  <i class="material-icons">delete</i>
				</button>
			</form>
			</th>
	    </tr>
	    <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
		<?php } ?>
	    <tr>
	      <th colspan="3" aling="right" style="font-size: 16px !important; color: #fb9803;" class="">TOTAL</th>
	      <th class="text-tbody"><?php echo number_format($total); ?></th>
	      <th class="text-tbody"></th>
	    </tr>
	  </tbody>
	</table>

    


<?php
include 'files/footer.php';
?>