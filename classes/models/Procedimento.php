<?php

class Procedimento{
    private $Id;
    private $Nome;
    private $Valor;
    private $Descricao;
    private $NomeImgCorrespondente;
    private $Categoria;

    public function __construct($id = null, $nome, $valor, $descricao, $nomeImgCorrespondente, $categoria){
        $this->Id = $id;
        $this->Nome = $nome;
        $this->Valor = $valor;
        $this->Descricao = $descricao;
        $this->NomeImgCorrespondente = $nomeImgCorrespondente;
        $this->Categoria = $categoria;
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

    public function getValor(){
        return $this->Valor;
    }
    public function setValor($valor){
        $this->Valor = $valor;
    }

    public function getDescricao(){
        return $this->Descricao;
    }
    public function setDescricao($descricao){
        $this->Descricao = $descricao;
    }

    public function getNomeImgCorrespondente(){
        return $this->NomeImgCorrespondente;
    }

    public function setNomeImgCorrespondente($nomeImgCorrespondente){
        $this->NomeImgCorrespondente = $nomeImgCorrespondente; 
    }

    public function getCategoria(){
        return $this->Categoria;
    }

    public function setCategoria($categoria){
        $this->Categoria = $categoria;
    }

}

 
?>