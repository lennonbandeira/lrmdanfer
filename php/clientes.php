<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/produto.css">
	<link rel="stylesheet" type="text/css" href="../css/cliente.css">
</head>

<body>

	<header id="main-content">
		
		<img class="image-logo" src="../imagens/logo.jpg">

	</header>

	<nav id="content-nav">
			
		<ul id="list-cadastros">
			
			<li><a href="produto.php">Produtos</a></li>
			<li><a href="pedidos.php">Pedidos</a></li>
			<li><a href="Fornecedor.php">Fornecedores</a></li>
			<li><a href="clientes.php">Clientes</a></li>
			<li><a href="cidades.php">Cidades</a></li>
			<li><a href="vendedores.php">Vendedores</a></li>

		</ul>


	</nav>


	<form  action="clientes.php" method="Post" id="form">
		
		<div class="content">

		<input type="number" name="id_cliente" placeholder="cód. Cliente:" class="input">
		<input type="text" name="nome_cliente" placeholder=" Nome Cliente:" class="input">
		<input type="text" name="rsocial_cliente" placeholder="Razão Social:" class="input">
		<input type="text" name="iestadual_cliente" placeholder=" Inscrição estadual:" class="input">
		<input type="text" name="cnpj_cliente" placeholder=" CNPJ:" class="input"> 
		<input type="text" name="bairro_cliente" placeholder=" Bairro:" class="input">
		<input type="text" name="end_cliente" placeholder=" Endereço:" class="input">
		<input type="text" name="cep_cliente" placeholder=" CEP:" class="input">
		<input type="number" name="tel_cliente" placeholder=" Telefone:" class="input">
		<input type="text" name="email_cliente" placeholder=" E-mail:" class="input">
		<input type="text" name="resp_cliente" placeholder=" Responsável:" class="input">
		<select name="cidade_cliente" id="cidade">
			<?php
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$db = "lrm";
			$conn = mysqli_connect($servidor, $usuario, $senha, $db);

			if (!$conn){
			die();
			}

			$sql = "SELECT * FROM  cidade";
			$resultado = mysqli_query($conn,$sql);
			mysqli_fetch_array($resultado);
			foreach ($resultado as $rows) {
				echo "<option value = '".$rows['id']."'>".$rows['nome']."</option>";
			}
			?>
		</select>
		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>

	<?php

if (isset($_POST['nome_cliente'])) {

	include "../conexao/connection.php";

	$con = conecta();

	$codigo_cli= $_POST['id_cliente'];
	$nome_cli = $_POST['nome_cliente'];
	$rsocial_cli= $_POST['rsocial_cliente'];
	$iestadual_cli = $_POST['iestadual_cliente'];
	$cnpj_cli= $_POST['cnpj_cliente'];
	$bairro_cli = $_POST['bairro_cliente'];
	$end_cli = $_POST['end_cliente'];
	$cep_cli = $_POST['cep_cliente'];
	$tel_cli = $_POST['tel_cliente'];
	$email_cli = $_POST['email_cliente'];
	$resp_cli = $_POST['resp_cliente'];
	$cidade_cli = $_POST['cidade_cliente'];


	$sql = "INSERT INTO cliente (id_cliente, nome_cliente, r_social, inscricao,cnpj, bairro, endereco, cep, telefone, email, responsavel, FK_cidade_id) VALUES ('$codigo_cli','$nome_cli', '$rsocial_cli','$iestadual_cli',$cnpj_cli, '$bairro_cli', '$end_cli', '$cep_cli', '$tel_cli', '$email_cli', '$resp_cli', '$cidade_cli')";
   print_r($sql);
	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>

</body>
</html>