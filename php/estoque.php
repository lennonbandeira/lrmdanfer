<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastros</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script type="text/javascript" src="../JS/script.js"></script>

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

	include '../conexao/connection.php';

	$con = conecta();

	$sql = "SELECT * FROM produtos";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);

	 ?>

	<section>

		<div style="width: 100%; text-align: center; margin-top: 15px;">
			
			<form method="" action="">

			<input style="margin-bottom: 2px; width: 25%; height: 40px;" name="pesquisar" id="pesquisar" ><button type="button" onclick="search()" class="butao">Pesquisar</button>

			</form>

		</div>

		<table style="font-size: 25px; margin-top: 10px; color: white; width: 100%; background-color: black; background: black;
  border-top: 1px solid yellow;
  border-bottom: 1px solid yellow;" id="troca">
			
			<tr>
				<td>ID:</td>
				<td>nome:</td>
				<td>NCM:</td>
				<td>Valor unitario:</td>
				<td>Observação:</td>
				<td>quantidade:</td>
				<td>fornecedor</td>
			</tr>

			<?php foreach($resultado as $dado){ ?>

			<tr>
				<td><?php echo $dado['id'] ?></td>
				<td> <?php echo $dado['nome'] ?></td>
				<td><?php echo $dado['ncm'] ?></td>
				<td> <?php echo $dado['valor_unitario'] ?></td>
				<td><?php echo $dado['observacao'] ?></td>
				<td> <?php echo $dado['quantidade'] ?></td>
				<td> <?php echo $dado['fornecedor'] ?></td>

				<td><?php echo "<button onclick='editar(".$dado['id'].")'>Editar</button>";?></td>

				<td><?php echo "<button id='excluir' value='excluir' onclick='excluir(".$dado['id'].")'>Excluir</button>"?></td>
				
			</tr> 

		<?php } ?>

		</table>

	</section>


<?php 

if(isset($_GET['delete'])){


$con = conecta();

$deletar = $_GET['delete'];

$sql = "DELETE FROM produtos WHERE id = '$deletar'";

$resultado = mysqli_query($con, $sql);

if ($resultado) {
	
	header('location: estoque.php');
}

mysqli_close($con);

}


 ?>

</body>
</html>