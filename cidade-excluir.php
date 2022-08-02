<?php 
require_once 'classes/Cidade.php';

$id = $_GET['id'];
$cidade = new Cidade($id);
$cidade->excluir();

header('Location: cidade-listar.php');
?> 