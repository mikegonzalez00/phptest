<?php

class conect{


	public static function conection(){


		try{

			$conection= new PDO('mysql:host=localhost; dbname=prod2coco', 'root', '');

			$conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$conection->exec("SET CHARACTER SET utf8");	


		}catch(Exception $e){

			die("Error" . $e->getMessage());

			echo "Linea del error" . $e->getLine();

		}

		return $conection;

	}
}

?>