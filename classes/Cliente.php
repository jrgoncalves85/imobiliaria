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
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;       
    }

    public function inserir()
    {
        $sql = "INSERT INTO clientes (nome, telefone, email, senha, cep, rua, numero, bairro, cidade) VALUES (
            '" . $this->nome . "', 
            '" . $this->telefone . "', 
            '" . $this->email . "',
            '" . $this->senha . "',
            '" . $this->cep . "',
            '" . $this->rua . "',
            '" . $this->numero . "',
            '" . $this->bairro . "',
            '" . $this->cidade . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql); 
    }

    public function excluir()
    {
        $sql = "DELETE FROM clientes WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql); 
    }
}