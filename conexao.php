<?php

		$usuario = 'root';
		$senha = '';
		$database = 'login';
		$host = 'localhost';

		$mysqli = new mysqli($host, $usuario, $senha, $database);

		if ($mysqli->error){
			die("falhar ao conectar ao banco de dados: " . $mysqli->error);
		}

?>