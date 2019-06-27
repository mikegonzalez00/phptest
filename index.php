<?php
include 'global/conect.php';
include 'carrito.php';
include 'files/header.php';

?>
  <?php if($mensaje!='') { ;?> 
    <!--<div class="alert alert-success">
      <?php echo $mensaje; ?>
      Pantalla de mensaje... <a href="#" class="badge badge-success">Ver Carrito</a>
    </div>-->
  <?php } ?>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
      <div class="content mdl-layout__content" style="width: 100%;background: #9f806d;">
        <a name="top"></a>
        <div class="be-together-section mdl-typography--text-center">
          <div class="logo-font slogan" style="color: #fff">Hola, bienvenido a Agüita de COCO</div>
          <div class="logo-font sub-slogan" style="color: #602d07;text-shadow: 1px 2px #fff;">Disfruta cuidando de ti.</div>
        </div>
      </div>


  <div style=" padding-top: 40px !important; padding: 2%;">
    <div class="containerCOC">
      <div class="mdl-grid">
        <div class="mdl-typography--display-1-color-contrast" style="font-weight: bold;margin-bottom: 30px;margin: auto;color: #602d08;">Catalogo de productos</div>
        <hr>
        <br>
      </div>

 <?php 
      $res=$conections->prepare("SELECT * FROM productos_old");
      $res->execute();

      $lista=$res->fetchAll(PDO::FETCH_ASSOC);

  ?>
<div class="mdl-grid" style="margin:auto; margin-bottom: 30px;">
    <?php 
      foreach($lista as $producto){ ?>

<div class="mdl-grid" style="margin:auto;">
     
<div class="demo-card-square mdl-card mdl-shadow--2dp img-contenedor" style="margin:auto; margin-bottom: 40px;" >
  <div id="<?php echo $product['ID']; ?>" class="mdl-card__title mdl-card--expand" style="background: url(images/<?php echo $producto['IMAGEN']; ?>) rgb(255,152,0);background-repeat: round;">
    <h2 class="mdl-card__title-text productname"><?php echo $producto['NOMBRE']; ?></h2>
  </div>
  <div class="mdl-card__supporting-text">PRECIO:
    <?php echo $producto['PRECIO']; ?>
  </div>
  <div style="z-index: 9999" class="mdl-tooltip mdl-tooltip--large" data-mdl-for="<?php echo $product['ID']; ?>">
  <?php echo $producto['DESCRIPCION']; ?>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <form action="" method="post">
      <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
      <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['NOMBRE'], COD, KEY); ?>" >
      <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['PRECIO'], COD, KEY); ?>">
      <input type="hidden" name="descripcion" id="descripcion" value="<?php echo openssl_encrypt($product['DESCRIPCION'], COD, KEY); ?>">
      <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
      <button class='show-modal mdl-button mdl-js-button mdl-button--raised  mdl-button--accent' name="btnAdd" value="Add" type="submit">Agregar</button>    
    </form>
  </div>
</div>


</div>
   <?php 
    }
    ?>
</div>

  </div>
  </div>

    <div>
  </main>


<?php
include 'files/footer.php';
?>

