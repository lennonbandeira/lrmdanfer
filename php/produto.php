<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produtos</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/produto.css">
	<link rel="stylesheet" type="text/css" href="../css/correcao.css">
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

	<li><a href="estoque.php">Estoque De Produtos</a></li>

	<form  action="produto.php" method="Post" id="form">
		
		<div class="content">
		<input type="number" name="codigo_produto" placeholder="cód. produto:" class="input">
		<input type="text" name="nome_produto" placeholder=" Nome:" class="input">
			
			<?php
			include "../conexao/connection.php";
			$con=conecta();
			$sql5="SELECT * FROM fornecedor";
			$resultado4= mysqli_query($con,$sql5);

			echo "<select name='fornecedor'>";

			foreach($resultado4 as $linha2){

				echo "<option value='" . $linha2['id'] . "'> Fornecedor: " . $linha2['nome'] . "</option>";
			}
			echo "</select>";
		?>

		<input type="number" name="ncm" placeholder=" NCM:" class="input">
		<input type="text" name="valor_produto" placeholder=" Valor Unidade:" class="input"> 
		<input type="number" name="quantida_produto" placeholder=" Quantidade:" class="input">
		<input type="text" name="obs_produto" placeholder=" Observação:" class="input">
		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>

<?php

if (isset($_POST['codigo_produto'])) {

	

	$con = conecta();

	$codigo_p= $_POST['codigo_produto'];
	$nome_p = $_POST['nome_produto'];
	$fornecedor_p= $_POST['fornecedor'];
	$ncm_p = $_POST['ncm'];
	$valor_p= $_POST['valor_produto'];
	$quantida_p = $_POST['quantida_produto'];
	$obs_p = $_POST['obs_produto'];


	$sql = "INSERT INTO produtos (id, nome, ncm, valor_unitario,observacao, quantidade, fornecedor) VALUES ('$codigo_p','$nome_p', '$ncm_p','$valor_p',$obs_p, '$quantida_p', '$fornecedor_p')";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>


</body>
</html>