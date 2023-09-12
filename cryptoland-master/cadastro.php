<?php

	include("conexao.php");
	$nome =$_POST['nome'];
	// $descricao=$_POST['descricao'];
	// $valor = floatval(str_replace(',', '.', $_POST['valor']));
	// $totalVendas = floatval($_POST['totalVendas']);
	
	
	$sql="INSERT INTO teste(nome)	VALUES ('$nome')";
	 if(mysqli_query($conexao, $sql)){
	 	 header("location: index.php");
		// echo "Cadastrado com sucesso";
	 }else{
	 	echo "Erro". mysqli_connect_error($conexao);
	 }

	// $sql="INSERT INTO cadastro(descricao, valor )
	// VALUES ('$descricao', '$valor' )";
	// if(mysqli_query($conexao, $sql)){
	// 	header("location: index.php");
	// }else{
	// 	echo "Erro". mysqli_connect_error($conexao);
	// }


	mysqli_close($conexao);
?>