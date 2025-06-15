<?php
include_once('Procedimento.php');
include_once('Cliente.php');


class Agendamento{
    private $Id;
    private $Cliente;
    private $ProcedimentoNome;
    private $Data;
    private $Horario;

    public function __construct($cliente, $procedimentoNome, $data, $horario, $id=null){
        $this->Id = $id;
        $this->Cliente = $cliente;
        $this->ProcedimentoNome = $procedimentoNome;
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

    public function setCliente($clienteNome){
        $this->Cliente = $clienteNome;
    }

    public function getProcedimento(){
        return $this->ProcedimentoNome;
    }

    public function setProcedimento($procedimentoNome){
        $this->ProcedimentoNome = $procedimentoNome;
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