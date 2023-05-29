
<?php


	//inicializar variaveis
	$id = 0;
	$descricao= " ";
	$quantidade= 0;
	$preco = 0.0;
	

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
		header('location: form.php'); // redirecionar a pagina index apos a insercao

	
			}
	$results = mysqli_query($db, "SELECT * FROM produtotable");


			$id = 0;
			$apelido = "";
			$nome = "";
			$residencia = "";
			$contacto = 0;
			$email = "";

	if (isset($_POST['Enviar'])) {
		$apelido = $_POST['Apelido'];
		$nome = $_POST['nome'];
		$residencia = $_POST['residencia'];
		$contacto = $_POST['contacto'];
		$email = $_POST['email'];


		$query = "INSERT INTO employeer (id,Apelido,nome,residencia,contacto,email ) VALUES ($id,'$apelido','$nome','$residencia',$contacto,'$email')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "produto salvo com sucesso.";
		header('location: form.php'); // redirecionar a pagina index apos a insercao


			}
			// retrive records
	
	$results = mysqli_query($db, "SELECT * FROM employeer");
?>