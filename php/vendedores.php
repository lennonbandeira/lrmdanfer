<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vendedores</title>
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

<li><a style="font-size: 25px;" href="listvendedores.php">Clique para acessar os vendedores</a></li>

	<form  action="vendedores.php" method="Post" id="form">
		
		<div class="content">
		<input type="number" name="id_vend" placeholder="ID vendedor:" class="input">
		<input type="text" name="nome_vend" placeholder=" Nome:" class="input">
		

		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>
	<?php

if (isset($_POST['id_vend'])) {

	include "../conexao/connection.php";

	$con = conecta();

	$id_v= $_POST['id_vend'];
	$nome_v = $_POST['nome_vend'];
	


	$sql = "INSERT INTO vendedor (id, nome) VALUES ('$id_v','$nome_v')";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>

</body>
</html>