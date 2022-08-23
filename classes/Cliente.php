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
            $this->carregar();
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

    public function carregar()
    {
        $sql = "SELECT * FROM clientes WHERE id=". $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->nome = $linha['nome'];
        $this->telefone = $linha['telefone'];
        $this->email = $linha['email'];
        $this->senha = $linha['senha'];
        $this->cep = $linha['cep'];
        $this->rua = $linha['rua'];
        $this->numero = $linha['numero'];
        $this->bairro = $linha['bairro'];
        $this->cidade = $linha['cidade'];
    }

    public function atualizar()
    {
        $sql = "UPDATE clientes SET 
                    nome = '$this->nome' ,
                    telefone = '$this->telefone' ,
                    email = '$this->email' ,
                    senha = '$this->senha' ,
                    cep = '$this->cep' ,
                    rua = '$this->rua' ,
                    numero = '$this->numero' ,
                    bairro = '$this->bairro' ,
                    cidade = '$this->cidade'                    
                WHERE id = $this->id ";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=junior', 'root', '');
        $conexao->exec($sql);
    }

}