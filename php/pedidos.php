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
	
		<div id="junta">
			<select name="cliente_fk" id="Cliente:" class="input">
				<?php
					
					include "../conexao/connection.php";

				$con = conecta();

				$sql2 = "SELECT * FROM cliente";

				$resultado = mysqli_query($con, $sql2);

				mysqli_fetch_array($resultado);

				foreach ($resultado as $row) {
					echo "<option hidden selected>Clientes</option>
					<option value = '".$row['id_cliente']."'>".$row['nome_cliente']."</option>";
				}
				?>
			</select>
			
		<?php
			$con=conecta();
			$sql4="SELECT * FROM produtos";
			$resultado3= mysqli_query($con,$sql4);
			echo "<select name='prod_pe' class='input'>";
			foreach($resultado3 as $linha1){
			echo "<option hidden selected>Produtos</option>
				<option value='" . $linha1['id'] . "'>" . $linha1['nome'] . "</option>";
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
			echo "<select name='vend_pe' class='input'>";
			foreach($resultado2 as $linha){
				echo "<option hidden selected >Vendedores</option>
				<option value='" . $linha['ID'] . "'>" . $linha['nome'] . "</option>";
			}
			echo "</select>";
		?> 
		<input type="date" name="data" placeholder=" Data do pedido:" class="input">
		<button type="submit" class="butao">Adicionar</button>
		</div>
	</form>
	<?php

if (isset($_POST['cliente_fk'])) {

	$con = conecta();
	$quantida_p = $_POST['quant_prod'];
	$valor_vp = $_POST['valor_prod'];
	$client = $_POST ['cliente_fk'];
	$prod1 = $_POST ['prod_pe'];
	$valor_tt = $_POST['valor_t'];
	$vendd= $_POST ['vend_pe'];
	$dt_pe = $_POST['data'];	
	
	

	$sql = "INSERT INTO pedido (quantidade,valor, FK_cliente_id, FK_produtos_id, valor_total, FK_vendedor_id, data) VALUES ('$quantida_p', '$valor_vp','$client', '$prod1', '$valor_tt', '$vendd', '$dt_pe')";

	$resultado = mysqli_query($con, $sql);

	if ($resultado) {
		
		echo "<script>alert('cadastrado com sucesso')</script>";
	}



	$sql1 = "UPDATE produtos SET produtos.quantidade = produtos.quantidade - $quantida_p WHERE produtos.id = $prod1";
	$resultado1 = mysqli_query($con, $sql1);

	mysqli_close($con);


}

 ?>

</body>
</html>