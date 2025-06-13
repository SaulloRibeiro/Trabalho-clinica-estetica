<?php

include_once('DBconexao.php');
include_once('../models/Usuario.php');

class UsuarioController{

    private $Usuario;
    private $ConexaoBancoDados;

    public function __construct(){
        try{
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }
        catch(Exception $e){
            throw new Exception("Erro ao consultar a base de dados: ".$e->getMessage());
        }
    }

    public function UsuarioESenhaEstaCorreto(Usuario $usuario){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }
        
        $sql = $this->ConexaoBancoDados->prepare("SELECT senha FROM usuarios WHERE email = :nomeUsuario");
        $sql->bindValue(':nomeUsuario', $usuario->getNomeUsuario());
        $sql->execute();

        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        if($resultado && password_verify($usuario->getSenhaUsuario(), $resultado['senha']))
            return true;
        
        return false;
    }





}






?>