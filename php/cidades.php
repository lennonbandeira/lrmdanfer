<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cidades</title>
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

	<li><a style="font-size: 25px;" href="listcidades.php">Clique para acessar as cidades</a></li>

	<form  action="cidades.php" method="Post" id="form">
		
		<div class="content">
		<input type="number" name="id_cid" placeholder="id Cidade:" class="input">
		<input type="text" name="nome_cid" placeholder=" Cidade:" class="input">
		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>
	<?php

if (isset($_POST['id_cid'])) {

	include "../conexao/connection.php";

	$con = conecta();

	$nome_c= $_POST['nome_cid'];
	$id_c = $_POST['id_cid'];
	


	$sql = "INSERT INTO cidade (id, nome) VALUES ('$id_c','$nome_c')";

	$resultado = mysqli_query($con, $sql);
	if ($resultado) {
		
		echo "<script>alert('cadastrado com sucesso')</script>";
	}


	mysqli_close($con);



}

 ?>

</body>
</html>