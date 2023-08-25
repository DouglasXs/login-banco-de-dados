<?php

if(!isset($_SESSION)) {
	session_start();
}

if(!isset($_SESSION['id'])){
	die("<h1>você não pode acessar está pagina, você não está logado !!.</h1><h2><a href=\"teste.php\">Fazer Login</a></h2>");
}


?>