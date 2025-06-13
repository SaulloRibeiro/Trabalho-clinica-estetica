<?php

include_once(__DIR__."/../controller/DBconexao.php");
include_once(__DIR__."/../models/AgendaDisponibilidade.php");


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

    public function inserirDisponibilidade($disponibilidade){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }

        try{
            $sql = $this->ConexaoBancoDados->prepare("INSERT INTO agendadisponibilidades 
            (id_agendaDisponibilidade, data_disponivel, horario_disponivel, procedimento_id)
            VALUES (DEFAULT, :dataDisponivel, :horarioDisponivel, :procedimentoId)");
            $sql->bindValue(":dataDisponivel", $disponibilidade->getData());
            $sql->bindValue(":horarioDisponivel", $disponibilidade->getHorario());
            $sql->bindValue(":procedimentoId", $disponibilidade->getProcedimentoId());
            $sql->execute();
        }

        catch(Exception $e){
            throw new Exception("Erro em inserir agenda disponibilidade no banco de dados: ${$e->getMessage()}");
        }
        finally{
            $this->ConexaoBancoDados = null;
        }

    }


    public function consultarDisponibilidade($procedimento){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }
        $disponibilidades = [];
        $sql = $this->ConexaoBancoDados->prepare("SELECT * FROM agendadisponibilidades_view WHERE
        nome_procedimento = :procedimento");
        $sql->bindValue(":procedimento", $procedimento);
        $sql->execute();
        
        while($resultado = $sql->fetch(PDO::FETCH_ASSOC)){
            $idAgendaDisponivel = $resultado['id_agendaDisponibilidade'];
            $dataDisponivel = $resultado['data_disponivel'];
            $horarioDisponivel = $resultado['horario_disponivel'];
            $nomeProcedimento = $resultado['nome_procedimento'];
            $disponibilidade = new AgendaDisponibilidade($dataDisponivel, $horarioDisponivel, $nomeProcedimento, $idAgendaDisponivel);
            array_push($disponibilidades, $disponibilidade);
        }

        $this->ConexaoBancoDados = null;
        return $disponibilidades;
    }

    public function deletarDisponibilidade($procedimentoId, $horarioDisponivel){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }
        
        $sql = $this->ConexaoBancoDados->prepare("DELETE FROM agendaDisponibilidades WHERE
        procedimento_id = :procedimentoId and horario_disponivel = :horario");
        $sql->bindValue(":procedimentoId", $procedimentoId);
        $sql->bindValue(":horario", $horarioDisponivel);
        $sql->execute();
    }

}








?>