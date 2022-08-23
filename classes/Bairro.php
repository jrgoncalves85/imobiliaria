<?php
class Bairro
{
    public $id;
    public $bairro;
    public $cidade_id;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, bairro, cidade_id
                FROM bairros
                ORDER BY id";  
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO bairro (bairro) VALUES (
            '" . $this->bairro . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql); 
    }

    public function excluir()
    {
        $sql = "DELETE FROM bairro WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql); 
    }
}