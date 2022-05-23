<?php
require_once 'classes/Cidade.php';

$cidade = new Cidade();

$cidade->cidade = $_POST['inputCidade'];

$cidade->inserir();
header('Location: cidade-listar.php');
?>