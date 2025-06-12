<?php

include_once(__DIR__."/DBconexao.php");
include_once(__DIR__."/../models/Cliente.php");


class ClienteController{

    private $ConexaoBancoDados;

    public function __construct(){
        try{
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }
        catch(Exception $e){
            throw new Exception("Erro ao acessar a o banco de dados: {$e->getMessage()}");
        }

    }

    public function inserirCliente(Cliente $cliente){
        try{
            $sql = $this->ConexaoBancoDados->prepare("INSERT INTO clientes (id_cliente, nome_cliente, telefone_cliente, email_cliente)
            VALUES (DEFAULT, :nome, :telefone, :email)");
            $sql->bindValue(":nome", $cliente->getNome());
            $sql->bindValue(":telefone", $cliente->getTelefone());
            $sql->bindValue(":email", $cliente->getEmail());
            $sql->execute();
        }
        catch(Exception $e){
            throw new Exception("Error em inserir cliente no banco de dados {$e->getMessage()}");
        }
        finally{
            $this->ConexaoBancoDados = null;
        }
    }




}












?>