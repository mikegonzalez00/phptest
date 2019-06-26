<?php

include '../UTILS/conect.php';


class products_model{

	public function get_products(){

		$conection=new conect(); 

		$cnct=$conection->conection();

		$res=$cnct->prepare("select * from productos");

		$res->execute();

		foreach($res as $row){

			$lista[]=$row;

		}

		return $lista;

	}

	public function get_products_id($id){

		$conection=new conect(); 

		$cnct=$conection->conection();
		$sql = 'select * from productos where id ="'. $id . '"';
		//echo $sql;
		$res=$cnct->prepare($sql);

		$res->execute();

		foreach($res as $row){

			$lista[]=$row;

		}

		return $lista;

	}

}


?>