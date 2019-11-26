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
		<input type="text" name="CEP_cliente" placeholder=" CEP:" class="input">
		<input type="number" name="tel_cliente" placeholder=" Telefone:" class="input">
		<input type="text" name="email_cliente" placeholder=" E-mail:" class="input">
		<input type="text" name="resp_cliente" placeholder=" Responsável:" class="input">
		<input type="text" name="cidade_cliente" placeholder=" cidade" class="input">
		
		
		<select name="cidade_cliente" class="input"> 
		
		</select>

		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>

	<?php

if (isset($_POST['codigo_produto'])) {

	include "../conexao/connection.php";

	$con = conecta();

	$codigo_p= $_POST['codigo_produto'];
	$nome_p = $_POST['nome_produto'];
	$fornecedor_p= $_POST['fornecedor_produto'];
	$ncm_p = $_POST['ncm'];
	$valor_p= $_POST['valor_produto'];
	$quantida_p = $_POST['quantida_produto'];
	$obs_p = $_POST['obs_produto'];


	$sql = "INSERT INTO cliente (id, nome, ncm, valor_unitario,observacao, quantidade) VALUES ('$codigo_p','$nome_p', '$ncm_p','$valor_p',$obs_p, '$quantida_p')";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>

</body>
</html>