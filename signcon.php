<?php
//inicializar variaveis
	
	$user = "";
	$email = "";
	$senha = "";
	

	// Conexao com a base de dados

	$db = mysqli_connect('127.0.0.1','root','','hamburger');


	// salvar ao clicar o botao
	if (isset($_POST['Enviar'])) {
		$user = $_POST['user'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		//var_dump($user, $email, $senha);

		$query = "INSERT INTO loginuser (user,email,senha ) VALUES ('$user','$email','$senha')";
		mysqli_query($db,$query);
		$_SESSION['msg'] = "usuario adicionado sucesso.";
		header('location: signup.php'); // redirecionar a pagina index apos a insercao

	
			}
	//$results = mysqli_query($db, "SELECT * FROM loginUser");


	
	
?>