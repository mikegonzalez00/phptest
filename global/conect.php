<?php


include 'config.php';



		$server="mysql:dbname=" . BD . ";host=" . SERVIDOR;

		try{

			$conections= new PDO($server,USUARIO,PASSWORD);

			$conections->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$conections->exec("SET CHARACTER SET utf8");	



		}catch(PDOException $e){

			die("Error" . $e->getMessage());

			echo "<script>alert('ERROR')</script>";

		}



?>