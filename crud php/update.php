<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Alunos</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		#divCenter{
			 	position: relative;
			 	top: 300px;
			 	margin: 0 auto;
                width: 200px;
                height: 300px;
                background: white;
                background-color: rgba(0,0,0,0.6);
                border-radius: 10px;
                border: 3px green solid;
		}
		.formulario{
			position: absolute;
			left: 30px;
		}
	</style>
</head>
<body>
	<?php 
		
		 include_once "conexao.php";
          if(isset($_POST['Atualizar'])){
              @$codigo = $_POST['codigo'];
              @$descricao = $_POST['descricao'];
              @$quantidade = $_POST['quantidade'];
             @$antigo = $_POST['antigo'];

		$r = mysqli_query($con, "UPDATE livros SET descricao = '$descricao', codigo = $codigo, quantidade = '$quantidade' WHERE codigo = $antigo");
		if($r){
			echo "<script>alert('Editado com sucesso');location.href='listar.php';</script>";
		}else{
			echo "<script>alert('Erro ao editar');location.href='listar.php';</script>";
		}
		}

		?>
	<div id="divCenter">
	<h1 align="center">Atualizar-se Livros</h1>

	<form method="post" class="formulario">
     <input type="text" name="codigo" id="codigo" size="15" value="<?php echo $_GET['id']?>"/><br><br>	
     <input type="text" name="descricao" id="descricao" size="15" value="<?php echo $_GET['descricao']?>"/><br><br>
     <input type="text" name="quantidade" id="quantidade" size="15" value="<?php echo $_GET['quantidade']?>"/><br><br>
     
     <input hidden="true" type="text" name="antigo" value="<?php echo $_GET['id']?>" />
 
    <p><input type="submit" name="Atualizar" value="Atualizar"/>
	<button><a href="listar.php">Voltar</a></button></p>
</body>
</html>