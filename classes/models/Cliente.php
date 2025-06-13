<?php

class Cliente{
    private $Id;
    private $Nome;
    private $Telefone;
    private $Email;

    public function __construct($nome, $telefone, $email,$id=null){
        $this->Id = $id;
        $this->Nome = $nome;
        $this->Telefone = $telefone;
        $this->Email = $email;
    }

    public function getId(){
        return $this->Id;
    }
    public function setId($id){
        $this->Id = $id;
    }

    public function getNome(){
        return $this->Nome;
    }

    public function setNome($nome){
        $this->Nome = $nome;
    }

    public function getTelefone(){
        return $this->Telefone;
    }

    public function setTelefone($telefone){
        $this->Telefone = $telefone;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function setEmail($email){
        $this->Email = $email;
    }

}

?>