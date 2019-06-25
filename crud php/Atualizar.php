<?php
include_once 'conexao.php';
$cod = $_POST['codigo'];
$desc= $_POST['descricao'];
$quant = $_POST['quantidade'];
$sql "UPDATE * FROM livros SET descricao = '$livro' quantidade = '$quant' WHERE '$cod' = codigo";
$r = mysqli_query($con, $sql);
if($r){
	echo "Atualizado com Sucesso!";
}else{
	echo "Ops ocorreu um erro!";
}?>