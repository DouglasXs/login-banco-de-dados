<?php

include ('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

	if(strlen($_POST['email']) == 0) {
		echo "prencha seu email";
	}else if(strlen($_POST['senha']) == 0){
		echo "prencha sua senha";
	}else {

		$email = $mysqli->real_escape_string($_POST['email']);
		$senha = $mysqli->real_escape_string($_POST['senha']);

		$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);

		$quantidade = $sql_query->num_rows;

		if ($quantidade == 1) {

			$usuario = $sql_query->fetch_assoc();

			if(!isset($_SESSION)){
				session_start();
			}

			$_SESSION['id'] = $usuario['id'];
			$_SESSION['nome'] = $usuario['nome'];

			header("Location: logado.php");
			
		}else {
			echo "falhar ao logar! e-mail ou senha invalidos";
		}

	}
				
}			

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Banco de Dados</title>
</head>
<body>

	<h1>Faça seu Login abaixo</h1>

	<form action="" method="POST">
		
			<p>
				
				<label>Email</label>
				<input type="text" name="email" maxlength="40">

			</p>

			<p>
				
				<label>Senha</label>
				<input type="password" name="senha" maxlength="15">

			</p>

			<p>
				
				<button type="submit">Entrar</button>

			</p>

	</form>

</body>
</html>