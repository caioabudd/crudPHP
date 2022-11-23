<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['email'])) {

	if(strlen($_POST['email']) == 0){
		echo "Preencha seu e-mail";
	} else if(strlen($_POST['senha']) == 0) {
		echo "Preencha sua senha";
	} else {

		$email = $mysqli->real_escape_string($_POST['email']);
		$senha = $mysqli->real_escape_string($_POST['senha']);

		$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha' ";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);

		$quantidade = $sql_query->num_rows;

		if($quantidade == 1) {
			$usuario = $sql_query->fetch_assoc();

			if(!isset($_SESSION)) {
				session_start();
			}
			$_SESSION['id'] = $usuario['id'];
			$_SESSION['nome'] = $usuario['nome'];

			header("Location: painel.php");

		} else {
			echo "Falha ao logar! Email ou senha incorretos";
		}

	}


	}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<title>Login</title>
</head>
<body>
	<div class="container">
	<h1>Acesse sua conta</h1>
	<form action="" method="POST">
		<p class="email">
			<Label>E-mail</Label>
			<input type="text" name="email">

		</p>
		<p class="senha">
			<Label>Senha</Label>
			<input type="password" name="senha">
			
		</p>
		<p class="btn">
			<button type="submit">Entrar</button>
		</p>

	</form>
	</div>
</body>
</html>