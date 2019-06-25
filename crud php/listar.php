<!DOCTYPE html>
<html>
<head>
	<title>Visualizar aluno</title>
	<meta charset="utf-8"/>
	<style type="text/css">sss
		a{
			text-decoration: none;	
		}
		#campo{
                position: relative;
                width: 700px;
                height: 600px;
                left: 50%;
                margin-left: -350px;
                padding-top: 30px;
                background: white;
                background-color: rgba(0,0,0,0.6);
                font-family:border-color: black;
                border-radius: 10px;
                border: 3px green solid;
		}
		#bt{
			margin-left: 45%;
				top: -2%	
		}
	</style>
</head>
<body>

				<?php include_once('conexao.php');?>
				<div id="campo">
				<table border="1px" align="center">
					<tr>
						<td colspan="5" align="center">Lista de Livros</td>
					</tr>
				<tr>
					<td align="center">Código</td>
					<td align="center">Descrição</td>
					<td align="center">Quantidade</td>
					<td align="center">Excluir</td>
					<td align="center">Editar</td>
				</tr>
				<button id="bt"><a href="index.php">Voltar</a></button>
						
			

	<?php
	include_once('conexao.php');
	@$excluir = $_GET['excluir'];

		$r = mysqli_query($con, "DELETE FROM livros where codigo = $excluir");
		if($r){
			echo "<script>location.href='listar.php';</script>";

		}


	$sql = "SELECT * FROM livros";

	$r = mysqli_query($con, $sql);
	if($r){
		while ($result=mysqli_fetch_array($r)){?>
		<tr>
			<td><?php echo $result['codigo'];?></td>
			<td><?php echo $result['descricao'];?></td>
			<td><?php echo $result['quantidade'];?></td>
			<td width="60px"><a href="?excluir=<?php echo $result['codigo']; ?>" onclick="return confirm('Deseja Realmente Excluir?');">Excluir</td>
			<td><a href="update.php?id=<?php echo $result['codigo'];?>&descricao=<?php echo $result['descricao']; ?>&quantidade=<?php echo $result['quantidade']; ?>" onclick="return confirm('Deseja Realmente atualizar?');"> Editar</td>
		</tr>

			<?php
		}
	}
			?>
</table>


</div>
</body>
</html>