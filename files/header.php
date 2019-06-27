<html>

<head>
    <meta charset="UTF-8">

  <title>Index</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-amber.min.css" />	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="index.php"><span class="mdl-layout-title">AGÜITA DE COCO</span></a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="mostrar_carrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>)</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Categorías</span>
    <nav class="mdl-navigation">
       <?php 
      $res=$conections->prepare("SELECT * FROM productos_old");
      $res->execute();

      $lista=$res->fetchAll(PDO::FETCH_ASSOC);

  ?>
<?php 
      foreach($lista as $producto){ ?>

      <a class="mdl-navigation__link" href=""><?php echo $producto['CATEGORIA']; ?></a>
         <?php 
    }
    ?>
    </nav>
  </div>
  <div class="container">