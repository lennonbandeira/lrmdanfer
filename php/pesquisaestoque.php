<?php 

	include '../conexao/connection.php';

	$con = conecta();

	$acha =$_GET['ordem'];

	$sql = "SELECT * FROM produtos WHERE nome LIKE '%$acha%'";

	$resultado = mysqli_query($con, $sql);

	mysqli_close($con);

	$linhas = mysqli_num_rows($resultado);

	if ($linhas > 0) { ?>
		
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
<?php 

	} else {

		echo "<spam>Nenhum item encontrado!</spam>";
	}


 ?>