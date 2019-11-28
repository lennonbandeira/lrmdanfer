<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pedidos</title>
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

	<form  action="pedidos.php" method="Post" id="form">
		
		<div class="content">
		<input type="number" name="id_ped" placeholder=" ID" class="input">
			<select name="cliente_fk" id="Cliente:">
				<?php
				$servidor = "localhost";
				$usuario = "root";
				$senha = "";
				$db = "lrm";
				$conn = mysqli_connect($servidor, $usuario, $senha, $db);

				if (!$conn){
				die();
				}

				$sql2 = "SELECT * FROM cliente";
				$resultado = mysqli_query($conn, $sql2);
				mysqli_fetch_array($resultado);
				foreach ($resultado as $row) {
					echo "<option value = '".$row['id_cliente']."'>".$row['nome_cliente']."</option>";
				}
				?>
			</select>
			
		<select name="tipo_ped" id="tipo">
			<option value= "entrada">Entrada</option>
			<option value= "saida">Saida</option>
			
		</select>
		<input type="number" name="quant_prod" placeholder="quantidade" class="input">
		<input type="text" name="valor_ped" placeholder="Valor:" class="input">
		<input type="number" name="fornecedor_ped" placeholder=" Fornecedor" class="input">	
		<input type="text" name="tipo_ped" placeholder=" Tipo:" class="input">
		<input type="number" name="valor_ped" placeholder=" Valor Unidade:" class="input"> 
		<input type="text" name="obs_ped" placeholder=" Observação:" class="input">
		<button type="submit" class="butao">Cadastrar</button>
		</div>
	</form>
	<?php

if (isset($_POST['codigo_produto'])) {

	include "../conexao/connection.php";

	$con = conecta();

	$codigo_pe= $_POST['codigo_ped'];
	$nome_pe = $_POST['nome_ped'];
	$tipo_pe= $_POST['tipo_ped'];
	$valor_pe= $_POST['valor_ped'];
	$quantida_p = $_POST['quantida_produto'];
	$obs_pe = $_POST['obs_ped'];


	$sql = "INSERT INTO produtos (id, tipo,valor,observacao, quantidade) VALUES ('$codigo_p','$nome_p', '$ncm_p','$valor_p',$obs_p, '$quantida_p')";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>

</body>
</html>