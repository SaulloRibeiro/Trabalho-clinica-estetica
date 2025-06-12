<?php

class AgendaDisponibilidadeController{

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

    public function consultarDisponibilidade(){
        





    }



}








?>