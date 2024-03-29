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
        $sql = "SELECT b.id AS codigo, b.bairro, b.cidades_id, c.id, c.cidade
                FROM bairros b JOIN cidades c
                ON b.cidades_id = c.id
                ORDER BY b.id"; 
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO bairros (bairro, cidades_id) VALUES (
            '" . $this->bairro . "',
            '" . $this->cidade_id ."')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql); 
    }

}