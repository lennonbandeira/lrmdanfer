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
	<?php 

            include "../conexao/connection.php";


			if(isset($_GET['id'])) {

				$id = $_GET['id'];

				$con = conecta();

				$sql = "SELECT * FROM cliente WHERE id_cliente = '$id'";

				$resultado = mysqli_query($con, $sql) or die('nao conectou');

				mysqli_close($con);

				$result=mysqli_fetch_assoc($resultado);



			}



	 ?>

	<li><a style="font-size: 25px;" href="listclientes.php">Clique para acessar os Clientes</a></li>


	<form  action="update_cliente.php" method="Post" id="form">
		
		<div class="content">

		<input type="hidden" name="id_cliente" value="<?php echo $result['id_cliente']?>" >
		<label style="color: yellow; font-size: 20px; align-items:">Nome do cliente</label>
		<input type="text" name="nome_cliente" placeholder=" Nome Cliente:" class="input" value="<?php echo $result['nome_cliente']?>">
		<label style="color: yellow; font-size: 20px; align-items:">Razão social</label>
		<input type="text" name="rsocial_cliente" placeholder="Razão Social:" class="input" value="<?php echo $result['r_social']?>"> 
			    <label style="color: yellow; font-size: 20px; align-items:">Bairro</label>
		<input type="text" name="bairro_cliente" placeholder=" Bairro:" class="input" value="<?php echo $result['bairro']?>">
		    <label style="color: yellow; font-size: 20px; align-items:">Endereço</label>	
		<input type="text" name="end_cliente" placeholder=" Endereço:" class="input" value="<?php echo $result['endereco']?>">
	    <label style="color: yellow; font-size: 20px; align-items:">CEP</label>
		<input type="text" name="cep_cliente" placeholder=" CEP:" class="input" value="<?php echo $result['cep']?>">
	    <label style="color: yellow; font-size: 20px; align-items:">Telefone</label>
		<input type="number" name="tel_cliente" placeholder=" Telefone:" class="input" value="<?php echo $result['telefone']?>">
	    <label style="color: yellow; font-size: 20px; align-items:">E-mail</label>		
		<input type="text" name="email_cliente" placeholder=" E-mail:" class="input" value="<?php echo $result['email']?>">
	    <label style="color: yellow; font-size: 20px; align-items:">Responsavel</label>
		<input type="text" name="resp_cliente" placeholder=" Responsável:" class="input" value="<?php echo $result['responsavel']?>">
		<button type="submit" class="butao">Alterar</button>
		</div>
	</form>
</body>
</html>