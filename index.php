<?php
include 'global/conect.php';
include 'carrito.php';
include 'files/header.php';


?>
  <?php if($mensaje!='') { ;?> 
    <div class="alert alert-success">
      <?php echo $mensaje; ?>
      Pantalla de mensaje... <a href="#" class="badge badge-success">Ver Carrito</a>
    </div>
  <?php } ?>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

    <h1>Catalogo de productos</h1>

  

 <?php 
      $res=$conections->prepare("SELECT * FROM productos_old");
      $res->execute();

      $lista=$res->fetchAll(PDO::FETCH_ASSOC);

  ?>
<div class="mdl-grid" style="margin:auto;">
    <?php 
      foreach($lista as $producto){ ?>

<div class="mdl-grid" style="margin:auto;">
     
<div class="demo-card-square mdl-card mdl-shadow--2dp" style="margin:auto; margin-bottom: 40px;" >
  <div id="<?php echo $product['ID']; ?>" class="mdl-card__title mdl-card--expand" style="background: url(../images/<?php echo $producto['IMAGEN']; ?>) bottom right 15% no-repeat rgb(255,152,0);">
    <h2 class="mdl-card__title-text"><?php echo $producto['NOMBRE']; ?></h2>
  </div>
  <div class="mdl-card__supporting-text">PRECIO:
    <?php echo $producto['PRECIO']; ?>
  </div>
  <div style="z-index: 9999" class="mdl-tooltip mdl-tooltip--large" data-mdl-for="<?php echo $product['ID']; ?>">
  <?php echo $producto['DESCRIPCION']; ?>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <form action="" method="post">
      <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
      <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['NOMBRE'], COD, KEY); ?>" >
      <input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['PRECIO'], COD, KEY); ?>">
      <input type="text" name="descripcion" id="descripcion" value="<?php echo openssl_encrypt($product['DESCRIPCION'], COD, KEY); ?>">
      <input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
      <button class='show-modal mdl-button mdl-js-button mdl-button--raised  mdl-button--accent' name="btnAdd" value="Add" type="submit">Agregar</button>    
    </form>
  </div>
</div>


</div>
   <?php 
    }
    ?>
</div>




    <div>
  </main>


<?php
include 'files/footer.php';
?>

