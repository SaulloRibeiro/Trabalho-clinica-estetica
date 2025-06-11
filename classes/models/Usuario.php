<?php

class Usuario{

    private $NomeUsuario;
    private $SenhaUsuario;

    public function __construct($nome, $senha){
        $this->NomeUsuario = $nome;
        $this->SenhaUsuario = $senha;
    }

    public function getNomeUsuario(){
        return $this->NomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario){
        $this->NomeUsuario = $nomeUsuario; 
    }

    public function getSenhaUsuario(){
        return $this->SenhaUsuario;
    }

    public function setSenhaUsuario($senhaUsuario){
        $this->SenhaUsuario = password_hash($senhaUsuario, PASSWORD_DEFAULT);
    }

}

?>