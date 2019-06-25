<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
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
	<div id="divCenter">
	<h1 align="center">cadastro</h1>

	<form method="POST" action="inserir.php" class="formulario">
    Código:<br><input type="text" name="codigo" id="codigo" size="15" /><br><br>	
    Descrição: <input type="text" name="descricao" id="descricao" size="15"/><br><br>
    Quantidade: <input type="text" name="quantidade" id="quantidade" size="15"/><br><br>
     
 
    <p><input type="submit" name="cadastrar-se" value="cadastrar-se"/>
	<button><a href="index.php">Voltar</a></button></p>

<?php
          include_once "conexao.php";
          if(isset($_POST['cadastrar-se'])){
              $codigo = $_POST['codigo'];
              $descricao = $_POST['descricao'];
              $quantidade = $_POST['quantidade'];
              mysqli_query($con,"INSERT INTO alunos (codigo, descricao, quantidade)VALUES('$codigo', '$descricao', '$quantidade')");
              mysqli_close($con);
          }
        ?>

</form>
</div>
</body>
</html>
