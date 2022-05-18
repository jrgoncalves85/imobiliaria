<?php
class Cliente
{
    public $id;
    public $nome;
    public $telefone;
    public $email;
    public $senha;
    public $cep;
    public $rua;
    public $numero;
    public $bairro;
    public $cidade;

    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT id, nome, telefone, email
                FROM clientes 
                ORDER BY id";   
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=imobiliaria', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        echo "<pre>";
        print_r($lista);
        echo "</pre>";
        die(); 
        return $lista;       
    }
}