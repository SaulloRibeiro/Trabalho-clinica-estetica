<?php
include_once('Procedimento.php');
include_once('Cliente.php');


class Agendamento{
    private $Id;
    private $Cliente;
    private $Procedimento;
    private $Data;
    private $Horario;

    public function __construct($id=null, $cliente, $procedimento, $data, $horario){
        $this->Id = $id;
        $this->Cliente = $cliente;
        $this->Procedimento = $procedimento;
        $this->Data = $data;
        $this->Horario = $horario;
    }

    public function getId(){
        return $this->Id;
    }
    public function setId($id){
        $this->Id = $id;
    }

    public function getCliente(){
        return $this->Cliente;
    }

    public function setCliente($cliente){
        $this->Cliente = $cliente;
    }

    public function getProcedimento(){
        return $this->Procedimento;
    }

    public function setProcedimento($procedimento){
        $this->Procedimento = $procedimento;
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

}


?>