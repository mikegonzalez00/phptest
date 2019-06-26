<!DOCTYPE html>
<?php
include '../carrito.php';


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
        <a class="mdl-navigation__link" href="">Carito(0)</a>
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
  <div class="container">
    <div class="alert alert-success">
      Pantalla de mensaje... <?php echo $mensaje; ?> <a href="#" class="badge badge-success">Ver Carrito</a>
    </div>
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
  	
	<button data-toggle="modal" data-target="#exampleModal" class='show-modal mdl-button mdl-js-button mdl-button--raised  mdl-button--accent' type='button' onclick='send("<?php echo $reg[1]; ?>")'>Agregar</button>
	
  </div>
</div>
		 <?php
		}
		 ?>

</div>
    <div>
  </main>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar">
        ...
      </div>

    </div>
  </div>
</div>

 <script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<!--	
<script>
	function send(c){
		location.href="detail.php?id="+c;
	}
</script>
-->
<script>
  var resultado=document.getElementById("mostrar");
  function send(c){
    var xmlhttp;
    if(window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
    }else{
      xmlhttp=new ActiveXObjet("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange=function(){
      if(xmlhttp.readyState==4 && xmlhttp.status==200){
        resultado.innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","detail.php?id="+c,true);
    xmlhttp.send();

  }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


