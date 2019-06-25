<?php  

include_once'conexao.php';
$cod = $_POST['codigo'];
$desc = $_POST['descricao'];
@$quant = $_POST['quantidade'];

$sql = "INSERT INTO livros (codigo,descricao,quantidade) VALUES ('$cod','$desc', '$quant')";
$r = mysqli_query($con,$sql);

if($r){
	echo "cadastrado com sucesso";
}else{
	echo "errro ao cadastrar";
}

?>