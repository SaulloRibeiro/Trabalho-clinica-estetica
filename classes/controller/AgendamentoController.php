<?php

include_once(__DIR__."/DBConexao.php");

class AgendamentoController{

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

    public function inserirAgendamento($idCliente, $data, $horario, $nomeProcedimento){
        try{
            $sql = $this->ConexaoBancoDados->prepare("INSERT INTO agendamentos (id_agendamento,cliente_id, procedimento_id, data_agendamento,
            horario_agendado) VALUES (DEFAULT, :cliente, :nomeProcedimento, :dataAgendamento, :horario)");
    
            $sql->bindValue(":cliente", $idCliente);
            $sql->bindValue(":nomeProcedimento", $nomeProcedimento);
            $sql->bindValue(":dataAgendamento", $data);
            $sql->bindValue(":horario", $horario);
            $sql->execute();
        }
        catch(Exception $e){
            throw new Exception("Error em inserir agendamento: {$e->getMessage()}");
        }
        finally{
            $this->ConexaoBancoDados = null;
        }
    }




}








?>