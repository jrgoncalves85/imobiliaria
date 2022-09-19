<?php
require_once 'classes/Bairro.php';

$bairro = new Bairro();

$bairro->bairro = $_POST['inputBairro'];
$bairro->cidade_id = $_POST['selectCidade'];

$bairro->inserir();
header('Location: bairro-listar.php');
?>