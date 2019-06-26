<?php

$mensaje="";

if(isset($_POST['btnAdd'])){
	switch ($_POST['btnAdd']) {
		case 'Add':
			if(is_string(openssl_decrypt($_POST['id'], COD, KEY))){
				$ID=openssl_decrypt($_POST['id'], COD, KEY);
				$mensaje="OK ID correcto" . $ID;
			}else{
				$mensaje="upss id incorrecto" . $ID;
			}
			break;
	}
}

?>
