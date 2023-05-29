<?php
//inicializar variaveis
	$id = 0;
	$descricao= " ";
	$quantidade= 0;
	$preco = 0.0;
	$data="";
	

	// Conexao com a base de dados

	$db = mysqli_connect('127.0.0.1','root','','hamburger');


	// salvar ao clicar o botao
	if (isset($_POST['Enviar'])) {
		$descricao = $_POST['descricao'];
		$quantidade = $_POST['quantidade'];
		$preco = $_POST['preco'];


		$query = "INSERT INTO produtotable (descricao,quantidade,preco ) VALUES ('$descricao', $quantidade,$preco)";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "produto salvo com sucesso.";
		header('location: stock.php'); // redirecionar a pagina index apos a insercao

	
			}
	$results = mysqli_query($db, "SELECT * FROM produtotable");


	
	
?>