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
		<input type="number" name="id_ped" placeholder="Numero do pedido:" class="input">
		<div id="junta">
			<select name="cliente_fk" id="Cliente:">
				<?php
					
					include "../conexao/connection.php";

				$con = conecta();

				$sql2 = "SELECT * FROM cliente";

				$resultado = mysqli_query($con, $sql2);

				mysqli_fetch_array($resultado);

				foreach ($resultado as $row) {
					echo "<option value = '".$row['id_cliente']."'> Cliente: ".$row['nome_cliente']."</option>";
				}
				?>
			</select>
			
		<select name="tipo_ped" id="tipo">
			<option value= "entrada">Entrada</option>
			<option value= "saida">Saida</option>
			
		</select>
		<?php
			$con=conecta();
			$sql4="SELECT * FROM produtos";
			$resultado3= mysqli_query($con,$sql4);
			echo "<select>";
			foreach($resultado3 as $linha1){
				echo "<option value='" . $linha1['id'] . "'>Produto: " . $linha1['nome'] . "</option>";
			}
			echo "</select>";
		?>
	</div>
		<input type="number" name="quant_prod" placeholder="quantidade" class="input">
		
		<input type="number" name="valor_prod" placeholder=" Valor Unidade:" class="input">
		
		<input type="text" name="valor_t" placeholder="Valor total:" class="input">
		<?php
			$con=conecta();
			$sql3="SELECT * FROM vendedor";
			$resultado2= mysqli_query($con,$sql3);
			echo "<select>";
			foreach($resultado2 as $linha){
				echo "<option value='" . $linha['ID'] . "'>Vendedor: " . $linha['nome'] . "</option>";
			}
			echo "</select>";
		?> 
		<input type="date" name="data" placeholder=" Data do pedido:" class="input">
		<button type="submit" class="butao">Adicionar</button>
		</div>
	</form>
	<?php

if (isset($_POST['codigo_produto'])) {

	$con = conecta();

	$codigo_pe= $_POST['codigo_ped'];
	$nome_pe = $_POST['nome_ped'];
	$tipo_pe= $_POST['tipo_ped'];
	$quantida_p = $_POST['quantida_prod'];
	$valor_vp = $_POST['valor_prod'];
	$valor_tt = $_POST['valor_t'];
	$dt_pe = $_POST['data'];


	$sql = "INSERT INTO produtos (id, quantidade,valor, FK_fornecedor_id, FK_cliente_id, FK_produtos_id, valor_total, FK_vendedor_id, data) VALUES ('$codigo_pe','$quantida_p', '$valor_vp','Null',$'nome_pe', '$')";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);



}

 ?>

</body>
</html>