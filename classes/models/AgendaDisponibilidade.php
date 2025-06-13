<?php

class AgendaDisponibilidade{
    private $Id;
    private $Data;
    private $Horario;
    private $NomeProcedimento;

    public function __construct($data, $horario, $nomeProcedimento,$id=null){
        $this->Id = $id;
        $this->Data = $data;
        $this->Horario = $horario;
        $this->NomeProcedimento = $nomeProcedimento;
    }

    public function getId(){
        return $this->Id;
    }

    public function setId($id){
        $this->Id = $id;
    }

    
    public function getData(){
        return $this->Data;
    }

    public function setData($data){
        $this->Data = $data;
    }

    public function getHorario(){
        return $this->Horario;
    }

    public function setHorario($horario){
        $this->Horario = $horario;
    }

    public function getNomeProcedimento(){
        return $this->NomeProcedimento;
    }

    public function setProcedimento($nomeProcedimento){
        $this->NomeProcedimento = $nomeProcedimento;
    }

}

?>