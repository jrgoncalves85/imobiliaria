<?php
class Imovel
{
    public $id;
    public $titulo;
    public $imagem;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }

    public function listar()
    {
        $sql = "SELECT id, titulo, imagem
                FROM imoveis2
                ORDER BY id";            
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;

    }

    public function inserir()
    {
        $sql = "INSERT INTO imoveis2 (titulo, imagem) VALUES (
            '" . $this->titulo . "', 
            '" . $this->imagem . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql); 
    }


}