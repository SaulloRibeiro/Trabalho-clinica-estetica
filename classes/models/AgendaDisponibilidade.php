<?php

class AgendaDisponibilidade{
    private $Id;
    private $Data;
    private $Horario;
    private $ProcedimentoId;

    public function __construct($data, $horario, $procedimentoId,$id=null){
        $this->Id = $id;
        $this->Data = $data;
        $this->Horario = $horario;
        $this->ProcedimentoId = $procedimentoId;
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

    public function getProcedimentoId(){
        return $this->ProcedimentoId;
    }

    public function setProcedimentoId($procedimentoId){
        $this->ProcedimentoId = $procedimentoId;
    }

}

?>