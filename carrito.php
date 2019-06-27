<?php

$mensaje="";

session_start();

if(isset($_POST['btnAdd'])){
	switch ($_POST['btnAdd']) {
		case 'Add':
			if(is_numeric( openssl_decrypt($_POST['precio'], COD, KEY))){
				$PRECIO=openssl_decrypt($_POST['precio'], COD, KEY);
				$mensaje="OK PRECIO correcto" . $PRECIO;
			}else{
				$mensaje="upss PRECIO incorrecto" ;
				break;
			}

			if(is_string( openssl_decrypt($_POST['nombre'], COD, KEY))){
				$NOMBRE=openssl_decrypt($_POST['nombre'], COD, KEY);
				$mensaje="OK NOMBRE correcto" . $NOMBRE;
			}else{
				$mensaje="upss NOMBRE incorrecto" ;
				break;
			}
/*
			if(is_string( openssl_decrypt($_POST['descripcion'], COD, KEY))){
				$DESCRIPCION=openssl_decrypt($_POST['descripcion'], COD, KEY);
				$mensaje="OK NOMBRE correcto" . $DESCRIPCION;
			}else{
				$mensaje="upss NOMBRE incorrecto" ;
				break;
			}
*/
			if(is_string( openssl_decrypt($_POST['id'], COD, KEY))){
				$ID=openssl_decrypt($_POST['id'], COD, KEY);
				$mensaje="OK ID correcto" . $ID;
			}else{
				$mensaje="upss ID incorrecto" ;
				break;
			}

			if(is_numeric( openssl_decrypt($_POST['cantidad'], COD, KEY))){
				$CANTIDAD=openssl_decrypt($_POST['cantidad'], COD, KEY);
				$mensaje="OK cantidad correcto" . $CANTIDAD;
			}else{
				$mensaje="upss cantidad incorrecto" ;
				break;
			}

			if(!isset($_SESSION['CARRITO'])){
				$producto=array(
					'PRECIO'=>$PRECIO,
					'NOMBRE'=>$NOMBRE,
					//'DESCRIPCION'=>$DESCRIPCION,
					'ID'=>$ID,
					'CANTIDAD'=>$CANTIDAD
				);
				$_SESSION['CARRITO'][0]=$producto;
				$mensaje= "Producto agregado al Carrito";

			}else{

				$idProducto=array_column($_SESSION['CARRITO'],"ID");
				if(in_array($ID, $idProducto)){
				//	echo "<script> alert('El producto ya ha sido seleccionado');</script>";
				}else{
				$NumberProductos=count($_SESSION['CARRITO']);
				$producto=array(
					'PRECIO'=>$PRECIO,
					'NOMBRE'=>$NOMBRE,
					//'DESCRIPCION'=>$DESCRIPCION,
					'ID'=>$ID,
					'CANTIDAD'=>$CANTIDAD
				);
				$_SESSION['CARRITO'][$NumberProductos]=$producto;
			}
		}
			//$mensaje= print_r($_SESSION,true);

			//$mensaje= "Producto agregado al Carrito";

			
			break;

			case 'Delete':
			if(is_string( openssl_decrypt($_POST['id'], COD, KEY))){
				$ID=openssl_decrypt($_POST['id'], COD, KEY);
				foreach ($_SESSION['CARRITO'] as $indice => $producto) {
					if($producto['ID']==$ID){
						unset($_SESSION['CARRITO'] [$indice]);
					//	echo "<script> alert ('Elemento borrado')</script>";
					}
					# code...
				}
			}else{
				$mensaje="upss ID incorrecto" ;
				break;
			}

		}
}
?>
