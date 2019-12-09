<?php

 include '../conexao/connection.php';


	$con = conecta();

	$codigo_cli= $_POST['id_cliente'];
	$nome_cli = $_POST['nome_cliente'];
	$rsocial_cli= $_POST['rsocial_cliente'];
	$bairro_cli = $_POST['bairro_cliente'];
	$end_cli = $_POST['end_cliente'];
	$cep_cli = $_POST['cep_cliente'];
	$tel_cli = $_POST['tel_cliente'];
	$email_cli = $_POST['email_cliente'];
	$resp_cli = $_POST['resp_cliente'];



	$sql = "UPDATE cliente SET nome_cliente ='$nome_cli', r_social = '$rsocial_cli', bairro = '$bairro_cli', endereco = '$end_cli', cep = '$cep_cli', telefone = '$tel_cli', email = '$email_cli', responsavel = '$resp_cli' WHERE id_cliente = '$codigo_cli'";

	$resultado = mysqli_query($con, $sql);


	if ($resultado) {
		
		echo "<script>alert('Alterado com sucesso'); window.location = 'listclientes.php';</script>";
	}


	mysqli_close($con);




 ?>