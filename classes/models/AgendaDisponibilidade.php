<?php

include_once('Procedimento.php');


class AgendaDisponibilidade{
    private $Id;
    private $Data;
    private $Horario;
    private $Procedimento;

    public function __construct($id=null, $data, $horario, $procedimento){
        $this->Id = $id;
        $this->Data = $data;
        $this->Horario = $horario;
        $this->Procedimento = $procedimento;
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

    public function getProcedimento(){
        return $this->Procedimento;
    }

    public function setProcedimento($procedimento){
        $this->Procedimento = $procedimento;
    }

}

?>