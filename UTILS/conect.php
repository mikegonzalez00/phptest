<?php


include 'config.php';



class conect{


	public static function conection(){

		$server="mysql:dbname=" . BD . ";host=" . SERVIDOR;

		try{

			$conection= new PDO($server,USUARIO,PASSWORD);

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