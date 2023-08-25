<?php

include ('protecao.php')

?>
<!DOCTYPE html>
<html>
<head>

	<title>você esta logado.</title>

</head>

<body>

		<h1>Bem vindo <?php echo $_SESSION['nome']; ?> você efetuou login com sucesso !</h1>

		<p>
			
			<a href="logout.php"> Sair </a>

		</p> 

</body>

</html>