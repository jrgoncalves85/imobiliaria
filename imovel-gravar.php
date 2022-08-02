<?php
require_once 'classes/Imovel.php';

$imovel = new Imovel();

$imovel->titulo = $_POST['inputTitulo'];

if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0){
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nomeImagem = $_FILES['arquivo']['name'];
    $extensao = strrchr($nomeImagem, '.');
    $extensao = strtolower($extensao);
    if(strstr('.jpg;.jpeg;.gif;.png', $extensao)){
        $novoNome = md5(microtime()) .$extensao; ;
        $destino = 'uploads/' . $novoNome; 
        @move_uploaded_file($arquivo_tmp, $destino);
        $imovel->imagem = $novoNome;
    }
}

$imovel->inserir();
header('Location: imovel-listar.php');
?> 