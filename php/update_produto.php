<?php

 include '../conexao/connection.php';


	$con = conecta();

	$id= $_POST['id'];
	$nome_p = $_POST['nome_produto'];
	$valor_p= $_POST['valor_produto'];
	$quantida_p = $_POST['quantida_produto'];
	$obs_p = $_POST['obs_produto'];


	$sql = "UPDATE produtos SET nome ='$nome_p', valor_unitario = '$valor_p', quantidade = '$quantida_p', observacao = '$obs_p' WHERE id = '$id'";

	$resultado = mysqli_query($con, $sql);


	if ($resultado) {
		
		echo "<script>alert('Alterado com sucesso'); window.location = 'estoque.php';</script>";
	}


	mysqli_close($con);




 ?>