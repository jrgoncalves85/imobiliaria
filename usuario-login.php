<?php
$usuario = $_POST["user"];
$senha = $_POST["password"];

$sql = "SELECT * FROM usuarios WHERE user='$usuario' and password='$senha'";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
$resultado = $conexao->query($sql);
$logado = $resultado->fetch();
$user_logado = $logado['email'];

if ($logado == null) {
	// Usuário ou senha inválida
	header('Location: usuario-erro.php');
} 
else {
	session_start();
	$_SESSION['usuario_logado'] = $user_logado;	
    echo "Usuário Logado<br> Session_id: ".$_SESSION['usuario_logado'];
	header('Location: painel.php');
}

die();
?>