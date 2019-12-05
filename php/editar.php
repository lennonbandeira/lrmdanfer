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


	<?php 

            include "../conexao/connection.php";


			if(isset($_GET['id'])) {

				$id = $_GET['id'];

				$con = conecta();

				$sql = "SELECT * FROM produtos WHERE id = '$id'";

				$resultado = mysqli_query($con, $sql) or die('nao conectou');

				mysqli_close($con);

				$result=mysqli_fetch_assoc($resultado);



			}



	 ?>

	<li><a style="font-size: 25px;" href="estoque.php">Clique para acessar o Estoque</a></li>

	<form  action="update_produto.php" method="Post" id="form">
		
		<div class="content">

	    <input type="hidden" name="id" value="<?php echo $result['id']?>">

		<input type="text" name="nome_produto" placeholder=" Nome:" class="input" value="<?php echo $result['nome']?>">

		<input type="text" name="valor_produto" placeholder=" Valor Unidade:" class="input" value="<?php echo $result['valor_unitario']?>"> 
		<input type="number" name="quantida_produto" placeholder=" Quantidade:" class="input" value="<?php echo $result['quantidade']?>">
		<input type="text" name="obs_produto" placeholder=" Observação:" class="input" value="<?php echo $result['observacao']?>">
		<button type="submit" class="butao">Alterar</button>
		</div>
	</form>


</body>
</html>