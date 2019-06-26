<!DOCTYPE html>
<?php

session_start();

$lista=$_SESSION['lista'];

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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">AGÜITA DE COCO</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Categorías</span>
    <nav class="mdl-navigation">
    	<?php 
		$num=0;
		foreach ($lista as $reg) {

			if($num==3){
				echo "";
				$num=1;

			}else{

				$num++;

			}

		?>
      <a class="mdl-navigation__link" href=""><?php echo $reg[0];?></a>
      <?php
		}
		?>

    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

<h1>Catalogo de productos</h1>

<div class="mdl-grid" style="margin:auto;">
<?php 
		$num=0;
		foreach ($lista as $reg) {

			if($num==3){
				echo "";
				$num=1;

			}else{

				$num++;

			}

?>
<div class="demo-card-square mdl-card mdl-shadow--2dp" style="margin:auto; margin-bottom: 40px;">
  <div class="mdl-card__title mdl-card--expand" style="background: url(../images/<?php echo $reg[4];?>) bottom right 15% no-repeat rgb(255,152,0);">
    <h2 class="mdl-card__title-text"><?php echo $reg[2];?></h2>
  </div>
  <div class="mdl-card__supporting-text">
    <?php echo $reg[3];?>
  </div>
  <div class="mdl-card__actions mdl-card--border">
  	
	<button class='mdl-button mdl-js-button mdl-button--raised  mdl-button--accent' type='button' onclick='send("<?php echo $reg[1]; ?>")'>Agregar</button>
	
  </div>
</div>
		 <?php
		}
		 ?>

</div>
<?php echo $reg[1];?>
    <div>
  </main>
</div>
		
<script>
	function send(c){
		location.href="detail.php?id="+c;
	}
</script>
</body>
</html>


