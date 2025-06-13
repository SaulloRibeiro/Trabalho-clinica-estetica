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

    public function consultarDisponibilidade($procedimento){
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

}








?>