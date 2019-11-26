<?php 

function conecta(){

	$servidor = "localhost";
	$bd="lrm";
	$usuario="root";
	$senha="";

	$con = mysqli_connect($servidor,$usuario,$senha, $bd);


	if ($con) {
		
		return $con;
		
	}else {

		die ("deu erro");
	}
}


 ?>