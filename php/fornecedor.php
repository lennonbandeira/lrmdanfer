<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>fornecedores</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/produto.css">
	
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

	<form  action="fornecedor.php" method="Post" id="form">
		
		<div class="content">
		<input type="text" name="id_forne" placeholder=" ID" class="input">
		<input type="text" name="nome_forne" placeholder=" Nome:" class="input">
		<input type="text" name="cnpj_forne" placeholder="CNPJ" class="input"> 
		<input type="text" name="email_forne" placeholder=" E-mail:" class="input">
		<input type="number" name="tel_forne" placeholder=" Telefone:" class="input">
		
		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>
	<?php

if (isset($_POST['nome_forne'])) {

	include "../conexao/connection.php";

	$con = conecta();

	$codigo_f= $_POST['id_forne'];
	$nome_f = $_POST['nome_forne'];
	$cnpj_f= $_POST['cnpj_forne'];
	$email_f= $_POST['email_forne'];
	$tel_f = $_POST['tel_forne'];
	//$cidade_f = $_POST['cidade_forne'];
	


	$sql ="INSERT INTO fornecedor (id, nome, cnpj, email, telefone) VALUES ('$codigo_f','$nome_f', '$cnpj_f', '$email_f', '$tel_f')";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>

</body>
</html>